<?php

namespace Sportsdata\API\NFL;

class Client extends \Sportsdata\API\NFL\Runtime\Client\Client
{
    /**
    * 
    *
    * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $hometeam Abbreviation of the home team. Example: <code>WAS</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayByPlay|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playByPlay(string $week, string $season, string $hometeam, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayByPlay($week, $season, $hometeam, $format), $fetch);
    }
    /**
     * Gets simulated live play-by-play of NFL games, covering the Conference Championship games on January 21, 2018.
     *
     * @param string $numberofplays The number of plays to progress in this NFL live game simulation. Example entries are <code>0</code>, <code>1</code>, <code>2</code>, <code>3</code>, <code>150</code>, <code>200</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\PlayByPlay[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playByPlaySimulation(string $numberofplays, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayByPlaySimulation($numberofplays, $format), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayByPlay[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playByPlayDelta(string $week, string $season, string $minutes, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayByPlayDelta($week, $season, $minutes, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\FantasyDefenseSeasonProjection[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function projectedFantasyDefenseSeasonStatsWByeWeekAdp(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\ProjectedFantasyDefenseSeasonStatsWByeWeekAdp($season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\FantasyDefenseGameProjection[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function projectedFantasyDefenseGameStatsWDfsSalaries(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\ProjectedFantasyDefenseGameStatsWDfsSalaries($week, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $week 
             Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $playerid Each NFL player has a unique ID assigned by FantasyData. Player IDs can be determined by pulling player related data. Example:<code>14257</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerGameProjection|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function projectedPlayerGameStatsByPlayerWInjuriesLineupsDfsSalaries(string $week, string $season, string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\ProjectedPlayerGameStatsByPlayerWInjuriesLineupsDfsSalaries($week, $season, $playerid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Each NFL player has a unique ID assigned by FantasyData. Player IDs can be determined by pulling player related data. Example:<code>14257</code>.
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerSeasonProjection|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function projectedPlayerSeasonStatsByPlayerWByeWeekAdp(string $playerid, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\ProjectedPlayerSeasonStatsByPlayerWByeWeekAdp($playerid, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerGameProjection[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function projectedPlayerGameStatsByTeamWInjuriesLineupsDfsSalaries(string $week, string $season, string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\ProjectedPlayerGameStatsByTeamWInjuriesLineupsDfsSalaries($week, $season, $team, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerSeasonProjection[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function projectedPlayerSeasonStatsWByeWeekAdp(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\ProjectedPlayerSeasonStatsWByeWeekAdp($season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerSeasonProjection[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function projectedPlayerSeasonStatsByTeamWByeWeekAdp(string $team, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\ProjectedPlayerSeasonStatsByTeamWByeWeekAdp($team, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $week 
             Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerGameProjection[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function projectedPlayerGameStatsByWeekWInjuriesLineupsDfsSalaries(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\ProjectedPlayerGameStatsByWeekWInjuriesLineupsDfsSalaries($week, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the slates.
    <br>Examples: <code>2017-SEP-25</code>, <code>2017-10-31</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\DfsSlate[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function dfsSlatesByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\DfsSlatesByDate($date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\DfsSlate[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function dfsSlatesByWeek(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\DfsSlatesByWeek($week, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $playerid Each NFL player has a unique ID assigned by FantasyData. Player IDs can be determined by pulling player related data. Example:<code>14257</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerGameProjection|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function idpProjectedPlayerGameStatsByPlayerWInjuriesLineupsDfsSalaries(string $week, string $season, string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\IdpProjectedPlayerGameStatsByPlayerWInjuriesLineupsDfsSalaries($week, $season, $playerid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerGameProjection[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function idpProjectedPlayerGameStatsByWeekWInjuriesLineupsDfsSalaries(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\IdpProjectedPlayerGameStatsByWeekWInjuriesLineupsDfsSalaries($week, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerGameProjection[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function idpProjectedPlayerGameStatsByTeamWInjuriesLineupsDfsSalaries(string $week, string $season, string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\IdpProjectedPlayerGameStatsByTeamWInjuriesLineupsDfsSalaries($week, $season, $team, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\Article[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function rotoballerArticles(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\RotoballerArticles($format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>10000507</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\Article[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function rotoballerArticlesByPlayer(string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\RotoballerArticlesByPlayer($playerid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the news.
    <br>Examples: <code>2017-JUL-31</code>, <code>2017-SEP-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\Article[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function rotoballerArticlesByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\RotoballerArticlesByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\News[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function premiumNews(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PremiumNews($format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>10000507</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\News[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function premiumNewsByPlayer(string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PremiumNewsByPlayer($playerid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the news.
    <br>Examples: <code>2017-JUL-31</code>, <code>2017-SEP-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\News[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function premiumNewsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PremiumNewsByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\News[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function premiumNewsByTeam(string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PremiumNewsByTeam($team, $format), $fetch);
    }
    /**
     * Returns <code>true</code> if there is at least one game being played at the time of the request or <code>false</code> if there are none.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function areGamesInProgress(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\AreGamesInProgress($format), $fetch);
    }
    /**
     * Gets all active teams.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\Team[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function teamsActive(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\TeamsActive($format), $fetch);
    }
    /**
    * Get bye weeks for the teams during a specified NFL season. 
    *
    * @param string $season 
             Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\Bye[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function byeWeeks(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\ByeWeeks($season, $format), $fetch);
    }
    /**
     * Year of the current NFL season. This value changes on July 1st. The earliest season for Fantasy data is 2001. The earliest season for Team data is 1985. The earliest season for Fantasy data is 2001. The earliest season for Team data is 1985.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function seasonCurrent(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\SeasonCurrent($format), $fetch);
    }
    /**
     * Number of the current week of the NFL season. This value usually changes on Tuesday nights or Wednesday mornings at midnight ET.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function weekCurrent(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\WeekCurrent($format), $fetch);
    }
    /**
     * Game scores for a specified season.
     *
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2018</code>, <code>2018PRE</code>, <code>2018POST</code>, <code>2018STAR</code>, <code>2019</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\Score[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function scoresBySeason(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\ScoresBySeason($season, $format), $fetch);
    }
    /**
     * Year of the most recently completed season. this value changes immediately after the Super Bowl. The earliest season for Fantasy data is 2001. The earliest season for Team data is 1985.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function seasonLastCompleted(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\SeasonLastCompleted($format), $fetch);
    }
    /**
     * Number of the current week of the NFL season. This value usually changes on Tuesday nights or Wednesday mornings at midnight ET.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function weekLastCompleted(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\WeekLastCompleted($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\News[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function news(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\News($format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Each NFL player has a unique ID assigned by FantasyData. Player IDs can be determined by pulling player related data. Example:<code>14257</code>.
    * @param string $format 
             Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
           
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\News[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function newsByPlayer(string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\NewsByPlayer($playerid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\News[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function newsByTeam(string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\NewsByTeam($team, $format), $fetch);
    }
    /**
     * Game schedule for a specified season.
     *
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2018</code>, <code>2018PRE</code>, <code>2018POST</code>, <code>2018STAR</code>, <code>2019</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\Schedule[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function schedule(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\Schedule($season, $format), $fetch);
    }
    /**
    * Get game scores for a specified week of a season.
    *
    * @param string $week 
             Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season 
             Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\Score[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function scoresByWeek(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\ScoresByWeek($week, $season, $format), $fetch);
    }
    /**
     * This method returns all stadiums.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\Stadium[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function stadiums(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\Stadiums($format), $fetch);
    }
    /**
    * 
    *
    * @param string $season 
             Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\Standing[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function standings(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\Standings($season, $format), $fetch);
    }
    /**
    * List of teams playing in a specified season.
    *
    * @param string $season 
             Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\Team[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function teamsBySeason(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\TeamsBySeason($season, $format), $fetch);
    }
    /**
     * Get detailed information about past, present, and future timeframes.
     *
     * @param string $type The type of timeframes to return.  Valid entries are <code>current</code> or <code>upcoming</code> or <code>completed</code> or <code>recent</code> or <code>all</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\Timeframe[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function timeframes(string $type = 'current', string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\Timeframes($type, $format), $fetch);
    }
    /**
     * Year of the current NFL season, if we are in the mid-season. If we are in the off-season, then year of the next upcoming season. This value changes immediately after the Super Bowl. The earliest season for Fantasy data is 2001. The earliest season for Team data is 1985.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function seasonUpcoming(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\SeasonUpcoming($format), $fetch);
    }
    /**
     * Number of the current week of the NFL season. This value usually changes on Tuesday nights or Wednesday mornings at midnight ET.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function weekUpcoming(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\WeekUpcoming($format), $fetch);
    }
    /**
    * 
    *
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\Game[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function gameStatsBySeasonDeprecatedUseTeamGameStatsInstead(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\GameStatsBySeasonDeprecatedUseTeamGameStatsInstead($season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $week 
             Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season 
             Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\Game[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function gameStatsByWeekDeprecatedUseTeamGameStatsInstead(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\GameStatsByWeekDeprecatedUseTeamGameStatsInstead($week, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $week 
             Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season 
             Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\TeamGame[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function teamGameStats(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\TeamGameStats($week, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season 
             Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\TeamSeason[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function teamSeasonStats(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\TeamSeasonStats($season, $format), $fetch);
    }
    /**
     * Gets all teams, including pro bowl teams.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\Team[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function teamsAll(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\TeamsAll($format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the news.
    <br>Examples: <code>2017-JUL-31</code>, <code>2017-SEP-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\News[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function newsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\NewsByDate($date, $format), $fetch);
    }
    /**
     * Ping NFL API
     *
     * @param string $seconds Number of seconds to sleep before responding
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function xPing(string $seconds, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\XPing($seconds, $format), $fetch);
    }
    /**
     * Gets simulated live scores of NFL games, covering the Conference Championship games on January 21, 2018.
     *
     * @param string $numberofplays The number of plays to progress in this NFL live game simulation. Example entries are <code>0</code>, <code>1</code>, <code>2</code>, <code>3</code>, <code>150</code>, <code>200</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\Score[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function scoresByWeekSimulation(string $numberofplays, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\ScoresByWeekSimulation($numberofplays, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\Player[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playerDetailsByAvailable(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerDetailsByAvailable($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\Player[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playerDetailsByFreeAgents(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerDetailsByFreeAgents($format), $fetch);
    }
    /**
     * 
     *
     * @param string $playerid Each NFL player has a unique ID assigned by FantasyData. Player IDs can be determined by pulling player related data. Example:<code>732</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\PlayerDetail|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playerDetailsByPlayer(string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerDetailsByPlayer($playerid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\PlayerDetail[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playerDetailsByTeam(string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerDetailsByTeam($team, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $season Year of the season.<br>Examples: <code>2018</code>, <code>2019</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\Player[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playerDetailsByRookieDraftYear(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerDetailsByRookieDraftYear($season, $format), $fetch);
    }
    /**
     * Returns full list of NFL Referees
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\Referee[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function referees(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\Referees($format), $fetch);
    }
    /**
     * This method returns box scores for all games that are either in-progress or have been updated within the last 30 minutes.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\BoxScore[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function legacyBoxScoresActive(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\LegacyBoxScoresActive($format), $fetch);
    }
    /**
    * 
    *
    * @param string $week 
             Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season 
             Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $hometeam Abbreviation of the home team. Example: <code>WAS</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\BoxScore|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function legacyBoxScore(string $week, string $season, string $hometeam, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\LegacyBoxScore($week, $season, $hometeam, $format), $fetch);
    }
    /**
    * This method returns all box scores for a given season and week.
    *
    * @param string $week 
             Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season 
             Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\BoxScore[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function legacyBoxScores(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\LegacyBoxScores($week, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date 
             The date of the contest for which you're pulling players
             <code>2014-SEP-21</code>,
             <code>2014-NOV-15</code>, etc
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\DailyFantasyPlayer[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function dailyFantasyPlayers(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\DailyFantasyPlayers($date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $minutes Only returns player statistics that have changed in the last X minutes.  You specify how many minutes in time to go back.  Valid entries are:<br>
             <code>1</code> or <code>2</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\BoxScore[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function legacyBoxScoresDeltaCurrentWeek(string $minutes, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\LegacyBoxScoresDeltaCurrentWeek($minutes, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $minutes 
             Only returns player statistics that have changed in the last X minutes.  You specify how many minutes in time to go back.  Valid entries are:
             <code>1</code> or <code>2</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerGame[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerGameStatsDelta(string $minutes, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerGameStatsDelta($minutes, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $week 
             Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season 
             Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\FantasyDefenseGame[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function fantasyDefenseGameStats(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\FantasyDefenseGameStats($week, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season 
             Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\FantasyDefenseSeason[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function fantasyDefenseSeasonStats(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\FantasyDefenseSeasonStats($season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\BoxScore[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function legacyBoxScoresFinal(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\LegacyBoxScoresFinal($format), $fetch);
    }
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
           
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerGame[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function leagueLeadersByWeek(string $week, string $season, string $column, string $position = 'ALL', string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\LeagueLeadersByWeek($week, $season, $column, $position, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $week 
             Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season 
             Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\Injury[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function injuries(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\Injuries($week, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $week 
             Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season 
             Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\Injury[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function injuriesByTeam(string $week, string $season, string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\InjuriesByTeam($week, $season, $team, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\BoxScore[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function legacyBoxScoresLive(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\LegacyBoxScoresLive($format), $fetch);
    }
    /**
    * 
    *
    * @param string $week 
             Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season 
             Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $playerid Each NFL player has a unique ID assigned by FantasyData. Player IDs can be determined by pulling player related data. Example:<code>732</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerGame|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerGameStatsByPlayer(string $week, string $season, string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerGameStatsByPlayer($week, $season, $playerid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Each NFL player has a unique ID assigned by FantasyData. Player IDs can be determined by pulling player related data. Example:<code>732</code>.
    * @param string $season 
             Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerSeason[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerSeasonStatsByPlayer(string $playerid, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerSeasonStatsByPlayer($playerid, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $week 
             Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season 
             Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerGame[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerGameStatsByTeam(string $week, string $season, string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerGameStatsByTeam($week, $season, $team, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $week 
             Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season 
             Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $minutes Only returns player statistics that have changed in the last X minutes.  You specify how many minutes in time to go back.  Valid entries are:<br>
             <code>1</code> or <code>2</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerGame[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerGameStatsByWeekDelta(string $week, string $season, string $minutes, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerGameStatsByWeekDelta($week, $season, $minutes, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
    * @param string $season 
             Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerSeason[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerSeasonStatsByTeam(string $team, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerSeasonStatsByTeam($team, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season 
             Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $column Response member you would like results sorted by.
    * @param string $position Playerâ€™s position that you would like to filter by.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerSeason[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function leagueLeadersBySeason(string $season, string $column, string $position = 'ALL', string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\LeagueLeadersBySeason($season, $column, $position, $format), $fetch);
    }
    /**
     * This method returns a comprehensive list of draftable fantasy football players, including QB, RB, WR, TE, K and DEF.  Players are sorted by ADP (AverageDraftPosition).
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\FantasyPlayer[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function fantasyPlayersWithAdp(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\FantasyPlayersWithAdp($format), $fetch);
    }
    /**
    * This method returns all box scores for a given season and week, but only returns player stats that have changed in the last X minutes.
    *
    * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $minutes Only returns player statistics that have changed in the last X minutes.  You specify how many minutes in time to go back.  Valid entries are:<br>
             <code>1</code> or <code>2</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\BoxScore[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function legacyBoxScoresDelta(string $week, string $season, string $minutes, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\LegacyBoxScoresDelta($week, $season, $minutes, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the contest for which you're pulling players
             <code>2014-SEP-21</code>,
             <code>2014-NOV-15</code>, etc
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\DailyFantasyScoring[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function dailyFantasyScoring(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\DailyFantasyScoring($date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $week 
             Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season 
             Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerGame[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerGameStatsByWeek(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerGameStatsByWeek($week, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season 
             Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerSeason[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerSeasonStats(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerSeasonStats($season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\FantasyDefenseGame|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function fantasyDefenseGameStatsByTeam(string $week, string $season, string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\FantasyDefenseGameStatsByTeam($week, $season, $team, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\FantasyDefenseSeason|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function fantasyDefenseSeasonStatsByTeam(string $team, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\FantasyDefenseSeasonStatsByTeam($team, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerSeasonRedZone[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerSeasonRedZoneStats(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerSeasonRedZoneStats($season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season 
             Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerSeasonThirdDown[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerSeasonThirdDownStats(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerSeasonThirdDownStats($season, $format), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\BoxScoreV3[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function boxScoresDeltaV(string $week, string $season, string $minutes, string $playerstoinclude = 'all', string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\BoxScoresDeltaV($week, $season, $minutes, $playerstoinclude, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $hometeam Abbreviation of a team playing in this game. Example: <code>WAS</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\BoxScoreV3|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function boxScoreV(string $week, string $season, string $hometeam, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\BoxScoreV($week, $season, $hometeam, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $scoreid The ScoreID of the game. Possible values include: <code>16247</code>, <code>16245</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\BoxScoreV3|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function boxScoreByScoreidV(string $scoreid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\BoxScoreByScoreidV($scoreid, $format), $fetch);
    }
    /**
     * This method returns the top 300+ IDP Fantasy Players for the current or upcoming season, ordered by AverageDraftPositionIDP.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\FantasyPlayer[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function idpFantasyPlayersWithAdp(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\IdpFantasyPlayersWithAdp($format), $fetch);
    }
    /**
    * 
    *
    * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerOwnership[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function fantasyPlayerOwnershipPercentagesSeasonLong(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\FantasyPlayerOwnershipPercentagesSeasonLong($week, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerGameRedZone[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerGameRedZoneStats(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerGameRedZoneStats($week, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season Year of the season
    <br>Examples: <code>2016</code>, <code>2017</code>
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerInfo[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function proBowlers(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\ProBowlers($season, $format), $fetch);
    }
    /**
     * Gets simulated live box scores of NFL games, covering the Conference Championship games on January 21, 2018.
     *
     * @param string $numberofplays The number of plays to progress in this NFL live game simulation. Example entries are <code>0</code>, <code>1</code>, <code>2</code>, <code>3</code>, <code>150</code>, <code>200</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\BoxScoreV3[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function boxScoresVSimulation(string $numberofplays, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\BoxScoresVSimulation($numberofplays, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerGameRedZone[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerGameRedZoneStatsInsideTen(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerGameRedZoneStatsInsideTen($week, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerSeasonRedZone[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerSeasonRedZoneStatsInsideTen(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerSeasonRedZoneStatsInsideTen($season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
             Example: <code>1</code>
           
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerGameRedZone[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerGameRedZoneStatsInsideFive(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerGameRedZoneStatsInsideFive($week, $season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
             <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
           
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\NFL\Model\PlayerSeasonRedZone[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerSeasonRedZoneStatsInsideFive(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerSeasonRedZoneStatsInsideFive($season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $playerid Unique FantasyData Player ID. Example:<code>17920</code>.
     * @param string $season Season to get games from. Example <code>2019POST</code>, <code>2020</code>
     * @param string $numberofgames How many games to return. Example <code>all</code>, <code>10</code>, <code>25</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\PlayerGame[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playerGameLogsBySeason(string $playerid, string $season, string $numberofgames, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerGameLogsBySeason($playerid, $season, $numberofgames, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $week The week of the scores (games). <br>Examples: <code>1</code>, <code>2</code>, etc.
     * @param string $season Year of the season, with optional season type. <br>Examples: <code>2018</code>, <code>2018POST</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\GameInfo[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function preGameOddsByWeek(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PreGameOddsByWeek($week, $season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $scoreid The ScoreID of an NFL score (game).  ScoreIDs can be found in the Scores API.  Valid entries are <code>16654</code> or <code>16667</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\GameInfo[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function preGameOddsLineMovement(string $scoreid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PreGameOddsLineMovement($scoreid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $week The week of the scores (games). <br>Examples: <code>1</code>, <code>2</code>, etc.
     * @param string $season Year of the season, with optional season type. <br>Examples: <code>2018</code>, <code>2018POST</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\GameInfo[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function inGameOddsByWeek(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\InGameOddsByWeek($week, $season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $scoreid The ScoreID of an NFL score (game).  ScoreIDs can be found in the Scores API.  Valid entries are <code>16654</code> or <code>16667</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\GameInfo[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function inGameOddsLineMovement(string $scoreid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\InGameOddsLineMovement($scoreid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4. Example: <code>1</code>, <code>2</code>, etc
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season. <br>Examples: <code>2018REG</code>, <code>2018PRE</code>, <code>2018POST</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\PlayerProp[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playerPropsByWeek(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerPropsByWeek($week, $season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4. Example: <code>1</code>, <code>2</code>, etc
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season. <br>Examples: <code>2018REG</code>, <code>2018PRE</code>, <code>2018POST</code>
     * @param string $team Abbreviation of the team. Example: <code>PHI</code>, <code>NE</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\PlayerProp[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playerPropsByTeam(string $week, string $season, string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerPropsByTeam($week, $season, $team, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4. Example: <code>1</code>, <code>2</code>, etc
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season. <br>Examples: <code>2018REG</code>, <code>2018PRE</code>, <code>2018POST</code>
     * @param string $playerid Each NFL player has a unique ID assigned by FantasyData. Player IDs can be determined by pulling player related data. Example: <code>17920</code>, <code>16771</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\PlayerProp[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playerPropsByPlayer(string $week, string $season, string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\PlayerPropsByPlayer($week, $season, $playerid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $week The week of the scores (games). <br>Examples: <code>1</code>, <code>2</code>, etc.
     * @param string $season Year of the season, with optional season type. <br>Examples: <code>2018</code>, <code>2018POST</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\GameInfo[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function alternateMarketPreGameOddsByWeek(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\AlternateMarketPreGameOddsByWeek($week, $season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $scoreid The ScoreID of an NFL score (game).  ScoreIDs can be found in the Scores API.  Valid entries are <code>16654</code> or <code>16667</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\GameInfo[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function alternateMarketPreGameOddsLineMovement(string $scoreid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\AlternateMarketPreGameOddsLineMovement($scoreid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $team Abbreviation of a team. Example: <code>PHI</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\TeamTrends|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingTrendsByTeam(string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\BettingTrendsByTeam($team, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $opponent Abbreviation of an opponent. Example: <code>NE</code>.
     * @param string $team Abbreviation of a team. Example: <code>PHI</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\MatchupTrends|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingTrendsByMatchup(string $opponent, string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\BettingTrendsByMatchup($opponent, $team, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $date The date of the game(s). <br>Examples: <code>2020-09-10</code>, <code>2020-09-13</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\BettingEvent[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingEventsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\BettingEventsByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $season Year of the season<br>Examples: <code>2020</code>, <code>2021</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\BettingEvent[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingEventsBySeason(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\BettingEventsBySeason($season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2020REG</code>, <code>2020PRE</code>, <code>2020POST</code>, <code>2021</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\BettingEvent[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingFuturesBySeason(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\BettingFuturesBySeason($season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $date The date of the game(s). <br>Examples: <code>2020-09-10</code>, <code>2020-09-13</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\BettingEvent[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingPlayerPropsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\BettingPlayerPropsByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $eventId The EventId of the desired event/game for which to pull all betting markets (includes outcomes/bets).
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\BettingMarket[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingMarketsByEvent(string $eventId, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\BettingMarketsByEvent($eventId, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $marketId The MarketId of the desired market for which to pull all outcomes/bets.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\BettingMarket|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingMarket(string $marketId, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\BettingMarket($marketId, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $marketTypeID The Market Type ID of the desired MarketTypes to pull. Some common types include: <code>1</code> for Game Lines, <code>2</code> for Player Props, <code>3</code> for Team Props, <code>6</code> for Game Props
     * @param string $eventId The EventId of the desired event/game for which to pull all betting markets (includes outcomes/bets).
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\BettingMarket[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingMarketsByMarketType(string $marketTypeID, string $eventId, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\BettingMarketsByMarketType($marketTypeID, $eventId, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $scoreid The ScoreID of the desired game/score for which to pull all betting markets (includes outcomes/bets).
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\BettingMarket[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingMarketsByScoreid(string $scoreid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\BettingMarketsByScoreid($scoreid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\BettingEntityMetadata[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingMetadata(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\BettingMetadata($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\Sportsbook[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function sportsbooksActive(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\SportsbooksActive($format), $fetch);
    }
    /**
     * 
     *
     * @param string $scoreId The ScoreID of the desired game to get Betting Market Splits for
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\GameBettingSplit|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingSplitsByScoreid(string $scoreId, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\BettingSplitsByScoreid($scoreId, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $marketId The BettingMarketID of the market you would like to get splits for. Note that markets we do not have split information on will return an empty response.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\BettingMarketSplit|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingSplitsByBettingmarketid(string $marketId, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\BettingSplitsByBettingmarketid($marketId, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\PlayerInfo[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function advancedPlayers(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\AdvancedPlayers($format), $fetch);
    }
    /**
     * 
     *
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4. Example: <code>1</code>
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season. <br>Examples: <code>2018REG</code>, <code>2018PRE</code>, <code>2018POST</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\AdvancedPlayerGame[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function advancedPlayerGameStats(string $week, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\AdvancedPlayerGameStats($week, $season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $playerid Each NFL player has a unique ID assigned by FantasyData. Player IDs can be determined by pulling player related data. Example:<code>732</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season. <br>Examples: <code>2018REG</code>, <code>2018PRE</code>, <code>2018POST</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\AdvancedPlayerGame[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function advancedPlayerGameStatsByPlayer(string $playerid, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\AdvancedPlayerGameStatsByPlayer($playerid, $season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $playerid Each NFL player has a unique ID assigned by FantasyData. Player IDs can be determined by pulling player related data. Example:<code>732</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\AdvancedPlayer[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function advancedPlayerInfo(string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\AdvancedPlayerInfo($playerid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $playerid Each NFL player has a unique ID assigned by FantasyData. Player IDs can be determined by pulling player related data. Example:<code>732</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season. <br>Examples: <code>2018REG</code>, <code>2018PRE</code>, <code>2018POST</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\AdvancedPlayerSeason[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function advancedPlayerSeasonStatsByPlayer(string $playerid, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\AdvancedPlayerSeasonStatsByPlayer($playerid, $season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season. <br>Examples: <code>2018REG</code>, <code>2018PRE</code>, <code>2018POST</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\AdvancedPlayerSeason[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function advancedPlayerSeasonStatsByTeam(string $team, string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\AdvancedPlayerSeasonStatsByTeam($team, $season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\NFL\Model\Headshot[]|\Sportsdata\API\NFL\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function headshots(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\NFL\Endpoint\Headshots($format), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.sportsdata.io/v3/nfl');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Sportsdata\API\NFL\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}