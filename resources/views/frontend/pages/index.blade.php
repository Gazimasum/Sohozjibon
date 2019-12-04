{{-- @extends('frontend.layouts.master')
@section('content')

  <div class="container-fluid">
    <div class="row">


    <div class="col-md-2" style="background:#BBBBBB">
      @include('frontend.partials.leftsidebar')
    </div>
<div class="col-md-8" style="margin-top:20px;">

@foreach ($books as $b)


    <div class="card" style="width: 12rem; background:grey;">
  <img src="{!! asset('images/books/'.$b->image) !!}" class="card-img-top" alt="..." style="height:200px;" >
  <div class="card-body">
     <h5 class="card-title">{{$b->name}}</h5>
    <p class="card-text">{{$b->author->name}}</p>
  </div>
</div>
@endforeach
  </div>

</div>
</div>
@endsection --}}


@extends('frontend.layouts.master')
@section('content')
  @include('frontend.partials.slider')
    <!-- banner area start -->
    {{-- <div class="banner-area pt-120 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="book-banner-wrapper mr-20">
                        <img src="assets/img/banner/13.jpg" alt="">
                        <div class="banner-book-style1">
                            <h3>Big Sell For <br>December</h3>
                            <h2>50% OFF</h2>
                            <a class="banner-book-style-btn" href="product-details.html">Buy Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}
    <!-- banner area end -->
    <!-- best product area start -->
    <div class="best-product-area pb-15">
        <div class="pl-100 pr-100">
            <div class="container-fluid">
                <div class="section-title-3 text-center mb-40">
                    <h2>Books</h2>
                </div>
                <div class="best-product-style">

                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="home6" role="tabpanel">
                            <div class="custom-row">

                              @foreach ($books as $b)
                                <div class="custom-col-5 custom-col-style mb-95">
                                    <div class="product-wrapper">
                                        <div class="product-img-2">

                                                <img src="{!! asset('images/books/'.$b->image) !!}" alt="" style="height:364px; width:264px;">
                                            <div class="product-action-2">
                                              @if ($b->status==1)
                                                <a class="animate-left add-style-2"  href="#">Available</a>

                                                @else
                                                  <a class="animate-left add-style-2"  href="#">Unavailable</a>

                                              @endif

                                            </div>
                                        </div>
                                        <div class="product-content-2 text-center">
                                            <h4><a href="#">{{$b->name}}</a></h4>
                                            <span>By: {{$b->author->name}}</span>
                                            <span>ISBNN: {{$b->isbnn_number}}</span>
                                            <div class="product-rating">
                                                <i class="ti-star black"></i>
                                                <i class="ti-star black"></i>
                                                <i class="ti-star black"></i>
                                                <i class="ti-star"></i>
                                                <i class="ti-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- best product area end -->

    @endsection
