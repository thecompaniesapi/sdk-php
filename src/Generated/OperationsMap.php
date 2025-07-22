<?php

namespace TheCompaniesApi\Sdk\Generated;

/**
 * Operations map auto-generated from OpenAPI schema
 */
class OperationsMap
{
    public const OPERATIONS = array (
  'fetchApiHealth' => 
  array (
    'path' => '/',
    'method' => 'GET',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Get the health status of the API.',
    'parameters' => 
    array (
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Get the health status of the API.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'healthy' => 
                array (
                  'type' => 'boolean',
                ),
                'nodeName' => 
                array (
                  'type' => 'string',
                ),
                'report' => 
                array (
                  'type' => 'object',
                  'additionalProperties' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'displayName' => 
                      array (
                        'type' => 'string',
                      ),
                      'health' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'healthy' => 
                          array (
                            'type' => 'boolean',
                          ),
                        ),
                        'required' => 
                        array (
                          0 => 'healthy',
                        ),
                      ),
                    ),
                    'required' => 
                    array (
                      0 => 'displayName',
                      1 => 'health',
                    ),
                  ),
                ),
              ),
              'required' => 
              array (
                0 => 'healthy',
                1 => 'nodeName',
                2 => 'report',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'fetchOpenApi' => 
  array (
    'path' => '/v2/openapi',
    'method' => 'GET',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Get the current OpenAPI specification.',
    'parameters' => 
    array (
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Get the current OpenAPI specification.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'fetchActions' => 
  array (
    'path' => '/v2/actions',
    'method' => 'GET',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Get and filter your actions.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'boolean',
        ),
        'required' => false,
        'name' => 'full',
        'in' => 'query',
      ),
      1 => 
      array (
        'schema' => 
        array (
          'type' => 'array',
          'items' => 
          array (
            'type' => 'number',
          ),
        ),
        'required' => false,
        'name' => 'ids',
        'in' => 'query',
      ),
      2 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'listId',
        'in' => 'query',
      ),
      3 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'page',
        'in' => 'query',
      ),
      4 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => false,
        'name' => 'search',
        'in' => 'query',
      ),
      5 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'size',
        'in' => 'query',
      ),
      6 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'active',
            1 => 'completed',
            2 => 'failed',
            3 => 'pending',
          ),
        ),
        'required' => false,
        'name' => 'status',
        'in' => 'query',
      ),
      7 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'teamId',
        'in' => 'query',
      ),
      8 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'jobs:request',
            1 => 'companies:added',
          ),
        ),
        'required' => false,
        'name' => 'type',
        'in' => 'query',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Get and filter your actions.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'actions' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    '$ref' => '#/components/schemas/Action',
                  ),
                ),
                'meta' => 
                array (
                  '$ref' => '#/components/schemas/PaginationMeta',
                ),
              ),
              'required' => 
              array (
                0 => 'actions',
                1 => 'meta',
              ),
            ),
          ),
        ),
      ),
      400 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'invalidListId',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'requestAction' => 
  array (
    'path' => '/v2/actions',
    'method' => 'POST',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Request or estimate a new action.',
    'parameters' => 
    array (
    ),
    'requestBody' => 
    array (
      'content' => 
      array (
        'application/json' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'domains' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                ),
                'maxItems' => 100000,
              ),
              'estimate' => 
              array (
                'type' => 'boolean',
              ),
              'fields' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'description' => 
                    array (
                      'type' => 'string',
                    ),
                    'key' => 
                    array (
                      'type' => 'string',
                    ),
                    'type' => 
                    array (
                      'type' => 'string',
                      'enum' => 
                      array (
                        0 => 'array|boolean',
                        1 => 'array|number',
                        2 => 'array|string',
                        3 => 'boolean',
                        4 => 'number',
                        5 => 'string',
                      ),
                    ),
                    'values' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'string',
                      ),
                    ),
                  ),
                  'required' => 
                  array (
                    0 => 'key',
                    1 => 'type',
                  ),
                ),
              ),
              'job' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'ask-domain',
                  1 => 'ask-list',
                  2 => 'enrich-companies',
                  3 => 'enrich-list',
                  4 => 'cleanup-list',
                ),
              ),
              'listId' => 
              array (
                'type' => 'number',
              ),
              'names' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                ),
              ),
              'promptId' => 
              array (
                'type' => 'number',
              ),
              'query' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  '$ref' => '#/components/schemas/SegmentationCondition',
                ),
              ),
              'question' => 
              array (
                'type' => 'string',
              ),
              'type' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'jobs:request',
                  1 => 'companies:added',
                ),
              ),
            ),
            'required' => 
            array (
              0 => 'type',
            ),
          ),
        ),
      ),
    ),
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Request or estimate a new action.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'actions' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    '$ref' => '#/components/schemas/Action',
                  ),
                ),
              ),
              'required' => 
              array (
                0 => 'actions',
              ),
            ),
          ),
        ),
      ),
      400 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'invalidListId',
                    1 => 'typeMissing',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'invalidPromptId',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'retryAction' => 
  array (
    'path' => '/v2/actions/{actionId}/retry',
    'method' => 'POST',
    'pathParams' => 
    array (
      0 => 'actionId',
    ),
    'summary' => '',
    'description' => 'Ask for a retry of failed action.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => true,
        'name' => 'actionId',
        'in' => 'path',
      ),
    ),
    'requestBody' => 
    array (
      'content' => 
      array (
        'application/json' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
            ),
          ),
        ),
      ),
    ),
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Ask for a retry of failed action.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'action' => 
                array (
                  '$ref' => '#/components/schemas/Action',
                ),
              ),
              'required' => 
              array (
                0 => 'action',
              ),
            ),
          ),
        ),
      ),
      400 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'invalidActionId',
                    1 => 'actionTypeInvalid',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'searchCompanies' => 
  array (
    'path' => '/v2/companies',
    'method' => 'GET',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Search companies using a segmentation query.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'actionId',
        'in' => 'query',
      ),
      1 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => false,
        'name' => 'domainsToExclude',
        'in' => 'query',
      ),
      2 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => false,
        'name' => 'linkedinToExclude',
        'in' => 'query',
      ),
      3 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'page',
        'in' => 'query',
      ),
      4 => 
      array (
        'schema' => 
        array (
          'type' => 'array',
          'items' => 
          array (
            '$ref' => '#/components/schemas/SegmentationCondition',
          ),
        ),
        'required' => false,
        'name' => 'query',
        'in' => 'query',
      ),
      5 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => false,
        'name' => 'search',
        'in' => 'query',
      ),
      6 => 
      array (
        'schema' => 
        array (
          'type' => 'array',
          'items' => 
          array (
            'type' => 'string',
            'enum' => 
            array (
              0 => 'about.name',
              1 => 'domain.domain',
            ),
          ),
        ),
        'required' => false,
        'name' => 'searchFields',
        'in' => 'query',
      ),
      7 => 
      array (
        'schema' => 
        array (
          'type' => 'boolean',
        ),
        'required' => false,
        'name' => 'simplified',
        'in' => 'query',
      ),
      8 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
          'minimum' => 1,
          'maximum' => 100,
        ),
        'required' => false,
        'name' => 'size',
        'in' => 'query',
      ),
      9 => 
      array (
        'schema' => 
        array (
          'type' => 'array',
          'items' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'key' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'about.businessType',
                  1 => 'about.industries',
                  2 => 'about.industry',
                  3 => 'about.name',
                  4 => 'about.totalEmployees',
                  5 => 'about.yearFounded',
                  6 => 'analytics.monthlyVisitors',
                  7 => 'apps',
                  8 => 'codes.naics',
                  9 => 'codes.sic',
                  10 => 'contacts',
                  11 => 'domain.domain',
                  12 => 'domain.tld',
                  13 => 'finances.revenue',
                  14 => 'locations.headquarters.city.code',
                  15 => 'locations.headquarters.country.code',
                  16 => 'locations.headquarters.county.code',
                  17 => 'locations.headquarters.state.code',
                  18 => 'meta.score',
                  19 => 'meta.syncedAt',
                  20 => 'socials',
                  21 => 'technologies.active',
                  22 => 'urls',
                ),
              ),
              'missing' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => '_first',
                  1 => '_last',
                ),
              ),
              'order' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'asc',
                  1 => 'desc',
                ),
              ),
            ),
            'required' => 
            array (
              0 => 'key',
              1 => 'order',
            ),
          ),
        ),
        'required' => false,
        'name' => 'sortFields',
        'in' => 'query',
      ),
      10 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'about.businessType',
            1 => 'about.industries',
            2 => 'about.industry',
            3 => 'about.name',
            4 => 'about.totalEmployees',
            5 => 'about.yearFounded',
            6 => 'analytics.monthlyVisitors',
            7 => 'apps',
            8 => 'codes.naics',
            9 => 'codes.sic',
            10 => 'contacts',
            11 => 'domain.domain',
            12 => 'domain.tld',
            13 => 'finances.revenue',
            14 => 'locations.headquarters.city.code',
            15 => 'locations.headquarters.country.code',
            16 => 'locations.headquarters.county.code',
            17 => 'locations.headquarters.state.code',
            18 => 'meta.score',
            19 => 'meta.syncedAt',
            20 => 'socials',
            21 => 'technologies.active',
            22 => 'urls',
          ),
        ),
        'required' => false,
        'name' => 'sortKey',
        'in' => 'query',
      ),
      11 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'asc',
            1 => 'desc',
          ),
        ),
        'required' => false,
        'name' => 'sortOrder',
        'in' => 'query',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Search companies using a segmentation query.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'companies' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    '$ref' => '#/components/schemas/CompanyV2',
                  ),
                ),
                'meta' => 
                array (
                  '$ref' => '#/components/schemas/PaginationMeta',
                ),
                'query' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    '$ref' => '#/components/schemas/SegmentationCondition',
                  ),
                ),
              ),
              'required' => 
              array (
                0 => 'companies',
                1 => 'meta',
                2 => 'query',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'noCreditsRemaining',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'searchCompaniesPost' => 
  array (
    'path' => '/v2/companies',
    'method' => 'POST',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Search companies using a segmentation query.',
    'parameters' => 
    array (
    ),
    'requestBody' => 
    array (
      'content' => 
      array (
        'application/json' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'actionId' => 
              array (
                'type' => 'number',
              ),
              'domainsToExclude' => 
              array (
                'type' => 'string',
              ),
              'linkedinToExclude' => 
              array (
                'type' => 'string',
              ),
              'page' => 
              array (
                'type' => 'number',
              ),
              'query' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  '$ref' => '#/components/schemas/SegmentationCondition',
                ),
              ),
              'search' => 
              array (
                'type' => 'string',
              ),
              'searchFields' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'about.name',
                    1 => 'domain.domain',
                  ),
                ),
              ),
              'simplified' => 
              array (
                'type' => 'boolean',
              ),
              'size' => 
              array (
                'type' => 'number',
                'minimum' => 1,
                'maximum' => 100,
              ),
              'sortFields' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'key' => 
                    array (
                      'type' => 'string',
                      'enum' => 
                      array (
                        0 => 'about.businessType',
                        1 => 'about.industries',
                        2 => 'about.industry',
                        3 => 'about.name',
                        4 => 'about.totalEmployees',
                        5 => 'about.yearFounded',
                        6 => 'analytics.monthlyVisitors',
                        7 => 'apps',
                        8 => 'codes.naics',
                        9 => 'codes.sic',
                        10 => 'contacts',
                        11 => 'domain.domain',
                        12 => 'domain.tld',
                        13 => 'finances.revenue',
                        14 => 'locations.headquarters.city.code',
                        15 => 'locations.headquarters.country.code',
                        16 => 'locations.headquarters.county.code',
                        17 => 'locations.headquarters.state.code',
                        18 => 'meta.score',
                        19 => 'meta.syncedAt',
                        20 => 'socials',
                        21 => 'technologies.active',
                        22 => 'urls',
                      ),
                    ),
                    'missing' => 
                    array (
                      'type' => 'string',
                      'enum' => 
                      array (
                        0 => '_first',
                        1 => '_last',
                      ),
                    ),
                    'order' => 
                    array (
                      'type' => 'string',
                      'enum' => 
                      array (
                        0 => 'asc',
                        1 => 'desc',
                      ),
                    ),
                  ),
                  'required' => 
                  array (
                    0 => 'key',
                    1 => 'order',
                  ),
                ),
              ),
              'sortKey' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'about.businessType',
                  1 => 'about.industries',
                  2 => 'about.industry',
                  3 => 'about.name',
                  4 => 'about.totalEmployees',
                  5 => 'about.yearFounded',
                  6 => 'analytics.monthlyVisitors',
                  7 => 'apps',
                  8 => 'codes.naics',
                  9 => 'codes.sic',
                  10 => 'contacts',
                  11 => 'domain.domain',
                  12 => 'domain.tld',
                  13 => 'finances.revenue',
                  14 => 'locations.headquarters.city.code',
                  15 => 'locations.headquarters.country.code',
                  16 => 'locations.headquarters.county.code',
                  17 => 'locations.headquarters.state.code',
                  18 => 'meta.score',
                  19 => 'meta.syncedAt',
                  20 => 'socials',
                  21 => 'technologies.active',
                  22 => 'urls',
                ),
              ),
              'sortOrder' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'asc',
                  1 => 'desc',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Search companies using a segmentation query.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'companies' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    '$ref' => '#/components/schemas/CompanyV2',
                  ),
                ),
                'meta' => 
                array (
                  '$ref' => '#/components/schemas/PaginationMeta',
                ),
                'query' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    '$ref' => '#/components/schemas/SegmentationCondition',
                  ),
                ),
              ),
              'required' => 
              array (
                0 => 'companies',
                1 => 'meta',
                2 => 'query',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'noCreditsRemaining',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'fetchCompany' => 
  array (
    'path' => '/v2/companies/{domain}',
    'method' => 'GET',
    'pathParams' => 
    array (
      0 => 'domain',
    ),
    'summary' => '',
    'description' => 'Get a single company data by its domain.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => true,
        'name' => 'domain',
        'in' => 'path',
      ),
      1 => 
      array (
        'schema' => 
        array (
          'type' => 'boolean',
        ),
        'required' => false,
        'name' => 'refresh',
        'in' => 'query',
      ),
      2 => 
      array (
        'schema' => 
        array (
          'type' => 'boolean',
        ),
        'required' => false,
        'name' => 'simplified',
        'in' => 'query',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Get a single company data by its domain.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              '$ref' => '#/components/schemas/CompanyV2',
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'noCreditsRemaining',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      404 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'companyNotFound',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'searchCompaniesByName' => 
  array (
    'path' => '/v2/companies/by-name',
    'method' => 'GET',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Search companies by name.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => false,
        'name' => 'countries',
        'in' => 'query',
      ),
      1 => 
      array (
        'schema' => 
        array (
          'type' => 'boolean',
        ),
        'required' => false,
        'name' => 'exactWordsMatch',
        'in' => 'query',
      ),
      2 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => false,
        'name' => 'listsToExclude',
        'in' => 'query',
      ),
      3 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => true,
        'name' => 'name',
        'in' => 'query',
      ),
      4 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'page',
        'in' => 'query',
      ),
      5 => 
      array (
        'schema' => 
        array (
          'type' => 'array',
          'items' => 
          array (
            'type' => 'string',
            'enum' => 
            array (
              0 => 'about.name',
              1 => 'domain.domain',
            ),
          ),
        ),
        'required' => false,
        'name' => 'searchFields',
        'in' => 'query',
      ),
      6 => 
      array (
        'schema' => 
        array (
          'type' => 'boolean',
        ),
        'required' => false,
        'name' => 'simplified',
        'in' => 'query',
      ),
      7 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
          'minimum' => 1,
          'maximum' => 25,
        ),
        'required' => false,
        'name' => 'size',
        'in' => 'query',
      ),
      8 => 
      array (
        'schema' => 
        array (
          'type' => 'array',
          'items' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'key' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'about.businessType',
                  1 => 'about.industries',
                  2 => 'about.industry',
                  3 => 'about.name',
                  4 => 'about.totalEmployees',
                  5 => 'about.yearFounded',
                  6 => 'analytics.monthlyVisitors',
                  7 => 'apps',
                  8 => 'codes.naics',
                  9 => 'codes.sic',
                  10 => 'contacts',
                  11 => 'domain.domain',
                  12 => 'domain.tld',
                  13 => 'finances.revenue',
                  14 => 'locations.headquarters.city.code',
                  15 => 'locations.headquarters.country.code',
                  16 => 'locations.headquarters.county.code',
                  17 => 'locations.headquarters.state.code',
                  18 => 'meta.score',
                  19 => 'meta.syncedAt',
                  20 => 'socials',
                  21 => 'technologies.active',
                  22 => 'urls',
                ),
              ),
              'missing' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => '_first',
                  1 => '_last',
                ),
              ),
              'order' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'asc',
                  1 => 'desc',
                ),
              ),
            ),
            'required' => 
            array (
              0 => 'key',
              1 => 'order',
            ),
          ),
        ),
        'required' => false,
        'name' => 'sortFields',
        'in' => 'query',
      ),
      9 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'about.businessType',
            1 => 'about.industries',
            2 => 'about.industry',
            3 => 'about.name',
            4 => 'about.totalEmployees',
            5 => 'about.yearFounded',
            6 => 'analytics.monthlyVisitors',
            7 => 'apps',
            8 => 'codes.naics',
            9 => 'codes.sic',
            10 => 'contacts',
            11 => 'domain.domain',
            12 => 'domain.tld',
            13 => 'finances.revenue',
            14 => 'locations.headquarters.city.code',
            15 => 'locations.headquarters.country.code',
            16 => 'locations.headquarters.county.code',
            17 => 'locations.headquarters.state.code',
            18 => 'meta.score',
            19 => 'meta.syncedAt',
            20 => 'socials',
            21 => 'technologies.active',
            22 => 'urls',
          ),
        ),
        'required' => false,
        'name' => 'sortKey',
        'in' => 'query',
      ),
      10 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'asc',
            1 => 'desc',
          ),
        ),
        'required' => false,
        'name' => 'sortOrder',
        'in' => 'query',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Search companies by name.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'companies' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    '$ref' => '#/components/schemas/CompanyV2',
                  ),
                ),
                'meta' => 
                array (
                  '$ref' => '#/components/schemas/PaginationMeta',
                ),
              ),
              'required' => 
              array (
                0 => 'companies',
                1 => 'meta',
              ),
            ),
          ),
        ),
      ),
      400 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'companyNameEmpty',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'noCreditsRemaining',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'searchCompaniesByPrompt' => 
  array (
    'path' => '/v2/companies/by-prompt',
    'method' => 'GET',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Search companies by prompt.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => false,
        'name' => 'listsToExclude',
        'in' => 'query',
      ),
      1 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'page',
        'in' => 'query',
      ),
      2 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => true,
        'name' => 'prompt',
        'in' => 'query',
      ),
      3 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
          'minimum' => 0,
          'maximum' => 2,
        ),
        'required' => false,
        'name' => 'similarity',
        'in' => 'query',
      ),
      4 => 
      array (
        'schema' => 
        array (
          'type' => 'boolean',
        ),
        'required' => false,
        'name' => 'simplified',
        'in' => 'query',
      ),
      5 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
          'minimum' => 1,
          'maximum' => 50,
        ),
        'required' => false,
        'name' => 'size',
        'in' => 'query',
      ),
      6 => 
      array (
        'schema' => 
        array (
          'type' => 'array',
          'items' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'key' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'about.businessType',
                  1 => 'about.industries',
                  2 => 'about.industry',
                  3 => 'about.name',
                  4 => 'about.totalEmployees',
                  5 => 'about.yearFounded',
                  6 => 'analytics.monthlyVisitors',
                  7 => 'apps',
                  8 => 'codes.naics',
                  9 => 'codes.sic',
                  10 => 'contacts',
                  11 => 'domain.domain',
                  12 => 'domain.tld',
                  13 => 'finances.revenue',
                  14 => 'locations.headquarters.city.code',
                  15 => 'locations.headquarters.country.code',
                  16 => 'locations.headquarters.county.code',
                  17 => 'locations.headquarters.state.code',
                  18 => 'meta.score',
                  19 => 'meta.syncedAt',
                  20 => 'socials',
                  21 => 'technologies.active',
                  22 => 'urls',
                ),
              ),
              'missing' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => '_first',
                  1 => '_last',
                ),
              ),
              'order' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'asc',
                  1 => 'desc',
                ),
              ),
            ),
            'required' => 
            array (
              0 => 'key',
              1 => 'order',
            ),
          ),
        ),
        'required' => false,
        'name' => 'sortFields',
        'in' => 'query',
      ),
      7 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'about.businessType',
            1 => 'about.industries',
            2 => 'about.industry',
            3 => 'about.name',
            4 => 'about.totalEmployees',
            5 => 'about.yearFounded',
            6 => 'analytics.monthlyVisitors',
            7 => 'apps',
            8 => 'codes.naics',
            9 => 'codes.sic',
            10 => 'contacts',
            11 => 'domain.domain',
            12 => 'domain.tld',
            13 => 'finances.revenue',
            14 => 'locations.headquarters.city.code',
            15 => 'locations.headquarters.country.code',
            16 => 'locations.headquarters.county.code',
            17 => 'locations.headquarters.state.code',
            18 => 'meta.score',
            19 => 'meta.syncedAt',
            20 => 'socials',
            21 => 'technologies.active',
            22 => 'urls',
          ),
        ),
        'required' => false,
        'name' => 'sortKey',
        'in' => 'query',
      ),
      8 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'asc',
            1 => 'desc',
          ),
        ),
        'required' => false,
        'name' => 'sortOrder',
        'in' => 'query',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Search companies by prompt.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'companies' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    '$ref' => '#/components/schemas/CompanyV2',
                  ),
                ),
                'meta' => 
                array (
                  '$ref' => '#/components/schemas/PaginationMeta',
                ),
              ),
              'required' => 
              array (
                0 => 'companies',
                1 => 'meta',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'noCreditsRemaining',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'searchSimilarCompanies' => 
  array (
    'path' => '/v2/companies/similar',
    'method' => 'GET',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Get similar companies from one or many domains.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'array',
          'items' => 
          array (
            'type' => 'string',
          ),
          'maxItems' => 100,
        ),
        'required' => true,
        'name' => 'domains',
        'in' => 'query',
      ),
      1 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'page',
        'in' => 'query',
      ),
      2 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'proximityExact',
        'in' => 'query',
      ),
      3 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'close',
            1 => 'far',
            2 => 'near',
          ),
        ),
        'required' => false,
        'name' => 'proximityTerm',
        'in' => 'query',
      ),
      4 => 
      array (
        'schema' => 
        array (
          'type' => 'boolean',
        ),
        'required' => false,
        'name' => 'simplified',
        'in' => 'query',
      ),
      5 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
          'minimum' => 1,
          'maximum' => 100,
        ),
        'required' => false,
        'name' => 'size',
        'in' => 'query',
      ),
      6 => 
      array (
        'schema' => 
        array (
          'type' => 'array',
          'items' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'key' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'about.businessType',
                  1 => 'about.industries',
                  2 => 'about.industry',
                  3 => 'about.name',
                  4 => 'about.totalEmployees',
                  5 => 'about.yearFounded',
                  6 => 'analytics.monthlyVisitors',
                  7 => 'apps',
                  8 => 'codes.naics',
                  9 => 'codes.sic',
                  10 => 'contacts',
                  11 => 'domain.domain',
                  12 => 'domain.tld',
                  13 => 'finances.revenue',
                  14 => 'locations.headquarters.city.code',
                  15 => 'locations.headquarters.country.code',
                  16 => 'locations.headquarters.county.code',
                  17 => 'locations.headquarters.state.code',
                  18 => 'meta.score',
                  19 => 'meta.syncedAt',
                  20 => 'socials',
                  21 => 'technologies.active',
                  22 => 'urls',
                ),
              ),
              'missing' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => '_first',
                  1 => '_last',
                ),
              ),
              'order' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'asc',
                  1 => 'desc',
                ),
              ),
            ),
            'required' => 
            array (
              0 => 'key',
              1 => 'order',
            ),
          ),
        ),
        'required' => false,
        'name' => 'sortFields',
        'in' => 'query',
      ),
      7 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'about.businessType',
            1 => 'about.industries',
            2 => 'about.industry',
            3 => 'about.name',
            4 => 'about.totalEmployees',
            5 => 'about.yearFounded',
            6 => 'analytics.monthlyVisitors',
            7 => 'apps',
            8 => 'codes.naics',
            9 => 'codes.sic',
            10 => 'contacts',
            11 => 'domain.domain',
            12 => 'domain.tld',
            13 => 'finances.revenue',
            14 => 'locations.headquarters.city.code',
            15 => 'locations.headquarters.country.code',
            16 => 'locations.headquarters.county.code',
            17 => 'locations.headquarters.state.code',
            18 => 'meta.score',
            19 => 'meta.syncedAt',
            20 => 'socials',
            21 => 'technologies.active',
            22 => 'urls',
          ),
        ),
        'required' => false,
        'name' => 'sortKey',
        'in' => 'query',
      ),
      8 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'asc',
            1 => 'desc',
          ),
        ),
        'required' => false,
        'name' => 'sortOrder',
        'in' => 'query',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Get similar companies from one or many domains.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'companies' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    '$ref' => '#/components/schemas/CompanyV2',
                  ),
                ),
                'meta' => 
                array (
                  '$ref' => '#/components/schemas/PaginationMeta',
                ),
              ),
              'required' => 
              array (
                0 => 'companies',
                1 => 'meta',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'noCreditsRemaining',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'countCompanies' => 
  array (
    'path' => '/v2/companies/count',
    'method' => 'GET',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Get the count of companies using a segmentation query.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'actionId',
        'in' => 'query',
      ),
      1 => 
      array (
        'schema' => 
        array (
          'type' => 'array',
          'items' => 
          array (
            '$ref' => '#/components/schemas/SegmentationCondition',
          ),
        ),
        'required' => false,
        'name' => 'query',
        'in' => 'query',
      ),
      2 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => false,
        'name' => 'search',
        'in' => 'query',
      ),
      3 => 
      array (
        'schema' => 
        array (
          'type' => 'array',
          'items' => 
          array (
            'type' => 'string',
            'enum' => 
            array (
              0 => 'about.name',
              1 => 'domain.domain',
            ),
          ),
        ),
        'required' => false,
        'name' => 'searchFields',
        'in' => 'query',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Get the count of companies using a segmentation query.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'count' => 
                array (
                  'type' => 'number',
                ),
              ),
              'required' => 
              array (
                0 => 'count',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'noCreditsRemaining',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'countCompaniesPost' => 
  array (
    'path' => '/v2/companies/count',
    'method' => 'POST',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Get the count of companies using a segmentation body.',
    'parameters' => 
    array (
    ),
    'requestBody' => 
    array (
      'content' => 
      array (
        'application/json' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'actionId' => 
              array (
                'type' => 'number',
              ),
              'query' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  '$ref' => '#/components/schemas/SegmentationCondition',
                ),
              ),
              'search' => 
              array (
                'type' => 'string',
              ),
              'searchFields' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'about.name',
                    1 => 'domain.domain',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Get the count of companies using a segmentation body.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'count' => 
                array (
                  'type' => 'number',
                ),
              ),
              'required' => 
              array (
                0 => 'count',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'noCreditsRemaining',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'fetchCompanyByEmail' => 
  array (
    'path' => '/v2/companies/by-email',
    'method' => 'GET',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Get a company data by email.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => true,
        'name' => 'email',
        'in' => 'query',
      ),
      1 => 
      array (
        'schema' => 
        array (
          'type' => 'boolean',
        ),
        'required' => false,
        'name' => 'refresh',
        'in' => 'query',
      ),
      2 => 
      array (
        'schema' => 
        array (
          'type' => 'boolean',
        ),
        'required' => false,
        'name' => 'simplified',
        'in' => 'query',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Get a company data by email.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'company' => 
                array (
                  '$ref' => '#/components/schemas/CompanyV2',
                ),
                'email' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'address' => 
                    array (
                      'type' => 'string',
                    ),
                    'domain' => 
                    array (
                      'type' => 'string',
                    ),
                    'fullName' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'first' => 
                        array (
                          'type' => 'string',
                        ),
                        'last' => 
                        array (
                          'type' => 'string',
                        ),
                        'middle' => 
                        array (
                          'type' => 'string',
                        ),
                      ),
                    ),
                    'isDisposable' => 
                    array (
                      'type' => 'boolean',
                    ),
                    'isFree' => 
                    array (
                      'type' => 'boolean',
                    ),
                    'isSubaddress' => 
                    array (
                      'type' => 'boolean',
                    ),
                    'isValid' => 
                    array (
                      'type' => 'boolean',
                    ),
                    'isValidFormat' => 
                    array (
                      'type' => 'boolean',
                    ),
                    'name' => 
                    array (
                      'type' => 'string',
                    ),
                    'pattern' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                  'required' => 
                  array (
                    0 => 'domain',
                    1 => 'fullName',
                    2 => 'isDisposable',
                    3 => 'isFree',
                    4 => 'isSubaddress',
                    5 => 'isValid',
                    6 => 'isValidFormat',
                    7 => 'name',
                  ),
                ),
                'meta' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'freeRequest' => 
                    array (
                      'type' => 'boolean',
                    ),
                  ),
                ),
              ),
              'required' => 
              array (
                0 => 'email',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'noCreditsRemaining',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'fetchCompanyBySocial' => 
  array (
    'path' => '/v2/companies/by-social',
    'method' => 'GET',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Get a company data by social media.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'format' => 'uri',
        ),
        'required' => false,
        'name' => 'angellist',
        'in' => 'query',
      ),
      1 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'format' => 'uri',
        ),
        'required' => false,
        'name' => 'dribbble',
        'in' => 'query',
      ),
      2 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'format' => 'uri',
        ),
        'required' => false,
        'name' => 'facebook',
        'in' => 'query',
      ),
      3 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'format' => 'uri',
        ),
        'required' => false,
        'name' => 'github',
        'in' => 'query',
      ),
      4 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'format' => 'uri',
        ),
        'required' => false,
        'name' => 'instagram',
        'in' => 'query',
      ),
      5 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'format' => 'uri',
        ),
        'required' => false,
        'name' => 'linkedin',
        'in' => 'query',
      ),
      6 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'format' => 'uri',
        ),
        'required' => false,
        'name' => 'pinterest',
        'in' => 'query',
      ),
      7 => 
      array (
        'schema' => 
        array (
          'type' => 'boolean',
        ),
        'required' => false,
        'name' => 'refresh',
        'in' => 'query',
      ),
      8 => 
      array (
        'schema' => 
        array (
          'type' => 'boolean',
        ),
        'required' => false,
        'name' => 'simplified',
        'in' => 'query',
      ),
      9 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'format' => 'uri',
        ),
        'required' => false,
        'name' => 'snapchat',
        'in' => 'query',
      ),
      10 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'format' => 'uri',
        ),
        'required' => false,
        'name' => 'souncloud',
        'in' => 'query',
      ),
      11 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'format' => 'uri',
        ),
        'required' => false,
        'name' => 'tiktok',
        'in' => 'query',
      ),
      12 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'format' => 'uri',
        ),
        'required' => false,
        'name' => 'twitter',
        'in' => 'query',
      ),
      13 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'format' => 'uri',
        ),
        'required' => false,
        'name' => 'wellfound',
        'in' => 'query',
      ),
      14 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'format' => 'uri',
        ),
        'required' => false,
        'name' => 'youtube',
        'in' => 'query',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Get a company data by social media.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              '$ref' => '#/components/schemas/CompanyV2',
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'noCreditsRemaining',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'fetchCompanyEmailPatterns' => 
  array (
    'path' => '/v2/companies/{domain}/email-patterns',
    'method' => 'GET',
    'pathParams' => 
    array (
      0 => 'domain',
    ),
    'summary' => '',
    'description' => 'Get email patterns for a company by its domain.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => true,
        'name' => 'domain',
        'in' => 'path',
      ),
      1 => 
      array (
        'schema' => 
        array (
          'type' => 'boolean',
        ),
        'required' => false,
        'name' => 'emailsCount',
        'in' => 'query',
      ),
      2 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
          'minimum' => 0,
          'maximum' => 100,
        ),
        'required' => false,
        'name' => 'precision',
        'in' => 'query',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Get email patterns for a company by its domain.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'array',
              'items' => 
              array (
                '$ref' => '#/components/schemas/EmailPattern',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'noCreditsRemaining',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      404 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'companyNotFound',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'askCompany' => 
  array (
    'path' => '/v2/companies/{domain}/ask',
    'method' => 'POST',
    'pathParams' => 
    array (
      0 => 'domain',
    ),
    'summary' => '',
    'description' => 'Ask a question about a company by its domain.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => true,
        'name' => 'domain',
        'in' => 'path',
      ),
    ),
    'requestBody' => 
    array (
      'content' => 
      array (
        'application/json' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'explain' => 
              array (
                'type' => 'boolean',
              ),
              'fields' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'description' => 
                    array (
                      'type' => 'string',
                    ),
                    'key' => 
                    array (
                      'type' => 'string',
                    ),
                    'type' => 
                    array (
                      'type' => 'string',
                      'enum' => 
                      array (
                        0 => 'array|boolean',
                        1 => 'array|number',
                        2 => 'array|string',
                        3 => 'boolean',
                        4 => 'number',
                        5 => 'string',
                      ),
                    ),
                    'values' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'string',
                      ),
                    ),
                  ),
                  'required' => 
                  array (
                    0 => 'key',
                    1 => 'type',
                  ),
                ),
              ),
              'listId' => 
              array (
                'type' => 'number',
              ),
              'model' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'small',
                  1 => 'large',
                ),
              ),
              'query' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  '$ref' => '#/components/schemas/SegmentationCondition',
                ),
              ),
              'question' => 
              array (
                'type' => 'string',
              ),
            ),
            'required' => 
            array (
              0 => 'question',
            ),
          ),
        ),
      ),
    ),
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Ask a question about a company by its domain.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'meta' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'cost' => 
                    array (
                      'type' => 'number',
                    ),
                    'model' => 
                    array (
                      'type' => 'string',
                      'enum' => 
                      array (
                        0 => 'small',
                        1 => 'large',
                      ),
                    ),
                    'score' => 
                    array (
                      'type' => 'number',
                    ),
                  ),
                  'required' => 
                  array (
                    0 => 'cost',
                    1 => 'model',
                  ),
                ),
                'prompt' => 
                array (
                  'allOf' => 
                  array (
                    0 => 
                    array (
                      '$ref' => '#/components/schemas/Prompt',
                    ),
                    1 => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'response' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'all' => 
                            array (
                              'type' => 'boolean',
                            ),
                            'cost' => 
                            array (
                              'type' => 'number',
                            ),
                            'count' => 
                            array (
                              'type' => 'number',
                            ),
                            'domain' => 
                            array (
                              'type' => 'string',
                            ),
                            'error' => 
                            array (
                              'type' => 'string',
                            ),
                            'action' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'cost' => 
                                array (
                                  'type' => 'number',
                                ),
                                'data' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'answer' => 
                                    array (
                                      '$ref' => '#/components/schemas/LLMAnswer',
                                    ),
                                    'domains' => 
                                    array (
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'type' => 'string',
                                      ),
                                    ),
                                    'fields' => 
                                    array (
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'description' => 
                                          array (
                                            'type' => 'string',
                                          ),
                                          'key' => 
                                          array (
                                            'type' => 'string',
                                          ),
                                          'type' => 
                                          array (
                                            'type' => 'string',
                                            'enum' => 
                                            array (
                                              0 => 'array|boolean',
                                              1 => 'array|number',
                                              2 => 'array|string',
                                              3 => 'boolean',
                                              4 => 'number',
                                              5 => 'string',
                                            ),
                                          ),
                                          'values' => 
                                          array (
                                            'type' => 'array',
                                            'items' => 
                                            array (
                                              'type' => 'string',
                                            ),
                                          ),
                                        ),
                                        'required' => 
                                        array (
                                          0 => 'key',
                                          1 => 'type',
                                        ),
                                      ),
                                    ),
                                    'job' => 
                                    array (
                                      'type' => 'string',
                                      'enum' => 
                                      array (
                                        0 => 'ask-list',
                                      ),
                                    ),
                                    'query' => 
                                    array (
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        '$ref' => '#/components/schemas/SegmentationCondition',
                                      ),
                                    ),
                                    'question' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                  ),
                                  'required' => 
                                  array (
                                    0 => 'answer',
                                    1 => 'fields',
                                    2 => 'job',
                                    3 => 'question',
                                  ),
                                ),
                                'listId' => 
                                array (
                                  'type' => 'number',
                                ),
                                'promptId' => 
                                array (
                                  'type' => 'number',
                                ),
                                'status' => 
                                array (
                                  'type' => 'string',
                                  'enum' => 
                                  array (
                                    0 => 'pending',
                                  ),
                                ),
                                'type' => 
                                array (
                                  'type' => 'string',
                                  'enum' => 
                                  array (
                                    0 => 'jobs:request',
                                  ),
                                ),
                              ),
                              'required' => 
                              array (
                                0 => 'promptId',
                                1 => 'status',
                                2 => 'type',
                              ),
                            ),
                            'answer' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'explanation' => 
                                array (
                                  'type' => 'string',
                                ),
                                'output' => 
                                array (
                                  'type' => 'object',
                                  'additionalProperties' => 
                                  array (
                                  ),
                                ),
                                'score' => 
                                array (
                                  'type' => 'number',
                                ),
                              ),
                              'required' => 
                              array (
                                0 => 'output',
                                1 => 'score',
                              ),
                            ),
                          ),
                        ),
                      ),
                      'required' => 
                      array (
                        0 => 'response',
                      ),
                    ),
                  ),
                  'description' => 'A natural language request made to the platform resolving to a specific action or search segment.',
                ),
              ),
              'required' => 
              array (
                0 => 'meta',
                1 => 'prompt',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'noCreditsRemaining',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      404 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'companyNotFound',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'fetchCompanyContext' => 
  array (
    'path' => '/v2/companies/{domain}/context',
    'method' => 'GET',
    'pathParams' => 
    array (
      0 => 'domain',
    ),
    'summary' => '',
    'description' => 'Get the full context of a company by its domain.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => true,
        'name' => 'domain',
        'in' => 'path',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Get the full context of a company by its domain.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'context' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'company' => 
                    array (
                      '$ref' => '#/components/schemas/CompanyV2',
                    ),
                    'domain' => 
                    array (
                      'type' => 'string',
                    ),
                    'ideated' => 
                    array (
                      '$ref' => '#/components/schemas/PageContentsIdeated',
                    ),
                    'sources' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        '$ref' => '#/components/schemas/PageContentsPage',
                      ),
                    ),
                  ),
                  'required' => 
                  array (
                    0 => 'domain',
                  ),
                ),
                'meta' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'cost' => 
                    array (
                      'type' => 'number',
                    ),
                    'tokens' => 
                    array (
                      'type' => 'number',
                    ),
                  ),
                  'required' => 
                  array (
                    0 => 'cost',
                    1 => 'tokens',
                  ),
                ),
              ),
              'required' => 
              array (
                0 => 'meta',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'noCreditsRemaining',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      404 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'companyNotFound',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'fetchCompaniesAnalytics' => 
  array (
    'path' => '/v2/companies/analytics',
    'method' => 'GET',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Fetch analytics data for search segmentations and lists.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'actionId',
        'in' => 'query',
      ),
      1 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'about.businessType',
            1 => 'about.industries',
            2 => 'about.industry',
            3 => 'about.totalEmployees',
            4 => 'about.yearFounded',
            5 => 'analytics.monthlyVisitors',
            6 => 'apps',
            7 => 'codes.naics',
            8 => 'codes.sic',
            9 => 'contacts',
            10 => 'domain.tld',
            11 => 'finances.revenue',
            12 => 'finances.stockExchange',
            13 => 'locations.headquarters.city.code',
            14 => 'locations.headquarters.continent.code',
            15 => 'locations.headquarters.country.code',
            16 => 'locations.headquarters.county.code',
            17 => 'locations.headquarters.state.code',
            18 => 'meta.score',
            19 => 'meta.syncedAt',
            20 => 'socials',
            21 => 'technologies.active',
            22 => 'technologies.categories',
          ),
        ),
        'required' => true,
        'name' => 'attribute',
        'in' => 'query',
      ),
      2 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'listId',
        'in' => 'query',
      ),
      3 => 
      array (
        'schema' => 
        array (
          'type' => 'array',
          'items' => 
          array (
            '$ref' => '#/components/schemas/SegmentationCondition',
          ),
        ),
        'required' => false,
        'name' => 'query',
        'in' => 'query',
      ),
      4 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
          'minimum' => 1,
          'maximum' => 10000,
        ),
        'required' => false,
        'name' => 'size',
        'in' => 'query',
      ),
      5 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'asc',
            1 => 'desc',
          ),
        ),
        'required' => false,
        'name' => 'sort',
        'in' => 'query',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Fetch analytics data for search segmentations and lists.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'data' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'count' => 
                      array (
                        'type' => 'number',
                      ),
                      'name' => 
                      array (
                        'type' => 'string',
                      ),
                      'percentageOfAll' => 
                      array (
                        'type' => 'number',
                      ),
                      'percentageOfTotal' => 
                      array (
                        'type' => 'number',
                      ),
                    ),
                    'required' => 
                    array (
                      0 => 'count',
                      1 => 'name',
                      2 => 'percentageOfAll',
                      3 => 'percentageOfTotal',
                    ),
                  ),
                ),
                'meta' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'listId' => 
                    array (
                      'type' => 'number',
                    ),
                    'query' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        '$ref' => '#/components/schemas/SegmentationCondition',
                      ),
                    ),
                    'totalDatapoints' => 
                    array (
                      'type' => 'number',
                    ),
                    'totalDocuments' => 
                    array (
                      'type' => 'number',
                    ),
                    'totalValues' => 
                    array (
                      'type' => 'number',
                    ),
                  ),
                  'required' => 
                  array (
                    0 => 'query',
                    1 => 'totalDatapoints',
                    2 => 'totalDocuments',
                    3 => 'totalValues',
                  ),
                ),
              ),
              'required' => 
              array (
                0 => 'data',
                1 => 'meta',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'exportCompaniesAnalytics' => 
  array (
    'path' => '/v2/companies/analytics/export',
    'method' => 'POST',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Export analytics data for search segmentations and lists.',
    'parameters' => 
    array (
    ),
    'requestBody' => 
    array (
      'content' => 
      array (
        'application/json' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'actionId' => 
              array (
                'type' => 'number',
              ),
              'attributes' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'about.businessType',
                    1 => 'about.industries',
                    2 => 'about.industry',
                    3 => 'about.totalEmployees',
                    4 => 'about.yearFounded',
                    5 => 'analytics.monthlyVisitors',
                    6 => 'apps',
                    7 => 'codes.naics',
                    8 => 'codes.sic',
                    9 => 'contacts',
                    10 => 'domain.tld',
                    11 => 'finances.revenue',
                    12 => 'finances.stockExchange',
                    13 => 'locations.headquarters.city.code',
                    14 => 'locations.headquarters.continent.code',
                    15 => 'locations.headquarters.country.code',
                    16 => 'locations.headquarters.county.code',
                    17 => 'locations.headquarters.state.code',
                    18 => 'meta.score',
                    19 => 'meta.syncedAt',
                    20 => 'socials',
                    21 => 'technologies.active',
                    22 => 'technologies.categories',
                  ),
                ),
              ),
              'format' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'csv',
                  1 => 'json',
                  2 => 'txt',
                  3 => 'xls',
                  4 => 'xml',
                ),
              ),
              'full' => 
              array (
                'type' => 'boolean',
              ),
              'listId' => 
              array (
                'type' => 'number',
              ),
              'query' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  '$ref' => '#/components/schemas/SegmentationCondition',
                ),
              ),
              'size' => 
              array (
                'type' => 'number',
                'minimum' => 1,
                'maximum' => 10000,
              ),
              'sort' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'asc',
                  1 => 'desc',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Export analytics data for search segmentations and lists.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'data' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'count' => 
                      array (
                        'type' => 'number',
                      ),
                      'name' => 
                      array (
                        'type' => 'string',
                      ),
                      'percentageOfAll' => 
                      array (
                        'type' => 'number',
                      ),
                      'percentageOfTotal' => 
                      array (
                        'type' => 'number',
                      ),
                    ),
                    'required' => 
                    array (
                      0 => 'count',
                      1 => 'name',
                      2 => 'percentageOfAll',
                      3 => 'percentageOfTotal',
                    ),
                  ),
                ),
                'meta' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'listId' => 
                    array (
                      'type' => 'number',
                    ),
                    'query' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        '$ref' => '#/components/schemas/SegmentationCondition',
                      ),
                    ),
                    'totalDatapoints' => 
                    array (
                      'type' => 'number',
                    ),
                    'totalDocuments' => 
                    array (
                      'type' => 'number',
                    ),
                    'totalValues' => 
                    array (
                      'type' => 'number',
                    ),
                  ),
                  'required' => 
                  array (
                    0 => 'query',
                    1 => 'totalDatapoints',
                    2 => 'totalDocuments',
                    3 => 'totalValues',
                  ),
                ),
              ),
              'required' => 
              array (
                0 => 'data',
                1 => 'meta',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'searchIndustries' => 
  array (
    'path' => '/v2/industries',
    'method' => 'GET',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Search industries.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'page',
        'in' => 'query',
      ),
      1 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => false,
        'name' => 'search',
        'in' => 'query',
      ),
      2 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
          'minimum' => 1,
          'maximum' => 100,
        ),
        'required' => false,
        'name' => 'size',
        'in' => 'query',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Search industries.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'industries' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'companiesCount' => 
                      array (
                        'type' => 
                        array (
                          0 => 'number',
                          1 => 'null',
                        ),
                      ),
                      'name' => 
                      array (
                        'type' => 'string',
                      ),
                      'slug' => 
                      array (
                      ),
                    ),
                    'required' => 
                    array (
                      0 => 'companiesCount',
                      1 => 'name',
                    ),
                  ),
                ),
                'meta' => 
                array (
                  '$ref' => '#/components/schemas/PaginationMeta',
                ),
              ),
              'required' => 
              array (
                0 => 'industries',
                1 => 'meta',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'searchIndustriesSimilar' => 
  array (
    'path' => '/v2/industries/similar',
    'method' => 'GET',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Get similar industries from one or many industries.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'array',
          'items' => 
          array (
            'type' => 'string',
          ),
        ),
        'required' => true,
        'name' => 'industries',
        'in' => 'query',
      ),
      1 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'page',
        'in' => 'query',
      ),
      2 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
          'minimum' => 1,
          'maximum' => 100,
        ),
        'required' => false,
        'name' => 'size',
        'in' => 'query',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Get similar industries from one or many industries.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'industries' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'companiesCount' => 
                      array (
                        'type' => 
                        array (
                          0 => 'number',
                          1 => 'null',
                        ),
                      ),
                      'name' => 
                      array (
                        'type' => 'string',
                      ),
                      'slug' => 
                      array (
                      ),
                    ),
                    'required' => 
                    array (
                      0 => 'companiesCount',
                      1 => 'name',
                    ),
                  ),
                ),
                'meta' => 
                array (
                  '$ref' => '#/components/schemas/PaginationMeta',
                ),
              ),
              'required' => 
              array (
                0 => 'industries',
                1 => 'meta',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'searchTechnologies' => 
  array (
    'path' => '/v2/technologies',
    'method' => 'GET',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Search technologies.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'page',
        'in' => 'query',
      ),
      1 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => false,
        'name' => 'search',
        'in' => 'query',
      ),
      2 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
          'minimum' => 1,
          'maximum' => 100,
        ),
        'required' => false,
        'name' => 'size',
        'in' => 'query',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Search technologies.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'meta' => 
                array (
                  '$ref' => '#/components/schemas/PaginationMeta',
                ),
                'technologies' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    '$ref' => '#/components/schemas/Technology',
                  ),
                ),
              ),
              'required' => 
              array (
                0 => 'meta',
                1 => 'technologies',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'searchCities' => 
  array (
    'path' => '/v2/locations/cities',
    'method' => 'GET',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Search cities.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => false,
        'name' => 'filters',
        'in' => 'query',
      ),
      1 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'page',
        'in' => 'query',
      ),
      2 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => false,
        'name' => 'search',
        'in' => 'query',
      ),
      3 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
          'minimum' => 1,
          'maximum' => 20,
        ),
        'required' => false,
        'name' => 'size',
        'in' => 'query',
      ),
      4 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'counts.companies',
          ),
        ),
        'required' => false,
        'name' => 'sortKey',
        'in' => 'query',
      ),
      5 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'asc',
            1 => 'desc',
          ),
        ),
        'required' => false,
        'name' => 'sortOrder',
        'in' => 'query',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Search cities.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'cities' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    '$ref' => '#/components/schemas/NominatimCity',
                  ),
                ),
                'meta' => 
                array (
                  '$ref' => '#/components/schemas/PaginationMeta',
                ),
              ),
              'required' => 
              array (
                0 => 'cities',
                1 => 'meta',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'searchCounties' => 
  array (
    'path' => '/v2/locations/counties',
    'method' => 'GET',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Search counties.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'page',
        'in' => 'query',
      ),
      1 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => false,
        'name' => 'search',
        'in' => 'query',
      ),
      2 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
          'minimum' => 1,
          'maximum' => 20,
        ),
        'required' => false,
        'name' => 'size',
        'in' => 'query',
      ),
      3 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'counts.companies',
          ),
        ),
        'required' => false,
        'name' => 'sortKey',
        'in' => 'query',
      ),
      4 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'asc',
            1 => 'desc',
          ),
        ),
        'required' => false,
        'name' => 'sortOrder',
        'in' => 'query',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Search counties.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'counties' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    '$ref' => '#/components/schemas/NominatimCounty',
                  ),
                ),
                'meta' => 
                array (
                  '$ref' => '#/components/schemas/PaginationMeta',
                ),
              ),
              'required' => 
              array (
                0 => 'counties',
                1 => 'meta',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'searchCountries' => 
  array (
    'path' => '/v2/locations/countries',
    'method' => 'GET',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Search countries.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => false,
        'name' => 'filters',
        'in' => 'query',
      ),
      1 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'page',
        'in' => 'query',
      ),
      2 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => false,
        'name' => 'search',
        'in' => 'query',
      ),
      3 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
          'minimum' => 1,
          'maximum' => 20,
        ),
        'required' => false,
        'name' => 'size',
        'in' => 'query',
      ),
      4 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'counts.companies',
          ),
        ),
        'required' => false,
        'name' => 'sortKey',
        'in' => 'query',
      ),
      5 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'asc',
            1 => 'desc',
          ),
        ),
        'required' => false,
        'name' => 'sortOrder',
        'in' => 'query',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Search countries.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'countries' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    '$ref' => '#/components/schemas/NominatimCountry',
                  ),
                ),
                'meta' => 
                array (
                  '$ref' => '#/components/schemas/PaginationMeta',
                ),
              ),
              'required' => 
              array (
                0 => 'countries',
                1 => 'meta',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'searchStates' => 
  array (
    'path' => '/v2/locations/states',
    'method' => 'GET',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Search states.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'page',
        'in' => 'query',
      ),
      1 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => false,
        'name' => 'search',
        'in' => 'query',
      ),
      2 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
          'minimum' => 1,
          'maximum' => 20,
        ),
        'required' => false,
        'name' => 'size',
        'in' => 'query',
      ),
      3 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'counts.companies',
          ),
        ),
        'required' => false,
        'name' => 'sortKey',
        'in' => 'query',
      ),
      4 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'asc',
            1 => 'desc',
          ),
        ),
        'required' => false,
        'name' => 'sortOrder',
        'in' => 'query',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Search states.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'meta' => 
                array (
                  '$ref' => '#/components/schemas/PaginationMeta',
                ),
                'states' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    '$ref' => '#/components/schemas/NominatimState',
                  ),
                ),
              ),
              'required' => 
              array (
                0 => 'meta',
                1 => 'states',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'searchContinents' => 
  array (
    'path' => '/v2/locations/continents',
    'method' => 'GET',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Search continents.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'page',
        'in' => 'query',
      ),
      1 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => false,
        'name' => 'search',
        'in' => 'query',
      ),
      2 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
          'minimum' => 1,
          'maximum' => 20,
        ),
        'required' => false,
        'name' => 'size',
        'in' => 'query',
      ),
      3 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'counts.companies',
          ),
        ),
        'required' => false,
        'name' => 'sortKey',
        'in' => 'query',
      ),
      4 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'asc',
            1 => 'desc',
          ),
        ),
        'required' => false,
        'name' => 'sortOrder',
        'in' => 'query',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Search continents.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'continents' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    '$ref' => '#/components/schemas/NominatimContinent',
                  ),
                ),
                'meta' => 
                array (
                  '$ref' => '#/components/schemas/PaginationMeta',
                ),
              ),
              'required' => 
              array (
                0 => 'continents',
                1 => 'meta',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'enrichJobTitles' => 
  array (
    'path' => '/v2/job-titles/enrich',
    'method' => 'GET',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Enrich job titles.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => false,
        'name' => 'name',
        'in' => 'query',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Enrich job titles.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'anyOf' => 
              array (
                0 => 
                array (
                  '$ref' => '#/components/schemas/JobTitle',
                ),
                1 => 
                array (
                  'type' => 'object',
                  'additionalProperties' => 
                  array (
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'fetchLists' => 
  array (
    'path' => '/v2/lists',
    'method' => 'GET',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Get and filter your lists.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'page',
        'in' => 'query',
      ),
      1 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
          'minimum' => 1,
          'maximum' => 500,
        ),
        'required' => false,
        'name' => 'size',
        'in' => 'query',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Get and filter your lists.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'lists' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    '$ref' => '#/components/schemas/List',
                  ),
                ),
                'meta' => 
                array (
                  '$ref' => '#/components/schemas/PaginationMeta',
                ),
              ),
              'required' => 
              array (
                0 => 'lists',
                1 => 'meta',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'createList' => 
  array (
    'path' => '/v2/lists',
    'method' => 'POST',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Create a new list.',
    'parameters' => 
    array (
    ),
    'requestBody' => 
    array (
      'content' => 
      array (
        'application/json' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'dynamic' => 
              array (
                'type' => 'boolean',
              ),
              'imported' => 
              array (
                'type' => 'boolean',
              ),
              'mailFrequency' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'disabled',
                  1 => 'daily',
                  2 => 'weekly',
                  3 => 'monthly',
                ),
              ),
              'maxCompanies' => 
              array (
                'type' => 'number',
              ),
              'name' => 
              array (
                'type' => 'string',
                'maxLength' => 255,
              ),
              'processInitialized' => 
              array (
                'type' => 'boolean',
              ),
              'query' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  '$ref' => '#/components/schemas/SegmentationCondition',
                ),
              ),
              'similarDomains' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                ),
              ),
            ),
            'required' => 
            array (
              0 => 'name',
            ),
          ),
        ),
      ),
    ),
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Create a new list.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              '$ref' => '#/components/schemas/List',
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'updateList' => 
  array (
    'path' => '/v2/lists/{listId}',
    'method' => 'PATCH',
    'pathParams' => 
    array (
      0 => 'listId',
    ),
    'summary' => '',
    'description' => 'Update a list.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => true,
        'name' => 'listId',
        'in' => 'path',
      ),
    ),
    'requestBody' => 
    array (
      'content' => 
      array (
        'application/json' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'dynamic' => 
              array (
                'type' => 'boolean',
              ),
              'lastSeen' => 
              array (
                'type' => 'boolean',
              ),
              'mailFrequency' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'disabled',
                  1 => 'daily',
                  2 => 'weekly',
                  3 => 'monthly',
                ),
              ),
              'maxCompanies' => 
              array (
                'type' => 
                array (
                  0 => 'number',
                  1 => 'null',
                ),
                'minimum' => 0,
                'maximum' => 1000000,
              ),
              'name' => 
              array (
                'type' => 'string',
                'maxLength' => 255,
              ),
              'query' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  '$ref' => '#/components/schemas/SegmentationCondition',
                ),
              ),
              'resync' => 
              array (
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
    ),
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Update a list.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              '$ref' => '#/components/schemas/List',
            ),
          ),
        ),
      ),
      400 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'listNotFound',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'userCurrentTeamIsNotInstanceOwner',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'deleteList' => 
  array (
    'path' => '/v2/lists/{listId}',
    'method' => 'DELETE',
    'pathParams' => 
    array (
      0 => 'listId',
    ),
    'summary' => '',
    'description' => 'Delete a list.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => true,
        'name' => 'listId',
        'in' => 'path',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Delete a list.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              '$ref' => '#/components/schemas/List',
            ),
          ),
        ),
      ),
      400 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'listNotFound',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'userCurrentTeamIsNotInstanceOwner',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'fetchCompaniesInList' => 
  array (
    'path' => '/v2/lists/{listId}/companies',
    'method' => 'GET',
    'pathParams' => 
    array (
      0 => 'listId',
    ),
    'summary' => '',
    'description' => 'Get companies in a list with a segmentation query.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => true,
        'name' => 'listId',
        'in' => 'path',
      ),
      1 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'actionId',
        'in' => 'query',
      ),
      2 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'page',
        'in' => 'query',
      ),
      3 => 
      array (
        'schema' => 
        array (
          'type' => 'array',
          'items' => 
          array (
            '$ref' => '#/components/schemas/SegmentationCondition',
          ),
        ),
        'required' => false,
        'name' => 'query',
        'in' => 'query',
      ),
      4 => 
      array (
        'schema' => 
        array (
          'type' => 'boolean',
        ),
        'required' => false,
        'name' => 'simplified',
        'in' => 'query',
      ),
      5 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
          'minimum' => 1,
          'maximum' => 100,
        ),
        'required' => false,
        'name' => 'size',
        'in' => 'query',
      ),
      6 => 
      array (
        'schema' => 
        array (
          'type' => 'array',
          'items' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'key' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'about.businessType',
                  1 => 'about.industries',
                  2 => 'about.industry',
                  3 => 'about.name',
                  4 => 'about.totalEmployees',
                  5 => 'about.yearFounded',
                  6 => 'analytics.monthlyVisitors',
                  7 => 'apps',
                  8 => 'codes.naics',
                  9 => 'codes.sic',
                  10 => 'contacts',
                  11 => 'domain.domain',
                  12 => 'domain.tld',
                  13 => 'finances.revenue',
                  14 => 'locations.headquarters.city.code',
                  15 => 'locations.headquarters.country.code',
                  16 => 'locations.headquarters.county.code',
                  17 => 'locations.headquarters.state.code',
                  18 => 'meta.score',
                  19 => 'meta.syncedAt',
                  20 => 'socials',
                  21 => 'technologies.active',
                  22 => 'urls',
                ),
              ),
              'missing' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => '_first',
                  1 => '_last',
                ),
              ),
              'order' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'asc',
                  1 => 'desc',
                ),
              ),
            ),
            'required' => 
            array (
              0 => 'key',
              1 => 'order',
            ),
          ),
        ),
        'required' => false,
        'name' => 'sortFields',
        'in' => 'query',
      ),
      7 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'about.businessType',
            1 => 'about.industries',
            2 => 'about.industry',
            3 => 'about.name',
            4 => 'about.totalEmployees',
            5 => 'about.yearFounded',
            6 => 'analytics.monthlyVisitors',
            7 => 'apps',
            8 => 'codes.naics',
            9 => 'codes.sic',
            10 => 'contacts',
            11 => 'domain.domain',
            12 => 'domain.tld',
            13 => 'finances.revenue',
            14 => 'locations.headquarters.city.code',
            15 => 'locations.headquarters.country.code',
            16 => 'locations.headquarters.county.code',
            17 => 'locations.headquarters.state.code',
            18 => 'meta.score',
            19 => 'meta.syncedAt',
            20 => 'socials',
            21 => 'technologies.active',
            22 => 'urls',
          ),
        ),
        'required' => false,
        'name' => 'sortKey',
        'in' => 'query',
      ),
      8 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'asc',
            1 => 'desc',
          ),
        ),
        'required' => false,
        'name' => 'sortOrder',
        'in' => 'query',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Get companies in a list with a segmentation query.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'companies' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    '$ref' => '#/components/schemas/CompanyV2',
                  ),
                ),
                'meta' => 
                array (
                  '$ref' => '#/components/schemas/PaginationMeta',
                ),
                'query' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    '$ref' => '#/components/schemas/SegmentationCondition',
                  ),
                ),
              ),
              'required' => 
              array (
                0 => 'companies',
                1 => 'meta',
              ),
            ),
          ),
        ),
      ),
      400 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'listNotFound',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'userCurrentTeamIsNotInstanceOwner',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'fetchCompaniesInListPost' => 
  array (
    'path' => '/v2/lists/{listId}/companies',
    'method' => 'POST',
    'pathParams' => 
    array (
      0 => 'listId',
    ),
    'summary' => '',
    'description' => 'Get companies in a list with a segmentation body.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => true,
        'name' => 'listId',
        'in' => 'path',
      ),
    ),
    'requestBody' => 
    array (
      'content' => 
      array (
        'application/json' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'actionId' => 
              array (
                'type' => 'number',
              ),
              'page' => 
              array (
                'type' => 'number',
              ),
              'query' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  '$ref' => '#/components/schemas/SegmentationCondition',
                ),
              ),
              'simplified' => 
              array (
                'type' => 'boolean',
              ),
              'size' => 
              array (
                'type' => 'number',
                'minimum' => 1,
                'maximum' => 100,
              ),
              'sortFields' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'key' => 
                    array (
                      'type' => 'string',
                      'enum' => 
                      array (
                        0 => 'about.businessType',
                        1 => 'about.industries',
                        2 => 'about.industry',
                        3 => 'about.name',
                        4 => 'about.totalEmployees',
                        5 => 'about.yearFounded',
                        6 => 'analytics.monthlyVisitors',
                        7 => 'apps',
                        8 => 'codes.naics',
                        9 => 'codes.sic',
                        10 => 'contacts',
                        11 => 'domain.domain',
                        12 => 'domain.tld',
                        13 => 'finances.revenue',
                        14 => 'locations.headquarters.city.code',
                        15 => 'locations.headquarters.country.code',
                        16 => 'locations.headquarters.county.code',
                        17 => 'locations.headquarters.state.code',
                        18 => 'meta.score',
                        19 => 'meta.syncedAt',
                        20 => 'socials',
                        21 => 'technologies.active',
                        22 => 'urls',
                      ),
                    ),
                    'missing' => 
                    array (
                      'type' => 'string',
                      'enum' => 
                      array (
                        0 => '_first',
                        1 => '_last',
                      ),
                    ),
                    'order' => 
                    array (
                      'type' => 'string',
                      'enum' => 
                      array (
                        0 => 'asc',
                        1 => 'desc',
                      ),
                    ),
                  ),
                  'required' => 
                  array (
                    0 => 'key',
                    1 => 'order',
                  ),
                ),
              ),
              'sortKey' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'about.businessType',
                  1 => 'about.industries',
                  2 => 'about.industry',
                  3 => 'about.name',
                  4 => 'about.totalEmployees',
                  5 => 'about.yearFounded',
                  6 => 'analytics.monthlyVisitors',
                  7 => 'apps',
                  8 => 'codes.naics',
                  9 => 'codes.sic',
                  10 => 'contacts',
                  11 => 'domain.domain',
                  12 => 'domain.tld',
                  13 => 'finances.revenue',
                  14 => 'locations.headquarters.city.code',
                  15 => 'locations.headquarters.country.code',
                  16 => 'locations.headquarters.county.code',
                  17 => 'locations.headquarters.state.code',
                  18 => 'meta.score',
                  19 => 'meta.syncedAt',
                  20 => 'socials',
                  21 => 'technologies.active',
                  22 => 'urls',
                ),
              ),
              'sortOrder' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'asc',
                  1 => 'desc',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Get companies in a list with a segmentation body.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'companies' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    '$ref' => '#/components/schemas/CompanyV2',
                  ),
                ),
                'meta' => 
                array (
                  '$ref' => '#/components/schemas/PaginationMeta',
                ),
                'query' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    '$ref' => '#/components/schemas/SegmentationCondition',
                  ),
                ),
              ),
              'required' => 
              array (
                0 => 'companies',
                1 => 'meta',
              ),
            ),
          ),
        ),
      ),
      400 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'listNotFound',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'userCurrentTeamIsNotInstanceOwner',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'fetchCompanyInList' => 
  array (
    'path' => '/v2/lists/{listId}/companies/{domain}',
    'method' => 'GET',
    'pathParams' => 
    array (
      0 => 'listId',
      1 => 'domain',
    ),
    'summary' => '',
    'description' => 'Get a company in a list.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => true,
        'name' => 'listId',
        'in' => 'path',
      ),
      1 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => true,
        'name' => 'domain',
        'in' => 'path',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Get a company in a list.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              '$ref' => '#/components/schemas/CompanyV2',
            ),
          ),
        ),
      ),
      400 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'listNotFound',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'userCurrentTeamIsNotInstanceOwner',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      404 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'companyNotFound',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'toggleCompaniesInList' => 
  array (
    'path' => '/v2/lists/{listId}/companies/toggle',
    'method' => 'PATCH',
    'pathParams' => 
    array (
      0 => 'listId',
    ),
    'summary' => '',
    'description' => 'Toggle one or more companies in a list.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => true,
        'name' => 'listId',
        'in' => 'path',
      ),
    ),
    'requestBody' => 
    array (
      'content' => 
      array (
        'application/json' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'action' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'attach',
                  1 => 'detach',
                ),
              ),
              'companyIds' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'number',
                ),
              ),
              'domains' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                ),
              ),
              'refresh' => 
              array (
                'type' => 'boolean',
              ),
            ),
            'required' => 
            array (
              0 => 'action',
            ),
          ),
        ),
      ),
    ),
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Toggle one or more companies in a list.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              '$ref' => '#/components/schemas/List',
            ),
          ),
        ),
      ),
      400 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'listNotFound',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'userCurrentTeamIsNotInstanceOwner',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      404 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'companyNotFound',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'fetchTeam' => 
  array (
    'path' => '/v2/teams/{teamId}',
    'method' => 'GET',
    'pathParams' => 
    array (
      0 => 'teamId',
    ),
    'summary' => '',
    'description' => 'Get team information.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => true,
        'name' => 'teamId',
        'in' => 'path',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Get team information.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              '$ref' => '#/components/schemas/Team',
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'userNotInTeam',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      404 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'teamNotFound',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'updateTeam' => 
  array (
    'path' => '/v2/teams/{teamId}',
    'method' => 'PATCH',
    'pathParams' => 
    array (
      0 => 'teamId',
    ),
    'summary' => '',
    'description' => 'Update a team.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => true,
        'name' => 'teamId',
        'in' => 'path',
      ),
    ),
    'requestBody' => 
    array (
      'content' => 
      array (
        'application/json' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'country' => 
              array (
                'type' => 'string',
                'maxLength' => 255,
              ),
              'name' => 
              array (
                'type' => 'string',
                'maxLength' => 255,
              ),
              'websiteUrl' => 
              array (
                'type' => 'string',
                'maxLength' => 255,
              ),
            ),
          ),
        ),
      ),
    ),
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Update a team.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              '$ref' => '#/components/schemas/Team',
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'userNotInTeam',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      404 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'teamNotFound',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'fetchUser' => 
  array (
    'path' => '/v2/user',
    'method' => 'GET',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Get current user information.',
    'parameters' => 
    array (
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Get current user information.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              '$ref' => '#/components/schemas/User',
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'fetchPrompts' => 
  array (
    'path' => '/v2/prompts',
    'method' => 'GET',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Fetch prompts history.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'companyId',
        'in' => 'query',
      ),
      1 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'analytics',
            1 => 'api',
            2 => 'companies',
            3 => 'company',
            4 => 'documentation',
            5 => 'enrichment',
            6 => 'landing',
            7 => 'list',
            8 => 'similarity',
          ),
        ),
        'required' => false,
        'name' => 'context',
        'in' => 'query',
      ),
      2 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'ask',
            1 => 'cleanup',
            2 => 'enrich',
            3 => 'product',
            4 => 'search',
            5 => 'similar',
          ),
        ),
        'required' => false,
        'name' => 'feature',
        'in' => 'query',
      ),
      3 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'limit',
        'in' => 'query',
      ),
      4 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'listId',
        'in' => 'query',
      ),
      5 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
          'enum' => 
          array (
            0 => 'small',
            1 => 'large',
          ),
        ),
        'required' => false,
        'name' => 'model',
        'in' => 'query',
      ),
      6 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'page',
        'in' => 'query',
      ),
      7 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => false,
        'name' => 'prompt',
        'in' => 'query',
      ),
      8 => 
      array (
        'schema' => 
        array (
          'type' => 'string',
        ),
        'required' => false,
        'name' => 'search',
        'in' => 'query',
      ),
      9 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => false,
        'name' => 'size',
        'in' => 'query',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Fetch prompts history.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'meta' => 
                array (
                  '$ref' => '#/components/schemas/PaginationMeta',
                ),
                'prompts' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    '$ref' => '#/components/schemas/Prompt',
                  ),
                ),
              ),
              'required' => 
              array (
                0 => 'meta',
                1 => 'prompts',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'deletePrompt' => 
  array (
    'path' => '/v2/prompts/{promptId}',
    'method' => 'DELETE',
    'pathParams' => 
    array (
      0 => 'promptId',
    ),
    'summary' => '',
    'description' => 'Delete a prompt.',
    'parameters' => 
    array (
      0 => 
      array (
        'schema' => 
        array (
          'type' => 'number',
        ),
        'required' => true,
        'name' => 'promptId',
        'in' => 'path',
      ),
    ),
    'requestBody' => NULL,
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Delete a prompt.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              '$ref' => '#/components/schemas/Prompt',
            ),
          ),
        ),
      ),
      400 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'promptNotFound',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'userCurrentTeamIsNotInstanceOwner',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'productPrompt' => 
  array (
    'path' => '/v2/prompts/product',
    'method' => 'POST',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Query the product prompt.',
    'parameters' => 
    array (
    ),
    'requestBody' => 
    array (
      'content' => 
      array (
        'application/json' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'companyId' => 
              array (
                'type' => 'number',
              ),
              'context' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'analytics',
                  1 => 'api',
                  2 => 'companies',
                  3 => 'company',
                  4 => 'documentation',
                  5 => 'enrichment',
                  6 => 'landing',
                  7 => 'list',
                  8 => 'similarity',
                ),
              ),
              'feature' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'ask',
                  1 => 'cleanup',
                  2 => 'enrich',
                  3 => 'product',
                  4 => 'search',
                  5 => 'similar',
                ),
              ),
              'force' => 
              array (
                'type' => 'boolean',
              ),
              'listId' => 
              array (
                'type' => 'number',
              ),
              'model' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'small',
                  1 => 'large',
                ),
              ),
              'prompt' => 
              array (
                'type' => 'string',
              ),
            ),
            'required' => 
            array (
              0 => 'prompt',
            ),
          ),
        ),
      ),
    ),
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Query the product prompt.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'meta' => 
                array (
                  '$ref' => '#/components/schemas/PaginationMeta',
                ),
                'prompt' => 
                array (
                  '$ref' => '#/components/schemas/Prompt',
                ),
                'response' => 
                array (
                  'anyOf' => 
                  array (
                    0 => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'all' => 
                        array (
                          'type' => 'boolean',
                        ),
                        'cost' => 
                        array (
                          'type' => 'number',
                        ),
                        'count' => 
                        array (
                          'type' => 'number',
                        ),
                        'domain' => 
                        array (
                          'type' => 'string',
                        ),
                        'error' => 
                        array (
                          'type' => 'string',
                        ),
                        'action' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'cost' => 
                            array (
                              'type' => 'number',
                            ),
                            'data' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'answer' => 
                                array (
                                  '$ref' => '#/components/schemas/LLMAnswer',
                                ),
                                'domains' => 
                                array (
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'type' => 'string',
                                  ),
                                ),
                                'fields' => 
                                array (
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'description' => 
                                      array (
                                        'type' => 'string',
                                      ),
                                      'key' => 
                                      array (
                                        'type' => 'string',
                                      ),
                                      'type' => 
                                      array (
                                        'type' => 'string',
                                        'enum' => 
                                        array (
                                          0 => 'array|boolean',
                                          1 => 'array|number',
                                          2 => 'array|string',
                                          3 => 'boolean',
                                          4 => 'number',
                                          5 => 'string',
                                        ),
                                      ),
                                      'values' => 
                                      array (
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'type' => 'string',
                                        ),
                                      ),
                                    ),
                                    'required' => 
                                    array (
                                      0 => 'key',
                                      1 => 'type',
                                    ),
                                  ),
                                ),
                                'job' => 
                                array (
                                  'type' => 'string',
                                  'enum' => 
                                  array (
                                    0 => 'ask-list',
                                  ),
                                ),
                                'query' => 
                                array (
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    '$ref' => '#/components/schemas/SegmentationCondition',
                                  ),
                                ),
                                'question' => 
                                array (
                                  'type' => 'string',
                                ),
                              ),
                              'required' => 
                              array (
                                0 => 'answer',
                                1 => 'fields',
                                2 => 'job',
                                3 => 'question',
                              ),
                            ),
                            'listId' => 
                            array (
                              'type' => 'number',
                            ),
                            'promptId' => 
                            array (
                              'type' => 'number',
                            ),
                            'status' => 
                            array (
                              'type' => 'string',
                              'enum' => 
                              array (
                                0 => 'pending',
                              ),
                            ),
                            'type' => 
                            array (
                              'type' => 'string',
                              'enum' => 
                              array (
                                0 => 'jobs:request',
                              ),
                            ),
                          ),
                          'required' => 
                          array (
                            0 => 'promptId',
                            1 => 'status',
                            2 => 'type',
                          ),
                        ),
                        'answer' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'explanation' => 
                            array (
                              'type' => 'string',
                            ),
                            'output' => 
                            array (
                              'type' => 'object',
                              'additionalProperties' => 
                              array (
                              ),
                            ),
                            'score' => 
                            array (
                              'type' => 'number',
                            ),
                          ),
                          'required' => 
                          array (
                            0 => 'output',
                            1 => 'score',
                          ),
                        ),
                      ),
                    ),
                    1 => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'all' => 
                        array (
                          'type' => 'boolean',
                        ),
                        'cost' => 
                        array (
                          'type' => 'number',
                        ),
                        'count' => 
                        array (
                          'type' => 'number',
                        ),
                        'domain' => 
                        array (
                          'type' => 'string',
                        ),
                        'error' => 
                        array (
                          'type' => 'string',
                        ),
                        'action' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'cost' => 
                            array (
                              'type' => 'number',
                              'enum' => 
                              array (
                                0 => 0,
                              ),
                            ),
                            'data' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'domains' => 
                                array (
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'type' => 'string',
                                  ),
                                ),
                                'job' => 
                                array (
                                  'type' => 'string',
                                  'enum' => 
                                  array (
                                    0 => 'cleanup-list',
                                  ),
                                ),
                                'query' => 
                                array (
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    '$ref' => '#/components/schemas/SegmentationCondition',
                                  ),
                                ),
                              ),
                              'required' => 
                              array (
                                0 => 'job',
                              ),
                            ),
                            'listId' => 
                            array (
                              'type' => 'number',
                            ),
                            'promptId' => 
                            array (
                              'type' => 'number',
                            ),
                            'status' => 
                            array (
                              'type' => 'string',
                              'enum' => 
                              array (
                                0 => 'pending',
                              ),
                            ),
                            'type' => 
                            array (
                              'type' => 'string',
                              'enum' => 
                              array (
                                0 => 'jobs:request',
                              ),
                            ),
                          ),
                          'required' => 
                          array (
                            0 => 'promptId',
                            1 => 'status',
                            2 => 'type',
                          ),
                        ),
                      ),
                    ),
                    2 => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'all' => 
                        array (
                          'type' => 'boolean',
                        ),
                        'cost' => 
                        array (
                          'type' => 'number',
                        ),
                        'count' => 
                        array (
                          'type' => 'number',
                        ),
                        'domain' => 
                        array (
                          'type' => 'string',
                        ),
                        'error' => 
                        array (
                          'type' => 'string',
                        ),
                        'action' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'cost' => 
                            array (
                              'type' => 'number',
                            ),
                            'data' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'domains' => 
                                array (
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'type' => 'string',
                                  ),
                                ),
                                'job' => 
                                array (
                                  'type' => 'string',
                                  'enum' => 
                                  array (
                                    0 => 'enrich-companies',
                                    1 => 'enrich-list',
                                  ),
                                ),
                                'query' => 
                                array (
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    '$ref' => '#/components/schemas/SegmentationCondition',
                                  ),
                                ),
                              ),
                              'required' => 
                              array (
                                0 => 'job',
                              ),
                            ),
                            'listId' => 
                            array (
                              'type' => 'number',
                            ),
                            'promptId' => 
                            array (
                              'type' => 'number',
                            ),
                            'status' => 
                            array (
                              'type' => 'string',
                              'enum' => 
                              array (
                                0 => 'pending',
                              ),
                            ),
                            'type' => 
                            array (
                              'type' => 'string',
                              'enum' => 
                              array (
                                0 => 'jobs:request',
                              ),
                            ),
                          ),
                          'required' => 
                          array (
                            0 => 'data',
                            1 => 'promptId',
                            2 => 'status',
                            3 => 'type',
                          ),
                        ),
                      ),
                    ),
                    3 => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'all' => 
                        array (
                          'type' => 'boolean',
                        ),
                        'cost' => 
                        array (
                          'type' => 'number',
                        ),
                        'count' => 
                        array (
                          'type' => 'number',
                        ),
                        'domain' => 
                        array (
                          'type' => 'string',
                        ),
                        'error' => 
                        array (
                          'type' => 'string',
                        ),
                        'domains' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'string',
                          ),
                        ),
                        'listId' => 
                        array (
                          'type' => 'number',
                        ),
                        'query' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            '$ref' => '#/components/schemas/SegmentationCondition',
                          ),
                        ),
                      ),
                    ),
                    4 => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'all' => 
                        array (
                          'type' => 'boolean',
                        ),
                        'cost' => 
                        array (
                          'type' => 'number',
                        ),
                        'count' => 
                        array (
                          'type' => 'number',
                        ),
                        'domain' => 
                        array (
                          'type' => 'string',
                        ),
                        'error' => 
                        array (
                          'type' => 'string',
                        ),
                        'domains' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'string',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'required' => 
              array (
                0 => 'meta',
                1 => 'prompt',
                2 => 'response',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
      403 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'noCreditsRemaining',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'promptToSegmentation' => 
  array (
    'path' => '/v2/prompts/segmentation',
    'method' => 'POST',
    'pathParams' => 
    array (
    ),
    'summary' => '',
    'description' => 'Convert a query to a segmentation.',
    'parameters' => 
    array (
    ),
    'requestBody' => 
    array (
      'content' => 
      array (
        'application/json' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'context' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'analytics',
                  1 => 'api',
                  2 => 'companies',
                  3 => 'company',
                  4 => 'documentation',
                  5 => 'enrichment',
                  6 => 'landing',
                  7 => 'list',
                  8 => 'similarity',
                ),
              ),
              'force' => 
              array (
                'type' => 'boolean',
              ),
              'listId' => 
              array (
                'type' => 'number',
              ),
              'model' => 
              array (
                'type' => 'string',
                'enum' => 
                array (
                  0 => 'small',
                  1 => 'large',
                ),
              ),
              'prompt' => 
              array (
                'type' => 'string',
              ),
            ),
            'required' => 
            array (
              0 => 'prompt',
            ),
          ),
        ),
      ),
    ),
    'responses' => 
    array (
      200 => 
      array (
        'description' => 'Convert a query to a segmentation.',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'meta' => 
                array (
                  '$ref' => '#/components/schemas/PaginationMeta',
                ),
                'prompt' => 
                array (
                  '$ref' => '#/components/schemas/Prompt',
                ),
                'response' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'all' => 
                    array (
                      'type' => 'boolean',
                    ),
                    'cost' => 
                    array (
                      'type' => 'number',
                    ),
                    'count' => 
                    array (
                      'type' => 'number',
                    ),
                    'domain' => 
                    array (
                      'type' => 'string',
                    ),
                    'error' => 
                    array (
                      'type' => 'string',
                    ),
                    'domains' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'string',
                      ),
                    ),
                    'listId' => 
                    array (
                      'type' => 'number',
                    ),
                    'query' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        '$ref' => '#/components/schemas/SegmentationCondition',
                      ),
                    ),
                  ),
                ),
              ),
              'required' => 
              array (
                0 => 'meta',
                1 => 'prompt',
                2 => 'response',
              ),
            ),
          ),
        ),
      ),
      401 => 
      array (
        'description' => 'The error message',
        'content' => 
        array (
          'application/json' => 
          array (
            'schema' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'details' => 
                array (
                ),
                'messages' => 
                array (
                  'type' => 'string',
                  'enum' => 
                  array (
                    0 => 'tokenNotFound',
                    1 => 'invalidApiSecret',
                    2 => 'missingApiSecret',
                    3 => 'userNotAuthenticated',
                  ),
                ),
                'status' => 
                array (
                  'type' => 'number',
                  'minimum' => 400,
                  'maximum' => 511,
                ),
              ),
              'required' => 
              array (
                0 => 'messages',
                1 => 'status',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
}
