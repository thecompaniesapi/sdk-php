<?php

require_once __DIR__ . '/../vendor/autoload.php';

use TheCompaniesApi\Sdk\Client;
use TheCompaniesApi\Sdk\Generated\Requests\SearchCompaniesPostRequest;
use TheCompaniesApi\Sdk\Generated\Requests\AskCompanyRequest;

echo "=== Request Autocomplete Demo ===\n\n";

echo "This example demonstrates two ways to create typed request objects:\n";
echo "1. Array constructor (backward compatible, no autocomplete on keys)\n";
echo "2. Named parameters (FULL IDE AUTOCOMPLETE on parameter names!)\n\n";

// Approach 1: Array constructor
echo "1. Array Constructor:\n";
echo "   \$request = new SearchCompaniesPostRequest([\n";
echo "       'query' => ['industry' => 'fintech'],  // ❌ No autocomplete on 'query' key\n";
echo "       'page' => 1,                           // ❌ No autocomplete on 'page' key\n";
echo "       'size' => 10                           // ❌ No autocomplete on 'size' key\n";
echo "   ]);\n\n";

$arrayRequest = new SearchCompaniesPostRequest([
    'query' => ['industry' => 'fintech'],
    'page' => 1,
    'size' => 10
]);

echo "✅ Array request created successfully\n\n";

// Approach 2: Named parameters with full autocomplete
echo "2. Named Parameters (WITH AUTOCOMPLETE):\n";
echo "   \$request = new SearchCompaniesPostRequest(\n";
echo "       query: ['industry' => 'fintech'],      // ✅ Full autocomplete on 'query:'\n";
echo "       page: 1,                               // ✅ Full autocomplete on 'page:'\n";
echo "       size: 10                               // ✅ Full autocomplete on 'size:'\n";
echo "   );\n\n";

$namedRequest = new SearchCompaniesPostRequest(
    query: ['industry' => 'fintech'],
    page: 1,
    size: 10
);

echo "✅ Named parameter request created successfully\n\n";

// Demonstrate that both approaches produce equivalent results
echo "=== Verification: Both approaches produce the same result ===\n";
echo "Array request:  " . json_encode($arrayRequest->toArray(), JSON_PRETTY_PRINT) . "\n";
echo "Named request:  " . json_encode($namedRequest->toArray(), JSON_PRETTY_PRINT) . "\n";

// Demonstrate autocomplete benefits with more complex example
echo "\n=== Complex Example with Full Autocomplete ===\n";

$complexRequest = new SearchCompaniesPostRequest(
    query: [
        'industry' => 'technology',
        'location' => 'San Francisco',
        'employees' => ['$gte' => 100]
    ],
    page: 1,
    size: 20,
    simplified: true,
    sortKey: 'relevance',
    sortOrder: 'desc',
    searchFields: ['name', 'description']
);

echo "Complex request with named parameters:\n";
echo json_encode($complexRequest->toArray(), JSON_PRETTY_PRINT) . "\n\n";

// Show different request types
echo "=== Different Request Types ===\n";

$askRequest = new AskCompanyRequest(
    question: 'What products does this company offer?'
);

echo "Ask request: " . json_encode($askRequest->toArray(), JSON_PRETTY_PRINT) . "\n\n";

// Client usage
echo "=== Using with Client ===\n";
try {
    $client = new Client(['apiToken' => 'demo-token']);
    
    // You can now use either approach:
    echo "✅ Both array and named parameter approaches work with the client:\n";
    echo "   \$response = \$client->searchCompaniesPost(\$arrayRequest);\n";
    echo "   \$response = \$client->searchCompaniesPost(\$namedRequest);\n\n";
    
    // For demo purposes, we won't make actual API calls
    echo "🔧 Demo complete! In your IDE, you'll see full autocomplete when typing:\n";
    echo "   new SearchCompaniesPostRequest([TAB]         // Shows all parameter names\n";
    echo "   new SearchCompaniesPostRequest(que[TAB]      // Autocompletes to 'query:'\n";
    echo "   new SearchCompaniesPostRequest(query: [TAB], [TAB]  // Shows next parameter\n";
    
} catch (Exception $e) {
    echo "Note: This is a demo - actual API calls require valid credentials\n";
}

echo "\n✨ Named Parameter Autocomplete Benefits:\n";
echo "• Parameter discovery: Type 'new SearchCompaniesPostRequest(' and see all options\n";
echo "• Type safety: IDE knows the exact parameter types\n";
echo "• Documentation: Hover over parameters to see descriptions\n";
echo "• Error prevention: Catch typos at development time\n";
echo "• Order independence: Parameters can be in any order\n";
echo "• Skip unused parameters: Only specify what you need\n"; 
