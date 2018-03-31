<?php

namespace EasyTopClient\NewUser;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $app
     */
    public function register(Container $app)
    {
        $app['scNewUser'] = function ($app) {
            return new ScNewUserClient($app);
        };

        $app['dgNewUser'] = function ($app) {
            return new DgNewUserClient($app);
        };
    }
}
