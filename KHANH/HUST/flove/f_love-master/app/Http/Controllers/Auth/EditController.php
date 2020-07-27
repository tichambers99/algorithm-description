<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class EditController extends Controller
{
    public function edit_infor(){
        return view('login.edit_infor');
    }

    public function edit_Female_infor(){
        return view('login.edit_Female_infor');
    }

}