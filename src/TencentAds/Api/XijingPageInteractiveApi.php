<?php
/**
 * XijingPageInteractiveApi
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
 * XijingPageInteractiveApi Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class XijingPageInteractiveApi
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
     * Operation xijingPageInteractiveAdd
     *
     * 蹊径-创建互动落地页
     *
     * @param  int $accountId accountId (required)
     * @param  int $isAutoSubmit isAutoSubmit (required)
     * @param  string $pageType pageType (required)
     * @param  string $interactivePageType interactivePageType (required)
     * @param  string $pageTitle pageTitle (required)
     * @param  string $pageName pageName (required)
     * @param  string $mobileAppId mobileAppId (required)
     * @param  \SplFileObject $file file (optional)
     *
     * @throws \TencentAds\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentAds\Model\XijingPageInteractiveAddResponse
     */
    public function xijingPageInteractiveAdd($accountId, $isAutoSubmit, $pageType, $interactivePageType, $pageTitle, $pageName, $mobileAppId, $file = null)
    {
        list($response) = $this->xijingPageInteractiveAddWithHttpInfo($accountId, $isAutoSubmit, $pageType, $interactivePageType, $pageTitle, $pageName, $mobileAppId, $file);
        return $response;
    }

    /**
     * Operation xijingPageInteractiveAddWithHttpInfo
     *
     * 蹊径-创建互动落地页
     *
     * @param  int $accountId (required)
     * @param  int $isAutoSubmit (required)
     * @param  string $pageType (required)
     * @param  string $interactivePageType (required)
     * @param  string $pageTitle (required)
     * @param  string $pageName (required)
     * @param  string $mobileAppId (required)
     * @param  \SplFileObject $file (optional)
     *
     * @throws \TencentAds\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentAds\Model\XijingPageInteractiveAddResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function xijingPageInteractiveAddWithHttpInfo($accountId, $isAutoSubmit, $pageType, $interactivePageType, $pageTitle, $pageName, $mobileAppId, $file = null)
    {
        $returnType = '\TencentAds\Model\XijingPageInteractiveAddResponse';
        $request = $this->xijingPageInteractiveAddRequest($accountId, $isAutoSubmit, $pageType, $interactivePageType, $pageTitle, $pageName, $mobileAppId, $file);

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
                        '\TencentAds\Model\XijingPageInteractiveAddResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation xijingPageInteractiveAddAsync
     *
     * 蹊径-创建互动落地页
     *
     * @param  int $accountId (required)
     * @param  int $isAutoSubmit (required)
     * @param  string $pageType (required)
     * @param  string $interactivePageType (required)
     * @param  string $pageTitle (required)
     * @param  string $pageName (required)
     * @param  string $mobileAppId (required)
     * @param  \SplFileObject $file (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function xijingPageInteractiveAddAsync($accountId, $isAutoSubmit, $pageType, $interactivePageType, $pageTitle, $pageName, $mobileAppId, $file = null)
    {
        return $this->xijingPageInteractiveAddAsyncWithHttpInfo($accountId, $isAutoSubmit, $pageType, $interactivePageType, $pageTitle, $pageName, $mobileAppId, $file)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation xijingPageInteractiveAddAsyncWithHttpInfo
     *
     * 蹊径-创建互动落地页
     *
     * @param  int $accountId (required)
     * @param  int $isAutoSubmit (required)
     * @param  string $pageType (required)
     * @param  string $interactivePageType (required)
     * @param  string $pageTitle (required)
     * @param  string $pageName (required)
     * @param  string $mobileAppId (required)
     * @param  \SplFileObject $file (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function xijingPageInteractiveAddAsyncWithHttpInfo($accountId, $isAutoSubmit, $pageType, $interactivePageType, $pageTitle, $pageName, $mobileAppId, $file = null)
    {
        $returnType = '\TencentAds\Model\XijingPageInteractiveAddResponse';
        $request = $this->xijingPageInteractiveAddRequest($accountId, $isAutoSubmit, $pageType, $interactivePageType, $pageTitle, $pageName, $mobileAppId, $file);

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
     * Create request for operation 'xijingPageInteractiveAdd'
     *
     * @param  int $accountId (required)
     * @param  int $isAutoSubmit (required)
     * @param  string $pageType (required)
     * @param  string $interactivePageType (required)
     * @param  string $pageTitle (required)
     * @param  string $pageName (required)
     * @param  string $mobileAppId (required)
     * @param  \SplFileObject $file (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function xijingPageInteractiveAddRequest($accountId, $isAutoSubmit, $pageType, $interactivePageType, $pageTitle, $pageName, $mobileAppId, $file = null)
    {
        // verify the required parameter 'accountId' is set
        if ($accountId === null || (is_array($accountId) && count($accountId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accountId when calling xijingPageInteractiveAdd'
            );
        }
        // verify the required parameter 'isAutoSubmit' is set
        if ($isAutoSubmit === null || (is_array($isAutoSubmit) && count($isAutoSubmit) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $isAutoSubmit when calling xijingPageInteractiveAdd'
            );
        }
        // verify the required parameter 'pageType' is set
        if ($pageType === null || (is_array($pageType) && count($pageType) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pageType when calling xijingPageInteractiveAdd'
            );
        }
        // verify the required parameter 'interactivePageType' is set
        if ($interactivePageType === null || (is_array($interactivePageType) && count($interactivePageType) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $interactivePageType when calling xijingPageInteractiveAdd'
            );
        }
        // verify the required parameter 'pageTitle' is set
        if ($pageTitle === null || (is_array($pageTitle) && count($pageTitle) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pageTitle when calling xijingPageInteractiveAdd'
            );
        }
        // verify the required parameter 'pageName' is set
        if ($pageName === null || (is_array($pageName) && count($pageName) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pageName when calling xijingPageInteractiveAdd'
            );
        }
        // verify the required parameter 'mobileAppId' is set
        if ($mobileAppId === null || (is_array($mobileAppId) && count($mobileAppId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $mobileAppId when calling xijingPageInteractiveAdd'
            );
        }

        $resourcePath = '/xijing_page_interactive/add';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // form params
        if ($accountId !== null) {
            $formParams['account_id'] = ObjectSerializer::toFormValue($accountId);
        }
        // form params
        if ($isAutoSubmit !== null) {
            $formParams['is_auto_submit'] = ObjectSerializer::toFormValue($isAutoSubmit);
        }
        // form params
        if ($pageType !== null) {
            $formParams['page_type'] = ObjectSerializer::toFormValue($pageType);
        }
        // form params
        if ($interactivePageType !== null) {
            $formParams['interactive_page_type'] = ObjectSerializer::toFormValue($interactivePageType);
        }
        // form params
        if ($pageTitle !== null) {
            $formParams['page_title'] = ObjectSerializer::toFormValue($pageTitle);
        }
        // form params
        if ($pageName !== null) {
            $formParams['page_name'] = ObjectSerializer::toFormValue($pageName);
        }
        // form params
        if ($mobileAppId !== null) {
            $formParams['mobile_app_id'] = ObjectSerializer::toFormValue($mobileAppId);
        }
        // form params
        if ($file !== null) {
            $multipart = true;
            $formParams['file'] = \GuzzleHttp\Psr7\try_fopen(ObjectSerializer::toFormValue($file), 'rb');
        }
        // body params
        $_tempBody = null;

        if (in_array('multipart/form-data', ['multipart/form-data'])) {
            $multipart = true;
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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
            'POST',
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
