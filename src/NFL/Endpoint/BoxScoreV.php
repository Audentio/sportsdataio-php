<?php

namespace Sportsdata\API\NFL\Endpoint;

class BoxScoreV extends \Sportsdata\API\NFL\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NFL\Runtime\Client\Endpoint
{
    protected $week;
    protected $season;
    protected $hometeam;
    protected $format;
    /**
    * 
    *
    * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $hometeam Abbreviation of a team playing in this game. Example: <code>WAS</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $week, string $season, string $hometeam, string $format = 'JSON')
    {
        $this->week = $week;
        $this->season = $season;
        $this->hometeam = $hometeam;
        $this->format = $format;
    }
    use \Sportsdata\API\NFL\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{week}', '{season}', '{hometeam}', '{format}'), array($this->week, $this->season, $this->hometeam, $this->format), '/stats/{format}/BoxScoreV3/{season}/{week}/{hometeam}');
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
     * @return null|\Sportsdata\API\NFL\Model\BoxScoreV3|\Sportsdata\API\NFL\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\NFL\\Model\\BoxScoreV3', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\NFL\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}