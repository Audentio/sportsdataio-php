<?php

namespace Sportsdata\API\CBB\Endpoint;

class PlayerGameLogsBySeason extends \Sportsdata\API\CBB\Runtime\Client\BaseEndpoint implements \Sportsdata\API\CBB\Runtime\Client\Endpoint
{
    protected $format;
    protected $season;
    protected $playerid;
    protected $numberofgames;
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Season to get games from. Example <code>2019POST</code>, <code>2020</code>
     * @param string $playerid Unique FantasyData Player ID.Example:<code>60008094</code>.
     * @param string $numberofgames How many games to return. Example <code>all</code>, <code>10</code>, <code>25</code>
     */
    public function __construct(string $format, string $season, string $playerid, string $numberofgames)
    {
        $this->format = $format;
        $this->season = $season;
        $this->playerid = $playerid;
        $this->numberofgames = $numberofgames;
    }
    use \Sportsdata\API\CBB\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{format}', '{season}', '{playerid}', '{numberofgames}'), array($this->format, $this->season, $this->playerid, $this->numberofgames), '/stats/{format}/PlayerGameStatsBySeason/{season}/{playerid}/{numberofgames}');
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