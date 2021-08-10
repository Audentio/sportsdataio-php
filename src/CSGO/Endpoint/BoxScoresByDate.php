<?php

namespace Sportsdata\API\CSGO\Endpoint;

class BoxScoresByDate extends \Sportsdata\API\CSGO\Runtime\Client\BaseEndpoint implements \Sportsdata\API\CSGO\Runtime\Client\Endpoint
{
    protected $date;
    protected $format;
    /**
    * Box Scores by Date
    *
    * @param string $date The date of the game(s).
    <br>Examples: <code>2018-01-13</code>, <code>2018-06-13</code>.
    * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
    */
    public function __construct(string $date, string $format = 'JSON')
    {
        $this->date = $date;
        $this->format = $format;
    }
    use \Sportsdata\API\CSGO\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{date}', '{format}'), array($this->date, $this->format), '/stats/{format}/BoxScores/{date}');
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
     * @return null|\Sportsdata\API\CSGO\Model\BoxScore[]|\Sportsdata\API\CSGO\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\CSGO\\Model\\BoxScore[]', 'json');
        }
        return $serializer->deserialize($body, 'Sportsdata\\API\\CSGO\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}