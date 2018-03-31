<?php

namespace EasyTopClient\Shop;

use EasyTopClient\Kernel\BaseClient;
use EasyTopClient\Kernel\IHttpRequestInterface;

class ShopRecommendClient extends BaseClient implements IHttpRequestInterface
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
     * @param $user_id
     * @return $this
     */
    public function setUserId(int $user_id)
    {
        $this->parameters['user_id'] = $user_id;
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
        $requestParamters = ['fields', 'user_id'];
        $this->checkRequired($requestParamters);
        return $this->httpGet('taobao.tbk.shop.recommend.get');
    }
}