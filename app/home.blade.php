@extends('layouts.app')

@section('content')
    <div class="container">
        <div class ="row">
            <div class="col-md-6">

                <link rel="stylesheet"
                      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <style>
                    .card {
                        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                        max-width: 300px;
                        margin: auto;
                        text-align: center;
                        font-family: arial;
                    }

                    .title {
                        color: grey;
                        font-size: 18px;
                    }

                    button {
                        border: none;
                        outline: 0;
                        display: inline-block;
                        padding: 8px;
                        color: white;
                        background-color: #39ffe4;
                        text-align: center;
                        cursor: pointer;
                        width: 100%;
                        font-size: 18px;
                    }

                    a {
                        text-decoration: none;
                        font-size: 22px;
                        color: black;
                    }

                    button:hover, a:hover {
                        opacity: 0.7;
                    }
                    img {
                        display: block;
                        margin-left: auto;
                        margin-right: auto;
                    }
                </style>
                <body>
         <div  class="card" style="display:table-cell; vertical-align:middle; text-align:center" >
                <h2 style="text-align:center">Wellcome {{ Auth::user()->name }} <span class="caret"></span> Sir !</h2>
                <img src="{{url('/images/avatar.png')}}" class="center" alt="no image" style="height:50% ;width:50%"/>
             <hr>
                &nbsp;

                <p style="margin:auto;display:block">{{ Auth::user()->name }} <span class="caret"></span></p>
                <p class="title" style="margin:auto;display:block">{{ Auth::user()->email }}</p>
                <hr>

                <p>
                    <button style="margin:auto;display:block">Contact</button>
                </p>
      </div>
                </body>
            </div>

            <div class="card col-md-6">
                <table class="table">
                    <tr>
                        <th>Date</th>
                        <th>Return submitted under section 82BB?</th>
                        <th>Name of Assesee</th>
                        <th>Gender</th>
                        <th>Resident Status</th>
                        <th>Eligible</th>
                        {{--<th>Date</th>--}}
                        {{--<th>submitted under section?</th>--}}
                        <th>Date of Birth</th>
                        <th>Father's Name</th>
                        <th>Mother's Name</th>
                        <th>Present Address</th>
                        <th>Permanent Address</th>
                        <th>Contact Number</th>
                        <th>Email</th>


                    </tr>
                    @foreach($value ?? '' as $val)
                        <tr >
                            <td >{{$val['date']}}</td>
                            <td>{{$val['answer']}}</td>
                            <td>{{$val['nameAssessee']}}</td>
                            <td >{{$val['gender']}}</td>
                            <td>{{$val['residentStatus']}}</td>
                            <td >{{$val['eligible']}}</td>
                            <td>{{$val['dobDate']}}</td>
                            <td>{{$val['fatherName']}}</td>
                            <td >{{$val['motherName']}}</td>
                            <td>{{$val['paddress']}}</td>
                            <td>{{$val['permanentaddress']}}</td>
                            <td>{{$val['contactNbr']}}</td>
                            <td>{{$val['email']}}</td>



                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
