<?php

namespace Sportsdata\API\LOL\Model;

class CompetitionDetail
{
    /**
     * 
     *
     * @var Season
     */
    protected $currentSeason;
    /**
     * 
     *
     * @var TeamDetail[]
     */
    protected $teams;
    /**
     * 
     *
     * @var Game[]
     */
    protected $games;
    /**
     * 
     *
     * @var int
     */
    protected $competitionId;
    /**
     * 
     *
     * @var int
     */
    protected $areaId;
    /**
     * 
     *
     * @var string
     */
    protected $areaName;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $gender;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string
     */
    protected $format;
    /**
     * 
     *
     * @var Season[]
     */
    protected $seasons;
    /**
     * 
     *
     * @var bool
     */
    protected $playerStatsCoverage;
    /**
     * 
     *
     * @return Season
     */
    public function getCurrentSeason() : Season
    {
        return $this->currentSeason;
    }
    /**
     * 
     *
     * @param Season $currentSeason
     *
     * @return self
     */
    public function setCurrentSeason(Season $currentSeason) : self
    {
        $this->currentSeason = $currentSeason;
        return $this;
    }
    /**
     * 
     *
     * @return TeamDetail[]
     */
    public function getTeams() : array
    {
        return $this->teams;
    }
    /**
     * 
     *
     * @param TeamDetail[] $teams
     *
     * @return self
     */
    public function setTeams(array $teams) : self
    {
        $this->teams = $teams;
        return $this;
    }
    /**
     * 
     *
     * @return Game[]
     */
    public function getGames() : array
    {
        return $this->games;
    }
    /**
     * 
     *
     * @param Game[] $games
     *
     * @return self
     */
    public function setGames(array $games) : self
    {
        $this->games = $games;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCompetitionId() : int
    {
        return $this->competitionId;
    }
    /**
     * 
     *
     * @param int $competitionId
     *
     * @return self
     */
    public function setCompetitionId(int $competitionId) : self
    {
        $this->competitionId = $competitionId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAreaId() : int
    {
        return $this->areaId;
    }
    /**
     * 
     *
     * @param int $areaId
     *
     * @return self
     */
    public function setAreaId(int $areaId) : self
    {
        $this->areaId = $areaId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAreaName() : string
    {
        return $this->areaName;
    }
    /**
     * 
     *
     * @param string $areaName
     *
     * @return self
     */
    public function setAreaName(string $areaName) : self
    {
        $this->areaName = $areaName;
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
     * @return string
     */
    public function getGender() : string
    {
        return $this->gender;
    }
    /**
     * 
     *
     * @param string $gender
     *
     * @return self
     */
    public function setGender(string $gender) : self
    {
        $this->gender = $gender;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFormat() : string
    {
        return $this->format;
    }
    /**
     * 
     *
     * @param string $format
     *
     * @return self
     */
    public function setFormat(string $format) : self
    {
        $this->format = $format;
        return $this;
    }
    /**
     * 
     *
     * @return Season[]
     */
    public function getSeasons() : array
    {
        return $this->seasons;
    }
    /**
     * 
     *
     * @param Season[] $seasons
     *
     * @return self
     */
    public function setSeasons(array $seasons) : self
    {
        $this->seasons = $seasons;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPlayerStatsCoverage() : bool
    {
        return $this->playerStatsCoverage;
    }
    /**
     * 
     *
     * @param bool $playerStatsCoverage
     *
     * @return self
     */
    public function setPlayerStatsCoverage(bool $playerStatsCoverage) : self
    {
        $this->playerStatsCoverage = $playerStatsCoverage;
        return $this;
    }
}