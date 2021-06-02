<?php

namespace Sportsdata\API\NFL\Endpoint;

class AlternateMarketPreGameOddsLineMovement extends \Sportsdata\API\NFL\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NFL\Runtime\Client\Endpoint
{
    protected $format;
    protected $scoreid;
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $scoreid The ScoreID of an NFL score (game).  ScoreIDs can be found in the Scores API.  Valid entries are <code>16654</code> or <code>16667</code>
     */
    public function __construct(string $format = 'XML', string $scoreid)
    {
        $this->format = $format;
        $this->scoreid = $scoreid;
    }
    use \Sportsdata\API\NFL\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{format}', '{scoreid}'), array($this->format, $this->scoreid), '/odds/{format}/AlternateMarketGameOddsLineMovement/{scoreid}');
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
     * @return null|\Sportsdata\API\NFL\Model\GameInfo[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\NFL\\Model\\GameInfo[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}