<?php

namespace Sportsdata\API\NFL\Endpoint;

class BettingTrendsByMatchup extends \Sportsdata\API\NFL\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NFL\Runtime\Client\Endpoint
{
    protected $format;
    protected $team;
    protected $opponent;
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $team Abbreviation of a team. Example: <code>PHI</code>.
     * @param string $opponent Abbreviation of an opponent. Example: <code>NE</code>.
     */
    public function __construct(string $format = 'XML', string $team, string $opponent)
    {
        $this->format = $format;
        $this->team = $team;
        $this->opponent = $opponent;
    }
    use \Sportsdata\API\NFL\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{format}', '{team}', '{opponent}'), array($this->format, $this->team, $this->opponent), '/odds/{format}/MatchupTrends/{team}/{opponent}');
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