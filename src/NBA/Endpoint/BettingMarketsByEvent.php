<?php

namespace Sportsdata\API\NBA\Endpoint;

class BettingMarketsByEvent extends \Sportsdata\API\NBA\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NBA\Runtime\Client\Endpoint
{
    protected $format;
    protected $eventId;
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $eventId The EventId of the desired event/game for which to pull all betting markets (includes outcomes/bets). Valid entries include: <code>134</code>, <code>155</code>, etc.
     */
    public function __construct(string $format = 'XML', string $eventId)
    {
        $this->format = $format;
        $this->eventId = $eventId;
    }
    use \Sportsdata\API\NBA\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{format}', '{eventId}'), array($this->format, $this->eventId), '/odds/{format}/BettingMarkets/{eventId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Sportsdata\API\NBA\Model\BettingMarket[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\NBA\\Model\\BettingMarket[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}