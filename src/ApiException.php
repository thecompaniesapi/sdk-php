<?php

namespace TheCompaniesApi\Sdk;

use Exception;

/**
 * API Exception for The Companies API SDK
 */
class ApiException extends Exception
{
    private int $statusCode;
    private array $responseData;

    public function __construct(string $message, int $statusCode = 0, array $responseData = [], ?Exception $previous = null)
    {
        parent::__construct($message, $statusCode, $previous);
        $this->statusCode = $statusCode;
        $this->responseData = $responseData;
    }

    /**
     * Get HTTP status code
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * Get response data from API
     */
    public function getResponseData(): array
    {
        return $this->responseData;
    }

    /**
     * Check if this is a client error (4xx)
     */
    public function isClientError(): bool
    {
        return $this->statusCode >= 400 && $this->statusCode < 500;
    }

    /**
     * Check if this is a server error (5xx)
     */
    public function isServerError(): bool
    {
        return $this->statusCode >= 500 && $this->statusCode < 600;
    }

    /**
     * Check if this is a network error
     */
    public function isNetworkError(): bool
    {
        return $this->statusCode === 0;
    }

    /**
     * Get error details from response
     */
    public function getErrorDetails(): array
    {
        return [
            'message' => $this->getMessage(),
            'status_code' => $this->statusCode,
            'response_data' => $this->responseData,
        ];
    }

    /**
     * Convert to string representation
     */
    public function __toString(): string
    {
        $details = $this->getErrorDetails();
        return sprintf(
            'ApiException: %s (Status: %d) - %s',
            $this->getMessage(),
            $this->statusCode,
            json_encode($details['response_data'])
        );
    }
} 
