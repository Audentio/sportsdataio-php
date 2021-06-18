<?php

namespace Sportsdata\API\MMA\Model;

class League
{
    /**
     * 
     *
     * @var int
     */
    protected $leagueId;
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
    protected $key;
    /**
     * 
     *
     * @return int
     */
    public function getLeagueId() : int
    {
        return $this->leagueId;
    }
    /**
     * 
     *
     * @param int $leagueId
     *
     * @return self
     */
    public function setLeagueId(int $leagueId) : self
    {
        $this->leagueId = $leagueId;
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
    public function getKey() : ?string
    {
        return $this->key;
    }
    /**
     * 
     *
     * @param string|null $key
     *
     * @return self
     */
    public function setKey(?string $key) : self
    {
        $this->key = $key;
        return $this;
    }
}