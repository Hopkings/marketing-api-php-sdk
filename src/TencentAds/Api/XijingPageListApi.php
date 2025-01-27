<?php
/**
 * XijingPageListApi
 * PHP version 5
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketing API
 *
 * Marketing API
 *
 * OpenAPI spec version: 1.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TencentAds\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use TencentAds\ApiException;
use TencentAds\Configuration;
use TencentAds\HeaderSelector;
use TencentAds\ObjectSerializer;

/**
 * XijingPageListApi Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class XijingPageListApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation xijingPageListGet
     *
     * 蹊径-获取落地页列表
     *
     * @param  int $accountId accountId (required)
     * @param  int $pageId pageId (optional)
     * @param  string $pageServiceId pageServiceId (optional)
     * @param  string $pageName pageName (optional)
     * @param  string[] $pageType pageType (optional)
     * @param  string $pageLastModifyStartTime pageLastModifyStartTime (optional)
     * @param  string $pageLastModifyEndTime pageLastModifyEndTime (optional)
     * @param  int $pageSize pageSize (optional)
     * @param  int $pageIndex pageIndex (optional)
     * @param  string[] $pagePublishStatus pagePublishStatus (optional)
     * @param  string[] $pageStatus pageStatus (optional)
     * @param  string $pageSource pageSource (optional)
     * @param  int $pageOwnerId pageOwnerId (optional)
     * @param  int $appId appId (optional)
     * @param  string $appType appType (optional)
     * @param  string $queryType queryType (optional)
     * @param  string[] $fields 返回参数的字段列表 (optional)
     *
     * @throws \TencentAds\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentAds\Model\XijingPageListGetResponse
     */
    public function xijingPageListGet($accountId, $pageId = null, $pageServiceId = null, $pageName = null, $pageType = null, $pageLastModifyStartTime = null, $pageLastModifyEndTime = null, $pageSize = null, $pageIndex = null, $pagePublishStatus = null, $pageStatus = null, $pageSource = null, $pageOwnerId = null, $appId = null, $appType = null, $queryType = null, $fields = null)
    {
        list($response) = $this->xijingPageListGetWithHttpInfo($accountId, $pageId, $pageServiceId, $pageName, $pageType, $pageLastModifyStartTime, $pageLastModifyEndTime, $pageSize, $pageIndex, $pagePublishStatus, $pageStatus, $pageSource, $pageOwnerId, $appId, $appType, $queryType, $fields);
        return $response;
    }

    /**
     * Operation xijingPageListGetWithHttpInfo
     *
     * 蹊径-获取落地页列表
     *
     * @param  int $accountId (required)
     * @param  int $pageId (optional)
     * @param  string $pageServiceId (optional)
     * @param  string $pageName (optional)
     * @param  string[] $pageType (optional)
     * @param  string $pageLastModifyStartTime (optional)
     * @param  string $pageLastModifyEndTime (optional)
     * @param  int $pageSize (optional)
     * @param  int $pageIndex (optional)
     * @param  string[] $pagePublishStatus (optional)
     * @param  string[] $pageStatus (optional)
     * @param  string $pageSource (optional)
     * @param  int $pageOwnerId (optional)
     * @param  int $appId (optional)
     * @param  string $appType (optional)
     * @param  string $queryType (optional)
     * @param  string[] $fields 返回参数的字段列表 (optional)
     *
     * @throws \TencentAds\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentAds\Model\XijingPageListGetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function xijingPageListGetWithHttpInfo($accountId, $pageId = null, $pageServiceId = null, $pageName = null, $pageType = null, $pageLastModifyStartTime = null, $pageLastModifyEndTime = null, $pageSize = null, $pageIndex = null, $pagePublishStatus = null, $pageStatus = null, $pageSource = null, $pageOwnerId = null, $appId = null, $appType = null, $queryType = null, $fields = null)
    {
        $returnType = '\TencentAds\Model\XijingPageListGetResponse';
        $request = $this->xijingPageListGetRequest($accountId, $pageId, $pageServiceId, $pageName, $pageType, $pageLastModifyStartTime, $pageLastModifyEndTime, $pageSize, $pageIndex, $pagePublishStatus, $pageStatus, $pageSource, $pageOwnerId, $appId, $appType, $queryType, $fields);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TencentAds\Model\XijingPageListGetResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation xijingPageListGetAsync
     *
     * 蹊径-获取落地页列表
     *
     * @param  int $accountId (required)
     * @param  int $pageId (optional)
     * @param  string $pageServiceId (optional)
     * @param  string $pageName (optional)
     * @param  string[] $pageType (optional)
     * @param  string $pageLastModifyStartTime (optional)
     * @param  string $pageLastModifyEndTime (optional)
     * @param  int $pageSize (optional)
     * @param  int $pageIndex (optional)
     * @param  string[] $pagePublishStatus (optional)
     * @param  string[] $pageStatus (optional)
     * @param  string $pageSource (optional)
     * @param  int $pageOwnerId (optional)
     * @param  int $appId (optional)
     * @param  string $appType (optional)
     * @param  string $queryType (optional)
     * @param  string[] $fields 返回参数的字段列表 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function xijingPageListGetAsync($accountId, $pageId = null, $pageServiceId = null, $pageName = null, $pageType = null, $pageLastModifyStartTime = null, $pageLastModifyEndTime = null, $pageSize = null, $pageIndex = null, $pagePublishStatus = null, $pageStatus = null, $pageSource = null, $pageOwnerId = null, $appId = null, $appType = null, $queryType = null, $fields = null)
    {
        return $this->xijingPageListGetAsyncWithHttpInfo($accountId, $pageId, $pageServiceId, $pageName, $pageType, $pageLastModifyStartTime, $pageLastModifyEndTime, $pageSize, $pageIndex, $pagePublishStatus, $pageStatus, $pageSource, $pageOwnerId, $appId, $appType, $queryType, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation xijingPageListGetAsyncWithHttpInfo
     *
     * 蹊径-获取落地页列表
     *
     * @param  int $accountId (required)
     * @param  int $pageId (optional)
     * @param  string $pageServiceId (optional)
     * @param  string $pageName (optional)
     * @param  string[] $pageType (optional)
     * @param  string $pageLastModifyStartTime (optional)
     * @param  string $pageLastModifyEndTime (optional)
     * @param  int $pageSize (optional)
     * @param  int $pageIndex (optional)
     * @param  string[] $pagePublishStatus (optional)
     * @param  string[] $pageStatus (optional)
     * @param  string $pageSource (optional)
     * @param  int $pageOwnerId (optional)
     * @param  int $appId (optional)
     * @param  string $appType (optional)
     * @param  string $queryType (optional)
     * @param  string[] $fields 返回参数的字段列表 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function xijingPageListGetAsyncWithHttpInfo($accountId, $pageId = null, $pageServiceId = null, $pageName = null, $pageType = null, $pageLastModifyStartTime = null, $pageLastModifyEndTime = null, $pageSize = null, $pageIndex = null, $pagePublishStatus = null, $pageStatus = null, $pageSource = null, $pageOwnerId = null, $appId = null, $appType = null, $queryType = null, $fields = null)
    {
        $returnType = '\TencentAds\Model\XijingPageListGetResponse';
        $request = $this->xijingPageListGetRequest($accountId, $pageId, $pageServiceId, $pageName, $pageType, $pageLastModifyStartTime, $pageLastModifyEndTime, $pageSize, $pageIndex, $pagePublishStatus, $pageStatus, $pageSource, $pageOwnerId, $appId, $appType, $queryType, $fields);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'xijingPageListGet'
     *
     * @param  int $accountId (required)
     * @param  int $pageId (optional)
     * @param  string $pageServiceId (optional)
     * @param  string $pageName (optional)
     * @param  string[] $pageType (optional)
     * @param  string $pageLastModifyStartTime (optional)
     * @param  string $pageLastModifyEndTime (optional)
     * @param  int $pageSize (optional)
     * @param  int $pageIndex (optional)
     * @param  string[] $pagePublishStatus (optional)
     * @param  string[] $pageStatus (optional)
     * @param  string $pageSource (optional)
     * @param  int $pageOwnerId (optional)
     * @param  int $appId (optional)
     * @param  string $appType (optional)
     * @param  string $queryType (optional)
     * @param  string[] $fields 返回参数的字段列表 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function xijingPageListGetRequest($accountId, $pageId = null, $pageServiceId = null, $pageName = null, $pageType = null, $pageLastModifyStartTime = null, $pageLastModifyEndTime = null, $pageSize = null, $pageIndex = null, $pagePublishStatus = null, $pageStatus = null, $pageSource = null, $pageOwnerId = null, $appId = null, $appType = null, $queryType = null, $fields = null)
    {
        // verify the required parameter 'accountId' is set
        if ($accountId === null || (is_array($accountId) && count($accountId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accountId when calling xijingPageListGet'
            );
        }

        $resourcePath = '/xijing_page_list/get';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($accountId !== null) {
            $queryParams['account_id'] = ObjectSerializer::toQueryValue($accountId);
        }
        // query params
        if ($pageId !== null) {
            $queryParams['page_id'] = ObjectSerializer::toQueryValue($pageId);
        }
        // query params
        if ($pageServiceId !== null) {
            $queryParams['page_service_id'] = ObjectSerializer::toQueryValue($pageServiceId);
        }
        // query params
        if ($pageName !== null) {
            $queryParams['page_name'] = ObjectSerializer::toQueryValue($pageName);
        }
        // query params
        if (is_array($pageType)) {
            $queryParams['page_type'] = $pageType;
        } else
        if ($pageType !== null) {
            $queryParams['page_type'] = ObjectSerializer::toQueryValue($pageType);
        }
        // query params
        if ($pageLastModifyStartTime !== null) {
            $queryParams['page_last_modify_start_time'] = ObjectSerializer::toQueryValue($pageLastModifyStartTime);
        }
        // query params
        if ($pageLastModifyEndTime !== null) {
            $queryParams['page_last_modify_end_time'] = ObjectSerializer::toQueryValue($pageLastModifyEndTime);
        }
        // query params
        if ($pageSize !== null) {
            $queryParams['page_size'] = ObjectSerializer::toQueryValue($pageSize);
        }
        // query params
        if ($pageIndex !== null) {
            $queryParams['page_index'] = ObjectSerializer::toQueryValue($pageIndex);
        }
        // query params
        if (is_array($pagePublishStatus)) {
            $queryParams['page_publish_status'] = $pagePublishStatus;
        } else
        if ($pagePublishStatus !== null) {
            $queryParams['page_publish_status'] = ObjectSerializer::toQueryValue($pagePublishStatus);
        }
        // query params
        if (is_array($pageStatus)) {
            $queryParams['page_status'] = $pageStatus;
        } else
        if ($pageStatus !== null) {
            $queryParams['page_status'] = ObjectSerializer::toQueryValue($pageStatus);
        }
        // query params
        if ($pageSource !== null) {
            $queryParams['page_source'] = ObjectSerializer::toQueryValue($pageSource);
        }
        // query params
        if ($pageOwnerId !== null) {
            $queryParams['page_owner_id'] = ObjectSerializer::toQueryValue($pageOwnerId);
        }
        // query params
        if ($appId !== null) {
            $queryParams['app_id'] = ObjectSerializer::toQueryValue($appId);
        }
        // query params
        if ($appType !== null) {
            $queryParams['app_type'] = ObjectSerializer::toQueryValue($appType);
        }
        // query params
        if ($queryType !== null) {
            $queryParams['query_type'] = ObjectSerializer::toQueryValue($queryType);
        }
        // query params
        if (is_array($fields)) {
            $queryParams['fields'] = $fields;
        } else
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
        }


        // body params
        $_tempBody = null;

        if (in_array('multipart/form-data', ['text/plain'])) {
            $multipart = true;
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['text/plain']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('nonce');
        if ($apiKey !== null) {
            $queryParams['nonce'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('timestamp');
        if ($apiKey !== null) {
            $queryParams['timestamp'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
