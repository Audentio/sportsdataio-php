<?php

namespace Sportsdata\API\Golf;

class Client extends \Sportsdata\API\Golf\Runtime\Client\Client
{
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Golf\Model\Tournament[]|\Sportsdata\API\Golf\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function schedule(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Golf\Endpoint\Schedule($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Golf\Model\Player[]|\Sportsdata\API\Golf\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function players(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Golf\Endpoint\Players($format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>40000019</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Golf\Model\Player|\Sportsdata\API\Golf\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function player(string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Golf\Endpoint\Player($playerid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $tournamentid The TournamentID of a tournament.  TournamentIDs can be found in the Tournaments API.  Valid entries are <code>58</code>, <code>61</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Golf\Model\Leaderboard|\Sportsdata\API\Golf\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function leaderboard(string $tournamentid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Golf\Endpoint\Leaderboard($tournamentid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>40000019</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Golf\Model\News[]|\Sportsdata\API\Golf\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function newsByPlayer(string $playerid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Golf\Endpoint\NewsByPlayer($playerid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2015-JUL-31</code>, <code>2015-SEP-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Golf\Model\News[]|\Sportsdata\API\Golf\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function newsByDate(string $date, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Golf\Endpoint\NewsByDate($date, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Golf\Model\News[]|\Sportsdata\API\Golf\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function news(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Golf\Endpoint\News($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Golf\Model\Injury[]|\Sportsdata\API\Golf\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function injuries(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Golf\Endpoint\Injuries($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Golf\Model\Injury[]|\Sportsdata\API\Golf\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function injuriesHistorical(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Golf\Endpoint\InjuriesHistorical($format), $fetch);
    }
    /**
    * 
    *
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>40000019</code>.
    * @param string $tournamentid The TournamentID of a tournament.  TournamentIDs can be found in the Tournaments API.  Valid entries are <code>58</code>, <code>61</code>, etc.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Golf\Model\PlayerTournament|\Sportsdata\API\Golf\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerTournamentStatsByPlayer(string $playerid, string $tournamentid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Golf\Endpoint\PlayerTournamentStatsByPlayer($playerid, $tournamentid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $tournamentid The TournamentID of a tournament.  TournamentIDs can be found in the Tournaments API.  Valid entries are <code>78</code>, <code>79</code>, <code>80</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Golf\Model\PlayerTournamentProjection[]|\Sportsdata\API\Golf\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function playerTournamentProjectedStatsWDraftkingsSalaries(string $tournamentid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Golf\Endpoint\PlayerTournamentProjectedStatsWDraftkingsSalaries($tournamentid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season Year of the season.
    <br>Examples: <code>2016</code>, <code>2017</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Golf\Model\PlayerSeason[]|\Sportsdata\API\Golf\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function playerSeasonStatsWWorldGolfRankings(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Golf\Endpoint\PlayerSeasonStatsWWorldGolfRankings($season, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $season Year of the season.
    <br>Examples: <code>2016</code>, <code>2017</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Golf\Model\Tournament[]|\Sportsdata\API\Golf\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function scheduleBySeason(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Golf\Endpoint\ScheduleBySeason($season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $tournamentid The TournamentID of a tournament.  TournamentIDs can be found in the Tournaments API.  Valid entries are <code>58</code>, <code>61</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Golf\Model\DfsSlate[]|\Sportsdata\API\Golf\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function dfsSlates(string $tournamentid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Golf\Endpoint\DfsSlates($tournamentid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Golf\Model\Season|\Sportsdata\API\Golf\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function currentSeason(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Golf\Endpoint\CurrentSeason($format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Golf\Model\Headshot[]|\Sportsdata\API\Golf\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function headshots(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Golf\Endpoint\Headshots($format), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.sportsdata.io/golf/v2');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Sportsdata\API\Golf\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}