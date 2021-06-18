<?php

namespace Sportsdata\API\Golf\Endpoint;

class NewsByPlayer extends \Sportsdata\API\Golf\Runtime\Client\BaseEndpoint implements \Sportsdata\API\Golf\Runtime\Client\Endpoint
{
    protected $playerid;
    protected $format;
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>40000019</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $playerid, string $format = 'JSON')
    {
        $this->playerid = $playerid;
        $this->format = $format;
    }
    use \Sportsdata\API\Golf\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{playerid}', '{format}'), array($this->playerid, $this->format), '/{format}/NewsByPlayerID/{playerid}');
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
     * @return null|\Sportsdata\API\Golf\Model\News[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\Golf\\Model\\News[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}