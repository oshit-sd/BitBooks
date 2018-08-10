<?php

namespace App\Http\Controllers;

use Auth;
use App\Comments;
use App\Notifications;
use Illuminate\Http\Request;
//use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function comments($id)
    {
        $userid=Auth::user()->id;

        $userInfo =  DB::table('informations')->where('u_id', $userid)->get();

        $status = DB::table('statuses')
//            ->leftJoin('comments', 'comments.s_id', '=', 'statuses.id')
            ->where('id', '=', $id)->get();

        $comment = DB::table('comments')
            ->leftJoin('informations', 'informations.u_id', '=', 'comments.u_id')
            ->where('comments.s_id', '=', $id)->get();
        return view('newsfeeds.comment')->with(['comment' => $comment,'status' => $status,'friend' => $userInfo ]);
    }

    public function store(Request $request, $id, $u_id)
    {
        $data = $request->all();

        Comments::create($data);

        $userid=Auth::user()->id;

        $userInfo =  DB::table('informations')->where('u_id', $userid)->get();

        $status = DB::table('statuses')
//            ->leftJoin('comments', 'comments.s_id', '=', 'statuses.id')
            ->where('id', '=', $id)->get();

        $comment = DB::table('comments')
            ->leftJoin('informations', 'informations.u_id', '=', 'comments.u_id')
            ->where('comments.s_id', '=', $id)->get();


        $AddNoti = new Notifications();
        $AddNoti->user_id  = $userid;
        $AddNoti->friend_id  = $u_id;
        $AddNoti->status  = '1';
        $AddNoti->note  = 'Comments on your photo';
        $AddNoti->save();

        return view('newsfeeds.comment')->with(['comment' => $comment,'status' => $status,'friend' => $userInfo ]);

//        dd($_POST);
    }

    public function MyFriendComment(Request $request, $id, $u_id)
    {
        $data = $request->all();

        Comments::create($data);

        $userid=Auth::user()->id;
        $userInfo =  DB::table('informations')->where('u_id', $id)->get();

        $status = DB::table('statuses')
//            ->leftJoin('comments', 'comments.s_id', '=', 'statuses.id')
            ->where('id', '=', $id)->get();

        $comment = DB::table('comments')
            ->leftJoin('informations', 'informations.u_id', '=', 'comments.u_id')
            ->where('comments.s_id', '=', $id)->get();

        $AddNoti = new Notifications();
        $AddNoti->user_id  = $userid;
        $AddNoti->friend_id  = $u_id;
        $AddNoti->status  = '1';
        $AddNoti->note  = 'Comments on your photo';
        $AddNoti->save();

        return view('/timelines.myFriend_timelines.myfriend_comment_timeline')->with(['comment' => $comment,'myallstatus' => $status,'friend' => $userInfo ]);

    }

     public function StFriendComment(Request $request, $id, $u_id)
        {
            $data = $request->all();

            Comments::create($data);

            $userid=Auth::user()->id;
            $userInfo =  DB::table('informations')->where('u_id', $id)->get();

            $status = DB::table('statuses')
    //            ->leftJoin('comments', 'comments.s_id', '=', 'statuses.id')
                ->where('id', '=', $id)->get();

            $comment = DB::table('comments')
                ->leftJoin('informations', 'informations.u_id', '=', 'comments.u_id')
                ->where('comments.s_id', '=', $id)->get();


            $AddNoti = new Notifications();
            $AddNoti->user_id  = $userid;
            $AddNoti->friend_id  = $u_id;
            $AddNoti->status  = '1';
            $AddNoti->note  = 'Comments on your photo';
            $AddNoti->save();


            return view('/timelines.statusFriend_timelines.stfriend_comment_timeline')->with(['comment' => $comment,'myallstatus' => $status,'friend' => $userInfo ]);

        }


    public function edit($id)
    {
        //
    }
}
