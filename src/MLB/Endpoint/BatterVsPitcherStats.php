<?php

namespace Sportsdata\API\MLB\Endpoint;

class BatterVsPitcherStats extends \Sportsdata\API\MLB\Runtime\Client\BaseEndpoint implements \Sportsdata\API\MLB\Runtime\Client\Endpoint
{
    protected $pitcherid;
    protected $hitterid;
    protected $format;
    /**
    * 
    *
    * @param string $pitcherid Unique FantasyData Player ID.
    Example:<code>10000618</code>.
    * @param string $hitterid Unique FantasyData Player ID.
    Example:<code>10000031</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $pitcherid, string $hitterid, string $format = 'JSON')
    {
        $this->pitcherid = $pitcherid;
        $this->hitterid = $hitterid;
        $this->format = $format;
    }
    use \Sportsdata\API\MLB\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{pitcherid}', '{hitterid}', '{format}'), array($this->pitcherid, $this->hitterid, $this->format), '/stats/{format}/HitterVsPitcher/{hitterid}/{pitcherid}');
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
     * @return null|\Sportsdata\API\MLB\Model\PlayerSeason[]|\Sportsdata\API\MLB\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\MLB\\Model\\PlayerSeason[]', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\MLB\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}