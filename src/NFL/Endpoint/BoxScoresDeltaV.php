<?php

namespace Sportsdata\API\NFL\Endpoint;

class BoxScoresDeltaV extends \Sportsdata\API\NFL\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NFL\Runtime\Client\Endpoint
{
    protected $week;
    protected $season;
    protected $minutes;
    protected $playerstoinclude;
    protected $format;
    /**
    * This method returns all box scores for a given season and week, but only returns player stats that have changed in the last X minutes. You can also filter by type of player stats to include, such as traditional fantasy players, IDP players or all players.
    *
    * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $minutes Only returns player statistics that have changed in the last X minutes.  You specify how many minutes in time to go back.  Valid entries are:<br><code>1</code>,
    <code>2</code>, etc.
           
    * @param string $playerstoinclude The subcategory of players to include in the returned PlayerGame records. Possible values include:<br><br>
    <code>all</code> Returns all players<br>
    <code>fantasy</code> Returns traditional fantasy players (QB, RB, WR, TE, K, DST)<br>
    <code>idp</code> Returns traditional fantasy players and IDP players.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $week, string $season, string $minutes, string $playerstoinclude = 'all', string $format = 'JSON')
    {
        $this->week = $week;
        $this->season = $season;
        $this->minutes = $minutes;
        $this->playerstoinclude = $playerstoinclude;
        $this->format = $format;
    }
    use \Sportsdata\API\NFL\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{week}', '{season}', '{minutes}', '{playerstoinclude}', '{format}'), array($this->week, $this->season, $this->minutes, $this->playerstoinclude, $this->format), '/stats/{format}/BoxScoresDeltaV3/{season}/{week}/{playerstoinclude}/{minutes}');
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
     * @return null|\Sportsdata\API\NFL\Model\BoxScoreV3[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\NFL\\Model\\BoxScoreV3[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}