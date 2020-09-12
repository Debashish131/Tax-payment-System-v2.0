<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tax_Calculation extends Controller
{




  public function index()
  {
    return view('Tax_Calculation');
  }


  public function  cal(Request $request)
  {
//      $calculation=new  calculation();

      $income =$request->input('income');
      $oincome =$request->input('oincome');

      $vat=(double)$income+(double)$oincome;


      if ($vat >250000)
      {
          $vat=(double)$vat*.1;

      }
      elseif($vat <250000)
      {
          $vat=0;
      }
      elseif($vat >400000)
      {
          $vat=(double)$vat*.15;
      }

    elseif($vat >600000)
    {
        $vat=(double)$vat*.20;

  }
  elseif($vat >3000000)
  {
      $vat=(double)$vat*.25;
  }
  else
  {
      $vat=(double)$vat*.30;
  }

      return view('Tax_view',compact('income','oincome','vat'));

  }
  public function Savetax(Request $request)
  {
    $Savetax=new Savetax();
    $joy->Name =$req->input ('Name');
        $joy->val =$req->input('val');
        $joy->save();
        return redirect('/Test');
  }
}
