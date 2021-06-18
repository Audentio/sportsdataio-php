<?php

namespace Sportsdata\API\CSGO\Model;

class SeasonTeam
{
    /**
     * 
     *
     * @var int
     */
    protected $seasonTeamId;
    /**
     * 
     *
     * @var int
     */
    protected $seasonId;
    /**
     * 
     *
     * @var int
     */
    protected $teamId;
    /**
     * 
     *
     * @var string|null
     */
    protected $teamName;
    /**
     * 
     *
     * @var bool
     */
    protected $active;
    /**
     * 
     *
     * @var string|null
     */
    protected $gender;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @var Team
     */
    protected $team;
    /**
     * 
     *
     * @return int
     */
    public function getSeasonTeamId() : int
    {
        return $this->seasonTeamId;
    }
    /**
     * 
     *
     * @param int $seasonTeamId
     *
     * @return self
     */
    public function setSeasonTeamId(int $seasonTeamId) : self
    {
        $this->seasonTeamId = $seasonTeamId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSeasonId() : int
    {
        return $this->seasonId;
    }
    /**
     * 
     *
     * @param int $seasonId
     *
     * @return self
     */
    public function setSeasonId(int $seasonId) : self
    {
        $this->seasonId = $seasonId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamId() : int
    {
        return $this->teamId;
    }
    /**
     * 
     *
     * @param int $teamId
     *
     * @return self
     */
    public function setTeamId(int $teamId) : self
    {
        $this->teamId = $teamId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTeamName() : ?string
    {
        return $this->teamName;
    }
    /**
     * 
     *
     * @param string|null $teamName
     *
     * @return self
     */
    public function setTeamName(?string $teamName) : self
    {
        $this->teamName = $teamName;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getActive() : bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active) : self
    {
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGender() : ?string
    {
        return $this->gender;
    }
    /**
     * 
     *
     * @param string|null $gender
     *
     * @return self
     */
    public function setGender(?string $gender) : self
    {
        $this->gender = $gender;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return Team
     */
    public function getTeam() : Team
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param Team $team
     *
     * @return self
     */
    public function setTeam(Team $team) : self
    {
        $this->team = $team;
        return $this;
    }
}