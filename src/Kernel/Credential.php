<?php

namespace EasyTopClient\Kernel;

use EasyTopClient\Application;

class Credential
{
    use MakesHttpRequests;

    /**
     * @var \EasyTopClient\Application
     */
    protected $app;

    /**
     * Credential constructor.
     *
     * @param \EasyTopClient\Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * @return string
     */
    public function token(array $params): string
    {
        ksort($params);
        $secret = $this->app['config']['app_secret'];
        $stringToBeSigned = $secret;
        foreach ($params as $k => $v) {
            if (!is_array($v) && "@" != substr($v, 0, 1)) $stringToBeSigned .= "$k$v";
        }
        unset($k, $v);
        $stringToBeSigned .= $secret;
        return strtoupper(md5($stringToBeSigned));
    }
}
