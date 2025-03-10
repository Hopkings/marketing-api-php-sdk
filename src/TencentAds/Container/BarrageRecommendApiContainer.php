<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\BarrageRecommendApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class BarrageRecommendApiContainer extends ApiContainer
{
    /** @var BarrageRecommendApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return BarrageRecommendApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new BarrageRecommendApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle BarrageRecommendApi barrageRecommendGet function
     * @param array params
     * @return \TencentAds\Model\BarrageRecommendGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->barrageRecommendGet($accountId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle BarrageRecommendApi barrageRecommendGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->barrageRecommendGetAsync($accountId, $fields);
            return $response;
        });
    }
}
