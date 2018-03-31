<?php

namespace EasyTopClient\Coupon;

use EasyTopClient\Kernel\BaseClient;
use EasyTopClient\Kernel\IHttpRequestInterface;

class CouponClient extends BaseClient implements IHttpRequestInterface
{
    /**
     * @param $me
     * @return $this
     */
    public function setMe(string $me)
    {
        $this->parameters["me"] = $me;
        return $this;
    }

    /**
     * @param $item_id
     * @return $this
     */
    public function setItemId(int $item_id)
    {
        $this->parameters["item_id"] = $item_id;
        return $this;
    }

    /**
     * @param $activity_id
     * @return $this
     */
    public function setActivityId(int $activity_id)
    {
        $this->parameters["activity_id"] = $activity_id;
        return $this;
    }

    /**
     * @return array|\GuzzleHttp\Psr7\Response
     */
    public function get()
    {
        return $this->httpGet('taobao.tbk.coupon.get');
    }
}
