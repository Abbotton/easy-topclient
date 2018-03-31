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
        $app['ju'] = function ($app) {
            return new JuClient($app);
        };
    }
}
