<?php
/**
 * ShipmentApi
 * PHP version 5
 *
 * @category Class
 * @package  ChrisHemmings\AusPost
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Australia Post Shipping & Tracking API
 *
 * Integrating your systems with Australia Post and StarTrack using the Shipping and Tracking APIs enables you to lodge the information we need when sending parcels through our delivery networks.  You can currently use the Shipping and Tracking APIs for...  - Lodgement of parcels – creates an order, including all the shipments and items, and lodges the parcels with Australia Post and StarTrack  - Label printing - prints our most up-to-date labels to improve your operational efficiency  - Getting your contract details - gives all your current account information, including products, contract expiry dates & product features  - Getting your contract pricing - provides an indicative price at checkout to enable the best service to be selected, giving you confidence of cost of lodgement  - Tracking your parcels - allows you to easily surface tracking information on your website for your staff or customers
 *
 * OpenAPI spec version: 1.0.2
 * Contact: cwhemmings@gmail.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.52
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChrisHemmings\AusPost\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use ChrisHemmings\AusPost\ApiException;
use ChrisHemmings\AusPost\Configuration;
use ChrisHemmings\AusPost\HeaderSelector;
use ChrisHemmings\AusPost\ObjectSerializer;

/**
 * ShipmentApi Class Doc Comment
 *
 * @category Class
 * @package  ChrisHemmings\AusPost
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentApi
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
     * Operation labelsPost
     *
     * Create Labels
     *
     * @param  \ChrisHemmings\AusPost\Client\Model\CreateLabelsRequest $body Labels to create (optional)
     *
     * @throws \ChrisHemmings\AusPost\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChrisHemmings\AusPost\Client\Model\CreateLabelsResponse
     */
    public function labelsPost($body = null)
    {
        list($response) = $this->labelsPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation labelsPostWithHttpInfo
     *
     * Create Labels
     *
     * @param  \ChrisHemmings\AusPost\Client\Model\CreateLabelsRequest $body Labels to create (optional)
     *
     * @throws \ChrisHemmings\AusPost\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChrisHemmings\AusPost\Client\Model\CreateLabelsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function labelsPostWithHttpInfo($body = null)
    {
        $returnType = '\ChrisHemmings\AusPost\Client\Model\CreateLabelsResponse';
        $request = $this->labelsPostRequest($body);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ChrisHemmings\AusPost\Client\Model\CreateLabelsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation labelsPostAsync
     *
     * Create Labels
     *
     * @param  \ChrisHemmings\AusPost\Client\Model\CreateLabelsRequest $body Labels to create (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function labelsPostAsync($body = null)
    {
        return $this->labelsPostAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation labelsPostAsyncWithHttpInfo
     *
     * Create Labels
     *
     * @param  \ChrisHemmings\AusPost\Client\Model\CreateLabelsRequest $body Labels to create (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function labelsPostAsyncWithHttpInfo($body = null)
    {
        $returnType = '\ChrisHemmings\AusPost\Client\Model\CreateLabelsResponse';
        $request = $this->labelsPostRequest($body);

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
     * Create request for operation 'labelsPost'
     *
     * @param  \ChrisHemmings\AusPost\Client\Model\CreateLabelsRequest $body Labels to create (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function labelsPostRequest($body = null)
    {

        $resourcePath = '/labels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['*/*']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Account-Number');
        if ($apiKey !== null) {
            $headers['Account-Number'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation shipmentsPost
     *
     * Create Domestic Shipments
     *
     * @param  \ChrisHemmings\AusPost\Client\Model\CreateShipmentsRequest $body Shipments to create (optional)
     *
     * @throws \ChrisHemmings\AusPost\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChrisHemmings\AusPost\Client\Model\CreateShipmentsResponse
     */
    public function shipmentsPost($body = null)
    {
        list($response) = $this->shipmentsPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation shipmentsPostWithHttpInfo
     *
     * Create Domestic Shipments
     *
     * @param  \ChrisHemmings\AusPost\Client\Model\CreateShipmentsRequest $body Shipments to create (optional)
     *
     * @throws \ChrisHemmings\AusPost\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChrisHemmings\AusPost\Client\Model\CreateShipmentsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function shipmentsPostWithHttpInfo($body = null)
    {
        $returnType = '\ChrisHemmings\AusPost\Client\Model\CreateShipmentsResponse';
        $request = $this->shipmentsPostRequest($body);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ChrisHemmings\AusPost\Client\Model\CreateShipmentsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ChrisHemmings\AusPost\Client\Model\ResponseError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ChrisHemmings\AusPost\Client\Model\ResponseError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ChrisHemmings\AusPost\Client\Model\ResponseError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation shipmentsPostAsync
     *
     * Create Domestic Shipments
     *
     * @param  \ChrisHemmings\AusPost\Client\Model\CreateShipmentsRequest $body Shipments to create (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function shipmentsPostAsync($body = null)
    {
        return $this->shipmentsPostAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation shipmentsPostAsyncWithHttpInfo
     *
     * Create Domestic Shipments
     *
     * @param  \ChrisHemmings\AusPost\Client\Model\CreateShipmentsRequest $body Shipments to create (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function shipmentsPostAsyncWithHttpInfo($body = null)
    {
        $returnType = '\ChrisHemmings\AusPost\Client\Model\CreateShipmentsResponse';
        $request = $this->shipmentsPostRequest($body);

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
     * Create request for operation 'shipmentsPost'
     *
     * @param  \ChrisHemmings\AusPost\Client\Model\CreateShipmentsRequest $body Shipments to create (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function shipmentsPostRequest($body = null)
    {

        $resourcePath = '/shipments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['*/*']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Account-Number');
        if ($apiKey !== null) {
            $headers['Account-Number'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
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
