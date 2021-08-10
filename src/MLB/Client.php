<?php

namespace Sportsdata\API\MLB;

class Client extends \Sportsdata\API\MLB\Runtime\Client\Client
{
    /**
     * 
     *
     * @param string $gameid The GameID of an MLB game.  GameIDs can be found in the Games API.  Valid entries are <code>14620</code> or <code>16905</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\PlayByPlay|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playByPlay(string $gameid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PlayByPlay($gameid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $minutes Only returns plays that have changed in the last X minutes.  You specify how many minutes in time to go back.  Valid entries are:
    <code>1</code>, <code>2</code> ... <code>all</code>.
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-JUL-31</code>, <code>2017-SEP-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\PlayByPlay[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playByPlayDelta(string $minutes, string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PlayByPlayDelta($minutes, $date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-JUL-31</code>, <code>2017-SEP-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\PlayerGameProjection[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function projectedPlayerGameStatsByDateWInjuriesLineupsDfsSalaries(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\ProjectedPlayerGameStatsByDateWInjuriesLineupsDfsSalaries($date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>10000507</code>.
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-JUL-31</code>, <code>2017-SEP-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\PlayerGameProjection[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function projectedPlayerGameStatsByPlayerWInjuriesLineupsDfsSalaries(string $playerid, string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\ProjectedPlayerGameStatsByPlayerWInjuriesLineupsDfsSalaries($playerid, $date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season Year of the season.
    <br>Examples: <code>2017</code>, <code>2018</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\PlayerSeasonProjection[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function projectedPlayerSeasonStatsWithAdp(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\ProjectedPlayerSeasonStatsWithAdp($season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the slates.
    <br>Examples: <code>2017-JUL-31</code>, <code>2017-SEP-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\DfsSlate[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function dfsSlatesByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\DfsSlatesByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\Article[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function rotoballerArticles(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\RotoballerArticles($format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the news.
    <br>Examples: <code>2017-JUL-31</code>, <code>2017-SEP-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\Article[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function rotoballerArticlesByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\RotoballerArticlesByDate($date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>10000507</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\Article[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function rotoballerArticlesByPlayer(string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\RotoballerArticlesByPlayer($playerid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\News[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function premiumNews(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PremiumNews($format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>10000507</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\News[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function premiumNewsByPlayer(string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PremiumNewsByPlayer($playerid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the news.
    <br>Examples: <code>2017-JUL-31</code>, <code>2017-SEP-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\News[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function premiumNewsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PremiumNewsByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\Team[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function teamsActive(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\TeamsActive($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\Stadium[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function stadiums(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\Stadiums($format), $fetch);
    }
    /**
     * 
     *
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2018</code>, <code>2018PRE</code>, <code>2018POST</code>, <code>2018STAR</code>, <code>2019</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\Game[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function schedules(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\Schedules($season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-JUL-31</code>, <code>2017-SEP-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\Game[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function gamesByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\GamesByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\Player[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playerDetailsByActive(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PlayerDetailsByActive($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\Player[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playerDetailsByFreeAgents(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PlayerDetailsByFreeAgents($format), $fetch);
    }
    /**
    * 
    *
    * @param string $team The abbreviation of the requested team.
    <br>Examples: <code>SF</code>, <code>NYY</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\Player[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playersByTeam(string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PlayersByTeam($team, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-JUL-31</code>, <code>2017-SEP-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\TeamGame[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function teamGameStatsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\TeamGameStatsByDate($date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season Year of the season.
    <br>Examples: <code>2017</code>, <code>2018</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\TeamSeason[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function teamSeasonStats(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\TeamSeasonStats($season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the news.
    <br>Examples: <code>2017-JUL-31</code>, <code>2017-SEP-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\News[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function newsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\NewsByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\News[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function news(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\News($format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>10000507</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\News[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function newsByPlayer(string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\NewsByPlayer($playerid, $format), $fetch);
    }
    /**
     * Returns <code>true</code> if there is at least one game being played at the time of the request or <code>false</code> if there are none.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function areGamesInProgress(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\AreGamesInProgress($format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>10000507</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\Player|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerDetailsByPlayer(string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PlayerDetailsByPlayer($playerid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\Season|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function currentSeason(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\CurrentSeason($format), $fetch);
    }
    /**
    * 
    *
    * @param string $season Year of the season.
    <br>Examples: <code>2017</code>, <code>2018</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\Standing[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function standings(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\Standings($season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\Team[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function teamsAll(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\TeamsAll($format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-JUL-31</code>, <code>2017-SEP-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\PlayerGame[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerGameStatsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PlayerGameStatsByDate($date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season Year of the season.
    <br>Examples: <code>2017</code>, <code>2018</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\PlayerSeason[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerSeasonStats(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PlayerSeasonStats($season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $team The abbreviation of the requested team.
    <br>Examples: <code>SF</code>, <code>NYY</code>.
    * @param string $season Year of the season.
    <br>Examples: <code>2017</code>, <code>2018</code>.
    
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\PlayerSeason[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerSeasonStatsByTeam(string $team, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PlayerSeasonStatsByTeam($team, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-JUL-31</code>, <code>2017-SEP-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\BoxScore[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function boxScoresByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\BoxScoresByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $gameid The GameID of an MLB game.  GameIDs can be found in the Games API.  Valid entries are <code>14620</code> or <code>16905</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\BoxScore|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function boxScore(string $gameid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\BoxScore($gameid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $minutes Only returns player statistics that have changed in the last X minutes.  You specify how many minutes in time to go back. Valid entries are:
    <code>1</code>, <code>2</code> ... <code>all</code>.
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-JUL-31</code>, <code>2017-SEP-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\BoxScore[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function boxScoresByDateDelta(string $minutes, string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\BoxScoresByDateDelta($minutes, $date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>10000507</code>.
    * @param string $season Year of the season.
    <br>Examples: <code>2017</code>, <code>2018</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\PlayerSeason|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerSeasonStatsByPlayer(string $playerid, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PlayerSeasonStatsByPlayer($playerid, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>10000507</code>.
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-JUL-31</code>, <code>2017-SEP-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\PlayerGame|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerGameStatsByPlayer(string $playerid, string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PlayerGameStatsByPlayer($playerid, $date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season Year of the season.
    <br>Examples: <code>2017</code>, <code>2018</code>.
    * @param string $split The desired split of stats. Currently, we support vs. Left/Right/Switch handed pitchers/hitters. Possible values are: <code>L</code>, <code>R</code> and <code>S</code>
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\PlayerSeason[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerSeasonSplitStats(string $season, string $split = 'L', string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PlayerSeasonSplitStats($season, $split, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $pitcherid Unique FantasyData Player ID.
    Example:<code>10000618</code>.
    * @param string $hitterid Unique FantasyData Player ID.
    Example:<code>10000031</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\PlayerSeason[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function batterVsPitcherStats(string $pitcherid, string $hitterid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\BatterVsPitcherStats($pitcherid, $hitterid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season Year of the season.
    <br>Examples: <code>2017</code>, <code>2018</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\PlayerSeason[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerSeasonStatsSplitByTeam(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PlayerSeasonStatsSplitByTeam($season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season Year of the season.
    <br>Examples: <code>2017</code>, <code>2018</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\PlayerSeason[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerSeasonHomeStats(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PlayerSeasonHomeStats($season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season Year of the season.
    <br>Examples: <code>2017</code>, <code>2018</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\PlayerSeason[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerSeasonAwayStats(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PlayerSeasonAwayStats($season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $team The abbreviation of the requested team.
    <br>Examples: <code>SF</code>, <code>NYY</code>.
    * @param string $gameid The GameID of an MLB game.  GameIDs can be found in the Games API.  Valid entries are <code>14620</code> or <code>16905</code>
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\PlayerSeason[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function teamHittingVsStartingPitcher(string $team, string $gameid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\TeamHittingVsStartingPitcher($team, $gameid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>10001365</code>.
    * @param string $season Season to get games from. Example <code>2019POST</code>, <code>2020</code>
    * @param string $numberofgames How many games to return. Example <code>all</code>, <code>10</code>, <code>25</code>
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\MLB\Model\PlayerGame[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerGameLogsBySeason(string $playerid, string $season, string $numberofgames, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PlayerGameLogsBySeason($playerid, $season, $numberofgames, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $date The date of the game(s). <br>Examples: <code>2018-06-20</code>, <code>2018-06-23</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\GameInfo[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function preGameOddsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PreGameOddsByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $gameid The GameID of an MLB game.  GameIDs can be found in the Games API.  Valid entries are <code>51735</code> or <code>51745</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\GameInfo[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function preGameOddsLineMovement(string $gameid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PreGameOddsLineMovement($gameid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $date The date of the game(s). <br>Examples: <code>2018-06-20</code>, <code>2018-06-23</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\GameInfo[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function inGameOddsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\InGameOddsByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $gameid The GameID of an MLB game.  GameIDs can be found in the Games API.  Valid entries are <code>51735</code> or <code>51745</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\GameInfo[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function inGameOddsLineMovement(string $gameid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\InGameOddsLineMovement($gameid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $date The date of the game(s). <br>Examples: <code>2018-06-20</code>, <code>2018-06-23</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\PlayerProp[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playerPropsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PlayerPropsByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $team The abbreviation of the requested team. <br> Examples: <code>PHI</code>, <code>MIN</code>, <code>DET</code>, etc.
     * @param string $date The date of the game(s). <br>Examples: <code>2018-06-20</code>, <code>2018-06-23</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\PlayerProp[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playerPropsByTeam(string $team, string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PlayerPropsByTeam($team, $date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $playerid Unique FantasyData Player ID. Example:<code>10000507</code>
     * @param string $date The date of the game(s). <br>Examples: <code>2018-06-20</code>, <code>2018-06-23</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\PlayerProp[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playerPropsByPlayer(string $playerid, string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\PlayerPropsByPlayer($playerid, $date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $date The date of the game(s). <br>Examples: <code>2018-06-20</code>, <code>2018-06-23</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\GameInfo[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function alternateMarketPreGameOddsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\AlternateMarketPreGameOddsByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $gameid The GameID of an MLB game.  GameIDs can be found in the Games API.  Valid entries are <code>51735</code> or <code>51745</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\GameInfo[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function alternateMarketPreGameOddsLineMovement(string $gameid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\AlternateMarketPreGameOddsLineMovement($gameid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $team The abbreviation of the requested team. <br> Examples: <code>PHI</code>, <code>MIN</code>, <code>DET</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\TeamTrends|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingTrendsByTeam(string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\BettingTrendsByTeam($team, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $opponent The abbreviation of the requested opponent. <br> Examples: <code>PHI</code>, <code>MIN</code>, <code>DET</code>, etc.
     * @param string $team The abbreviation of the requested team. <br> Examples: <code>PHI</code>, <code>MIN</code>, <code>DET</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\MatchupTrends|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingTrendsByMatchup(string $opponent, string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\BettingTrendsByMatchup($opponent, $team, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $date The date of the game(s). <br>Examples: <code>2020-08-20</code>, <code>2020-08-23</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\BettingEvent[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingEventsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\BettingEventsByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2020</code>, <code>2020PRE</code>, <code>2020POST</code>, <code>2020STAR</code>, <code>2021</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\BettingEvent[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingEventsBySeason(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\BettingEventsBySeason($season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2020</code>, <code>2020PRE</code>, <code>2020POST</code>, <code>2020STAR</code>, <code>2021</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\BettingEvent[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingFuturesBySeason(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\BettingFuturesBySeason($season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $date The date of the game(s). <br>Examples: <code>2020-08-20</code>, <code>2020-08-23</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\BettingEvent[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingPlayerPropsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\BettingPlayerPropsByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $eventId The EventId of the desired event/game for which to pull all betting markets (includes outcomes/bets).
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\BettingMarket[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingMarketsByEvent(string $eventId, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\BettingMarketsByEvent($eventId, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $marketId The MarketId of the desired market for which to pull all outcomes/bets.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\BettingMarket|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingMarket(string $marketId, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\BettingMarket($marketId, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $marketTypeID The Market Type ID of the desired MarketTypes to pull. Some common types include: <code>1</code> for Game Lines, <code>2</code> for Player Props, <code>3</code> for Team Props, <code>6</code> for Game Props
     * @param string $eventId The EventId of the desired event/game for which to pull all betting markets (includes outcomes/bets).
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\BettingMarket[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingMarketsByMarketType(string $marketTypeID, string $eventId, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\BettingMarketsByMarketType($marketTypeID, $eventId, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $gameID The GameID of the desired game for which to pull all betting markets (includes outcomes/bets).
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\BettingMarket[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingMarketsByGameid(string $gameID, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\BettingMarketsByGameid($gameID, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\BettingEntityMetadata[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingMetadata(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\BettingMetadata($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\Sportsbook[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function sportsbooksActive(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\SportsbooksActive($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MLB\Model\Headshot[]|\Sportsdata\API\MLB\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function headshots(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MLB\Endpoint\Headshots($format), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.sportsdata.io/v3/mlb');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Sportsdata\API\MLB\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}