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
                        <!-- <img src="{{url('/images/tax.jpg')}}" alt="no image" style="height:50% width:50%" /> -->
                        &nbsp;

                        <p align="center">First &nbsp;  BDT 2,50,000 &nbsp;0% </p> <hr>
                        <p align="center">Next &nbsp;   BDT 8,00,000 &nbsp; 10%</p><hr>
                        <p align="center">Next &nbsp;   BDT 5,00,000 &nbsp; 15%</p><hr>
                        <p align="center">Next &nbsp;   BDT 6,00,000 &nbsp; 20%</p><hr>
                        <p align="center">Next &nbsp;   BDT 30,00,000 &nbsp; 25%</p><hr>
                        <p align="center">Rest Amount &nbsp;                30%</p><hr>

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
                                    <input type="text" class="form-control" id="income" name="income"
                                           placeholder="Enter your Yearly income " required>
                                </div>

                                <div class="form-group">
                                    <b> <label>Enter others income :</label> </b>
                                    <input type="text" class="form-control" id="oincome" name="oincome"
                                           placeholder="Enter your other income ">
                                </div>


                                                                     
                                <div class="form-group">
                                    <button type="submit" id="submit" name="submit" class="btn btn-primary btn-block">
                                        Submit
                                    </button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
