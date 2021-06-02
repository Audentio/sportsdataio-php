<?php

namespace Sportsdata\API\Golf\Endpoint;

class PlayerTournamentStatsByPlayer extends \Sportsdata\API\Golf\Runtime\Client\BaseEndpoint implements \Sportsdata\API\Golf\Runtime\Client\Endpoint
{
    protected $format;
    protected $tournamentid;
    protected $playerid;
    /**
    * 
    *
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $tournamentid The TournamentID of a tournament.  TournamentIDs can be found in the Tournaments API.  Valid entries are <code>58</code>, <code>61</code>, etc.
    * @param string $playerid Unique FantasyData Player ID.
    Example:<code>40000019</code>.
    */
    public function __construct(string $format = 'XML', string $tournamentid, string $playerid)
    {
        $this->format = $format;
        $this->tournamentid = $tournamentid;
        $this->playerid = $playerid;
    }
    use \Sportsdata\API\Golf\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{format}', '{tournamentid}', '{playerid}'), array($this->format, $this->tournamentid, $this->playerid), '/{format}/PlayerTournamentStatsByPlayer/{tournamentid}/{playerid}');
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
     * @return null|\Sportsdata\API\Golf\Model\PlayerTournament
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\Golf\\Model\\PlayerTournament', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}