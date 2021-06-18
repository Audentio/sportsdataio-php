<?php

namespace Sportsdata\API\CSGO\Model;

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
     * @var string|null
     */
    protected $group;
    /**
     * 
     *
     * @var int|null
     */
    protected $teamAId;
    /**
     * 
     *
     * @var int|null
     */
    protected $teamBId;
    /**
     * 
     *
     * @var int|null
     */
    protected $venueId;
    /**
     * 
     *
     * @var string|null
     */
    protected $day;
    /**
     * 
     *
     * @var string|null
     */
    protected $dateTime;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var int|null
     */
    protected $week;
    /**
     * 
     *
     * @var string|null
     */
    protected $bestOf;
    /**
     * 
     *
     * @var string|null
     */
    protected $winner;
    /**
     * 
     *
     * @var string|null
     */
    protected $venueType;
    /**
     * 
     *
     * @var string|null
     */
    protected $teamAKey;
    /**
     * 
     *
     * @var string|null
     */
    protected $teamAName;
    /**
     * 
     *
     * @var int|null
     */
    protected $teamAScore;
    /**
     * 
     *
     * @var string|null
     */
    protected $teamBKey;
    /**
     * 
     *
     * @var string|null
     */
    protected $teamBName;
    /**
     * 
     *
     * @var int|null
     */
    protected $teamBScore;
    /**
     * 
     *
     * @var int|null
     */
    protected $teamAMoneyLine;
    /**
     * 
     *
     * @var int|null
     */
    protected $teamBMoneyLine;
    /**
     * 
     *
     * @var int|null
     */
    protected $drawMoneyLine;
    /**
     * 
     *
     * @var float|null
     */
    protected $pointSpread;
    /**
     * 
     *
     * @var int|null
     */
    protected $teamAPointSpreadPayout;
    /**
     * 
     *
     * @var int|null
     */
    protected $teamBPointSpreadPayout;
    /**
     * 
     *
     * @var string|null
     */
    protected $updated;
    /**
     * 
     *
     * @var string|null
     */
    protected $updatedUtc;
    /**
     * 
     *
     * @var bool|null
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
     * @return string|null
     */
    public function getGroup() : ?string
    {
        return $this->group;
    }
    /**
     * 
     *
     * @param string|null $group
     *
     * @return self
     */
    public function setGroup(?string $group) : self
    {
        $this->group = $group;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTeamAId() : ?int
    {
        return $this->teamAId;
    }
    /**
     * 
     *
     * @param int|null $teamAId
     *
     * @return self
     */
    public function setTeamAId(?int $teamAId) : self
    {
        $this->teamAId = $teamAId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTeamBId() : ?int
    {
        return $this->teamBId;
    }
    /**
     * 
     *
     * @param int|null $teamBId
     *
     * @return self
     */
    public function setTeamBId(?int $teamBId) : self
    {
        $this->teamBId = $teamBId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getVenueId() : ?int
    {
        return $this->venueId;
    }
    /**
     * 
     *
     * @param int|null $venueId
     *
     * @return self
     */
    public function setVenueId(?int $venueId) : self
    {
        $this->venueId = $venueId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDay() : ?string
    {
        return $this->day;
    }
    /**
     * 
     *
     * @param string|null $day
     *
     * @return self
     */
    public function setDay(?string $day) : self
    {
        $this->day = $day;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDateTime() : ?string
    {
        return $this->dateTime;
    }
    /**
     * 
     *
     * @param string|null $dateTime
     *
     * @return self
     */
    public function setDateTime(?string $dateTime) : self
    {
        $this->dateTime = $dateTime;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWeek() : ?int
    {
        return $this->week;
    }
    /**
     * 
     *
     * @param int|null $week
     *
     * @return self
     */
    public function setWeek(?int $week) : self
    {
        $this->week = $week;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBestOf() : ?string
    {
        return $this->bestOf;
    }
    /**
     * 
     *
     * @param string|null $bestOf
     *
     * @return self
     */
    public function setBestOf(?string $bestOf) : self
    {
        $this->bestOf = $bestOf;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWinner() : ?string
    {
        return $this->winner;
    }
    /**
     * 
     *
     * @param string|null $winner
     *
     * @return self
     */
    public function setWinner(?string $winner) : self
    {
        $this->winner = $winner;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVenueType() : ?string
    {
        return $this->venueType;
    }
    /**
     * 
     *
     * @param string|null $venueType
     *
     * @return self
     */
    public function setVenueType(?string $venueType) : self
    {
        $this->venueType = $venueType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTeamAKey() : ?string
    {
        return $this->teamAKey;
    }
    /**
     * 
     *
     * @param string|null $teamAKey
     *
     * @return self
     */
    public function setTeamAKey(?string $teamAKey) : self
    {
        $this->teamAKey = $teamAKey;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTeamAName() : ?string
    {
        return $this->teamAName;
    }
    /**
     * 
     *
     * @param string|null $teamAName
     *
     * @return self
     */
    public function setTeamAName(?string $teamAName) : self
    {
        $this->teamAName = $teamAName;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTeamAScore() : ?int
    {
        return $this->teamAScore;
    }
    /**
     * 
     *
     * @param int|null $teamAScore
     *
     * @return self
     */
    public function setTeamAScore(?int $teamAScore) : self
    {
        $this->teamAScore = $teamAScore;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTeamBKey() : ?string
    {
        return $this->teamBKey;
    }
    /**
     * 
     *
     * @param string|null $teamBKey
     *
     * @return self
     */
    public function setTeamBKey(?string $teamBKey) : self
    {
        $this->teamBKey = $teamBKey;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTeamBName() : ?string
    {
        return $this->teamBName;
    }
    /**
     * 
     *
     * @param string|null $teamBName
     *
     * @return self
     */
    public function setTeamBName(?string $teamBName) : self
    {
        $this->teamBName = $teamBName;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTeamBScore() : ?int
    {
        return $this->teamBScore;
    }
    /**
     * 
     *
     * @param int|null $teamBScore
     *
     * @return self
     */
    public function setTeamBScore(?int $teamBScore) : self
    {
        $this->teamBScore = $teamBScore;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTeamAMoneyLine() : ?int
    {
        return $this->teamAMoneyLine;
    }
    /**
     * 
     *
     * @param int|null $teamAMoneyLine
     *
     * @return self
     */
    public function setTeamAMoneyLine(?int $teamAMoneyLine) : self
    {
        $this->teamAMoneyLine = $teamAMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTeamBMoneyLine() : ?int
    {
        return $this->teamBMoneyLine;
    }
    /**
     * 
     *
     * @param int|null $teamBMoneyLine
     *
     * @return self
     */
    public function setTeamBMoneyLine(?int $teamBMoneyLine) : self
    {
        $this->teamBMoneyLine = $teamBMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDrawMoneyLine() : ?int
    {
        return $this->drawMoneyLine;
    }
    /**
     * 
     *
     * @param int|null $drawMoneyLine
     *
     * @return self
     */
    public function setDrawMoneyLine(?int $drawMoneyLine) : self
    {
        $this->drawMoneyLine = $drawMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPointSpread() : ?float
    {
        return $this->pointSpread;
    }
    /**
     * 
     *
     * @param float|null $pointSpread
     *
     * @return self
     */
    public function setPointSpread(?float $pointSpread) : self
    {
        $this->pointSpread = $pointSpread;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTeamAPointSpreadPayout() : ?int
    {
        return $this->teamAPointSpreadPayout;
    }
    /**
     * 
     *
     * @param int|null $teamAPointSpreadPayout
     *
     * @return self
     */
    public function setTeamAPointSpreadPayout(?int $teamAPointSpreadPayout) : self
    {
        $this->teamAPointSpreadPayout = $teamAPointSpreadPayout;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTeamBPointSpreadPayout() : ?int
    {
        return $this->teamBPointSpreadPayout;
    }
    /**
     * 
     *
     * @param int|null $teamBPointSpreadPayout
     *
     * @return self
     */
    public function setTeamBPointSpreadPayout(?int $teamBPointSpreadPayout) : self
    {
        $this->teamBPointSpreadPayout = $teamBPointSpreadPayout;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUpdated() : ?string
    {
        return $this->updated;
    }
    /**
     * 
     *
     * @param string|null $updated
     *
     * @return self
     */
    public function setUpdated(?string $updated) : self
    {
        $this->updated = $updated;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUpdatedUtc() : ?string
    {
        return $this->updatedUtc;
    }
    /**
     * 
     *
     * @param string|null $updatedUtc
     *
     * @return self
     */
    public function setUpdatedUtc(?string $updatedUtc) : self
    {
        $this->updatedUtc = $updatedUtc;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsClosed() : ?bool
    {
        return $this->isClosed;
    }
    /**
     * 
     *
     * @param bool|null $isClosed
     *
     * @return self
     */
    public function setIsClosed(?bool $isClosed) : self
    {
        $this->isClosed = $isClosed;
        return $this;
    }
}