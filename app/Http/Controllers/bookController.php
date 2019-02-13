<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;

class bookController extends Controller
{
  public function ID($courseID)
  {
      $courseid=DB::table('courses')->join('coursetype','courses.courseTypeID','=','coursetype.id')
      ->join('courseteacher','courses.teacherUserID','=','courseteacher.id')
      ->where ('courses.id', $courseID)->get();
    return view('pages.image', compact('courseid'));
  }
}
