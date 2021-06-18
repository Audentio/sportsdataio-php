<?php

namespace Sportsdata\API\MLB\Endpoint;

class PlayerSeasonSplitStats extends \Sportsdata\API\MLB\Runtime\Client\BaseEndpoint implements \Sportsdata\API\MLB\Runtime\Client\Endpoint
{
    protected $season;
    protected $split;
    protected $format;
    /**
    * 
    *
    * @param string $season Year of the season.
    <br>Examples: <code>2017</code>, <code>2018</code>.
    * @param string $split The desired split of stats. Currently, we support vs. Left/Right/Switch handed pitchers/hitters. Possible values are: <code>L</code>, <code>R</code> and <code>S</code>
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $season, string $split = 'L', string $format = 'JSON')
    {
        $this->season = $season;
        $this->split = $split;
        $this->format = $format;
    }
    use \Sportsdata\API\MLB\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{season}', '{split}', '{format}'), array($this->season, $this->split, $this->format), '/stats/{format}/PlayerSeasonSplitStats/{season}/{split}');
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