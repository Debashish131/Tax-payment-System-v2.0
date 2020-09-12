<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\payment;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PaymentController extends Controller
{
    //
    public function paymentform(Request $request)
    {
        $payment = new  payment();

        $payment->date = $request->input('date');
        $payment->answer = $request->input('answer');
        $payment->nameAssessee = $request->input('nameAssessee');
        $payment->gender = $request->input('gender');
        $payment->pin = $request->input('pin');
        $payment->oldpin = $request->input('oldpin');
        $payment->residentStatus = $request->input('residentStatus');
        $payment->eligible = $request->input('eligible');
        $payment->dobDate = $request->input('dobDate');

        $payment->employeeName = $request->input('employeeName');
        $payment->spouseName = $request->input('spouseName');
        $payment->spouseTIN = $request->input('spouseTIN');
        $payment->fatherName = $request->input('fatherName');
        $payment->motherName = $request->input('motherName');
        $payment->paddress = $request->input('paddress');


        $payment->permanentaddress = $request->input('permanentaddress');
        $payment->contactNbr = $request->input('contactNbr');
        $payment->email = $request->input('email');
        $payment->nid = $request->input('nid');
        $payment->bid = $request->input('bid');
        $payment->money = $request->input('money');

        $payment->account = $request->input('account');
        $payment->payment = $request->input('payment');
        $payment->section = $request->input('section');
        $payment->ammountTax = $request->input('ammountTax');
        $payment->creator =Auth::user()->name ;


        $payment->save();
           Alert::success('Success Title', 'Add');
      return redirect('/home');




    }
}
