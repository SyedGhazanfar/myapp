<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function index(){
        return view('dashboard.admin.profile');
    }
    function adduser(Request $req){
        $user = new User();
        $user->user_name = $req->user_name;
        $user->user_email = $req->user_email;
        $user->user_roles = $req->user_roles;
        $user->user_password = Hash::make($req->user_password);
        $user->user_phone = $req->user_phone;    
        $user->save();
        return redirect('manage-user');    
    }
    function getData(){
        $user = User::all();
        return view('dashboard.admin.manageuser', ['data'=>$user]);
    }
    function useredit($id){
        $data = User::find($id);
        return view('dashboard.admin.updateuser', ['item'=> $data]);
    }
    function userupdate(Request $req){
        $data = User::find($req->user_id);
        $data->user_name = $req->user_name;
        $data->user_email = $req->user_email;
        $data->user_roles = $req->user_roles;
        $data->user_password = Hash::make($req->user_password);
        $data->user_phone = $req->user_phone;  
        $data->save();
        return redirect('manage-user');
    }
    function userdelete($id){
        $data = DB::table('users')->where('user_id', $id);
        $data->delete();
        return redirect('manage-user');
    }
}
