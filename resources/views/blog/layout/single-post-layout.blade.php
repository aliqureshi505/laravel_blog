<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Clean &mdash; A free HTML5 Template by FREEHTML5.CO</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
	<!--
		//////////////////////////////////////////////////////
		FREE HTML5 TEMPLATE
		DESIGNED & DEVELOPED by FREEHTML5.CO
			
				Website: 		http://freehtml5.co/
					Email: 			info@freehtml5.co
				Twitter: 		http://twitter.com/fh5co
				Facebook: 		https://www.facebook.com/fh5co
		//////////////////////////////////////////////////////
	-->
	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<!-- Place favicon.ico and apple-touch-icon.png in the root <dir></dir>rectory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Google Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,500' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('blog/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('blog/css/icomoon.css')}}">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="{{asset('blog/css/simple-line-icons.css')}}">
	<!-- Theme Style -->
	<link rel="stylesheet" href="{{asset('blog/css/style.css')}}">
	<!-- Modernizr JS -->
	<script src="{{asset('blog/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=356320384781594";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


	
	<header id="fh5co-header" role="banner">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="navbar-header">
							<!-- Mobile Toggle Menu Button -->
							<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle visible-xs-block" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
							<a class="navbar-brand" href="index.html">Developer's Zone</a>
						</div>
						<div id="fh5co-navbar" class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-right">
								<li class="active"><a href="index.html"><span>Home <span class="border"></span></span></a></li>
								<li class=""><a href="index.html"><span> Posts <span class="border"></span></span></a></li>
								<li class=""><a href="index.html"><span>Categories <span class="border"></span></span></a></li>
								<li><a href="right-sidebar.html"><span>About Us: <span class="border"></span></span></a></li>
								<li><a href="left-sidebar.html"><span>Contact Us: <span class="border"></span></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<!-- END .header -->
	<div class="jumbotron">
		<center>
		
		<h2>
			@yield('post_title')
		</h2>
		</center>
	</div>
	<div class="container">

		<div class="pull-left">
			<h4>Created At: <a href=""> @yield('created_at') </a> </h4>	
		</div>

		<div class="pull-right">
			<h4>Categories: @section('categories') @show </h4>	
		</div>

		
		<br><br>
		@section('post_content')
		@show

		<div class="pull-left">
			<h4>Tags: @section('tags') @show </h4>	
		</div>

		
		<br><br>
		<div class="fb-comments container" data-href="{{ Request::url() }}" data-numposts="5"></div>

	</div>

