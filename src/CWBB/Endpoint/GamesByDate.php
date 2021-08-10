<?php

namespace Sportsdata\API\CWBB\Endpoint;

class GamesByDate extends \Sportsdata\API\CWBB\Runtime\Client\BaseEndpoint implements \Sportsdata\API\CWBB\Runtime\Client\Endpoint
{
    protected $date;
    protected $format;
    /**
     * 
     *
     * @param string $date The date of the game(s).<br>Examples: <code>2020-FEB-27</code>, <code>2019-DEC-01</code>.
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     */
    public function __construct(string $date, string $format = 'JSON')
    {
        $this->date = $date;
        $this->format = $format;
    }
    use \Sportsdata\API\CWBB\Runtime\Client\EndpointTrait;
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
     * @return null|\Sportsdata\API\CWBB\Model\Game[]|\Sportsdata\API\CWBB\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\CWBB\\Model\\Game[]', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\CWBB\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}