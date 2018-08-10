<?php

namespace App\Http\Controllers;

use App\Status;
use Auth;
use App\Likes;
use App\Notifications;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request, $id)
    {
        $userid = Auth::user()->id;
        $data = $request->all();
        Likes::create($data);

        $AddNoti = new Notifications();
        $AddNoti->user_id  = $userid;
        $AddNoti->friend_id  = $id;
        $AddNoti->status  = '1';
        $AddNoti->note  = 'Likes your photo';
        $AddNoti->created_at  = date('Y-m-d h:m:s');
        $AddNoti->save();

        return back();
    }

    public function myFriendLikes(Request $request, $id)
    {
        $userid = Auth::user()->id;
        $data = $request->all();
        Likes::create($data);

        $AddNoti = new Notifications();
        $AddNoti->user_id  = $userid;
        $AddNoti->friend_id  = $id;
        $AddNoti->status  = '1';
        $AddNoti->note  = 'Likes your photo';
        $AddNoti->save();

        return back();
    }

    public function stFriendLikes(Request $request, $id)
    {
        $userid = Auth::user()->id;
        $data = $request->all();
        Likes::create($data);

        $AddNoti = new Notifications();
        $AddNoti->user_id  = $userid;
        $AddNoti->friend_id  = $id;
        $AddNoti->status  = '1';
        $AddNoti->note  = 'likes your photo';
        $AddNoti->save();

        return back();
    }

    public function showLike()
    {
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
