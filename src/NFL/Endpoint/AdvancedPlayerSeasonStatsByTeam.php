<?php

namespace Sportsdata\API\NFL\Endpoint;

class AdvancedPlayerSeasonStatsByTeam extends \Sportsdata\API\NFL\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NFL\Runtime\Client\Endpoint
{
    protected $format;
    protected $season;
    protected $team;
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season. <br>Examples: <code>2018REG</code>, <code>2018PRE</code>, <code>2018POST</code>.
     * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
     */
    public function __construct(string $format = 'XML', string $season, string $team)
    {
        $this->format = $format;
        $this->season = $season;
        $this->team = $team;
    }
    use \Sportsdata\API\NFL\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{format}', '{season}', '{team}'), array($this->format, $this->season, $this->team), '/advanced-metrics/{format}/AdvancedPlayerSeasonStats/{season}/{team}');
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
     * @return null|\Sportsdata\API\NFL\Model\AdvancedPlayerSeason[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\NFL\\Model\\AdvancedPlayerSeason[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}