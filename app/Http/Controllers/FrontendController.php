<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;

class FrontendController extends Controller
{
    public  function insert(Request $request)
    {
       $students=new students;
       $students->firstname= $request['firstname'];
       $students->lastname= $request['lastname'];
       $students->dob= $request['dob'];
       $students->gender= $request['gender'];
       $students->email= $request['email'];
       $students->phone= $request['phone'];
       $students->save();
      
       return redirect('list');
       
    }
}
