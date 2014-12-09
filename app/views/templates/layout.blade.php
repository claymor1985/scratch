<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="MKS">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>
    @section('title')
        Сайт
    @endsection
    @yield('title')
    </title>

    <!-- Bootstrap core CSS -->
    {{HTML::style('assets/css/bootstrap.css')}}

    <!-- Custom styles for this template -->
    {{HTML::style('assets/css/style.css')}}
    {{HTML::style('assets/css/font-awesome.min.css')}}
    {{HTML::style('assets/css/custom.css')}}


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>{{HTML::script('assets/js/ie8-responsive-file-warning.js')}}<![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


  </head>

  <body>

    <!-- Fixed navbar -->
    @include('templates.partials.navmenu')


	<!-- *****************************************************************************************************************
	 BLOG CONTENT
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	         @yield('content')
	 </div><!--/container -->


	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
    @include('templates.partials.footer')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{HTML::script('assets/js/jquery.min.js')}}
    {{HTML::script('assets/js/bootstrap.min.js')}}
    {{HTML::script('assets/js/retina-1.1.0.js')}}
    {{HTML::script('assets/js/jquery.hoverdir.js')}}
    {{HTML::script('assets/js/jquery.hoverex.min.js')}}
    {{HTML::script('assets/js/jquery.prettyPhoto.js')}}
    {{HTML::script('assets/js/jquery.isotope.min.js')}}
    <!--/custom -->
    {{HTML::script('assets/js/custom.js')}}

    <!--pages provided scripts-->
    @yield('scripts')
  </body>
</html>
