@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div align="center" class="card-header" style="background-color:lightblue">Tax Calculation</div>


                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{--<img src="{{url('/images/tax.jpg')}}" alt="no image" style="height:50% width:50%" />--}}
                        {{--&nbsp;--}}

                        {{--<p align="center">First &nbsp;  BDT 1,65,000 &nbsp;Nil</p> <hr>--}}
                        {{--<p align="center">Next &nbsp;   BDT 2,75,000 &nbsp; 10%</p><hr>--}}
                        {{--<p align="center">Next &nbsp;   BDT 3,25,000 &nbsp; 15%</p><hr>--}}
                        {{--<p align="center">Next &nbsp;   BDT 3,75,000 &nbsp; 20%</p><hr>--}}
                        {{--<p align="center">Rest Amount &nbsp;                25%</p><hr>--}}

                        <h1 style="color: green" align="center">Tax Calculation </h1>
                        <div class="row justify-content-center">


                            <form action="/calculate" method="post">
                                @csrf
                                <style>

                                    required {
                                        color: red;
                                    }

                                </style>

                                <div class="form-group">



                                    <b> <label>Enter yearly income : <font color="red">*</font> </label> </b>
                                    <input type="text" class="form-control" id="incomeview" name="incomeview"
                                         value="{{$income}}"  placeholder="Enter your Yearly income " disabled>
                                </div>

                                <div class="form-group">
                                    <b> <label>Enter others income :</label> </b>
                                    <input type="text" class="form-control" id="oincomeview" name="oincomeview"
                                           value="{{$oincome}}"   placeholder="Enter your other income " disabled>
                                </div>

                                <div class="form-group">
                                    <b> <label>Your ammmount of tax :</label> </b>
                                    <input type="text" class="form-control" id="taxview" name="taxview"
                                           value="{{$vat}}"   placeholder="Your ammmount of tax  " disabled>
                                </div>



                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
