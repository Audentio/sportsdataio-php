<?php

namespace Sportsdata\API\CBB\Endpoint;

class TeamGameStatsByDate extends \Sportsdata\API\CBB\Runtime\Client\BaseEndpoint implements \Sportsdata\API\CBB\Runtime\Client\Endpoint
{
    protected $date;
    protected $format;
    /**
    * 
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2018-FEB-27</code>, <code>2017-DEC-01</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $date, string $format = 'JSON')
    {
        $this->date = $date;
        $this->format = $format;
    }
    use \Sportsdata\API\CBB\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{date}', '{format}'), array($this->date, $this->format), '/scores/{format}/TeamGameStatsByDate/{date}');
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
     * @return null|\Sportsdata\API\CBB\Model\TeamGame[]|\Sportsdata\API\CBB\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\CBB\\Model\\TeamGame[]', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\CBB\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}