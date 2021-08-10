<?php

namespace Sportsdata\API\CFB\Endpoint;

class CurrentSeasonDetails extends \Sportsdata\API\CFB\Runtime\Client\BaseEndpoint implements \Sportsdata\API\CFB\Runtime\Client\Endpoint
{
    protected $format;
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     */
    public function __construct(string $format = 'JSON')
    {
        $this->format = $format;
    }
    use \Sportsdata\API\CFB\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{format}'), array($this->format), '/scores/{format}/CurrentSeasonDetails');
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
     * @return null|\Sportsdata\API\CFB\Model\Season|\Sportsdata\API\CFB\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\CFB\\Model\\Season', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\CFB\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}