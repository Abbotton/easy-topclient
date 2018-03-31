<?php

namespace EasyTopClient\Rebate;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $app
     */
    public function register(Container $app)
    {
        $app['auth'] = function ($app) {
            return new RebateAuthClient($app);
        };

        $app['order'] = function ($app) {
            return new RebateOrderClient($app);
        };
    }
}
