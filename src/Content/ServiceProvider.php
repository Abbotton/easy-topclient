<?php

namespace EasyTopClient\Content;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $app
     */
    public function register(Container $app)
    {
        $app['content'] = function ($app) {
            return new ContentClient($app);
        };
    }
}
