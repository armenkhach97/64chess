<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homework;

class HomeworkController extends Controller
{
    public function allHomeworks(){
        return view('student.homeworks',['homeworks'=>Homework::all()]);
    }

    public function allAdminHomework (){
        $homeworks = Homework::with('users')->get();
        return view('Admin.admin_homework',['homeworks'=> $homeworks]);

    }
}
