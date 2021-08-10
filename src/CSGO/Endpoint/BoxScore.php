<?php

namespace Sportsdata\API\CSGO\Endpoint;

class BoxScore extends \Sportsdata\API\CSGO\Runtime\Client\BaseEndpoint implements \Sportsdata\API\CSGO\Runtime\Client\Endpoint
{
    protected $gameid;
    protected $format;
    /**
     * Box Scores by Date
     *
     * @param string $gameid Unique GameId for the desired box scores. Examples: <code>100000091</code>
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     */
    public function __construct(string $gameid, string $format = 'JSON')
    {
        $this->gameid = $gameid;
        $this->format = $format;
    }
    use \Sportsdata\API\CSGO\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{gameid}', '{format}'), array($this->gameid, $this->format), '/stats/{format}/BoxScore/{gameid}');
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