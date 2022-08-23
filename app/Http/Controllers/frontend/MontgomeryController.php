<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\title;
use App\Models\feacture;
use App\Models\file;
use Illuminate\support\DB;

class MontgomeryController extends Controller
{
   
    public function index()
    {
        $file=file::with(['title','title.feacture'])->get();
        
        return view('frontend.montgomery',compact('file'));
     
    }
}
