<?php

namespace Sportsdata\API\MMA\Endpoint;

class Schedule extends \Sportsdata\API\MMA\Runtime\Client\BaseEndpoint implements \Sportsdata\API\MMA\Runtime\Client\Endpoint
{
    protected $season;
    protected $league;
    protected $format;
    /**
     * 
     *
     * @param string $season Year of the season.<br>Examples: <code>2019</code>, <code>2020</code>, etc.
     * @param string $league The name of the league.<br>Examples: <code>UFC</code>, etc
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     */
    public function __construct(string $season, string $league, string $format = 'JSON')
    {
        $this->season = $season;
        $this->league = $league;
        $this->format = $format;
    }
    use \Sportsdata\API\MMA\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{season}', '{league}', '{format}'), array($this->season, $this->league, $this->format), '/scores/{format}/Schedule/{league}/{season}');
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
     * @return null|\Sportsdata\API\MMA\Model\Event[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\MMA\\Model\\Event[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}