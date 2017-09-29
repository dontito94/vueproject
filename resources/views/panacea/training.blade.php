@extends('layouts.app')

@section('content')
        <div class="row" style="background-image: url('image/integrated-banner.jpg'); padding: 100px; height:50%; width: 100%;">
           <div class="col-md-8" style="color:white; margin-left:40px; margin-top:20px;">
              <h1>Security Training</h1>
          <h2>Information Security Training and Events</h2>
              </div>
                  </div>
        <!-- /.row -->

        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
         <div class="container">
       <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="text-align:center; font-size:1.5em; font-weight: bold;" >Most of the Information Security breaches begin within the organisation itself. Weather intentionally or accidentally, staff tend to operate against safety norms that eventually negative impact organisation’s information and systems assets. Awareness on Information Security and best practices is then vital. We provide this kind of training in particularly depending on the organisation scan. Such trainings are: Security in Software Development Lifecycle (SDLC); and Hacking and Securing Web Applications </h1>
            </div>
          </div>
          <div class="row" >
             <h1 class="page-header" style="text-align: center;color: red; font-weight: bold;font-size: 3.25em;">TRAINING</h1>
             </div>
        <div class="row">
<div class="col-md-4">
    <div class="">
        <img src="image/pc-locked.png" alt="Avatar" style="height:200px;width:200px; margin-left: 50px;" >
          <h4 class="card-title">General Awareness</h4>
         <a href="/generalawareness" class="btn btn-danger">Security Awareness</a>
    </div>
 </div>
       <div class="col-md-4">
    <div class="">
        <img src="image/Awareness-training.png" alt="Avatar"  style="height:200px; width: 200px; margin-left: 30px;">
          <h4 class="card-title" >Security Service</h4>
         <a href="/securitygovernance" class="btn btn-danger">Security Services</a>
  </div>
 </div>


  </div>
 
          
        <hr>
    </div>



@endsection
