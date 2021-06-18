<?php

namespace Sportsdata\API\MMA\Endpoint;

class Event extends \Sportsdata\API\MMA\Runtime\Client\BaseEndpoint implements \Sportsdata\API\MMA\Runtime\Client\Endpoint
{
    protected $eventid;
    protected $format;
    /**
     * 
     *
     * @param string $eventid The unique ID of this event. <br> Examples: <code>51</code>, <code>52</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     */
    public function __construct(string $eventid, string $format = 'JSON')
    {
        $this->eventid = $eventid;
        $this->format = $format;
    }
    use \Sportsdata\API\MMA\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{eventid}', '{format}'), array($this->eventid, $this->format), '/scores/{format}/Event/{eventid}');
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
     * @return null|\Sportsdata\API\MMA\Model\EventDetail
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\MMA\\Model\\EventDetail', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}