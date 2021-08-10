<?php

namespace Sportsdata\API\MMA;

class Client extends \Sportsdata\API\MMA\Runtime\Client\Client
{
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MMA\Model\Fighter[]|\Sportsdata\API\MMA\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function fighters(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MMA\Endpoint\Fighters($format), $fetch);
    }
    /**
     * 
     *
     * @param string $eventid The unique ID of this event. <br> Examples: <code>51</code>, <code>52</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MMA\Model\EventDetail|\Sportsdata\API\MMA\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function event(string $eventid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MMA\Endpoint\Event($eventid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $fighterid Each fighter has a unique ID assigned by FantasyData. Fighter IDs can be determined by pulling player related data. Example: <code>140000098</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MMA\Model\Fighter|\Sportsdata\API\MMA\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function fighter(string $fighterid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MMA\Endpoint\Fighter($fighterid, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $season Year of the season.<br>Examples: <code>2019</code>, <code>2020</code>, etc.
     * @param string $league The name of the league.<br>Examples: <code>UFC</code>, etc
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MMA\Model\Event[]|\Sportsdata\API\MMA\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function schedule(string $season, string $league, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MMA\Endpoint\Schedule($season, $league, $format), $fetch);
    }
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MMA\Model\League[]|\Sportsdata\API\MMA\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function leagues(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MMA\Endpoint\Leagues($format), $fetch);
    }
    /**
     * 
     *
     * @param string $fightid The unique ID of this fight. <br> Examples: <code>1100</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Sportsdata\API\MMA\Model\FightDetail|\Sportsdata\API\MMA\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function fight(string $fightid, string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Sportsdata\API\MMA\Endpoint\Fight($fightid, $format), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.sportsdata.io/v3/mma');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Sportsdata\API\MMA\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}