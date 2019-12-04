
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Book - eCommerce HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->


    <!-- all css here -->
@include('frontend.partials.style')
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- header start -->
@include('frontend.partials.header')
  @include('frontend.partials.messages')
    <!-- header end -->

  {{-- @include('frontend.partials.nav') --}}


@yield('content')

@include('frontend.partials.footer')
@include('frontend.partials.script')

</body>

</html>
