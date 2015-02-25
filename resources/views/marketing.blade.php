@extends('app')

@section('body-class')
home
@endsection

@section('content')

<nav id="slide-menu" class="slide-menu" role="navigation">

	<div class="brand">
		<a href="/">
			<img src="/assets/img/laravel-logo-white.png" height="50">
		</a>
	</div>

	<ul class="slide-main-nav">
		@include('partials.main-nav')
	</ul>

</nav>

<section class="panel statement light">
	<div class="content">
		<h1>喜爱优雅的代码吗? 我们也一样 ;-)</h1>
		<p>为网页艺术家创造的 PHP 框架</p>
		<div class='browser-window'>
			<div class='top-bar'>
				<div class='circles'>
					<div class="circle circle-red"></div>
					<div class="circle circle-yellow"></div>
					<div class="circle circle-green"></div>
				</div>
			</div>
			<div class='window-content'>
				<pre class="line-numbers"><code class="language-php">
&lt;?php


class Idea extends Eloquent {

	/**
	 * 拥有海阔天空的想法?
	 *
	 * @with Laravel
	 */
	 public function create()
	 {
	 	// 从这里启程...
	 }

}

	</code></pre>
				</div>
			</div>

		</div>
	</div>
	<a href="#features" class="next-up">
		强大、现代化的功能
		<img src="/assets/img/down-arrow.png">
	</a>
</section>

<section class="panel features dark" id="features">
	<h1>有人提到快速开发吗 ?</h1>
	<p>短时间内交付优雅的项目代码.</p>
		<div class="blocks stacked">
			<div class="block odd">
				<div class="text">
					<h2>简洁明了, 优雅的语法.</h2>

					<p>想要源代码优雅、简约、且易读? 你会发现完全符合你的需求, 因为 Laravel 是专门为你设计的,  如果需要任何入门帮助, 请查阅  <a href="https://laracasts.com">Laracasts</a> 还有我们 <a href="/docs">优秀的文档</a>.</p>
				</div>
				<div class="media">

					<div class='browser-window'>
						<div class='top-bar'>
							<div class='circles'>
								<div class="circle circle-red"></div>
								<div class="circle circle-yellow"></div>
								<div class="circle circle-green"></div>
							</div>
						</div>
						<div class='window-content'>
							<pre class="line-numbers"><code class="language-php">
class Purchase implements ShouldBeQueued {

	/**
	 * Purchase a new podcast.
	 */
	 public function handle(Repository $repo)
	 {
	 	foreach ($this->purchases as $purchase)
	 	{
	 		//
	 	}
	 }
</code></pre>
						</div>
					</div>

				</div>
			</div><!-- /.block -->
			<div class="block even">
				<div class="text">
					<h2>为了你的团队量身打造。</h2>
					<p>无论你是独自开发, 还是二十人的团队, Laravel 都能让你耳目一新. 使用 <a href="/docs/migrations">Migration</a> 和 <a href="/docs/schema">结构生成器</a> 让团队里面的每一个人都能同步 Laravel 数据库.</p>
				</div>
				<div class="media">
					<div class="terminal-window">
						<div class='top-bar'></div>
						<div class='window-content'>
							<div class="dark-code">
							<pre><code class="language-bash">
~/Apps $ php artisan make:migration create_users_table
Migration created successfully!

~/Apps $ php artisan migrate --seed
Migrated: 2015_01_12_000000_create_users_table
Migrated: 2015_01_12_100000_create_password_resets_table
Migrated: 2015_01_13_162500_create_projects_table
Migrated: 2015_01_13_162508_create_servers_table
</code></pre></div>
						</div>
					</div>
				</div>
			</div><!-- /.block -->
			<div class="block odd">
				<div class="text">
					<h2>现代化的工具集, 仿佛在施展魔术.</h2>
					<p>通过 <a href="/docs/eloquent">神奇的 ORM</a>, 轻松上手的 <a href="/docs/routing">路由器</a>, 强大的 <a href="/docs/queues">队列操作类库</a>, 以及 <a href="/docs/authentication">简便的用户认证系统</a>, 这些工具让你感受到现代化 PHP 的高可维护性和便捷性. 我们尽力打造这些小东西, 只为了帮助你构建伟大的应用.
				</div>
				<div class="media">

					<div class='browser-window'>
						<div class='top-bar'>
							<div class='circles'>
								<div class="circle circle-red"></div>
								<div class="circle circle-yellow"></div>
								<div class="circle circle-green"></div>
							</div>
						</div>
						<div class='window-content'>
							<pre class="line-numbers"><code class="language-php">
Route::resource('photos', 'PhotoController');

/**
 * Retrieve A User...
 */
Route::get('/user/{id}', function($id)
{
	return User::with('posts')->firstOrFail($id);
})
</code></pre>
					</div>
				</div>
			</div><!-- /.block -->
		</div>
		<a href="#ecosystem" class="next-up">
			Laravel 生态圈
			<img src="/assets/img/down-arrow.png">
		</a>
	</section>

	<section class="panel ecosystem light" id="ecosystem">
		<h1>Laravel 生态系统</h1>
		<p>彻底改变你构建网站的方式.</p>

		<div class="forge contain">
			<img src="/assets/img/forge-macbook.png" alt="Forge Dashboard" class="screenshot">
			<div class="content">
				<a href="https://forge.laravel.com">
					<img src="/assets/img/forge-logo.png" alt="Forge">
				</a>
				<p>瞬间将 PHP 应用发布到 Linode、DigitalOcean 或其他平台上。拥有一次 Push 直接部署 PHP 5.6、HHVM、队列, 以及任何你打造伟大应用所需要的东西</p>
				<p>几分钟内发布你的应用!</p>
			</div>
		</div>
		<div class="tiles">
			<div class="tile">
				<h2><a href="/docs/homestead">Homestead</a></h2>
				<p>官方 Laravel 本地开发环境. 构建在 Vagrant 之上, 使用 Homestead 让你整个团队同步使用最新版本的 PHP、MySQL、Postgres、Redis 等等。</p>
			</div>
			<div class="tile">
				<h2><a href="https://laracasts.com">Laracasts</a></h2>
				<p>几百部 (是的, 你没看错) 的 Laravel 和 PHP 教学视频, 并且每周更新! 你可以浏览基础部分, 或者开始高级 Laravel 的旅程. 价格就如你午餐的价格.</p>
			</div>
			<div class="tile">
				<h2>Power Packed</h2>
				<p>虽然 Laravel 已经很神奇了, 但是还有很多值得探索的功能, 如使用 <a href="/docs/billing">Cashier</a> 让你处理订阅费类似的问题, 或者通过使用 <a href="/docs/authentication#social-authentication">Socialite</a> 来实现 Facebook, Twitter, 等第三方帐号的打通.</p>
			</div>
		</div>
	</section>
@endsection
