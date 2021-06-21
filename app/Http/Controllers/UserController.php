<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req){
     
        $info = User::where(['user_email'=>$req->email])->first();
        if($info!=null){
            if(Hash::check($req->pass, $info->user_password)){
               session()->put($info->user_roles, $info);
                return redirect('profile-'.$info->user_roles);
            }   
            else{
                $error = "Your Password is incorrect, Please Check it";
                return view('pages.login', ['er'=>$error]);
            }
        }
        else{
            $error = "Your Detail is incorrect, Please Check it";
            return view('pages.login', ["er"=>$error]);
        }
        
    }
}
