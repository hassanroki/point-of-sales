<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLogout extends Controller
{
    function UserLogout(){
        return redirect('/')->cookie('token','',-1);
    }

}
