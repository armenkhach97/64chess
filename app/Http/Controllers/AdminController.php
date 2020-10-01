<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        $users = User::with('roles')->get();
        return view('Admin.adminpanel',['users'=>$users]);
    }
    public function index1(){
        return view('dashboard');
    }
}
