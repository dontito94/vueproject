@extends('layouts.app')

@section('content')
<div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Security Standard</h1>
              
            </div>
        </div>
        <!-- /.row -->

        <!-- Image Header -->
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="http://placehold.it/1200x300" alt="">
            </div>
        </div>
        <!-- /.row -->

        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header" style="text-align:center; ">Security Standard</h2>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Service One</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-car fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Service Two</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-support fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Service Three</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Service Four</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service Tabs -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header" style="text-align:center; ">Security Standards</h2>
            </div>
            <div class="col-lg-12">

                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-tree"></i> ISO 27001</a>
                    </li>
                    <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-car"></i>PCI DSS</a>
                    </li>
                    <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-support"></i>Standard Three</a>
                    </li>
                    <li class=""><a href="#service-four" data-toggle="tab"><i class="fa fa-database"></i> Standard Four</a>
                    </li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-one">
                        <h4>ISO 27001</h4>
                        <p>SO/IEC 27001:2013 is theinternational information security standard that is now accepted as best practice both within the UK and worldwide.  The standard provides requirements for establishing, implementing, maintaining and continually improving an information security management system (ISMS).  ISO 27001 is also accompanied by ISO 27002 which is used as a reference for selecting security controls with the ISMS.</p>
        
                    </div>
                    <div class="tab-pane fade" id="service-two">
                        <h4>PCI DSS</h4>
                        <p>The Payment Card Industry Data Security Standard or PCI DSS is a set of information security requirements designed to reduce payment card fraud and is applicable to any organisation that stores, processes or transmits cardholder data.  PCI DSS is a global standard.  The PCI Security Standards Council has recently released PCI DSS v3.1.</p>
                        
                    </div>
                    <div class="tab-pane fade" id="service-three">
                        <h4>standard Three</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                    </div>
                    <div class="tab-pane fade" id="service-four">
                        <h4>Standard Four</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Service List -->

        <!-- /.row -->

        <hr>
      </div>


@endsection
