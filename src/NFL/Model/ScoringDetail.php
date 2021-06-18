<?php

namespace Sportsdata\API\NFL\Model;

class ScoringDetail
{
    /**
     * 
     *
     * @var string|null
     */
    protected $gameKey;
    /**
     * 
     *
     * @var int
     */
    protected $seasonType;
    /**
     * 
     *
     * @var int|null
     */
    protected $playerID;
    /**
     * 
     *
     * @var string|null
     */
    protected $team;
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
    protected $week;
    /**
     * 
     *
     * @var string|null
     */
    protected $scoringType;
    /**
     * 
     *
     * @var int
     */
    protected $length;
    /**
     * 
     *
     * @var int
     */
    protected $scoringDetailID;
    /**
     * 
     *
     * @var int
     */
    protected $playerGameID;
    /**
     * 
     *
     * @var int|null
     */
    protected $scoreID;
    /**
     * 
     *
     * @return string|null
     */
    public function getGameKey() : ?string
    {
        return $this->gameKey;
    }
    /**
     * 
     *
     * @param string|null $gameKey
     *
     * @return self
     */
    public function setGameKey(?string $gameKey) : self
    {
        $this->gameKey = $gameKey;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSeasonType() : int
    {
        return $this->seasonType;
    }
    /**
     * 
     *
     * @param int $seasonType
     *
     * @return self
     */
    public function setSeasonType(int $seasonType) : self
    {
        $this->seasonType = $seasonType;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPlayerID() : ?int
    {
        return $this->playerID;
    }
    /**
     * 
     *
     * @param int|null $playerID
     *
     * @return self
     */
    public function setPlayerID(?int $playerID) : self
    {
        $this->playerID = $playerID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTeam() : ?string
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param string|null $team
     *
     * @return self
     */
    public function setTeam(?string $team) : self
    {
        $this->team = $team;
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
    public function getWeek() : int
    {
        return $this->week;
    }
    /**
     * 
     *
     * @param int $week
     *
     * @return self
     */
    public function setWeek(int $week) : self
    {
        $this->week = $week;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getScoringType() : ?string
    {
        return $this->scoringType;
    }
    /**
     * 
     *
     * @param string|null $scoringType
     *
     * @return self
     */
    public function setScoringType(?string $scoringType) : self
    {
        $this->scoringType = $scoringType;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLength() : int
    {
        return $this->length;
    }
    /**
     * 
     *
     * @param int $length
     *
     * @return self
     */
    public function setLength(int $length) : self
    {
        $this->length = $length;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getScoringDetailID() : int
    {
        return $this->scoringDetailID;
    }
    /**
     * 
     *
     * @param int $scoringDetailID
     *
     * @return self
     */
    public function setScoringDetailID(int $scoringDetailID) : self
    {
        $this->scoringDetailID = $scoringDetailID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlayerGameID() : int
    {
        return $this->playerGameID;
    }
    /**
     * 
     *
     * @param int $playerGameID
     *
     * @return self
     */
    public function setPlayerGameID(int $playerGameID) : self
    {
        $this->playerGameID = $playerGameID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getScoreID() : ?int
    {
        return $this->scoreID;
    }
    /**
     * 
     *
     * @param int|null $scoreID
     *
     * @return self
     */
    public function setScoreID(?int $scoreID) : self
    {
        $this->scoreID = $scoreID;
        return $this;
    }
}