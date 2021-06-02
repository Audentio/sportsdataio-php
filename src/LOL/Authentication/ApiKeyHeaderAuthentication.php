<?php

namespace Sportsdata\API\LOL\Authentication;

class ApiKeyHeaderAuthentication implements \Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $apiKey;
    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }
    public function authentication(\Psr\Http\Message\RequestInterface $request) : \Psr\Http\Message\RequestInterface
    {
        $request = $request->withHeader('Ocp-Apim-Subscription-Key', $this->{'apiKey'});
        return $request;
    }
    public function getScope() : string
    {
        return 'apiKeyHeader';
    }
}