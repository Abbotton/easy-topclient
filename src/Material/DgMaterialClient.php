<?php

namespace EasyTopClient\Material;

use EasyTopClient\Kernel\BaseClient;
use EasyTopClient\Kernel\IHttpRequestInterface;

class DgMaterialClient extends BaseClient implements IHttpRequestInterface
{
    /**
     * @param $start_dsr
     * @return $this
     */
    public function setStartDsr(int $start_dsr)
    {
        $this->parameters['start_dsr'] = $start_dsr;
        return $this;
    }

    /**
     * @param $has_coupon
     * @return $this
     */
    public function setHasCoupon(bool $has_coupon)
    {
        $this->parameters['has_coupon'] = $has_coupon;
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
     * @param $q
     * @return $this
     */
    public function setQ(string $q)
    {
        $this->parameters['q'] = $q;
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
     * @param $itemloc
     * @return $this
     */
    public function setItemloc(string $itemloc)
    {
        $this->parameters['itemloc'] = $itemloc;
        return $this;
    }

    /**
     * @param string $sort
     * @return $this
     * @throws \Exception
     */
    public function setSort(string $sort)
    {
        $sortArray = ['des', 'asc', 'total_sales', 'tk_rate', 'tk_total_sales', 'tk_total_commi', 'price'];

        if (!in_array($sort, $sortArray)) throw new \Exception('排序规则必须是' . implode(',', $sortArray) . '中的一种');

        $this->parameters['sort'] = $sort;
        return $this;
    }

    /**
     * @param $is_tmall
     * @return $this
     */
    public function setIsTmall(bool $is_tmall)
    {
        $this->parameters['is_tmall'] = $is_tmall;
        return $this;
    }


    /**
     * @param $is_overseas
     * @return $this
     */
    public function setIsOverseas(bool $is_overseas)
    {
        $this->parameters['is_overseas'] = $is_overseas;
        return $this;
    }


    /**
     * @param $start_price
     * @return $this
     */
    public function setStartPrice(int $start_price)
    {
        $this->parameters['start_price'] = $start_price;
        return $this;
    }


    /**
     * @param $end_price
     * @return $this
     */
    public function setEndPrice(int $end_price)
    {
        $this->parameters['end_price'] = $end_price;
        return $this;
    }


    /**
     * @param $start_tk_rate
     * @return $this
     */
    public function setStartTkRate(int $start_tk_rate)
    {
        $this->parameters['start_tk_rate'] = $start_tk_rate;
        return $this;
    }

    /**
     * @param $end_tk_rate
     * @return $this
     */
    public function setEndTkRate(int $end_tk_rate)
    {
        $this->parameters['end_tk_rate'] = $end_tk_rate;
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
        return $this->httpGet('taobao.tbk.dg.material.optional');
    }
}
