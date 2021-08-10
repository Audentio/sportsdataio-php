<?php

namespace Sportsdata\API\Soccer\Endpoint;

class PlayerSeasonStatsByPlayer extends \Sportsdata\API\Soccer\Runtime\Client\BaseEndpoint implements \Sportsdata\API\Soccer\Runtime\Client\Endpoint
{
    protected $playerid;
    protected $roundid;
    protected $format;
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>90026231</code>.
    * @param string $roundid Unique FantasyData Round ID. RoundIDs can be found in the Competition Hierarchy (League Hierarchy). 
    Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $playerid, string $roundid, string $format = 'JSON')
    {
        $this->playerid = $playerid;
        $this->roundid = $roundid;
        $this->format = $format;
    }
    use \Sportsdata\API\Soccer\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{playerid}', '{roundid}', '{format}'), array($this->playerid, $this->roundid, $this->format), '/stats/{format}/PlayerSeasonStatsByPlayer/{roundid}/{playerid}');
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
     * @return null|\Sportsdata\API\Soccer\Model\PlayerSeason[]|\Sportsdata\API\Soccer\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\Soccer\\Model\\PlayerSeason[]', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\Soccer\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}