<?php

require_once __DIR__ . '/../vendor/autoload.php';

// This example demonstrates how the auto-generated client would work
// Note: Run `composer run generate:dev` to generate the actual client

use TheCompaniesApi\Sdk\Client;
use TheCompaniesApi\Sdk\ApiException;

echo "=== Auto-Generated Client Usage Example ===\n\n";

try {
    // Create client (same as before)
    $client = new Client([
        'apiToken' => 'your-api-token',
        'visitorId' => 'demo-visitor'
    ]);

    echo "✅ Client created successfully\n\n";

    // After running the generator, you would be able to use methods like:
    
    echo "🔍 Example of what generated methods would look like:\n";
    echo "   \$companies = \$client->searchCompanies(['query' => 'Apple']);\n";
    echo "   \$company = \$client->getCompany('company-id-123');\n";
    echo "   \$enriched = \$client->enrichCompany(['domain' => 'apple.com']);\n";
    echo "   \$bulk = \$client->bulkEnrichCompanies(\$companyList);\n\n";

    // For now, we can use the generic HTTP methods
    echo "📡 Using generic HTTP methods (available now):\n";
    
    // Example 1: Search companies (GET)
    echo "1. Search companies:\n";
    try {
        $searchResults = $client->get('/companies/search', [
            'query' => 'technology companies',
            'limit' => 5,
            'filters' => [
                'industry' => 'Technology',
                'location' => [
                    'country' => 'US'
                ]
            ]
        ]);
        echo "   ✓ Request sent (would return company data)\n";
    } catch (ApiException $e) {
        echo "   ℹ️  Demo request: " . $e->getMessage() . "\n";
    }

    // Example 2: Get specific company (GET with path parameter)
    echo "\n2. Get specific company:\n";
    try {
        $companyData = $client->get('/companies/apple-inc', [
            'include' => ['financials', 'officers', 'subsidiaries']
        ]);
        echo "   ✓ Request sent (would return company details)\n";
    } catch (ApiException $e) {
        echo "   ℹ️  Demo request: " . $e->getMessage() . "\n";
    }

    // Example 3: Enrich company data (POST)
    echo "\n3. Enrich company data:\n";
    try {
        $enrichedData = $client->post('/companies/enrich', [
            'domain' => 'apple.com',
            'company_name' => 'Apple Inc',
            'include_fields' => [
                'company_info',
                'financial_data',
                'contact_info'
            ]
        ]);
        echo "   ✓ Request sent (would return enriched data)\n";
    } catch (ApiException $e) {
        echo "   ℹ️  Demo request: " . $e->getMessage() . "\n";
    }

    echo "\n=== Code Generation Workflow ===\n";
    echo "1. Run: composer run generate:dev\n";
    echo "2. This fetches your OpenAPI schema\n";
    echo "3. Generates a GeneratedClient class with typed methods\n";
    echo "4. Creates model classes for request/response objects\n";
    echo "5. Use the generated client instead of the base client\n\n";

    echo "🚀 After generation, you can use:\n";
    echo "   use TheCompaniesApi\\Sdk\\Generated\\GeneratedClient;\n";
    echo "   \$client = new Client(['apiToken' => 'your-token']);\n";
    echo "   \$results = \$client->searchCompanies(['query' => 'Apple']);\n\n";

} catch (ApiException $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
    echo "Status: " . $e->getStatusCode() . "\n";
}

echo "📋 Benefits of Code Generation:\n";
echo "✓ Type-safe method calls\n";
echo "✓ IDE autocompletion\n";
echo "✓ Automatic documentation\n";
echo "✓ Matches TypeScript SDK API exactly\n";
echo "✓ Always up-to-date with API changes\n"; 
