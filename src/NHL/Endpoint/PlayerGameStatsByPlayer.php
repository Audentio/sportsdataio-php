<?php

namespace Sportsdata\API\NHL\Endpoint;

class PlayerGameStatsByPlayer extends \Sportsdata\API\NHL\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NHL\Runtime\Client\Endpoint
{
    protected $playerid;
    protected $date;
    protected $format;
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>30000378</code>.
    * @param string $date The date of the game(s).
    
    <br>Examples: <code>2018-JAN-31</code>, <code>2017-OCT-01</code>.
    
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $playerid, string $date, string $format = 'JSON')
    {
        $this->playerid = $playerid;
        $this->date = $date;
        $this->format = $format;
    }
    use \Sportsdata\API\NHL\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{playerid}', '{date}', '{format}'), array($this->playerid, $this->date, $this->format), '/stats/{format}/PlayerGameStatsByPlayer/{date}/{playerid}');
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
     * @return null|\Sportsdata\API\NHL\Model\PlayerGame|\Sportsdata\API\NHL\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\NHL\\Model\\PlayerGame', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\NHL\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}