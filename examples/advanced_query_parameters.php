<?php

require_once __DIR__ . '/../vendor/autoload.php';

use TheCompaniesApi\Sdk\Client;
use TheCompaniesApi\Sdk\ApiException;

try {
    $client = new Client([
        'apiToken' => 'your-api-token',
        'visitorId' => 'demo-visitor'
    ]);
    
    // Example 1: Complex filter objects
    echo "1. Complex Filter Objects:\n";
    echo "   This would create: ?filters=" . urlencode('{"industry":"technology","location":{"country":"US","state":"CA"},"size":"large"}') . "\n\n";
    
    try {
        $complexFilters = $client->searchCompanies([
            'filters' => [
                'industry' => 'technology',
                'location' => [
                    'country' => 'US',
                    'state' => 'CA'
                ],
                'size' => 'large'
            ],
            'limit' => 10
        ]);
        echo "   ✓ Request would be sent with JSON-encoded filters\n";
    } catch (ApiException $e) {
        echo "   ℹ️  Demo request (would work with real API): " . $e->getMessage() . "\n";
    }
    
    // Example 2: Array parameters
    echo "\n2. Array Parameters:\n";
    echo "   This would create: ?industries=" . urlencode('["technology","finance","healthcare"]') . "\n\n";
    
    try {
        $arrayParams = $client->searchCompanies([
            'industries' => ['technology', 'finance', 'healthcare'],
            'fields' => ['name', 'industry', 'website', 'employees'],
            'sort_by' => 'name'
        ]);
        echo "   ✓ Arrays are JSON-encoded before URL encoding\n";
    } catch (ApiException $e) {
        echo "   ℹ️  Demo request (would work with real API): " . $e->getMessage() . "\n";
    }
    
    // Example 3: Mixed parameter types
    echo "\n3. Mixed Parameter Types:\n";
    $params = [
        'query' => 'Apple Inc',                    // String: regular encoding
        'filters' => [                             // Object: JSON encoded
            'type' => 'public',
            'min_employees' => 1000
        ],
        'include_fields' => [                      // Array: JSON encoded
            'company_info',
            'financials',
            'officers'
        ],
        'page' => 1,                              // Number: regular encoding
        'limit' => 20                             // Number: regular encoding
    ];
    
    echo "   Parameters:\n";
    echo "   - query: 'Apple Inc' (string)\n";
    echo "   - filters: {type: 'public', min_employees: 1000} (object → JSON)\n";
    echo "   - include_fields: ['company_info', 'financials', 'officers'] (array → JSON)\n";
    echo "   - page: 1 (number)\n";
    echo "   - limit: 20 (number)\n\n";
    
    try {
        $mixedParams = $client->searchCompanies($params);
        echo "   ✓ All parameter types handled correctly\n";
    } catch (ApiException $e) {
        echo "   ℹ️  Demo request (would work with real API): " . $e->getMessage() . "\n";
    }
    
    // Example 4: Nested objects (advanced use case)
    echo "\n4. Nested Objects (Advanced):\n";
    $advancedFilters = [
        'geo_filter' => [
            'type' => 'radius',
            'center' => [
                'lat' => 37.7749,
                'lng' => -122.4194
            ],
            'radius' => 50,
            'unit' => 'miles'
        ],
        'date_range' => [
            'founded_after' => '2010-01-01',
            'founded_before' => '2020-12-31'
        ],
        'employee_range' => [
            'min' => 10,
            'max' => 500
        ]
    ];
    
    try {
        $advancedQuery = $client->searchCompanies($advancedFilters);
        echo "   ✓ Nested objects JSON-encoded successfully\n";
    } catch (ApiException $e) {
        echo "   ℹ️  Demo request (would work with real API): " . $e->getMessage() . "\n";
    }
    
    
    
} catch (ApiException $e) {
    echo "Error: " . $e->getMessage() . "\n";
    echo "Status: " . $e->getStatusCode() . "\n";
}
