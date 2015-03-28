<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Cache\Repository as Cache;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Carbon\Carbon;

class ComposerServiceProvider extends ServiceProvider {

    const DOC_API = 'https://api.github.com/repos/laravel-china/docs/commits?per_page=1&sha=%s';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Client $client, Cache $cache, Request $request)
    {
        $client->setDefaultOption('verify', false);

        $this->app['view']->composer('docs',function($view) use($client, $cache, $request){

            $version = $request->segment(2) ?: DEFAULT_VERSION;

            $view->update_date = $cache->remember("doc_{$version}_update_at", 24 * 60, function() use ($client, $version) {
                $response = $client->get(sprintf(self::DOC_API, $version))->json();
                if (isset($response[0]['commit']['author']['date'])) {
                    return Carbon::parse($response[0]['commit']['author']['date'])->toDateString();
                }

                return '';
            });

        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}