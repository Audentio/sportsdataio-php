<?php

namespace Sportsdata\API\NFL\Endpoint;

class BettingMarket extends \Sportsdata\API\NFL\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NFL\Runtime\Client\Endpoint
{
    protected $marketId;
    protected $format;
    /**
     * 
     *
     * @param string $marketId The MarketId of the desired market for which to pull all outcomes/bets.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     */
    public function __construct(string $marketId, string $format = 'JSON')
    {
        $this->marketId = $marketId;
        $this->format = $format;
    }
    use \Sportsdata\API\NFL\Runtime\Client\EndpointTrait;
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
     * @return null|\Sportsdata\API\NFL\Model\BettingMarket|\Sportsdata\API\NFL\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\NFL\\Model\\BettingMarket', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\NFL\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}