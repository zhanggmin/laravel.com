<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Laravel - 为网页艺术家创造的 PHP 框架</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="Laravel 中国">
	<meta name="description" content="Laravel 中文文档, 致力于推动 Laravel, php-fig 等国外 PHP 新技术, 新理念在中国的发展.">
	<meta name="keywords" content="laravel中国,laravel中文,laravel框架中文,laravel文档,laravel框架中国,laravel中文文档">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lte IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/assets/css/laravel.css">
</head>
<body class="@yield('body-class', 'docs') language-php">

	<span class="overlay"></span>

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
	<script src="/assets/js/laravel.js"></script>
	<script src="/assets/js/viewport-units-buggyfill.js"></script>
	<script>window.viewportUnitsBuggyfill.init();</script>
    <script>
        var _gaq=[['_setAccount','UA-53903425-2'],['_trackPageview']];
        (function(d,t){
            var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)
        }(document,'script'));
    </script>
</body>
</html>
