<?php

namespace Sportsdata\API\WNBA\Endpoint;

class GamesByDate extends \Sportsdata\API\WNBA\Runtime\Client\BaseEndpoint implements \Sportsdata\API\WNBA\Runtime\Client\Endpoint
{
    protected $format;
    protected $date;
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $date The date of the game(s).<br>Examples: <code>2019-MAY-16</code>, <code>2019-MAY-25</code>, etc.
     */
    public function __construct(string $format = 'XML', string $date)
    {
        $this->format = $format;
        $this->date = $date;
    }
    use \Sportsdata\API\WNBA\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{format}', '{date}'), array($this->format, $this->date), '/scores/{format}/GamesByDate/{date}');
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