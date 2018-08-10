<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        //
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $pas = $request->input('password');

        $checklogin = DB::table('signups')->where(['email' => $email, 'password'=> $pas])->get();
        if(count($checklogin) > 0 )
        {
            return redirect('/Newsfeed');
        }
        else{
            return redirect('/')->with('unsucess', 'Opps!! Wrong email or password');
        }
    }
}
