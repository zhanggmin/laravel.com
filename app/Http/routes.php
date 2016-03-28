<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * Set the default documentation version...
 */
define('DEFAULT_VERSION', '5.1');

/**
 * Convert some text to Markdown...
 */
function markdown($text) {
	return (new ParsedownExtra)->text($text);
}

get('/', function() {
	 return view('marketing');
});

get('docs', 'DocsController@showRootPage');
get('docs/{version}/{page?}', 'DocsController@show');

get('/translate', function() {

		$files = File::files('/home/vagrant/laravel-china/resources/docs/docstw');

		foreach ($files as $key => $file) {
				$operator = opencc_open("tw2sp.json"); //传入配置文件名
		 		$content= File::get($file);
				$newcontent = opencc_convert($content, $operator);
				opencc_close($operator);

				$newfile = '/home/vagrant/laravel-china/resources/docs/tws/' . pathinfo($file, PATHINFO_FILENAME) . '.md';
				File::put($newfile, $newcontent);
		}
});
