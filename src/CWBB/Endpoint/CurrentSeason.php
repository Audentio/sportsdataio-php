<?php

namespace Sportsdata\API\CWBB\Endpoint;

class CurrentSeason extends \Sportsdata\API\CWBB\Runtime\Client\BaseEndpoint implements \Sportsdata\API\CWBB\Runtime\Client\Endpoint
{
    protected $format;
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     */
    public function __construct(string $format = 'JSON')
    {
        $this->format = $format;
    }
    use \Sportsdata\API\CWBB\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{format}'), array($this->format), '/scores/{format}/CurrentSeason');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Sportsdata\API\CWBB\Model\Season|\Sportsdata\API\CWBB\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\CWBB\\Model\\Season', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\CWBB\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}