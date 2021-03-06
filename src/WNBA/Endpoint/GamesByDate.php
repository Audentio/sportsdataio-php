<?php

namespace Sportsdata\API\WNBA\Endpoint;

class GamesByDate extends \Sportsdata\API\WNBA\Runtime\Client\BaseEndpoint implements \Sportsdata\API\WNBA\Runtime\Client\Endpoint
{
    protected $date;
    protected $format;
    /**
     * 
     *
     * @param string $date The date of the game(s).<br>Examples: <code>2019-MAY-16</code>, <code>2019-MAY-25</code>, etc.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     */
    public function __construct(string $date, string $format = 'JSON')
    {
        $this->date = $date;
        $this->format = $format;
    }
    use \Sportsdata\API\WNBA\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{date}', '{format}'), array($this->date, $this->format), '/scores/{format}/GamesByDate/{date}');
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
     * @return null|\Sportsdata\API\WNBA\Model\Game[]|\Sportsdata\API\WNBA\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\WNBA\\Model\\Game[]', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\WNBA\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}