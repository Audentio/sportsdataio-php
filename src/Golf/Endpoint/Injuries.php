<?php

namespace Sportsdata\API\Golf\Endpoint;

class Injuries extends \Sportsdata\API\Golf\Runtime\Client\BaseEndpoint implements \Sportsdata\API\Golf\Runtime\Client\Endpoint
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
    use \Sportsdata\API\Golf\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{format}'), array($this->format), '/{format}/Injuries');
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
     * @return null|\Sportsdata\API\Golf\Model\Injury[]|\Sportsdata\API\Golf\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\Golf\\Model\\Injury[]', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\Golf\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}