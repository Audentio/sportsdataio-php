<?php

namespace Sportsdata\API\NFL\Endpoint;

class AdvancedPlayerGameStats extends \Sportsdata\API\NFL\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NFL\Runtime\Client\Endpoint
{
    protected $week;
    protected $season;
    protected $format;
    /**
     * 
     *
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4. Example: <code>1</code>
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season. <br>Examples: <code>2018REG</code>, <code>2018PRE</code>, <code>2018POST</code>.
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
        return str_replace(array('{week}', '{season}', '{format}'), array($this->week, $this->season, $this->format), '/advanced-metrics/{format}/AdvancedPlayerGameStats/{season}/{week}');
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
     * @return null|\Sportsdata\API\NFL\Model\AdvancedPlayerGame[]|\Sportsdata\API\NFL\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\NFL\\Model\\AdvancedPlayerGame[]', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\NFL\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}