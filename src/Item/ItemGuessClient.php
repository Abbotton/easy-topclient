<?php

namespace EasyTopClient\Item;

use EasyTopClient\Kernel\BaseClient;

use EasyTopClient\Kernel\IHttpRequestInterface;

class ItemGuessClient extends BaseClient implements IHttpRequestInterface
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
     * @param $user_id
     * @return $this
     */
    public function setUserId(int $user_id)
    {
        $this->parameters['user_id'] = $user_id;
        return $this;
    }

    /**
     * @param $user_nick
     * @return $this
     */
    public function setUserNick(string $user_nick)
    {
        $this->parameters['user_nick'] = $user_nick;
        return $this;
    }

    /**
     * @param $os
     * @return $this
     */
    public function setOs(string $os)
    {
        $this->parameters['os'] = $os;
        return $this;
    }

    /**
     * @param $idfa
     * @return $this
     */
    public function setIdfa(string $idfa)
    {
        $this->parameters['idfa'] = $idfa;
        return $this;
    }

    /**
     * @param $imei
     * @return $this
     */
    public function setImei(string $imei)
    {
        $this->parameters['imei'] = $imei;
        return $this;
    }

    /**
     * @param $imei_md5
     * @return $this
     */
    public function setImeiMd5(string $imei_md5)
    {
        $this->parameters['imei_md5'] = $imei_md5;
        return $this;
    }

    /**
     * @param $ip
     * @return $this
     */
    public function setIp(string $ip)
    {
        $this->parameters['ip'] = $ip;
        return $this;
    }

    /**
     * @param $ua
     * @return $this
     */
    public function setUa(string $ua)
    {
        $this->parameters['ua'] = $ua;
        return $this;
    }

    /**
     * @param $apnm
     * @return $this
     */
    public function setApnm(string $apnm)
    {
        $this->parameters['apnm'] = $apnm;
        return $this;
    }

    /**
     * @param $net
     * @return $this
     */
    public function setNet(string $net)
    {
        $this->parameters['net'] = $net;
        return $this;
    }

    /**
     * @param $mn
     * @return $this
     */
    public function setMn(string $mn)
    {
        $this->parameters['mn'] = $mn;
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
        $requestParamters = ['adzone_id', 'os', 'ip', 'ua', 'net'];
        $this->checkRequired($requestParamters);
        return $this->httpGet('taobao.tbk.item.get');
    }
}
