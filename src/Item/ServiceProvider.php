<?php

namespace EasyTopClient\Item;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $app
     */
    public function register(Container $app)
    {
        $app['item'] = function ($app) {
            return new ItemClient($app);
        };

        $app['itemRecommend'] = function ($app) {
            return new ItemRecommendClient($app);
        };

        $app['itemInfo'] = function ($app) {
            return new ItemInfoClient($app);
        };

        $app['convert'] = function ($app) {
            return new ItemConvertClient($app);
        };

        $app['guess'] = function ($app) {
            return new ItemGuessClient($app);
        };
    }
}
