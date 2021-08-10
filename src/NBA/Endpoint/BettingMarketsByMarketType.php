<?php

namespace Sportsdata\API\NBA\Endpoint;

class BettingMarketsByMarketType extends \Sportsdata\API\NBA\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NBA\Runtime\Client\Endpoint
{
    protected $marketTypeID;
    protected $eventId;
    protected $format;
    /**
    * 
    *
    * @param string $marketTypeID The Market Type ID of the desired MarketTypes to pull. Some common types include:
    <code>1</code> for `Game Lines`
    <code>2</code> for `Player Props`
    <code>3</code> for `Team Props`
    <code>6</code> for `Game Props`
    * @param string $eventId The EventId of the desired event/game for which to pull all betting markets (includes outcomes/bets). Valid entries include: <code>134</code>, <code>155</code>, etc.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $marketTypeID, string $eventId, string $format = 'JSON')
    {
        $this->marketTypeID = $marketTypeID;
        $this->eventId = $eventId;
        $this->format = $format;
    }
    use \Sportsdata\API\NBA\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{marketTypeID}', '{eventId}', '{format}'), array($this->marketTypeID, $this->eventId, $this->format), '/odds/{format}/BettingMarketsByMarketType/{eventId}/{marketTypeID}');
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
     * @return null|\Sportsdata\API\NBA\Model\BettingMarket[]|\Sportsdata\API\NBA\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\NBA\\Model\\BettingMarket[]', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\NBA\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}