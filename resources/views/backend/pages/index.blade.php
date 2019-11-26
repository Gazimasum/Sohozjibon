@extends('backend.layouts.master')
@section('content')

<!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADMIN DASHBOARD</h4>

                            </div>

        </div>

             <div class="row">

 <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
                            <i class="fa fa-book fa-5x"></i>

{{-- bookno --}}

                            <h3>listdbooks</h3>
                      Books Listed
                        </div>
                    </div>


                 <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-bars fa-5x"></i>
{{-- no --}}

                            <h3>issuedbooks </h3>
                           Times Book Issued
                        </div>
                    </div>

               <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-warning back-widget-set text-center">
                            <i class="fa fa-recycle fa-5x"></i>
{{-- no --}}

                            <h3>returnedbooks</h3>
                          Times  Books Returned
                        </div>
                    </div>
               <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-danger back-widget-set text-center">
                            <i class="fa fa-users fa-5x"></i>
{{-- no --}}
                            <h3>regstds</h3>
                           Registered Users
                        </div>
                    </div>

        </div>



 <div class="row">

 <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
                            <i class="fa fa-user fa-5x"></i>
{{-- no --}}


                            <h3>listdathrs</h3>
                      Authors Listed
                        </div>
                    </div>


                 <div class="col-md-3 col-sm-3 rscol-xs-6">
                      <div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-file-archive-o fa-5x"></i>
{{-- no --}}

                            <h3>listdcats </h3>
                           Listed Categories
                        </div>
                    </div>


        </div>


    </div>
    </div>

@endsection
