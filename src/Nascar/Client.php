<?php

namespace Sportsdata\API\Nascar;

class Client extends \Sportsdata\API\Nascar\Runtime\Client\Client
{
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Nascar\Model\Series[]|\Psr\Http\Message\ResponseInterface
     */
    public function series(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Nascar\Endpoint\Series($format), $fetch);
    }
    /**
    * 
    *
    * @param string $season Year of the season.
    <br>Examples: <code>2015</code>, <code>2016</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Nascar\Model\Race[]|\Psr\Http\Message\ResponseInterface
    */
    public function racesSchedule(string $season, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Nascar\Endpoint\RacesSchedule($season, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\Nascar\Model\Driver[]|\Psr\Http\Message\ResponseInterface
     */
    public function drivers(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Nascar\Endpoint\Drivers($format), $fetch);
    }
    /**
    * 
    *
    * @param string $driverid Unique FantasyData Driver ID.
    Example:<code>80000268</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Nascar\Model\Driver|\Psr\Http\Message\ResponseInterface
    */
    public function driverDetails(string $driverid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Nascar\Endpoint\DriverDetails($driverid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $raceid Unique FantasyData Race ID.
    Example:<code>1</code>, <code>2</code>, etc.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Nascar\Model\RaceResult|\Psr\Http\Message\ResponseInterface
    */
    public function raceResults(string $raceid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Nascar\Endpoint\RaceResults($raceid, $format), $fetch);
    }
    /**
    * 
    *
    * @param string $raceid Unique FantasyData Race ID.
    Example:<code>1</code>, <code>2</code>, etc.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Sportsdata\API\Nascar\Model\DriverRaceProjection[]|\Psr\Http\Message\ResponseInterface
    */
    public function driverRaceProjectionsEntryList(string $raceid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\Nascar\Endpoint\DriverRaceProjectionsEntryList($raceid, $format), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.sportsdata.io/nascar/v2');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Sportsdata\API\Nascar\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}