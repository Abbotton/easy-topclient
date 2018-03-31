<?php

namespace EasyTopClient\Kernel;

use Pimple\Container;
use GuzzleHttp\Client as GuzzleHttp;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['http_client'] = function () {
            return new GuzzleHttp([
                'base_uri' => 'http://gw.api.taobao.com/',
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'timeout' => 5.0,
            ]);
        };

        $app['credential'] = function ($app) {
            return new Credential($app);
        };
    }
}
