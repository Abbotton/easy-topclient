<?php

namespace EasyTopClient\Uatm;

use EasyTopClient\Kernel\BaseClient;
use EasyTopClient\Kernel\IHttpRequestInterface;

class UatmEventItemClient extends BaseClient implements IHttpRequestInterface
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
     * @param $event_id
     * @return $this
     */
    public function setEventId(int $event_id)
    {
        $this->parameters['event_id'] = $event_id;
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
        $requestParamters = ['fields', 'event_id', 'adzone_id'];
        $this->checkRequired($requestParamters);
        return $this->httpGet('taobao.tbk.uatm.event.item.get');
    }
}
