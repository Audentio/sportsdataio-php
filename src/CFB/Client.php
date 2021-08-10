<?php

namespace Sportsdata\API\CFB;

class Client extends \Sportsdata\API\CFB\Runtime\Client\Client
{
    /**
     * Returns <code>true</code> if there is at least one game being played at the time of the request or <code>false</code> if there are none.
     *
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function areGamesInProgress(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\AreGamesInProgress($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function currentSeason(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\CurrentSeason($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function currentWeek(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\CurrentWeek($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\Conference[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function conferenceHierarchyWithTeams(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\ConferenceHierarchyWithTeams($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\Team[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function teams(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\Teams($format), $fetch);
    }
    /**
     * 
     *
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2018</code>, <code>2018PRE</code>, <code>2018POST</code>, <code>2018STAR</code>, <code>2019</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\Game[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function schedules(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\Schedules($season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date 
             The date of the game(s).
             <br>Examples: <code>2016-SEP-01</code>, <code>2017-SEP-10</code>.
           
    * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CFB\Model\Game[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function gamesByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\GamesByDate($date, $format), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CFB\Model\Game[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function gamesByWeek(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\GamesByWeek($week, $season, $format), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CFB\Model\TeamGame[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function teamGameStatsByWeek(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\TeamGameStatsByWeek($week, $season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2017</code>, <code>2017POST</code>, <code>2018</code>.
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\TeamSeason[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function teamSeasonStatsStandings(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\TeamSeasonStatsStandings($season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\Stadium[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function stadiums(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\Stadiums($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function currentSeasontype(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\CurrentSeasontype($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\Season|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function currentSeasonDetails(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\CurrentSeasonDetails($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\Player[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playerDetailsByActive(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\PlayerDetailsByActive($format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid 
             Unique FantasyData Player ID.
             Example:<code>50002016</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CFB\Model\Player[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerDetailsByPlayer(string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\PlayerDetailsByPlayer($playerid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $team 
             The abbreviation of the requested team.
             <br>Examples: <code>SF</code>, <code>NYY</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CFB\Model\Player[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerDetailsByTeam(string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\PlayerDetailsByTeam($team, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $gameid The GameID of an CFB game.  GameIDs can be found in the Games API.  Valid entries are <code>1148</code> or <code>1149</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\BoxScore[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function boxScore(string $gameid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\BoxScore($gameid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date 
             The date of the game(s).
             <br>Examples: <code>2016-JAN-01</code>, <code>2017-JAN-01</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CFB\Model\BoxScore[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function boxScoresByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\BoxScoresByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2017</code>, <code>2017POST</code>, <code>2018</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\PlayerSeason[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playerSeasonStats(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\PlayerSeasonStats($season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $team The abbreviation of the requested team.
             <br>Examples: <code>SF</code>, <code>NYY</code>.
           
    * @param string $season Year of the season (with optional season type).<br>Examples: <code>2017</code>, <code>2017POST</code>, <code>2018</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CFB\Model\PlayerSeason[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerSeasonStatsByTeam(string $team, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\PlayerSeasonStatsByTeam($team, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
             Example:<code>50002016</code>.
           
    * @param string $season Year of the season (with optional season type).<br>Examples: <code>2017</code>, <code>2017POST</code>, <code>2018</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CFB\Model\PlayerSeason[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerSeasonStatsByPlayer(string $playerid, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\PlayerSeasonStatsByPlayer($playerid, $season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $week The week of the game(s).<br> Examples: <code>2</code>, <code>3</code>, etc.
     * @param string $season Year of the season.<br> Examples: <code>2017</code>, <code>2018</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\BoxScore[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function boxScoresByWeek(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\BoxScoresByWeek($week, $season, $format), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CFB\Model\BoxScore[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function boxScoresByWeekDelta(string $week, string $season, string $minutes, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\BoxScoresByWeekDelta($week, $season, $minutes, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $week 
             The week of the game(s).
             <br>Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc.
           
    * @param string $season 
             Year of the season.
             <br>Examples: <code>2015</code>, <code>2016</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CFB\Model\PlayerGame[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerGameStatsByWeek(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\PlayerGameStatsByWeek($week, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $week 
             The week of the game(s).
             <br>Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc.
           
    * @param string $season 
             Year of the season.
             <br>Examples: <code>2015</code>, <code>2016</code>.
           
    * @param string $playerid 
             Unique FantasyData Player ID.
             Example:<code>50002016</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CFB\Model\PlayerGame[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerGameStatsByPlayer(string $week, string $season, string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\PlayerGameStatsByPlayer($week, $season, $playerid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>50036283</code>.
    * @param string $season Season to get games from. Example <code>2019POST</code>, <code>2020</code>
    * @param string $numberofgames How many games to return. Example <code>all</code>, <code>10</code>, <code>25</code>
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\CFB\Model\PlayerGame[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerGameLogsBySeason(string $playerid, string $season, string $numberofgames, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\PlayerGameLogsBySeason($playerid, $season, $numberofgames, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $week The week of the game(s). <br>Examples: <code>1</code>, <code>2</code>, etc.
     * @param string $season Year of the season, with optional season type. <br>Examples: <code>2018</code>, <code>2018POST</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\GameInfo[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function preGameOddsByWeek(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\PreGameOddsByWeek($week, $season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $gameid The GameID of an CFB game.  GameIDs can be found in the Games API.  Valid entries are <code>8487</code> or <code>8657</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\GameInfo[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function preGameOddsLineMovement(string $gameid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\PreGameOddsLineMovement($gameid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $week The week of the game(s). <br>Examples: <code>1</code>, <code>2</code>, etc.
     * @param string $season Year of the season, with optional season type. <br>Examples: <code>2018</code>, <code>2018POST</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\GameInfo[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function inGameOddsByWeek(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\InGameOddsByWeek($week, $season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $gameid The GameID of an CFB game.  GameIDs can be found in the Games API.  Valid entries are <code>8487</code> or <code>8657</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\GameInfo[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function inGameOddsLineMovement(string $gameid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\InGameOddsLineMovement($gameid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $week The week of the game(s). <br>Examples: <code>1</code>, <code>2</code>, etc.
     * @param string $season Year of the season, with optional season type. <br>Examples: <code>2018</code>, <code>2018POST</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\GameInfo[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function alternateMarketPreGameOddsByWeek(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\AlternateMarketPreGameOddsByWeek($week, $season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $gameid The GameID of an CFB game.  GameIDs can be found in the Games API.  Valid entries are <code>8487</code> or <code>8657</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\GameInfo[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function alternateMarketPreGameOddsLineMovement(string $gameid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\AlternateMarketPreGameOddsLineMovement($gameid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $team The abbreviation of the requested team. <br> Examples: <code>MIA</code>, <code>ND</code>, <code>PITT</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\TeamTrends|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingTrendsByTeam(string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\BettingTrendsByTeam($team, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $opponent The abbreviation of the requested opponent. <br> Examples: <code>MIA</code>, <code>ND</code>, <code>PITT</code>, etc.
     * @param string $team The abbreviation of the requested team. <br> Examples: <code>MIA</code>, <code>ND</code>, <code>PITT</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\MatchupTrends|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingTrendsByMatchup(string $opponent, string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\BettingTrendsByMatchup($opponent, $team, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $date The date of the game(s). <br>Examples: <code>2020-10-17</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\BettingEvent[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingEventsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\BettingEventsByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $season Year of the season<br>Examples: <code>2020</code>, <code>2021</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\BettingEvent[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingEventsBySeason(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\BettingEventsBySeason($season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $season Year of the season<br>Examples: <code>2020</code>, <code>2021</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\BettingEvent[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingFuturesBySeason(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\BettingFuturesBySeason($season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $marketId The MarketId of the desired market for which to pull all outcomes/bets.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\BettingMarket|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingMarket(string $marketId, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\BettingMarket($marketId, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $eventId The EventId of the desired event/game for which to pull all betting markets (includes outcomes/bets).
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\BettingMarket[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingMarketsByEvent(string $eventId, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\BettingMarketsByEvent($eventId, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $marketTypeID The Market Type ID of the desired MarketTypes to pull. Some common types include: <code>1</code> for Game Lines, <code>2</code> for Player Props, <code>3</code> for Team Props, <code>6</code> for Game Props
     * @param string $eventId The EventId of the desired event/game for which to pull all betting markets (includes outcomes/bets).
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\BettingMarket[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingMarketsByMarketType(string $marketTypeID, string $eventId, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\BettingMarketsByMarketType($marketTypeID, $eventId, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $gameid The GameID of the desired game for which to pull all betting markets (includes outcomes/bets).
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\BettingMarket[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingMarketsByGameid(string $gameid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\BettingMarketsByGameid($gameid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $date The date of the game(s). <br>Examples: <code>2020-10-17</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\BettingEvent[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingPlayerPropsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\BettingPlayerPropsByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\BettingEntityMetadata[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingMetadata(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\BettingMetadata($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\CFB\Model\Sportsbook[]|\Sportsdata\API\CFB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function sportsbooksActive(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CFB\Endpoint\SportsbooksActive($format), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.sportsdata.io/v3/cfb');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Sportsdata\API\CFB\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}