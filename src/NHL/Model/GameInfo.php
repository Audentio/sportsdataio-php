<?php

namespace Sportsdata\API\NHL\Model;

class GameInfo
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
     * @var string|null
     */
    protected $awayTeamName;
    /**
     * 
     *
     * @var string|null
     */
    protected $homeTeamName;
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
     * @var GameOdd[]
     */
    protected $pregameOdds;
    /**
     * 
     *
     * @var GameOdd[]
     */
    protected $liveOdds;
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
    protected $awayTeamScore;
    /**
     * 
     *
     * @var int|null
     */
    protected $totalScore;
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
     * @var GameOdd[]
     */
    protected $alternateMarketPregameOdds;
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
     * @return GameOdd[]
     */
    public function getPregameOdds() : array
    {
        return $this->pregameOdds;
    }
    /**
     * 
     *
     * @param GameOdd[] $pregameOdds
     *
     * @return self
     */
    public function setPregameOdds(array $pregameOdds) : self
    {
        $this->pregameOdds = $pregameOdds;
        return $this;
    }
    /**
     * 
     *
     * @return GameOdd[]
     */
    public function getLiveOdds() : array
    {
        return $this->liveOdds;
    }
    /**
     * 
     *
     * @param GameOdd[] $liveOdds
     *
     * @return self
     */
    public function setLiveOdds(array $liveOdds) : self
    {
        $this->liveOdds = $liveOdds;
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
    public function getTotalScore() : ?int
    {
        return $this->totalScore;
    }
    /**
     * 
     *
     * @param int|null $totalScore
     *
     * @return self
     */
    public function setTotalScore(?int $totalScore) : self
    {
        $this->totalScore = $totalScore;
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
     * @return GameOdd[]
     */
    public function getAlternateMarketPregameOdds() : array
    {
        return $this->alternateMarketPregameOdds;
    }
    /**
     * 
     *
     * @param GameOdd[] $alternateMarketPregameOdds
     *
     * @return self
     */
    public function setAlternateMarketPregameOdds(array $alternateMarketPregameOdds) : self
    {
        $this->alternateMarketPregameOdds = $alternateMarketPregameOdds;
        return $this;
    }
}