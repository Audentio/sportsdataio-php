<?php

namespace Sportsdata\API\MLB\Endpoint;

class BatterVsPitcherStats extends \Sportsdata\API\MLB\Runtime\Client\BaseEndpoint implements \Sportsdata\API\MLB\Runtime\Client\Endpoint
{
    protected $format;
    protected $hitterid;
    protected $pitcherid;
    /**
    * 
    *
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $hitterid Unique FantasyData Player ID.
    Example:<code>10000031</code>.
    * @param string $pitcherid Unique FantasyData Player ID.
    Example:<code>10000618</code>.
    */
    public function __construct(string $format = 'XML', string $hitterid, string $pitcherid)
    {
        $this->format = $format;
        $this->hitterid = $hitterid;
        $this->pitcherid = $pitcherid;
    }
    use \Sportsdata\API\MLB\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{format}', '{hitterid}', '{pitcherid}'), array($this->format, $this->hitterid, $this->pitcherid), '/stats/{format}/HitterVsPitcher/{hitterid}/{pitcherid}');
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
     * @return null|\Sportsdata\API\MLB\Model\PlayerSeason[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\MLB\\Model\\PlayerSeason[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}