<?php

namespace Sportsdata\API\CSGO\Endpoint;

class CompetitionsLeagues extends \Sportsdata\API\CSGO\Runtime\Client\BaseEndpoint implements \Sportsdata\API\CSGO\Runtime\Client\Endpoint
{
    protected $format;
    /**
     * Competitions (Leagues)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     */
    public function __construct(string $format = 'JSON')
    {
        $this->format = $format;
    }
    use \Sportsdata\API\CSGO\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{format}'), array($this->format), '/scores/{format}/Competitions');
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
     * @return null|\Sportsdata\API\CSGO\Model\Competition[]|\Sportsdata\API\CSGO\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\CSGO\\Model\\Competition[]', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\CSGO\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}