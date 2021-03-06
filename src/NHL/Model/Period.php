<?php

namespace Sportsdata\API\NHL\Model;

class Period
{
    /**
     * 
     *
     * @var int
     */
    protected $periodID;
    /**
     * 
     *
     * @var int
     */
    protected $gameID;
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
    protected $awayScore;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeScore;
    /**
     * 
     *
     * @var ScoringPlay[]
     */
    protected $scoringPlays;
    /**
     * 
     *
     * @var Penalty[]
     */
    protected $penalties;
    /**
     * 
     *
     * @return int
     */
    public function getPeriodID() : int
    {
        return $this->periodID;
    }
    /**
     * 
     *
     * @param int $periodID
     *
     * @return self
     */
    public function setPeriodID(int $periodID) : self
    {
        $this->periodID = $periodID;
        return $this;
    }
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
    public function getAwayScore() : ?int
    {
        return $this->awayScore;
    }
    /**
     * 
     *
     * @param int|null $awayScore
     *
     * @return self
     */
    public function setAwayScore(?int $awayScore) : self
    {
        $this->awayScore = $awayScore;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeScore() : ?int
    {
        return $this->homeScore;
    }
    /**
     * 
     *
     * @param int|null $homeScore
     *
     * @return self
     */
    public function setHomeScore(?int $homeScore) : self
    {
        $this->homeScore = $homeScore;
        return $this;
    }
    /**
     * 
     *
     * @return ScoringPlay[]
     */
    public function getScoringPlays() : array
    {
        return $this->scoringPlays;
    }
    /**
     * 
     *
     * @param ScoringPlay[] $scoringPlays
     *
     * @return self
     */
    public function setScoringPlays(array $scoringPlays) : self
    {
        $this->scoringPlays = $scoringPlays;
        return $this;
    }
    /**
     * 
     *
     * @return Penalty[]
     */
    public function getPenalties() : array
    {
        return $this->penalties;
    }
    /**
     * 
     *
     * @param Penalty[] $penalties
     *
     * @return self
     */
    public function setPenalties(array $penalties) : self
    {
        $this->penalties = $penalties;
        return $this;
    }
}