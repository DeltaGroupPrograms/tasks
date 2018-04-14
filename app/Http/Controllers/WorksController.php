<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use Validator;
use Lang;

class WorksController extends Controller
{
    public  function projects(){
        $pro=Work::where('status', '=', '0')->get();
        return view('projects' , ['pro' => $pro]);
    }
    public  function  register_projects()
    {
        return view('register_projects');
    }
}
