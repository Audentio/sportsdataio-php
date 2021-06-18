<?php

namespace Sportsdata\API\CFB\Endpoint;

class BoxScoresByWeekDelta extends \Sportsdata\API\CFB\Runtime\Client\BaseEndpoint implements \Sportsdata\API\CFB\Runtime\Client\Endpoint
{
    protected $week;
    protected $season;
    protected $minutes;
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
           
    * @param string $minutes Only returns player statistics that have changed in the last X minutes.  You specify how many minutes in time to go back.  Valid entries are:
    <code>1</code> or <code>2</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $week, string $season, string $minutes, string $format = 'JSON')
    {
        $this->week = $week;
        $this->season = $season;
        $this->minutes = $minutes;
        $this->format = $format;
    }
    use \Sportsdata\API\CFB\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{week}', '{season}', '{minutes}', '{format}'), array($this->week, $this->season, $this->minutes, $this->format), '/stats/{format}/BoxScoresByWeekDelta/{season}/{week}/{minutes}');
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
     * @return null|\Sportsdata\API\CFB\Model\BoxScore[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\CFB\\Model\\BoxScore[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}