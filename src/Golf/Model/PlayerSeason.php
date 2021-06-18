<?php

namespace Sportsdata\API\Golf\Model;

class PlayerSeason
{
    /**
     * 
     *
     * @var int
     */
    protected $playerSeasonID;
    /**
     * 
     *
     * @var int
     */
    protected $season;
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
     * @var int|null
     */
    protected $worldGolfRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $worldGolfRankLastWeek;
    /**
     * 
     *
     * @var int|null
     */
    protected $events;
    /**
     * 
     *
     * @var float|null
     */
    protected $averagePoints;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalPoints;
    /**
     * 
     *
     * @var float|null
     */
    protected $pointsLost;
    /**
     * 
     *
     * @var float|null
     */
    protected $pointsGained;
    /**
     * 
     *
     * @return int
     */
    public function getPlayerSeasonID() : int
    {
        return $this->playerSeasonID;
    }
    /**
     * 
     *
     * @param int $playerSeasonID
     *
     * @return self
     */
    public function setPlayerSeasonID(int $playerSeasonID) : self
    {
        $this->playerSeasonID = $playerSeasonID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSeason() : int
    {
        return $this->season;
    }
    /**
     * 
     *
     * @param int $season
     *
     * @return self
     */
    public function setSeason(int $season) : self
    {
        $this->season = $season;
        return $this;
    }
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
     * @return int|null
     */
    public function getWorldGolfRank() : ?int
    {
        return $this->worldGolfRank;
    }
    /**
     * 
     *
     * @param int|null $worldGolfRank
     *
     * @return self
     */
    public function setWorldGolfRank(?int $worldGolfRank) : self
    {
        $this->worldGolfRank = $worldGolfRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWorldGolfRankLastWeek() : ?int
    {
        return $this->worldGolfRankLastWeek;
    }
    /**
     * 
     *
     * @param int|null $worldGolfRankLastWeek
     *
     * @return self
     */
    public function setWorldGolfRankLastWeek(?int $worldGolfRankLastWeek) : self
    {
        $this->worldGolfRankLastWeek = $worldGolfRankLastWeek;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getEvents() : ?int
    {
        return $this->events;
    }
    /**
     * 
     *
     * @param int|null $events
     *
     * @return self
     */
    public function setEvents(?int $events) : self
    {
        $this->events = $events;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAveragePoints() : ?float
    {
        return $this->averagePoints;
    }
    /**
     * 
     *
     * @param float|null $averagePoints
     *
     * @return self
     */
    public function setAveragePoints(?float $averagePoints) : self
    {
        $this->averagePoints = $averagePoints;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTotalPoints() : ?float
    {
        return $this->totalPoints;
    }
    /**
     * 
     *
     * @param float|null $totalPoints
     *
     * @return self
     */
    public function setTotalPoints(?float $totalPoints) : self
    {
        $this->totalPoints = $totalPoints;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPointsLost() : ?float
    {
        return $this->pointsLost;
    }
    /**
     * 
     *
     * @param float|null $pointsLost
     *
     * @return self
     */
    public function setPointsLost(?float $pointsLost) : self
    {
        $this->pointsLost = $pointsLost;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPointsGained() : ?float
    {
        return $this->pointsGained;
    }
    /**
     * 
     *
     * @param float|null $pointsGained
     *
     * @return self
     */
    public function setPointsGained(?float $pointsGained) : self
    {
        $this->pointsGained = $pointsGained;
        return $this;
    }
}