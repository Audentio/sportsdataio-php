<?php

namespace Sportsdata\API\LOL;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Message\ResponseInterface;
use Sportsdata\API\LOL\Endpoint\AreasCountries;
use Sportsdata\API\LOL\Endpoint\BoxScore;
use Sportsdata\API\LOL\Endpoint\BoxScoresByDate;
use Sportsdata\API\LOL\Endpoint\Champions;
use Sportsdata\API\LOL\Endpoint\CompetitionFixturesLeagueDetails;
use Sportsdata\API\LOL\Endpoint\CompetitionsLeagues;
use Sportsdata\API\LOL\Endpoint\DfsSlatesByDate;
use Sportsdata\API\LOL\Endpoint\GamesByDate;
use Sportsdata\API\LOL\Endpoint\Items;
use Sportsdata\API\LOL\Endpoint\MembershipsActive;
use Sportsdata\API\LOL\Endpoint\MembershipsByTeamActive;
use Sportsdata\API\LOL\Endpoint\MembershipsByTeamHistorical;
use Sportsdata\API\LOL\Endpoint\MembershipsHistorical;
use Sportsdata\API\LOL\Endpoint\Players;
use Sportsdata\API\LOL\Endpoint\PlayersByTeam;
use Sportsdata\API\LOL\Endpoint\ProjectedPlayerGameStatsByDate;
use Sportsdata\API\LOL\Endpoint\ProjectedPlayerGameStatsByPlayer;
use Sportsdata\API\LOL\Endpoint\Schedule;
use Sportsdata\API\LOL\Endpoint\SeasonTeams;
use Sportsdata\API\LOL\Endpoint\Spells;
use Sportsdata\API\LOL\Endpoint\Standings;
use Sportsdata\API\LOL\Endpoint\Teams;
use Sportsdata\API\LOL\Endpoint\Venues;
use Sportsdata\API\LOL\Model\Area;
use Sportsdata\API\LOL\Model\Champion;
use Sportsdata\API\LOL\Model\Competition;
use Sportsdata\API\LOL\Model\CompetitionDetail;
use Sportsdata\API\LOL\Model\DfsSlate;
use Sportsdata\API\LOL\Model\Game;
use Sportsdata\API\LOL\Model\Item;
use Sportsdata\API\LOL\Model\Membership;
use Sportsdata\API\LOL\Model\Player;
use Sportsdata\API\LOL\Model\PlayerGameProjection;
use Sportsdata\API\LOL\Model\SeasonTeam;
use Sportsdata\API\LOL\Model\Spell;
use Sportsdata\API\LOL\Model\Standing;
use Sportsdata\API\LOL\Model\Team;
use Sportsdata\API\LOL\Model\Venue;
use Sportsdata\API\LOL\Normalizer\JaneObjectNormalizer;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

class Client extends Runtime\Client\Client
{
    /**
     * Projected Player Game Stats by Date
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).
     * <br>Example: <code>2019-01-20</code>
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
     * Projected Player Game Stats by Date
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).
     * <br>Example: <code>2019-01-20</code>
     * @param string $playerid Unique FantasyData Player ID.
     * Example:<code>100001500</code>.
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
     * <br>Examples: <code>2017-02-27</code>, <code>2017-09-01</code>.
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
     * @param string $competitionid A LoL competition/league unique CompetitionId. Possible values include: <code>100000009</code>, etc.
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
     * Standings
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
     * Games by Date
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).
     * <br>Examples: <code>2019-01-20</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Model\BoxScore[]|ResponseInterface
     */
    public function boxScoresByDate(string $date, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BoxScoresByDate($format, $date), $fetch);
    }

    /**
     * Games by Date
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $gameid Unique FantasyData Game ID.
     * Example:<code>100002649</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Model\BoxScore[]|ResponseInterface
     */
    public function boxScore(string $gameid, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BoxScore($format, $gameid), $fetch);
    }

    /**
     * Areas (Countries)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Champion[]|ResponseInterface
     */
    public function champions(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Champions($format), $fetch);
    }

    /**
     * Competitions (Leagues)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Item[]|ResponseInterface
     */
    public function items(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Items($format), $fetch);
    }

    /**
     * Areas (Countries)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Spell[]|ResponseInterface
     */
    public function spells(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Spells($format), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.sportsdata.io/v3/lol');
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