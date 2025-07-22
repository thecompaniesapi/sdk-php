<?php

namespace TheCompaniesApi\Sdk\Generated;

use TheCompaniesApi\Sdk\BaseClient;

/**
 * Auto-generated client methods for The Companies API
 * 
 * This class extends the base Client with auto-generated methods
 * from the OpenAPI specification.
 */
class GeneratedClient extends BaseClient
{
    /**
     * 
     * Get the health status of the API.
     * 
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\FetchApiHealthResponse API response
     */
    public function fetchApiHealth(array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\FetchApiHealthResponse
    {
        $endpoint = '/';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\FetchApiHealthResponse');
    }

    /**
     * 
     * Get the current OpenAPI specification.
     * 
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\FetchOpenApiResponse API response
     */
    public function fetchOpenApi(array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\FetchOpenApiResponse
    {
        $endpoint = '/v2/openapi';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\FetchOpenApiResponse');
    }

    /**
     * 
     * Get and filter your actions.
     * 
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\FetchActionsResponse API response
     */
    public function fetchActions(array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\FetchActionsResponse
    {
        $endpoint = '/v2/actions';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\FetchActionsResponse');
    }

    /**
     * 
     * Request or estimate a new action.
     * 
     * @param \TheCompaniesApi\Sdk\Generated\Requests\RequestActionRequest|array $data Request body data
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\RequestActionResponse API response
     */
    public function requestAction(\TheCompaniesApi\Sdk\Generated\Requests\RequestActionRequest|array $data = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\RequestActionResponse
    {
        $endpoint = '/v2/actions';
        
        // Convert model to array if needed
        if ($data instanceof \TheCompaniesApi\Sdk\Generated\Requests\RequestActionRequest) {
            $data = $data->toArray();
        }
        
        $response = $this->post($endpoint, $data, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\RequestActionResponse');
    }

    /**
     * 
     * Ask for a retry of failed action.
     * 
     * @param string $actionId Path parameter
     * @param \TheCompaniesApi\Sdk\Generated\Requests\RetryActionRequest|array $data Request body data
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\RetryActionResponse API response
     */
    public function retryAction(string $actionId, \TheCompaniesApi\Sdk\Generated\Requests\RetryActionRequest|array $data = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\RetryActionResponse
    {
        $endpoint = '/v2/actions/' . $actionId . '/retry';
        
        // Convert model to array if needed
        if ($data instanceof \TheCompaniesApi\Sdk\Generated\Requests\RetryActionRequest) {
            $data = $data->toArray();
        }
        
        $response = $this->post($endpoint, $data, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\RetryActionResponse');
    }

    /**
     * 
     * Search companies using a segmentation query.
     * 
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\SearchCompaniesResponse API response
     */
    public function searchCompanies(array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\SearchCompaniesResponse
    {
        $endpoint = '/v2/companies';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\SearchCompaniesResponse');
    }

    /**
     * 
     * Search companies using a segmentation query.
     * 
     * @param \TheCompaniesApi\Sdk\Generated\Requests\SearchCompaniesPostRequest|array $data Request body data
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\SearchCompaniesPostResponse API response
     */
    public function searchCompaniesPost(\TheCompaniesApi\Sdk\Generated\Requests\SearchCompaniesPostRequest|array $data = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\SearchCompaniesPostResponse
    {
        $endpoint = '/v2/companies';
        
        // Convert model to array if needed
        if ($data instanceof \TheCompaniesApi\Sdk\Generated\Requests\SearchCompaniesPostRequest) {
            $data = $data->toArray();
        }
        
        $response = $this->post($endpoint, $data, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\SearchCompaniesPostResponse');
    }

    /**
     * 
     * Get a single company data by its domain.
     * 
     * @param string $domain Path parameter
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\FetchCompanyResponse API response
     */
    public function fetchCompany(string $domain, array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\FetchCompanyResponse
    {
        $endpoint = '/v2/companies/' . $domain . '';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\FetchCompanyResponse');
    }

    /**
     * 
     * Search companies by name.
     * 
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\SearchCompaniesByNameResponse API response
     */
    public function searchCompaniesByName(array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\SearchCompaniesByNameResponse
    {
        $endpoint = '/v2/companies/by-name';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\SearchCompaniesByNameResponse');
    }

    /**
     * 
     * Search companies by prompt.
     * 
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\SearchCompaniesByPromptResponse API response
     */
    public function searchCompaniesByPrompt(array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\SearchCompaniesByPromptResponse
    {
        $endpoint = '/v2/companies/by-prompt';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\SearchCompaniesByPromptResponse');
    }

    /**
     * 
     * Get similar companies from one or many domains.
     * 
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\SearchSimilarCompaniesResponse API response
     */
    public function searchSimilarCompanies(array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\SearchSimilarCompaniesResponse
    {
        $endpoint = '/v2/companies/similar';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\SearchSimilarCompaniesResponse');
    }

    /**
     * 
     * Get the count of companies using a segmentation query.
     * 
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\CountCompaniesResponse API response
     */
    public function countCompanies(array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\CountCompaniesResponse
    {
        $endpoint = '/v2/companies/count';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\CountCompaniesResponse');
    }

    /**
     * 
     * Get the count of companies using a segmentation body.
     * 
     * @param \TheCompaniesApi\Sdk\Generated\Requests\CountCompaniesPostRequest|array $data Request body data
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\CountCompaniesPostResponse API response
     */
    public function countCompaniesPost(\TheCompaniesApi\Sdk\Generated\Requests\CountCompaniesPostRequest|array $data = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\CountCompaniesPostResponse
    {
        $endpoint = '/v2/companies/count';
        
        // Convert model to array if needed
        if ($data instanceof \TheCompaniesApi\Sdk\Generated\Requests\CountCompaniesPostRequest) {
            $data = $data->toArray();
        }
        
        $response = $this->post($endpoint, $data, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\CountCompaniesPostResponse');
    }

    /**
     * 
     * Get a company data by email.
     * 
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\FetchCompanyByEmailResponse API response
     */
    public function fetchCompanyByEmail(array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\FetchCompanyByEmailResponse
    {
        $endpoint = '/v2/companies/by-email';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\FetchCompanyByEmailResponse');
    }

    /**
     * 
     * Get a company data by social media.
     * 
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\FetchCompanyBySocialResponse API response
     */
    public function fetchCompanyBySocial(array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\FetchCompanyBySocialResponse
    {
        $endpoint = '/v2/companies/by-social';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\FetchCompanyBySocialResponse');
    }

    /**
     * 
     * Get email patterns for a company by its domain.
     * 
     * @param string $domain Path parameter
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\FetchCompanyEmailPatternsResponse API response
     */
    public function fetchCompanyEmailPatterns(string $domain, array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\FetchCompanyEmailPatternsResponse
    {
        $endpoint = '/v2/companies/' . $domain . '/email-patterns';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\FetchCompanyEmailPatternsResponse');
    }

    /**
     * 
     * Ask a question about a company by its domain.
     * 
     * @param string $domain Path parameter
     * @param \TheCompaniesApi\Sdk\Generated\Requests\AskCompanyRequest|array $data Request body data
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\AskCompanyResponse API response
     */
    public function askCompany(string $domain, \TheCompaniesApi\Sdk\Generated\Requests\AskCompanyRequest|array $data = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\AskCompanyResponse
    {
        $endpoint = '/v2/companies/' . $domain . '/ask';
        
        // Convert model to array if needed
        if ($data instanceof \TheCompaniesApi\Sdk\Generated\Requests\AskCompanyRequest) {
            $data = $data->toArray();
        }
        
        $response = $this->post($endpoint, $data, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\AskCompanyResponse');
    }

    /**
     * 
     * Get the full context of a company by its domain.
     * 
     * @param string $domain Path parameter
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\FetchCompanyContextResponse API response
     */
    public function fetchCompanyContext(string $domain, array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\FetchCompanyContextResponse
    {
        $endpoint = '/v2/companies/' . $domain . '/context';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\FetchCompanyContextResponse');
    }

    /**
     * 
     * Fetch analytics data for search segmentations and lists.
     * 
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\FetchCompaniesAnalyticsResponse API response
     */
    public function fetchCompaniesAnalytics(array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\FetchCompaniesAnalyticsResponse
    {
        $endpoint = '/v2/companies/analytics';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\FetchCompaniesAnalyticsResponse');
    }

    /**
     * 
     * Export analytics data for search segmentations and lists.
     * 
     * @param \TheCompaniesApi\Sdk\Generated\Requests\ExportCompaniesAnalyticsRequest|array $data Request body data
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\ExportCompaniesAnalyticsResponse API response
     */
    public function exportCompaniesAnalytics(\TheCompaniesApi\Sdk\Generated\Requests\ExportCompaniesAnalyticsRequest|array $data = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\ExportCompaniesAnalyticsResponse
    {
        $endpoint = '/v2/companies/analytics/export';
        
        // Convert model to array if needed
        if ($data instanceof \TheCompaniesApi\Sdk\Generated\Requests\ExportCompaniesAnalyticsRequest) {
            $data = $data->toArray();
        }
        
        $response = $this->post($endpoint, $data, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\ExportCompaniesAnalyticsResponse');
    }

    /**
     * 
     * Search industries.
     * 
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\SearchIndustriesResponse API response
     */
    public function searchIndustries(array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\SearchIndustriesResponse
    {
        $endpoint = '/v2/industries';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\SearchIndustriesResponse');
    }

    /**
     * 
     * Get similar industries from one or many industries.
     * 
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\SearchIndustriesSimilarResponse API response
     */
    public function searchIndustriesSimilar(array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\SearchIndustriesSimilarResponse
    {
        $endpoint = '/v2/industries/similar';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\SearchIndustriesSimilarResponse');
    }

    /**
     * 
     * Search technologies.
     * 
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\SearchTechnologiesResponse API response
     */
    public function searchTechnologies(array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\SearchTechnologiesResponse
    {
        $endpoint = '/v2/technologies';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\SearchTechnologiesResponse');
    }

    /**
     * 
     * Search cities.
     * 
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\SearchCitiesResponse API response
     */
    public function searchCities(array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\SearchCitiesResponse
    {
        $endpoint = '/v2/locations/cities';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\SearchCitiesResponse');
    }

    /**
     * 
     * Search counties.
     * 
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\SearchCountiesResponse API response
     */
    public function searchCounties(array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\SearchCountiesResponse
    {
        $endpoint = '/v2/locations/counties';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\SearchCountiesResponse');
    }

    /**
     * 
     * Search countries.
     * 
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\SearchCountriesResponse API response
     */
    public function searchCountries(array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\SearchCountriesResponse
    {
        $endpoint = '/v2/locations/countries';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\SearchCountriesResponse');
    }

    /**
     * 
     * Search states.
     * 
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\SearchStatesResponse API response
     */
    public function searchStates(array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\SearchStatesResponse
    {
        $endpoint = '/v2/locations/states';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\SearchStatesResponse');
    }

    /**
     * 
     * Search continents.
     * 
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\SearchContinentsResponse API response
     */
    public function searchContinents(array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\SearchContinentsResponse
    {
        $endpoint = '/v2/locations/continents';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\SearchContinentsResponse');
    }

    /**
     * 
     * Enrich job titles.
     * 
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\EnrichJobTitlesResponse API response
     */
    public function enrichJobTitles(array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\EnrichJobTitlesResponse
    {
        $endpoint = '/v2/job-titles/enrich';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\EnrichJobTitlesResponse');
    }

    /**
     * 
     * Get and filter your lists.
     * 
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\FetchListsResponse API response
     */
    public function fetchLists(array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\FetchListsResponse
    {
        $endpoint = '/v2/lists';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\FetchListsResponse');
    }

    /**
     * 
     * Create a new list.
     * 
     * @param \TheCompaniesApi\Sdk\Generated\Requests\CreateListRequest|array $data Request body data
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\CreateListResponse API response
     */
    public function createList(\TheCompaniesApi\Sdk\Generated\Requests\CreateListRequest|array $data = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\CreateListResponse
    {
        $endpoint = '/v2/lists';
        
        // Convert model to array if needed
        if ($data instanceof \TheCompaniesApi\Sdk\Generated\Requests\CreateListRequest) {
            $data = $data->toArray();
        }
        
        $response = $this->post($endpoint, $data, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\CreateListResponse');
    }

    /**
     * 
     * Update a list.
     * 
     * @param string $listId Path parameter
     * @param \TheCompaniesApi\Sdk\Generated\Requests\UpdateListRequest|array $data Request body data
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\UpdateListResponse API response
     */
    public function updateList(string $listId, \TheCompaniesApi\Sdk\Generated\Requests\UpdateListRequest|array $data = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\UpdateListResponse
    {
        $endpoint = '/v2/lists/' . $listId . '';
        
        // Convert model to array if needed
        if ($data instanceof \TheCompaniesApi\Sdk\Generated\Requests\UpdateListRequest) {
            $data = $data->toArray();
        }
        
        $response = $this->patch($endpoint, $data, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\UpdateListResponse');
    }

    /**
     * 
     * Delete a list.
     * 
     * @param string $listId Path parameter
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\DeleteListResponse API response
     */
    public function deleteList(string $listId, array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\DeleteListResponse
    {
        $endpoint = '/v2/lists/' . $listId . '';
        $response = $this->delete($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\DeleteListResponse');
    }

    /**
     * 
     * Get companies in a list with a segmentation query.
     * 
     * @param string $listId Path parameter
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\FetchCompaniesInListResponse API response
     */
    public function fetchCompaniesInList(string $listId, array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\FetchCompaniesInListResponse
    {
        $endpoint = '/v2/lists/' . $listId . '/companies';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\FetchCompaniesInListResponse');
    }

    /**
     * 
     * Get companies in a list with a segmentation body.
     * 
     * @param string $listId Path parameter
     * @param \TheCompaniesApi\Sdk\Generated\Requests\FetchCompaniesInListPostRequest|array $data Request body data
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\FetchCompaniesInListPostResponse API response
     */
    public function fetchCompaniesInListPost(string $listId, \TheCompaniesApi\Sdk\Generated\Requests\FetchCompaniesInListPostRequest|array $data = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\FetchCompaniesInListPostResponse
    {
        $endpoint = '/v2/lists/' . $listId . '/companies';
        
        // Convert model to array if needed
        if ($data instanceof \TheCompaniesApi\Sdk\Generated\Requests\FetchCompaniesInListPostRequest) {
            $data = $data->toArray();
        }
        
        $response = $this->post($endpoint, $data, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\FetchCompaniesInListPostResponse');
    }

    /**
     * 
     * Get a company in a list.
     * 
     * @param string $listId Path parameter
     * @param string $domain Path parameter
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\FetchCompanyInListResponse API response
     */
    public function fetchCompanyInList(string $listId, string $domain, array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\FetchCompanyInListResponse
    {
        $endpoint = '/v2/lists/' . $listId . '/companies/' . $domain . '';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\FetchCompanyInListResponse');
    }

    /**
     * 
     * Toggle one or more companies in a list.
     * 
     * @param string $listId Path parameter
     * @param \TheCompaniesApi\Sdk\Generated\Requests\ToggleCompaniesInListRequest|array $data Request body data
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\ToggleCompaniesInListResponse API response
     */
    public function toggleCompaniesInList(string $listId, \TheCompaniesApi\Sdk\Generated\Requests\ToggleCompaniesInListRequest|array $data = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\ToggleCompaniesInListResponse
    {
        $endpoint = '/v2/lists/' . $listId . '/companies/toggle';
        
        // Convert model to array if needed
        if ($data instanceof \TheCompaniesApi\Sdk\Generated\Requests\ToggleCompaniesInListRequest) {
            $data = $data->toArray();
        }
        
        $response = $this->patch($endpoint, $data, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\ToggleCompaniesInListResponse');
    }

    /**
     * 
     * Get team information.
     * 
     * @param string $teamId Path parameter
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\FetchTeamResponse API response
     */
    public function fetchTeam(string $teamId, array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\FetchTeamResponse
    {
        $endpoint = '/v2/teams/' . $teamId . '';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\FetchTeamResponse');
    }

    /**
     * 
     * Update a team.
     * 
     * @param string $teamId Path parameter
     * @param \TheCompaniesApi\Sdk\Generated\Requests\UpdateTeamRequest|array $data Request body data
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\UpdateTeamResponse API response
     */
    public function updateTeam(string $teamId, \TheCompaniesApi\Sdk\Generated\Requests\UpdateTeamRequest|array $data = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\UpdateTeamResponse
    {
        $endpoint = '/v2/teams/' . $teamId . '';
        
        // Convert model to array if needed
        if ($data instanceof \TheCompaniesApi\Sdk\Generated\Requests\UpdateTeamRequest) {
            $data = $data->toArray();
        }
        
        $response = $this->patch($endpoint, $data, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\UpdateTeamResponse');
    }

    /**
     * 
     * Get current user information.
     * 
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\FetchUserResponse API response
     */
    public function fetchUser(array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\FetchUserResponse
    {
        $endpoint = '/v2/user';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\FetchUserResponse');
    }

    /**
     * 
     * Fetch prompts history.
     * 
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\FetchPromptsResponse API response
     */
    public function fetchPrompts(array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\FetchPromptsResponse
    {
        $endpoint = '/v2/prompts';
        $response = $this->get($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\FetchPromptsResponse');
    }

    /**
     * 
     * Delete a prompt.
     * 
     * @param string $promptId Path parameter
     * @param array $params Query parameters
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\DeletePromptResponse API response
     */
    public function deletePrompt(string $promptId, array $params = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\DeletePromptResponse
    {
        $endpoint = '/v2/prompts/' . $promptId . '';
        $response = $this->delete($endpoint, $params, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\DeletePromptResponse');
    }

    /**
     * 
     * Query the product prompt.
     * 
     * @param \TheCompaniesApi\Sdk\Generated\Requests\ProductPromptRequest|array $data Request body data
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\ProductPromptResponse API response
     */
    public function productPrompt(\TheCompaniesApi\Sdk\Generated\Requests\ProductPromptRequest|array $data = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\ProductPromptResponse
    {
        $endpoint = '/v2/prompts/product';
        
        // Convert model to array if needed
        if ($data instanceof \TheCompaniesApi\Sdk\Generated\Requests\ProductPromptRequest) {
            $data = $data->toArray();
        }
        
        $response = $this->post($endpoint, $data, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\ProductPromptResponse');
    }

    /**
     * 
     * Convert a query to a segmentation.
     * 
     * @param \TheCompaniesApi\Sdk\Generated\Requests\PromptToSegmentationRequest|array $data Request body data
     * @param array $headers Additional headers
     * @return \TheCompaniesApi\Sdk\Generated\Responses\PromptToSegmentationResponse API response
     */
    public function promptToSegmentation(\TheCompaniesApi\Sdk\Generated\Requests\PromptToSegmentationRequest|array $data = [], array $headers = []): \TheCompaniesApi\Sdk\Generated\Responses\PromptToSegmentationResponse
    {
        $endpoint = '/v2/prompts/segmentation';
        
        // Convert model to array if needed
        if ($data instanceof \TheCompaniesApi\Sdk\Generated\Requests\PromptToSegmentationRequest) {
            $data = $data->toArray();
        }
        
        $response = $this->post($endpoint, $data, $headers);
        
        return $this->createTypedResponse($response, '\TheCompaniesApi\Sdk\Generated\Responses\PromptToSegmentationResponse');
    }

    /**
     * Create typed response from array data
     */
    private function createTypedResponse(array $response, string $returnType): mixed
    {
        $data = $response['data'] ?? $response;
        
        // If returnType starts with a backslash, it's a response class
        if (str_starts_with($returnType, '\\')) {
            // Instantiate the response class
            if (class_exists($returnType)) {
                return new $returnType($data);
            }
        }
        
        return $data;
    }
}
