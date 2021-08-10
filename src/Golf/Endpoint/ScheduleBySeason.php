<?php

namespace Sportsdata\API\Golf\Endpoint;

class ScheduleBySeason extends \Sportsdata\API\Golf\Runtime\Client\BaseEndpoint implements \Sportsdata\API\Golf\Runtime\Client\Endpoint
{
    protected $season;
    protected $format;
    /**
    * 
    *
    * @param string $season Year of the season.
    <br>Examples: <code>2016</code>, <code>2017</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $season, string $format = 'JSON')
    {
        $this->season = $season;
        $this->format = $format;
    }
    use \Sportsdata\API\Golf\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{season}', '{format}'), array($this->season, $this->format), '/{format}/Tournaments/{season}');
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
     * @return null|\Sportsdata\API\Golf\Model\Tournament[]|\Sportsdata\API\Golf\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\Golf\\Model\\Tournament[]', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\Golf\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}