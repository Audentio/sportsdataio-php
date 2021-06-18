<?php

namespace Sportsdata\API\Soccer\Endpoint;

class BoxScoresDeltaByDateByCompetition extends \Sportsdata\API\Soccer\Runtime\Client\BaseEndpoint implements \Sportsdata\API\Soccer\Runtime\Client\Endpoint
{
    protected $date;
    protected $competition;
    protected $minutes;
    protected $format;
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2017-02-27</code>, <code>2017-09-01</code>.
    * @param string $competition An indication of a soccer competition/league. This value can be the CompetitionId or the Competition Key. Possible values include: <code>EPL</code>, <code>1</code>, <code>MLS</code>, <code>8</code>, etc.
    * @param string $minutes Only returns player statistics that have changed in the last X minutes.  You specify how many minutes in time to go back. Valid entries are:
    <code>1</code>, <code>2</code> ... <code>all</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $date, string $competition, string $minutes, string $format = 'JSON')
    {
        $this->date = $date;
        $this->competition = $competition;
        $this->minutes = $minutes;
        $this->format = $format;
    }
    use \Sportsdata\API\Soccer\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{date}', '{competition}', '{minutes}', '{format}'), array($this->date, $this->competition, $this->minutes, $this->format), '/stats/{format}/BoxScoresDeltaByCompetition/{competition}/{date}/{minutes}');
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
     * @return null|\Sportsdata\API\Soccer\Model\BoxScore[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\Soccer\\Model\\BoxScore[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}