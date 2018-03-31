<?php

namespace EasyTopClient\Tpwd;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $app
     */
    public function register(Container $app)
    {
        $app['tpwd'] = function ($app) {
            return new TpwdClient($app);
        };
    }
}
