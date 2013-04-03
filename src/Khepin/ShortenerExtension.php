<?php
namespace Khepin;

use Silex\ServiceProviderInterface;
use Silex\Application;
class ShortenerExtension implements ServiceProviderInterface {

    public function register(Application $app){
        $app['shortener'] = $app->share(function() use($app){
            return new UrlShortener($app['url_file_name']);
        });
    }
}
?>