# The Companies API SDK for PHP

[![Packagist Version](https://img.shields.io/packagist/v/thecompaniesapi/sdk-php?style=flat&colorA=080f12&colorB=1fa669)](https://packagist.org/packages/thecompaniesapi/sdk-php)
[![Packagist Downloads](https://img.shields.io/packagist/dm/thecompaniesapi/sdk-php?style=flat&colorA=080f12&colorB=1fa669)](https://packagist.org/packages/thecompaniesapi/sdk-php)
[![License](https://img.shields.io/github/license/thecompaniesapi/sdk-php?style=flat&colorA=080f12&colorB=1fa669)](https://github.com/thecompaniesapi/sdk-php/blob/main/LICENSE)

A fully-featured PHP SDK for [The Companies API](https://www.thecompaniesapi.com), providing type-safe access to company data, locations, industries, technologies, job titles, lists, and more.

If you need more details about a specific endpoint, you can find the corresponding documentation in [the API reference](https://www.thecompaniesapi.com/api).

You can also contact us on our [livechat](https://www.thecompaniesapi.com/) if you have any questions.

## 🚀 Features

- Expose all our 30+ endpoints and gives access to 50M+ companies from your codebase
- Type-safe API client with full access to our [OpenAPI](https://api.thecompaniesapi.com/v2/openapi) schemas
- Real-time company enrichment with both synchronous and asynchronous options
- Powerful search capabilities with filters, sorting and pagination
- Create and manage your company lists
- Track and monitor enrichment actions and requests
- Generate detailed analytics and insights for searches and lists
- Natural language querying for structured company information
- Lightweight with minimal dependencies

## 📦 Installation

Install the SDK using Composer:

```bash
composer require thecompaniesapi/sdk-php
```

## 🔑 Initialize the client

Get your API token from [your settings page](https://www.thecompaniesapi.com/settings/api-tokens) and initialize our client.

The API token is required to authenticate your requests and should be kept secure. Never commit your API token to version control or share it publicly.

```php
<?php

require_once 'vendor/autoload.php';

use TheCompaniesApi\Sdk\Client;

$client = new Client([
    'apiToken' => 'your-api-token',
]);
```

## 🏬 Companies

### Search companies

📖 [Documentation](https://www.thecompaniesapi.com/api/search-companies)

🕹️ [Use case: How to build a company search engine with our API](https://www.thecompaniesapi.com/use-cases/companies-search-engine)

🔍 To learn more about our query system, please read our [documentation](https://www.thecompaniesapi.com/use-cases/companies-search-engine).

```php
// Search companies by industry and size
$response = $client->searchCompanies([
    'query' => [
        ['attribute' => 'about.industries', 'operator' => 'or', 'sign' => 'equals', 'values' => ['computer-software']],
        ['attribute' => 'about.totalEmployees', 'operator' => 'or', 'sign' => 'equals', 'values' => ['10-50']]
    ],
    'size' => 25
]);

$companies = $response->companies; // Companies that match the query
$meta = $response->meta; // Meta information
```

### Search companies by name

📖 [Documentation](https://www.thecompaniesapi.com/api/search-companies-name)

🕹️ [Use case: Add a company search with autocomplete to your application](https://www.thecompaniesapi.com/use-cases/company-autocomplete)

```php
$response = $client->searchCompaniesByName([
    'name' => 'The Companies API',
    'size' => 2
]);

$companies = $response->companies; // Companies that match the name
$meta = $response->meta; // Meta information
```

### Search companies using a prompt

📖 [Documentation](https://www.thecompaniesapi.com/api/search-companies-prompt)

```php
// Search 25 companies for a specific prompt
$response = $client->searchCompaniesByPrompt([
    'prompt' => 'SaaS Companies in the United States with more than 100 employees',
    'size' => 25
]);

$companies = $response->companies; // Companies that match the prompt
$meta = $response->meta; // Meta information
```

### Search similar companies

📖 [Documentation](https://www.thecompaniesapi.com/api/search-similar-companies)

```php
// Search 25 companies that are similar to Crisp and Intercom
$response = $client->searchSimilarCompanies([
    'domains' => ['crisp.chat', 'intercom.com'],
    'size' => 25
]);

$companies = $response->companies; // Companies that are similar to the domains
$meta = $response->meta; // Meta information
```

### Count companies matching your query

📖 [Documentation](https://www.thecompaniesapi.com/api/count-companies)

```php
// Count how many companies are in the computer-software industry
$response = $client->countCompanies([
    'query' => [
        [
            'attribute' => 'about.industries',
            'operator' => 'or',
            'sign' => 'equals',
            'values' => ['computer-software']
        ]
    ]
]);

$count = $response; // Number of companies that match the query
```

### Enrich a company from a domain name

📖 [Documentation](https://www.thecompaniesapi.com/api/enrich-company-from-domain)

```php
// Fetch company data from our database without enrichment (faster response)
$response = $client->fetchCompany('microsoft.com');

$company = $response; // The company profile

// Fetch company data and re-analyze it in real-time to get fresh, up-to-date information (slower but more accurate)
$response = $client->fetchCompany('microsoft.com', [
    'refresh' => true
]);

$company = $response; // The company profile
```

### Enrich a company from an email

📖 [Documentation](https://www.thecompaniesapi.com/api/enrich-company-from-email)

🕹️ [Use case: Enrich your users at signup with the latest information about their company](https://www.thecompaniesapi.com/use-cases/enrich-users-signup)

```php
// Fetch the company profile behind a professional email address
$response = $client->fetchCompanyByEmail([
    'email' => 'jack@openai.com'
]);

$company = $response; // The company profile
```

### Enrich a company from a social network URL

📖 [Documentation](https://www.thecompaniesapi.com/api/enrich-company-from-social-network-url)

```php
// Fetch the company profile behind a social network URL
$response = $client->fetchCompanyBySocial([
    'linkedin' => 'https://www.linkedin.com/company/apple'
]);

$company = $response; // The company profile
```

### Find a company email patterns

📖 [Documentation](https://www.thecompaniesapi.com/api/fetch-company-email-patterns)

```php
// Fetch the company email patterns for a specific domain
$response = $client->fetchCompanyEmailPatterns('apple.com');

$patterns = $response; // The company email patterns
```

### Ask a question about a company

📖 [Documentation](https://www.thecompaniesapi.com/api/ask-company)

```php
// Ask what products a company offers using its domain
$response = $client->askCompany('microsoft.com', [
    'question' => 'What products does this company offer?',
    'model' => 'large', // 'small' is also available
    'fields' => [
        [
            'key' => 'products',
            'type' => 'array|string',
            'description' => 'The products that the company offers'
        ]
    ]
]);

$answer = $response->answer; // Structured AI response
$meta = $response->meta; // Meta information
```

### Fetch the context of a company

📖 [Documentation](https://www.thecompaniesapi.com/api/fetch-company-context)

```php
// Get AI-generated strategic insights about a company
$response = $client->fetchCompanyContext('microsoft.com');

$context = $response->context; // Includes market, model, differentiators, etc.
$meta = $response->meta; // Meta information
```

### Fetch analytics data for a query or your lists

📖 [Documentation](https://www.thecompaniesapi.com/api/fetch-companies-analytics)

```php
// Analyze company distribution by business type
$response = $client->fetchCompaniesAnalytics([
    'attribute' => 'about.businessType',
    'query' => [
        [
            'attribute' => 'locations.headquarters.country.code',
            'operator' => 'or',
            'sign' => 'equals',
            'values' => ['us', 'gb', 'fr']
        ]
    ]
]);

$analytics = $response->data; // Aggregated values
$meta = $response->meta; // Meta information
```

### Export analytics data in multiple formats for a search

📖 [Documentation](https://www.thecompaniesapi.com/api/export-companies-analytics)

```php
// Export analytics to CSV
$response = $client->exportCompaniesAnalytics([
    'format' => 'csv',
    'attributes' => ['about.industries', 'about.totalEmployees'],
    'query' => [
        [
            'attribute' => 'technologies.active',
            'operator' => 'or',
            'sign' => 'equals',
            'values' => ['shopify']
        ]
    ]
]);

$analytics = $response->data; // Aggregated values
$meta = $response->meta; // Meta information
```

## 🎯 Actions

### Request an action on one or more companies

📖 [Documentation](https://www.thecompaniesapi.com/api/request-action)

```php
// Request an enrichment job on multiple companies
$response = $client->requestAction([
    'domains' => ['microsoft.com', 'apple.com'],
    'job' => 'enrich-companies',
    'estimate' => false
]);

$actions = $response->actions; // Track this via fetchActions
$meta = $response->meta; // Meta information
```

### Fetch the actions for your account

📖 [Documentation](https://www.thecompaniesapi.com/api/fetch-actions)

```php
// Fetch recent actions
$response = $client->fetchActions([
    'status' => 'completed',
    'page' => 1,
    'size' => 5
]);

$actions = $response->actions; // Actions that match the query
$meta = $response->meta; // Meta information
```

### Retry a failed action

📖 [Documentation](https://www.thecompaniesapi.com/api/retry-action)

```php
// Retry a failed action
$response = $client->retryAction('action-id-123', [
    'reason' => 'Network timeout resolved'
]);

$action = $response; // Updated action status
```

## 🏭 Industries

### Search industries

📖 [Documentation](https://www.thecompaniesapi.com/api/search-industries)

```php
// Search industries by keyword
$response = $client->searchIndustries([
    'search' => 'software',
    'size' => 10
]);

$industries = $response->industries; // Industries that match the keyword
$meta = $response->meta; // Meta information
```

### Find similar industries

📖 [Documentation](https://www.thecompaniesapi.com/api/find-similar-industries)

```php
// Find industries similar to given ones
$response = $client->searchIndustriesSimilar([
    'industries' => ['saas', 'fintech']
]);

$similar = $response->industries; // Industries that are similar to the given ones
$meta = $response->meta; // Meta information
```

## ⚛️ Technologies

### Search technologies

📖 [Documentation](https://www.thecompaniesapi.com/api/search-technologies)

```php
// Search technologies by keyword
$response = $client->searchTechnologies([
    'search' => 'shopify',
    'size' => 10
]);

$technologies = $response->technologies; // Technologies that match the keyword
$meta = $response->meta; // Meta information
```

## 🌍 Locations

### Search cities

📖 [Documentation](https://www.thecompaniesapi.com/api/search-cities)

```php
// Search cities by name
$response = $client->searchCities([
    'search' => 'new york',
    'size' => 5
]);

$cities = $response->cities; // Cities that match the name
$meta = $response->meta; // Meta information
```

### Search counties

📖 [Documentation](https://www.thecompaniesapi.com/api/search-counties)

```php
// Search counties by name
$response = $client->searchCounties([
    'search' => 'orange',
    'size' => 5
]);

$counties = $response->counties; // Counties that match the name
$meta = $response->meta; // Meta information
```

### Search states

📖 [Documentation](https://www.thecompaniesapi.com/api/search-states)

```php
// Search states by name
$response = $client->searchStates([
    'search' => 'california',
    'size' => 5
]);

$states = $response->states; // States that match the name
$meta = $response->meta; // Meta information
```

### Search countries

📖 [Documentation](https://www.thecompaniesapi.com/api/search-countries)

```php
// Search countries by name
$response = $client->searchCountries([
    'search' => 'france',
    'size' => 5
]);

$countries = $response->countries; // Countries that match the name
$meta = $response->meta; // Meta information
```

### Search continents

📖 [Documentation](https://www.thecompaniesapi.com/api/search-continents)

```php
// Search continents by name
$response = $client->searchContinents([
    'search' => 'asia',
    'size' => 5
]);

$continents = $response->continents; // Continents that match the name
$meta = $response->meta; // Meta information
```

## 💼 Job titles

### Enrich a job title from its name

📖 [Documentation](https://www.thecompaniesapi.com/api/enrich-job-title-from-name)

```php
// Enrich "chief marketing officer"
$response = $client->enrichJobTitles([
    'name' => 'chief marketing officer'
]);

$jobTitle = $response; // Contains department, seniority, etc.
```

## 📋 Lists

### Fetch your lists

📖 [Documentation](https://www.thecompaniesapi.com/api/fetch-lists)

```php
// Fetch your lists
$response = $client->fetchLists();

$lists = $response->lists; // Lists that match the query
$meta = $response->meta; // Meta information
```

### Create a list of companies

📖 [Documentation](https://www.thecompaniesapi.com/api/create-list)

```php
// Create a list of companies
$response = $client->createList([
    'name' => 'My SaaS List',
    'type' => 'companies'
]);

$newList = $response; // The new list
```

### Update a list

📖 [Documentation](https://www.thecompaniesapi.com/api/update-list)

```php
// Update a list
$response = $client->updateList('1234', [
    'name' => 'Updated SaaS List',
    'description' => 'Updated list description'
]);

$updatedList = $response; // The updated list
```

### Delete a list

📖 [Documentation](https://www.thecompaniesapi.com/api/delete-list)

```php
// Delete a list
$response = $client->deleteList('1234');

$result = $response; // Deletion confirmation
```

### Fetch companies in your list

📖 [Documentation](https://www.thecompaniesapi.com/api/fetch-companies-in-list)

```php
// Fetch companies in a list
$response = $client->fetchCompaniesInList('1234');

$companies = $response->companies; // Companies that match the list
$meta = $response->meta; // Meta information
```

### Fetch companies in your list with POST body

📖 [Documentation](https://www.thecompaniesapi.com/api/fetch-companies-in-list)

```php
// Fetch companies in a list with additional filtering
$response = $client->fetchCompaniesInListPost('1234', [
    'query' => [
        [
            'attribute' => 'about.totalEmployees',
            'operator' => 'or',
            'sign' => 'gte',
            'values' => ['100']
        ]
    ],
    'size' => 10
]);

$companies = $response->companies; // Filtered companies in the list
$meta = $response->meta; // Meta information
```

### Get a specific company in your list

📖 [Documentation](https://www.thecompaniesapi.com/api/fetch-company-in-list)

```php
// Get a specific company in a list
$response = $client->fetchCompanyInList('1234', 'apple.com');

$company = $response; // The company in the list
```

### Add or remove companies in your list

📖 [Documentation](https://www.thecompaniesapi.com/api/toggle-companies-in-list)

```php
// Add companies to a list
$response = $client->toggleCompaniesInList('1234', [
    'companies' => ['apple.com', 'stripe.com'],
    'action' => 'add'
]);

$list = $response; // The updated list

// Remove companies from a list
$response = $client->toggleCompaniesInList('1234', [
    'companies' => ['apple.com'],
    'action' => 'remove'
]);

$list = $response; // The updated list
```

## 👥 Teams

### Fetch your team

📖 [Documentation](https://www.thecompaniesapi.com/api/fetch-team)

```php
// Fetch your team details
$response = $client->fetchTeam('team-id-123');

$team = $response; // Your team details
```

### Update your team

📖 [Documentation](https://www.thecompaniesapi.com/api/update-team)

```php
// Update your team
$response = $client->updateTeam('team-id-123', [
    'name' => 'Updated Team Name',
    'description' => 'Updated team description'
]);

$team = $response; // Updated team details
```

## 👤 User

### Fetch current user information

📖 [Documentation](https://www.thecompaniesapi.com/api/fetch-user)

```php
// Fetch current user details
$response = $client->fetchUser();

$user = $response; // Current user information
```

## 🤖 Prompts

### Fetch prompts history

📖 [Documentation](https://www.thecompaniesapi.com/api/fetch-prompts)

```php
// Fetch prompts history
$response = $client->fetchPrompts([
    'page' => 1,
    'size' => 10
]);

$prompts = $response->prompts; // Prompts history
$meta = $response->meta; // Meta information
```

### Delete a prompt

📖 [Documentation](https://www.thecompaniesapi.com/api/delete-prompt)

```php
// Delete a prompt
$response = $client->deletePrompt('prompt-id-123');

$result = $response; // Deletion confirmation
```

### Query the product prompt

📖 [Documentation](https://www.thecompaniesapi.com/api/product-prompt)

```php
// Query the product prompt
$response = $client->productPrompt([
    'query' => 'Find companies similar to Slack',
    'context' => 'collaboration software'
]);

$result = $response; // Product prompt response
```

### Convert a query to a segmentation

📖 [Documentation](https://www.thecompaniesapi.com/api/prompt-to-segmentation)

```php
// Convert a natural language query to segmentation
$response = $client->promptToSegmentation([
    'prompt' => 'Companies in California with more than 100 employees'
]);

$segmentation = $response; // Generated segmentation query
```

## 🔧 Utilities

### Fetch the health of the API

📖 [Documentation](https://www.thecompaniesapi.com/api/fetch-api-health)

```php
// Check API health status
$response = $client->fetchApiHealth();

$health = $response; // The health of the API
```

### Fetch the OpenAPI schema

📖 [Documentation](https://www.thecompaniesapi.com/api/fetch-openapi)

```php
// Fetch OpenAPI schema
$response = $client->fetchOpenApi();

$schema = $response; // The OpenAPI schema
```

## 🔄 Advanced Usage

### Using typed request/response objects

```php
use TheCompaniesApi\Sdk\Generated\Requests\SearchCompaniesPostRequest;
use TheCompaniesApi\Sdk\Generated\Requests\CreateListRequest;

// Create a typed request object
$request = new SearchCompaniesPostRequest(
    query: [
        [
            'attribute' => 'about.industries',
            'operator' => 'or',
            'sign' => 'equals',
            'values' => ['technology']
        ]
    ],
    size: 25,
    page: 1
);

// Use the typed request
$response = $client->searchCompaniesPost($request);

// Create a list with typed request
$listRequest = new CreateListRequest(
    name: 'Tech Companies',
    type: 'companies'
);

$listResponse = $client->createList($listRequest);
```

### Error handling

```php
use TheCompaniesApi\Sdk\ApiException;

try {
    $response = $client->fetchCompany('invalid-domain');
} catch (ApiException $e) {
    echo "API Error: " . $e->getMessage() . "\n";
    echo "Status Code: " . $e->getStatusCode() . "\n";
    echo "Response Data: " . json_encode($e->getResponseData()) . "\n";
    
    // Check error type
    if ($e->isClientError()) {
        echo "Client error (4xx)\n";
    } elseif ($e->isServerError()) {
        echo "Server error (5xx)\n";
    } elseif ($e->isNetworkError()) {
        echo "Network error\n";
    }
}
```

### Custom configuration

```php
use TheCompaniesApi\Sdk\Configuration;

$config = new Configuration([
    'apiToken' => 'your-api-token',
    'baseUrl' => 'https://api.thecompaniesapi.com',
    'visitorId' => 'unique-visitor-id',
    'timeout' => 60,
    'verifySSL' => true,
    'defaultHeaders' => [
        'X-Custom-Header' => 'custom-value'
    ]
]);

$client = new Client($config);
```

## 📄 License

This SDK is released under the MIT License. See [LICENSE](LICENSE) for details.

## 🔗 Links

- [The Companies API](https://www.thecompaniesapi.com)
- [API Documentation](https://www.thecompaniesapi.com/api)
- [TypeScript SDK](https://github.com/thecompaniesapi/sdk-typescript)
- [Support & Live Chat](https://www.thecompaniesapi.com/)
