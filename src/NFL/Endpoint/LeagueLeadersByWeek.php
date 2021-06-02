<?php

namespace Sportsdata\API\NFL\Endpoint;

class LeagueLeadersByWeek extends \Sportsdata\API\NFL\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NFL\Runtime\Client\Endpoint
{
    protected $format;
    protected $season;
    protected $week;
    protected $position;
    protected $column;
    /**
    * 
    *
    * @param string $format 
             Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
           
    * @param string $season 
             Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $week 
             Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $position Playerâ€™s position that you would like to filter by.
    * @param string $column Response member you would like results sorted by.
    */
    public function __construct(string $format = 'XML', string $season, string $week, string $position = 'ALL', string $column)
    {
        $this->format = $format;
        $this->season = $season;
        $this->week = $week;
        $this->position = $position;
        $this->column = $column;
    }
    use \Sportsdata\API\NFL\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{format}', '{season}', '{week}', '{position}', '{column}'), array($this->format, $this->season, $this->week, $this->position, $this->column), '/stats/{format}/GameLeagueLeaders/{season}/{week}/{position}/{column}');
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