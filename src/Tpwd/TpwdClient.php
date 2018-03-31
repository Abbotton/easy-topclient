<?php

namespace EasyTopClient\Tpwd;

use EasyTopClient\Kernel\BaseClient;
use EasyTopClient\Kernel\IHttpRequestInterface;

class TpwdClient extends BaseClient implements IHttpRequestInterface
{
    /**
     * @param $user_id
     * @return $this
     */
    public function setUserId(string $user_id)
    {
        $this->parameters['user_id'] = $user_id;
        return $this;
    }

    /**
     * @param $text
     * @return $this
     */
    public function setText(string $text)
    {
        $this->parameters['text'] = $text;
        return $this;
    }

    /**
     * @param $url
     * @return $this
     */
    public function setUrl(string $url)
    {
        $this->parameters['url'] = $url;
        return $this;
    }

    /**
     * @param $logo
     * @return $this
     */
    public function setLogo(string $logo)
    {
        $this->parameters['logo'] = $logo;
        return $this;
    }

    /**
     * @param $ext
     * @return $this
     */
    public function setExt(string $ext)
    {
        $this->parameters['ext'] = $ext;
        return $this;
    }

    /**
     * @return array|\GuzzleHttp\Psr7\Response
     */
    public function get()
    {
        $requestParamters = ['url', 'text'];
        $this->checkRequired($requestParamters);
        return $this->httpGet('taobao.tbk.tpwd.create');
    }
}
