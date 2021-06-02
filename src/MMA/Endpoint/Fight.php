<?php

namespace Sportsdata\API\MMA\Endpoint;

class Fight extends \Sportsdata\API\MMA\Runtime\Client\BaseEndpoint implements \Sportsdata\API\MMA\Runtime\Client\Endpoint
{
    protected $format;
    protected $fightid;
    /**
     * 
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>.
     * @param string $fightid The unique ID of this fight. <br> Examples: <code>1100</code>, etc.
     */
    public function __construct(string $format = 'XML', string $fightid)
    {
        $this->format = $format;
        $this->fightid = $fightid;
    }
    use \Sportsdata\API\MMA\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{format}', '{fightid}'), array($this->format, $this->fightid), '/stats/{format}/Fight/{fightid}');
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
     * @return null|\Sportsdata\API\MMA\Model\FightDetail
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Sportsdata\\API\\MMA\\Model\\FightDetail', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('apiKeyHeader', 'apiKeyQuery');
    }
}