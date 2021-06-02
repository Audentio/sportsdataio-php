<?php

namespace Sportsdata\API\LOL\Endpoint;

class ProjectedPlayerGameStatsByPlayer extends \Sportsdata\API\LOL\Runtime\Client\BaseEndpoint implements \Sportsdata\API\LOL\Runtime\Client\Endpoint
{
    protected $format;
    protected $date;
    protected $playerid;
    /**
    * Projected Player Game Stats by Date
    *
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $date The date of the game(s).
    <br>Example: <code>2019-01-20</code>
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>100001500</code>.
    */
    public function __construct(string $format = 'xml', string $date, string $playerid)
    {
        $this->format = $format;
        $this->date = $date;
        $this->playerid = $playerid;
    }
    use \Sportsdata\API\LOL\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{format}', '{date}', '{playerid}'), array($this->format, $this->date, $this->playerid), '/projections/{format}/PlayerGameProjectionStatsByPlayer/{date}/{playerid}');
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
     * @return null|\Sportsdata\API\LOL\Model\PlayerGameProjection[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\LOL\\Model\\PlayerGameProjection[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}