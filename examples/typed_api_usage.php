<?php

require_once __DIR__ . '/../vendor/autoload.php';

use TheCompaniesApi\Sdk\Client;
use TheCompaniesApi\Sdk\Generated\Requests\SearchCompaniesPostRequest;
use TheCompaniesApi\Sdk\Generated\Requests\AskCompanyRequest;
use TheCompaniesApi\Sdk\ApiException;

echo "=== Fully Typed API Usage Example ===\n\n";
echo "This demonstrates the auto-generated typed Request and Response classes.\n\n";

try {
    // Create the client (which includes all generated typed methods)
    $client = new Client([
        'apiToken' => 'your-api-token',
        'visitorId' => 'demo-visitor'
    ]);

    echo "✅ Client created successfully\n\n";

    // Example 1: Using typed request objects with named parameters
    echo "🔍 Example 1: Typed Request Objects with Named Parameters\n";
    echo "Creating a SearchCompaniesPostRequest object with autocomplete...\n";

    $searchRequest = new SearchCompaniesPostRequest(
        query: [
            'industry' => 'technology',
            'employees' => ['min' => 100, 'max' => 1000]
        ],
        page: 1,
        size: 10,
        simplified: true,
        sortKey: 'about.name',
        sortOrder: 'asc',
    );
    
    echo "✅ Named parameters provide full IDE autocomplete!\n\n";
    
    // Show backward compatibility
    echo "📦 Backward Compatibility - Array constructor still works:\n";
    $arrayRequest = new SearchCompaniesPostRequest([
        'query' => ['industry' => 'fintech'],
        'page' => 1,
        'size' => 5,
    ]);
    echo "✅ Array approach works for backward compatibility\n";

    echo "Request object created with properties:\n";
    echo "- Query: " . json_encode($searchRequest->query) . "\n";
    echo "- Page: {$searchRequest->page}\n";
    echo "- Size: {$searchRequest->size}\n";
    echo "- Sort: {$searchRequest->sortKey} ({$searchRequest->sortOrder})\n\n";

    try {
        // This method accepts SearchCompaniesPostRequest|array
        $response = $client->searchCompaniesPost($searchRequest);
        echo "✓ Typed request sent successfully\n";
        echo "Response type: " . get_class($response) . "\n";
    } catch (ApiException $e) {
        echo "ℹ️  Demo request: " . $e->getMessage() . "\n";
    }

    // Example 2: Union types - using arrays (backwards compatible)
    echo "\n🔍 Example 2: Array Parameters (Backwards Compatible)\n";
    
    try {
        // Same method, but with array parameter
        $response = $client->searchCompaniesPost([
            'query' => ['industry' => 'fintech'],
            'page' => 1,
            'size' => 5,
        ]);
        echo "✓ Array parameter works too (backwards compatible)\n";
    } catch (ApiException $e) {
        echo "ℹ️  Demo request: " . $e->getMessage() . "\n";
    }

    // Example 3: GET methods with typed responses
    echo "\n🔍 Example 3: Typed Response Objects\n";
    
    try {
        // GET method that returns a typed response
        $response = $client->fetchCompany('apple.com');
        echo "✓ Method returns typed response: " . get_class($response) . "\n";
    } catch (ApiException $e) {
        echo "ℹ️  Demo request: " . $e->getMessage() . "\n";
    }

    // Example 4: POST method with typed request and response
    echo "\n🔍 Example 4: Ask Company (Typed Request + Response)\n";
    
    $askRequest = new AskCompanyRequest(
        question: 'What products does this company offer?'
    );

    echo "Ask request created:\n";
    echo "- Question: {$askRequest->question}\n";

    try {
        $response = $client->askCompany('apple.com', $askRequest);
        echo "✓ Typed ask request sent\n";
        echo "Response type: " . get_class($response) . "\n";
    } catch (ApiException $e) {
        echo "ℹ️  Demo request: " . $e->getMessage() . "\n";
    }

    echo "\n=== Generated Classes Structure ===\n";
    echo "📁 Models/     - Data structures (Company, Technology, etc.)\n";
    echo "📤 Requests/   - Input types for API operations\n";
    echo "📥 Responses/  - Output types for API operations\n";
    echo "🔧 GeneratedClient - Typed methods for all operations\n\n";

    echo "=== Key Benefits ===\n";
    echo "✓ Full type safety for inputs and outputs\n";
    echo "✓ IDE autocompletion for all properties\n";
    echo "✓ Union types (ClassName|array) for flexibility\n";
    echo "✓ Automatic conversion between objects and arrays\n";
    echo "✓ Runtime validation and error handling\n";
    echo "✓ PHPDoc annotations for all methods\n";

} catch (ApiException $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
    echo "Status: " . $e->getStatusCode() . "\n";
}

echo "\n=== IDE Experience ===\n";
echo "When using an IDE like PhpStorm or VS Code:\n";
echo "1. Type \$client-> and see all available methods\n";
echo "2. Type new SearchCompaniesPostRequest([' and see all properties\n";
echo "3. Get instant feedback on parameter types\n";
echo "4. Navigate to class definitions with Ctrl+Click\n";
echo "5. See method return types and documentation\n"; 
