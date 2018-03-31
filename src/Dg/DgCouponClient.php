<?php

namespace EasyTopClient\Dg;

use EasyTopClient\Kernel\BaseClient;
use EasyTopClient\Kernel\IHttpRequestInterface;

class DgCouponClient extends BaseClient implements IHttpRequestInterface
{
    /**
     * @param $adzone_id
     * @return $this
     */
    public function setAdzoneId(int $adzone_id)
    {
        $this->parameters["adzone_id"] = $adzone_id;
        return $this;
    }

    /**
     * @param $q
     * @return $this
     */
    public function setType(string $q)
    {
        $this->parameters["q"] = $q;
        return $this;
    }

    /**
     * @param $cat
     * @return $this
     */
    public function setCat(string $cat)
    {
        $this->parameters['cat'] = $cat;
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
        $this->checkRequired(['adzone_id']);
        return $this->httpGet('taobao.tbk.dg.item.coupon.get');
    }
}
