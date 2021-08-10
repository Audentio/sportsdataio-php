<?php

namespace Sportsdata\API\LOL\Endpoint;

class ProjectedPlayerGameStatsByDate extends \Sportsdata\API\LOL\Runtime\Client\BaseEndpoint implements \Sportsdata\API\LOL\Runtime\Client\Endpoint
{
    protected $date;
    protected $format;
    /**
    * Projected Player Game Stats by Date
    *
    * @param string $date The date of the game(s).
    <br>Example: <code>2019-01-20</code>
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $date, string $format = 'JSON')
    {
        $this->date = $date;
        $this->format = $format;
    }
    use \Sportsdata\API\LOL\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{date}', '{format}'), array($this->date, $this->format), '/projections/{format}/PlayerGameProjectionStatsByDate/{date}');
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
     * @return null|\Sportsdata\API\LOL\Model\PlayerGameProjection[]|\Sportsdata\API\LOL\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\LOL\\Model\\PlayerGameProjection[]', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\LOL\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}