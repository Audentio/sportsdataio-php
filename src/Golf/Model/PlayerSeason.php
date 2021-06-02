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
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $worldGolfRank;
    /**
     * 
     *
     * @var int
     */
    protected $worldGolfRankLastWeek;
    /**
     * 
     *
     * @var int
     */
    protected $events;
    /**
     * 
     *
     * @var float
     */
    protected $averagePoints;
    /**
     * 
     *
     * @var float
     */
    protected $totalPoints;
    /**
     * 
     *
     * @var float
     */
    protected $pointsLost;
    /**
     * 
     *
     * @var float
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
    public function getWorldGolfRank() : int
    {
        return $this->worldGolfRank;
    }
    /**
     * 
     *
     * @param int $worldGolfRank
     *
     * @return self
     */
    public function setWorldGolfRank(int $worldGolfRank) : self
    {
        $this->worldGolfRank = $worldGolfRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWorldGolfRankLastWeek() : int
    {
        return $this->worldGolfRankLastWeek;
    }
    /**
     * 
     *
     * @param int $worldGolfRankLastWeek
     *
     * @return self
     */
    public function setWorldGolfRankLastWeek(int $worldGolfRankLastWeek) : self
    {
        $this->worldGolfRankLastWeek = $worldGolfRankLastWeek;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getEvents() : int
    {
        return $this->events;
    }
    /**
     * 
     *
     * @param int $events
     *
     * @return self
     */
    public function setEvents(int $events) : self
    {
        $this->events = $events;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAveragePoints() : float
    {
        return $this->averagePoints;
    }
    /**
     * 
     *
     * @param float $averagePoints
     *
     * @return self
     */
    public function setAveragePoints(float $averagePoints) : self
    {
        $this->averagePoints = $averagePoints;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalPoints() : float
    {
        return $this->totalPoints;
    }
    /**
     * 
     *
     * @param float $totalPoints
     *
     * @return self
     */
    public function setTotalPoints(float $totalPoints) : self
    {
        $this->totalPoints = $totalPoints;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPointsLost() : float
    {
        return $this->pointsLost;
    }
    /**
     * 
     *
     * @param float $pointsLost
     *
     * @return self
     */
    public function setPointsLost(float $pointsLost) : self
    {
        $this->pointsLost = $pointsLost;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPointsGained() : float
    {
        return $this->pointsGained;
    }
    /**
     * 
     *
     * @param float $pointsGained
     *
     * @return self
     */
    public function setPointsGained(float $pointsGained) : self
    {
        $this->pointsGained = $pointsGained;
        return $this;
    }
}