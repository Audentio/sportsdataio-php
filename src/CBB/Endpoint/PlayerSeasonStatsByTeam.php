<?php

namespace Sportsdata\API\CBB\Endpoint;

class PlayerSeasonStatsByTeam extends \Sportsdata\API\CBB\Runtime\Client\BaseEndpoint implements \Sportsdata\API\CBB\Runtime\Client\Endpoint
{
    protected $team;
    protected $season;
    protected $format;
    /**
    * 
    *
    * @param string $team The abbreviation of the requested team.
    <br>Examples: <code>SF</code>, <code>NYY</code>.
    * @param string $season Year of the season (with optional season type).<br>Examples: <code>2018</code>, <code>2018POST</code>, <code>2019</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $team, string $season, string $format = 'JSON')
    {
        $this->team = $team;
        $this->season = $season;
        $this->format = $format;
    }
    use \Sportsdata\API\CBB\Runtime\Client\EndpointTrait;
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
     * @return null|\Sportsdata\API\CBB\Model\PlayerSeason[]|\Sportsdata\API\CBB\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\CBB\\Model\\PlayerSeason[]', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\CBB\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}