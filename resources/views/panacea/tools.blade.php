@extends('layouts.app')

@section('content')

<div class="row" style="background-image: url('image/information security.jpg'); padding: 100px; height:65%; width: 100%;">
           <div class="col-md-8" style="color:white; margin-left:40px; margin-top:30px;">
              <h1>Information Security Tools</h1>
          <h2>Information Security Training and Events</h2>
              </div>
                  </div>
        <!-- /.row -->
        <!-- /.row -->
        <div class="container">
        <div class="row" style="margin-top: 50px;">
<div class="col-md-4">
        <img src="image/kaspersky.png" alt="Avatar" style="height:200px;width:200px; margin-left: 50px;" >
          <h4 class="card-title">kaspersky antivirus</h4>
         <a href="/generalawareness" class="btn btn-danger">More Information</a>
 </div>
       <div class="col-md-4">
        <img src="image/mcafee-internet-security-suite-logo.png" alt="Avatar"  style="height:200px; width: 200px; margin-left: 30px;">
          <h4 class="card-title" >Security Service</h4>
         <a href="/securitygovernance" class="btn btn-danger">More Information</a>
 </div>


  </div>
 
          
        <hr>
    </div>


@endsection
