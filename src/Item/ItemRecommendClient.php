<?php

namespace EasyTopClient\Item;

use EasyTopClient\Kernel\BaseClient;
use EasyTopClient\Kernel\IHttpRequestInterface;

class ItemRecommendClient extends BaseClient implements IHttpRequestInterface
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
     * @param $num_iid
     * @return $this
     */
    public function setNumIid(int $num_iid)
    {
        $this->parameters['num_iid'] = $num_iid;
        return $this;
    }

    /**
     * @param int $count
     * @return $this
     */
    public function setCount(int $count)
    {
        $this->parameters['count'] = $count;
        return $this;
    }

    /**
     * @return array|\GuzzleHttp\Psr7\Response
     */
    public function get()
    {
        $requestParamters = ['fields', 'num_iids'];
        $this->checkRequired($requestParamters);
        return $this->httpGet('taobao.tbk.item.recommend.get');
    }
}