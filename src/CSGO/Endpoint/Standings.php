<?php

namespace Sportsdata\API\CSGO\Endpoint;

class Standings extends \Sportsdata\API\CSGO\Runtime\Client\BaseEndpoint implements \Sportsdata\API\CSGO\Runtime\Client\Endpoint
{
    protected $roundid;
    protected $format;
    /**
    * Schedule
    *
    * @param string $roundid Unique FantasyData Round ID. RoundIDs can be found in the Competitions and Competition Details endpoints. 
    Example: <code>100000138</code>, etc
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $roundid, string $format = 'JSON')
    {
        $this->roundid = $roundid;
        $this->format = $format;
    }
    use \Sportsdata\API\CSGO\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{roundid}', '{format}'), array($this->roundid, $this->format), '/scores/{format}/Standings/{roundid}');
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
     * @return null|\Sportsdata\API\CSGO\Model\Standing[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\CSGO\\Model\\Standing[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}