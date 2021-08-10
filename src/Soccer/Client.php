<?php

namespace Sportsdata\API\Soccer;

class Client extends \Sportsdata\API\Soccer\Runtime\Client\Client
{
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-02-27</code>, <code>2017-09-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\PlayerGameProjection[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function projectedPlayerGameStatsByDateWDfsSalaries(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\ProjectedPlayerGameStatsByDateWDfsSalaries($date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>90026231</code>.
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-02-27</code>, <code>2017-09-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\PlayerGameProjection[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function projectedPlayerGameStatsByPlayerWDfsSalaries(string $playerid, string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\ProjectedPlayerGameStatsByPlayerWDfsSalaries($playerid, $date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-02-27</code>, <code>2017-09-01</code>.
    * @param string $competition An indication of a soccer competition/league. This value can be the CompetitionId or the Competition Key. Possible values include: <code>EPL</code>, <code>1</code>, <code>MLS</code>, <code>8</code>, etc.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\PlayerGameProjection[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function projectedPlayerGameStatsByCompetitionWDfsSalaries(string $date, string $competition, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\ProjectedPlayerGameStatsByCompetitionWDfsSalaries($date, $competition, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2020-02-18</code>
    
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\DfsSlate[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function dfsSlatesByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\DfsSlatesByDate($date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $competitionId The Competition Id.
    <br>Examples: <code>3</code>
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\DfsSlate[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function upcomingDfsSlatesByCompetition(string $competitionId, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\UpcomingDfsSlatesByCompetition($competitionId, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-02-27</code>, <code>2017-09-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\Game[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function gamesByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\GamesByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\Area[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function areasCountries(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\AreasCountries($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\Competition[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function competitionsLeagues(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\CompetitionsLeagues($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\Area[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function competitionHierarchyLeagueHierarchy(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\CompetitionHierarchyLeagueHierarchy($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\Team[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function teams(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\Teams($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\Venue[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function venues(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\Venues($format), $fetch);
    }
    /**
    * 
    *
    * @param string $seasonid Unique FantasyData Season ID. SeasonIDs can be found in the Competition Hierarchy (League Hierarchy). 
    Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\SeasonTeam[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function seasonTeams(string $seasonid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\SeasonTeams($seasonid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $roundid Unique FantasyData Round ID. RoundIDs can be found in the Competition Hierarchy (League Hierarchy). 
    Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\Game[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function schedule(string $roundid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\Schedule($roundid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\Player[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function players(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\Players($format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>90026231</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\Player|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function player(string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\Player($playerid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $teamid Unique FantasyData Team ID. 
    Example:<code>516</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\Player[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playersByTeam(string $teamid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\PlayersByTeam($teamid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $roundid Unique FantasyData Round ID. RoundIDs can be found in the Competition Hierarchy (League Hierarchy). 
    Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\TeamSeason[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function teamSeasonStats(string $roundid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\TeamSeasonStats($roundid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-02-27</code>, <code>2017-09-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\TeamGame[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function teamGameStatsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\TeamGameStatsByDate($date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $roundid Unique FantasyData Round ID. RoundIDs can be found in the Competition Hierarchy (League Hierarchy). 
    Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\Standing[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function standings(string $roundid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\Standings($roundid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $competition An indication of a soccer competition/league. This value can be the CompetitionId or the Competition Key. Possible values include: <code>EPL</code>, <code>1</code>, <code>MLS</code>, <code>8</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\CompetitionDetail|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function competitionFixturesLeagueDetails(string $competition, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\CompetitionFixturesLeagueDetails($competition, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $teamid Unique FantasyData Team ID. 
    Example:<code>516</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\Membership[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function membershipsByTeamActive(string $teamid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\MembershipsByTeamActive($teamid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $teamid Unique FantasyData Team ID. 
    Example:<code>516</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\Membership[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function membershipsByTeamHistorical(string $teamid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\MembershipsByTeamHistorical($teamid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\Membership[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function membershipsActive(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\MembershipsActive($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\Membership[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function membershipsHistorical(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\MembershipsHistorical($format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>90026231</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\Game[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function upcomingScheduleByPlayer(string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\UpcomingScheduleByPlayer($playerid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $days The number of days since memberships were updated. For example, if you pass <code>3</code>, you'll receive all memberships that have been updated in the past 3 days. Valid entries are: <code>1</code>, <code>2</code> ... <code>30</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\Membership[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function membershipsRecentlyChanged(string $days, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\MembershipsRecentlyChanged($days, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $competition An indication of a soccer competition/league. This value can be the CompetitionId or the Competition Key. Possible values include: <code>EPL</code>, <code>1</code>, <code>MLS</code>, <code>8</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\Membership[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function membershipsByCompetitionActive(string $competition, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\MembershipsByCompetitionActive($competition, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $competition An indication of a soccer competition/league. This value can be the CompetitionId or the Competition Key. Possible values include: <code>EPL</code>, <code>1</code>, <code>MLS</code>, <code>8</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\Membership[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function membershipsByCompetitionHistorical(string $competition, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\MembershipsByCompetitionHistorical($competition, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\CanceledMembership|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function canceledMemberships(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\CanceledMemberships($format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-02-27</code>, <code>2017-09-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\BoxScore[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function boxScoresByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\BoxScoresByDate($date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $minutes Only returns player statistics that have changed in the last X minutes.  You specify how many minutes in time to go back. Valid entries are:
    <code>1</code>, <code>2</code> ... <code>all</code>.
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-02-27</code>, <code>2017-09-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\BoxScore[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function boxScoresByDateDelta(string $minutes, string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\BoxScoresByDateDelta($minutes, $date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $gameid The GameID of a Soccer game.  GameIDs can be found in the Games API.  Valid entries are <code>702</code>, <code>1274</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\BoxScore|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function boxScore(string $gameid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\BoxScore($gameid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-02-27</code>, <code>2017-09-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\PlayerGame[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerGameStatsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\PlayerGameStatsByDate($date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>90026231</code>.
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-02-27</code>, <code>2017-09-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\PlayerGame[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerGameStatsByPlayer(string $playerid, string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\PlayerGameStatsByPlayer($playerid, $date, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $roundid Unique FantasyData Round ID. RoundIDs can be found in the Competition Hierarchy (League Hierarchy). 
    Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\PlayerSeason[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerSeasonStats(string $roundid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\PlayerSeasonStats($roundid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $team Unique FantasyData Team ID. 
    Example:<code>516</code>.
    * @param string $roundid Unique FantasyData Round ID. RoundIDs can be found in the Competition Hierarchy (League Hierarchy). 
    Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\PlayerSeason[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerSeasonStatsByTeam(string $team, string $roundid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\PlayerSeasonStatsByTeam($team, $roundid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>90026231</code>.
    * @param string $roundid Unique FantasyData Round ID. RoundIDs can be found in the Competition Hierarchy (League Hierarchy). 
    Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\PlayerSeason[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerSeasonStatsByPlayer(string $playerid, string $roundid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\PlayerSeasonStatsByPlayer($playerid, $roundid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-02-27</code>, <code>2017-09-01</code>.
    * @param string $competition An indication of a soccer competition/league. This value can be the CompetitionId or the Competition Key. Possible values include: <code>EPL</code>, <code>1</code>, <code>MLS</code>, <code>8</code>, etc.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\BoxScore[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function boxScoresByDateByCompetition(string $date, string $competition, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\BoxScoresByDateByCompetition($date, $competition, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-02-27</code>, <code>2017-09-01</code>.
    * @param string $competition An indication of a soccer competition/league. This value can be the CompetitionId or the Competition Key. Possible values include: <code>EPL</code>, <code>1</code>, <code>MLS</code>, <code>8</code>, etc.
    * @param string $minutes Only returns player statistics that have changed in the last X minutes.  You specify how many minutes in time to go back. Valid entries are:
    <code>1</code>, <code>2</code> ... <code>all</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\BoxScore[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function boxScoresDeltaByDateByCompetition(string $date, string $competition, string $minutes, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\BoxScoresDeltaByDateByCompetition($date, $competition, $minutes, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the game(s). 
    <br>Examples: <code>2017-02-27</code>, <code>2017-09-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\GameInfo[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function preGameOddsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\PreGameOddsByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $gameid The GameID of a Soccer game.  GameIDs can be found in the Games API.  Valid entries are <code>14060</code>, <code>14061</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\GameInfo[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function preGameOddsLineMovement(string $gameid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\PreGameOddsLineMovement($gameid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $date The date of the game(s). <br>Examples: <code>2018-06-20</code>, <code>2018-06-23</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\GameInfo[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function inGameOddsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\InGameOddsByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $gameid The GameID of a Soccer game.  GameIDs can be found in the Games API.  Valid entries are <code>14060</code>, <code>14061</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\GameInfo[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function inGameOddsLineMovement(string $gameid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\InGameOddsLineMovement($gameid, $format), $fetch);
    }
    /**
    * Gets the games, along with the latest pregame odds from each book, for a given competition and date.
    *
    * @param string $date The date of the game(s). 
    <br>Examples: <code>2017-02-27</code>, <code>2017-09-01</code>.
    * @param string $competition An indication of a soccer competition/league. This value can be the CompetitionId or the Competition Key. Possible values include: <code>EPL</code>, <code>1</code>, <code>MLS</code>, <code>8</code>, etc.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Soccer\Model\GameInfo[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function preGameOddsByDateByCompetition(string $date, string $competition, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\PreGameOddsByDateByCompetition($date, $competition, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\Sportsbook[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function sportsbooksActive(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\SportsbooksActive($format), $fetch);
    }
    /**
     * 
     *
     * @param string $date The date of the game(s). <br>Examples: <code>2018-11-20</code>, <code>2018-11-23</code>.
     * @param string $competition An indication of a soccer competition/league. This value can be the CompetitionId or the Competition Key. Possible values include: <code>EPL</code>, <code>1</code>, <code>MLS</code>, <code>8</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function bettingEventsByDate(string $date, string $competition, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\BettingEventsByDate($date, $competition, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $season Year of the season<br>Examples: <code>2020</code>, <code>2021</code>, etc.
     * @param string $competition An indication of a soccer competition/league. This value can be the CompetitionId or the Competition Key. Possible values include: <code>EPL</code>, <code>1</code>, <code>MLS</code>, <code>8</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function 6101a9f5f15c1fab4a8f1431(string $season, string $competition, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\6101a9f5f15c1fab4a8f1431($season, $competition, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $season Year of the season<br>Examples: <code>2020</code>, <code>2021</code>, etc.
     * @param string $competition An indication of a soccer competition/league. This value can be the CompetitionId or the Competition Key. Possible values include: <code>EPL</code>, <code>1</code>, <code>MLS</code>, <code>8</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function 6101aa26b591c29f2b089d19(string $season, string $competition, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\6101aa26b591c29f2b089d19($season, $competition, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $marketId The MarketId of the desired market for which to pull all outcomes/bets.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function 6101aa78d3778c4816a94eb1(string $marketId, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\6101aa78d3778c4816a94eb1($marketId, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $eventId The EventId of the desired event/game for which to pull all betting markets (includes outcomes/bets).
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function 6101aa986cf307e7387d5ea1(string $eventId, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\6101aa986cf307e7387d5ea1($eventId, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $gameid The GameID of the desired game for which to pull all betting markets (includes outcomes/bets).
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function 6101aab53a4a032e182d820e(string $gameid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\6101aab53a4a032e182d820e($gameid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $marketTypeID The Market Type ID of the desired MarketTypes to pull. Some common types include: <code>1</code> for Game Lines, <code>2</code> for Player Props, <code>3</code> for Team Props, <code>6</code> for Game Props
     * @param string $eventId The EventId of the desired event/game for which to pull all betting markets (includes outcomes/bets).
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function 6101aace967925d2a69c0787(string $marketTypeID, string $eventId, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\6101aace967925d2a69c0787($marketTypeID, $eventId, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function 6101ab04c3b23eb95bdcaa40(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\6101ab04c3b23eb95bdcaa40($format), $fetch);
    }
    /**
     * 
     *
     * @param string $date The date of the game(s). <br>Examples: <code>2020-10-17</code>
     * @param string $competition An indication of a soccer competition/league. This value can be the CompetitionId or the Competition Key. Possible values include: <code>EPL</code>, <code>1</code>, <code>MLS</code>, <code>8</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function 6101ab23ec254a0d1d0a1695(string $date, string $competition, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\6101ab23ec254a0d1d0a1695($date, $competition, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Soccer\Model\Headshot[]|\Sportsdata\API\Soccer\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function headshots(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Soccer\Endpoint\Headshots($format), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.sportsdata.io/v3/soccer');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Sportsdata\API\Soccer\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}