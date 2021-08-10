<?php

namespace Sportsdata\API\NBA\Endpoint;

class BettingMarketsByGameid extends \Sportsdata\API\NBA\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NBA\Runtime\Client\Endpoint
{
    protected $gameID;
    protected $format;
    /**
     * 
     *
     * @param string $gameID The GameID of the desired game for which to pull all betting markets (includes outcomes/bets). Valid entries include: <code>14814</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     */
    public function __construct(string $gameID, string $format = 'JSON')
    {
        $this->gameID = $gameID;
        $this->format = $format;
    }
    use \Sportsdata\API\NBA\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{gameID}', '{format}'), array($this->gameID, $this->format), '/odds/{format}/BettingMarketsByGameID/{gameID}');
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