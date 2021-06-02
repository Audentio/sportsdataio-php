<?php

namespace Sportsdata\API\LOL\Model;

class Game
{
    /**
     * 
     *
     * @var int
     */
    protected $gameId;
    /**
     * 
     *
     * @var int
     */
    protected $roundId;
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
    protected $seasonType;
    /**
     * 
     *
     * @var string
     */
    protected $group;
    /**
     * 
     *
     * @var int
     */
    protected $teamAId;
    /**
     * 
     *
     * @var int
     */
    protected $teamBId;
    /**
     * 
     *
     * @var int
     */
    protected $venueId;
    /**
     * 
     *
     * @var string
     */
    protected $day;
    /**
     * 
     *
     * @var string
     */
    protected $dateTime;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var int
     */
    protected $week;
    /**
     * 
     *
     * @var string
     */
    protected $bestOf;
    /**
     * 
     *
     * @var string
     */
    protected $winner;
    /**
     * 
     *
     * @var string
     */
    protected $venueType;
    /**
     * 
     *
     * @var string
     */
    protected $teamAKey;
    /**
     * 
     *
     * @var string
     */
    protected $teamAName;
    /**
     * 
     *
     * @var int
     */
    protected $teamAScore;
    /**
     * 
     *
     * @var string
     */
    protected $teamBKey;
    /**
     * 
     *
     * @var string
     */
    protected $teamBName;
    /**
     * 
     *
     * @var int
     */
    protected $teamBScore;
    /**
     * 
     *
     * @var int
     */
    protected $teamAMoneyLine;
    /**
     * 
     *
     * @var int
     */
    protected $teamBMoneyLine;
    /**
     * 
     *
     * @var int
     */
    protected $drawMoneyLine;
    /**
     * 
     *
     * @var float
     */
    protected $pointSpread;
    /**
     * 
     *
     * @var int
     */
    protected $teamAPointSpreadPayout;
    /**
     * 
     *
     * @var int
     */
    protected $teamBPointSpreadPayout;
    /**
     * 
     *
     * @var string
     */
    protected $updated;
    /**
     * 
     *
     * @var string
     */
    protected $updatedUtc;
    /**
     * 
     *
     * @var bool
     */
    protected $isClosed;
    /**
     * 
     *
     * @return int
     */
    public function getGameId() : int
    {
        return $this->gameId;
    }
    /**
     * 
     *
     * @param int $gameId
     *
     * @return self
     */
    public function setGameId(int $gameId) : self
    {
        $this->gameId = $gameId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRoundId() : int
    {
        return $this->roundId;
    }
    /**
     * 
     *
     * @param int $roundId
     *
     * @return self
     */
    public function setRoundId(int $roundId) : self
    {
        $this->roundId = $roundId;
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
     * @return string
     */
    public function getGroup() : string
    {
        return $this->group;
    }
    /**
     * 
     *
     * @param string $group
     *
     * @return self
     */
    public function setGroup(string $group) : self
    {
        $this->group = $group;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamAId() : int
    {
        return $this->teamAId;
    }
    /**
     * 
     *
     * @param int $teamAId
     *
     * @return self
     */
    public function setTeamAId(int $teamAId) : self
    {
        $this->teamAId = $teamAId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamBId() : int
    {
        return $this->teamBId;
    }
    /**
     * 
     *
     * @param int $teamBId
     *
     * @return self
     */
    public function setTeamBId(int $teamBId) : self
    {
        $this->teamBId = $teamBId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getVenueId() : int
    {
        return $this->venueId;
    }
    /**
     * 
     *
     * @param int $venueId
     *
     * @return self
     */
    public function setVenueId(int $venueId) : self
    {
        $this->venueId = $venueId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDay() : string
    {
        return $this->day;
    }
    /**
     * 
     *
     * @param string $day
     *
     * @return self
     */
    public function setDay(string $day) : self
    {
        $this->day = $day;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDateTime() : string
    {
        return $this->dateTime;
    }
    /**
     * 
     *
     * @param string $dateTime
     *
     * @return self
     */
    public function setDateTime(string $dateTime) : self
    {
        $this->dateTime = $dateTime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
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
     * @return string
     */
    public function getBestOf() : string
    {
        return $this->bestOf;
    }
    /**
     * 
     *
     * @param string $bestOf
     *
     * @return self
     */
    public function setBestOf(string $bestOf) : self
    {
        $this->bestOf = $bestOf;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWinner() : string
    {
        return $this->winner;
    }
    /**
     * 
     *
     * @param string $winner
     *
     * @return self
     */
    public function setWinner(string $winner) : self
    {
        $this->winner = $winner;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVenueType() : string
    {
        return $this->venueType;
    }
    /**
     * 
     *
     * @param string $venueType
     *
     * @return self
     */
    public function setVenueType(string $venueType) : self
    {
        $this->venueType = $venueType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeamAKey() : string
    {
        return $this->teamAKey;
    }
    /**
     * 
     *
     * @param string $teamAKey
     *
     * @return self
     */
    public function setTeamAKey(string $teamAKey) : self
    {
        $this->teamAKey = $teamAKey;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeamAName() : string
    {
        return $this->teamAName;
    }
    /**
     * 
     *
     * @param string $teamAName
     *
     * @return self
     */
    public function setTeamAName(string $teamAName) : self
    {
        $this->teamAName = $teamAName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamAScore() : int
    {
        return $this->teamAScore;
    }
    /**
     * 
     *
     * @param int $teamAScore
     *
     * @return self
     */
    public function setTeamAScore(int $teamAScore) : self
    {
        $this->teamAScore = $teamAScore;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeamBKey() : string
    {
        return $this->teamBKey;
    }
    /**
     * 
     *
     * @param string $teamBKey
     *
     * @return self
     */
    public function setTeamBKey(string $teamBKey) : self
    {
        $this->teamBKey = $teamBKey;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeamBName() : string
    {
        return $this->teamBName;
    }
    /**
     * 
     *
     * @param string $teamBName
     *
     * @return self
     */
    public function setTeamBName(string $teamBName) : self
    {
        $this->teamBName = $teamBName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamBScore() : int
    {
        return $this->teamBScore;
    }
    /**
     * 
     *
     * @param int $teamBScore
     *
     * @return self
     */
    public function setTeamBScore(int $teamBScore) : self
    {
        $this->teamBScore = $teamBScore;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamAMoneyLine() : int
    {
        return $this->teamAMoneyLine;
    }
    /**
     * 
     *
     * @param int $teamAMoneyLine
     *
     * @return self
     */
    public function setTeamAMoneyLine(int $teamAMoneyLine) : self
    {
        $this->teamAMoneyLine = $teamAMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamBMoneyLine() : int
    {
        return $this->teamBMoneyLine;
    }
    /**
     * 
     *
     * @param int $teamBMoneyLine
     *
     * @return self
     */
    public function setTeamBMoneyLine(int $teamBMoneyLine) : self
    {
        $this->teamBMoneyLine = $teamBMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDrawMoneyLine() : int
    {
        return $this->drawMoneyLine;
    }
    /**
     * 
     *
     * @param int $drawMoneyLine
     *
     * @return self
     */
    public function setDrawMoneyLine(int $drawMoneyLine) : self
    {
        $this->drawMoneyLine = $drawMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPointSpread() : float
    {
        return $this->pointSpread;
    }
    /**
     * 
     *
     * @param float $pointSpread
     *
     * @return self
     */
    public function setPointSpread(float $pointSpread) : self
    {
        $this->pointSpread = $pointSpread;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamAPointSpreadPayout() : int
    {
        return $this->teamAPointSpreadPayout;
    }
    /**
     * 
     *
     * @param int $teamAPointSpreadPayout
     *
     * @return self
     */
    public function setTeamAPointSpreadPayout(int $teamAPointSpreadPayout) : self
    {
        $this->teamAPointSpreadPayout = $teamAPointSpreadPayout;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamBPointSpreadPayout() : int
    {
        return $this->teamBPointSpreadPayout;
    }
    /**
     * 
     *
     * @param int $teamBPointSpreadPayout
     *
     * @return self
     */
    public function setTeamBPointSpreadPayout(int $teamBPointSpreadPayout) : self
    {
        $this->teamBPointSpreadPayout = $teamBPointSpreadPayout;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUpdated() : string
    {
        return $this->updated;
    }
    /**
     * 
     *
     * @param string $updated
     *
     * @return self
     */
    public function setUpdated(string $updated) : self
    {
        $this->updated = $updated;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUpdatedUtc() : string
    {
        return $this->updatedUtc;
    }
    /**
     * 
     *
     * @param string $updatedUtc
     *
     * @return self
     */
    public function setUpdatedUtc(string $updatedUtc) : self
    {
        $this->updatedUtc = $updatedUtc;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsClosed() : bool
    {
        return $this->isClosed;
    }
    /**
     * 
     *
     * @param bool $isClosed
     *
     * @return self
     */
    public function setIsClosed(bool $isClosed) : self
    {
        $this->isClosed = $isClosed;
        return $this;
    }
}