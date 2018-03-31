<?php

namespace EasyTopClient\Content;

use EasyTopClient\Kernel\BaseClient;
use EasyTopClient\Kernel\IHttpRequestInterface;

class ContentClient extends BaseClient implements IHttpRequestInterface
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
     * @param $type
     * @return $this
     */
    public function setType(int $type)
    {
        $this->parameters["type"] = $type;
        return $this;
    }

    /**
     * @param $before_timestamp
     * @return $this
     */
    public function setBeforeTimestamp(int $before_timestamp)
    {
        $this->parameters["before_timestamp"] = $before_timestamp;
        return $this;
    }

    /**
     * @param $count
     * @return $this
     */
    public function setCount(int $count)
    {
        $this->parameters["count"] = $count;
        return $this;
    }

    /**
     * @param $cid
     * @return $this
     */
    public function setCid(int $cid)
    {
        $this->parameters["cid"] = $cid;
        return $this;
    }

    /**
     * @param $image_height
     * @return $this
     */
    public function setImageHeight(int $image_height)
    {
        $this->parameters["image_height"] = $image_height;
        return $this;
    }

    /**
     * @param $image_width
     * @return $this
     */
    public function setImageWidth(int $image_width)
    {
        $this->parameters["image_width"] = $image_width;
        return $this;
    }

    /**
     * @param $content_set
     * @return $this
     */
    public function setContentSet(int $content_set)
    {
        $this->parameters["content_set"] = $content_set;
        return $this;
    }

    /**
     * @return array|\GuzzleHttp\Psr7\Response
     * @throws \Exception
     */
    public function get()
    {
        $this->checkRequired(['adzone_id']);
        return $this->httpGet('taobao.tbk.content.get');
    }
}
