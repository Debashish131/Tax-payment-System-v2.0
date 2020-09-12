<?php

namespace App\Http\Controllers;

use App\payment;
use Illuminate\Http\Request;

class AdminControl extends Controller
{

    public function  index(){
        $value = payment::all();
        return view("layouts.view",compact('value'));
    }
    public function deleteinfo($id){
      $value =payment::find($id);
      $value->delete();
      $value = payment::all();

      return view("layouts.view",compact('value'));

    }
}
