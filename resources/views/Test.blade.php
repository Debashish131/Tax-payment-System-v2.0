@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div align="center" class="card-header" >Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! bvbsdsfbfbwfd
                    <form class="" action="/formsubmit" method="post">
                      @csrf
                      <input type="text" name="Name" placeholder="Enter Ypur name"><br>
                      enter your payment system <br>
                      <select name="val" >
                        <option value="bkash">bkash</option>
                        <option value="DBBL">DBBL</option>
                        <option value="Ekpay">Ekpay</option>
                      </select><br>
                      <button class="btn btn-primary" name="Submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
