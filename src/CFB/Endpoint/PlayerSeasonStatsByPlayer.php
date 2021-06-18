<?php

namespace Sportsdata\API\CFB\Endpoint;

class PlayerSeasonStatsByPlayer extends \Sportsdata\API\CFB\Runtime\Client\BaseEndpoint implements \Sportsdata\API\CFB\Runtime\Client\Endpoint
{
    protected $playerid;
    protected $season;
    protected $format;
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
             Example:<code>50002016</code>.
           
    * @param string $season Year of the season (with optional season type).<br>Examples: <code>2017</code>, <code>2017POST</code>, <code>2018</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $playerid, string $season, string $format = 'JSON')
    {
        $this->playerid = $playerid;
        $this->season = $season;
        $this->format = $format;
    }
    use \Sportsdata\API\CFB\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{playerid}', '{season}', '{format}'), array($this->playerid, $this->season, $this->format), '/stats/{format}/PlayerSeasonStatsByPlayer/{season}/{playerid}');
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
     * @return null|\Sportsdata\API\CFB\Model\PlayerSeason[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\CFB\\Model\\PlayerSeason[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}