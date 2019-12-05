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

               <div class="col-md-3">
                      <div class="alert alert-success back-widget-set text-center">
                            <i class="fa fa-book fa-5x"></i>



                            <h3>listdbooks</h3>
                              <b>{{App\Model\Book::count()}}</b>
                      Books Listed
                        </div>
                    </div>


                 <div class="col-md-3">
                      <div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-bars fa-5x"></i>


                            <h3>Issuedbooks </h3>
                            <b>{{App\Model\Issuedbook::where('status',0)->count()}}</b>
                            Book Issued
                        </div>
                    </div>

               <div class="col-md-3">
                      <div class="alert alert-warning back-widget-set text-center">
                            <i class="fa fa-recycle fa-5x"></i>
{{-- no --}}

                            <h3>Returnedbooks</h3>
                            <b>{{App\Model\Issuedbook::where('status',1)->count()}}</b>
                            Books Returned
                        </div>
                    </div>

               <div class="col-md-3">
                      <div class="alert alert-danger back-widget-set text-center">
                            <i class="fa fa-users fa-5x"></i>
{{-- no --}}
                            <h3>User</h3>
                            <b>{{App\User::count()}}</b>
                           Registered Users
                        </div>
                    </div>




                    <div class="col-md-3">
                      <div class="alert alert-success back-widget-set text-center">
                            <i class="fa fa-user fa-5x"></i>



                            <h3>listdathrs</h3>
                            <b>{{App\Model\Authors::count()}}</b>
                      Authors Listed
                        </div>
                    </div>


                 <div class="col-md-3">
                      <div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-list-alt fa-5x"></i>
{{-- no --}}

                            <h3>listdcats </h3>
                            <b>{{App\Model\Category::count()}}</b>
                           Listed Categories
                        </div>
                    </div>



    </div>
    </div>
    </div>

@endsection
