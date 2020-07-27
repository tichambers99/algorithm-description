<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PageController extends Controller
{
    public function homePage(){
        return view('layout.master');
    }

    public function homePage_after_login(){
        return view('home.index');
    }

    public function expeter_list(){
        return view('expeter.list');
    }

    public function expeter_result(){
        return view('expeter.couple_show');
    }
    
}