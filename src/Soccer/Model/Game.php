<?php

namespace Sportsdata\API\Soccer\Model;

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
    protected $awayTeamId;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTeamId;
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
    protected $period;
    /**
     * 
     *
     * @var int|null
     */
    protected $clock;
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
    protected $awayTeamKey;
    /**
     * 
     *
     * @var string|null
     */
    protected $awayTeamName;
    /**
     * 
     *
     * @var string|null
     */
    protected $awayTeamCountryCode;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTeamScore;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTeamScorePeriod1;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTeamScorePeriod2;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTeamScoreExtraTime;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTeamScorePenalty;
    /**
     * 
     *
     * @var string|null
     */
    protected $homeTeamKey;
    /**
     * 
     *
     * @var string|null
     */
    protected $homeTeamName;
    /**
     * 
     *
     * @var string|null
     */
    protected $homeTeamCountryCode;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTeamScore;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTeamScorePeriod1;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTeamScorePeriod2;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTeamScoreExtraTime;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTeamScorePenalty;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTeamMoneyLine;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTeamMoneyLine;
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
    protected $homeTeamPointSpreadPayout;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTeamPointSpreadPayout;
    /**
     * 
     *
     * @var float|null
     */
    protected $overUnder;
    /**
     * 
     *
     * @var int|null
     */
    protected $overPayout;
    /**
     * 
     *
     * @var int|null
     */
    protected $underPayout;
    /**
     * 
     *
     * @var int|null
     */
    protected $attendance;
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
     * @var int
     */
    protected $globalGameId;
    /**
     * 
     *
     * @var int|null
     */
    protected $globalAwayTeamId;
    /**
     * 
     *
     * @var int|null
     */
    protected $globalHomeTeamId;
    /**
     * 
     *
     * @var int|null
     */
    protected $clockExtra;
    /**
     * 
     *
     * @var string|null
     */
    protected $clockDisplay;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isClosed;
    /**
     * 
     *
     * @var string|null
     */
    protected $homeTeamFormation;
    /**
     * 
     *
     * @var string|null
     */
    protected $awayTeamFormation;
    /**
     * 
     *
     * @var PlayoffAggregateScore
     */
    protected $playoffAggregateScore;
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
    public function getAwayTeamId() : ?int
    {
        return $this->awayTeamId;
    }
    /**
     * 
     *
     * @param int|null $awayTeamId
     *
     * @return self
     */
    public function setAwayTeamId(?int $awayTeamId) : self
    {
        $this->awayTeamId = $awayTeamId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTeamId() : ?int
    {
        return $this->homeTeamId;
    }
    /**
     * 
     *
     * @param int|null $homeTeamId
     *
     * @return self
     */
    public function setHomeTeamId(?int $homeTeamId) : self
    {
        $this->homeTeamId = $homeTeamId;
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
    public function getPeriod() : ?string
    {
        return $this->period;
    }
    /**
     * 
     *
     * @param string|null $period
     *
     * @return self
     */
    public function setPeriod(?string $period) : self
    {
        $this->period = $period;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getClock() : ?int
    {
        return $this->clock;
    }
    /**
     * 
     *
     * @param int|null $clock
     *
     * @return self
     */
    public function setClock(?int $clock) : self
    {
        $this->clock = $clock;
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
    public function getAwayTeamKey() : ?string
    {
        return $this->awayTeamKey;
    }
    /**
     * 
     *
     * @param string|null $awayTeamKey
     *
     * @return self
     */
    public function setAwayTeamKey(?string $awayTeamKey) : self
    {
        $this->awayTeamKey = $awayTeamKey;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAwayTeamName() : ?string
    {
        return $this->awayTeamName;
    }
    /**
     * 
     *
     * @param string|null $awayTeamName
     *
     * @return self
     */
    public function setAwayTeamName(?string $awayTeamName) : self
    {
        $this->awayTeamName = $awayTeamName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAwayTeamCountryCode() : ?string
    {
        return $this->awayTeamCountryCode;
    }
    /**
     * 
     *
     * @param string|null $awayTeamCountryCode
     *
     * @return self
     */
    public function setAwayTeamCountryCode(?string $awayTeamCountryCode) : self
    {
        $this->awayTeamCountryCode = $awayTeamCountryCode;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTeamScore() : ?int
    {
        return $this->awayTeamScore;
    }
    /**
     * 
     *
     * @param int|null $awayTeamScore
     *
     * @return self
     */
    public function setAwayTeamScore(?int $awayTeamScore) : self
    {
        $this->awayTeamScore = $awayTeamScore;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTeamScorePeriod1() : ?int
    {
        return $this->awayTeamScorePeriod1;
    }
    /**
     * 
     *
     * @param int|null $awayTeamScorePeriod1
     *
     * @return self
     */
    public function setAwayTeamScorePeriod1(?int $awayTeamScorePeriod1) : self
    {
        $this->awayTeamScorePeriod1 = $awayTeamScorePeriod1;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTeamScorePeriod2() : ?int
    {
        return $this->awayTeamScorePeriod2;
    }
    /**
     * 
     *
     * @param int|null $awayTeamScorePeriod2
     *
     * @return self
     */
    public function setAwayTeamScorePeriod2(?int $awayTeamScorePeriod2) : self
    {
        $this->awayTeamScorePeriod2 = $awayTeamScorePeriod2;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTeamScoreExtraTime() : ?int
    {
        return $this->awayTeamScoreExtraTime;
    }
    /**
     * 
     *
     * @param int|null $awayTeamScoreExtraTime
     *
     * @return self
     */
    public function setAwayTeamScoreExtraTime(?int $awayTeamScoreExtraTime) : self
    {
        $this->awayTeamScoreExtraTime = $awayTeamScoreExtraTime;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTeamScorePenalty() : ?int
    {
        return $this->awayTeamScorePenalty;
    }
    /**
     * 
     *
     * @param int|null $awayTeamScorePenalty
     *
     * @return self
     */
    public function setAwayTeamScorePenalty(?int $awayTeamScorePenalty) : self
    {
        $this->awayTeamScorePenalty = $awayTeamScorePenalty;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHomeTeamKey() : ?string
    {
        return $this->homeTeamKey;
    }
    /**
     * 
     *
     * @param string|null $homeTeamKey
     *
     * @return self
     */
    public function setHomeTeamKey(?string $homeTeamKey) : self
    {
        $this->homeTeamKey = $homeTeamKey;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHomeTeamName() : ?string
    {
        return $this->homeTeamName;
    }
    /**
     * 
     *
     * @param string|null $homeTeamName
     *
     * @return self
     */
    public function setHomeTeamName(?string $homeTeamName) : self
    {
        $this->homeTeamName = $homeTeamName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHomeTeamCountryCode() : ?string
    {
        return $this->homeTeamCountryCode;
    }
    /**
     * 
     *
     * @param string|null $homeTeamCountryCode
     *
     * @return self
     */
    public function setHomeTeamCountryCode(?string $homeTeamCountryCode) : self
    {
        $this->homeTeamCountryCode = $homeTeamCountryCode;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTeamScore() : ?int
    {
        return $this->homeTeamScore;
    }
    /**
     * 
     *
     * @param int|null $homeTeamScore
     *
     * @return self
     */
    public function setHomeTeamScore(?int $homeTeamScore) : self
    {
        $this->homeTeamScore = $homeTeamScore;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTeamScorePeriod1() : ?int
    {
        return $this->homeTeamScorePeriod1;
    }
    /**
     * 
     *
     * @param int|null $homeTeamScorePeriod1
     *
     * @return self
     */
    public function setHomeTeamScorePeriod1(?int $homeTeamScorePeriod1) : self
    {
        $this->homeTeamScorePeriod1 = $homeTeamScorePeriod1;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTeamScorePeriod2() : ?int
    {
        return $this->homeTeamScorePeriod2;
    }
    /**
     * 
     *
     * @param int|null $homeTeamScorePeriod2
     *
     * @return self
     */
    public function setHomeTeamScorePeriod2(?int $homeTeamScorePeriod2) : self
    {
        $this->homeTeamScorePeriod2 = $homeTeamScorePeriod2;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTeamScoreExtraTime() : ?int
    {
        return $this->homeTeamScoreExtraTime;
    }
    /**
     * 
     *
     * @param int|null $homeTeamScoreExtraTime
     *
     * @return self
     */
    public function setHomeTeamScoreExtraTime(?int $homeTeamScoreExtraTime) : self
    {
        $this->homeTeamScoreExtraTime = $homeTeamScoreExtraTime;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTeamScorePenalty() : ?int
    {
        return $this->homeTeamScorePenalty;
    }
    /**
     * 
     *
     * @param int|null $homeTeamScorePenalty
     *
     * @return self
     */
    public function setHomeTeamScorePenalty(?int $homeTeamScorePenalty) : self
    {
        $this->homeTeamScorePenalty = $homeTeamScorePenalty;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTeamMoneyLine() : ?int
    {
        return $this->homeTeamMoneyLine;
    }
    /**
     * 
     *
     * @param int|null $homeTeamMoneyLine
     *
     * @return self
     */
    public function setHomeTeamMoneyLine(?int $homeTeamMoneyLine) : self
    {
        $this->homeTeamMoneyLine = $homeTeamMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTeamMoneyLine() : ?int
    {
        return $this->awayTeamMoneyLine;
    }
    /**
     * 
     *
     * @param int|null $awayTeamMoneyLine
     *
     * @return self
     */
    public function setAwayTeamMoneyLine(?int $awayTeamMoneyLine) : self
    {
        $this->awayTeamMoneyLine = $awayTeamMoneyLine;
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
    public function getHomeTeamPointSpreadPayout() : ?int
    {
        return $this->homeTeamPointSpreadPayout;
    }
    /**
     * 
     *
     * @param int|null $homeTeamPointSpreadPayout
     *
     * @return self
     */
    public function setHomeTeamPointSpreadPayout(?int $homeTeamPointSpreadPayout) : self
    {
        $this->homeTeamPointSpreadPayout = $homeTeamPointSpreadPayout;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTeamPointSpreadPayout() : ?int
    {
        return $this->awayTeamPointSpreadPayout;
    }
    /**
     * 
     *
     * @param int|null $awayTeamPointSpreadPayout
     *
     * @return self
     */
    public function setAwayTeamPointSpreadPayout(?int $awayTeamPointSpreadPayout) : self
    {
        $this->awayTeamPointSpreadPayout = $awayTeamPointSpreadPayout;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOverUnder() : ?float
    {
        return $this->overUnder;
    }
    /**
     * 
     *
     * @param float|null $overUnder
     *
     * @return self
     */
    public function setOverUnder(?float $overUnder) : self
    {
        $this->overUnder = $overUnder;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOverPayout() : ?int
    {
        return $this->overPayout;
    }
    /**
     * 
     *
     * @param int|null $overPayout
     *
     * @return self
     */
    public function setOverPayout(?int $overPayout) : self
    {
        $this->overPayout = $overPayout;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUnderPayout() : ?int
    {
        return $this->underPayout;
    }
    /**
     * 
     *
     * @param int|null $underPayout
     *
     * @return self
     */
    public function setUnderPayout(?int $underPayout) : self
    {
        $this->underPayout = $underPayout;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAttendance() : ?int
    {
        return $this->attendance;
    }
    /**
     * 
     *
     * @param int|null $attendance
     *
     * @return self
     */
    public function setAttendance(?int $attendance) : self
    {
        $this->attendance = $attendance;
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
     * @return int
     */
    public function getGlobalGameId() : int
    {
        return $this->globalGameId;
    }
    /**
     * 
     *
     * @param int $globalGameId
     *
     * @return self
     */
    public function setGlobalGameId(int $globalGameId) : self
    {
        $this->globalGameId = $globalGameId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGlobalAwayTeamId() : ?int
    {
        return $this->globalAwayTeamId;
    }
    /**
     * 
     *
     * @param int|null $globalAwayTeamId
     *
     * @return self
     */
    public function setGlobalAwayTeamId(?int $globalAwayTeamId) : self
    {
        $this->globalAwayTeamId = $globalAwayTeamId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGlobalHomeTeamId() : ?int
    {
        return $this->globalHomeTeamId;
    }
    /**
     * 
     *
     * @param int|null $globalHomeTeamId
     *
     * @return self
     */
    public function setGlobalHomeTeamId(?int $globalHomeTeamId) : self
    {
        $this->globalHomeTeamId = $globalHomeTeamId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getClockExtra() : ?int
    {
        return $this->clockExtra;
    }
    /**
     * 
     *
     * @param int|null $clockExtra
     *
     * @return self
     */
    public function setClockExtra(?int $clockExtra) : self
    {
        $this->clockExtra = $clockExtra;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getClockDisplay() : ?string
    {
        return $this->clockDisplay;
    }
    /**
     * 
     *
     * @param string|null $clockDisplay
     *
     * @return self
     */
    public function setClockDisplay(?string $clockDisplay) : self
    {
        $this->clockDisplay = $clockDisplay;
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
    /**
     * 
     *
     * @return string|null
     */
    public function getHomeTeamFormation() : ?string
    {
        return $this->homeTeamFormation;
    }
    /**
     * 
     *
     * @param string|null $homeTeamFormation
     *
     * @return self
     */
    public function setHomeTeamFormation(?string $homeTeamFormation) : self
    {
        $this->homeTeamFormation = $homeTeamFormation;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAwayTeamFormation() : ?string
    {
        return $this->awayTeamFormation;
    }
    /**
     * 
     *
     * @param string|null $awayTeamFormation
     *
     * @return self
     */
    public function setAwayTeamFormation(?string $awayTeamFormation) : self
    {
        $this->awayTeamFormation = $awayTeamFormation;
        return $this;
    }
    /**
     * 
     *
     * @return PlayoffAggregateScore
     */
    public function getPlayoffAggregateScore() : PlayoffAggregateScore
    {
        return $this->playoffAggregateScore;
    }
    /**
     * 
     *
     * @param PlayoffAggregateScore $playoffAggregateScore
     *
     * @return self
     */
    public function setPlayoffAggregateScore(PlayoffAggregateScore $playoffAggregateScore) : self
    {
        $this->playoffAggregateScore = $playoffAggregateScore;
        return $this;
    }
}