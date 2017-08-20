@extends('layouts.app')

@section('content')
        <div class="row" style="background-image: url('image/dar-es-salaam-night.jpg'); padding: 100px; height:58%;">
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
                <h1 class="page-header" style="text-align:center; font-size:1.5em;" >ISF Consultancy Services provides organisations</br> with the opportunity to purchase short-term </br>professional support to supplement</br> the implementation of ISF Tools and Research  </h1>
            </div>
          </div>
     <div class="row">
    <div class="col-md-3">
      <div class="thumbnail">
        <a class="dropdown-toggle" href="/generalawareness" >
          <img src="image/pci-logo-300x242.jpg" alt="Lights" style="width:60%;  height:170px;" >
          <div class="caption" >
  <a href="/generalawareness" class="btn btn-success">General awareness</a>
          </div>
        </a>
      </div>
    </div>
        <div class="col-md-3">
      <div class="thumbnail">
        <a href="/securitygovernance" >
          <img src="image/th.jpeg" alt="Lights" style="width:60%;  height:170px;" >
          <div class="caption">
  <a href="/securitygovernance" class="btn btn-info">Security governance</a>
          </div>
        </a>
      </div>
    </div>
        
</div>
 
            
    <!-- /.row -->
        <hr>
    </div>



@endsection
