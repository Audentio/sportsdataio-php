<?php

namespace Sportsdata\API\Soccer\Endpoint;

class PlayerSeasonStatsByTeam extends \Sportsdata\API\Soccer\Runtime\Client\BaseEndpoint implements \Sportsdata\API\Soccer\Runtime\Client\Endpoint
{
    protected $team;
    protected $roundid;
    protected $format;
    /**
    * 
    *
    * @param string $team Unique FantasyData Team ID. 
    Example:<code>516</code>.
    * @param string $roundid Unique FantasyData Round ID. RoundIDs can be found in the Competition Hierarchy (League Hierarchy). 
    Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $team, string $roundid, string $format = 'JSON')
    {
        $this->team = $team;
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
        return str_replace(array('{team}', '{roundid}', '{format}'), array($this->team, $this->roundid, $this->format), '/stats/{format}/PlayerSeasonStatsByTeam/{roundid}/{team}');
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
     * @return null|\Sportsdata\API\Soccer\Model\PlayerSeason[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\Soccer\\Model\\PlayerSeason[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}