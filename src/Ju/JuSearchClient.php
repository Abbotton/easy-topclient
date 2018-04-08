<?php

namespace EasyTopClient\Ju;

use EasyTopClient\Kernel\BaseClient;
use EasyTopClient\Kernel\IHttpRequestInterface;

class JuSearchClient extends BaseClient implements IHttpRequestInterface
{
    /**
     * @param $current_page
     * @return $this
     */
    public function setCurrentPage(int $current_page)
    {
        $this->parameters['param_top_item_query']['current_page'] = $current_page;
        return $this;
    }

    /**
     * @param $pid
     * @return $this
     */
    public function setPid(int $pid)
    {
        $this->parameters['param_top_item_query']['pid'] = $pid;
        return $this;
    }

    /**
     * @param $status
     * @return $this
     */
    public function setStatus(int $status)
    {
        $this->parameters['param_top_item_query']['status'] = $status;
        return $this;
    }

    /**
     * @param $taobao_category_id
     * @return $this
     */
    public function setTaobaoCategoryId(int $taobao_category_id)
    {
        $this->parameters['param_top_item_query']['taobao_category_id'] = $taobao_category_id;
        return $this;
    }

    /**
     * @param $word
     * @return $this
     */
    public function setWord(string $word)
    {
        $this->parameters['param_top_item_query']['word'] = $word;
        return $this;
    }

    /**
     * @param $postage
     * @return $this
     */
    public function setPostage(bool $postage)
    {
        $this->parameters['postage'] = $postage;
        return $this;
    }

    /**
     * @param $page_size
     * @return $this
     */
    public function setPageSize(int $page_size)
    {
        $this->parameters['param_top_item_query']['page_size'] = $page_size;
        return $this;
    }

    /**
     * @return array|\GuzzleHttp\Psr7\Response
     */
    public function get()
    {
        $this->parameters['param_top_item_query'] = json_encode($this->parameters['param_top_item_query']);
        return $this->httpGet('taobao.ju.items.search');
    }
}
