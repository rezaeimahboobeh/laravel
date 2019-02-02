<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;

class pagescontroller extends Controller
{
    public function course(){
      $address=DB::table('address')->get();
       return view('pages.courses', compact('address'));
    }
}
