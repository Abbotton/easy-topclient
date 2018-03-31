<?php

namespace EasyTopClient\Item;

use EasyTopClient\Kernel\BaseClient;
use EasyTopClient\Kernel\IHttpRequestInterface;

class ItemInfoClient extends BaseClient implements IHttpRequestInterface
{
    /**
     * @param $fields
     * @return $this
     */
    public function setFields(string $fields)
    {
        $this->parameters['fields'] = $fields;
        return $this;
    }

    /**
     * @param $platform
     * @return $this
     */
    public function setPlatform(int $platform)
    {
        $this->parameters['platform'] = $platform;
        return $this;
    }

    /**
     * @param $num_iids
     * @return $this
     */
    public function setNumIids(string $num_iids)
    {
        $this->parameters['num_iids'] = $num_iids;
        return $this;
    }

    /**
     * @return array|\GuzzleHttp\Psr7\Response
     */
    public function get()
    {
        $requestParamters = ['fields', 'num_iids'];
        $this->checkRequired($requestParamters);
        return $this->httpGet('taobao.tbk.item.info.get');
    }
}