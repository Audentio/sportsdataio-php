<?php

namespace Sportsdata\API\NHL\Endpoint;

class PlayByPlayDelta extends \Sportsdata\API\NHL\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NHL\Runtime\Client\Endpoint
{
    protected $minutes;
    protected $date;
    protected $format;
    /**
    * 
    *
    * @param string $minutes Only returns plays that have changed in the last X minutes.  You specify how many minutes in time to go back.  Valid entries are:
    <code>1</code>, <code>2</code> ... <code>all</code>.
    * @param string $date The date of the game(s).
    <br>Examples: <code>2018-JAN-31</code>, <code>2017-OCT-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $minutes, string $date, string $format = 'JSON')
    {
        $this->minutes = $minutes;
        $this->date = $date;
        $this->format = $format;
    }
    use \Sportsdata\API\NHL\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{minutes}', '{date}', '{format}'), array($this->minutes, $this->date, $this->format), '/pbp/{format}/PlayByPlayDelta/{date}/{minutes}');
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
     * @return null|\Sportsdata\API\NHL\Model\PlayByPlay[]|\Sportsdata\API\NHL\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\NHL\\Model\\PlayByPlay[]', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\NHL\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}