<?php

namespace Sportsdata\API\NBA\Endpoint;

class PlayerSeasonStatsByTeam extends \Sportsdata\API\NBA\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NBA\Runtime\Client\Endpoint
{
    protected $team;
    protected $season;
    protected $format;
    /**
    * 
    *
    * @param string $team The abbreviation of the requested team.
    <br>Examples: <code>MIA</code>, <code>PHI</code>.
    * @param string $season Year of the season.
    <br>Examples: <code>2015</code>, <code>2016</code>.
    
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $team, string $season, string $format = 'JSON')
    {
        $this->team = $team;
        $this->season = $season;
        $this->format = $format;
    }
    use \Sportsdata\API\NBA\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{team}', '{season}', '{format}'), array($this->team, $this->season, $this->format), '/stats/{format}/PlayerSeasonStatsByTeam/{season}/{team}');
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
     * @return null|\Sportsdata\API\NBA\Model\PlayerSeason[]|\Sportsdata\API\NBA\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\NBA\\Model\\PlayerSeason[]', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\NBA\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}