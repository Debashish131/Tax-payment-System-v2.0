<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\taxcal;
class TaxcalController extends Controller
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
      $tax=new taxcal();
      $tax->income =$request->input ('income');
      $tax->oincome =$request->input ('oincome');
          // $tax->field =$request->input ('field');
          // $tax->answer =$request->input ('answer');
          $tax->save();
          return redirect('/home');
    }
}
