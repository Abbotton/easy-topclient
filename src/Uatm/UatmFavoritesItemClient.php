<?php

namespace EasyTopClient\Uatm;

use EasyTopClient\Kernel\BaseClient;
use EasyTopClient\Kernel\IHttpRequestInterface;

class UatmFavoritesItemClient extends BaseClient implements IHttpRequestInterface
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
     * @param $adzone_id
     * @return $this
     */
    public function setAdzoneId(int $adzone_id)
    {
        $this->parameters['adzone_id'] = $adzone_id;
        return $this;
    }

    /**
     * @param $favorites_id
     * @return $this
     */
    public function setFavoritesId(int $favorites_id)
    {
        $this->parameters['favorites_id'] = $favorites_id;
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
     * @param $page_no
     * @return $this
     */
    public function setPageNo(int $page_no)
    {
        $this->parameters['page_no'] = $page_no;
        return $this;
    }

    /**
     * @param $page_size
     * @return $this
     */
    public function setPageSize(int $page_size)
    {
        $this->parameters['page_size'] = $page_size;
        return $this;
    }

    /**
     * @return array|\GuzzleHttp\Psr7\Response
     */
    public function get()
    {
        $requestParamters = ['fields', 'favorites_id', 'adzone_id'];
        $this->checkRequired($requestParamters);
        return $this->httpGet('taobao.tbk.uatm.favorites.item.get');
    }
}
