<?php

namespace App\Http\Controllers;

use App\Information;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class InformationController extends Controller
{

  public function contact()
    {
        $userid=Auth::user()->id;
        $userInfo =  DB::table('informations')->where('u_id', $userid)->get();
        return view('/contact.contact')->with(['friend' => $userInfo]);
    }


    public function index()
    {
        $userid=Auth::user()->id;
        $userInfo =  DB::table('informations')->where('u_id', $userid)->get();

        return view('/timelines.timeline_about')->with(['friend' => $userInfo]);

    }


  
    public function store(Request $request)
    {
        $data = $request->all();
//        dd($data['email']);
        $userid=Auth::user()->id;
        $username=Auth::user()->name;
        DB::table('informations')
            ->where('u_id', $userid)
            ->update(['email' => $data['email'],
                'language' => $data['language'],
                'dob_day' => $data['dob_day'],
                'dob_month' => $data['dob_month'],
                'dob_year' => $data['dob_year'],
                'gender' => $data['gender'],
                'my_city' => $data['my_city'],
                'my_country' => $data['my_country'],
                'about_me' => $data['about_me'],
                'updated_at' =>date('Y-m-d h:m:s') ,

            ]);
        return redirect('/Timeline-edit-profile')->with('message', 'Your information updated successfully ');
    }
    public function storeWork(Request $request)
    {
        $data = $request->all();
//        dd($data['email']);
        $userid=Auth::user()->id;
        $username=Auth::user()->name;
        DB::table('informations')
            ->where('u_id', $userid)
            ->update(['school' => $data['school'],
                'from_school' => $data['from_school'],
                'to_school' => $data['to_school'],
                'description_school' => $data['description_school'],
                'university' => $data['university'],
                'from_uni' => $data['from_uni'],
                'to_uni' => $data['to_uni'],
                'description_uni' => $data['description_uni'],
                'company' => $data['company'],
                'designation' => $data['designation'],
                'from_work' => $data['from_work'],
                'to_work' => $data['to_work'],
                'city_work' => $data['city_work'],
                'description_work' => $data['description_work'],
                'updated_at' =>date('Y-m-d h:m:s') ,
            ]);
        return redirect('/Timeline-edit-work')->with('message', 'Your information updated successfully ');
    }

    public function storeInterest(Request $request)
    {
        $data = $request->all();
//        dd($data['email']);
        $userid=Auth::user()->id;
        $username=Auth::user()->name;
        DB::table('informations')
            ->where('u_id', $userid)
            ->update(['interest' => $data['interest'],
                'updated_at' =>date('Y-m-d h:m:s') ,
            ]);
        return redirect('/Timeline-edit-interest')->with('message', 'Your information updated successfully ');
    }



    public function storeImage(Request $request)
    {
        $userid=Auth::user()->id;
        $userInfo =  DB::table('informations')->where('u_id', $userid)->get();

        $data = $request->all();
        $user_image = DB::table('informations')
            ->where('u_id', $userid)
            ->update(['user_image' => $data['user_image'],
                'updated_at' =>date('Y-m-d h:m:s') ,
            ]);

        if ($request->hasFile('user_image')) {
            $user_image = Input::file('user_image');
            $basename = time() . '.' . $user_image->getClientOriginalExtension();
            $path = public_path() . "/upload/" . $basename;
            $data2 = Image::make($user_image->getRealPath())->save($path);

        }

        DB::table('informations')
            ->where('u_id', $userid)
            ->update(['user_image' => "/upload/" . $basename]);


        return back()->with('message', 'Your profile picture uploaded successfully',['friend' => $userInfo]);
//        return redirect('/timelines.changeProfile')->with(['userInfo' => $userInfo]);
    }



    public function storeCoverPhoto(Request $request)
    {
        $userid=Auth::user()->id;
        $userInfo =  DB::table('informations')->where('u_id', $userid)->get();

        $data = $request->all();
        $user_coverphoto = DB::table('informations')
            ->where('u_id', $userid)
            ->update(['user_coverphoto' => $data['user_coverphoto'],
                'updated_at' =>date('Y-m-d h:m:s') ,
            ]);


        if ($request->hasFile('user_coverphoto')) {
            $user_coverphoto = Input::file('user_coverphoto');
            $basename = time() . '.' . $user_coverphoto->getClientOriginalExtension();
            $path = public_path() . "/upload/" . $basename;
            $data2 = Image::make($user_coverphoto->getRealPath())->save($path);

        }
        DB::table('informations')
            ->where('u_id', $userid)
            ->update(['user_coverphoto' => "/upload/" . $basename]);

        return back()->with('message', 'Your cover picture uploaded successfully', ['friend' => $userInfo]);
    }

    /*Status Friend visit timeline*/
    public function StFriendTimeline($id)
    {
        $userInfo =  DB::table('informations')->where('u_id', $id)->get();
        $status =  DB::table('statuses')->where('u_id', $id)->get();

        return view('/timelines.statusFriend_timelines.stfriend_timeline')->with(['friend' => $userInfo,'myallstatus' => $status]);
    }
    public function StFriendTimelineAbout($id)
    {
        $friendTimeline = DB::table('informations')->where('u_id', $id)->get();

        return view('/timelines.statusFriend_timelines.stfriend_timeline_about')->with(['friend' => $friendTimeline]);
    }

    public function StFriendTimelineAlbum($id)
    {
        $userInfo =  DB::table('informations')->where('u_id', $id)->get();

        return view('/timelines.statusFriend_timelines.stfriend_timeline_album')->with(['friend' => $userInfo]);
    }
    public function StFriendTimelineFriends($id)
    {
        $userInfo =  DB::table('informations')->where('u_id', $id)->get();

        return view('/timelines.statusFriend_timelines.stfriend_timeline_friends')->with(['friend' => $userInfo]);
    }


    /*Add Friend visit timeline*/
    public function FriendTimeline($id)
    {
        $userInfo =  DB::table('informations')->where('u_id', $id)->get();
        $status =  DB::table('statuses')->where('u_id', $id)->get();

        return view('timelines.addFriend_timelines.friend_timeline')->with(['friend' => $userInfo,'myallstatus' => $status]);
    }

    public function FriendTimelineAbout($id)
    {
        $friendTimeline = DB::table('informations')->where('u_id', $id)->get();

        return view('timelines.addFriend_timelines.friend_timeline_about')->with(['friend' => $friendTimeline]);
    }


    public function FriendTimelineAlbum($id)
    {
        $userInfo =  DB::table('informations')->where('u_id', $id)->get();

        return view('/timelines.addFriend_timelines.friend_timeline_album')->with(['friend' => $userInfo]);
    }
     public function FriendTimelineFriends($id)
        {
            $userInfo =  DB::table('informations')->where('u_id', $id)->get();

            return view('/timelines.addFriend_timelines.friend_timeline_friends')->with(['friend' => $userInfo]);
        }



    /*My Friend visit timeline*/
    public function MyFriendTimeline($id)
    {
        $userInfo =  DB::table('informations')->where('u_id', $id)->get();
        $status =  DB::table('statuses')->where('u_id', $id)->get();

        return view('/timelines.myFriend_timelines.myfriend_timeline')->with(['friend' => $userInfo,'myallstatus' => $status]);
    }

    public function MyFriendTimelineAbout($id)
    {
        $friendTimeline = DB::table('informations')->where('u_id', $id)->get();

        return view('timelines.myFriend_timelines.myfriend_timeline_about')->with(['friend' => $friendTimeline]);
    }

    public function MyFriendTimelineAlbum($id)
    {
        $userInfo =  DB::table('informations')->where('u_id', $id)->get();

        return view('/timelines.myFriend_timelines.myfriend_timeline_album')->with(['friend' => $userInfo]);
    }
    public function MyFriendTimelineFriends($id)
    {
        $userInfo =  DB::table('informations')->where('u_id', $id)->get();

        return view('/timelines.myFriend_timelines.myfriend_timeline_friends')->with(['friend' => $userInfo]);
    }


    /*Confirm Friend visit timeline*/
    public function confirmFriendTimeline($id)
    {
        $userInfo =  DB::table('informations')->where('u_id', $id)->get();
        $status =  DB::table('statuses')->where('u_id', $id)->get();
        return view('/timelines.requestFriend_timeline.confirm_friend_timeline')->with(['friend' => $userInfo,'myallstatus' => $status]);
    }

    public function confirmFriendTimelineAbout($id)
    {
        $friendTimeline = DB::table('informations')->where('u_id', $id)->get();

        return view('timelines.requestFriend_timeline.confirmfriend_timeline_about')->with(['friend' => $friendTimeline]);
    }

    public function confirmFriendTimelineAlbum($id)
    {
        $userInfo =  DB::table('informations')->where('u_id', $id)->get();

        return view('/timelines.requestFriend_timeline.confirmfriend_timeline_album')->with(['friend' => $userInfo]);
    }
    public function confirmFriendTimelineFriends($id)
    {
        $userInfo =  DB::table('informations')->where('u_id', $id)->get();

        return view('/timelines.requestFriend_timeline.confirmfriend_timeline_friends')->with(['friend' => $userInfo]);
    }



    public function uploadImage()
    {
        $userid=Auth::user()->id;
        $userInfo =  DB::table('informations')
            ->where('u_id', $userid)->get();

        return view('/timelines.changeProfile')->with(['friend' => $userInfo]);

    }

    public function uploadCover()
    {
        $userid=Auth::user()->id;
        $userInfo =  DB::table('informations')->where('u_id', $userid)->get();

        return view('/timelines.changeCover')->with(['friend' => $userInfo]);
    }

    public function album()
    {
        $userid=Auth::user()->id;
        $userInfo =  DB::table('informations')->where('u_id', $userid)->get();
        return view('/timelines.timeline_album')->with(['friend' => $userInfo]);
    }
    public function timelineFriends()
    {
        $userid=Auth::user()->id;
        $userInfo =  DB::table('informations')->where('u_id', $userid)->get();
        return view('/timelines.timeline_friends')->with(['friend' => $userInfo]);
    }
    public function profile()
    {
        $userid=Auth::user()->id;
        $userInfo =  DB::table('informations')->where('u_id', $userid)->get();
        return view('/timelines.timeline_edit_profile')->with(['friend' => $userInfo]);
    }
    public function work()
    {
        $userid=Auth::user()->id;
        $userInfo =  DB::table('informations')->where('u_id', $userid)->get();
        return view('/timelines.timeline_edit_work')->with(['friend' => $userInfo]);
    }
    public function interest()
        {
            $userid=Auth::user()->id;
            $userInfo =  DB::table('informations')->where('u_id', $userid)->get();
            return view('/timelines.timeline_edit_interest')->with(['friend' => $userInfo]);
        }
    public function account()
        {
            $userid=Auth::user()->id;
            $userInfo =  DB::table('informations')->where('u_id', $userid)->get();
            return view('/timelines.timeline_edit_work')->with(['friend' => $userInfo]);
        }
        public function changePass()
        {
            $userid=Auth::user()->id;
            $userInfo =  DB::table('informations')->where('u_id', $userid)->get();
            return view('/timelines.Change_password')->with(['friend' => $userInfo]);
        }



}
