<?php

namespace Sportsdata\API\Soccer\Endpoint;

class UpcomingDfsSlatesByCompetition extends \Sportsdata\API\Soccer\Runtime\Client\BaseEndpoint implements \Sportsdata\API\Soccer\Runtime\Client\Endpoint
{
    protected $competitionId;
    protected $format;
    /**
    * 
    *
    * @param string $competitionId The Competition Id.
    <br>Examples: <code>3</code>
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $competitionId, string $format = 'JSON')
    {
        $this->competitionId = $competitionId;
        $this->format = $format;
    }
    use \Sportsdata\API\Soccer\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{competitionId}', '{format}'), array($this->competitionId, $this->format), '/projections/{format}/UpcomingDfsSlatesByCompetition/{competitionId}');
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
     * @return null|\Sportsdata\API\Soccer\Model\DfsSlate[]|\Sportsdata\API\Soccer\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\Soccer\\Model\\DfsSlate[]', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\Soccer\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}