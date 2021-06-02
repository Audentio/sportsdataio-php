<?php

namespace Sportsdata\API\NHL\Endpoint;

class PlayerSeasonStatsByPlayer extends \Sportsdata\API\NHL\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NHL\Runtime\Client\Endpoint
{
    protected $format;
    protected $season;
    protected $playerid;
    /**
    * 
    *
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $season Year of the season.
    <br>Examples: <code>2016</code>, <code>2017</code>.
    
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>30000378</code>.
    */
    public function __construct(string $format = 'XML', string $season, string $playerid)
    {
        $this->format = $format;
        $this->season = $season;
        $this->playerid = $playerid;
    }
    use \Sportsdata\API\NHL\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{format}', '{season}', '{playerid}'), array($this->format, $this->season, $this->playerid), '/stats/{format}/PlayerSeasonStatsByPlayer/{season}/{playerid}');
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
     * @return null|\Sportsdata\API\NHL\Model\PlayerSeason
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\NHL\\Model\\PlayerSeason', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}