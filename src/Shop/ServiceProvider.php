<?php

namespace EasyTopClient\Shop;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $app
     */
    public function register(Container $app)
    {
        $app['shopGet'] = function ($app) {
            return new ShopClient($app);
        };

        $app['shopRecommend'] = function ($app) {
            return new ShopRecommendClient($app);
        };
    }
}
