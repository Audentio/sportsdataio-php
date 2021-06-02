<?php

namespace Sportsdata\API\NFL;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Message\ResponseInterface;
use Sportsdata\API\NFL\Endpoint\AdvancedPlayerGameStats;
use Sportsdata\API\NFL\Endpoint\AdvancedPlayerGameStatsByPlayer;
use Sportsdata\API\NFL\Endpoint\AdvancedPlayerInfo;
use Sportsdata\API\NFL\Endpoint\AdvancedPlayers;
use Sportsdata\API\NFL\Endpoint\AdvancedPlayerSeasonStatsByPlayer;
use Sportsdata\API\NFL\Endpoint\AdvancedPlayerSeasonStatsByTeam;
use Sportsdata\API\NFL\Endpoint\AlternateMarketPreGameOddsByWeek;
use Sportsdata\API\NFL\Endpoint\AlternateMarketPreGameOddsLineMovement;
use Sportsdata\API\NFL\Endpoint\AreGamesInProgress;
use Sportsdata\API\NFL\Endpoint\BettingEventsByDate;
use Sportsdata\API\NFL\Endpoint\BettingEventsBySeason;
use Sportsdata\API\NFL\Endpoint\BettingFuturesBySeason;
use Sportsdata\API\NFL\Endpoint\BettingMarketsByEvent;
use Sportsdata\API\NFL\Endpoint\BettingMarketsByMarketType;
use Sportsdata\API\NFL\Endpoint\BettingMarketsByScoreid;
use Sportsdata\API\NFL\Endpoint\BettingMetadata;
use Sportsdata\API\NFL\Endpoint\BettingPlayerPropsByDate;
use Sportsdata\API\NFL\Endpoint\BettingTrendsByMatchup;
use Sportsdata\API\NFL\Endpoint\BettingTrendsByTeam;
use Sportsdata\API\NFL\Endpoint\BoxScoreByScoreidV;
use Sportsdata\API\NFL\Endpoint\BoxScoresDeltaV;
use Sportsdata\API\NFL\Endpoint\BoxScoresVSimulation;
use Sportsdata\API\NFL\Endpoint\BoxScoreV;
use Sportsdata\API\NFL\Endpoint\ByeWeeks;
use Sportsdata\API\NFL\Endpoint\DailyFantasyPlayers;
use Sportsdata\API\NFL\Endpoint\DailyFantasyScoring;
use Sportsdata\API\NFL\Endpoint\DfsSlatesByDate;
use Sportsdata\API\NFL\Endpoint\DfsSlatesByWeek;
use Sportsdata\API\NFL\Endpoint\FantasyDefenseGameStats;
use Sportsdata\API\NFL\Endpoint\FantasyDefenseGameStatsByTeam;
use Sportsdata\API\NFL\Endpoint\FantasyDefenseSeasonStats;
use Sportsdata\API\NFL\Endpoint\FantasyDefenseSeasonStatsByTeam;
use Sportsdata\API\NFL\Endpoint\FantasyPlayerOwnershipPercentagesSeasonLong;
use Sportsdata\API\NFL\Endpoint\FantasyPlayersWithAdp;
use Sportsdata\API\NFL\Endpoint\GameStatsBySeasonDeprecatedUseTeamGameStatsInstead;
use Sportsdata\API\NFL\Endpoint\GameStatsByWeekDeprecatedUseTeamGameStatsInstead;
use Sportsdata\API\NFL\Endpoint\Headshots;
use Sportsdata\API\NFL\Endpoint\IdpFantasyPlayersWithAdp;
use Sportsdata\API\NFL\Endpoint\IdpProjectedPlayerGameStatsByPlayerWInjuriesLineupsDfsSalaries;
use Sportsdata\API\NFL\Endpoint\IdpProjectedPlayerGameStatsByTeamWInjuriesLineupsDfsSalaries;
use Sportsdata\API\NFL\Endpoint\IdpProjectedPlayerGameStatsByWeekWInjuriesLineupsDfsSalaries;
use Sportsdata\API\NFL\Endpoint\InGameOddsByWeek;
use Sportsdata\API\NFL\Endpoint\InGameOddsLineMovement;
use Sportsdata\API\NFL\Endpoint\Injuries;
use Sportsdata\API\NFL\Endpoint\InjuriesByTeam;
use Sportsdata\API\NFL\Endpoint\LeagueLeadersBySeason;
use Sportsdata\API\NFL\Endpoint\LeagueLeadersByWeek;
use Sportsdata\API\NFL\Endpoint\LegacyBoxScore;
use Sportsdata\API\NFL\Endpoint\LegacyBoxScores;
use Sportsdata\API\NFL\Endpoint\LegacyBoxScoresActive;
use Sportsdata\API\NFL\Endpoint\LegacyBoxScoresDelta;
use Sportsdata\API\NFL\Endpoint\LegacyBoxScoresDeltaCurrentWeek;
use Sportsdata\API\NFL\Endpoint\LegacyBoxScoresFinal;
use Sportsdata\API\NFL\Endpoint\LegacyBoxScoresLive;
use Sportsdata\API\NFL\Endpoint\NewsByDate;
use Sportsdata\API\NFL\Endpoint\NewsByPlayer;
use Sportsdata\API\NFL\Endpoint\NewsByTeam;
use Sportsdata\API\NFL\Endpoint\PlayByPlayDelta;
use Sportsdata\API\NFL\Endpoint\PlayByPlaySimulation;
use Sportsdata\API\NFL\Endpoint\PlayerDetailsByAvailable;
use Sportsdata\API\NFL\Endpoint\PlayerDetailsByFreeAgents;
use Sportsdata\API\NFL\Endpoint\PlayerDetailsByPlayer;
use Sportsdata\API\NFL\Endpoint\PlayerDetailsByRookieDraftYear;
use Sportsdata\API\NFL\Endpoint\PlayerDetailsByTeam;
use Sportsdata\API\NFL\Endpoint\PlayerGameLogsBySeason;
use Sportsdata\API\NFL\Endpoint\PlayerGameRedZoneStats;
use Sportsdata\API\NFL\Endpoint\PlayerGameRedZoneStatsInsideFive;
use Sportsdata\API\NFL\Endpoint\PlayerGameRedZoneStatsInsideTen;
use Sportsdata\API\NFL\Endpoint\PlayerGameStatsByPlayer;
use Sportsdata\API\NFL\Endpoint\PlayerGameStatsByTeam;
use Sportsdata\API\NFL\Endpoint\PlayerGameStatsByWeek;
use Sportsdata\API\NFL\Endpoint\PlayerGameStatsByWeekDelta;
use Sportsdata\API\NFL\Endpoint\PlayerGameStatsDelta;
use Sportsdata\API\NFL\Endpoint\PlayerPropsByPlayer;
use Sportsdata\API\NFL\Endpoint\PlayerPropsByTeam;
use Sportsdata\API\NFL\Endpoint\PlayerPropsByWeek;
use Sportsdata\API\NFL\Endpoint\PlayerSeasonRedZoneStats;
use Sportsdata\API\NFL\Endpoint\PlayerSeasonRedZoneStatsInsideFive;
use Sportsdata\API\NFL\Endpoint\PlayerSeasonRedZoneStatsInsideTen;
use Sportsdata\API\NFL\Endpoint\PlayerSeasonStats;
use Sportsdata\API\NFL\Endpoint\PlayerSeasonStatsByPlayer;
use Sportsdata\API\NFL\Endpoint\PlayerSeasonStatsByTeam;
use Sportsdata\API\NFL\Endpoint\PlayerSeasonThirdDownStats;
use Sportsdata\API\NFL\Endpoint\PreGameOddsByWeek;
use Sportsdata\API\NFL\Endpoint\PreGameOddsLineMovement;
use Sportsdata\API\NFL\Endpoint\PremiumNews;
use Sportsdata\API\NFL\Endpoint\PremiumNewsByDate;
use Sportsdata\API\NFL\Endpoint\PremiumNewsByPlayer;
use Sportsdata\API\NFL\Endpoint\PremiumNewsByTeam;
use Sportsdata\API\NFL\Endpoint\ProBowlers;
use Sportsdata\API\NFL\Endpoint\ProjectedFantasyDefenseGameStatsWDfsSalaries;
use Sportsdata\API\NFL\Endpoint\ProjectedFantasyDefenseSeasonStatsWByeWeekAdp;
use Sportsdata\API\NFL\Endpoint\ProjectedPlayerGameStatsByPlayerWInjuriesLineupsDfsSalaries;
use Sportsdata\API\NFL\Endpoint\ProjectedPlayerGameStatsByTeamWInjuriesLineupsDfsSalaries;
use Sportsdata\API\NFL\Endpoint\ProjectedPlayerGameStatsByWeekWInjuriesLineupsDfsSalaries;
use Sportsdata\API\NFL\Endpoint\ProjectedPlayerSeasonStatsByPlayerWByeWeekAdp;
use Sportsdata\API\NFL\Endpoint\ProjectedPlayerSeasonStatsByTeamWByeWeekAdp;
use Sportsdata\API\NFL\Endpoint\ProjectedPlayerSeasonStatsWByeWeekAdp;
use Sportsdata\API\NFL\Endpoint\Referees;
use Sportsdata\API\NFL\Endpoint\RotoballerArticles;
use Sportsdata\API\NFL\Endpoint\RotoballerArticlesByDate;
use Sportsdata\API\NFL\Endpoint\RotoballerArticlesByPlayer;
use Sportsdata\API\NFL\Endpoint\Schedule;
use Sportsdata\API\NFL\Endpoint\ScoresBySeason;
use Sportsdata\API\NFL\Endpoint\ScoresByWeek;
use Sportsdata\API\NFL\Endpoint\ScoresByWeekSimulation;
use Sportsdata\API\NFL\Endpoint\SeasonCurrent;
use Sportsdata\API\NFL\Endpoint\SeasonLastCompleted;
use Sportsdata\API\NFL\Endpoint\SeasonUpcoming;
use Sportsdata\API\NFL\Endpoint\SportsbooksActive;
use Sportsdata\API\NFL\Endpoint\Stadiums;
use Sportsdata\API\NFL\Endpoint\Standings;
use Sportsdata\API\NFL\Endpoint\TeamGameStats;
use Sportsdata\API\NFL\Endpoint\TeamsActive;
use Sportsdata\API\NFL\Endpoint\TeamsAll;
use Sportsdata\API\NFL\Endpoint\TeamsBySeason;
use Sportsdata\API\NFL\Endpoint\TeamSeasonStats;
use Sportsdata\API\NFL\Endpoint\Timeframes;
use Sportsdata\API\NFL\Endpoint\WeekCurrent;
use Sportsdata\API\NFL\Endpoint\WeekLastCompleted;
use Sportsdata\API\NFL\Endpoint\WeekUpcoming;
use Sportsdata\API\NFL\Endpoint\XPing;
use Sportsdata\API\NFL\Model\AdvancedPlayer;
use Sportsdata\API\NFL\Model\AdvancedPlayerGame;
use Sportsdata\API\NFL\Model\AdvancedPlayerSeason;
use Sportsdata\API\NFL\Model\Article;
use Sportsdata\API\NFL\Model\BettingEntityMetadata;
use Sportsdata\API\NFL\Model\BettingEvent;
use Sportsdata\API\NFL\Model\BettingMarket;
use Sportsdata\API\NFL\Model\BoxScore;
use Sportsdata\API\NFL\Model\BoxScoreV3;
use Sportsdata\API\NFL\Model\Bye;
use Sportsdata\API\NFL\Model\DailyFantasyPlayer;
use Sportsdata\API\NFL\Model\DfsSlate;
use Sportsdata\API\NFL\Model\FantasyDefenseGame;
use Sportsdata\API\NFL\Model\FantasyDefenseGameProjection;
use Sportsdata\API\NFL\Model\FantasyDefenseSeason;
use Sportsdata\API\NFL\Model\FantasyDefenseSeasonProjection;
use Sportsdata\API\NFL\Model\FantasyPlayer;
use Sportsdata\API\NFL\Model\Game;
use Sportsdata\API\NFL\Model\GameInfo;
use Sportsdata\API\NFL\Model\Headshot;
use Sportsdata\API\NFL\Model\Injury;
use Sportsdata\API\NFL\Model\MatchupTrends;
use Sportsdata\API\NFL\Model\News;
use Sportsdata\API\NFL\Model\PlayByPlay;
use Sportsdata\API\NFL\Model\Player;
use Sportsdata\API\NFL\Model\PlayerDetail;
use Sportsdata\API\NFL\Model\PlayerGame;
use Sportsdata\API\NFL\Model\PlayerGameProjection;
use Sportsdata\API\NFL\Model\PlayerGameRedZone;
use Sportsdata\API\NFL\Model\PlayerInfo;
use Sportsdata\API\NFL\Model\PlayerOwnership;
use Sportsdata\API\NFL\Model\PlayerProp;
use Sportsdata\API\NFL\Model\PlayerSeason;
use Sportsdata\API\NFL\Model\PlayerSeasonProjection;
use Sportsdata\API\NFL\Model\PlayerSeasonRedZone;
use Sportsdata\API\NFL\Model\PlayerSeasonThirdDown;
use Sportsdata\API\NFL\Model\Referee;
use Sportsdata\API\NFL\Model\Score;
use Sportsdata\API\NFL\Model\Sportsbook;
use Sportsdata\API\NFL\Model\Stadium;
use Sportsdata\API\NFL\Model\Standing;
use Sportsdata\API\NFL\Model\Team;
use Sportsdata\API\NFL\Model\TeamGame;
use Sportsdata\API\NFL\Model\TeamSeason;
use Sportsdata\API\NFL\Model\TeamTrends;
use Sportsdata\API\NFL\Model\Timeframe;
use Sportsdata\API\NFL\Normalizer\JaneObjectNormalizer;
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
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $hometeam Abbreviation of the home team. Example: <code>WAS</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayByPlay|ResponseInterface
     */
    public function playByPlay(
        string $season,
        string $week,
        string $hometeam,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new Endpoint\PlayByPlay($format, $season, $week, $hometeam),
            $fetch);
    }

    /**
     * Gets simulated live play-by-play of NFL games, covering the Conference Championship games on January 21, 2018.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $numberofplays The number of plays to progress in this NFL live game simulation. Example entries are <code>0</code>, <code>1</code>, <code>2</code>, <code>3</code>, <code>150</code>, <code>200</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayByPlay[]|ResponseInterface
     */
    public function playByPlaySimulation(
        string $numberofplays,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayByPlaySimulation($format, $numberofplays), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $minutes Only returns player statistics that have changed in the last X minutes.  You specify how many minutes in time to go back.  Valid entries are:<br>
     * <code>1</code> or <code>2</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayByPlay[]|ResponseInterface
     */
    public function playByPlayDelta(
        string $season,
        string $week,
        string $minutes,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayByPlayDelta($format, $season, $week, $minutes), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|FantasyDefenseSeasonProjection[]|ResponseInterface
     */
    public function projectedFantasyDefenseSeasonStatsWByeWeekAdp(
        string $season,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new ProjectedFantasyDefenseSeasonStatsWByeWeekAdp($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|FantasyDefenseGameProjection[]|ResponseInterface
     */
    public function projectedFantasyDefenseGameStatsWDfsSalaries(
        string $season,
        string $week,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new ProjectedFantasyDefenseGameStatsWDfsSalaries($format, $season, $week),
            $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week
     * Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $playerid Each NFL player has a unique ID assigned by FantasyData. Player IDs can be determined by pulling player related data. Example:<code>14257</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGameProjection|ResponseInterface
     */
    public function projectedPlayerGameStatsByPlayerWInjuriesLineupsDfsSalaries(
        string $season,
        string $week,
        string $playerid,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new ProjectedPlayerGameStatsByPlayerWInjuriesLineupsDfsSalaries($format, $season,
            $week, $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $playerid Each NFL player has a unique ID assigned by FantasyData. Player IDs can be determined by pulling player related data. Example:<code>14257</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerSeasonProjection|ResponseInterface
     */
    public function projectedPlayerSeasonStatsByPlayerWByeWeekAdp(
        string $season,
        string $playerid,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new ProjectedPlayerSeasonStatsByPlayerWByeWeekAdp($format, $season, $playerid),
            $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGameProjection[]|ResponseInterface
     */
    public function projectedPlayerGameStatsByTeamWInjuriesLineupsDfsSalaries(
        string $season,
        string $week,
        string $team,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new ProjectedPlayerGameStatsByTeamWInjuriesLineupsDfsSalaries($format, $season,
            $week, $team), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerSeasonProjection[]|ResponseInterface
     */
    public function projectedPlayerSeasonStatsWByeWeekAdp(
        string $season,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new ProjectedPlayerSeasonStatsWByeWeekAdp($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerSeasonProjection[]|ResponseInterface
     */
    public function projectedPlayerSeasonStatsByTeamWByeWeekAdp(
        string $season,
        string $team,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new ProjectedPlayerSeasonStatsByTeamWByeWeekAdp($format, $season, $team), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week
     * Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGameProjection[]|ResponseInterface
     */
    public function projectedPlayerGameStatsByWeekWInjuriesLineupsDfsSalaries(
        string $season,
        string $week,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new ProjectedPlayerGameStatsByWeekWInjuriesLineupsDfsSalaries($format, $season,
            $week), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the slates.
     * <br>Examples: <code>2017-SEP-25</code>, <code>2017-10-31</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|DfsSlate[]|ResponseInterface
     */
    public function dfsSlatesByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DfsSlatesByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|DfsSlate[]|ResponseInterface
     */
    public function dfsSlatesByWeek(
        string $season,
        string $week,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new DfsSlatesByWeek($format, $season, $week), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $playerid Each NFL player has a unique ID assigned by FantasyData. Player IDs can be determined by pulling player related data. Example:<code>14257</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGameProjection|ResponseInterface
     */
    public function idpProjectedPlayerGameStatsByPlayerWInjuriesLineupsDfsSalaries(
        string $season,
        string $week,
        string $playerid,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new IdpProjectedPlayerGameStatsByPlayerWInjuriesLineupsDfsSalaries($format,
            $season, $week, $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGameProjection[]|ResponseInterface
     */
    public function idpProjectedPlayerGameStatsByWeekWInjuriesLineupsDfsSalaries(
        string $season,
        string $week,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new IdpProjectedPlayerGameStatsByWeekWInjuriesLineupsDfsSalaries($format, $season,
            $week), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGameProjection[]|ResponseInterface
     */
    public function idpProjectedPlayerGameStatsByTeamWInjuriesLineupsDfsSalaries(
        string $season,
        string $week,
        string $team,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new IdpProjectedPlayerGameStatsByTeamWInjuriesLineupsDfsSalaries($format, $season,
            $week, $team), $fetch);
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
     * @param string $date The date of the news.
     * <br>Examples: <code>2017-JUL-31</code>, <code>2017-SEP-01</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Article[]|ResponseInterface
     */
    public function rotoballerArticlesByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new RotoballerArticlesByDate($format, $date), $fetch);
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
    public function premiumNewsByPlayer(string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
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
    public function premiumNewsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PremiumNewsByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|News[]|ResponseInterface
     */
    public function premiumNewsByTeam(string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PremiumNewsByTeam($format, $team), $fetch);
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
     * Gets all active teams.
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
     * Get bye weeks for the teams during a specified NFL season.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season
     * Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Bye[]|ResponseInterface
     */
    public function byeWeeks(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ByeWeeks($format, $season), $fetch);
    }

    /**
     * Year of the current NFL season. This value changes on July 1st. The earliest season for Fantasy data is 2001. The earliest season for Team data is 1985. The earliest season for Fantasy data is 2001. The earliest season for Team data is 1985.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface
     */
    public function seasonCurrent(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new SeasonCurrent($format), $fetch);
    }

    /**
     * Number of the current week of the NFL season. This value usually changes on Tuesday nights or Wednesday mornings at midnight ET.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface
     */
    public function weekCurrent(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new WeekCurrent($format), $fetch);
    }

    /**
     * Game scores for a specified season.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2018</code>, <code>2018PRE</code>, <code>2018POST</code>, <code>2018STAR</code>, <code>2019</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Score[]|ResponseInterface
     */
    public function scoresBySeason(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ScoresBySeason($format, $season), $fetch);
    }

    /**
     * Year of the most recently completed season. this value changes immediately after the Super Bowl. The earliest season for Fantasy data is 2001. The earliest season for Team data is 1985.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface
     */
    public function seasonLastCompleted(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new SeasonLastCompleted($format), $fetch);
    }

    /**
     * Number of the current week of the NFL season. This value usually changes on Tuesday nights or Wednesday mornings at midnight ET.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface
     */
    public function weekLastCompleted(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new WeekLastCompleted($format), $fetch);
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
     * @param string $format
     * Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $playerid Each NFL player has a unique ID assigned by FantasyData. Player IDs can be determined by pulling player related data. Example:<code>14257</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|News[]|ResponseInterface
     */
    public function newsByPlayer(string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new NewsByPlayer($format, $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|News[]|ResponseInterface
     */
    public function newsByTeam(string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new NewsByTeam($format, $team), $fetch);
    }

    /**
     * Game schedule for a specified season.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2018</code>, <code>2018PRE</code>, <code>2018POST</code>, <code>2018STAR</code>, <code>2019</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Model\Schedule[]|ResponseInterface
     */
    public function schedule(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Schedule($format, $season), $fetch);
    }

    /**
     * Get game scores for a specified week of a season.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season
     * Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week
     * Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Score[]|ResponseInterface
     */
    public function scoresByWeek(
        string $season,
        string $week,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new ScoresByWeek($format, $season, $week), $fetch);
    }

    /**
     * This method returns all stadiums.
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
     * @param string $season
     * Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Standing[]|ResponseInterface
     */
    public function standings(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Standings($format, $season), $fetch);
    }

    /**
     * List of teams playing in a specified season.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season
     * Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Team[]|ResponseInterface
     */
    public function teamsBySeason(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new TeamsBySeason($format, $season), $fetch);
    }

    /**
     * Get detailed information about past, present, and future timeframes.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $type The type of timeframes to return.  Valid entries are <code>current</code> or <code>upcoming</code> or <code>completed</code> or <code>recent</code> or <code>all</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Timeframe[]|ResponseInterface
     */
    public function timeframes(string $type = 'current', string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Timeframes($format, $type), $fetch);
    }

    /**
     * Year of the current NFL season, if we are in the mid-season. If we are in the off-season, then year of the next upcoming season. This value changes immediately after the Super Bowl. The earliest season for Fantasy data is 2001. The earliest season for Team data is 1985.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface
     */
    public function seasonUpcoming(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new SeasonUpcoming($format), $fetch);
    }

    /**
     * Number of the current week of the NFL season. This value usually changes on Tuesday nights or Wednesday mornings at midnight ET.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface
     */
    public function weekUpcoming(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new WeekUpcoming($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Game[]|ResponseInterface
     */
    public function gameStatsBySeasonDeprecatedUseTeamGameStatsInstead(
        string $season,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new GameStatsBySeasonDeprecatedUseTeamGameStatsInstead($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season
     * Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week
     * Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Game[]|ResponseInterface
     */
    public function gameStatsByWeekDeprecatedUseTeamGameStatsInstead(
        string $season,
        string $week,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new GameStatsByWeekDeprecatedUseTeamGameStatsInstead($format, $season, $week),
            $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season
     * Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week
     * Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|TeamGame[]|ResponseInterface
     */
    public function teamGameStats(
        string $season,
        string $week,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new TeamGameStats($format, $season, $week), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season
     * Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|TeamSeason[]|ResponseInterface
     */
    public function teamSeasonStats(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new TeamSeasonStats($format, $season), $fetch);
    }

    /**
     * Gets all teams, including pro bowl teams.
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
     * @param string $date The date of the news.
     * <br>Examples: <code>2017-JUL-31</code>, <code>2017-SEP-01</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|News[]|ResponseInterface
     */
    public function newsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new NewsByDate($format, $date), $fetch);
    }

    /**
     * Ping NFL API
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $seconds Number of seconds to sleep before responding
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface
     */
    public function xPing(string $seconds, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new XPing($format, $seconds), $fetch);
    }

    /**
     * Gets simulated live scores of NFL games, covering the Conference Championship games on January 21, 2018.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $numberofplays The number of plays to progress in this NFL live game simulation. Example entries are <code>0</code>, <code>1</code>, <code>2</code>, <code>3</code>, <code>150</code>, <code>200</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Score[]|ResponseInterface
     */
    public function scoresByWeekSimulation(
        string $numberofplays,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new ScoresByWeekSimulation($format, $numberofplays), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Player[]|ResponseInterface
     */
    public function playerDetailsByAvailable(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PlayerDetailsByAvailable($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Player[]|ResponseInterface
     */
    public function playerDetailsByFreeAgents(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PlayerDetailsByFreeAgents($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $playerid Each NFL player has a unique ID assigned by FantasyData. Player IDs can be determined by pulling player related data. Example:<code>732</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerDetail|ResponseInterface
     */
    public function playerDetailsByPlayer(string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PlayerDetailsByPlayer($format, $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerDetail[]|ResponseInterface
     */
    public function playerDetailsByTeam(string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PlayerDetailsByTeam($format, $team), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season.<br>Examples: <code>2018</code>, <code>2019</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Player[]|ResponseInterface
     */
    public function playerDetailsByRookieDraftYear(
        string $season,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerDetailsByRookieDraftYear($format, $season), $fetch);
    }

    /**
     * Returns full list of NFL Referees
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Referee[]|ResponseInterface
     */
    public function referees(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Referees($format), $fetch);
    }

    /**
     * This method returns box scores for all games that are either in-progress or have been updated within the last 30 minutes.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BoxScore[]|ResponseInterface
     */
    public function legacyBoxScoresActive(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new LegacyBoxScoresActive($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season
     * Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week
     * Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $hometeam Abbreviation of the home team. Example: <code>WAS</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BoxScore|ResponseInterface
     */
    public function legacyBoxScore(
        string $season,
        string $week,
        string $hometeam,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new LegacyBoxScore($format, $season, $week, $hometeam), $fetch);
    }

    /**
     * This method returns all box scores for a given season and week.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season
     * Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week
     * Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BoxScore[]|ResponseInterface
     */
    public function legacyBoxScores(
        string $season,
        string $week,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new LegacyBoxScores($format, $season, $week), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date
     * The date of the contest for which you're pulling players
     * <code>2014-SEP-21</code>,
     * <code>2014-NOV-15</code>, etc
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|DailyFantasyPlayer[]|ResponseInterface
     */
    public function dailyFantasyPlayers(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DailyFantasyPlayers($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $minutes Only returns player statistics that have changed in the last X minutes.  You specify how many minutes in time to go back.  Valid entries are:<br>
     * <code>1</code> or <code>2</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BoxScore[]|ResponseInterface
     */
    public function legacyBoxScoresDeltaCurrentWeek(
        string $minutes,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new LegacyBoxScoresDeltaCurrentWeek($format, $minutes), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $minutes
     * Only returns player statistics that have changed in the last X minutes.  You specify how many minutes in time to go back.  Valid entries are:
     * <code>1</code> or <code>2</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGame[]|ResponseInterface
     */
    public function playerGameStatsDelta(string $minutes, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PlayerGameStatsDelta($format, $minutes), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season
     * Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week
     * Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|FantasyDefenseGame[]|ResponseInterface
     */
    public function fantasyDefenseGameStats(
        string $season,
        string $week,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new FantasyDefenseGameStats($format, $season, $week), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season
     * Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|FantasyDefenseSeason[]|ResponseInterface
     */
    public function fantasyDefenseSeasonStats(
        string $season,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new FantasyDefenseSeasonStats($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BoxScore[]|ResponseInterface
     */
    public function legacyBoxScoresFinal(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new LegacyBoxScoresFinal($format), $fetch);
    }

    /**
     *
     *
     * @param string $format
     * Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season
     * Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week
     * Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $position Playerâ€™s position that you would like to filter by.
     * @param string $column Response member you would like results sorted by.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGame[]|ResponseInterface
     */
    public function leagueLeadersByWeek(
        string $season,
        string $week,
        string $column,
        string $position = 'ALL',
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new LeagueLeadersByWeek($format, $season, $week, $position, $column), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season
     * Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week
     * Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Injury[]|ResponseInterface
     */
    public function injuries(string $season, string $week, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Injuries($format, $season, $week), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season
     * Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week
     * Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Injury[]|ResponseInterface
     */
    public function injuriesByTeam(
        string $season,
        string $week,
        string $team,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new InjuriesByTeam($format, $season, $week, $team), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BoxScore[]|ResponseInterface
     */
    public function legacyBoxScoresLive(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new LegacyBoxScoresLive($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season
     * Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week
     * Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $playerid Each NFL player has a unique ID assigned by FantasyData. Player IDs can be determined by pulling player related data. Example:<code>732</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGame|ResponseInterface
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
     * @param string $season
     * Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $playerid Each NFL player has a unique ID assigned by FantasyData. Player IDs can be determined by pulling player related data. Example:<code>732</code>.
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
     * @param string $season
     * Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week
     * Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGame[]|ResponseInterface
     */
    public function playerGameStatsByTeam(
        string $season,
        string $week,
        string $team,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerGameStatsByTeam($format, $season, $week, $team), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season
     * Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week
     * Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $minutes Only returns player statistics that have changed in the last X minutes.  You specify how many minutes in time to go back.  Valid entries are:<br>
     * <code>1</code> or <code>2</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGame[]|ResponseInterface
     */
    public function playerGameStatsByWeekDelta(
        string $season,
        string $week,
        string $minutes,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerGameStatsByWeekDelta($format, $season, $week, $minutes), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season
     * Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
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
     * @param string $season
     * Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $position Playerâ€™s position that you would like to filter by.
     * @param string $column Response member you would like results sorted by.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerSeason[]|ResponseInterface
     */
    public function leagueLeadersBySeason(
        string $season,
        string $column,
        string $position = 'ALL',
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new LeagueLeadersBySeason($format, $season, $position, $column), $fetch);
    }

    /**
     * This method returns a comprehensive list of draftable fantasy football players, including QB, RB, WR, TE, K and DEF.  Players are sorted by ADP (AverageDraftPosition).
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|FantasyPlayer[]|ResponseInterface
     */
    public function fantasyPlayersWithAdp(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new FantasyPlayersWithAdp($format), $fetch);
    }

    /**
     * This method returns all box scores for a given season and week, but only returns player stats that have changed in the last X minutes.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $minutes Only returns player statistics that have changed in the last X minutes.  You specify how many minutes in time to go back.  Valid entries are:<br>
     * <code>1</code> or <code>2</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BoxScore[]|ResponseInterface
     */
    public function legacyBoxScoresDelta(
        string $season,
        string $week,
        string $minutes,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new LegacyBoxScoresDelta($format, $season, $week, $minutes), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the contest for which you're pulling players
     * <code>2014-SEP-21</code>,
     * <code>2014-NOV-15</code>, etc
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Model\DailyFantasyScoring[]|ResponseInterface
     */
    public function dailyFantasyScoring(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DailyFantasyScoring($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season
     * Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week
     * Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
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
     * Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerSeason[]|ResponseInterface
     */
    public function playerSeasonStats(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PlayerSeasonStats($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|FantasyDefenseGame|ResponseInterface
     */
    public function fantasyDefenseGameStatsByTeam(
        string $season,
        string $week,
        string $team,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new FantasyDefenseGameStatsByTeam($format, $season, $week, $team), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|FantasyDefenseSeason|ResponseInterface
     */
    public function fantasyDefenseSeasonStatsByTeam(
        string $season,
        string $team,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new FantasyDefenseSeasonStatsByTeam($format, $season, $team), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerSeasonRedZone[]|ResponseInterface
     */
    public function playerSeasonRedZoneStats(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PlayerSeasonRedZoneStats($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season
     * Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerSeasonThirdDown[]|ResponseInterface
     */
    public function playerSeasonThirdDownStats(
        string $season,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerSeasonThirdDownStats($format, $season), $fetch);
    }

    /**
     * This method returns all box scores for a given season and week, but only returns player stats that have changed in the last X minutes. You can also filter by type of player stats to include, such as traditional fantasy players, IDP players or all players.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $playerstoinclude The subcategory of players to include in the returned PlayerGame records. Possible values include:<br><br>
     * <code>all</code> Returns all players<br>
     * <code>fantasy</code> Returns traditional fantasy players (QB, RB, WR, TE, K, DST)<br>
     * <code>idp</code> Returns traditional fantasy players and IDP players.
     * @param string $minutes Only returns player statistics that have changed in the last X minutes.  You specify how many minutes in time to go back.  Valid entries are:<br><code>1</code>,
     * <code>2</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BoxScoreV3[]|ResponseInterface
     */
    public function boxScoresDeltaV(
        string $season,
        string $week,
        string $minutes,
        string $playerstoinclude = 'all',
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new BoxScoresDeltaV($format, $season, $week, $playerstoinclude, $minutes),
            $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $hometeam Abbreviation of a team playing in this game. Example: <code>WAS</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BoxScoreV3|ResponseInterface
     */
    public function boxScoreV(
        string $season,
        string $week,
        string $hometeam,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new BoxScoreV($format, $season, $week, $hometeam), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $scoreid The ScoreID of the game. Possible values include: <code>16247</code>, <code>16245</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BoxScoreV3|ResponseInterface
     */
    public function boxScoreByScoreidV(string $scoreid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BoxScoreByScoreidV($format, $scoreid), $fetch);
    }

    /**
     * This method returns the top 300+ IDP Fantasy Players for the current or upcoming season, ordered by AverageDraftPositionIDP.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|FantasyPlayer[]|ResponseInterface
     */
    public function idpFantasyPlayersWithAdp(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new IdpFantasyPlayersWithAdp($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerOwnership[]|ResponseInterface
     */
    public function fantasyPlayerOwnershipPercentagesSeasonLong(
        string $season,
        string $week,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new FantasyPlayerOwnershipPercentagesSeasonLong($format, $season, $week), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGameRedZone[]|ResponseInterface
     */
    public function playerGameRedZoneStats(
        string $season,
        string $week,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerGameRedZoneStats($format, $season, $week), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season
     * <br>Examples: <code>2016</code>, <code>2017</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerInfo[]|ResponseInterface
     */
    public function proBowlers(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ProBowlers($format, $season), $fetch);
    }

    /**
     * Gets simulated live box scores of NFL games, covering the Conference Championship games on January 21, 2018.
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $numberofplays The number of plays to progress in this NFL live game simulation. Example entries are <code>0</code>, <code>1</code>, <code>2</code>, <code>3</code>, <code>150</code>, <code>200</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BoxScoreV3[]|ResponseInterface
     */
    public function boxScoresVSimulation(
        string $numberofplays,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new BoxScoresVSimulation($format, $numberofplays), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGameRedZone[]|ResponseInterface
     */
    public function playerGameRedZoneStatsInsideTen(
        string $season,
        string $week,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerGameRedZoneStatsInsideTen($format, $season, $week), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerSeasonRedZone[]|ResponseInterface
     */
    public function playerSeasonRedZoneStatsInsideTen(
        string $season,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerSeasonRedZoneStatsInsideTen($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4.
     * Example: <code>1</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerGameRedZone[]|ResponseInterface
     */
    public function playerGameRedZoneStatsInsideFive(
        string $season,
        string $week,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerGameRedZoneStatsInsideFive($format, $season, $week), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season.
     * <br>Examples: <code>2015REG</code>, <code>2015PRE</code>, <code>2015POST</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerSeasonRedZone[]|ResponseInterface
     */
    public function playerSeasonRedZoneStatsInsideFive(
        string $season,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerSeasonRedZoneStatsInsideFive($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Season to get games from. Example <code>2019POST</code>, <code>2020</code>
     * @param string $playerid Unique FantasyData Player ID. Example:<code>17920</code>.
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
        return $this->executeEndpoint(new PlayerGameLogsBySeason($format, $season, $playerid, $numberofgames), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season, with optional season type. <br>Examples: <code>2018</code>, <code>2018POST</code>, etc.
     * @param string $week The week of the scores (games). <br>Examples: <code>1</code>, <code>2</code>, etc.
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
     * @param string $scoreid The ScoreID of an NFL score (game).  ScoreIDs can be found in the Scores API.  Valid entries are <code>16654</code> or <code>16667</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|GameInfo[]|ResponseInterface
     */
    public function preGameOddsLineMovement(string $scoreid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PreGameOddsLineMovement($format, $scoreid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season, with optional season type. <br>Examples: <code>2018</code>, <code>2018POST</code>, etc.
     * @param string $week The week of the scores (games). <br>Examples: <code>1</code>, <code>2</code>, etc.
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
     * @param string $scoreid The ScoreID of an NFL score (game).  ScoreIDs can be found in the Scores API.  Valid entries are <code>16654</code> or <code>16667</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|GameInfo[]|ResponseInterface
     */
    public function inGameOddsLineMovement(string $scoreid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new InGameOddsLineMovement($format, $scoreid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season. <br>Examples: <code>2018REG</code>, <code>2018PRE</code>, <code>2018POST</code>
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4. Example: <code>1</code>, <code>2</code>, etc
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerProp[]|ResponseInterface
     */
    public function playerPropsByWeek(
        string $season,
        string $week,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerPropsByWeek($format, $season, $week), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season. <br>Examples: <code>2018REG</code>, <code>2018PRE</code>, <code>2018POST</code>
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4. Example: <code>1</code>, <code>2</code>, etc
     * @param string $team Abbreviation of the team. Example: <code>PHI</code>, <code>NE</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerProp[]|ResponseInterface
     */
    public function playerPropsByTeam(
        string $season,
        string $week,
        string $team,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerPropsByTeam($format, $season, $week, $team), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season. <br>Examples: <code>2018REG</code>, <code>2018PRE</code>, <code>2018POST</code>
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4. Example: <code>1</code>, <code>2</code>, etc
     * @param string $playerid Each NFL player has a unique ID assigned by FantasyData. Player IDs can be determined by pulling player related data. Example: <code>17920</code>, <code>16771</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerProp[]|ResponseInterface
     */
    public function playerPropsByPlayer(
        string $season,
        string $week,
        string $playerid,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerPropsByPlayer($format, $season, $week, $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season, with optional season type. <br>Examples: <code>2018</code>, <code>2018POST</code>, etc.
     * @param string $week The week of the scores (games). <br>Examples: <code>1</code>, <code>2</code>, etc.
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
     * @param string $scoreid The ScoreID of an NFL score (game).  ScoreIDs can be found in the Scores API.  Valid entries are <code>16654</code> or <code>16667</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|GameInfo[]|ResponseInterface
     */
    public function alternateMarketPreGameOddsLineMovement(
        string $scoreid,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new AlternateMarketPreGameOddsLineMovement($format, $scoreid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $team Abbreviation of a team. Example: <code>PHI</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|TeamTrends|ResponseInterface
     */
    public function bettingTrendsByTeam(string $team, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingTrendsByTeam($format, $team), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $team Abbreviation of a team. Example: <code>PHI</code>.
     * @param string $opponent Abbreviation of an opponent. Example: <code>NE</code>.
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
     * @param string $date The date of the game(s). <br>Examples: <code>2020-09-10</code>, <code>2020-09-13</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingEvent[]|ResponseInterface
     */
    public function bettingEventsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
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
    public function bettingEventsBySeason(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingEventsBySeason($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2020REG</code>, <code>2020PRE</code>, <code>2020POST</code>, <code>2021</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingEvent[]|ResponseInterface
     */
    public function bettingFuturesBySeason(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingFuturesBySeason($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s). <br>Examples: <code>2020-09-10</code>, <code>2020-09-13</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingEvent[]|ResponseInterface
     */
    public function bettingPlayerPropsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingPlayerPropsByDate($format, $date), $fetch);
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
    public function bettingMarketsByEvent(string $eventId, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingMarketsByEvent($format, $eventId), $fetch);
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
    public function bettingMarket(string $marketId, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\BettingMarket($format, $marketId), $fetch);
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
     * @param string $scoreid The ScoreID of the desired game/score for which to pull all betting markets (includes outcomes/bets).
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BettingMarket[]|ResponseInterface
     */
    public function bettingMarketsByScoreid(string $scoreid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BettingMarketsByScoreid($format, $scoreid), $fetch);
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
     * @return null|PlayerInfo[]|ResponseInterface
     */
    public function advancedPlayers(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new AdvancedPlayers($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season. <br>Examples: <code>2018REG</code>, <code>2018PRE</code>, <code>2018POST</code>.
     * @param string $week Week of the season. Valid values are as follows: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4. Example: <code>1</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|AdvancedPlayerGame[]|ResponseInterface
     */
    public function advancedPlayerGameStats(
        string $season,
        string $week,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new AdvancedPlayerGameStats($format, $season, $week), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season. <br>Examples: <code>2018REG</code>, <code>2018PRE</code>, <code>2018POST</code>.
     * @param string $playerid Each NFL player has a unique ID assigned by FantasyData. Player IDs can be determined by pulling player related data. Example:<code>732</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|AdvancedPlayerGame[]|ResponseInterface
     */
    public function advancedPlayerGameStatsByPlayer(
        string $season,
        string $playerid,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new AdvancedPlayerGameStatsByPlayer($format, $season, $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $playerid Each NFL player has a unique ID assigned by FantasyData. Player IDs can be determined by pulling player related data. Example:<code>732</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|AdvancedPlayer[]|ResponseInterface
     */
    public function advancedPlayerInfo(string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new AdvancedPlayerInfo($format, $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season. <br>Examples: <code>2018REG</code>, <code>2018PRE</code>, <code>2018POST</code>.
     * @param string $playerid Each NFL player has a unique ID assigned by FantasyData. Player IDs can be determined by pulling player related data. Example:<code>732</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|AdvancedPlayerSeason[]|ResponseInterface
     */
    public function advancedPlayerSeasonStatsByPlayer(
        string $season,
        string $playerid,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new AdvancedPlayerSeasonStatsByPlayer($format, $season, $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season and the season type. If no season type is provided, then the default is regular season. <br>Examples: <code>2018REG</code>, <code>2018PRE</code>, <code>2018POST</code>.
     * @param string $team Abbreviation of the team. Example: <code>WAS</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|AdvancedPlayerSeason[]|ResponseInterface
     */
    public function advancedPlayerSeasonStatsByTeam(
        string $season,
        string $team,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new AdvancedPlayerSeasonStatsByTeam($format, $season, $team), $fetch);
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
            $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.sportsdata.io/v3/nfl');
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