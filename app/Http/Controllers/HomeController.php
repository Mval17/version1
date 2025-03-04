<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id()){
            $user_type=Auth()->user()->user_type;

            if($user_type=="user"){
                return view("dashboard");
            }
            else if($user_type=="admin"){
                return view('admin.adminhome');
            }
            else{
                return redirect()->back();
            }
        }

    }
}
