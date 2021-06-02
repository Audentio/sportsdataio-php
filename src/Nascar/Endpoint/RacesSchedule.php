<?php

namespace Sportsdata\API\Nascar\Endpoint;

class RacesSchedule extends \Sportsdata\API\Nascar\Runtime\Client\BaseEndpoint implements \Sportsdata\API\Nascar\Runtime\Client\Endpoint
{
    protected $format;
    protected $season;
    /**
    * 
    *
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $season Year of the season.
    <br>Examples: <code>2015</code>, <code>2016</code>.
    */
    public function __construct(string $format = 'xml', string $season)
    {
        $this->format = $format;
        $this->season = $season;
    }
    use \Sportsdata\API\Nascar\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{format}', '{season}'), array($this->format, $this->season), '/{format}/races/{season}');
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
     * @return null|\Sportsdata\API\Nascar\Model\Race[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\Nascar\\Model\\Race[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}