<?php

namespace Sportsdata\API\Nascar;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Message\ResponseInterface;
use Sportsdata\API\Nascar\Endpoint\DriverDetails;
use Sportsdata\API\Nascar\Endpoint\DriverRaceProjectionsEntryList;
use Sportsdata\API\Nascar\Endpoint\Drivers;
use Sportsdata\API\Nascar\Endpoint\RaceResults;
use Sportsdata\API\Nascar\Endpoint\RacesSchedule;
use Sportsdata\API\Nascar\Endpoint\Series;
use Sportsdata\API\Nascar\Model\Driver;
use Sportsdata\API\Nascar\Model\DriverRaceProjection;
use Sportsdata\API\Nascar\Model\Race;
use Sportsdata\API\Nascar\Model\RaceResult;
use Sportsdata\API\Nascar\Normalizer\JaneObjectNormalizer;
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
     * @return null|Model\Series[]|ResponseInterface
     */
    public function series(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Series($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season.
     * <br>Examples: <code>2015</code>, <code>2016</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Race[]|ResponseInterface
     */
    public function racesSchedule(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new RacesSchedule($format, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Driver[]|ResponseInterface
     */
    public function drivers(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Drivers($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $driverid Unique FantasyData Driver ID.
     * Example:<code>80000268</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Driver|ResponseInterface
     */
    public function driverDetails(string $driverid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new DriverDetails($format, $driverid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $raceid Unique FantasyData Race ID.
     * Example:<code>1</code>, <code>2</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|RaceResult|ResponseInterface
     */
    public function raceResults(string $raceid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new RaceResults($format, $raceid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $raceid Unique FantasyData Race ID.
     * Example:<code>1</code>, <code>2</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|DriverRaceProjection[]|ResponseInterface
     */
    public function driverRaceProjectionsEntryList(
        string $raceid,
        string $format = 'JSON',
        string $fetch = self::FETCH_OBJECT
    ) {
        return $this->executeEndpoint(new DriverRaceProjectionsEntryList($format, $raceid), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.sportsdata.io/nascar/v2');
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