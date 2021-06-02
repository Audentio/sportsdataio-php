<?php

namespace Sportsdata\API\Nascar\Endpoint;

class DriverDetails extends \Sportsdata\API\Nascar\Runtime\Client\BaseEndpoint implements \Sportsdata\API\Nascar\Runtime\Client\Endpoint
{
    protected $format;
    protected $driverid;
    /**
    * 
    *
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    * @param string $driverid Unique FantasyData Driver ID.
    Example:<code>80000268</code>.
    */
    public function __construct(string $format = 'xml', string $driverid)
    {
        $this->format = $format;
        $this->driverid = $driverid;
    }
    use \Sportsdata\API\Nascar\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{format}', '{driverid}'), array($this->format, $this->driverid), '/{format}/driver/{driverid}');
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