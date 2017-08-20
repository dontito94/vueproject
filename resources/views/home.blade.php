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
              <img src="image/DAR ES SALAM - GettyImages-488050656.jpg" style="width:100%; height:110%;">
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
              <img src="image/DAR ES SALAM - GettyImages-488050656.jpg" style="width:100%; height:100%;">
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
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

<div class="container">
   <section>
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Portfolio Heading</h2>
            </div>
          </div>
             <div class="row">
<div class="col-md-4 col-sm-12">
    <div class="card">
        <img src="image/infosec-training.png" alt="Avatar" style="height:200px;" >
        <div class="container">
        <h4><b>Training</b></h4> 
         <a href="/training" class="btn btn-danger">Information Security tools </a>
    </div>
  </div>
 </div>
       <div class="col-md-4 col-sm-12">
    <div class="card">
        <img src="image/firewall-antivirus-antispyware-signpost-showing-internet-and-computer-secur_M1kqMXPu.jpg" alt="Avatar"  style="height:200px;">
        <div class="container">
        <h4><b>Tools</b></h4> 
         <a href="/tools" class="btn btn-danger">Information Security tools </a>
    </div>
  </div>
 </div>
       <div class="col-md-4 col-sm-12">
    <div class="card">
        <img src="image/iss_final1_white.jpg" alt="Avatar" >
        <div class="container">
        <h4><b>Services</b></h4> 
         <a href="/service" class="btn btn-danger">Manage Security services</a>
    </div>
  </div>
 </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-12">
    <div class="card">
        <img src="image/010713_1030_EHRPHISecur1.png" alt="Avatar" style="heigth:200px;">
        <div class="container">
        <h4><b>Assessment</b></h4> 
     <a href="securityassessment.html" class="btn btn-danger">Security assessment and penetration</a>

    </div>
  </div>
 </div>
    <div class="col-md-4 col-sm-12">
    <div class="card">
        <img src="image/Risk-Manager-Risk-Management-Enterprise-RIsk-Management-300x200.jpg" alt="Avatar" >
        <div class="container">
        <h4><b>Risk Managements</b></h4> 
  <a href="securityassessment.html" class="btn btn-danger">Risk management</a>
    </div>
  </div>
 </div>
    <div class="col-md-4 col-sm-12">
    <div class="card">
        <img src="image/Risk-Manager-Risk-Management-Enterprise-RIsk-Management-300x200.jpg" alt="Avatar" >
        <div class="container">
        <h4><b>Information Security standard</b></h4> 
  <a href="/securitystandards" class="btn btn-danger">Standards</a>
    </div>
  </div>
 </div>
</div>
    </section>

</div>


@endsection
