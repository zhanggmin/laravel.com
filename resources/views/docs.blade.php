@extends('app')

@section('title')
{{{ make_doc_title($content) }}} - Laravel 中文文档
@stop

@section('description')
{{{ make_doc_excerpt($content) }}}
@stop

@section('content')
<nav id="slide-menu" class="slide-menu" role="navigation">
	
	<div class="brand">
		<a href="/">
			<img src="/assets/img/laravel-logo-white.png" height="50">
		</a>
	</div>

	<ul class="slide-main-nav">
		<li><a href="/">Home</a></li>
		@include('partials.main-nav')
	</ul>

	<div class="slide-docs-nav">
		<h2>Documentation</h2>
		{!! $index !!}
	</div>

</nav>

<div class="docs-wrapper container">

	<section class="sidebar">
		{!! $index !!}
	</section>

	<article>
		{!! $content !!}
	</article>
</div>
@endsection
