<?php

namespace Sportsdata\API\NBA;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Message\ResponseInterface;
use Sportsdata\API\NBA\Endpoint\AllStars;
use Sportsdata\API\NBA\Endpoint\AlternateMarketPreGameOddsByDate;
use Sportsdata\API\NBA\Endpoint\AlternateMarketPreGameOddsLineMovement;
use Sportsdata\API\NBA\Endpoint\AreGamesInProgress;
use Sportsdata\API\NBA\Endpoint\BettingEventsByDate;
use Sportsdata\API\NBA\Endpoint\BettingEventsBySeason;
use Sportsdata\API\NBA\Endpoint\BettingFuturesBySeason;
use Sportsdata\API\NBA\Endpoint\BettingMarketsByEvent;
use Sportsdata\API\NBA\Endpoint\BettingMarketsByGameid;
use Sportsdata\API\NBA\Endpoint\BettingMarketsByMarketType;
use Sportsdata\API\NBA\Endpoint\BettingMetadata;
use Sportsdata\API\NBA\Endpoint\BettingPlayerPropsByDate;
use Sportsdata\API\NBA\Endpoint\BettingTrendsByMatchup;
use Sportsdata\API\NBA\Endpoint\BettingTrendsByTeam;
use Sportsdata\API\NBA\Endpoint\BoxScoresByDate;
use Sportsdata\API\NBA\Endpoint\BoxScoresByDateDelta;
use Sportsdata\API\NBA\Endpoint\CurrentSeason;
use Sportsdata\API\NBA\Endpoint\DfsSlatesByDate;
use Sportsdata\API\NBA\Endpoint\GamesByDate;
use Sportsdata\API\NBA\Endpoint\Headshots;
use Sportsdata\API\NBA\Endpoint\InGameOddsByDate;
use Sportsdata\API\NBA\Endpoint\InGameOddsLineMovement;
use Sportsdata\API\NBA\Endpoint\NewsByDate;
use Sportsdata\API\NBA\Endpoint\NewsByPlayer;
use Sportsdata\API\NBA\Endpoint\PlayByPlayDelta;
use Sportsdata\API\NBA\Endpoint\PlayerDetailsByActive;
use Sportsdata\API\NBA\Endpoint\PlayerDetailsByFreeAgent;
use Sportsdata\API\NBA\Endpoint\PlayerDetailsByPlayer;
use Sportsdata\API\NBA\Endpoint\PlayerGameLogsBySeason;
use Sportsdata\API\NBA\Endpoint\PlayerGameStatsByDate;
use Sportsdata\API\NBA\Endpoint\PlayerGameStatsByPlayer;
use Sportsdata\API\NBA\Endpoint\PlayerPropsByDate;
use Sportsdata\API\NBA\Endpoint\PlayerPropsByPlayer;
use Sportsdata\API\NBA\Endpoint\PlayerPropsByTeam;
use Sportsdata\API\NBA\Endpoint\PlayersByTeam;
use Sportsdata\API\NBA\Endpoint\PlayerSeasonStats;
use Sportsdata\API\NBA\Endpoint\PlayerSeasonStatsByPlayer;
use Sportsdata\API\NBA\Endpoint\PlayerSeasonStatsByTeam;
use Sportsdata\API\NBA\Endpoint\PreGameOddsByDate;
use Sportsdata\API\NBA\Endpoint\PreGameOddsLineMovement;
use Sportsdata\API\NBA\Endpoint\PremiumNews;
use Sportsdata\API\NBA\Endpoint\PremiumNewsByDate;
use Sportsdata\API\NBA\Endpoint\PremiumNewsByPlayer;
use Sportsdata\API\NBA\Endpoint\ProjectedPlayerGameStatsByDateWInjuriesDfsSalaries;
use Sportsdata\API\NBA\Endpoint\ProjectedPlayerGameStatsByPlayerWInjuriesDfsSalaries;
use Sportsdata\API\NBA\Endpoint\ProjectedPlayerSeasonStats;
use Sportsdata\API\NBA\Endpoint\ProjectedPlayerSeasonStatsByPlayer;
use Sportsdata\API\NBA\Endpoint\ProjectedPlayerSeasonStatsByTeam;
use Sportsdata\API\NBA\Endpoint\RotoballerArticles;
use Sportsdata\API\NBA\Endpoint\RotoballerArticlesByDate;
use Sportsdata\API\NBA\Endpoint\RotoballerArticlesByPlayer;
use Sportsdata\API\NBA\Endpoint\Schedules;
use Sportsdata\API\NBA\Endpoint\SportsbooksActive;
use Sportsdata\API\NBA\Endpoint\Stadiums;
use Sportsdata\API\NBA\Endpoint\Standings;
use Sportsdata\API\NBA\Endpoint\TeamGameStatsByDate;
use Sportsdata\API\NBA\Endpoint\TeamsActive;
use Sportsdata\API\NBA\Endpoint\TeamsAll;
use Sportsdata\API\NBA\Endpoint\TeamSeasonStats;
use Sportsdata\API\NBA\Endpoint\TeamStatsAllowedByPosition;
use Sportsdata\API\NBA\Model\Article;
use Sportsdata\API\NBA\Model\BettingEntityMetadata;
use Sportsdata\API\NBA\Model\BettingEvent;
use Sportsdata\API\NBA\Model\BettingMarket;
use Sportsdata\API\NBA\Model\BoxScore;
use Sportsdata\API\NBA\Model\DfsSlate;
use Sportsdata\API\NBA\Model\Game;
use Sportsdata\API\NBA\Model\GameInfo;
use Sportsdata\API\NBA\Model\Headshot;
use Sportsdata\API\NBA\Model\MatchupTrends;
use Sportsdata\API\NBA\Model\News;
use Sportsdata\API\NBA\Model\PlayByPlay;
use Sportsdata\API\NBA\Model\Player;
use Sportsdata\API\NBA\Model\PlayerGame;
use Sportsdata\API\NBA\Model\PlayerGameProjection;
use Sportsdata\API\NBA\Model\PlayerInfo;
use Sportsdata\API\NBA\Model\PlayerProp;
use Sportsdata\API\NBA\Model\PlayerSeason;
use Sportsdata\API\NBA\Model\PlayerSeasonProjection;
use Sportsdata\API\NBA\Model\Season;
use Sportsdata\API\NBA\Model\Sportsbook;
use Sportsdata\API\NBA\Model\Stadium;
use Sportsdata\API\NBA\Model\Standing;
use Sportsdata\API\NBA\Model\Team;
use Sportsdata\API\NBA\Model\TeamGame;
use Sportsdata\API\NBA\Model\TeamSeason;
use Sportsdata\API\NBA\Model\TeamTrends;
use Sportsdata\API\NBA\Normalizer\JaneObjectNormalizer;
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
     * @param string $gameid The GameID of an NBA game.  GameIDs can be found in the Games API.  Valid entries are <code>14620</code>, <code>16905</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayByPlay|ResponseInterface
     */
    public function playByPlay(string $gameid, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PlayByPlay($format, $gameid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).
     * <br>Examples: <code>2016-OCT-31</code>, <code>2017-JAN-15</code>.
     * @param string $minutes Only returns plays that have changed in the last X minutes.  You specify how many minutes in time to go back.  Valid entries are:
     * <code>1</code>, <code>2</code> ... <code>all</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayByPlay[]|ResponseInterface
     */
    public function playByPlayDelta(
        string $date,
        string $minutes,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayByPlayDelta($format, $date, $minutes), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s). <br>Examples: <code>2015-JUL-31</code>, <code>2015-SEP-01</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGameProjection[]|ResponseInterface
     */
    public function projectedPlayerGameStatsByDateWInjuriesDfsSalaries(
        string $date,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new ProjectedPlayerGameStatsByDateWInjuriesDfsSalaries($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).<br>Examples: <code>2015-JUL-31</code>, <code>2015-SEP-01</code>.
     * @param string $playerid Unique FantasyData Player ID. Example:<code>20000571</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGameProjection|ResponseInterface
     */
    public function projectedPlayerGameStatsByPlayerWInjuriesDfsSalaries(
        string $date,
        string $playerid,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new ProjectedPlayerGameStatsByPlayerWInjuriesDfsSalaries($format, $date,
            $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).
     * <br>Examples: <code>2017-DEC-01</code>, <code>2018-FEB-15</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|DfsSlate[]|ResponseInterface
     */
    public function dfsSlatesByDate(string $date, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DfsSlatesByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2018</code>, <code>2019</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerSeasonProjection[]|ResponseInterface
     */
    public function projectedPlayerSeasonStats(
        string $season,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new ProjectedPlayerSeasonStats($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2018</code>, <code>2019</code>, etc.
     * @param string $playerid Unique FantasyData Player ID. Example:<code>20000571</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerSeasonProjection|ResponseInterface
     */
    public function projectedPlayerSeasonStatsByPlayer(
        string $season,
        string $playerid,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new ProjectedPlayerSeasonStatsByPlayer($format, $season, $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2018</code>, <code>2019</code>, etc.
     * @param string $team The abbreviation of the requested team.
     * <br>Examples: <code>MIA</code>, <code>PHI</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerSeasonProjection[]|ResponseInterface
     */
    public function projectedPlayerSeasonStatsByTeam(
        string $season,
        string $team,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new ProjectedPlayerSeasonStatsByTeam($format, $season, $team), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Article[]|ResponseInterface
     */
    public function rotoballerArticles(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new RotoballerArticles($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the news.
     * <br>Examples: <code>2017-JUL-31</code>, <code>2017-SEP-01</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Article[]|ResponseInterface
     */
    public function rotoballerArticlesByDate(string $date, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new RotoballerArticlesByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $playerid Unique FantasyData Player ID.
     * Example:<code>10000507</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Article[]|ResponseInterface
     */
    public function rotoballerArticlesByPlayer(
        string $playerid,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new RotoballerArticlesByPlayer($format, $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|News[]|ResponseInterface
     */
    public function premiumNews(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PremiumNews($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $playerid Unique FantasyData Player ID.
     * Example:<code>10000507</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|News[]|ResponseInterface
     */
    public function premiumNewsByPlayer(string $playerid, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PremiumNewsByPlayer($format, $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the news.
     * <br>Examples: <code>2017-JUL-31</code>, <code>2017-SEP-01</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|News[]|ResponseInterface
     */
    public function premiumNewsByDate(string $date, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PremiumNewsByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Team[]|ResponseInterface
     */
    public function teamsActive(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new TeamsActive($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).
     * <br>Examples: <code>2015-JUL-31</code>, <code>2015-SEP-01</code>.
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
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
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
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|News[]|ResponseInterface
     */
    public function news(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\News($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the news.
     * <br>Examples: <code>2015-JUL-31</code>, <code>2015-SEP-01</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|News[]|ResponseInterface
     */
    public function newsByDate(string $date, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new NewsByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $playerid Unique FantasyData Player ID.
     * Example:<code>10000507</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|News[]|ResponseInterface
     */
    public function newsByPlayer(string $playerid, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new NewsByPlayer($format, $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
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
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).
     * <br>Examples: <code>2015-JUL-31</code>, <code>2015-SEP-01</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|TeamGame[]|ResponseInterface
     */
    public function teamGameStatsByDate(string $date, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new TeamGameStatsByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season.
     * <br>Examples: <code>2015</code>, <code>2016</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|TeamSeason[]|ResponseInterface
     */
    public function teamSeasonStats(string $season, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
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
    public function areGamesInProgress(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new AreGamesInProgress($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Season|ResponseInterface
     */
    public function currentSeason(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CurrentSeason($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season.
     * <br>Examples: <code>2015</code>, <code>2016</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Standing[]|ResponseInterface
     */
    public function standings(string $season, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Standings($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Team[]|ResponseInterface
     */
    public function teamsAll(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new TeamsAll($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Player[]|ResponseInterface
     */
    public function playerDetailsByActive(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PlayerDetailsByActive($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Player[]|ResponseInterface
     */
    public function playerDetailsByFreeAgent(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PlayerDetailsByFreeAgent($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $playerid Unique FantasyData Player ID. Example:<code>20000571</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Player|ResponseInterface
     */
    public function playerDetailsByPlayer(string $playerid, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PlayerDetailsByPlayer($format, $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $gameid The GameID of an NBA game.  GameIDs can be found in the Games API.  Valid entries are <code>14620</code>, <code>16905</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BoxScore|ResponseInterface
     */
    public function boxScore(string $gameid, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\BoxScore($format, $gameid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).
     * <br>Examples: <code>2015-JUL-31</code>, <code>2015-SEP-01</code>.
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
     * @param string $date The date of the game(s).
     * <br>Examples: <code>2015-JUL-31</code>, <code>2015-SEP-01</code>.
     * @param string $minutes Only returns player statistics that have changed in the last X minutes.  You specify how many minutes in time to go back.  Valid entries are:
     * <code>1</code> or <code>2</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BoxScore[]|ResponseInterface
     */
    public function boxScoresByDateDelta(
        string $date,
        string $minutes,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new BoxScoresByDateDelta($format, $date, $minutes), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).
     * <br>Examples: <code>2015-JUL-31</code>, <code>2015-SEP-01</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGame[]|ResponseInterface
     */
    public function playerGameStatsByDate(string $date, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PlayerGameStatsByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season.
     * <br>Examples: <code>2015</code>, <code>2016</code>.
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
     * @param string $season Year of the season.
     * <br>Examples: <code>2015</code>, <code>2016</code>.
     * @param string $team The abbreviation of the requested team.
     * <br>Examples: <code>MIA</code>, <code>PHI</code>.
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
     * @param string $team The abbreviation of the requested team.
     * <br>Examples: <code>SF</code>, <code>NYY</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Player[]|ResponseInterface
     */
    public function playersByTeam(string $team, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PlayersByTeam($format, $team), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season.
     * <br>Examples: <code>2015</code>, <code>2016</code>.
     * @param string $playerid Unique FantasyData Player ID.
     * Example:<code>20000571</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerSeason|ResponseInterface
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
     * @param string $date The date of the game(s).
     * <br>Examples: <code>2015-JUL-31</code>, <code>2015-SEP-01</code>.
     * @param string $playerid Unique FantasyData Player ID.
     * Example:<code>20000571</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGame|ResponseInterface
     */
    public function playerGameStatsByPlayer(
        string $date,
        string $playerid,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerGameStatsByPlayer($format, $date, $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season.
     * <br>Examples: <code>2015</code>, <code>2016</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|TeamSeason[]|ResponseInterface
     */
    public function teamStatsAllowedByPosition(
        string $season,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new TeamStatsAllowedByPosition($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season.
     * <br>Examples: <code>2015</code>, <code>2016</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerInfo[]|ResponseInterface
     */
    public function allStars(string $season, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new AllStars($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Season to get games from. Example <code>2019POST</code>, <code>2020</code>
     * @param string $playerid Unique FantasyData Player ID.
     * Example:<code>20000571</code>.
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
     * @param string $date The date of the game(s). <br>Examples: <code>2018-06-20</code>, <code>2018-06-23</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|GameInfo[]|ResponseInterface
     */
    public function preGameOddsByDate(string $date, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PreGameOddsByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $gameid The GameID of an NBA game.  GameIDs can be found in the Games API.  Valid entries are <code>12780</code> or <code>12781</code>
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
     * @param string $date The date of the game(s). <br>Examples: <code>2018-06-20</code>, <code>2018-06-23</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|GameInfo[]|ResponseInterface
     */
    public function inGameOddsByDate(string $date, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new InGameOddsByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $gameid The GameID of an NBA game.  GameIDs can be found in the Games API.  Valid entries are <code>12780</code> or <code>12781</code>
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
     * @param string $date The date of the game(s). <br>Examples: <code>2018-06-20</code>, <code>2018-06-23</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerProp[]|ResponseInterface
     */
    public function playerPropsByDate(string $date, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PlayerPropsByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s). <br>Examples: <code>2018-06-20</code>, <code>2018-06-23</code>.
     * @param string $team The abbreviation of the requested team. <br> Examples: <code>PHI</code>, <code>MIN</code>, <code>DET</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerProp[]|ResponseInterface
     */
    public function playerPropsByTeam(
        string $date,
        string $team,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerPropsByTeam($format, $date, $team), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s). <br>Examples: <code>2018-06-20</code>, <code>2018-06-23</code>.
     * @param string $playerid Unique FantasyData Player ID. Example:<code>20000571</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerProp[]|ResponseInterface
     */
    public function playerPropsByPlayer(
        string $date,
        string $playerid,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerPropsByPlayer($format, $date, $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s). <br>Examples: <code>2018-06-20</code>, <code>2018-06-23</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|GameInfo[]|ResponseInterface
     */
    public function alternateMarketPreGameOddsByDate(
        string $date,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new AlternateMarketPreGameOddsByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $gameid The GameID of an NBA game.  GameIDs can be found in the Games API.  Valid entries are <code>12780</code> or <code>12781</code>
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
     * @param string $date The date of the game(s). <br>Examples: <code>2020-02-15</code>, <code>2020-02-23</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingEvent[]|ResponseInterface
     */
    public function bettingEventsByDate(string $date, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingEventsByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2020</code>, <code>2020PRE</code>, <code>2020POST</code>, <code>2020STAR</code>, <code>2021</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingEvent[]|ResponseInterface
     */
    public function bettingEventsBySeason(string $season, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingEventsBySeason($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $eventId The EventId of the desired event/game for which to pull all betting markets (includes outcomes/bets). Valid entries include: <code>134</code>, <code>155</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingMarket[]|ResponseInterface
     */
    public function bettingMarketsByEvent(string $eventId, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingMarketsByEvent($format, $eventId), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $marketId The MarketId of the desired market for which to pull all outcomes/bets. Valid entries include: <code>421</code>, <code>1041</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingMarket|ResponseInterface
     */
    public function bettingMarket(string $marketId, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\BettingMarket($format, $marketId), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season <br>Examples: <code>2020</code>, <code>2021</code>, etc
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingEvent[]|ResponseInterface
     */
    public function bettingFuturesBySeason(string $season, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingFuturesBySeason($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $eventId The EventId of the desired event/game for which to pull all betting markets (includes outcomes/bets). Valid entries include: <code>134</code>, <code>155</code>, etc.
     * @param string $marketTypeID The Market Type ID of the desired MarketTypes to pull. Some common types include:
     * <code>1</code> for `Game Lines`
     * <code>2</code> for `Player Props`
     * <code>3</code> for `Team Props`
     * <code>6</code> for `Game Props`
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingMarket[]|ResponseInterface
     */
    public function bettingMarketsByMarketType(
        string $eventId,
        string $marketTypeID,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new BettingMarketsByMarketType($format, $eventId, $marketTypeID), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s). <br>Examples: <code>2020-02-15</code>, <code>2020-02-23</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingEvent[]|ResponseInterface
     */
    public function bettingPlayerPropsByDate(string $date, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingPlayerPropsByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $gameID The GameID of the desired game for which to pull all betting markets (includes outcomes/bets). Valid entries include: <code>14814</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingMarket[]|ResponseInterface
     */
    public function bettingMarketsByGameid(string $gameID, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingMarketsByGameid($format, $gameID), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $team The abbreviation of the requested team. <br> Examples: <code>PHI</code>, <code>MIN</code>, <code>DET</code>, etc.
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
     * @param string $team The abbreviation of the requested team. <br> Examples: <code>PHI</code>, <code>MIN</code>, <code>DET</code>, etc.
     * @param string $opponent The abbreviation of the requested opponent. <br> Examples: <code>PHI</code>, <code>MIN</code>, <code>DET</code>, etc.
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingEntityMetadata[]|ResponseInterface
     */
    public function bettingMetadata(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
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

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Headshot[]|ResponseInterface
     */
    public function headshots(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Headshots($format), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.sportsdata.io/v3/nba');
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