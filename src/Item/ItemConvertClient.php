<?php

namespace EasyTopClient\Item;

use EasyTopClient\Kernel\BaseClient;
use EasyTopClient\Kernel\IHttpRequestInterface;

class ItemConvertClient extends BaseClient implements IHttpRequestInterface
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
     * @param $adzone_id
     * @return $this
     */
    public function setAdzoneId(int $adzone_id)
    {
        $this->parameters['adzone_id'] = $adzone_id;
        return $this;
    }

    /**
     * @param $unid
     * @return $this
     */
    public function setUnid(int $unid)
    {
        $this->parameters['unid'] = $unid;
        return $this;
    }

    /**
     * @param $dx
     * @return $this
     */
    public function setDx(int $dx)
    {
        $this->parameters['dx'] = $dx;
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
     * @return array|\GuzzleHttp\Psr7\Response
     */
    public function get()
    {
        $requestParamters = ['adzone_id', 'fields', 'num_iids'];
        $this->checkRequired($requestParamters);
        return $this->httpGet('taobao.tbk.item.convert');
    }
}
