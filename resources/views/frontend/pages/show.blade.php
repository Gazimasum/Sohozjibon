@extends('frontend.layouts.master')
@section('content')

  <div class="container-fluid">
    <div class="row">


    <div class="col-md-2">
      @include('frontend.partials.leftsidebar')
    </div>
<div class="col-md-8" style="margin-top:20px;">
  <h2>All Book Of {{$category->name}}</h2>
  @php
    $books=$category->books()->paginate(6);
  @endphp

  @if ($books->count()>0)
  @foreach ($books as $b)
    <div class="card" style="width: 12rem; background:grey;">
  <img src="{!! asset('images/books/'.$b->image) !!}" class="card-img-top" alt="..." style="height:200px;" >
  <div class="card-body">
     <h5 class="card-title">{{$b->name}}</h5>
    <p class="card-text">{{$b->author->name}}</p>
  </div>
</div>
@endforeach
@else
  <h1>No Books In {{$category->name}}</h1>
  @endif
  </div>

</div>
</div>
@endsection
