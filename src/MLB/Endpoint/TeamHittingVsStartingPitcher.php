<?php

namespace Sportsdata\API\MLB\Endpoint;

class TeamHittingVsStartingPitcher extends \Sportsdata\API\MLB\Runtime\Client\BaseEndpoint implements \Sportsdata\API\MLB\Runtime\Client\Endpoint
{
    protected $team;
    protected $gameid;
    protected $format;
    /**
    * 
    *
    * @param string $team The abbreviation of the requested team.
    <br>Examples: <code>SF</code>, <code>NYY</code>.
    * @param string $gameid The GameID of an MLB game.  GameIDs can be found in the Games API.  Valid entries are <code>14620</code> or <code>16905</code>
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $team, string $gameid, string $format = 'JSON')
    {
        $this->team = $team;
        $this->gameid = $gameid;
        $this->format = $format;
    }
    use \Sportsdata\API\MLB\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{team}', '{gameid}', '{format}'), array($this->team, $this->gameid, $this->format), '/stats/{format}/TeamHittersVsPitcher/{gameid}/{team}');
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
     * @return null|\Sportsdata\API\MLB\Model\PlayerSeason[]|\Sportsdata\API\MLB\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\MLB\\Model\\PlayerSeason[]', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\MLB\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}