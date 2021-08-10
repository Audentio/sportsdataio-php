<?php

namespace Sportsdata\API\NFL\Endpoint;

class PlayerDetailsByPlayer extends \Sportsdata\API\NFL\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NFL\Runtime\Client\Endpoint
{
    protected $playerid;
    protected $format;
    /**
     * 
     *
     * @param string $playerid Each NFL player has a unique ID assigned by FantasyData. Player IDs can be determined by pulling player related data. Example:<code>732</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     */
    public function __construct(string $playerid, string $format = 'JSON')
    {
        $this->playerid = $playerid;
        $this->format = $format;
    }
    use \Sportsdata\API\NFL\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{playerid}', '{format}'), array($this->playerid, $this->format), '/scores/{format}/Player/{playerid}');
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
     * @return null|\Sportsdata\API\NFL\Model\PlayerDetail|\Sportsdata\API\NFL\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\NFL\\Model\\PlayerDetail', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\NFL\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}