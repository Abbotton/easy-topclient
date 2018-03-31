<?php

namespace EasyTopClient\Rebate;

use EasyTopClient\Kernel\BaseClient;
use EasyTopClient\Kernel\IHttpRequestInterface;

class RebateOrderClient extends BaseClient implements IHttpRequestInterface
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
     * @param $start_time
     * @return $this
     */
    public function setStartTime(string $start_time)
    {
        $this->parameters['start_time'] = $start_time;
        return $this;
    }

    /**
     * @param int $span
     * @return $this
     */
    public function setSpan(int $span)
    {
        $this->parameters['span'] = $span;
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
        $requestParamters = ['fields', 'start_time', 'span'];
        $this->checkRequired($requestParamters);
        return $this->httpGet('taobao.tbk.rebate.order.get');
    }
}
