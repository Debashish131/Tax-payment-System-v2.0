<!DOCTYPE html>

<html>

<head>

    <title>PDF Report</title>

</head>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th, td {
        padding: 5px;
        text-align: left;
    }
</style>

<body>

<h1 style="color:Tomato;">Welcome to Tax Payment System</h1>
<h3>Here is the online PDF receipt of your tax payment </h3>
<hr>
<div class="bs-example">
    <table class="table" style="width:100%">
        <thead class="thead-dark">
        <tr>

            <th> NID </th>
            <th> &nbsp; Name</th>
            <th>Date Of Birth</th>
            <th>Present Address</th>
            <th>Contact Number</th>
            <th>Email</th>
            <th>Payment Type</th>
            <th>Ammount of Tax</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($data as $val)
                <td>{{ $val ['nid'] }}
                <td>{{ $val ['nameAssessee'] }}</td>
                <td>{{$val['dobDate']}}</td>
                <td>{{ $val ['paddress']}}</td>
                <td>{{ $val['contactNbr'] }}</td>
                <td>{{$val['email']}}</td>
                <td>{{ $val ['money']}}</td>
                <td>{{ $val['ammountTax'] }}</td>
            @endforeach

        </tr>

        </tbody>
    </table>
</div>
</body>
</html>


