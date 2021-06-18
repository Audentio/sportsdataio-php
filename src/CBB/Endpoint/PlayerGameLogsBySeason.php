<?php

namespace Sportsdata\API\CBB\Endpoint;

class PlayerGameLogsBySeason extends \Sportsdata\API\CBB\Runtime\Client\BaseEndpoint implements \Sportsdata\API\CBB\Runtime\Client\Endpoint
{
    protected $playerid;
    protected $season;
    protected $numberofgames;
    protected $format;
    /**
     * 
     *
     * @param string $playerid Unique FantasyData Player ID.Example:<code>60008094</code>.
     * @param string $season Season to get games from. Example <code>2019POST</code>, <code>2020</code>
     * @param string $numberofgames How many games to return. Example <code>all</code>, <code>10</code>, <code>25</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     */
    public function __construct(string $playerid, string $season, string $numberofgames, string $format = 'JSON')
    {
        $this->playerid = $playerid;
        $this->season = $season;
        $this->numberofgames = $numberofgames;
        $this->format = $format;
    }
    use \Sportsdata\API\CBB\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{playerid}', '{season}', '{numberofgames}', '{format}'), array($this->playerid, $this->season, $this->numberofgames, $this->format), '/stats/{format}/PlayerGameStatsBySeason/{season}/{playerid}/{numberofgames}');
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
     * @return null|\Sportsdata\API\CBB\Model\PlayerGame[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\CBB\\Model\\PlayerGame[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}