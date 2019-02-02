<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;

class bookController extends Controller
{
  public function pic($bookID)
  {
      $address=DB::table('address')->where ('bookID', $bookID)->get();
    return view('pages.image', compact('address'));
  }
}
