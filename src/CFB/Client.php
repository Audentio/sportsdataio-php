<?php

namespace Sportsdata\API\CFB;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Message\ResponseInterface;
use Sportsdata\API\CFB\Endpoint\AlternateMarketPreGameOddsByWeek;
use Sportsdata\API\CFB\Endpoint\AlternateMarketPreGameOddsLineMovement;
use Sportsdata\API\CFB\Endpoint\AreGamesInProgress;
use Sportsdata\API\CFB\Endpoint\BettingEventsByDate;
use Sportsdata\API\CFB\Endpoint\BettingEventsBySeason;
use Sportsdata\API\CFB\Endpoint\BettingFuturesBySeason;
use Sportsdata\API\CFB\Endpoint\BettingMarketsByEvent;
use Sportsdata\API\CFB\Endpoint\BettingMarketsByGameid;
use Sportsdata\API\CFB\Endpoint\BettingMarketsByMarketType;
use Sportsdata\API\CFB\Endpoint\BettingMetadata;
use Sportsdata\API\CFB\Endpoint\BettingPlayerPropsByDate;
use Sportsdata\API\CFB\Endpoint\BettingTrendsByMatchup;
use Sportsdata\API\CFB\Endpoint\BettingTrendsByTeam;
use Sportsdata\API\CFB\Endpoint\BoxScoresByDate;
use Sportsdata\API\CFB\Endpoint\BoxScoresByWeek;
use Sportsdata\API\CFB\Endpoint\BoxScoresByWeekDelta;
use Sportsdata\API\CFB\Endpoint\ConferenceHierarchyWithTeams;
use Sportsdata\API\CFB\Endpoint\CurrentSeason;
use Sportsdata\API\CFB\Endpoint\CurrentSeasonDetails;
use Sportsdata\API\CFB\Endpoint\CurrentSeasontype;
use Sportsdata\API\CFB\Endpoint\CurrentWeek;
use Sportsdata\API\CFB\Endpoint\GamesByDate;
use Sportsdata\API\CFB\Endpoint\GamesByWeek;
use Sportsdata\API\CFB\Endpoint\InGameOddsByWeek;
use Sportsdata\API\CFB\Endpoint\InGameOddsLineMovement;
use Sportsdata\API\CFB\Endpoint\PlayerDetailsByActive;
use Sportsdata\API\CFB\Endpoint\PlayerDetailsByPlayer;
use Sportsdata\API\CFB\Endpoint\PlayerDetailsByTeam;
use Sportsdata\API\CFB\Endpoint\PlayerGameLogsBySeason;
use Sportsdata\API\CFB\Endpoint\PlayerGameStatsByPlayer;
use Sportsdata\API\CFB\Endpoint\PlayerGameStatsByWeek;
use Sportsdata\API\CFB\Endpoint\PlayerSeasonStats;
use Sportsdata\API\CFB\Endpoint\PlayerSeasonStatsByPlayer;
use Sportsdata\API\CFB\Endpoint\PlayerSeasonStatsByTeam;
use Sportsdata\API\CFB\Endpoint\PreGameOddsByWeek;
use Sportsdata\API\CFB\Endpoint\PreGameOddsLineMovement;
use Sportsdata\API\CFB\Endpoint\Schedules;
use Sportsdata\API\CFB\Endpoint\SportsbooksActive;
use Sportsdata\API\CFB\Endpoint\Stadiums;
use Sportsdata\API\CFB\Endpoint\TeamGameStatsByWeek;
use Sportsdata\API\CFB\Endpoint\Teams;
use Sportsdata\API\CFB\Endpoint\TeamSeasonStatsStandings;
use Sportsdata\API\CFB\Model\BettingEntityMetadata;
use Sportsdata\API\CFB\Model\BettingEvent;
use Sportsdata\API\CFB\Model\BettingMarket;
use Sportsdata\API\CFB\Model\BoxScore;
use Sportsdata\API\CFB\Model\Conference;
use Sportsdata\API\CFB\Model\Game;
use Sportsdata\API\CFB\Model\GameInfo;
use Sportsdata\API\CFB\Model\MatchupTrends;
use Sportsdata\API\CFB\Model\Player;
use Sportsdata\API\CFB\Model\PlayerGame;
use Sportsdata\API\CFB\Model\PlayerSeason;
use Sportsdata\API\CFB\Model\Season;
use Sportsdata\API\CFB\Model\Sportsbook;
use Sportsdata\API\CFB\Model\Stadium;
use Sportsdata\API\CFB\Model\Team;
use Sportsdata\API\CFB\Model\TeamGame;
use Sportsdata\API\CFB\Model\TeamSeason;
use Sportsdata\API\CFB\Model\TeamTrends;
use Sportsdata\API\CFB\Normalizer\JaneObjectNormalizer;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

class Client extends Runtime\Client\Client
{
    /**
     * Returns <code>true</code> if there is at least one game being played at the time of the request or <code>false</code> if there are none.
     *
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface
     */
    public function areGamesInProgress(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new AreGamesInProgress($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface
     */
    public function currentSeason(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CurrentSeason($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface
     */
    public function currentWeek(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CurrentWeek($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Conference[]|ResponseInterface
     */
    public function conferenceHierarchyWithTeams(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ConferenceHierarchyWithTeams($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Team[]|ResponseInterface
     */
    public function teams(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Teams($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2018</code>, <code>2018PRE</code>, <code>2018POST</code>, <code>2018STAR</code>, <code>2019</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Game[]|ResponseInterface
     */
    public function schedules(string $season, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Schedules($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     * @param string $date
     * The date of the game(s).
     * <br>Examples: <code>2016-SEP-01</code>, <code>2017-SEP-10</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Game[]|ResponseInterface
     */
    public function gamesByDate(string $date, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GamesByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     * @param string $season
     * Year of the season.
     * <br>Examples: <code>2015</code>, <code>2016</code>, etc.
     * @param string $week
     * The week of the game(s).
     * <br>Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Game[]|ResponseInterface
     */
    public function gamesByWeek(
        string $season,
        string $week,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new GamesByWeek($format, $season, $week), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     * @param string $season
     * Year of the season.
     * <br>Examples: <code>2015</code>, <code>2016</code>, etc.
     * @param string $week
     * The week of the game(s).
     * <br>Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|TeamGame[]|ResponseInterface
     */
    public function teamGameStatsByWeek(
        string $season,
        string $week,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new TeamGameStatsByWeek($format, $season, $week), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2017</code>, <code>2017POST</code>, <code>2018</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|TeamSeason[]|ResponseInterface
     */
    public function teamSeasonStatsStandings(string $season, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new TeamSeasonStatsStandings($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Stadium[]|ResponseInterface
     */
    public function stadiums(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Stadiums($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface
     */
    public function currentSeasontype(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CurrentSeasontype($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>xml</code> or <code>json</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Season|ResponseInterface
     */
    public function currentSeasonDetails(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CurrentSeasonDetails($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Player[]|ResponseInterface
     */
    public function playerDetailsByActive(string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PlayerDetailsByActive($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $playerid
     * Unique FantasyData Player ID.
     * Example:<code>50002016</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Player[]|ResponseInterface
     */
    public function playerDetailsByPlayer(string $format, string $playerid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PlayerDetailsByPlayer($format, $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $team
     * The abbreviation of the requested team.
     * <br>Examples: <code>SF</code>, <code>NYY</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Player[]|ResponseInterface
     */
    public function playerDetailsByTeam(string $format, string $team, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PlayerDetailsByTeam($format, $team), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $gameid The GameID of an CFB game.  GameIDs can be found in the Games API.  Valid entries are <code>1148</code> or <code>1149</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BoxScore[]|ResponseInterface
     */
    public function boxScore(string $gameid, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\BoxScore($format, $gameid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date
     * The date of the game(s).
     * <br>Examples: <code>2016-JAN-01</code>, <code>2017-JAN-01</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BoxScore[]|ResponseInterface
     */
    public function boxScoresByDate(string $date, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BoxScoresByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2017</code>, <code>2017POST</code>, <code>2018</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerSeason[]|ResponseInterface
     */
    public function playerSeasonStats(string $season, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PlayerSeasonStats($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2017</code>, <code>2017POST</code>, <code>2018</code>.
     * @param string $team The abbreviation of the requested team.
     * <br>Examples: <code>SF</code>, <code>NYY</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerSeason[]|ResponseInterface
     */
    public function playerSeasonStatsByTeam(
        string $season,
        string $team,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerSeasonStatsByTeam($format, $season, $team), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2017</code>, <code>2017POST</code>, <code>2018</code>.
     * @param string $playerid Unique FantasyData Player ID.
     * Example:<code>50002016</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerSeason[]|ResponseInterface
     */
    public function playerSeasonStatsByPlayer(
        string $season,
        string $playerid,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerSeasonStatsByPlayer($format, $season, $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season.<br> Examples: <code>2017</code>, <code>2018</code>, etc.
     * @param string $week The week of the game(s).<br> Examples: <code>2</code>, <code>3</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BoxScore[]|ResponseInterface
     */
    public function boxScoresByWeek(
        string $season,
        string $week,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new BoxScoresByWeek($format, $season, $week), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season
     * Year of the season.
     * <br>Examples: <code>2015</code>, <code>2016</code>, etc.
     * @param string $week
     * The week of the game(s).
     * <br>Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc.
     * @param string $minutes Only returns player statistics that have changed in the last X minutes.  You specify how many minutes in time to go back.  Valid entries are:
     * <code>1</code> or <code>2</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BoxScore[]|ResponseInterface
     */
    public function boxScoresByWeekDelta(
        string $season,
        string $week,
        string $minutes,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new BoxScoresByWeekDelta($format, $season, $week, $minutes), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season
     * Year of the season.
     * <br>Examples: <code>2015</code>, <code>2016</code>.
     * @param string $week
     * The week of the game(s).
     * <br>Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGame[]|ResponseInterface
     */
    public function playerGameStatsByWeek(
        string $season,
        string $week,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerGameStatsByWeek($format, $season, $week), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season
     * Year of the season.
     * <br>Examples: <code>2015</code>, <code>2016</code>.
     * @param string $week
     * The week of the game(s).
     * <br>Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc.
     * @param string $playerid
     * Unique FantasyData Player ID.
     * Example:<code>50002016</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGame[]|ResponseInterface
     */
    public function playerGameStatsByPlayer(
        string $season,
        string $week,
        string $playerid,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerGameStatsByPlayer($format, $season, $week, $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Season to get games from. Example <code>2019POST</code>, <code>2020</code>
     * @param string $playerid Unique FantasyData Player ID.
     * Example:<code>50036283</code>.
     * @param string $numberofgames How many games to return. Example <code>all</code>, <code>10</code>, <code>25</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGame[]|ResponseInterface
     */
    public function playerGameLogsBySeason(
        string $season,
        string $playerid,
        string $numberofgames,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerGameLogsBySeason($format, $season, $playerid, $numberofgames), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season, with optional season type. <br>Examples: <code>2018</code>, <code>2018POST</code>, etc.
     * @param string $week The week of the game(s). <br>Examples: <code>1</code>, <code>2</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|GameInfo[]|ResponseInterface
     */
    public function preGameOddsByWeek(
        string $season,
        string $week,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PreGameOddsByWeek($format, $season, $week), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $gameid The GameID of an CFB game.  GameIDs can be found in the Games API.  Valid entries are <code>8487</code> or <code>8657</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|GameInfo[]|ResponseInterface
     */
    public function preGameOddsLineMovement(string $gameid, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PreGameOddsLineMovement($format, $gameid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season, with optional season type. <br>Examples: <code>2018</code>, <code>2018POST</code>, etc.
     * @param string $week The week of the game(s). <br>Examples: <code>1</code>, <code>2</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|GameInfo[]|ResponseInterface
     */
    public function inGameOddsByWeek(
        string $season,
        string $week,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new InGameOddsByWeek($format, $season, $week), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $gameid The GameID of an CFB game.  GameIDs can be found in the Games API.  Valid entries are <code>8487</code> or <code>8657</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|GameInfo[]|ResponseInterface
     */
    public function inGameOddsLineMovement(string $gameid, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new InGameOddsLineMovement($format, $gameid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season, with optional season type. <br>Examples: <code>2018</code>, <code>2018POST</code>, etc.
     * @param string $week The week of the game(s). <br>Examples: <code>1</code>, <code>2</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|GameInfo[]|ResponseInterface
     */
    public function alternateMarketPreGameOddsByWeek(
        string $season,
        string $week,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new AlternateMarketPreGameOddsByWeek($format, $season, $week), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $gameid The GameID of an CFB game.  GameIDs can be found in the Games API.  Valid entries are <code>8487</code> or <code>8657</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|GameInfo[]|ResponseInterface
     */
    public function alternateMarketPreGameOddsLineMovement(
        string $gameid,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new AlternateMarketPreGameOddsLineMovement($format, $gameid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $team The abbreviation of the requested team. <br> Examples: <code>MIA</code>, <code>ND</code>, <code>PITT</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|TeamTrends|ResponseInterface
     */
    public function bettingTrendsByTeam(string $team, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingTrendsByTeam($format, $team), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $team The abbreviation of the requested team. <br> Examples: <code>MIA</code>, <code>ND</code>, <code>PITT</code>, etc.
     * @param string $opponent The abbreviation of the requested opponent. <br> Examples: <code>MIA</code>, <code>ND</code>, <code>PITT</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|MatchupTrends|ResponseInterface
     */
    public function bettingTrendsByMatchup(
        string $team,
        string $opponent,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new BettingTrendsByMatchup($format, $team, $opponent), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s). <br>Examples: <code>2020-10-17</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingEvent[]|ResponseInterface
     */
    public function bettingEventsByDate(string $format, string $date, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingEventsByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season<br>Examples: <code>2020</code>, <code>2021</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingEvent[]|ResponseInterface
     */
    public function bettingEventsBySeason(string $format, string $season, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingEventsBySeason($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season<br>Examples: <code>2020</code>, <code>2021</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingEvent[]|ResponseInterface
     */
    public function bettingFuturesBySeason(string $format, string $season, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingFuturesBySeason($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $marketId The MarketId of the desired market for which to pull all outcomes/bets.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingMarket|ResponseInterface
     */
    public function bettingMarket(string $format, string $marketId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\BettingMarket($format, $marketId), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $eventId The EventId of the desired event/game for which to pull all betting markets (includes outcomes/bets).
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingMarket[]|ResponseInterface
     */
    public function bettingMarketsByEvent(string $format, string $eventId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingMarketsByEvent($format, $eventId), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $eventId The EventId of the desired event/game for which to pull all betting markets (includes outcomes/bets).
     * @param string $marketTypeID The Market Type ID of the desired MarketTypes to pull. Some common types include: <code>1</code> for Game Lines, <code>2</code> for Player Props, <code>3</code> for Team Props, <code>6</code> for Game Props
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingMarket[]|ResponseInterface
     */
    public function bettingMarketsByMarketType(
        string $format,
        string $eventId,
        string $marketTypeID,
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new BettingMarketsByMarketType($format, $eventId, $marketTypeID), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $gameid The GameID of the desired game for which to pull all betting markets (includes outcomes/bets).
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingMarket[]|ResponseInterface
     */
    public function bettingMarketsByGameid(string $format, string $gameid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingMarketsByGameid($format, $gameid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s). <br>Examples: <code>2020-10-17</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingEvent[]|ResponseInterface
     */
    public function bettingPlayerPropsByDate(string $format, string $date, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingPlayerPropsByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingEntityMetadata[]|ResponseInterface
     */
    public function bettingMetadata(string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingMetadata($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Sportsbook[]|ResponseInterface
     */
    public function sportsbooksActive(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new SportsbooksActive($format), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.sportsdata.io/v3/cfb');
            $plugins[] = new AddHostPlugin($uri);
            $plugins[] = new AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new PluginClient($httpClient, $plugins);
        }
        $requestFactory = Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new Serializer(array(new ArrayDenormalizer(), new JaneObjectNormalizer()),
            array(new JsonEncoder(new JsonEncode(), new JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}