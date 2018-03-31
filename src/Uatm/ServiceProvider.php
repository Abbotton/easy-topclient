<?php

namespace EasyTopClient\Uatm;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $app
     */
    public function register(Container $app)
    {
        $app['uatmEvent'] = function ($app) {
            return new UatmEventClient($app);
        };

        $app['uatmEventItem'] = function ($app) {
            return new UatmEventItemClient($app);
        };

        $app['uatmFavorites'] = function ($app) {
            return new UatmFavoritesClient($app);
        };

        $app['uatmFavoritesItem'] = function ($app) {
            return new UatmFavoritesItemClient($app);
        };
    }
}
