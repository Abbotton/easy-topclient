<?php

namespace EasyTopClient\Material;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $app
     */
    public function register(Container $app)
    {
        $app['scMaterial'] = function ($app) {
            return new ScMaterialClient($app);
        };

        $app['dgMaterial'] = function ($app) {
            return new DgMaterialClient($app);
        };
    }
}
