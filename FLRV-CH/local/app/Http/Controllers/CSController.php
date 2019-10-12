<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CSController extends Controller
{
    //
    public function GetHome()
    {
        return view("CS.home");
    }
    public function GetDom()
    {
        return view("CS.Dom");
    }
    public function PostsNew($fname)
    {
        $news=new App\newsmodel;
        $news->IDND=session()->get('ID');
        $news->Content="xznxbckashbakhsdghjasvdgjavfgamvdfgmasvdfga";
        $news->Img='../FLRV-CH/local/public/assets/img/newi/'.$fname.'.jpeg';
        $news->save();

    }
    public function Getx()
    {
        return view("CS.master");
    }
    public function Logout()
    {
        return controller("AccountController@GetLogout");
    }
}
