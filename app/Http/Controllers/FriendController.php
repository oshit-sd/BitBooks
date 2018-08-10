<?php

namespace App\Http\Controllers;

use App\Notifications;
use Auth;
use App\Friends;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FriendController extends Controller
{

    public function sendRequest(Request $request)
    {
        $data = $request->all();

        Friends::create($data);
        return redirect('/Find-friends');
    }

    public function sendRequestTimeline(Request $request)
    {
        $data = $request->all();
        Friends::create($data);
        return back();
    }



    public function findFriends()
    {
//        $status = User::all();
        $userid=Auth::user()->id;

        $frndd = DB::table('informations')->where('u_id', $userid)->get();

        $friend = DB::table('informations')->where('id', '!=', $userid)->orderBy('id','DESC')->get();

        return view('/people.peoples')->with(['Findfriend' => $friend,'friend' => $frndd]);
    }




    public function showRequest()
    {
        $userid=Auth::user()->id;

        $frndd = DB::table('informations')->where('u_id', $userid)->get();

        $frnd = DB::table('informations')->where('id', '!=', $userid)->orderBy('id','DESC')->get();

        $RequestFriend = DB::table('friends')
            ->leftJoin('informations', 'informations.u_id', '=', 'friends.user_id')
            ->where('accepted', 0)
            ->where('friends.friend_id', '=', $userid)->get();


        return view('/show_request_friends.show_request_friend', compact('RequestFriend'))->with(['friend'=>$frndd,'friended'=>$frnd]);

//            return view('/show_request_friends.show_request_friend')->with(['request' => $requestd,'friend' => $friend]);

    }

    public function Reject($id){
        $userid = Auth::user()->id;
         DB::table('friends')
            ->where('friend_id', $userid)
            ->where('user_id', $id)
            ->delete();
        return back()->with('msg','Request has been reject successfully');
    }

    public function RejectTimeline($id){
        $userid = Auth::user()->id;
        DB::table('friends')
            ->where('friend_id', $userid)
            ->where('user_id', $id)
            ->delete();
        return redirect('/Friend-timeline/'.$id)->with('msg','Request has been reject successfully');
    }

     public function unFriend($id){
            $userid = Auth::user()->id;
             DB::table('friends')
                ->where('friend_id', $userid)
                ->where('user_id', $id)
                ->delete();
            return back()->with('msgs','Unfriend Successfully ');
        }

     public function unFriendTimeline($id){
                $userid = Auth::user()->id;
                 DB::table('friends')
                    ->where('friend_id', $userid)
                    ->where('user_id', $id)
                    ->delete();
                return redirect('/Friend-timeline/'.$id)->with('msgs','Unfriend Successfully ');
            }


    public function confirmFriend($id, $u_name)
    {
        $friend = DB::table('informations')->orderBy('id','DESC')->get();

        $userid = Auth::user()->id;

        $check = Friends::where('user_id', $id)
            ->where('friend_id', $userid)
            ->first();

        if ($check){
            $update = DB::table('friends')
                ->where('user_id', $id)
                ->where('friend_id', $userid)
                ->update(['accepted' => 1]);

            $AddNoti = new Notifications;
            $AddNoti->user_id  = $userid;
            $AddNoti->friend_id  = $id;
            $AddNoti->status  = '1';
            $AddNoti->note  = 'accepted your friend request';
            $AddNoti->save();

           if ($update){
               return redirect('/My-friends')->with('message','You are now friend with' .' '. $u_name ,['friend' => $friend]);
           }
        }
        else{
            return redirect('/Show-request')->with('message', 'You are not friend with' ,['friend' => $friend]);
        }

    }

     public function confirmTimelineFriend($id, $u_name)
        {
            $friend = DB::table('informations')->orderBy('id','DESC')->get();

            $userid = Auth::user()->id;

            $check = Friends::where('user_id', $id)
                ->where('friend_id', $userid)
                ->first();

            if ($check){
                $update = DB::table('friends')
                    ->where('user_id', $id)
                    ->where('friend_id', $userid)
                    ->update(['accepted' => 1]);

                $AddNoti = new Notifications;
                $AddNoti->user_id  = $userid;
                $AddNoti->friend_id  = $id;
                $AddNoti->status  = '1';
                $AddNoti->note  = 'accepted your friend request';
                $AddNoti->save();

               if ($update){
                   return redirect('/MyFriend-timeline/'.$id)->with('message','You are now friend with' .' '. $u_name ,['friend' => $friend]);
               }
            }
            else{
                return redirect('/Show-request')->with('message', 'You are not friend each other' ,['friend' => $friend]);
            }

        }



    public function showMyFriend()
    {
        $userid = Auth::user()->id;

        $friends1 = DB::table('friends')
            ->leftJoin('informations', 'informations.u_id', '=', 'friends.user_id')
            ->where('accepted', 1)
            ->where('friend_id', $userid)
            ->get();

        $friends2 = DB::table('friends')
            ->leftJoin('informations', 'informations.u_id', '=', 'friends.friend_id')
            ->where('accepted', 1)
            ->where('user_id', $userid)
            ->get();



        $frndd = DB::table('informations')->where('u_id', $userid)->get();

        $myFriend = array_merge($friends1->toArray(),$friends2->toArray());

        return view('/my_friends.friends', compact('myFriend'))->with(['friend'=>$frndd]);

        //return view('/my_friends.friends')->with(['friend' => $friends1,'friend'=>$friends2]);

    }

    public function Notification($id)
    {
        $userid = Auth::user()->id;
        $frndd = DB::table('informations')->where('u_id', $userid)->get();

        $noti = DB::table('notifications')
            ->leftJoin('informations', 'informations.u_id', '=', 'notifications.user_id')
            ->where('notifications.user_id', $id)
            ->where('friend_id', Auth::user()->id)
            ->orderBy('notifications.id', 'desc')
            ->get();

        DB::table('notifications')
            ->where('notifications.user_id', $id)
            ->update(['status' => 0]);

        return view('/notification.notification')->with(['friend'=>$frndd, 'note' => $noti]);
    }

    public function SeeAllNoti($id)
    {
        $userid = Auth::user()->id;
        $frndd = DB::table('informations')->where('u_id', $userid)->get();

        $noti = DB::table('notifications')
            ->leftJoin('informations', 'informations.u_id', '=', 'notifications.user_id')
            ->where('friend_id', Auth::user()->id)
            //->where('status', 1)
            ->orderBy('notifications.id', 'desc')
            ->get();
//        if ($noti){
//            return redirect('/SeeAllNoti')->with('message','You are now friend with',['friend' => $frndd]);
//        }
//            else{
//            return redirect('/SeeAllNoti')->with('message', 'You are not friend each other',['friend' => $frndd]);
//            }
        return view('/notification.see_all_noti')->with(['friend'=>$frndd, 'note' => $noti]);

    }

}
