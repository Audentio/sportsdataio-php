<?php

namespace Sportsdata\API\NBA\Endpoint;

class ProjectedPlayerSeasonStatsByTeam extends \Sportsdata\API\NBA\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NBA\Runtime\Client\Endpoint
{
    protected $format;
    protected $season;
    protected $team;
    /**
    * 
    *
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $season Year of the season (with optional season type).<br>Examples: <code>2018</code>, <code>2019</code>, etc.
    * @param string $team The abbreviation of the requested team.
    <br>Examples: <code>MIA</code>, <code>PHI</code>.
    */
    public function __construct(string $format = 'XML', string $season, string $team)
    {
        $this->format = $format;
        $this->season = $season;
        $this->team = $team;
    }
    use \Sportsdata\API\NBA\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{format}', '{season}', '{team}'), array($this->format, $this->season, $this->team), '/projections/{format}/PlayerSeasonProjectionStatsByTeam/{season}/{team}');
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
     * @return null|\Sportsdata\API\NBA\Model\PlayerSeasonProjection[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\NBA\\Model\\PlayerSeasonProjection[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}