<?php

namespace Sportsdata\API\WNBA\Endpoint;

class Schedule extends \Sportsdata\API\WNBA\Runtime\Client\BaseEndpoint implements \Sportsdata\API\WNBA\Runtime\Client\Endpoint
{
    protected $format;
    protected $Season;
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $season Year of the season (with optional season type).<br>Examples: <code>2019</code>, <code>2019PRE</code>, <code>2019POST</code>, <code>2019REG</code>, etc.
     */
    public function __construct(string $format = 'XML', string $season)
    {
        $this->format = $format;
        $this->Season = $season;
    }
    use \Sportsdata\API\WNBA\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{format}', '{Season}'), array($this->format, $this->Season), '/scores/{format}/Games/{Season}');
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
     * @return null|\Sportsdata\API\WNBA\Model\Game[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\WNBA\\Model\\Game[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}