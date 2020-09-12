<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Assessment_Report extends Controller
{
  public function index(Request $req)
  {
     return view('Assessment_Report');
  }
}
