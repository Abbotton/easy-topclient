<?php

namespace EasyTopClient\Shop;

use EasyTopClient\Kernel\BaseClient;
use EasyTopClient\Kernel\IHttpRequestInterface;

class ShopClient extends BaseClient implements IHttpRequestInterface
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
     * @param $q
     * @return $this
     */
    public function setQ(string $q)
    {
        $this->parameters['q'] = $q;
        return $this;
    }

    /**
     * @param string $sort
     * @return $this
     * @throws \Exception
     */
    public function setSort(string $sort)
    {
        $sortArray = ['des', 'asc', 'commission_rate', 'auction_count', 'total_auction'];

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
     * @param int $start_credit
     * @return $this
     */
    public function setStartCredit(int $start_credit)
    {
        $this->parameters['start_credit'] = $start_credit;
        return $this;
    }

    /**
     * @param int $end_credit
     * @return $this
     */
    public function setEndCredit(int $end_credit)
    {
        $this->parameters['end_credit'] = $end_credit;
        return $this;
    }

    /**
     * @param int $start_commission_rate
     * @return $this
     */
    public function setStartCommissionRate(int $start_commission_rate)
    {
        $this->parameters['start_commission_rate'] = $start_commission_rate;
        return $this;
    }

    /**
     * @param int $end_commission_rate
     * @return $this
     */
    public function setEndCommissionRate(int $end_commission_rate)
    {
        $this->parameters['end_commission_rate'] = $end_commission_rate;
        return $this;
    }

    /**
     * @param int $start_total_action
     * @return $this
     */
    public function setStartTotalAction(int $start_total_action)
    {
        $this->parameters['start_total_action'] = $start_total_action;
        return $this;
    }

    /**
     * @param int $end_total_action
     * @return $this
     */
    public function setEndTotalAction(int $end_total_action)
    {
        $this->parameters['end_total_action'] = $end_total_action;
        return $this;
    }

    /**
     * @param int $start_auction_count
     * @return $this
     */
    public function setStartAuctionCount(int $start_auction_count)
    {
        $this->parameters['start_auction_count'] = $start_auction_count;
        return $this;
    }

    /**
     * @param int $end_auction_count
     * @return $this
     */
    public function setEndAuctionCount(int $end_auction_count)
    {
        $this->parameters['end_total_action'] = $end_auction_count;
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
        $this->checkRequired(['fields', 'q']);
        return $this->httpGet('taobao.tbk.shop.get');
    }
}
