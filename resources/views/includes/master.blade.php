<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>@yield('title')</title>




<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/argon.css') }}"/>


<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}"/>


<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">


<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}"/>


<link rel="stylesheet" type="text/css" href="{{ asset('css/themify-icons.css') }}"/>


<link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}"/>




    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css') }}">

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/prettyPhoto.css') }}">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/shortcodes.css') }}"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap_premium.css') }}"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}"/>
@yield('style')
</head>

<body>
  @yield('body')


      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/tether.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/js/argon.js') }}"></script>

      <script src="{{ asset('js/jquery.easing.js') }}"></script>
      <script src="{{ asset('js/jquery-waypoints.js') }}"></script>
      <script src="{{ asset('js/jquery-validate.js') }}"></script>
      <script src="{{ asset('js/owl.carousel.js') }}"></script>
      <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
      <script src="{{ asset('js/numinate.min6959.js') }}?ver=4.9.3"></script>
      <script src="{{ asset('js/main.js') }}"></script>
      <script src="{{ asset('js/chart.js') }}"></script>

      <!-- Revolution Slider -->
      <script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
      <script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
      <script src="{{ asset('revolution/js/slider.js') }}"></script>



      <script src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
      <script src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
      <script src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
      <script src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
      <script src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
      <script src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
      <script src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
      <script src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>


@yield('script')


  </body>


  </html>
