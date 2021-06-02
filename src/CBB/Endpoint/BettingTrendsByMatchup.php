<?php

namespace Sportsdata\API\CBB\Endpoint;

class BettingTrendsByMatchup extends \Sportsdata\API\CBB\Runtime\Client\BaseEndpoint implements \Sportsdata\API\CBB\Runtime\Client\Endpoint
{
    protected $format;
    protected $team;
    protected $opponent;
    /**
    * 
    *
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $team The abbreviation of the requested team.
    <br>Examples: <code>OU</code>, <code>UK</code>.
    * @param string $opponent The abbreviation of the requested opponent.
    <br>Examples: <code>OU</code>, <code>UK</code>.
    */
    public function __construct(string $format = 'XML', string $team, string $opponent)
    {
        $this->format = $format;
        $this->team = $team;
        $this->opponent = $opponent;
    }
    use \Sportsdata\API\CBB\Runtime\Client\EndpointTrait;
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
     * @return null|\Sportsdata\API\CBB\Model\MatchupTrends
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\CBB\\Model\\MatchupTrends', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}