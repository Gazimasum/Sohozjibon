@extends('frontend.layouts.master')
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
@endsection
