<?php

namespace Sportsdata\API\NBA\Endpoint;

class ProjectedPlayerSeasonStatsByPlayer extends \Sportsdata\API\NBA\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NBA\Runtime\Client\Endpoint
{
    protected $playerid;
    protected $season;
    protected $format;
    /**
     * 
     *
     * @param string $playerid Unique FantasyData Player ID. Example:<code>20000571</code>.
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2018</code>, <code>2019</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     */
    public function __construct(string $playerid, string $season, string $format = 'JSON')
    {
        $this->playerid = $playerid;
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
        return str_replace(array('{playerid}', '{season}', '{format}'), array($this->playerid, $this->season, $this->format), '/projections/{format}/PlayerSeasonProjectionStatsByPlayer/{season}/{playerid}');
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
     * @return null|\Sportsdata\API\NBA\Model\PlayerSeasonProjection|\Sportsdata\API\NBA\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\NBA\\Model\\PlayerSeasonProjection', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\NBA\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}