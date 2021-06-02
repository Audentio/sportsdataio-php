<?php

namespace Sportsdata\API\CSGO;

use Psr\Http\Message\ResponseInterface;
use Sportsdata\API\CSGO\Endpoint\AreasCountries;
use Sportsdata\API\CSGO\Endpoint\BoxScore;
use Sportsdata\API\CSGO\Endpoint\BoxScoresByDate;
use Sportsdata\API\CSGO\Endpoint\CompetitionFixturesLeagueDetails;
use Sportsdata\API\CSGO\Endpoint\CompetitionsLeagues;
use Sportsdata\API\CSGO\Endpoint\DfsSlatesByDate;
use Sportsdata\API\CSGO\Endpoint\GamesByDate;
use Sportsdata\API\CSGO\Endpoint\MembershipsActive;
use Sportsdata\API\CSGO\Endpoint\MembershipsByTeamActive;
use Sportsdata\API\CSGO\Endpoint\MembershipsByTeamHistorical;
use Sportsdata\API\CSGO\Endpoint\MembershipsHistorical;
use Sportsdata\API\CSGO\Endpoint\Players;
use Sportsdata\API\CSGO\Endpoint\PlayersByTeam;
use Sportsdata\API\CSGO\Endpoint\ProjectedPlayerGameStatsByDate;
use Sportsdata\API\CSGO\Endpoint\ProjectedPlayerGameStatsByPlayer;
use Sportsdata\API\CSGO\Endpoint\Schedule;
use Sportsdata\API\CSGO\Endpoint\SeasonTeams;
use Sportsdata\API\CSGO\Endpoint\Standings;
use Sportsdata\API\CSGO\Endpoint\Teams;
use Sportsdata\API\CSGO\Endpoint\Venues;
use Sportsdata\API\CSGO\Model\Area;
use Sportsdata\API\CSGO\Model\Competition;
use Sportsdata\API\CSGO\Model\CompetitionDetail;
use Sportsdata\API\CSGO\Model\DfsSlate;
use Sportsdata\API\CSGO\Model\Game;
use Sportsdata\API\CSGO\Model\Membership;
use Sportsdata\API\CSGO\Model\Player;
use Sportsdata\API\CSGO\Model\PlayerGameProjection;
use Sportsdata\API\CSGO\Model\SeasonTeam;
use Sportsdata\API\CSGO\Model\Standing;
use Sportsdata\API\CSGO\Model\Team;
use Sportsdata\API\CSGO\Model\Venue;

class Client extends Runtime\Client\Client
{
    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).
     * <br>Examples: <code>2018-01-13</code>, <code>2018-06-13</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGameProjection[]|ResponseInterface
     */
    public function projectedPlayerGameStatsByDate(
        string $date,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new ProjectedPlayerGameStatsByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).
     * <br>Examples: <code>2018-01-13</code>, <code>2018-06-13</code>.
     * @param string $playerid Unique FantasyData Player ID.
     * Example:<code>100000576</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGameProjection[]|ResponseInterface
     */
    public function projectedPlayerGameStatsByPlayer(
        string $date,
        string $playerid,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new ProjectedPlayerGameStatsByPlayer($format, $date, $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).
     * <br>Examples: <code>2017-02-27</code>, <code>2017-09-01</code>.</br>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|DfsSlate[]|ResponseInterface
     */
    public function dfsSlatesByDate(string $format, string $date, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DfsSlatesByDate($format, $date), $fetch);
    }

    /**
     * Games by Date
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).
     * <br>Examples: <code>2018-01-13</code>, <code>2018-06-13</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Game[]|ResponseInterface
     */
    public function gamesByDate(string $date, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GamesByDate($format, $date), $fetch);
    }

    /**
     * Areas (Countries)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Area[]|ResponseInterface
     */
    public function areasCountries(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new AreasCountries($format), $fetch);
    }

    /**
     * Competitions (Leagues)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Competition[]|ResponseInterface
     */
    public function competitionsLeagues(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CompetitionsLeagues($format), $fetch);
    }

    /**
     * Teams
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Team[]|ResponseInterface
     */
    public function teams(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Teams($format), $fetch);
    }

    /**
     * Venues
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Venue[]|ResponseInterface
     */
    public function venues(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Venues($format), $fetch);
    }

    /**
     * Season Teams
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $seasonid Unique FantasyData Season ID. SeasonIDs can be found in the Competitions and Competition Details endpoints.
     * Examples: <code>100000023</code>, <code>100000024</code>, etc
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|SeasonTeam[]|ResponseInterface
     */
    public function seasonTeams(string $seasonid, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new SeasonTeams($format, $seasonid), $fetch);
    }

    /**
     * Schedule
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $roundid Unique FantasyData Round ID. RoundIDs can be found in the Competitions and Competition Details endpoints.
     * Examples: <code>100000138</code>, <code>1000001412</code>, etc
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Game[]|ResponseInterface
     */
    public function schedule(string $roundid, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Schedule($format, $roundid), $fetch);
    }

    /**
     * Players
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Player[]|ResponseInterface
     */
    public function players(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Players($format), $fetch);
    }

    /**
     * Player
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $playerid Unique FantasyData Player ID.
     * Example:<code>100000576</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Player|ResponseInterface
     */
    public function player(string $playerid, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\Player($format, $playerid), $fetch);
    }

    /**
     * Players by Team
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $teamid Unique FantasyData Team ID.
     * Example:<code>100000001</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Player[]|ResponseInterface
     */
    public function playersByTeam(string $teamid, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PlayersByTeam($format, $teamid), $fetch);
    }

    /**
     * Competition Fixtures (League Details)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $competitionid A CS:GO competition/league unique CompetitionId. Possible values include: <code>100000009</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|CompetitionDetail|ResponseInterface
     */
    public function competitionFixturesLeagueDetails(
        string $competitionid,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new CompetitionFixturesLeagueDetails($format, $competitionid), $fetch);
    }

    /**
     * Memberships by Team (Active)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $teamid Unique FantasyData Team ID.
     * Example:<code>100000001</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Membership[]|ResponseInterface
     */
    public function membershipsByTeamActive(string $teamid, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new MembershipsByTeamActive($format, $teamid), $fetch);
    }

    /**
     * Memberships by Team (Historical)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $teamid Unique FantasyData Team ID.
     * Example:<code>100000001</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Membership[]|ResponseInterface
     */
    public function membershipsByTeamHistorical(
        string $teamid,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new MembershipsByTeamHistorical($format, $teamid), $fetch);
    }

    /**
     * Memberships (Active)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Membership[]|ResponseInterface
     */
    public function membershipsActive(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new MembershipsActive($format), $fetch);
    }

    /**
     * Memberships (Historical)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Membership[]|ResponseInterface
     */
    public function membershipsHistorical(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new MembershipsHistorical($format), $fetch);
    }

    /**
     * Schedule
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $roundid Unique FantasyData Round ID. RoundIDs can be found in the Competitions and Competition Details endpoints.
     * Example: <code>100000138</code>, etc
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Standing[]|ResponseInterface
     */
    public function standings(string $roundid, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Standings($format, $roundid), $fetch);
    }

    /**
     * Box Scores by Date
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).
     * <br>Examples: <code>2018-01-13</code>, <code>2018-06-13</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Model\BoxScore[]|ResponseInterface
     */
    public function boxScoresByDate(string $date, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BoxScoresByDate($format, $date), $fetch);
    }

    /**
     * Box Scores by Date
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $gameid Unique GameId for the desired box scores. Examples: <code>100000091</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Model\BoxScore[]|ResponseInterface
     */
    public function boxScore(string $gameid, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BoxScore($format, $gameid), $fetch);
    }
}