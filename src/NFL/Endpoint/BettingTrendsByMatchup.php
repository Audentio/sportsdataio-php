<?php

namespace Sportsdata\API\NFL\Endpoint;

class BettingTrendsByMatchup extends \Sportsdata\API\NFL\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NFL\Runtime\Client\Endpoint
{
    protected $opponent;
    protected $team;
    protected $format;
    /**
     * 
     *
     * @param string $opponent Abbreviation of an opponent. Example: <code>NE</code>.
     * @param string $team Abbreviation of a team. Example: <code>PHI</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     */
    public function __construct(string $opponent, string $team, string $format = 'JSON')
    {
        $this->opponent = $opponent;
        $this->team = $team;
        $this->format = $format;
    }
    use \Sportsdata\API\NFL\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{opponent}', '{team}', '{format}'), array($this->opponent, $this->team, $this->format), '/odds/{format}/MatchupTrends/{team}/{opponent}');
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
     * @return null|\Sportsdata\API\NFL\Model\MatchupTrends
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\NFL\\Model\\MatchupTrends', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}