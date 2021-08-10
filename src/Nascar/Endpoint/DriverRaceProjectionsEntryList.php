<?php

namespace Sportsdata\API\Nascar\Endpoint;

class DriverRaceProjectionsEntryList extends \Sportsdata\API\Nascar\Runtime\Client\BaseEndpoint implements \Sportsdata\API\Nascar\Runtime\Client\Endpoint
{
    protected $raceid;
    protected $format;
    /**
    * 
    *
    * @param string $raceid Unique FantasyData Race ID.
    Example:<code>1</code>, <code>2</code>, etc.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $raceid, string $format = 'JSON')
    {
        $this->raceid = $raceid;
        $this->format = $format;
    }
    use \Sportsdata\API\Nascar\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{raceid}', '{format}'), array($this->raceid, $this->format), '/{format}/DriverRaceProjections/{raceid}');
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
     * @return null|\Sportsdata\API\Nascar\Model\DriverRaceProjection[]|\Sportsdata\API\Nascar\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\Nascar\\Model\\DriverRaceProjection[]', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\Nascar\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}