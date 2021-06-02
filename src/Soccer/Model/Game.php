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
     * @var string
     */
    protected $group;
    /**
     * 
     *
     * @var int
     */
    protected $awayTeamId;
    /**
     * 
     *
     * @var int
     */
    protected $homeTeamId;
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
    protected $period;
    /**
     * 
     *
     * @var int
     */
    protected $clock;
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
    protected $awayTeamKey;
    /**
     * 
     *
     * @var string
     */
    protected $awayTeamName;
    /**
     * 
     *
     * @var string
     */
    protected $awayTeamCountryCode;
    /**
     * 
     *
     * @var int
     */
    protected $awayTeamScore;
    /**
     * 
     *
     * @var int
     */
    protected $awayTeamScorePeriod1;
    /**
     * 
     *
     * @var int
     */
    protected $awayTeamScorePeriod2;
    /**
     * 
     *
     * @var int
     */
    protected $awayTeamScoreExtraTime;
    /**
     * 
     *
     * @var int
     */
    protected $awayTeamScorePenalty;
    /**
     * 
     *
     * @var string
     */
    protected $homeTeamKey;
    /**
     * 
     *
     * @var string
     */
    protected $homeTeamName;
    /**
     * 
     *
     * @var string
     */
    protected $homeTeamCountryCode;
    /**
     * 
     *
     * @var int
     */
    protected $homeTeamScore;
    /**
     * 
     *
     * @var int
     */
    protected $homeTeamScorePeriod1;
    /**
     * 
     *
     * @var int
     */
    protected $homeTeamScorePeriod2;
    /**
     * 
     *
     * @var int
     */
    protected $homeTeamScoreExtraTime;
    /**
     * 
     *
     * @var int
     */
    protected $homeTeamScorePenalty;
    /**
     * 
     *
     * @var int
     */
    protected $homeTeamMoneyLine;
    /**
     * 
     *
     * @var int
     */
    protected $awayTeamMoneyLine;
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
    protected $homeTeamPointSpreadPayout;
    /**
     * 
     *
     * @var int
     */
    protected $awayTeamPointSpreadPayout;
    /**
     * 
     *
     * @var float
     */
    protected $overUnder;
    /**
     * 
     *
     * @var int
     */
    protected $overPayout;
    /**
     * 
     *
     * @var int
     */
    protected $underPayout;
    /**
     * 
     *
     * @var int
     */
    protected $attendance;
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
     * @var int
     */
    protected $globalGameId;
    /**
     * 
     *
     * @var int
     */
    protected $globalAwayTeamId;
    /**
     * 
     *
     * @var int
     */
    protected $globalHomeTeamId;
    /**
     * 
     *
     * @var int
     */
    protected $clockExtra;
    /**
     * 
     *
     * @var string
     */
    protected $clockDisplay;
    /**
     * 
     *
     * @var bool
     */
    protected $isClosed;
    /**
     * 
     *
     * @var string
     */
    protected $homeTeamFormation;
    /**
     * 
     *
     * @var string
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
    public function getAwayTeamId() : int
    {
        return $this->awayTeamId;
    }
    /**
     * 
     *
     * @param int $awayTeamId
     *
     * @return self
     */
    public function setAwayTeamId(int $awayTeamId) : self
    {
        $this->awayTeamId = $awayTeamId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTeamId() : int
    {
        return $this->homeTeamId;
    }
    /**
     * 
     *
     * @param int $homeTeamId
     *
     * @return self
     */
    public function setHomeTeamId(int $homeTeamId) : self
    {
        $this->homeTeamId = $homeTeamId;
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
    public function getPeriod() : string
    {
        return $this->period;
    }
    /**
     * 
     *
     * @param string $period
     *
     * @return self
     */
    public function setPeriod(string $period) : self
    {
        $this->period = $period;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getClock() : int
    {
        return $this->clock;
    }
    /**
     * 
     *
     * @param int $clock
     *
     * @return self
     */
    public function setClock(int $clock) : self
    {
        $this->clock = $clock;
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
    public function getAwayTeamKey() : string
    {
        return $this->awayTeamKey;
    }
    /**
     * 
     *
     * @param string $awayTeamKey
     *
     * @return self
     */
    public function setAwayTeamKey(string $awayTeamKey) : self
    {
        $this->awayTeamKey = $awayTeamKey;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAwayTeamName() : string
    {
        return $this->awayTeamName;
    }
    /**
     * 
     *
     * @param string $awayTeamName
     *
     * @return self
     */
    public function setAwayTeamName(string $awayTeamName) : self
    {
        $this->awayTeamName = $awayTeamName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAwayTeamCountryCode() : string
    {
        return $this->awayTeamCountryCode;
    }
    /**
     * 
     *
     * @param string $awayTeamCountryCode
     *
     * @return self
     */
    public function setAwayTeamCountryCode(string $awayTeamCountryCode) : self
    {
        $this->awayTeamCountryCode = $awayTeamCountryCode;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTeamScore() : int
    {
        return $this->awayTeamScore;
    }
    /**
     * 
     *
     * @param int $awayTeamScore
     *
     * @return self
     */
    public function setAwayTeamScore(int $awayTeamScore) : self
    {
        $this->awayTeamScore = $awayTeamScore;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTeamScorePeriod1() : int
    {
        return $this->awayTeamScorePeriod1;
    }
    /**
     * 
     *
     * @param int $awayTeamScorePeriod1
     *
     * @return self
     */
    public function setAwayTeamScorePeriod1(int $awayTeamScorePeriod1) : self
    {
        $this->awayTeamScorePeriod1 = $awayTeamScorePeriod1;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTeamScorePeriod2() : int
    {
        return $this->awayTeamScorePeriod2;
    }
    /**
     * 
     *
     * @param int $awayTeamScorePeriod2
     *
     * @return self
     */
    public function setAwayTeamScorePeriod2(int $awayTeamScorePeriod2) : self
    {
        $this->awayTeamScorePeriod2 = $awayTeamScorePeriod2;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTeamScoreExtraTime() : int
    {
        return $this->awayTeamScoreExtraTime;
    }
    /**
     * 
     *
     * @param int $awayTeamScoreExtraTime
     *
     * @return self
     */
    public function setAwayTeamScoreExtraTime(int $awayTeamScoreExtraTime) : self
    {
        $this->awayTeamScoreExtraTime = $awayTeamScoreExtraTime;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTeamScorePenalty() : int
    {
        return $this->awayTeamScorePenalty;
    }
    /**
     * 
     *
     * @param int $awayTeamScorePenalty
     *
     * @return self
     */
    public function setAwayTeamScorePenalty(int $awayTeamScorePenalty) : self
    {
        $this->awayTeamScorePenalty = $awayTeamScorePenalty;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHomeTeamKey() : string
    {
        return $this->homeTeamKey;
    }
    /**
     * 
     *
     * @param string $homeTeamKey
     *
     * @return self
     */
    public function setHomeTeamKey(string $homeTeamKey) : self
    {
        $this->homeTeamKey = $homeTeamKey;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHomeTeamName() : string
    {
        return $this->homeTeamName;
    }
    /**
     * 
     *
     * @param string $homeTeamName
     *
     * @return self
     */
    public function setHomeTeamName(string $homeTeamName) : self
    {
        $this->homeTeamName = $homeTeamName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHomeTeamCountryCode() : string
    {
        return $this->homeTeamCountryCode;
    }
    /**
     * 
     *
     * @param string $homeTeamCountryCode
     *
     * @return self
     */
    public function setHomeTeamCountryCode(string $homeTeamCountryCode) : self
    {
        $this->homeTeamCountryCode = $homeTeamCountryCode;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTeamScore() : int
    {
        return $this->homeTeamScore;
    }
    /**
     * 
     *
     * @param int $homeTeamScore
     *
     * @return self
     */
    public function setHomeTeamScore(int $homeTeamScore) : self
    {
        $this->homeTeamScore = $homeTeamScore;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTeamScorePeriod1() : int
    {
        return $this->homeTeamScorePeriod1;
    }
    /**
     * 
     *
     * @param int $homeTeamScorePeriod1
     *
     * @return self
     */
    public function setHomeTeamScorePeriod1(int $homeTeamScorePeriod1) : self
    {
        $this->homeTeamScorePeriod1 = $homeTeamScorePeriod1;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTeamScorePeriod2() : int
    {
        return $this->homeTeamScorePeriod2;
    }
    /**
     * 
     *
     * @param int $homeTeamScorePeriod2
     *
     * @return self
     */
    public function setHomeTeamScorePeriod2(int $homeTeamScorePeriod2) : self
    {
        $this->homeTeamScorePeriod2 = $homeTeamScorePeriod2;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTeamScoreExtraTime() : int
    {
        return $this->homeTeamScoreExtraTime;
    }
    /**
     * 
     *
     * @param int $homeTeamScoreExtraTime
     *
     * @return self
     */
    public function setHomeTeamScoreExtraTime(int $homeTeamScoreExtraTime) : self
    {
        $this->homeTeamScoreExtraTime = $homeTeamScoreExtraTime;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTeamScorePenalty() : int
    {
        return $this->homeTeamScorePenalty;
    }
    /**
     * 
     *
     * @param int $homeTeamScorePenalty
     *
     * @return self
     */
    public function setHomeTeamScorePenalty(int $homeTeamScorePenalty) : self
    {
        $this->homeTeamScorePenalty = $homeTeamScorePenalty;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTeamMoneyLine() : int
    {
        return $this->homeTeamMoneyLine;
    }
    /**
     * 
     *
     * @param int $homeTeamMoneyLine
     *
     * @return self
     */
    public function setHomeTeamMoneyLine(int $homeTeamMoneyLine) : self
    {
        $this->homeTeamMoneyLine = $homeTeamMoneyLine;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTeamMoneyLine() : int
    {
        return $this->awayTeamMoneyLine;
    }
    /**
     * 
     *
     * @param int $awayTeamMoneyLine
     *
     * @return self
     */
    public function setAwayTeamMoneyLine(int $awayTeamMoneyLine) : self
    {
        $this->awayTeamMoneyLine = $awayTeamMoneyLine;
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
    public function getHomeTeamPointSpreadPayout() : int
    {
        return $this->homeTeamPointSpreadPayout;
    }
    /**
     * 
     *
     * @param int $homeTeamPointSpreadPayout
     *
     * @return self
     */
    public function setHomeTeamPointSpreadPayout(int $homeTeamPointSpreadPayout) : self
    {
        $this->homeTeamPointSpreadPayout = $homeTeamPointSpreadPayout;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTeamPointSpreadPayout() : int
    {
        return $this->awayTeamPointSpreadPayout;
    }
    /**
     * 
     *
     * @param int $awayTeamPointSpreadPayout
     *
     * @return self
     */
    public function setAwayTeamPointSpreadPayout(int $awayTeamPointSpreadPayout) : self
    {
        $this->awayTeamPointSpreadPayout = $awayTeamPointSpreadPayout;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOverUnder() : float
    {
        return $this->overUnder;
    }
    /**
     * 
     *
     * @param float $overUnder
     *
     * @return self
     */
    public function setOverUnder(float $overUnder) : self
    {
        $this->overUnder = $overUnder;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOverPayout() : int
    {
        return $this->overPayout;
    }
    /**
     * 
     *
     * @param int $overPayout
     *
     * @return self
     */
    public function setOverPayout(int $overPayout) : self
    {
        $this->overPayout = $overPayout;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUnderPayout() : int
    {
        return $this->underPayout;
    }
    /**
     * 
     *
     * @param int $underPayout
     *
     * @return self
     */
    public function setUnderPayout(int $underPayout) : self
    {
        $this->underPayout = $underPayout;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAttendance() : int
    {
        return $this->attendance;
    }
    /**
     * 
     *
     * @param int $attendance
     *
     * @return self
     */
    public function setAttendance(int $attendance) : self
    {
        $this->attendance = $attendance;
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
     * @return int
     */
    public function getGlobalAwayTeamId() : int
    {
        return $this->globalAwayTeamId;
    }
    /**
     * 
     *
     * @param int $globalAwayTeamId
     *
     * @return self
     */
    public function setGlobalAwayTeamId(int $globalAwayTeamId) : self
    {
        $this->globalAwayTeamId = $globalAwayTeamId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGlobalHomeTeamId() : int
    {
        return $this->globalHomeTeamId;
    }
    /**
     * 
     *
     * @param int $globalHomeTeamId
     *
     * @return self
     */
    public function setGlobalHomeTeamId(int $globalHomeTeamId) : self
    {
        $this->globalHomeTeamId = $globalHomeTeamId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getClockExtra() : int
    {
        return $this->clockExtra;
    }
    /**
     * 
     *
     * @param int $clockExtra
     *
     * @return self
     */
    public function setClockExtra(int $clockExtra) : self
    {
        $this->clockExtra = $clockExtra;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getClockDisplay() : string
    {
        return $this->clockDisplay;
    }
    /**
     * 
     *
     * @param string $clockDisplay
     *
     * @return self
     */
    public function setClockDisplay(string $clockDisplay) : self
    {
        $this->clockDisplay = $clockDisplay;
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
    /**
     * 
     *
     * @return string
     */
    public function getHomeTeamFormation() : string
    {
        return $this->homeTeamFormation;
    }
    /**
     * 
     *
     * @param string $homeTeamFormation
     *
     * @return self
     */
    public function setHomeTeamFormation(string $homeTeamFormation) : self
    {
        $this->homeTeamFormation = $homeTeamFormation;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAwayTeamFormation() : string
    {
        return $this->awayTeamFormation;
    }
    /**
     * 
     *
     * @param string $awayTeamFormation
     *
     * @return self
     */
    public function setAwayTeamFormation(string $awayTeamFormation) : self
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