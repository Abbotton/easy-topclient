<?php

namespace EasyTopClient\Ju;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $app
     */
    public function register(Container $app)
    {
        $app['juTqg'] = function ($app) {
            return new JuTqgClient($app);
        };

        $app['juSearch'] = function($app) {
            return new JuSearchClient($app);
        };
    }
}
