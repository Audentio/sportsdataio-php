<?php

namespace Sportsdata\API\Golf\Endpoint;

class PlayerTournamentProjectedStatsWDraftkingsSalaries extends \Sportsdata\API\Golf\Runtime\Client\BaseEndpoint implements \Sportsdata\API\Golf\Runtime\Client\Endpoint
{
    protected $tournamentid;
    protected $format;
    /**
     * 
     *
     * @param string $tournamentid The TournamentID of a tournament.  TournamentIDs can be found in the Tournaments API.  Valid entries are <code>78</code>, <code>79</code>, <code>80</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     */
    public function __construct(string $tournamentid, string $format = 'JSON')
    {
        $this->tournamentid = $tournamentid;
        $this->format = $format;
    }
    use \Sportsdata\API\Golf\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{tournamentid}', '{format}'), array($this->tournamentid, $this->format), '/{format}/PlayerTournamentProjectionStats/{tournamentid}');
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
     * @return null|\Sportsdata\API\Golf\Model\PlayerTournamentProjection[]|\Sportsdata\API\Golf\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\Golf\\Model\\PlayerTournamentProjection[]', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\Golf\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}