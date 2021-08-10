<?php

namespace Sportsdata\API\CSGO;

class Client extends \Sportsdata\API\CSGO\Runtime\Client\Client
{
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2018-01-13</code>, <code>2018-06-13</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CSGO\Model\PlayerGameProjection[]|\Sportsdata\API\CSGO\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function projectedPlayerGameStatsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CSGO\Endpoint\ProjectedPlayerGameStatsByDate($date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID. 
    Example:<code>100000576</code>.
    * @param string $date The date of the game(s).
    <br>Examples: <code>2018-01-13</code>, <code>2018-06-13</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CSGO\Model\PlayerGameProjection[]|\Sportsdata\API\CSGO\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function projectedPlayerGameStatsByPlayer(string $playerid, string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CSGO\Endpoint\ProjectedPlayerGameStatsByPlayer($playerid, $date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-02-27</code>, <code>2017-09-01</code>.</br>
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CSGO\Model\DfsSlate[]|\Sportsdata\API\CSGO\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function dfsSlatesByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CSGO\Endpoint\DfsSlatesByDate($date, $format), $fetch);
    }
    /**
    * Games by Date
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2018-01-13</code>, <code>2018-06-13</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CSGO\Model\Game[]|\Sportsdata\API\CSGO\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function gamesByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CSGO\Endpoint\GamesByDate($date, $format), $fetch);
    }
    /**
     * Areas (Countries)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CSGO\Model\Area[]|\Sportsdata\API\CSGO\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function areasCountries(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CSGO\Endpoint\AreasCountries($format), $fetch);
    }
    /**
     * Competitions (Leagues)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CSGO\Model\Competition[]|\Sportsdata\API\CSGO\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function competitionsLeagues(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CSGO\Endpoint\CompetitionsLeagues($format), $fetch);
    }
    /**
     * Teams
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CSGO\Model\Team[]|\Sportsdata\API\CSGO\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function teams(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CSGO\Endpoint\Teams($format), $fetch);
    }
    /**
     * Venues
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CSGO\Model\Venue[]|\Sportsdata\API\CSGO\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function venues(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CSGO\Endpoint\Venues($format), $fetch);
    }
    /**
    * Season Teams
    *
    * @param string $seasonid Unique FantasyData Season ID. SeasonIDs can be found in the Competitions and Competition Details endpoints. 
    Examples: <code>100000023</code>, <code>100000024</code>, etc
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CSGO\Model\SeasonTeam[]|\Sportsdata\API\CSGO\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function seasonTeams(string $seasonid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CSGO\Endpoint\SeasonTeams($seasonid, $format), $fetch);
    }
    /**
    * Schedule
    *
    * @param string $roundid Unique FantasyData Round ID. RoundIDs can be found in the Competitions and Competition Details endpoints. 
    Examples: <code>100000138</code>, <code>1000001412</code>, etc
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CSGO\Model\Game[]|\Sportsdata\API\CSGO\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function schedule(string $roundid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CSGO\Endpoint\Schedule($roundid, $format), $fetch);
    }
    /**
     * Players
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CSGO\Model\Player[]|\Sportsdata\API\CSGO\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function players(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CSGO\Endpoint\Players($format), $fetch);
    }
    /**
    * Player
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>100000576</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CSGO\Model\Player|\Sportsdata\API\CSGO\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function player(string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CSGO\Endpoint\Player($playerid, $format), $fetch);
    }
    /**
    * Players by Team
    *
    * @param string $teamid Unique FantasyData Team ID. 
    Example:<code>100000001</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CSGO\Model\Player[]|\Sportsdata\API\CSGO\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playersByTeam(string $teamid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CSGO\Endpoint\PlayersByTeam($teamid, $format), $fetch);
    }
    /**
     * Competition Fixtures (League Details)
     *
     * @param string $competitionid A CS:GO competition/league unique CompetitionId. Possible values include: <code>100000009</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CSGO\Model\CompetitionDetail|\Sportsdata\API\CSGO\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function competitionFixturesLeagueDetails(string $competitionid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CSGO\Endpoint\CompetitionFixturesLeagueDetails($competitionid, $format), $fetch);
    }
    /**
    * Memberships by Team (Active)
    *
    * @param string $teamid Unique FantasyData Team ID. 
    Example:<code>100000001</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CSGO\Model\Membership[]|\Sportsdata\API\CSGO\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function membershipsByTeamActive(string $teamid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CSGO\Endpoint\MembershipsByTeamActive($teamid, $format), $fetch);
    }
    /**
    * Memberships by Team (Historical)
    *
    * @param string $teamid Unique FantasyData Team ID. 
    Example:<code>100000001</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CSGO\Model\Membership[]|\Sportsdata\API\CSGO\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function membershipsByTeamHistorical(string $teamid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CSGO\Endpoint\MembershipsByTeamHistorical($teamid, $format), $fetch);
    }
    /**
     * Memberships (Active)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CSGO\Model\Membership[]|\Sportsdata\API\CSGO\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function membershipsActive(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CSGO\Endpoint\MembershipsActive($format), $fetch);
    }
    /**
     * Memberships (Historical)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CSGO\Model\Membership[]|\Sportsdata\API\CSGO\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function membershipsHistorical(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CSGO\Endpoint\MembershipsHistorical($format), $fetch);
    }
    /**
    * Schedule
    *
    * @param string $roundid Unique FantasyData Round ID. RoundIDs can be found in the Competitions and Competition Details endpoints. 
    Example: <code>100000138</code>, etc
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CSGO\Model\Standing[]|\Sportsdata\API\CSGO\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function standings(string $roundid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CSGO\Endpoint\Standings($roundid, $format), $fetch);
    }
    /**
    * Box Scores by Date
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2018-01-13</code>, <code>2018-06-13</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CSGO\Model\BoxScore[]|\Sportsdata\API\CSGO\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function boxScoresByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CSGO\Endpoint\BoxScoresByDate($date, $format), $fetch);
    }
    /**
     * Box Scores by Date
     *
     * @param string $gameid Unique GameId for the desired box scores. Examples: <code>100000091</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CSGO\Model\BoxScore[]|\Sportsdata\API\CSGO\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function boxScore(string $gameid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CSGO\Endpoint\BoxScore($gameid, $format), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.sportsdata.io/v3/csgo');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Sportsdata\API\CSGO\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}