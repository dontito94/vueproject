@extends('layouts.app')

@section('content')
<section id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators" style="margin-top:10px;">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
              <img src="image/banner.jpg" alt="..." style="width:100%; height:100%;">
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
              <img src="image/securitywheel.jpg" style="width:100%; height:100%;">
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
              <img src="image/DAR ES SALAM - GettyImages-488050656.jpg" style="width:100%; height:100%;">
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </section>
    <!--latest posts-->
     <div class="row">
      <div class="col-md-3"></div> 
      <div class="col-md-9"></div>
    </div>

<div class="container">
    <div class="row" >
        <div class="col-lg-12" >
            <h1 class="page-header" style="text-align: center;color: red; font-weight: bold;font-size: 3.25em;">Panacea Information Security</h1>
                <p style="text-align: center; margin-left: 30px;margin-right: 10px;font-size: 1.5em; font-weight: bold;">Information is a vital commodity for every organisation. Information can be <strong>Organisation’s Plans, Employees’ Records, Financial Records, Intellectual Properties (IPs)</strong> etc., which as long as they are related to an organisations are helpful for decision making. Any information is supposed to be exposed by an owning entity at the right time, accurately and to the right entity. Many incidences in information security breach have been happening in the world. For instance; in Tanzania, US$ 85 billion have been lost due to digital attacks by 2016 says the report (http://m.ippmedia.com/en/business/how-tanzania-lost-187bn-cyber-criminals-2016). Let us serve you to avoid any kind of loss that can be caused by information security breaches.</p>
         </div>
          </div>

     <section style="margin-top: 30px;  padding-top: 0px;">
 <div class="row" >
             <h1 class="page-header" style="text-align: center;color: red; font-weight: bold;font-size: 3.25em;">OUR SERVICES</h1>
             </div>

          <div class="row">
<div class="col-md-4">
    <div class="">
        <img src="image/instructor-led.png" alt="Avatar" style="height:200px;width:200px; margin-left: 50px;" >
          <h4 class="card-title">Training And Events</h4>
         <a href="/training" class="btn btn-danger">Security Training</a>
    </div>
 </div>
       <div class="col-md-4">
    <div class="">
        <img src="image/secrecy-icon.png" alt="Avatar"  style="height:200px; width: 270px;">
          <h4 class="card-title" >Security Service</h4>
         <a href="/service" class="btn btn-danger">Security Services</a>
  </div>
 </div>
 <div class="col-md-4" >
    <div class="">
        <img src="image/331.png" alt="Avatar" style="height:200px; width: 300px;">
        <h4 class="card-title">Security Tools</h4>
     <a href="/tools" class="btn btn-danger">Security Tools</a>
  </div>
 </div>

  </div>

<div class="row"  style="margin-top:20px;">
  <div class="col-md-4" style="margin-left: 50px;">
    <div class="">
        <img src="image/Risk-management.png" alt="Avatar" style="height:200px; width: 250px;">
        <h4 class="card-title">Security Standards</h4>
     <a href="/tools" class="btn btn-danger">Security Standards</a>
  </div>
 </div> 
</div>
 </section>

  </div>



@endsection
