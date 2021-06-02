<?php

namespace Sportsdata\API\MMA;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Message\ResponseInterface;
use Sportsdata\API\MMA\Endpoint\Event;
use Sportsdata\API\MMA\Endpoint\Fight;
use Sportsdata\API\MMA\Endpoint\Fighter;
use Sportsdata\API\MMA\Endpoint\Fighters;
use Sportsdata\API\MMA\Endpoint\Leagues;
use Sportsdata\API\MMA\Endpoint\Schedule;
use Sportsdata\API\MMA\Model\EventDetail;
use Sportsdata\API\MMA\Model\FightDetail;
use Sportsdata\API\MMA\Model\League;
use Sportsdata\API\MMA\Normalizer\JaneObjectNormalizer;
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
     * @return null|Model\Fighter[]|ResponseInterface
     */
    public function fighters(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Fighters($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $eventid The unique ID of this event. <br> Examples: <code>51</code>, <code>52</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|EventDetail|ResponseInterface
     */
    public function event(string $eventid, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Event($format, $eventid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fighterid Each fighter has a unique ID assigned by FantasyData. Fighter IDs can be determined by pulling player related data. Example: <code>140000098</code>
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Model\Fighter|ResponseInterface
     */
    public function fighter(string $fighterid, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Fighter($format, $fighterid), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $league The name of the league.<br>Examples: <code>UFC</code>, etc
     * @param string $season Year of the season.<br>Examples: <code>2019</code>, <code>2020</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Model\Event[]|ResponseInterface
     */
    public function schedule(string $league, string $season, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Schedule($format, $league, $season), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|League[]|ResponseInterface
     */
    public function leagues(string $format = 'JSON', string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Leagues($format), $fetch);
    }

    /**
     *
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fightid The unique ID of this fight. <br> Examples: <code>1100</code>, etc.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|FightDetail|ResponseInterface
     */
    public function fight(string $fightid, string $format = 'JSON', string $fetch= self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Fight($format, $fightid), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.sportsdata.io/v3/mma');
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