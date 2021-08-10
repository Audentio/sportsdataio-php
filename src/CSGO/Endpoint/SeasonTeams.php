<?php

namespace Sportsdata\API\CSGO\Endpoint;

class SeasonTeams extends \Sportsdata\API\CSGO\Runtime\Client\BaseEndpoint implements \Sportsdata\API\CSGO\Runtime\Client\Endpoint
{
    protected $seasonid;
    protected $format;
    /**
    * Season Teams
    *
    * @param string $seasonid Unique FantasyData Season ID. SeasonIDs can be found in the Competitions and Competition Details endpoints. 
    Examples: <code>100000023</code>, <code>100000024</code>, etc
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $seasonid, string $format = 'JSON')
    {
        $this->seasonid = $seasonid;
        $this->format = $format;
    }
    use \Sportsdata\API\CSGO\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{seasonid}', '{format}'), array($this->seasonid, $this->format), '/scores/{format}/SeasonTeams/{seasonid}');
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
     * @return null|\Sportsdata\API\CSGO\Model\SeasonTeam[]|\Sportsdata\API\CSGO\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\CSGO\\Model\\SeasonTeam[]', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\CSGO\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}