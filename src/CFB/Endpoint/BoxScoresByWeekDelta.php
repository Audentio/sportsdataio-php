<?php

namespace Sportsdata\API\CFB\Endpoint;

class BoxScoresByWeekDelta extends \Sportsdata\API\CFB\Runtime\Client\BaseEndpoint implements \Sportsdata\API\CFB\Runtime\Client\Endpoint
{
    protected $format;
    protected $season;
    protected $week;
    protected $minutes;
    /**
    * 
    *
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $season 
             Year of the season.
             <br>Examples: <code>2015</code>, <code>2016</code>, etc.
           
    * @param string $week 
             The week of the game(s).
             <br>Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc.
           
    * @param string $minutes Only returns player statistics that have changed in the last X minutes.  You specify how many minutes in time to go back.  Valid entries are:
    <code>1</code> or <code>2</code>.
    */
    public function __construct(string $format = 'XML', string $season, string $week, string $minutes)
    {
        $this->format = $format;
        $this->season = $season;
        $this->week = $week;
        $this->minutes = $minutes;
    }
    use \Sportsdata\API\CFB\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{format}', '{season}', '{week}', '{minutes}'), array($this->format, $this->season, $this->week, $this->minutes), '/stats/{format}/BoxScoresByWeekDelta/{season}/{week}/{minutes}');
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