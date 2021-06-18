<?php

namespace Sportsdata\API\CBB\Endpoint;

class PlayerDetailsByPlayer extends \Sportsdata\API\CBB\Runtime\Client\BaseEndpoint implements \Sportsdata\API\CBB\Runtime\Client\Endpoint
{
    protected $playerid;
    protected $format;
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>60003802</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $playerid, string $format = 'JSON')
    {
        $this->playerid = $playerid;
        $this->format = $format;
    }
    use \Sportsdata\API\CBB\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{playerid}', '{format}'), array($this->playerid, $this->format), '/scores/{format}/Player/{playerid}');
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
     * @return null|\Sportsdata\API\CBB\Model\Player
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\CBB\\Model\\Player', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}