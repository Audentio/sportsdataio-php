<?php

namespace Sportsdata\API\NFL\Endpoint;

class AlternateMarketPreGameOddsByWeek extends \Sportsdata\API\NFL\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NFL\Runtime\Client\Endpoint
{
    protected $week;
    protected $season;
    protected $format;
    /**
     * 
     *
     * @param string $week The week of the scores (games). <br>Examples: <code>1</code>, <code>2</code>, etc.
     * @param string $season Year of the season, with optional season type. <br>Examples: <code>2018</code>, <code>2018POST</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     */
    public function __construct(string $week, string $season, string $format = 'JSON')
    {
        $this->week = $week;
        $this->season = $season;
        $this->format = $format;
    }
    use \Sportsdata\API\NFL\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{week}', '{season}', '{format}'), array($this->week, $this->season, $this->format), '/odds/{format}/AlternateMarketGameOddsByWeek/{season}/{week}');
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
     * @return null|\Sportsdata\API\NFL\Model\GameInfo[]|\Sportsdata\API\NFL\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\NFL\\Model\\GameInfo[]', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\NFL\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}