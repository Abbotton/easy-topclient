<?php

namespace EasyTopClient\Kernel;

use GuzzleHttp\HandlerStack;
use EasyTopClient\Application;
use Psr\Http\Message\RequestInterface;

class BaseClient
{
    use MakesHttpRequests;

    /**
     * @var \EasyTopClient\Application
     */
    protected $app;

    protected $taobaoHandlerStack;

    protected $parameters;

    /**
     * @param \EasyTopClient\Application
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->parameters = [];
    }

    /**
     * @param string $method
     * @return array|\GuzzleHttp\Psr7\Response
     */
    public function httpGet(string $method)
    {
        $query = compact('method') + $this->parameters;
        return $this->requestTaobao(compact('query'));
    }

    /**
     * @param array $options
     * @return array|\GuzzleHttp\Psr7\Response
     */
    protected function requestTaobao(array $options = [])
    {
        if (!$handler = $this->taobaoHandlerStack) {
            $handler = HandlerStack::create();
            $handler->push(function (callable $handler) {
                return function (RequestInterface $request, array $options) use ($handler) {
                    $query = [
                        'timestamp' => date('Y-m-d H:i:s'),
                        'format' => 'json',
                        'sign_method' => 'md5',
                        'app_key' => $this->app['config']->get('app_key'),
                        'v' => '2.0'
                    ];
                    parse_str($request->getUri()->getQuery(), $parsed);
                    $query['sign'] = $this->app['credential']->token(array_merge($query, $parsed));
                    return $handler($this->concat($request, $query), $options);
                };
            });
            $this->taobaoHandlerStack = $handler;
        }
        return $this->request('GET', 'router/rest', $options + compact('handler'));
    }

    /**
     * @param RequestInterface $request
     * @param array $query
     * @return RequestInterface
     */
    protected function concat(RequestInterface $request, array $query = []): RequestInterface
    {
        parse_str($request->getUri()->getQuery(), $parsed);
        $query = http_build_query(array_merge($query, $parsed));

        return $request->withUri($request->getUri()->withQuery($query));
    }

    /**
     * @param array $requestParamters
     * @return bool
     * @throws \Exception
     */
    public function checkRequired(array $requestParamters){
        foreach ($requestParamters as $paramter) {
            if (!$this->parameters[$paramter]) throw new \Exception('缺少必须参数`' . $paramter . '`');
        }
        return true;
    }
}
