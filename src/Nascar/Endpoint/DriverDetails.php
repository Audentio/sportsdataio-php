<?php

namespace Sportsdata\API\Nascar\Endpoint;

class DriverDetails extends \Sportsdata\API\Nascar\Runtime\Client\BaseEndpoint implements \Sportsdata\API\Nascar\Runtime\Client\Endpoint
{
    protected $driverid;
    protected $format;
    /**
    * 
    *
    * @param string $driverid Unique FantasyData Driver ID.
    Example:<code>80000268</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $driverid, string $format = 'JSON')
    {
        $this->driverid = $driverid;
        $this->format = $format;
    }
    use \Sportsdata\API\Nascar\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{driverid}', '{format}'), array($this->driverid, $this->format), '/{format}/driver/{driverid}');
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
     * @return null|\Sportsdata\API\Nascar\Model\Driver
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\Nascar\\Model\\Driver', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}