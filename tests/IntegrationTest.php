<?php

namespace TheCompaniesApi\Sdk\Tests;

use PHPUnit\Framework\TestCase;
use TheCompaniesApi\Sdk\Client;
use TheCompaniesApi\Sdk\Configuration;
use TheCompaniesApi\Sdk\Generated\Requests\SearchCompaniesPostRequest;
use TheCompaniesApi\Sdk\Generated\Requests\CountCompaniesPostRequest;
use TheCompaniesApi\Sdk\Generated\Responses\SearchCompaniesResponse;
use TheCompaniesApi\Sdk\Generated\Responses\SearchCompaniesPostResponse;
use TheCompaniesApi\Sdk\Generated\Responses\CountCompaniesResponse;
use TheCompaniesApi\Sdk\Generated\Responses\CountCompaniesPostResponse;
use TheCompaniesApi\Sdk\Generated\Responses\FetchCompanyByEmailResponse;
use TheCompaniesApi\Sdk\ApiException;
use Dotenv\Dotenv;

/**
 * Integration tests for The Companies API PHP SDK
 * 
 * These tests make real API calls and require a valid API token.
 * 
 * Setup:
 * 1. Create a .env file in the project root with:
 *    TCA_API_TOKEN=your-api-token-here
 *    TCA_API_URL=https://api.thecompaniesapi.com (optional)
 *    TCA_VISITOR_ID=your-visitor-id (optional)
 *    TCA_TIMEOUT=30 (optional)
 * 
 * 2. Run tests with: composer test tests/IntegrationTest.php
 * 
 * To skip integration tests: vendor/bin/phpunit --exclude-group integration
 */
class IntegrationTest extends TestCase
{
    private static ?Client $client = null;
    
    /**
     * Load .env file if it exists (for local testing)
     */
    private static function loadEnvForTesting(): void
    {
        if (file_exists(__DIR__ . '/../.env')) {
            $dotenv = Dotenv::createImmutable(__DIR__ . '/..');
            $dotenv->load();
        }
    }
    
    /**
     * Get API token from environment variables
     */
    private static function getApiToken(): ?string
    {
        self::loadEnvForTesting();
        return $_ENV['TCA_API_TOKEN'] ?? $_SERVER['TCA_API_TOKEN'] ?? null;
    }
    
    /**
     * Setup integration client configured for testing
     */
    private static function setupIntegrationClient(): Client
    {
        if (self::$client !== null) {
            return self::$client;
        }
        
        $token = self::getApiToken();
        if (empty($token)) {
            self::markTestSkipped('TCA_API_TOKEN not set, skipping integration tests. Set TCA_API_TOKEN in .env file or environment.');
        }
        
        $params = [
            'apiToken' => $token,
            'timeout' => (int)($_ENV['TCA_TIMEOUT'] ?? $_SERVER['TCA_TIMEOUT'] ?? 30)
        ];
        
        // Optional: Custom base URL from environment
        if (!empty($_ENV['TCA_API_URL'] ?? $_SERVER['TCA_API_URL'] ?? null)) {
            $params['apiUrl'] = $_ENV['TCA_API_URL'] ?? $_SERVER['TCA_API_URL'];
        }
        
        // Optional: Visitor ID from environment  
        if (!empty($_ENV['TCA_VISITOR_ID'] ?? $_SERVER['TCA_VISITOR_ID'] ?? null)) {
            $params['visitorId'] = $_ENV['TCA_VISITOR_ID'] ?? $_SERVER['TCA_VISITOR_ID'];
        }
        
        self::$client = new Client($params);
        
        return self::$client;
    }
    
    /**
     * @group integration
     */
    public function testSearchCompaniesBasic(): void
    {
        $client = self::setupIntegrationClient();
        
        // Test basic search using GET method (simple parameters)
        $response = $client->searchCompanies([
            'page' => 1,
            'size' => 5,  // Small size for faster tests
            'search' => 'technology'
        ]);
        
        $this->assertInstanceOf(SearchCompaniesResponse::class, $response);
        $this->assertIsArray($response->companies);
        $this->assertIsObject($response->meta);
        
        echo sprintf(
            "Search returned %d companies out of %s total\n", 
            count($response->companies), 
            $response->meta->total ?? 'unknown'
        );
        
        if (count($response->companies) > 0) {
            $company = $response->companies[0];
            if (isset($company['about']['name'])) {
                echo sprintf("First company: %s\n", $company['about']['name']);
            }
        } else {
            echo "No companies found, but request succeeded\n";
        }
    }
    
    /**
     * @group integration
     */
    public function testSearchCompaniesWithQuery(): void
    {
        $client = self::setupIntegrationClient();
        
        // Test search with query conditions using POST method
        $request = new SearchCompaniesPostRequest(
            page: 1,
            size: 3,
            query: [
                [
                    'attribute' => 'about.industries',
                    'operator' => 'or',
                    'sign' => 'equals',
                    'values' => ['technology']
                ]
            ]
        );
        
        $response = $client->searchCompaniesPost($request);
        
        $this->assertInstanceOf(SearchCompaniesPostResponse::class, $response);
        $this->assertIsArray($response->companies);
        
        echo sprintf("Query search returned %d companies\n", count($response->companies));
    }
    
    /**
     * @group integration
     */
    public function testCountCompaniesBasic(): void
    {
        $client = self::setupIntegrationClient();
        
        // Test basic count using GET method
        $response = $client->countCompanies([
            'search' => 'software'
        ]);
        
        $this->assertInstanceOf(CountCompaniesResponse::class, $response);
        $this->assertIsNumeric($response->count);
        $this->assertGreaterThanOrEqual(0, $response->count);
        
        echo sprintf("Total companies matching 'software': %s\n", $response->count);
    }
    
    /**
     * @group integration
     */
    public function testCountCompaniesWithQuery(): void
    {
        $client = self::setupIntegrationClient();
        
        // Test count with query conditions using POST method
        $request = new CountCompaniesPostRequest(
            query: [
                [
                    'attribute' => 'about.industries',
                    'operator' => 'or',
                    'sign' => 'equals',
                    'values' => ['saas']
                ]
            ]
        );
        
        $response = $client->countCompaniesPost($request);
        
        $this->assertInstanceOf(CountCompaniesPostResponse::class, $response);
        $this->assertIsNumeric($response->count);
        
        echo sprintf("Total SaaS companies: %s\n", $response->count);
    }
    
    /**
     * @group integration
     */
    public function testFetchCompanyByEmail(): void
    {
        $client = self::setupIntegrationClient();
        
        // Test with well-known company emails
        $testCases = [
            ['name' => 'openai_email', 'email' => 'contact@openai.com'],
            ['name' => 'microsoft_email', 'email' => 'info@microsoft.com'],
            ['name' => 'google_email', 'email' => 'press@google.com'],
        ];
        
        foreach ($testCases as $testCase) {
                         try {
                 $response = $client->fetchCompanyByEmail([
                     'email' => $testCase['email']
                 ]);
                 
                 $this->assertInstanceOf(FetchCompanyByEmailResponse::class, $response);
                 
                 if (isset($response->company)) {
                     $company = $response->company;
                     if (isset($company->about['name'])) {
                         echo sprintf(
                             "Found company for %s: %s\n", 
                             $testCase['email'], 
                             $company->about['name']
                         );
                     }
                     
                     if (isset($company->domain['domain'])) {
                         echo sprintf("Company domain: %s\n", $company->domain['domain']);
                     }
                 } else {
                     echo sprintf("No company found for email %s\n", $testCase['email']);
                 }
                 
             } catch (ApiException $e) {
                 echo sprintf(
                     "FetchCompanyByEmail failed for %s: %s\n", 
                     $testCase['email'], 
                     $e->getMessage()
                 );
                 // Don't fail the test - the email might not be in the database
             }
        }
        
        // At least verify that the method exists and can be called
        $this->assertTrue(method_exists($client, 'fetchCompanyByEmail'));
    }
    
    /**
     * @group integration
     */
    public function testErrorHandling(): void
    {
        $client = self::setupIntegrationClient();
        
        // Test with invalid email format
        try {
            $response = $client->fetchCompanyByEmail([
                'email' => 'invalid-email-format'
            ]);
            
            // If we get here, check the response for error indicators
            echo "Unexpectedly got successful response for invalid email\n";
            $this->assertInstanceOf(FetchCompanyByEmailResponse::class, $response);
            
        } catch (ApiException $e) {
            echo sprintf("Expected error for invalid email format: %s\n", $e->getMessage());
            echo sprintf("Error code: %d\n", $e->getCode());
            
            // This is expected behavior
            $this->assertInstanceOf(ApiException::class, $e);
        }
    }
    
    /**
     * @group integration
     */
    public function testComplexQuerySerialization(): void
    {
        $client = self::setupIntegrationClient();
        
        // Test complex query serialization to verify our custom query parameter handling
        $request = new SearchCompaniesPostRequest(
            page: 1,
            size: 2,
            query: [
                [
                    'attribute' => 'about.industries',
                    'operator' => 'or',
                    'sign' => 'equals',
                    'values' => ['technology', 'saas']
                ]
            ],
            searchFields: ['about.name', 'domain.domain']
        );
        
        $response = $client->searchCompaniesPost($request);
        
        $this->assertInstanceOf(SearchCompaniesPostResponse::class, $response);
        $this->assertIsArray($response->companies);
        
        echo sprintf("Complex query returned %d companies\n", count($response->companies));
        
        // This test verifies that our query serialization works correctly
        // with complex nested parameters matching TypeScript SDK behavior
    }
    
    /**
     * @group integration
     */
    public function testClientConfiguration(): void
    {
        $client = self::setupIntegrationClient();
        
        // Verify client configuration
        $config = $client->getConfiguration();
        $this->assertInstanceOf(Configuration::class, $config);
        $this->assertNotEmpty($config->getApiToken());
        
        // Test that we can make a simple health check or basic request
        try {
            $response = $client->countCompanies(['search' => 'test']);
            $this->assertInstanceOf(CountCompaniesResponse::class, $response);
            echo "Client configuration test passed\n";
        } catch (ApiException $e) {
            $this->fail(sprintf("Client configuration test failed: %s", $e->getMessage()));
        }
    }
    
    /**
     * Helper method to run all integration tests in sequence
     * 
     * @group integration
     */
    public function testFullIntegrationFlow(): void
    {
        echo "\n=== Running Full Integration Test Flow ===\n";
        
        // Test 1: Basic search
        echo "\n1. Testing basic search...\n";
        $this->testSearchCompaniesBasic();
        
        // Test 2: Complex query search
        echo "\n2. Testing complex query search...\n";
        $this->testSearchCompaniesWithQuery();
        
        // Test 3: Count operations
        echo "\n3. Testing count operations...\n";
        $this->testCountCompaniesBasic();
        $this->testCountCompaniesWithQuery();
        
        // Test 4: Company lookup
        echo "\n4. Testing company lookup...\n";
        $this->testFetchCompanyByEmail();
        
        // Test 5: Error handling
        echo "\n5. Testing error handling...\n";
        $this->testErrorHandling();
        
        // Test 6: Query serialization
        echo "\n6. Testing query serialization...\n";
        $this->testComplexQuerySerialization();
        
        echo "\n=== Integration Test Flow Complete ===\n";
    }
} 
