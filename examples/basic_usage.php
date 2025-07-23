<?php

require_once __DIR__ . '/../vendor/autoload.php';

use TheCompaniesApi\Sdk\Client;
use TheCompaniesApi\Sdk\Configuration;
use TheCompaniesApi\Sdk\ApiException;

// Example 1: Create client with API token
try {
    $client = new Client([
        'apiToken' => 'your-api-token-here',
        'apiUrl' => 'https://api.thecompaniesapi.com', // optional, this is the default
        'visitorId' => 'visitor-123', // optional
    ]);
    
    // Example API calls (adjust these based on actual API endpoints)
    $companies = $client->searchCompanies([
        'query' => 'Apple Inc',
        'limit' => 10
    ]);
    
    echo "Search results:\n";
    print_r($companies);
    
} catch (ApiException $e) {
    echo "API Error: " . $e->getMessage() . "\n";
    echo "Status Code: " . $e->getStatusCode() . "\n";
    echo "Response Data: " . json_encode($e->getResponseData()) . "\n";
}

// Example 2: Create client with simple API token
try {
    $client = new Client(['apiToken' => 'your-api-token-here']);
    
    $company = $client->fetchCompany('apple.com');
    
    echo "Company details:\n";
    print_r($company);
    
} catch (ApiException $e) {
    echo "API Error: " . $e->getMessage() . "\n";
}

// Example 3: Create client with custom configuration
try {
    $config = new Configuration([
        'baseUrl' => 'https://api.thecompaniesapi.com',
        'apiToken' => 'your-api-token',
        'visitorId' => 'visitor-456',
        'timeout' => 60,
        'verifySSL' => true,
        'defaultHeaders' => [
            'X-Custom-Header' => 'custom-value'
        ]
    ]);
    
    $client = new Client($config);
    
    // Make a custom request
    $response = $client->get('/custom-endpoint', [
        'param1' => 'value1',
        'param2' => 'value2'
    ]);
    
    echo "Custom response:\n";
    print_r($response);
    
} catch (ApiException $e) {
    echo "API Error: " . $e->getMessage() . "\n";
}

// Example 4: Direct HTTP methods
try {
    $client = new Client(['apiToken' => 'your-api-token']);
    
    // GET request
    $getResult = $client->get('/companies', ['limit' => 5]);
    
    // POST request
    $postResult = $client->post('/companies', [
        'name' => 'New Company',
        'industry' => 'Technology'
    ]);
    
    // PUT request
    $putResult = $client->put('/companies/123', [
        'name' => 'Updated Company Name'
    ]);
    
    // DELETE request
    $deleteResult = $client->delete('/companies/123');
    
    echo "All requests completed successfully\n";
    
} catch (ApiException $e) {
    echo "API Error: " . $e->getMessage() . "\n";
}
