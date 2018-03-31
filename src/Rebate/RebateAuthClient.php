<?php

namespace EasyTopClient\Rebate;

use EasyTopClient\Kernel\BaseClient;
use EasyTopClient\Kernel\IHttpRequestInterface;

class RebateAuthClient extends BaseClient implements IHttpRequestInterface
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
     * @param $params
     * @return $this
     */
    public function setParams(string $params)
    {
        $this->parameters['params'] = $params;
        return $this;
    }

    /**
     * @param $type
     * @return $this
     */
    public function setType(string $type)
    {
        $this->parameters['type'] = $type;
        return $this;
    }

    /**
     * @return array|\GuzzleHttp\Psr7\Response
     */
    public function get()
    {
        $requestParamters = ['fields', 'params', 'type'];
        $this->checkRequired($requestParamters);
        return $this->httpGet('taobao.tbk.rebate.auth.get');
    }
}
