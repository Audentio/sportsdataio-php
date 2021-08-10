<?php

namespace Sportsdata\API\Soccer\Endpoint;

class 6101aa26b591c29f2b089d19 extends \Sportsdata\API\Soccer\Runtime\Client\BaseEndpoint implements \Sportsdata\API\Soccer\Runtime\Client\Endpoint
{
    protected $season;
    protected $competition;
    protected $format;
    /**
     * 
     *
     * @param string $season Year of the season<br>Examples: <code>2020</code>, <code>2021</code>, etc.
     * @param string $competition An indication of a soccer competition/league. This value can be the CompetitionId or the Competition Key. Possible values include: <code>EPL</code>, <code>1</code>, <code>MLS</code>, <code>8</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     */
    public function __construct(string $season, string $competition, string $format = 'JSON')
    {
        $this->season = $season;
        $this->competition = $competition;
        $this->format = $format;
    }
    use \Sportsdata\API\Soccer\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{season}', '{competition}', '{format}'), array($this->season, $this->competition, $this->format), '/odds/{format}/BettingFuturesBySeason/{competition}/{season}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Sportsdata\API\Soccer\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\Soccer\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}