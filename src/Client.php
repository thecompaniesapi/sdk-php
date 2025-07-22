<?php

namespace TheCompaniesApi\Sdk;

use TheCompaniesApi\Sdk\Generated\GeneratedClient;

/**
 * The Companies API Client
 * 
 * This is the main entry point for the SDK. It extends the auto-generated 
 * client with all typed API methods from the OpenAPI specification.
 * 
 * The client provides:
 * - Full type safety with auto-generated Request/Response classes
 * - IDE autocompletion for all API operations
 * - Automatic conversion between arrays and typed objects
 * - Custom query parameter serialization (JSON encoding for objects/arrays)
 * - Support for API token authentication and visitor ID tracking
 * 
 * @example Basic usage with array parameters:
 * ```php
 * $client = new Client([
 *     'apiToken' => 'your-api-token',
 *     'visitorId' => 'optional-visitor-id'
 * ]);
 * 
 * $company = $client->fetchCompany('apple.com');
 * $companies = $client->searchCompanies(['query' => 'technology']);
 * ```
 * 
 * @example Usage with Configuration object:
 * ```php
 * $config = new Configuration([
 *     'apiToken' => 'your-api-token',
 *     'timeout' => 60
 * ]);
 * $client = new Client($config);
 * ```
 * 
 * @example Typed usage:
 * ```php
 * use TheCompaniesApi\Sdk\Generated\Requests\SearchCompaniesPostRequest;
 * 
 * $request = new SearchCompaniesPostRequest(
 *     query: ['industry' => 'technology'],
 *     page: 1,
 *     size: 10
 * );
 * 
 * $response = $client->searchCompaniesPost($request);
 * // $response is a SearchCompaniesPostResponse object
 * ```
 */
class Client extends GeneratedClient
{
    // All functionality is inherited from GeneratedClient
    // This class serves as the main public API interface
}
