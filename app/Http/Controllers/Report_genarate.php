<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\payment;
use PDF;
use mpdf;
use DB;

class Report_genarate extends Controller

{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function generatePDF()

    {

        $nameAssessee = "";

        $dobDate = "";


        $email = "";

        $money = "";


        $value = Payment::where([
            ['creator', '=', Auth::user()->name]
        ])->get();


        foreach ($value as $val) {

            $nid = $val['nid'];
            $nameAssessee = $val['nameAssessee'];
            $dobDate = $val['dobDate'];
            $paddress = $val['paddress'];
            $contactNbr = $val['contactNbr'];
            $ammountTax = $val['ammountTax'];
            $email = $val['email'];
            $money = $val['money'];

        }


        $data = ['nid'=>$nid,'nameAssessee' => $nameAssessee, 'dobDate' => $dobDate, 'paddress' => $paddress, 'contactNbr' => $contactNbr, 'ammountTax' => $ammountTax, 'email' => $email, 'money' => $money];


        // $test= Complain::all();
        // return view('myPDF',['test=>$test']);

//        $pdf = PDF::loadView('Report_genarate', $data);
//        return $pdf->download('ParibahanBD.pdf');
        $html = \View::make('Report_genarate')->with('data', $value);
        $html = $html->render();
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($html);
        $mpdf->Output();

    }


}
