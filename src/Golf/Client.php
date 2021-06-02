<?php

namespace Sportsdata\API\Golf;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Message\ResponseInterface;
use Sportsdata\API\Golf\Endpoint\CurrentSeason;
use Sportsdata\API\Golf\Endpoint\DfsSlates;
use Sportsdata\API\Golf\Endpoint\Headshots;
use Sportsdata\API\Golf\Endpoint\Injuries;
use Sportsdata\API\Golf\Endpoint\InjuriesHistorical;
use Sportsdata\API\Golf\Endpoint\Leaderboard;
use Sportsdata\API\Golf\Endpoint\News;
use Sportsdata\API\Golf\Endpoint\NewsByDate;
use Sportsdata\API\Golf\Endpoint\NewsByPlayer;
use Sportsdata\API\Golf\Endpoint\Player;
use Sportsdata\API\Golf\Endpoint\Players;
use Sportsdata\API\Golf\Endpoint\PlayerSeasonStatsWWorldGolfRankings;
use Sportsdata\API\Golf\Endpoint\PlayerTournamentProjectedStatsWDraftkingsSalaries;
use Sportsdata\API\Golf\Endpoint\PlayerTournamentStatsByPlayer;
use Sportsdata\API\Golf\Endpoint\Schedule;
use Sportsdata\API\Golf\Endpoint\ScheduleBySeason;
use Sportsdata\API\Golf\Model\DfsSlate;
use Sportsdata\API\Golf\Model\Headshot;
use Sportsdata\API\Golf\Model\Injury;
use Sportsdata\API\Golf\Model\PlayerSeason;
use Sportsdata\API\Golf\Model\PlayerTournament;
use Sportsdata\API\Golf\Model\PlayerTournamentProjection;
use Sportsdata\API\Golf\Model\Season;
use Sportsdata\API\Golf\Model\Tournament;
use Sportsdata\API\Golf\Normalizer\JaneObjectNormalizer;
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
     * @return null|Tournament[]|ResponseInterface
     */
    public function schedule(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Schedule($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Model\Player[]|ResponseInterface
     */
    public function players(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Players($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $playerid Unique FantasyData Player ID.
     * Example:<code>40000019</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Model\Player|ResponseInterface
     */
    public function player(string $playerid, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Player($format, $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $tournamentid The TournamentID of a tournament.  TournamentIDs can be found in the Tournaments API.  Valid entries are <code>58</code>, <code>61</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Model\Leaderboard|ResponseInterface
     */
    public function leaderboard(string $tournamentid, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Leaderboard($format, $tournamentid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $playerid Unique FantasyData Player ID.
     * Example:<code>40000019</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Model\News[]|ResponseInterface
     */
    public function newsByPlayer(string $playerid, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new NewsByPlayer($format, $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).
     * <br>Examples: <code>2015-JUL-31</code>, <code>2015-SEP-01</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Model\News[]|ResponseInterface
     */
    public function newsByDate(string $date, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new NewsByDate($format, $date), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Model\News[]|ResponseInterface
     */
    public function news(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new News($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Injury[]|ResponseInterface
     */
    public function injuries(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Injuries($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Injury[]|ResponseInterface
     */
    public function injuriesHistorical(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new InjuriesHistorical($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $tournamentid The TournamentID of a tournament.  TournamentIDs can be found in the Tournaments API.  Valid entries are <code>58</code>, <code>61</code>, etc.
     * @param string $playerid Unique FantasyData Player ID.
     * Example:<code>40000019</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerTournament|ResponseInterface
     */
    public function playerTournamentStatsByPlayer(
        string $tournamentid,
        string $playerid,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerTournamentStatsByPlayer($format, $tournamentid, $playerid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $tournamentid The TournamentID of a tournament.  TournamentIDs can be found in the Tournaments API.  Valid entries are <code>78</code>, <code>79</code>, <code>80</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerTournamentProjection[]|ResponseInterface
     */
    public function playerTournamentProjectedStatsWDraftkingsSalaries(
        string $tournamentid,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerTournamentProjectedStatsWDraftkingsSalaries($format, $tournamentid),
            $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season.
     * <br>Examples: <code>2016</code>, <code>2017</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PlayerSeason[]|ResponseInterface
     */
    public function playerSeasonStatsWWorldGolfRankings(
        string $season,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new PlayerSeasonStatsWWorldGolfRankings($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season.
     * <br>Examples: <code>2016</code>, <code>2017</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Tournament[]|ResponseInterface
     */
    public function scheduleBySeason(string $season, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ScheduleBySeason($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $tournamentid The TournamentID of a tournament.  TournamentIDs can be found in the Tournaments API.  Valid entries are <code>58</code>, <code>61</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|DfsSlate[]|ResponseInterface
     */
    public function dfsSlates(string $tournamentid, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DfsSlates($format, $tournamentid), $fetch);
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
            $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.sportsdata.io/golf/v2');
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