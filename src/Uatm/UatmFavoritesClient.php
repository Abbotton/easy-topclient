<?php

namespace EasyTopClient\Uatm;

use EasyTopClient\Kernel\BaseClient;
use EasyTopClient\Kernel\IHttpRequestInterface;

class UatmFavoritesClient extends BaseClient implements IHttpRequestInterface
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
     * @param int $type
     * @return $this
     */
    public function setType(int $type)
    {
        $this->parameters['type'] = $type;
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
        $this->checkRequired(['fields']);
        return $this->httpGet('taobao.tbk.uatm.favorites.get');
    }
}
