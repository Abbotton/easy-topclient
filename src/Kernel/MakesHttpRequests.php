<?php

namespace EasyTopClient\Kernel;

trait MakesHttpRequests
{
    protected $transform = true;

    /**
     * @param string $method
     * @param string $uri
     * @param array $options
     *
     * @return array|\GuzzleHttp\Psr7\Response
     */
    public function request(string $method, string $uri, array $options = [])
    {
        $response = $this->app['http_client']->request($method, $uri, $options);

        return $this->transform ? $this->transformResponse($response) : $response;
    }

    /**
     * @return $this
     */
    public function dontTransform()
    {
        $this->transform = false;

        return $this;
    }

    /**
     * @param $response
     * @return array
     * @throws \Exception
     */
    protected function transformResponse($response): array
    {
        $result = json_decode($response->getBody()->getContents(), true);

        if (isset($result['error_response'])) {
            throw new \Exception($result['error_response']['msg'] . $result['error_response']['sub_msg'], $result['error_response']['code']);
        }

        return $result;
    }
}
