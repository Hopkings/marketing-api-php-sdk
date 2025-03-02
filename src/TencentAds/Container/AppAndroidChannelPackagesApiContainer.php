<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AppAndroidChannelPackagesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AppAndroidChannelPackagesApiContainer extends ApiContainer
{
    /** @var AppAndroidChannelPackagesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AppAndroidChannelPackagesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AppAndroidChannelPackagesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AppAndroidChannelPackagesApi appAndroidChannelPackagesGet function
     * @param array params
     * @return \TencentAds\Model\AppAndroidChannelPackagesGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $promotedObjectId = isset($params['promoted_object_id']) ? $params['promoted_object_id'] : null;
            $promotedObjectType = isset($params['promoted_object_type']) ? $params['promoted_object_type'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->appAndroidChannelPackagesGet($accountId, $promotedObjectId, $promotedObjectType, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AppAndroidChannelPackagesApi appAndroidChannelPackagesGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $promotedObjectId = isset($params['promoted_object_id']) ? $params['promoted_object_id'] : null;
            $promotedObjectType = isset($params['promoted_object_type']) ? $params['promoted_object_type'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->appAndroidChannelPackagesGetAsync($accountId, $promotedObjectId, $promotedObjectType, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }
}
