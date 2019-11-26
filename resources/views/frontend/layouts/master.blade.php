<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" dir="ltr">
{{-- <html lang="en" dir="ltr"> --}}
  <head>
        {{-- <link rel="shortcut icon" href="{!! asset('images/homedelevery.png') !!}" /> --}}
    <meta charset="utf-8">
    <title>
Library
    </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

@include('frontend.partials.style')
  </head>
  <body>
  @include('frontend.partials.nav')
 <div class="wrapper">
  @include('frontend.partials.messages')
@yield('content')
 </div>
@include('frontend.partials.footer')
@include('frontend.partials.script')

    </body>
</html>
