<?php

namespace Sportsdata\API\NFL\Endpoint;

class LeagueLeadersByWeek extends \Sportsdata\API\NFL\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NFL\Runtime\Client\Endpoint
{
    protected $week;
    protected $season;
    protected $column;
    protected $position;
    protected $format;
    /**
     * 
     *
     * @param string $week 
              Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
              Example: <code>1</code>
    * @param string $season 
              Year of the season and the season type. If no season type is provided, then the default is regular season.
              <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
    * @param string $column Response member you would like results sorted by.
     * @param string $position Playerâ€™s position that you would like to filter by.
     * @param string $format 
              Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $week, string $season, string $column, string $position = 'ALL', string $format = 'JSON')
    {
        $this->week = $week;
        $this->season = $season;
        $this->column = $column;
        $this->position = $position;
        $this->format = $format;
    }
    use \Sportsdata\API\NFL\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{week}', '{season}', '{column}', '{position}', '{format}'), array($this->week, $this->season, $this->column, $this->position, $this->format), '/stats/{format}/GameLeagueLeaders/{season}/{week}/{position}/{column}');
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
     * @return null|\Sportsdata\API\NFL\Model\PlayerGame[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\NFL\\Model\\PlayerGame[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}