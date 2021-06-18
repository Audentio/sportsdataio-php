<?php

namespace Sportsdata\API\CBB\Model;

class Game
{
    /**
     * 
     *
     * @var int
     */
    protected $gameID;
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
    protected $status;
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
    protected $awayTeam;
    /**
     * 
     *
     * @var string|null
     */
    protected $homeTeam;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTeamID;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTeamID;
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
    protected $homeTeamScore;
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
    protected $period;
    /**
     * 
     *
     * @var int|null
     */
    protected $timeRemainingMinutes;
    /**
     * 
     *
     * @var int|null
     */
    protected $timeRemainingSeconds;
    /**
     * 
     *
     * @var float|null
     */
    protected $pointSpread;
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
    protected $awayTeamMoneyLine;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTeamMoneyLine;
    /**
     * 
     *
     * @var int
     */
    protected $globalGameID;
    /**
     * 
     *
     * @var int|null
     */
    protected $globalAwayTeamID;
    /**
     * 
     *
     * @var int|null
     */
    protected $globalHomeTeamID;
    /**
     * 
     *
     * @var int|null
     */
    protected $tournamentID;
    /**
     * 
     *
     * @var string|null
     */
    protected $bracket;
    /**
     * 
     *
     * @var int|null
     */
    protected $round;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTeamSeed;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTeamSeed;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTeamPreviousGameID;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTeamPreviousGameID;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTeamPreviousGlobalGameID;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTeamPreviousGlobalGameID;
    /**
     * 
     *
     * @var int|null
     */
    protected $tournamentDisplayOrder;
    /**
     * 
     *
     * @var string|null
     */
    protected $tournamentDisplayOrderForHomeTeam;
    /**
     * 
     *
     * @var Period[]
     */
    protected $periods;
    /**
     * 
     *
     * @var bool
     */
    protected $isClosed;
    /**
     * 
     *
     * @var string|null
     */
    protected $gameEndDateTime;
    /**
     * 
     *
     * @var Stadium
     */
    protected $stadium;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeRotationNumber;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayRotationNumber;
    /**
     * 
     *
     * @var int|null
     */
    protected $topTeamPreviousGameId;
    /**
     * 
     *
     * @var int|null
     */
    protected $bottomTeamPreviousGameId;
    /**
     * 
     *
     * @var string|null
     */
    protected $channel;
    /**
     * 
     *
     * @var bool|null
     */
    protected $neutralVenue;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayPointSpreadPayout;
    /**
     * 
     *
     * @var int|null
     */
    protected $homePointSpreadPayout;
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
     * @return int
     */
    public function getGameID() : int
    {
        return $this->gameID;
    }
    /**
     * 
     *
     * @param int $gameID
     *
     * @return self
     */
    public function setGameID(int $gameID) : self
    {
        $this->gameID = $gameID;
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
    public function getAwayTeam() : ?string
    {
        return $this->awayTeam;
    }
    /**
     * 
     *
     * @param string|null $awayTeam
     *
     * @return self
     */
    public function setAwayTeam(?string $awayTeam) : self
    {
        $this->awayTeam = $awayTeam;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHomeTeam() : ?string
    {
        return $this->homeTeam;
    }
    /**
     * 
     *
     * @param string|null $homeTeam
     *
     * @return self
     */
    public function setHomeTeam(?string $homeTeam) : self
    {
        $this->homeTeam = $homeTeam;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTeamID() : ?int
    {
        return $this->awayTeamID;
    }
    /**
     * 
     *
     * @param int|null $awayTeamID
     *
     * @return self
     */
    public function setAwayTeamID(?int $awayTeamID) : self
    {
        $this->awayTeamID = $awayTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTeamID() : ?int
    {
        return $this->homeTeamID;
    }
    /**
     * 
     *
     * @param int|null $homeTeamID
     *
     * @return self
     */
    public function setHomeTeamID(?int $homeTeamID) : self
    {
        $this->homeTeamID = $homeTeamID;
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
    public function getTimeRemainingMinutes() : ?int
    {
        return $this->timeRemainingMinutes;
    }
    /**
     * 
     *
     * @param int|null $timeRemainingMinutes
     *
     * @return self
     */
    public function setTimeRemainingMinutes(?int $timeRemainingMinutes) : self
    {
        $this->timeRemainingMinutes = $timeRemainingMinutes;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTimeRemainingSeconds() : ?int
    {
        return $this->timeRemainingSeconds;
    }
    /**
     * 
     *
     * @param int|null $timeRemainingSeconds
     *
     * @return self
     */
    public function setTimeRemainingSeconds(?int $timeRemainingSeconds) : self
    {
        $this->timeRemainingSeconds = $timeRemainingSeconds;
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
     * @return int
     */
    public function getGlobalGameID() : int
    {
        return $this->globalGameID;
    }
    /**
     * 
     *
     * @param int $globalGameID
     *
     * @return self
     */
    public function setGlobalGameID(int $globalGameID) : self
    {
        $this->globalGameID = $globalGameID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGlobalAwayTeamID() : ?int
    {
        return $this->globalAwayTeamID;
    }
    /**
     * 
     *
     * @param int|null $globalAwayTeamID
     *
     * @return self
     */
    public function setGlobalAwayTeamID(?int $globalAwayTeamID) : self
    {
        $this->globalAwayTeamID = $globalAwayTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGlobalHomeTeamID() : ?int
    {
        return $this->globalHomeTeamID;
    }
    /**
     * 
     *
     * @param int|null $globalHomeTeamID
     *
     * @return self
     */
    public function setGlobalHomeTeamID(?int $globalHomeTeamID) : self
    {
        $this->globalHomeTeamID = $globalHomeTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTournamentID() : ?int
    {
        return $this->tournamentID;
    }
    /**
     * 
     *
     * @param int|null $tournamentID
     *
     * @return self
     */
    public function setTournamentID(?int $tournamentID) : self
    {
        $this->tournamentID = $tournamentID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBracket() : ?string
    {
        return $this->bracket;
    }
    /**
     * 
     *
     * @param string|null $bracket
     *
     * @return self
     */
    public function setBracket(?string $bracket) : self
    {
        $this->bracket = $bracket;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRound() : ?int
    {
        return $this->round;
    }
    /**
     * 
     *
     * @param int|null $round
     *
     * @return self
     */
    public function setRound(?int $round) : self
    {
        $this->round = $round;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTeamSeed() : ?int
    {
        return $this->awayTeamSeed;
    }
    /**
     * 
     *
     * @param int|null $awayTeamSeed
     *
     * @return self
     */
    public function setAwayTeamSeed(?int $awayTeamSeed) : self
    {
        $this->awayTeamSeed = $awayTeamSeed;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTeamSeed() : ?int
    {
        return $this->homeTeamSeed;
    }
    /**
     * 
     *
     * @param int|null $homeTeamSeed
     *
     * @return self
     */
    public function setHomeTeamSeed(?int $homeTeamSeed) : self
    {
        $this->homeTeamSeed = $homeTeamSeed;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTeamPreviousGameID() : ?int
    {
        return $this->awayTeamPreviousGameID;
    }
    /**
     * 
     *
     * @param int|null $awayTeamPreviousGameID
     *
     * @return self
     */
    public function setAwayTeamPreviousGameID(?int $awayTeamPreviousGameID) : self
    {
        $this->awayTeamPreviousGameID = $awayTeamPreviousGameID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTeamPreviousGameID() : ?int
    {
        return $this->homeTeamPreviousGameID;
    }
    /**
     * 
     *
     * @param int|null $homeTeamPreviousGameID
     *
     * @return self
     */
    public function setHomeTeamPreviousGameID(?int $homeTeamPreviousGameID) : self
    {
        $this->homeTeamPreviousGameID = $homeTeamPreviousGameID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTeamPreviousGlobalGameID() : ?int
    {
        return $this->awayTeamPreviousGlobalGameID;
    }
    /**
     * 
     *
     * @param int|null $awayTeamPreviousGlobalGameID
     *
     * @return self
     */
    public function setAwayTeamPreviousGlobalGameID(?int $awayTeamPreviousGlobalGameID) : self
    {
        $this->awayTeamPreviousGlobalGameID = $awayTeamPreviousGlobalGameID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTeamPreviousGlobalGameID() : ?int
    {
        return $this->homeTeamPreviousGlobalGameID;
    }
    /**
     * 
     *
     * @param int|null $homeTeamPreviousGlobalGameID
     *
     * @return self
     */
    public function setHomeTeamPreviousGlobalGameID(?int $homeTeamPreviousGlobalGameID) : self
    {
        $this->homeTeamPreviousGlobalGameID = $homeTeamPreviousGlobalGameID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTournamentDisplayOrder() : ?int
    {
        return $this->tournamentDisplayOrder;
    }
    /**
     * 
     *
     * @param int|null $tournamentDisplayOrder
     *
     * @return self
     */
    public function setTournamentDisplayOrder(?int $tournamentDisplayOrder) : self
    {
        $this->tournamentDisplayOrder = $tournamentDisplayOrder;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTournamentDisplayOrderForHomeTeam() : ?string
    {
        return $this->tournamentDisplayOrderForHomeTeam;
    }
    /**
     * 
     *
     * @param string|null $tournamentDisplayOrderForHomeTeam
     *
     * @return self
     */
    public function setTournamentDisplayOrderForHomeTeam(?string $tournamentDisplayOrderForHomeTeam) : self
    {
        $this->tournamentDisplayOrderForHomeTeam = $tournamentDisplayOrderForHomeTeam;
        return $this;
    }
    /**
     * 
     *
     * @return Period[]
     */
    public function getPeriods() : array
    {
        return $this->periods;
    }
    /**
     * 
     *
     * @param Period[] $periods
     *
     * @return self
     */
    public function setPeriods(array $periods) : self
    {
        $this->periods = $periods;
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
     * @return string|null
     */
    public function getGameEndDateTime() : ?string
    {
        return $this->gameEndDateTime;
    }
    /**
     * 
     *
     * @param string|null $gameEndDateTime
     *
     * @return self
     */
    public function setGameEndDateTime(?string $gameEndDateTime) : self
    {
        $this->gameEndDateTime = $gameEndDateTime;
        return $this;
    }
    /**
     * 
     *
     * @return Stadium
     */
    public function getStadium() : Stadium
    {
        return $this->stadium;
    }
    /**
     * 
     *
     * @param Stadium $stadium
     *
     * @return self
     */
    public function setStadium(Stadium $stadium) : self
    {
        $this->stadium = $stadium;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeRotationNumber() : ?int
    {
        return $this->homeRotationNumber;
    }
    /**
     * 
     *
     * @param int|null $homeRotationNumber
     *
     * @return self
     */
    public function setHomeRotationNumber(?int $homeRotationNumber) : self
    {
        $this->homeRotationNumber = $homeRotationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayRotationNumber() : ?int
    {
        return $this->awayRotationNumber;
    }
    /**
     * 
     *
     * @param int|null $awayRotationNumber
     *
     * @return self
     */
    public function setAwayRotationNumber(?int $awayRotationNumber) : self
    {
        $this->awayRotationNumber = $awayRotationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTopTeamPreviousGameId() : ?int
    {
        return $this->topTeamPreviousGameId;
    }
    /**
     * 
     *
     * @param int|null $topTeamPreviousGameId
     *
     * @return self
     */
    public function setTopTeamPreviousGameId(?int $topTeamPreviousGameId) : self
    {
        $this->topTeamPreviousGameId = $topTeamPreviousGameId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBottomTeamPreviousGameId() : ?int
    {
        return $this->bottomTeamPreviousGameId;
    }
    /**
     * 
     *
     * @param int|null $bottomTeamPreviousGameId
     *
     * @return self
     */
    public function setBottomTeamPreviousGameId(?int $bottomTeamPreviousGameId) : self
    {
        $this->bottomTeamPreviousGameId = $bottomTeamPreviousGameId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getChannel() : ?string
    {
        return $this->channel;
    }
    /**
     * 
     *
     * @param string|null $channel
     *
     * @return self
     */
    public function setChannel(?string $channel) : self
    {
        $this->channel = $channel;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getNeutralVenue() : ?bool
    {
        return $this->neutralVenue;
    }
    /**
     * 
     *
     * @param bool|null $neutralVenue
     *
     * @return self
     */
    public function setNeutralVenue(?bool $neutralVenue) : self
    {
        $this->neutralVenue = $neutralVenue;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayPointSpreadPayout() : ?int
    {
        return $this->awayPointSpreadPayout;
    }
    /**
     * 
     *
     * @param int|null $awayPointSpreadPayout
     *
     * @return self
     */
    public function setAwayPointSpreadPayout(?int $awayPointSpreadPayout) : self
    {
        $this->awayPointSpreadPayout = $awayPointSpreadPayout;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomePointSpreadPayout() : ?int
    {
        return $this->homePointSpreadPayout;
    }
    /**
     * 
     *
     * @param int|null $homePointSpreadPayout
     *
     * @return self
     */
    public function setHomePointSpreadPayout(?int $homePointSpreadPayout) : self
    {
        $this->homePointSpreadPayout = $homePointSpreadPayout;
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
}