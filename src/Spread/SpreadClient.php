<?php

namespace EasyTopClient\Spread;

use EasyTopClient\Kernel\BaseClient;
use EasyTopClient\Kernel\IHttpRequestInterface;

class SpreadClient extends BaseClient implements IHttpRequestInterface
{
    /**
     * @param $requests
     * @return $this
     */
    public function setRequests(array $requests)
    {
        $this->parameters["requests"] = $requests;
        return $this;
    }

    /**
     * @return array|\GuzzleHttp\Psr7\Response
     */
    public function get()
    {
        $this->checkRequired(['requests']);
        return $this->httpGet('taobao.tbk.spread.get');
    }
}
