@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div align="center" class="card-header" style="background-color:#69B7FF" >Assessment Report</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  &nbsp;

                  <h1 style="color: green" align="center"> Income Taxpayment form</h1>
                   <div class="row justify-content-center">


                          <form action="/sendtax" method="POST">
                                @csrf


                              <div class="form-group">
                                  <b>     <label>Enter Assessment year :</label> </b>
                                  <input type="date" class="form-control" id="date" name="date" placeholder="Enter your Assessment Year" required>
                              </div>

                              <div class="form-group">
                                  <b>     <label>Return submitted under section 82BB? (Select one)  :</label> </b><br>
                                  <select name="answer" required>
                                      <option >Select answer </option>
                                      <option value="Yes">Yes</option>
                                      <option value="No">No</option>

                                  </select>
                              {{--<input type="checkbox" name="Yes" value="Yes"> Yes<br>--}}
                              {{--<input type="checkbox" name="No" value="No"> No<br>--}}

                              </div>

                              <div class="form-group">
                                   <b> <label>Name of Assessee :</label> </b>
                                    <input type="text" class="form-control" id="nameAssessee" name="nameAssessee" placeholder="Enter your name of Assessee" required>
                                  </div>



                              <div class="form-group">
                                  <b>     <label>Gender  :</label> </b><br>
                                  <select name="gender" required>
                                      <option >Select gender </option>
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                  </select>

                              </div>


                              <div class="form-group">
                                  <b>  <label>Twelve digit PIN :</label></b>
                                  <input type="text" class="form-control" id="pin" name="pin" placeholder="Enter your Twelve digit PIN " required>
                              </div>


                              <div class="form-group">
                                  <b>  <label>Old PIN :</label></b>
                                  <input type="text" class="form-control" id="oldpin" name="oldpin" placeholder="Enter your old PIN " required>
                              </div>


                              <div class="form-group">

                                  <b>     <label>Resident Status  :</label> </b><br>

                                  <select name="residentStatus" required>
                                      <option >Select one </option>
                                      <option value="Resident">Resident</option>
                                      <option value="Non-resident">Non-resident</option>
                                  </select>
                                  {{--<b>     <label>Resident Status  :</label> </b><br>--}}
                                  {{--<input type="checkbox" name="Resident" value="Resident"> Resident<br>--}}
                                  {{--<input type="checkbox" name="Non-resident" value="Non-resident"> Non-resident<br>--}}

                              </div>

                              <div class="form-group">

                                  <b>     <label>Select on the box(es) below if you are</label> </b><br>
                                  <select name="eligible" required>
                                      <option >Select one </option>
                                      <option value="freedomFighter">A gazetted war-wounded  freedom fighter</option>
                                      <option value="disability"> A person with disability </option>
                                      <option value="age65">Aged 65 years or more</option>
                                      <option value="parentDisability">A parent/legal guardian of a person  with disability  </option>
                                        <option value="age65">None</option>
                                  </select>
                                  {{--<b>  <label>Tick on the box(es) below if you are: </label> </b><br>--}}
                                  {{--<input type="checkbox" name="freedomFighter" value="freedomFighter">  A gazetted war-wounded  freedom fighter <br>--}}
                                  {{--<input type="checkbox" name="disability" value="disability"> A person with disability <br>--}}
                                  {{--<input type="checkbox" name="age65" value="age65"> Aged 65 years or more <br>--}}
                                  {{--<input type="checkbox" name="parentDisability" value="parentDisability"> A parent/legal guardian of a person  with disability  <br>--}}

                              </div>

                              <div class="form-group">
                                  <b>     <label>Enter Date of birth :</label> </b>
                                  <input type="date" class="form-control" id="dobDate" name="dobDate" placeholder="Enter your date of birth" required>
                              </div>


                              <div class="form-group">
                                  <b>  <label> If employed, employer’s name :</label></b>
                                  <input type="text" class="form-control" id="employeeName" name="employeeName">
                              </div>

                              <div class="form-group">
                                  <b>  <label>Spouse Name  :</label></b>
                                  <input type="text" class="form-control" id="spouseName" name="spouseName">
                              </div>

                              <div class="form-group">
                                  <b>  <label>Spouse TIN (if any)  :</label></b>
                                  <input type="text" class="form-control" id="spouseTIN" name="spouseTIN">
                              </div>

                              <div class="form-group">
                                  <b>  <label>Father's Name:</label></b>
                                  <input type="text" class="form-control" id="fatherName" name="fatherName" placeholder="Enter your Father's name " required>
                              </div>


                              <div class="form-group">
                                  <b>  <label>Mother's Name:</label></b>
                                  <input type="text" class="form-control" id="motherName" name="motherName" placeholder="Enter your Mother's name " required>
                              </div>

                              <div class="form-group">
                                  <b>  <label>Present Address :</label></b>
                                  <input type="text" class="form-control" id="paddress" name="paddress" placeholder="Enter your Present Address " required>
                              </div>

                              <div class="form-group">
                                  <b>  <label>Permanent Address :</label></b>
                                  <input type="text" class="form-control" id="permanentaddress" name="permanentaddress" placeholder="Enter your Permanent Address " required>
                              </div>


                              <div class="form-group">
                                  <b>  <label>Contact Number :</label></b>
                                  <input type="tel" class="form-control" id="contactNbr" name="contactNbr" placeholder="Enter your Contact Number " required>
                              </div>


                              <div class="form-group">
                                  <b>  <label>Email id :</label></b>
                                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email id " required>
                              </div>


                              <div class="form-group">
                                        <b>  <label>National Identification Number (NID) :</label></b>
                                          <input type="text" class="form-control" id="nid" name="nid" placeholder="Enter your National Identification Number" required>
                                        </div>

                                          <div class="form-group">
                                         <b> <label>Bussiness Identification Number :</label></b>
                                          <input type="text" class="form-control" id="bid" name="bid" placeholder="Enter your BID number" required>
                                        </div>

                                          <div class="form-group">
                                        <b>  <label>Enter taxes circle :</label></b>
                                          <input type="text" class="form-control" id="money" name="money" placeholder="Enter texs circle" required>
                                        </div>


                                        <div class="form-group">
                                         <b> <label>Enter your account code :</label> </b>
                                          <input type="text" class="form-control" id="account" name="account" placeholder="Enter your account code"  required>
                                        </div>



                                        <div class="form-group">
                                           <b>   <label>Enter your account type :</label> </b>
                                           <select name="payment" required>
                                               <option >Select payment type</option>
                                                    <option value="Bkash">Bkash</option>
                                                    <option value="Credit">Credit</option>
                                                    <option value="DBBL">DBBL</option>
                                                    <option value="Ekpay">Ekpay</option>
                                                    </select>
                                            </div>

                                            <div class="form-group">

                                              <b>   <label>Enter your payment under section :</label> </b>
                                              <select name="section" required>
                                                  <option >Select section </option>
                                                       <option value="52">52</option>
                                                       <option value="27">27</option>
                                                       <option value="17">17</option>
                                                       <option value="11">11</option>
                                                       </select>
                                                </div>

                                                    <div class="form-group">
                                                     <b>     <label>Enter Ammount :</label> </b>
                                                          <input type="text" class="form-control"
                                                          id="ammountTax" name="ammountTax" placeholder="Enter your ammount of tax" required>
                                                        </div>



                                  <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>

                                </form>




                </div>
            </div>
        </div>
    </div>
</div>
    </div>
@endsection
