<?php

namespace Sportsdata\API\NHL\Endpoint;

class BettingMarket extends \Sportsdata\API\NHL\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NHL\Runtime\Client\Endpoint
{
    protected $marketId;
    protected $format;
    /**
     * 
     *
     * @param string $marketId The MarketId of the desired market for which to pull all outcomes/bets. Valid entries include: <code>421</code>, <code>1041</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     */
    public function __construct(string $marketId, string $format = 'JSON')
    {
        $this->marketId = $marketId;
        $this->format = $format;
    }
    use \Sportsdata\API\NHL\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{marketId}', '{format}'), array($this->marketId, $this->format), '/odds/{format}/BettingMarket/{marketId}');
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
     * @return null|\Sportsdata\API\NHL\Model\BettingMarket|\Sportsdata\API\NHL\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\NHL\\Model\\BettingMarket', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\NHL\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}