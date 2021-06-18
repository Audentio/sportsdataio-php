<?php

namespace Sportsdata\API\NFL\Endpoint;

class PlayByPlayDelta extends \Sportsdata\API\NFL\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NFL\Runtime\Client\Endpoint
{
    protected $week;
    protected $season;
    protected $minutes;
    protected $format;
    /**
    * 
    *
    * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $minutes Only returns player statistics that have changed in the last X minutes.  You specify how many minutes in time to go back.  Valid entries are:<br>
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
    use \Sportsdata\API\NFL\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{week}', '{season}', '{minutes}', '{format}'), array($this->week, $this->season, $this->minutes, $this->format), '/pbp/{format}/PlayByPlayDelta/{season}/{week}/{minutes}');
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
     * @return null|\Sportsdata\API\NFL\Model\PlayByPlay[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\NFL\\Model\\PlayByPlay[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}