<?php

namespace Sportsdata\API\MLB\Model;

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
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $teamID;
    /**
     * 
     *
     * @var string
     */
    protected $team;
    /**
     * 
     *
     * @var string
     */
    protected $position;
    /**
     * 
     *
     * @var string
     */
    protected $preferredHostedHeadshotUrl;
    /**
     * 
     *
     * @var string
     */
    protected $preferredHostedHeadshotUpdated;
    /**
     * 
     *
     * @var string
     */
    protected $hostedHeadshotWithBackgroundUrl;
    /**
     * 
     *
     * @var string
     */
    protected $hostedHeadshotWithBackgroundUpdated;
    /**
     * 
     *
     * @var string
     */
    protected $hostedHeadshotNoBackgroundUrl;
    /**
     * 
     *
     * @var string
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
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamID() : int
    {
        return $this->teamID;
    }
    /**
     * 
     *
     * @param int $teamID
     *
     * @return self
     */
    public function setTeamID(int $teamID) : self
    {
        $this->teamID = $teamID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeam() : string
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param string $team
     *
     * @return self
     */
    public function setTeam(string $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPosition() : string
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param string $position
     *
     * @return self
     */
    public function setPosition(string $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPreferredHostedHeadshotUrl() : string
    {
        return $this->preferredHostedHeadshotUrl;
    }
    /**
     * 
     *
     * @param string $preferredHostedHeadshotUrl
     *
     * @return self
     */
    public function setPreferredHostedHeadshotUrl(string $preferredHostedHeadshotUrl) : self
    {
        $this->preferredHostedHeadshotUrl = $preferredHostedHeadshotUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPreferredHostedHeadshotUpdated() : string
    {
        return $this->preferredHostedHeadshotUpdated;
    }
    /**
     * 
     *
     * @param string $preferredHostedHeadshotUpdated
     *
     * @return self
     */
    public function setPreferredHostedHeadshotUpdated(string $preferredHostedHeadshotUpdated) : self
    {
        $this->preferredHostedHeadshotUpdated = $preferredHostedHeadshotUpdated;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHostedHeadshotWithBackgroundUrl() : string
    {
        return $this->hostedHeadshotWithBackgroundUrl;
    }
    /**
     * 
     *
     * @param string $hostedHeadshotWithBackgroundUrl
     *
     * @return self
     */
    public function setHostedHeadshotWithBackgroundUrl(string $hostedHeadshotWithBackgroundUrl) : self
    {
        $this->hostedHeadshotWithBackgroundUrl = $hostedHeadshotWithBackgroundUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHostedHeadshotWithBackgroundUpdated() : string
    {
        return $this->hostedHeadshotWithBackgroundUpdated;
    }
    /**
     * 
     *
     * @param string $hostedHeadshotWithBackgroundUpdated
     *
     * @return self
     */
    public function setHostedHeadshotWithBackgroundUpdated(string $hostedHeadshotWithBackgroundUpdated) : self
    {
        $this->hostedHeadshotWithBackgroundUpdated = $hostedHeadshotWithBackgroundUpdated;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHostedHeadshotNoBackgroundUrl() : string
    {
        return $this->hostedHeadshotNoBackgroundUrl;
    }
    /**
     * 
     *
     * @param string $hostedHeadshotNoBackgroundUrl
     *
     * @return self
     */
    public function setHostedHeadshotNoBackgroundUrl(string $hostedHeadshotNoBackgroundUrl) : self
    {
        $this->hostedHeadshotNoBackgroundUrl = $hostedHeadshotNoBackgroundUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHostedHeadshotNoBackgroundUpdated() : string
    {
        return $this->hostedHeadshotNoBackgroundUpdated;
    }
    /**
     * 
     *
     * @param string $hostedHeadshotNoBackgroundUpdated
     *
     * @return self
     */
    public function setHostedHeadshotNoBackgroundUpdated(string $hostedHeadshotNoBackgroundUpdated) : self
    {
        $this->hostedHeadshotNoBackgroundUpdated = $hostedHeadshotNoBackgroundUpdated;
        return $this;
    }
}