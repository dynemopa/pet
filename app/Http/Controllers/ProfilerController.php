<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class ProfilerController extends Controller
{
   public function showuser(Request $request)
   {
        $userid = Auth::user()->id;
        $all = user::find($userid);
        $all->getMetas();
        //dd($all);
        return view('frontend.profile',['data'=>$all]);
   }
}
