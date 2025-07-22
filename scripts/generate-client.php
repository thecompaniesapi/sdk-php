<?php

/**
 * OpenAPI Client Generator for The Companies API PHP SDK
 * 
 * This script fetches the OpenAPI schema and generates operation methods
 * that integrate with the existing Client class architecture.
 */

require_once __DIR__ . '/../vendor/autoload.php';

class OpenApiClientGenerator
{
    private string $openApiUrl;
    private string $outputPath;
    private array $schema;

    public function __construct(string $openApiUrl, string $outputPath)
    {
        $this->openApiUrl = $openApiUrl;
        $this->outputPath = $outputPath;
    }

    public function generate(): void
    {
        echo "🚀 Generating PHP SDK from OpenAPI schema...\n\n";
        
        // Step 1: Fetch OpenAPI schema
        $this->fetchSchema();
        
        // Step 2: Generate operations map
        $operations = $this->generateOperationsMap();
        
        // Step 3: Generate client methods
        $clientMethods = $this->generateClientMethods($operations);
        
        // Step 4: Generate model classes
        $this->generateModels();
        
        // Step 5: Generate API request classes
        $this->generateApiRequests($operations);
        
        // Step 6: Generate API response classes
        $this->generateApiResponses($operations);
        
        // Step 7: Create the generated client class
        $this->createGeneratedClient($clientMethods, $operations);
        
        echo "✅ Generation complete!\n";
        echo "📁 Generated files in: {$this->outputPath}\n";
    }

    private function fetchSchema(): void
    {
        echo "📥 Fetching OpenAPI schema from {$this->openApiUrl}...\n";
        
        $context = stream_context_create([
            'http' => [
                'timeout' => 30,
                'user_agent' => 'TheCompaniesApi-PHP-SDK-Generator/1.0'
            ]
        ]);
        
        $schemaJson = file_get_contents($this->openApiUrl, false, $context);
        
        if ($schemaJson === false) {
            throw new RuntimeException("Failed to fetch OpenAPI schema from {$this->openApiUrl}");
        }
        
        $this->schema = json_decode($schemaJson, true);
        
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new RuntimeException("Invalid JSON in OpenAPI schema: " . json_last_error_msg());
        }
        
        echo "✅ Schema fetched successfully\n";
    }

    private function generateOperationsMap(): array
    {
        echo "🔧 Generating operations map...\n";
        
        $operations = [];
        $paths = $this->schema['paths'] ?? [];
        
        foreach ($paths as $path => $pathData) {
            foreach (['get', 'post', 'put', 'patch', 'delete'] as $method) {
                if (!isset($pathData[$method])) {
                    continue;
                }
                
                $operation = $pathData[$method];
                $operationId = $operation['operationId'] ?? null;
                
                if (!$operationId) {
                    continue;
                }
                
                // Extract path parameters
                $pathParams = [];
                if (preg_match_all('/\{([^}]+)\}/', $path, $matches)) {
                    $pathParams = $matches[1];
                }
                
                $operations[$operationId] = [
                    'path' => $path,
                    'method' => strtoupper($method),
                    'pathParams' => $pathParams,
                    'summary' => $operation['summary'] ?? '',
                    'description' => $operation['description'] ?? '',
                    'parameters' => $operation['parameters'] ?? [],
                    'requestBody' => $operation['requestBody'] ?? null,
                    'responses' => $operation['responses'] ?? []
                ];
            }
        }
        
        echo "✅ Generated " . count($operations) . " operations\n";
        return $operations;
    }

    private function generateClientMethods(array $operations): string
    {
        echo "🏗️  Generating client methods...\n";
        
        $methods = [];
        
        foreach ($operations as $operationId => $operation) {
            $methodName = $this->toCamelCase($operationId);
            $path = $operation['path'];
            $method = $operation['method'];
            $pathParams = $operation['pathParams'];
            $summary = $operation['summary'];
            $description = $operation['description'];
            $requestBody = $operation['requestBody'];
            $responses = $operation['responses'];
            
            // Determine input and output types
            $inputType = $this->getRequestBodyType($operationId, $requestBody);
            $returnType = $this->getResponseType($operationId, $responses);
            
            // Generate PHPDoc
            $docComment = "    /**\n";
            if ($summary) {
                $docComment .= "     * {$summary}\n";
            }
            if ($description && $description !== $summary) {
                $docComment .= "     * \n";
                $docComment .= "     * {$description}\n";
            }
            $docComment .= "     * \n";
            
            // Add path parameters to docblock
            foreach ($pathParams as $param) {
                $docComment .= "     * @param string \${$param} Path parameter\n";
            }
            
            if (in_array($method, ['GET', 'DELETE'])) {
                $docComment .= "     * @param array \$params Query parameters\n";
            } else {
                if ($inputType) {
                    $docComment .= "     * @param {$inputType}|array \$data Request body data\n";
                } else {
                    $docComment .= "     * @param array \$data Request body data\n";
                }
            }
            
            $docComment .= "     * @param array \$headers Additional headers\n";
            
            if ($returnType) {
                $docComment .= "     * @return {$returnType} API response\n";
            } else {
                $docComment .= "     * @return array API response\n";
            }
            
            $docComment .= "     */";
            
            // Generate method signature
            $signature = "public function {$methodName}(";
            
            // Add path parameters
            foreach ($pathParams as $param) {
                $signature .= "string \${$param}, ";
            }
            
            if (in_array($method, ['GET', 'DELETE'])) {
                $signature .= "array \$params = [], ";
            } else {
                if ($inputType) {
                    $signature .= "{$inputType}|array \$data = [], ";
                } else {
                    $signature .= "array \$data = [], ";
                }
            }
            
            $signature .= "array \$headers = [])";
            
            if ($returnType) {
                $signature .= ": {$returnType}";
            } else {
                $signature .= ": array";
            }
            
            // Generate method body
            $body = "    {\n";
            
            // Build the path with parameter substitution
            $pathExpression = "'{$path}'";
            foreach ($pathParams as $param) {
                $pathExpression = str_replace("{{$param}}", "' . \${$param} . '", $pathExpression);
            }
            $pathExpression = str_replace("' . '", '', $pathExpression); // Clean up concatenation
            
            $body .= "        \$endpoint = {$pathExpression};\n";
            
            // Handle input conversion for typed models
            if (!in_array($method, ['GET', 'DELETE']) && $inputType) {
                $body .= "        \n";
                $body .= "        // Convert model to array if needed\n";
                $body .= "        if (\$data instanceof {$inputType}) {\n";
                $body .= "            \$data = \$data->toArray();\n";
                $body .= "        }\n";
                $body .= "        \n";
            }
            
            if (in_array($method, ['GET', 'DELETE'])) {
                $body .= "        \$response = \$this->" . strtolower($method) . "(\$endpoint, \$params, \$headers);\n";
            } else {
                $body .= "        \$response = \$this->" . strtolower($method) . "(\$endpoint, \$data, \$headers);\n";
            }
            
            // Handle output conversion for typed models
            if ($returnType) {
                $body .= "        \n";
                $body .= "        return \$this->createTypedResponse(\$response, '{$returnType}');\n";
            } else {
                $body .= "        \n";
                $body .= "        return \$response;\n";
            }
            
            $body .= "    }";
            
            $methods[] = $docComment . "\n    " . $signature . "\n" . $body;
        }
        
        // Add helper method for typed responses
        $helperMethod = $this->generateTypedResponseHelper();
        $methods[] = $helperMethod;
        
        echo "✅ Generated " . count($methods) . " client methods\n";
        return implode("\n\n", $methods);
    }

    private function generateModels(): void
    {
        echo "📋 Generating model classes...\n";
        
        $schemas = $this->schema['components']['schemas'] ?? [];
        $modelCount = 0;
        
        foreach ($schemas as $schemaName => $schemaData) {
            $this->generateModelClass($schemaName, $schemaData);
            $modelCount++;
        }
        
        echo "✅ Generated {$modelCount} model classes\n";
    }

    private function generateApiRequests(array $operations): void
    {
        echo "📤 Generating API request classes...\n";
        
        $requestCount = 0;
        $requestsDir = $this->outputPath . '/Requests';
        
        if (!is_dir($requestsDir)) {
            mkdir($requestsDir, 0755, true);
        }
        
        foreach ($operations as $operationId => $operation) {
            $requestBody = $operation['requestBody'] ?? null;
            
            if (!$requestBody || !isset($requestBody['content']['application/json']['schema'])) {
                continue;
            }
            
            $schema = $requestBody['content']['application/json']['schema'];
            $className = $this->toPascalCase($operationId) . 'Request';
            
            $this->generateRequestClass($className, $schema, $requestsDir);
            $requestCount++;
        }
        
        echo "✅ Generated {$requestCount} API request classes\n";
    }

    private function generateApiResponses(array $operations): void
    {
        echo "📥 Generating API response classes...\n";
        
        $responseCount = 0;
        $responsesDir = $this->outputPath . '/Responses';
        
        if (!is_dir($responsesDir)) {
            mkdir($responsesDir, 0755, true);
        }
        
        foreach ($operations as $operationId => $operation) {
            $responses = $operation['responses'] ?? [];
            
            // Look for successful responses (200, 201, etc.)
            foreach ([200, 201, 202] as $statusCode) {
                if (!isset($responses[$statusCode])) {
                    continue;
                }
                
                $response = $responses[$statusCode];
                if (!isset($response['content']['application/json']['schema'])) {
                    continue;
                }
                
                $schema = $response['content']['application/json']['schema'];
                $className = $this->toPascalCase($operationId) . 'Response';
                
                $this->generateResponseClass($className, $schema, $responsesDir, $operation);
                $responseCount++;
                break; // Only generate for the first successful response
            }
        }
        
        echo "✅ Generated {$responseCount} API response classes\n";
    }

    private function generateModelClass(string $name, array $schema): void
    {
        $className = $this->toPascalCase($name);
        $properties = $schema['properties'] ?? [];
        $required = $schema['required'] ?? [];
        
        $classContent = "<?php\n\n";
        $classContent .= "namespace TheCompaniesApi\\Sdk\\Generated\\Models;\n\n";
        $classContent .= "/**\n";
        $classContent .= " * {$className} model\n";
        if (isset($schema['description'])) {
            $classContent .= " * \n";
            $classContent .= " * " . $schema['description'] . "\n";
        }
        $classContent .= " */\n";
        $classContent .= "class {$className}\n";
        $classContent .= "{\n";
        
        // Generate properties
        foreach ($properties as $propName => $propData) {
            $type = $this->getPhpType($propData);
            $isRequired = in_array($propName, $required);
            $nullable = (!$isRequired && $type !== 'mixed') ? '?' : '';
            $default = !$isRequired ? ' = null' : '';
            
            $classContent .= "    public {$nullable}{$type} \${$propName}{$default};\n";
        }
        
        $classContent .= "\n";
        
        // Generate constructor
        $classContent .= "    public function __construct(array \$data = [])\n";
        $classContent .= "    {\n";
        foreach ($properties as $propName => $propData) {
            $type = $this->getPhpType($propData);
            $isRequired = in_array($propName, $required);
            
            if ($type === '\\DateTime') {
                $classContent .= "        \$this->{$propName} = isset(\$data['{$propName}']) ? new \\DateTime(\$data['{$propName}']) : null;\n";
            } else {
                $default = $isRequired ? 'null' : 'null';
                $classContent .= "        \$this->{$propName} = \$data['{$propName}'] ?? {$default};\n";
            }
        }
        $classContent .= "    }\n";
        
        // Generate toArray method
        $classContent .= "\n";
        $classContent .= "    public function toArray(): array\n";
        $classContent .= "    {\n";
        $classContent .= "        return [\n";
        foreach ($properties as $propName => $propData) {
            $type = $this->getPhpType($propData);
            
            if ($type === '\\DateTime') {
                $classContent .= "            '{$propName}' => \$this->{$propName}?->format('c'),\n";
            } else {
                $classContent .= "            '{$propName}' => \$this->{$propName},\n";
            }
        }
        $classContent .= "        ];\n";
        $classContent .= "    }\n";
        
        $classContent .= "}\n";
        
        // Ensure models directory exists
        $modelsDir = $this->outputPath . '/Models';
        if (!is_dir($modelsDir)) {
            mkdir($modelsDir, 0755, true);
        }
        
        file_put_contents("{$modelsDir}/{$className}.php", $classContent);
    }

    private function generateRequestClass(string $className, array $schema, string $outputDir): void
    {
        $properties = $schema['properties'] ?? [];
        $required = $schema['required'] ?? [];
        
        $classContent = "<?php\n\n";
        $classContent .= "namespace TheCompaniesApi\\Sdk\\Generated\\Requests;\n\n";
        $classContent .= "/**\n";
        $classContent .= " * {$className} - API request class\n";
        if (isset($schema['description'])) {
            $classContent .= " * \n";
            $classContent .= " * " . $schema['description'] . "\n";
        }
        $classContent .= " */\n";
        $classContent .= "class {$className}\n";
        $classContent .= "{\n";
        
        // Generate properties
        foreach ($properties as $propName => $propData) {
            $type = $this->getPhpType($propData);
            $isRequired = in_array($propName, $required);
            // Make all properties nullable to allow flexible construction
            $nullable = ($type !== 'mixed') ? '?' : '';
            $default = ' = null';
            
            $classContent .= "    public {$nullable}{$type} \${$propName}{$default};\n";
        }
        
        $classContent .= "\n";
        
        // Generate constructor with both named parameters and array support
        $classContent .= "    /**\n";
        $classContent .= "     * Create a new {$className}\n";
        $classContent .= "     *\n";
        $classContent .= "     * @param array \$data Array of properties (for backward compatibility)\n";
        foreach ($properties as $propName => $propData) {
            $type = $this->getPhpType($propData);
            $nullable = ($type !== 'mixed') ? '?' : '';
            if (isset($propData['description'])) {
                $classContent .= "     * @param {$nullable}{$type} \${$propName} " . $propData['description'] . "\n";
            } else {
                $classContent .= "     * @param {$nullable}{$type} \${$propName}\n";
            }
        }
        $classContent .= "     */\n";
        $classContent .= "    public function __construct(\n";
        $classContent .= "        array \$data = [],\n";
        
        $paramList = [];
        foreach ($properties as $propName => $propData) {
            $type = $this->getPhpType($propData);
            $nullable = ($type !== 'mixed') ? '?' : '';
            $paramList[] = "        {$nullable}{$type} \${$propName} = null";
        }
        $classContent .= implode(",\n", $paramList) . "\n";
        $classContent .= "    ) {\n";
        
        // Handle both array and named parameter approaches
        $classContent .= "        // Support both array and named parameter construction\n";
        $classContent .= "        if (!empty(\$data)) {\n";
        $classContent .= "            // Array-based construction (backward compatibility)\n";
        foreach ($properties as $propName => $propData) {
            $type = $this->getPhpType($propData);
            
            if ($type === '\\DateTime') {
                $classContent .= "            \$this->{$propName} = isset(\$data['{$propName}']) ? new \\DateTime(\$data['{$propName}']) : null;\n";
            } else {
                $classContent .= "            \$this->{$propName} = \$data['{$propName}'] ?? null;\n";
            }
        }
        $classContent .= "        } else {\n";
        $classContent .= "            // Named parameter construction\n";
        foreach ($properties as $propName => $propData) {
            $classContent .= "            \$this->{$propName} = \${$propName};\n";
        }
        $classContent .= "        }\n";
        $classContent .= "    }\n";
        
        // Generate toArray method
        $classContent .= "\n";
        $classContent .= "    public function toArray(): array\n";
        $classContent .= "    {\n";
        $classContent .= "        return [\n";
        foreach ($properties as $propName => $propData) {
            $type = $this->getPhpType($propData);
            
            if ($type === '\\DateTime') {
                $classContent .= "            '{$propName}' => \$this->{$propName}?->format('c'),\n";
            } else {
                $classContent .= "            '{$propName}' => \$this->{$propName},\n";
            }
        }
        $classContent .= "        ];\n";
        $classContent .= "    }\n";
        
        $classContent .= "}\n";
        
        file_put_contents("{$outputDir}/{$className}.php", $classContent);
    }

    private function generateResponseClass(string $className, array $schema, string $outputDir, array $operation): void
    {
        $classContent = "<?php\n\n";
        $classContent .= "namespace TheCompaniesApi\\Sdk\\Generated\\Responses;\n\n";
        $classContent .= "/**\n";
        $classContent .= " * {$className} - API response class\n";
        if (isset($operation['summary'])) {
            $classContent .= " * \n";
            $classContent .= " * " . $operation['summary'] . "\n";
        }
        $classContent .= " */\n";
        $classContent .= "class {$className}\n";
        $classContent .= "{\n";
        
        // Handle different response schema types
        if (isset($schema['type']) && $schema['type'] === 'object' && isset($schema['properties'])) {
            // Object response with properties
            $properties = $schema['properties'];
            $required = $schema['required'] ?? [];
            
            foreach ($properties as $propName => $propData) {
                $type = $this->getResponsePropertyType($propData);
                $isRequired = in_array($propName, $required);
                
                // Make array properties nullable and provide defaults
                if ($type === 'array') {
                    $nullable = '?';
                    $default = ' = null';
                } else {
                    $nullable = (!$isRequired && $type !== 'mixed') ? '?' : '';
                    $default = !$isRequired ? ' = null' : '';
                }
                
                $classContent .= "    public {$nullable}{$type} \${$propName}{$default};\n";
            }
            
            $classContent .= "\n";
            
            // Generate constructor
            $classContent .= "    public function __construct(array \$data = [])\n";
            $classContent .= "    {\n";
            foreach ($properties as $propName => $propData) {
                $classContent .= "        \$this->{$propName} = \$this->convertProperty(\$data['{$propName}'] ?? null, '{$propName}');\n";
            }
            $classContent .= "    }\n";
            
            // Add helper method for property conversion (with access to properties)
            $classContent .= "\n";
            $classContent .= "    private function convertProperty(mixed \$value, string \$property): mixed\n";
            $classContent .= "    {\n";
            $classContent .= "        // Handle model references and arrays\n";
            
            // Add specific conversions for typed properties
            foreach ($properties as $propName => $propData) {
                $type = $this->getResponsePropertyType($propData);
                if (str_starts_with($type, '\\TheCompaniesApi\\Sdk\\Generated\\Models\\')) {
                    $classContent .= "        if (\$property === '{$propName}' && is_array(\$value)) {\n";
                    $classContent .= "            return new {$type}(\$value);\n";
                    $classContent .= "        }\n";
                } elseif ($type === 'array') {
                    // Ensure arrays are returned as arrays or null
                    $classContent .= "        if (\$property === '{$propName}') {\n";
                    $classContent .= "            return is_array(\$value) ? \$value : null;\n";
                    $classContent .= "        }\n";
                }
            }
            
            $classContent .= "        return \$value;\n";
            $classContent .= "    }\n";
            
        } else if (isset($schema['type']) && $schema['type'] === 'array') {
            // Array response
            $classContent .= "    public array \$data = [];\n\n";
            
            $classContent .= "    public function __construct(array \$data = [])\n";
            $classContent .= "    {\n";
            $classContent .= "        \$this->data = \$data;\n";
            $classContent .= "    }\n";
            
        } else {
            // Generic response
            $classContent .= "    public mixed \$data = null;\n\n";
            
            $classContent .= "    public function __construct(mixed \$data = null)\n";
            $classContent .= "    {\n";
            $classContent .= "        \$this->data = \$data;\n";
            $classContent .= "    }\n";
        }
        
        $classContent .= "}\n";
        
        file_put_contents("{$outputDir}/{$className}.php", $classContent);
    }

    private function getResponsePropertyType(array $property): string
    {
        // Handle $ref to models
        if (isset($property['$ref'])) {
            $ref = $property['$ref'];
            $parts = explode('/', $ref);
            $modelName = end($parts);
            return "\\TheCompaniesApi\\Sdk\\Generated\\Models\\{$modelName}";
        }
        
        // Handle arrays of models
        if (isset($property['type']) && $property['type'] === 'array' && isset($property['items']['$ref'])) {
            return 'array'; // Array of models
        }
        
        // Fall back to standard type handling
        return $this->getPhpType($property);
    }

    private function createGeneratedClient(string $methods, array $operations): void
    {
        echo "🏗️  Creating generated client class...\n";
        
        $classContent = "<?php\n\n";
        $classContent .= "namespace TheCompaniesApi\\Sdk\\Generated;\n\n";
        $classContent .= "use TheCompaniesApi\\Sdk\\BaseClient;\n\n";
        $classContent .= "/**\n";
        $classContent .= " * Auto-generated client methods for The Companies API\n";
        $classContent .= " * \n";
        $classContent .= " * This class extends the base Client with auto-generated methods\n";
        $classContent .= " * from the OpenAPI specification.\n";
        $classContent .= " */\n";
        $classContent .= "class GeneratedClient extends BaseClient\n";
        $classContent .= "{\n";
        
        // No static factory methods needed - constructor handles both Configuration and array parameters
        
        $classContent .= $methods;
        $classContent .= "\n}\n";
        
        file_put_contents($this->outputPath . '/GeneratedClient.php', $classContent);
        
        // Also create operations map file
        $operationsContent = "<?php\n\n";
        $operationsContent .= "namespace TheCompaniesApi\\Sdk\\Generated;\n\n";
        $operationsContent .= "/**\n";
        $operationsContent .= " * Operations map auto-generated from OpenAPI schema\n";
        $operationsContent .= " */\n";
        $operationsContent .= "class OperationsMap\n";
        $operationsContent .= "{\n";
        $operationsContent .= "    public const OPERATIONS = " . var_export($operations, true) . ";\n";
        $operationsContent .= "}\n";
        
        file_put_contents($this->outputPath . '/OperationsMap.php', $operationsContent);
    }

    private function toCamelCase(string $string): string
    {
        return lcfirst(str_replace(' ', '', ucwords(str_replace(['_', '-'], ' ', $string))));
    }

    private function toPascalCase(string $string): string
    {
        return str_replace(' ', '', ucwords(str_replace(['_', '-'], ' ', $string)));
    }

    private function getPhpType(array $property): string
    {
        $type = $property['type'] ?? null;
        $format = $property['format'] ?? null;
        
        // Handle specific cases first
        if (!$type) {
            return 'mixed';
        }
        
        return match ($type) {
            'string' => match ($format) {
                'date' => '\\DateTime',
                'date-time' => '\\DateTime',
                'uri', 'url' => 'string',
                'email' => 'string',
                'uuid' => 'string',
                default => 'string'
            },
            'integer' => match ($format) {
                'int32' => 'int',
                'int64' => 'int',
                default => 'int'
            },
            'number' => match ($format) {
                'float' => 'float',
                'double' => 'float',
                default => 'float'
            },
            'boolean' => 'bool',
            'array' => $this->getArrayType($property),
            'object' => 'array',
            default => 'mixed'
        };
    }

    private function getArrayType(array $property): string
    {
        $items = $property['items'] ?? null;
        
        if (!$items || !isset($items['type'])) {
            return 'array';
        }
        
        $itemType = $this->getPhpType($items);
        
        // For simple types, we can use array syntax
        return match ($itemType) {
            'string', 'int', 'float', 'bool' => "array",  // Could be string[], int[], etc. in PHP 8.1+
            default => 'array'
        };
    }

    private function getRequestBodyType(string $operationId, ?array $requestBody): ?string
    {
        if (!$requestBody || !isset($requestBody['content']['application/json']['schema'])) {
            return null;
        }
        
        $className = $this->toPascalCase($operationId) . 'Request';
        return "\\TheCompaniesApi\\Sdk\\Generated\\Requests\\{$className}";
    }

    private function getResponseType(string $operationId, array $responses): ?string
    {
        // Look for successful response (200, 201, etc.)
        foreach ([200, 201, 202] as $statusCode) {
            if (!isset($responses[$statusCode])) {
                continue;
            }
            
            $response = $responses[$statusCode];
            if (!isset($response['content']['application/json']['schema'])) {
                continue;
            }
            
            $className = $this->toPascalCase($operationId) . 'Response';
            return "\\TheCompaniesApi\\Sdk\\Generated\\Responses\\{$className}";
        }
        
        return null;
    }

    private function extractModelType(array $schema): ?string
    {
        // Handle direct $ref
        if (isset($schema['$ref'])) {
            return $this->refToClassName($schema['$ref']);
        }
        
        // Handle array of models
        if (isset($schema['type']) && $schema['type'] === 'array' && isset($schema['items']['$ref'])) {
            $itemClass = $this->refToClassName($schema['items']['$ref']);
            return "array"; // For now, return array - could be enhanced to {$itemClass}[] in PHP 8.1+
        }
        
        // Handle object with properties (like pagination wrapper)
        if (isset($schema['type']) && $schema['type'] === 'object' && isset($schema['properties'])) {
            // Check if this looks like a paginated response
            if (isset($schema['properties']['meta']) && isset($schema['properties']['meta']['$ref'])) {
                // This is a paginated response - for now return array
                return 'array';
            }
            
            // For other objects, return array for now
            return 'array';
        }
        
        return null;
    }

    private function refToClassName(string $ref): string
    {
        // Convert #/components/schemas/CompanyV2 to CompanyV2
        $parts = explode('/', $ref);
        $className = end($parts);
        return "\\TheCompaniesApi\\Sdk\\Generated\\Models\\{$className}";
    }

    private function generateTypedResponseHelper(): string
    {
        $method = "    /**\n";
        $method .= "     * Create typed response from array data\n";
        $method .= "     */\n";
        $method .= "    private function createTypedResponse(array \$response, string \$returnType): mixed\n";
        $method .= "    {\n";
        $method .= "        \$data = \$response['data'] ?? \$response;\n";
        $method .= "        \n";
        $method .= "        // If returnType starts with a backslash, it's a response class\n";
        $method .= "        if (str_starts_with(\$returnType, '\\\\')) {\n";
        $method .= "            // Instantiate the response class\n";
        $method .= "            if (class_exists(\$returnType)) {\n";
        $method .= "                return new \$returnType(\$data);\n";
        $method .= "            }\n";
        $method .= "        }\n";
        $method .= "        \n";
        $method .= "        return \$data;\n";
        $method .= "    }";
        
        return $method;
    }
}

// CLI Usage
if ($argc < 2) {
    echo "Usage: php generate-client.php <openapi-url> [output-dir]\n";
    echo "Example: php generate-client.php https://api.thecompaniesapi.com/openapi.json ./src/Generated\n";
    exit(1);
}

$openApiUrl = $argv[1];
$outputDir = $argv[2] ?? './src/Generated';

// Ensure output directory exists
if (!is_dir($outputDir)) {
    mkdir($outputDir, 0755, true);
}

try {
    $generator = new OpenApiClientGenerator($openApiUrl, $outputDir);
    $generator->generate();
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
    exit(1);
} 

