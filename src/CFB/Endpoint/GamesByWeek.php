<?php

namespace Sportsdata\API\CFB\Endpoint;

class GamesByWeek extends \Sportsdata\API\CFB\Runtime\Client\BaseEndpoint implements \Sportsdata\API\CFB\Runtime\Client\Endpoint
{
    protected $week;
    protected $season;
    protected $format;
    /**
    * 
    *
    * @param string $week 
             The week of the game(s).
             <br>Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc.
           
    * @param string $season 
             Year of the season.
             <br>Examples: <code>2015</code>, <code>2016</code>, etc.
           
    * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
    */
    public function __construct(string $week, string $season, string $format = 'JSON')
    {
        $this->week = $week;
        $this->season = $season;
        $this->format = $format;
    }
    use \Sportsdata\API\CFB\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{week}', '{season}', '{format}'), array($this->week, $this->season, $this->format), '/scores/{format}/GamesByWeek/{season}/{week}');
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
     * @return null|\Sportsdata\API\CFB\Model\Game[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\CFB\\Model\\Game[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}