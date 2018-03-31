<?php

namespace EasyTopClient\Dg;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $app
     */
    public function register(Container $app)
    {
        $app['dgCoupon'] = function ($app) {
            return new DgCouponClient($app);
        };
    }
}
