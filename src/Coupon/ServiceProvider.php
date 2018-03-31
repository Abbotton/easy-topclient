<?php

namespace EasyTopClient\Coupon;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $app
     */
    public function register(Container $app)
    {
        $app['coupon'] = function ($app) {
            return new CouponClient($app);
        };
    }
}
