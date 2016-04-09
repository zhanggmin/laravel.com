<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>@section('title')Laravel 中国 - Laravel 为网页艺术家创造的 PHP 框架@show</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="Laravel 中国">
	<meta name="description" content="@section('description')Laravel 中文文档, 致力于推动 Laravel, php-fig 等国外 PHP 新技术, 新理念在中国的发展.@show">
	<meta name="keywords" content="laravel,laravel中国,laravel中文,laravel框架中文,laravel文档,laravel框架中国,laravel中文文档">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lte IE 9]>
		<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="/assets/css/laravel.css">
	<style media="screen">
		div.main-content {
		  display: none;
		}
		.loading-effect {
			position: fixed;
			left: 50%;
			top:300px;
		    z-index: -1;
		}
	</style>
</head>
<body class="@yield('body-class', 'docs') language-php {{ in_nightmode() ? 'nightmode' : '' }}">

	<span class="overlay"></span>

	<div class="loading-effect">
		<div class="loader-inner line-scale">
		      <div></div>
		      <div></div>
		      <div></div>
		      <div></div>
		      <div></div>
		  </div>
	</div>


	<div class="main-content">

		<nav class="main">
			<div class="container">
				<a href="/" class="brand">
					<img src="/assets/img/laravel-logo.png" height="30">
					Laravel
				</a>

				<div class="responsive-sidebar-nav">
					<a href="#" class="toggle-slide menu-link btn">&#9776;</a>
				</div>

				@if (Request::is('docs*') && isset($currentVersion))
					@include('partials.switcher')
				@endif

				<ul class="main-nav">
					@include('partials.main-nav')
				</ul>
			</div>
		</nav>

		@yield('content')

		<footer class="main">
			<ul>
				@include('partials.main-nav')
			</ul>
			<p>Laravel is a trademark of Taylor Otwell. Copyright &copy; Taylor Otwell.</p>
			<p class="less-significant"><a href="http://jackmcdade.com">Design by Jack McDade</a></p>
		</footer>

	</div>

	<script src="/assets/js/laravel.js"></script>
	<script src="/assets/js/viewport-units-buggyfill.js"></script>
	<script>window.viewportUnitsBuggyfill.init();</script>
    <script>

		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','http://7xijlf.com2.z0.glb.qiniucdn.com/js/analytics.js','ga');

		ga('create', '{{ getenv('GA_Tracking_ID') }}', 'auto');
		ga('send', 'pageview');

		$(window).load(function() {
		  // When the page has loaded
		  $(".main-content").fadeIn(10);
		});
    </script>
</body>
</html>
