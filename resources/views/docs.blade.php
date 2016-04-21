@extends('app')

@section('title')
Laravel {{ $currentVersion }} 中文文档：{{{ make_doc_title($content) }}}
@stop

@section('description')
{{{ make_doc_excerpt($content) }}}
@stop

@section('keywords')
{{{ make_doc_title($content) }}},laravel{{ $currentVersion }}文档,laravel{{ $currentVersion }}中文文档,laravel中国,laravel中文,laravel框架中文,laravel文档,laravel框架中国,laravel中文文档
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
		<h2>文档</h2>

		<a type="button" class="turnofflight"><i class="fa fa-lightbulb-o"></i> <i class="fa fa-star-o"></i> 夜间模式 </a>
		{!! $index !!}
	</div>

</nav>

<div class="docs-wrapper container">

	<section class="sidebar">

		<div class="header">
			<a type="button" class="btn btn-primary btn-lg btn-block turnofflight"><i class="fa fa-lightbulb-o"></i> <i class="fa fa-star-o"></i> 夜间模式 </a>
		</div>

		{!! $index !!}
	</section>

	<article>

		<div class="alert alert-warning" role="alert">

			<h4>拥抱 Laravel 5.1 LTS 版本</h4>
			<p>
				强烈建议在 2018 年之前使用 Laravel 5.1 来构建项目，Laravel 5.1 是 LTS 的发行版本, 发行于 2015 年 6 月份，自发布起提供两年时间的 Bug 修复（2017 年 6 月）, 3 年时间的安全修复（2018 年 6 月）。
			</p>
			 <p>
			 	LTS 版本是此项目能提供的最长时间维护版本。一般的发行版本, 只提供 6 个月的 Bug 修复支持, 一年的安全修复支持.
			 </p>
		</div>

		<div class="main-content">
			{!! $content !!}
		</div>

		<div class="main-footer" style="border-top:1px dashed rgba(0, 0, 0, 0.1);padding-top: 30px;margin-top:30px;margin-bottom: 20px;">
			<div class="prev-next-wrap clearfix">

				@if($pager['prev'])
					<a class="btn btn-default pull-left" href="{{ $pager['prev']['link'] }}"><i class="fa fa-arrow-left"></i> {{ $pager['prev']['text'] }}</a>
				@endif

			    &nbsp;
				@if($pager['next'])
				    <a class="btn btn-default pull-right" href="{{ $pager['next']['link'] }}">{{ $pager['next']['text'] }} <i class="fa fa-arrow-right"></i></a>
				@endif
			</div>
		</div>

	</article>
</div>
@endsection
