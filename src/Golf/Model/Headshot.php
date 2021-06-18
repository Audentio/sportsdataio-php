<?php

namespace Sportsdata\API\Golf\Model;

class Headshot
{
    /**
     * 
     *
     * @var int
     */
    protected $playerID;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $preferredHostedHeadshotUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $preferredHostedHeadshotUpdated;
    /**
     * 
     *
     * @var string|null
     */
    protected $hostedHeadshotWithBackgroundUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $hostedHeadshotWithBackgroundUpdated;
    /**
     * 
     *
     * @var string|null
     */
    protected $hostedHeadshotNoBackgroundUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $hostedHeadshotNoBackgroundUpdated;
    /**
     * 
     *
     * @return int
     */
    public function getPlayerID() : int
    {
        return $this->playerID;
    }
    /**
     * 
     *
     * @param int $playerID
     *
     * @return self
     */
    public function setPlayerID(int $playerID) : self
    {
        $this->playerID = $playerID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPreferredHostedHeadshotUrl() : ?string
    {
        return $this->preferredHostedHeadshotUrl;
    }
    /**
     * 
     *
     * @param string|null $preferredHostedHeadshotUrl
     *
     * @return self
     */
    public function setPreferredHostedHeadshotUrl(?string $preferredHostedHeadshotUrl) : self
    {
        $this->preferredHostedHeadshotUrl = $preferredHostedHeadshotUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPreferredHostedHeadshotUpdated() : ?string
    {
        return $this->preferredHostedHeadshotUpdated;
    }
    /**
     * 
     *
     * @param string|null $preferredHostedHeadshotUpdated
     *
     * @return self
     */
    public function setPreferredHostedHeadshotUpdated(?string $preferredHostedHeadshotUpdated) : self
    {
        $this->preferredHostedHeadshotUpdated = $preferredHostedHeadshotUpdated;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHostedHeadshotWithBackgroundUrl() : ?string
    {
        return $this->hostedHeadshotWithBackgroundUrl;
    }
    /**
     * 
     *
     * @param string|null $hostedHeadshotWithBackgroundUrl
     *
     * @return self
     */
    public function setHostedHeadshotWithBackgroundUrl(?string $hostedHeadshotWithBackgroundUrl) : self
    {
        $this->hostedHeadshotWithBackgroundUrl = $hostedHeadshotWithBackgroundUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHostedHeadshotWithBackgroundUpdated() : ?string
    {
        return $this->hostedHeadshotWithBackgroundUpdated;
    }
    /**
     * 
     *
     * @param string|null $hostedHeadshotWithBackgroundUpdated
     *
     * @return self
     */
    public function setHostedHeadshotWithBackgroundUpdated(?string $hostedHeadshotWithBackgroundUpdated) : self
    {
        $this->hostedHeadshotWithBackgroundUpdated = $hostedHeadshotWithBackgroundUpdated;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHostedHeadshotNoBackgroundUrl() : ?string
    {
        return $this->hostedHeadshotNoBackgroundUrl;
    }
    /**
     * 
     *
     * @param string|null $hostedHeadshotNoBackgroundUrl
     *
     * @return self
     */
    public function setHostedHeadshotNoBackgroundUrl(?string $hostedHeadshotNoBackgroundUrl) : self
    {
        $this->hostedHeadshotNoBackgroundUrl = $hostedHeadshotNoBackgroundUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHostedHeadshotNoBackgroundUpdated() : ?string
    {
        return $this->hostedHeadshotNoBackgroundUpdated;
    }
    /**
     * 
     *
     * @param string|null $hostedHeadshotNoBackgroundUpdated
     *
     * @return self
     */
    public function setHostedHeadshotNoBackgroundUpdated(?string $hostedHeadshotNoBackgroundUpdated) : self
    {
        $this->hostedHeadshotNoBackgroundUpdated = $hostedHeadshotNoBackgroundUpdated;
        return $this;
    }
}