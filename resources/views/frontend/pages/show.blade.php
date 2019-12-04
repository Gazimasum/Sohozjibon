@extends('frontend.layouts.master')
@section('content')

  <div class="best-product-area pb-15">
      <div class="pl-100 pr-100">
          <div class="container-fluid">
              <div class="section-title-3 text-center mb-40">
                  <h2> All Books From {{$category->name}}</h2>
              </div>
              <div class="best-product-style">

                  <div class="tab-content">
                      <div class="tab-pane active show fade" id="home6" role="tabpanel">
                          <div class="custom-row">
  @php
    $books=$category->books()->paginate(6);
  @endphp

  @if ($books->count()>0)
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
@else
  <h1>No Books In {{$category->name}}</h1>
  @endif

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- best product area end -->

      @endsection
