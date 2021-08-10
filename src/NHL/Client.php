<?php

namespace Sportsdata\API\NHL;

class Client extends \Sportsdata\API\NHL\Runtime\Client\Client
{
    /**
     * 
     *
     * @param string $gameid The GameID of an MLB game.  GameIDs can be found in the Games API.  Valid entries are <code>14620</code> or <code>16905</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\PlayByPlay|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playByPlay(string $gameid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\PlayByPlay($gameid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $minutes Only returns plays that have changed in the last X minutes.  You specify how many minutes in time to go back.  Valid entries are:
    <code>1</code>, <code>2</code> ... <code>all</code>.
    * @param string $date The date of the game(s).
    <br>Examples: <code>2018-JAN-31</code>, <code>2017-OCT-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NHL\Model\PlayByPlay[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playByPlayDelta(string $minutes, string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\PlayByPlayDelta($minutes, $date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2018-JAN-31</code>, <code>2017-OCT-01</code>.
    
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NHL\Model\PlayerGameProjection[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function projectedPlayerGameStatsByDateWInjuriesDfsSalaries(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\ProjectedPlayerGameStatsByDateWInjuriesDfsSalaries($date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>30000378</code>.
    * @param string $date The date of the game(s).
    <br>Examples: <code>2018-JAN-31</code>, <code>2017-OCT-01</code>.
    
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NHL\Model\PlayerGameProjection|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function projectedPlayerGameStatsByPlayerWInjuriesDfsSalaries(string $playerid, string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\ProjectedPlayerGameStatsByPlayerWInjuriesDfsSalaries($playerid, $date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-DEC-01</code>, <code>2018-FEB-15</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NHL\Model\DfsSlate[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function dfsSlatesByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\DfsSlatesByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\Player[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playerDetailsByActive(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\PlayerDetailsByActive($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\Team[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function teamsActive(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\TeamsActive($format), $fetch);
    }
    /**
     * Returns <code>true</code> if there is at least one game being played at the time of the request or <code>false</code> if there are none.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function areGamesInProgress(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\AreGamesInProgress($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\Player[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playerDetailsByFreeAgent(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\PlayerDetailsByFreeAgent($format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2018-JAN-31</code>, <code>2017-OCT-01</code>.
    
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NHL\Model\Game[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function gamesByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\GamesByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2018</code>, <code>2018PRE</code>, <code>2018POST</code>, <code>2018STAR</code>, <code>2019</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\Game[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function schedules(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\Schedules($season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\News[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function news(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\News($format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the news.
    <br>Examples: <code>2018-JAN-31</code>, <code>2017-OCT-01</code>.
    
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NHL\Model\News[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function newsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\NewsByDate($date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>10000507</code>.
    
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NHL\Model\News[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function newsByPlayer(string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\NewsByPlayer($playerid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $team The abbreviation of the requested team.
    <br>Examples: <code>SF</code>, <code>NYY</code>.
    
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NHL\Model\Player[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playersByTeam(string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\PlayersByTeam($team, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\Stadium[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function stadiums(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\Stadiums($format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2018-JAN-31</code>, <code>2017-OCT-01</code>.
    
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NHL\Model\TeamGame[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function teamGameStatsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\TeamGameStatsByDate($date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season Year of the season.
    <br>Examples: <code>2016</code>, <code>2017</code>.
    
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NHL\Model\TeamSeason[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function teamSeasonStats(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\TeamSeasonStats($season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>30000007</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NHL\Model\Player|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerDetailsByPlayer(string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\PlayerDetailsByPlayer($playerid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\Season|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function currentSeason(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\CurrentSeason($format), $fetch);
    }
    /**
    * 
    *
    * @param string $season Year of the season.
    <br>Examples: <code>2016</code>, <code>2017</code>.
    
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NHL\Model\Standing[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function standings(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\Standings($season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\Team[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function teamsAll(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\TeamsAll($format), $fetch);
    }
    /**
     * 
     *
     * @param string $gameid The GameID of an NHL game.  GameIDs can be found in the Games API.  Valid entries are <code>14620</code> or <code>16905</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\BoxScore|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function boxScore(string $gameid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\BoxScore($gameid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-OCT-31</code>, <code>2018-FEB-15</code>.
    
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NHL\Model\BoxScore[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function boxScoresByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\BoxScoresByDate($date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $minutes Only returns player statistics that have changed in the last X minutes.  You specify how many minutes in time to go back.  Valid entries are:
    <code>1</code> or <code>2</code>.
    
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-OCT-31</code>, <code>2018-FEB-15</code>.
    
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NHL\Model\BoxScore[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function boxScoresByDateDelta(string $minutes, string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\BoxScoresByDateDelta($minutes, $date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-OCT-31</code>, <code>2018-FEB-15</code>.
    
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NHL\Model\PlayerGame[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerGameStatsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\PlayerGameStatsByDate($date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season Year of the season.
    <br>Examples: <code>2016</code>, <code>2017</code>.
    
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NHL\Model\PlayerSeason[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerSeasonStats(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\PlayerSeasonStats($season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $team The abbreviation of the requested team.
    <br>Examples: <code>SF</code>, <code>NYY</code>.
    
    * @param string $season Year of the season.
    <br>Examples: <code>2016</code>, <code>2017</code>.
    
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NHL\Model\PlayerSeason[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerSeasonStatsByTeam(string $team, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\PlayerSeasonStatsByTeam($team, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>30000378</code>.
    * @param string $season Year of the season.
    <br>Examples: <code>2016</code>, <code>2017</code>.
    
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NHL\Model\PlayerSeason|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerSeasonStatsByPlayer(string $playerid, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\PlayerSeasonStatsByPlayer($playerid, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>30000378</code>.
    * @param string $date The date of the game(s).
    
    <br>Examples: <code>2018-JAN-31</code>, <code>2017-OCT-01</code>.
    
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NHL\Model\PlayerGame|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerGameStatsByPlayer(string $playerid, string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\PlayerGameStatsByPlayer($playerid, $date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season Year of the season.
    <br>Examples: <code>2016</code>, <code>2017</code>.
    
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NHL\Model\TeamSeason[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function teamStatsAllowedByPosition(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\TeamStatsAllowedByPosition($season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season Year of the season.
    <br>Examples: <code>2016</code>, <code>2017</code>.
    
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NHL\Model\TeamLine[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function lineCombinationsBySeason(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\LineCombinationsBySeason($season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>30000651</code>.
    * @param string $season Season to get games from. Example <code>2019POST</code>, <code>2020</code>
    * @param string $numberofgames How many games to return. Example <code>all</code>, <code>10</code>, <code>25</code>
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NHL\Model\PlayerGame[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerGameLogsBySeason(string $playerid, string $season, string $numberofgames, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\PlayerGameLogsBySeason($playerid, $season, $numberofgames, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $date The date of the game(s). <br>Examples: <code>2018-11-20</code>, <code>2018-11-23</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\GameInfo[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function preGameOddsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\PreGameOddsByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $gameid The GameID of an NHL game.  GameIDs can be found in the Games API.  Valid entries are <code>13096</code> or <code>13110</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\GameInfo[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function preGameOddsLineMovement(string $gameid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\PreGameOddsLineMovement($gameid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $date The date of the game(s). <br>Examples: <code>2018-11-20</code>, <code>2018-11-23</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\GameInfo[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function inGameOddsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\InGameOddsByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $gameid The GameID of an NHL game.  GameIDs can be found in the Games API.  Valid entries are <code>13096</code> or <code>13110</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\GameInfo[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function inGameOddsLineMovement(string $gameid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\InGameOddsLineMovement($gameid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $date The date of the game(s). <br>Examples: <code>2018-11-20</code>, <code>2018-11-23</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\PlayerProp[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playerPropsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\PlayerPropsByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $team The abbreviation of the requested team. <br> Examples: <code>PHI</code>, <code>MIN</code>, <code>DET</code>, etc.
     * @param string $date The date of the game(s). <br>Examples: <code>2018-11-20</code>, <code>2018-11-23</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\PlayerProp[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playerPropsByTeam(string $team, string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\PlayerPropsByTeam($team, $date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $playerid Unique FantasyData Player ID. Example:<code>30000378</code>
     * @param string $date The date of the game(s). <br>Examples: <code>2018-11-20</code>, <code>2018-11-23</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\PlayerProp[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playerPropsByPlayer(string $playerid, string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\PlayerPropsByPlayer($playerid, $date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $date The date of the game(s). <br>Examples: <code>2018-11-20</code>, <code>2018-11-23</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\GameInfo[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function alternateMarketPreGameOddsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\AlternateMarketPreGameOddsByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $gameid The GameID of an NHL game.  GameIDs can be found in the Games API.  Valid entries are <code>13096</code> or <code>13110</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\GameInfo[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function alternateMarketPreGameOddsLineMovement(string $gameid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\AlternateMarketPreGameOddsLineMovement($gameid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $team The abbreviation of the requested team. <br> Examples: <code>PHI</code>, <code>MIN</code>, <code>DET</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\TeamTrends|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingTrendsByTeam(string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\BettingTrendsByTeam($team, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $opponent The abbreviation of the requested opponent. <br> Examples: <code>PHI</code>, <code>MIN</code>, <code>DET</code>, etc.
     * @param string $team The abbreviation of the requested team. <br> Examples: <code>PHI</code>, <code>MIN</code>, <code>DET</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\MatchupTrends|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingTrendsByMatchup(string $opponent, string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\BettingTrendsByMatchup($opponent, $team, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $date The date of the game(s). <br>Examples: <code>2020-02-15</code>, <code>2020-02-23</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\BettingEvent[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingEventsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\BettingEventsByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $eventId The EventId of the desired event/game for which to pull all betting markets (includes outcomes/bets). Valid entries include: <code>134</code>, <code>155</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\BettingMarket[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingMarketsByEvent(string $eventId, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\BettingMarketsByEvent($eventId, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2020</code>, <code>2020PRE</code>, <code>2020POST</code>, <code>2020STAR</code>, <code>2021</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\BettingEvent[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingEventsBySeason(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\BettingEventsBySeason($season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $marketId The MarketId of the desired market for which to pull all outcomes/bets. Valid entries include: <code>421</code>, <code>1041</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\BettingMarket|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingMarket(string $marketId, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\BettingMarket($marketId, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $marketTypeID The Market Type ID of the desired MarketTypes to pull. Some common types include:
    <code>1</code> for `Game Lines`
    <code>2</code> for `Player Props`
    <code>3</code> for `Team Props`
    <code>6</code> for `Game Props`
    * @param string $eventId The EventId of the desired event/game for which to pull all betting markets (includes outcomes/bets). Valid entries include: <code>134</code>, <code>155</code>, etc.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NHL\Model\BettingMarket[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function bettingMarketsByMarketType(string $marketTypeID, string $eventId, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\BettingMarketsByMarketType($marketTypeID, $eventId, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $season Year of the season <br>Examples: <code>2020</code>, <code>2021</code>, etc
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\BettingEvent[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingFuturesBySeason(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\BettingFuturesBySeason($season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $date The date of the game(s). <br>Examples: <code>2020-02-15</code>, <code>2020-02-23</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\BettingEvent[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingPlayerPropsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\BettingPlayerPropsByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $gameID The GameID of the desired game for which to pull all betting markets (includes outcomes/bets). Valid entries include: <code>14814</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\BettingMarket[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingMarketsByGameid(string $gameID, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\BettingMarketsByGameid($gameID, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\BettingEntityMetadata[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingMetadata(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\BettingMetadata($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\Sportsbook[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function sportsbooksActive(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\SportsbooksActive($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NHL\Model\Headshot[]|\Sportsdata\API\NHL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function headshots(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NHL\Endpoint\Headshots($format), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.sportsdata.io/v3/nhl');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Sportsdata\API\NHL\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}