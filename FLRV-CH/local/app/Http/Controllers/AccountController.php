<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests\loginrequest;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function login()
    {
        return view('Account.login');

    }
    public function M1login()
    {
        return view('Account.M1login');

    }
    public function signup()
    {
        return view('Account.signup');
    }
    public function master()
    {
        return view('Account.master');
    }
    public function Getlogin(loginrequest $request)
    {
        $email=$request->username;
        $password=$request->password;
        $remember=$request->_token;
        if (Auth::attempt(['Username' => $email, 'password' => $password],true)) {
            $rs=DB::table('account')->where('Username',$email)->get();

            foreach($rs as $gt){
                $ID=$gt->ID;
            }
            // dd($rs);
            session()->put('ID',$ID);
            // echo(session()->get('ID'));
            // echo '<a href="logout">Logout '.session()->get('ID').' </a>';

            return redirect("cs/");
        }
        else {
            return redirect()->back()->with('thongbao','Tai khoan hoac mat khau khong chinh xac');
        }
        // $request->validate([
        //     'username'=>'required',
        //     'password'=>'required',
        // ]);
    }
    public function GetLogout()
    {
        Auth::logout();
        return view('Account.M1login');
    }
}
