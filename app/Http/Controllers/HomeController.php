<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid=Auth::user()->id;
        $username=Auth::user()->name;
        $user =  DB::table('informations')
            ->where('u_id', $userid)->exists();
        if (!($user)) {
            DB::table('informations')->insert(
                ['u_id' => $userid, 'u_name' => $username, 'created_at' => date('Y-m-d h:m:s')]
            );
        }
//        $userid=Auth::user()->id;
//        $username=Auth::user()->name;
//        DB::table('informations')->insert(
//            ['u_id' => $userid, 'u_name' => $username]
//        );

        return redirect('/Newsfeed');
    }

    public function regester()
    {
//        $userid=Auth::user()->id;
//        $username=Auth::user()->name;
//        DB::table('informations')->insert(
//            ['u_id' => $userid, 'u_name' => $username]
//        );
        return view('/auth.login');
    }
}
