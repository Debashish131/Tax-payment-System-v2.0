<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
</head>
<body>
<div style="padding-top :20px">

    <h2 align="center">Tax payer Details</h2>
    &nbsp;
    <hr>
    <br>
</div>
<div class="container">

    <table class="table-responsive table table-bordered table-hover">
        <thread>
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
        </thread>
        <tbody>
        @foreach($value ?? '' as $val)

            <td>{{$val['date']}}</td>
            <td>{{$val['answer']}}</td>
            <td>{{$val['nameAssessee']}}</td>
            <td>{{$val['gender']}}</td>
            <td>{{$val['residentStatus']}}</td>
            <td>{{$val['eligible']}}</td>
            <td>{{$val['dobDate']}}</td>
            <td>{{$val['fatherName']}}</td>
            <td>{{$val['motherName']}}</td>
            <td>{{$val['paddress']}}</td>
            <td>{{$val['permanentaddress']}}</td>
            <td>{{$val['contactNbr']}}</td>
            <td>{{$val['email']}}</td>
            <td><button><a href="/delete/{{$val['id']}}"> Delete </button></td>



            </tr>

        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
