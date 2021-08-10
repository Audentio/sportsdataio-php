<?php

namespace Sportsdata\API\MMA\Endpoint;

class Fighter extends \Sportsdata\API\MMA\Runtime\Client\BaseEndpoint implements \Sportsdata\API\MMA\Runtime\Client\Endpoint
{
    protected $fighterid;
    protected $format;
    /**
     * 
     *
     * @param string $fighterid Each fighter has a unique ID assigned by FantasyData. Fighter IDs can be determined by pulling player related data. Example: <code>140000098</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     */
    public function __construct(string $fighterid, string $format = 'JSON')
    {
        $this->fighterid = $fighterid;
        $this->format = $format;
    }
    use \Sportsdata\API\MMA\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{fighterid}', '{format}'), array($this->fighterid, $this->format), '/scores/{format}/Fighter/{fighterid}');
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
     * @return null|\Sportsdata\API\MMA\Model\Fighter|\Sportsdata\API\MMA\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\MMA\\Model\\Fighter', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\MMA\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}