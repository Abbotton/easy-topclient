<?php

namespace EasyTopClient\NewUser;

use EasyTopClient\Kernel\BaseClient;
use EasyTopClient\Kernel\IHttpRequestInterface;

class ScNewUserClient extends BaseClient implements IHttpRequestInterface
{

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
     * @param $site_id
     * @return $this
     */
    public function setSiteId(int $site_id)
    {
        $this->parameters['site_id'] = $site_id;
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
        return $this->httpGet('taobao.tbk.dg.newuser.order.get');
    }
}
