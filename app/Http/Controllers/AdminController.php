<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class AdminController extends Controller
{
    public function index(){
        $users = User::with('roles')->get();
        return view('Admin.adminpanel',['users'=>$users]);
    }
    public function editUser($user_id,Request $req){
      $user = User::find($user_id);
      $user->name = $req->input('name');
      $user->email = $req->input('email');
      if($req->input('Role')=='admin'){
        $user->roles()->attach(1);
      }else{
          $user->roles()->detach();
      }
      $user->password = Hash::make($req->input('password')) ;
      $user->save();
    return redirect()->route('users');
    }
    public function deleteuser($user_id){
      $user = User::find($user_id);
      $user->roles()->detach();
      User::find($user_id)->delete();
      return redirect()->route('users');
    }
}
