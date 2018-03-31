<?php

namespace EasyTopClient\Spread;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $app
     */
    public function register(Container $app)
    {
        $app['spread'] = function ($app) {
            return new SpreadClient($app);
        };
    }
}
