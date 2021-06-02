<?php

namespace Sportsdata\API\CBB;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Message\ResponseInterface;
use Sportsdata\API\CBB\Endpoint\AlternateMarketPreGameOddsByDate;
use Sportsdata\API\CBB\Endpoint\AlternateMarketPreGameOddsLineMovement;
use Sportsdata\API\CBB\Endpoint\AreGamesInProgress;
use Sportsdata\API\CBB\Endpoint\BettingEventsByDate;
use Sportsdata\API\CBB\Endpoint\BettingEventsBySeason;
use Sportsdata\API\CBB\Endpoint\BettingFuturesBySeason;
use Sportsdata\API\CBB\Endpoint\BettingMarketsByEvent;
use Sportsdata\API\CBB\Endpoint\BettingMarketsByGameid;
use Sportsdata\API\CBB\Endpoint\BettingMarketsByMarketType;
use Sportsdata\API\CBB\Endpoint\BettingMetadata;
use Sportsdata\API\CBB\Endpoint\BettingPlayerPropsByDate;
use Sportsdata\API\CBB\Endpoint\BettingTrendsByMatchup;
use Sportsdata\API\CBB\Endpoint\BettingTrendsByTeam;
use Sportsdata\API\CBB\Endpoint\BoxScoresByDate;
use Sportsdata\API\CBB\Endpoint\BoxScoresByDateDelta;
use Sportsdata\API\CBB\Endpoint\CurrentSeason;
use Sportsdata\API\CBB\Endpoint\GamesByDate;
use Sportsdata\API\CBB\Endpoint\InGameOddsByDate;
use Sportsdata\API\CBB\Endpoint\InGameOddsLineMovement;
use Sportsdata\API\CBB\Endpoint\LeagueHierarchy;
use Sportsdata\API\CBB\Endpoint\PlayerDetailsByActive;
use Sportsdata\API\CBB\Endpoint\PlayerDetailsByPlayer;
use Sportsdata\API\CBB\Endpoint\PlayerDetailsByTeam;
use Sportsdata\API\CBB\Endpoint\PlayerGameLogsBySeason;
use Sportsdata\API\CBB\Endpoint\PlayerGameStatsByDate;
use Sportsdata\API\CBB\Endpoint\PlayerGameStatsByPlayer;
use Sportsdata\API\CBB\Endpoint\PlayerSeasonStats;
use Sportsdata\API\CBB\Endpoint\PlayerSeasonStatsByPlayer;
use Sportsdata\API\CBB\Endpoint\PlayerSeasonStatsByTeam;
use Sportsdata\API\CBB\Endpoint\PreGameOddsByDate;
use Sportsdata\API\CBB\Endpoint\PreGameOddsLineMovement;
use Sportsdata\API\CBB\Endpoint\ProjectedPlayerGameStatsByDate;
use Sportsdata\API\CBB\Endpoint\ProjectedPlayerGameStatsByPlayer;
use Sportsdata\API\CBB\Endpoint\Schedules;
use Sportsdata\API\CBB\Endpoint\SportsbooksActive;
use Sportsdata\API\CBB\Endpoint\Stadiums;
use Sportsdata\API\CBB\Endpoint\TeamGameStatsByDate;
use Sportsdata\API\CBB\Endpoint\Teams;
use Sportsdata\API\CBB\Endpoint\TeamSchedule;
use Sportsdata\API\CBB\Endpoint\TeamSeasonStats;
use Sportsdata\API\CBB\Endpoint\TournamentHierarchy;
use Sportsdata\API\CBB\Model\BettingEntityMetadata;
use Sportsdata\API\CBB\Model\BettingEvent;
use Sportsdata\API\CBB\Model\BettingMarket;
use Sportsdata\API\CBB\Model\BoxScore;
use Sportsdata\API\CBB\Model\Conference;
use Sportsdata\API\CBB\Model\Game;
use Sportsdata\API\CBB\Model\GameInfo;
use Sportsdata\API\CBB\Model\MatchupTrends;
use Sportsdata\API\CBB\Model\Player;
use Sportsdata\API\CBB\Model\PlayerGame;
use Sportsdata\API\CBB\Model\PlayerGameProjection;
use Sportsdata\API\CBB\Model\PlayerSeason;
use Sportsdata\API\CBB\Model\Season;
use Sportsdata\API\CBB\Model\Sportsbook;
use Sportsdata\API\CBB\Model\Stadium;
use Sportsdata\API\CBB\Model\Team;
use Sportsdata\API\CBB\Model\TeamGame;
use Sportsdata\API\CBB\Model\TeamSeason;
use Sportsdata\API\CBB\Model\TeamTrends;
use Sportsdata\API\CBB\Model\Tournament;
use Sportsdata\API\CBB\Normalizer\JaneObjectNormalizer;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

class Client extends Runtime\Client\Client
{
    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Player[]|ResponseInterface
     */
    public function playerDetailsByActive(string $format = 'XML', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PlayerDetailsByActive($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Team[]|ResponseInterface
     */
    public function teams(string $format = 'XML', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Teams($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).
     * <br>Examples: <code>2018-FEB-27</code>, <code>2017-DEC-01</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Game[]|ResponseInterface
     */
    public function gamesByDate(string $date, string $format = 'XML', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GamesByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2018</code>, <code>2018PRE</code>, <code>2018POST</code>, <code>2018STAR</code>, <code>2019</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Game[]|ResponseInterface
     */
    public function schedules(string $season, string $format = 'XML', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Schedules($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $team The abbreviation of the requested team.
     * <br>Examples: <code>SF</code>, <code>NYY</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Player[]|ResponseInterface
     */
    public function playerDetailsByTeam(string $team, string $format = 'XML', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PlayerDetailsByTeam($format, $team), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).
     * <br>Examples: <code>2018-FEB-27</code>, <code>2017-DEC-01</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|TeamGame[]|ResponseInterface
     */
    public function teamGameStatsByDate(string $date, string $format = 'XML', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new TeamGameStatsByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2018</code>, <code>2018POST</code>, <code>2019</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|TeamSeason[]|ResponseInterface
     */
    public function teamSeasonStats(string $season, string $format = 'XML', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new TeamSeasonStats($format, $season), $fetch);
    }

    /**
     * Returns <code>true</code> if there is at least one game being played at the time of the request or <code>false</code> if there are none.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface
     */
    public function areGamesInProgress(string $format = 'XML', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new AreGamesInProgress($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $playerid Unique FantasyData Player ID.
     * Example:<code>60003802</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Player|ResponseInterface
     */
    public function playerDetailsByPlayer(string $playerid, string $format = 'XML', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PlayerDetailsByPlayer($format, $playerid),
            $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Season|ResponseInterface
     */
    public function currentSeason(string $format = 'XML', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CurrentSeason($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Conference[]|ResponseInterface
     */
    public function leagueHierarchy(string $format = 'XML', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new LeagueHierarchy($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2018</code>, <code>2018POST</code>, <code>2019</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Tournament|ResponseInterface
     */
    public function tournamentHierarchy(string $season, string $format = 'XML', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new TournamentHierarchy($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Stadium[]|ResponseInterface
     */
    public function stadiums(string $format = 'XML', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Stadiums($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2018</code>, <code>2018PRE</code>, <code>2018POST</code>, <code>2018STAR</code>, <code>2019</code>, etc.
     * @param string $team The abbreviation of the requested team.
     * Examples: <code>SF</code>, <code>NYY</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Game[]|ResponseInterface
     */
    public function teamSchedule(
        string $format = 'XML',
        string $season,
        string $team,
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new TeamSchedule($format, $season, $team), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $gameid The GameID of an CBB game.  GameIDs can be found in the Games API.  Valid entries are <code>14620</code> or <code>16905</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BoxScore|ResponseInterface
     */
    public function boxScore(string $gameid, string $format = 'XML', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CBB\Endpoint\BoxScore($format, $gameid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).
     * <br>Examples: <code>2018-FEB-27</code>, <code>2017-DEC-01</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BoxScore[]|ResponseInterface
     */
    public function boxScoresByDate(string $date, string $format = 'XML', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BoxScoresByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).
     * <br>Examples: <code>2018-FEB-27</code>, <code>2017-DEC-01</code>.
     * @param string $minutes Only returns player statistics that have changed in the last X minutes.  You specify how many minutes in time to go back.  Valid entries are:
     * <code>1</code> or <code>2</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BoxScore[]|ResponseInterface
     */
    public function boxScoresByDateDelta(
        string $format = 'XML',
        string $date,
        string $minutes,
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new BoxScoresByDateDelta($format, $date, $minutes),
            $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).
     * <br>Examples: <code>2018-FEB-27</code>, <code>2017-DEC-01</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGame[]|ResponseInterface
     */
    public function playerGameStatsByDate(string $date, string $format = 'XML', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PlayerGameStatsByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2018</code>, <code>2018POST</code>, <code>2019</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerSeason[]|ResponseInterface
     */
    public function playerSeasonStats(string $season, string $format = 'XML', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PlayerSeasonStats($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2018</code>, <code>2018POST</code>, <code>2019</code>.
     * @param string $team The abbreviation of the requested team.
     * <br>Examples: <code>SF</code>, <code>NYY</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerSeason[]|ResponseInterface
     */
    public function playerSeasonStatsByTeam(
        string $format = 'XML',
        string $season,
        string $team,
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerSeasonStatsByTeam($format, $season, $team),
            $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).
     * <br>Examples: <code>2018-FEB-27</code>, <code>2017-DEC-01</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGameProjection[]|ResponseInterface
     */
    public function projectedPlayerGameStatsByDate(
        string $format = 'XML',
        string $date,
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new ProjectedPlayerGameStatsByDate($format, $date),
            $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2018</code>, <code>2018POST</code>, <code>2019</code>.
     * @param string $playerid Unique FantasyData Player ID.
     * Example:<code>60003802</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerSeason|ResponseInterface
     */
    public function playerSeasonStatsByPlayer(
        string $format = 'XML',
        string $season,
        string $playerid,
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerSeasonStatsByPlayer($format, $season,
            $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).
     * <br>Examples: <code>2018-FEB-27</code>, <code>2017-DEC-01</code>.
     * @param string $playerid Unique FantasyData Player ID.
     * Example:<code>60003802</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGame|ResponseInterface
     */
    public function playerGameStatsByPlayer(
        string $format = 'XML',
        string $date,
        string $playerid,
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerGameStatsByPlayer($format, $date,
            $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).
     * <br>Examples: <code>2018-FEB-27</code>, <code>2017-DEC-01</code>.
     * @param string $playerid Unique FantasyData Player ID.
     * Example:<code>60003802</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGameProjection|ResponseInterface
     */
    public function projectedPlayerGameStatsByPlayer(
        string $format = 'XML',
        string $date,
        string $playerid,
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new ProjectedPlayerGameStatsByPlayer($format, $date,
            $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Season to get games from. Example <code>2019POST</code>, <code>2020</code>
     * @param string $playerid Unique FantasyData Player ID.Example:<code>60008094</code>.
     * @param string $numberofgames How many games to return. Example <code>all</code>, <code>10</code>, <code>25</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGame[]|ResponseInterface
     */
    public function playerGameLogsBySeason(
        string $format,
        string $season,
        string $playerid,
        string $numberofgames,
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerGameLogsBySeason($format, $season,
            $playerid, $numberofgames), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s). <br>Examples: <code>2018-11-20</code>, <code>2018-11-23</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|GameInfo[]|ResponseInterface
     */
    public function preGameOddsByDate(string $date, string $format = 'XML', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PreGameOddsByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $gameid The GameID of an CBB game.  GameIDs can be found in the Games API.  Valid entries are <code>17775</code> or <code>17776</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|GameInfo[]|ResponseInterface
     */
    public function preGameOddsLineMovement(string $gameid, string $format = 'XML', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PreGameOddsLineMovement($format, $gameid),
            $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s). <br>Examples: <code>2018-11-20</code>, <code>2018-11-23</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|GameInfo[]|ResponseInterface
     */
    public function inGameOddsByDate(string $date, string $format = 'XML', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new InGameOddsByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $gameid The GameID of an CBB game.  GameIDs can be found in the Games API.  Valid entries are <code>17775</code> or <code>17776</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|GameInfo[]|ResponseInterface
     */
    public function inGameOddsLineMovement(string $gameid, string $format = 'XML', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new InGameOddsLineMovement($format, $gameid),
            $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s). <br>Examples: <code>2018-11-20</code>, <code>2018-11-23</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|GameInfo[]|ResponseInterface
     */
    public function alternateMarketPreGameOddsByDate(
        string $format = 'XML',
        string $date,
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new AlternateMarketPreGameOddsByDate($format, $date),
            $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $gameid The GameID of an CBB game.  GameIDs can be found in the Games API.  Valid entries are <code>17775</code> or <code>17776</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|GameInfo[]|ResponseInterface
     */
    public function alternateMarketPreGameOddsLineMovement(
        string $format = 'XML',
        string $gameid,
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new AlternateMarketPreGameOddsLineMovement($format,
            $gameid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $team The abbreviation of the requested team.
     * <br>Examples: <code>OU</code>, <code>UK</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|TeamTrends|ResponseInterface
     */
    public function bettingTrendsByTeam(string $team, string $format = 'XML', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingTrendsByTeam($format, $team), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $team The abbreviation of the requested team.
     * <br>Examples: <code>OU</code>, <code>UK</code>.
     * @param string $opponent The abbreviation of the requested opponent.
     * <br>Examples: <code>OU</code>, <code>UK</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|MatchupTrends|ResponseInterface
     */
    public function bettingTrendsByMatchup(
        string $format = 'XML',
        string $team,
        string $opponent,
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new BettingTrendsByMatchup($format, $team,
            $opponent), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s). <br>Examples: <code>2018-11-20</code>, <code>2018-11-23</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingEvent[]|ResponseInterface
     */
    public function bettingEventsByDate(string $date, string $format = 'XML', string $fetch= self::FETCH_OBJECT)
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
    public function bettingEventsBySeason(string $season, string $format = 'XML', string $fetch= self::FETCH_OBJECT)
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
    public function bettingFuturesBySeason(string $season, string $format = 'XML', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingFuturesBySeason($format, $season),
            $fetch);
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
    public function bettingMarket(string $marketId, string $format = 'XML', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\CBB\Endpoint\BettingMarket($format, $marketId), $fetch);
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
    public function bettingMarketsByEvent(string $eventId, string $format = 'XML', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingMarketsByEvent($format, $eventId),
            $fetch);
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
    public function bettingMarketsByGameid(string $gameid, string $format = 'XML', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingMarketsByGameid($format, $gameid),
            $fetch);
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
        string $format = 'XML',
        string $eventId,
        string $marketTypeID,
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new BettingMarketsByMarketType($format, $eventId,
            $marketTypeID), $fetch);
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
    public function bettingPlayerPropsByDate(string $date, string $format = 'XML', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingPlayerPropsByDate($format, $date),
            $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingEntityMetadata[]|ResponseInterface
     */
    public function bettingMetadata(string $format = 'XML', string $fetch = self::FETCH_OBJECT)
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
    public function sportsbooksActive(string $format = 'XML', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new SportsbooksActive($format), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.sportsdata.io/v3/cbb');
            $plugins[] = new AddHostPlugin($uri);
            $plugins[] = new AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new PluginClient($httpClient, $plugins);
        }
        $requestFactory = Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new Serializer(array(
            new ArrayDenormalizer(),
            new JaneObjectNormalizer()
        ), array(
            new JsonEncoder(new JsonEncode(),
                new JsonDecode(array('json_decode_associative' => true)))
        ));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}