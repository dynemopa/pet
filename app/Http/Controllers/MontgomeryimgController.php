<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\title;
use App\Models\feacture;
use App\Models\file;
use App\Models\User;
use Auth;
use Illuminate\support\DB;



class MontgomeryimgController extends Controller
{
    public function index($files_id)
    {
        $userid = Auth::user();
        $file=file::with('title','title.feacture')->where('files_id','=',$files_id)->get();
     return  view('frontend.montgomeryimg', compact('file','userid'));
    }
}
