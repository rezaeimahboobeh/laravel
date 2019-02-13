<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;

class profile extends Controller
{
  public function profile()
  {
    $name=DB::table('users')->get();
    return view('pages.profile',compact('name'));
  }
}
