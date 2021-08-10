<?php

namespace Sportsdata\API\NFL\Endpoint;

class XPing extends \Sportsdata\API\NFL\Runtime\Client\BaseEndpoint implements \Sportsdata\API\NFL\Runtime\Client\Endpoint
{
    protected $seconds;
    protected $format;
    /**
     * Ping NFL API
     *
     * @param string $seconds Number of seconds to sleep before responding
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     */
    public function __construct(string $seconds, string $format = 'JSON')
    {
        $this->seconds = $seconds;
        $this->format = $format;
    }
    use \Sportsdata\API\NFL\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{seconds}', '{format}'), array($this->seconds, $this->format), '/scores/{format}/Ping/{seconds}');
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
     * @return null|\Sportsdata\API\NFL\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\NFL\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}