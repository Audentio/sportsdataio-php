<?php

namespace Sportsdata\API\CBB\Model;

class TeamGameTrends
{
    /**
     * 
     *
     * @var string|null
     */
    protected $scope;
    /**
     * 
     *
     * @var int
     */
    protected $teamID;
    /**
     * 
     *
     * @var string|null
     */
    protected $team;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentID;
    /**
     * 
     *
     * @var string|null
     */
    protected $opponent;
    /**
     * 
     *
     * @var int
     */
    protected $wins;
    /**
     * 
     *
     * @var int
     */
    protected $losses;
    /**
     * 
     *
     * @var int
     */
    protected $ties;
    /**
     * 
     *
     * @var int|null
     */
    protected $winsAgainstTheSpread;
    /**
     * 
     *
     * @var int|null
     */
    protected $lossesAgainstTheSpread;
    /**
     * 
     *
     * @var int|null
     */
    protected $pushesAgainstTheSpread;
    /**
     * 
     *
     * @var int|null
     */
    protected $overs;
    /**
     * 
     *
     * @var int|null
     */
    protected $unders;
    /**
     * 
     *
     * @var int|null
     */
    protected $overUnderPushes;
    /**
     * 
     *
     * @var float|null
     */
    protected $averageScore;
    /**
     * 
     *
     * @var float|null
     */
    protected $averageOpponentScore;
    /**
     * 
     *
     * @return string|null
     */
    public function getScope() : ?string
    {
        return $this->scope;
    }
    /**
     * 
     *
     * @param string|null $scope
     *
     * @return self
     */
    public function setScope(?string $scope) : self
    {
        $this->scope = $scope;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamID() : int
    {
        return $this->teamID;
    }
    /**
     * 
     *
     * @param int $teamID
     *
     * @return self
     */
    public function setTeamID(int $teamID) : self
    {
        $this->teamID = $teamID;
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
     * @return int|null
     */
    public function getOpponentID() : ?int
    {
        return $this->opponentID;
    }
    /**
     * 
     *
     * @param int|null $opponentID
     *
     * @return self
     */
    public function setOpponentID(?int $opponentID) : self
    {
        $this->opponentID = $opponentID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOpponent() : ?string
    {
        return $this->opponent;
    }
    /**
     * 
     *
     * @param string|null $opponent
     *
     * @return self
     */
    public function setOpponent(?string $opponent) : self
    {
        $this->opponent = $opponent;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWins() : int
    {
        return $this->wins;
    }
    /**
     * 
     *
     * @param int $wins
     *
     * @return self
     */
    public function setWins(int $wins) : self
    {
        $this->wins = $wins;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLosses() : int
    {
        return $this->losses;
    }
    /**
     * 
     *
     * @param int $losses
     *
     * @return self
     */
    public function setLosses(int $losses) : self
    {
        $this->losses = $losses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTies() : int
    {
        return $this->ties;
    }
    /**
     * 
     *
     * @param int $ties
     *
     * @return self
     */
    public function setTies(int $ties) : self
    {
        $this->ties = $ties;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWinsAgainstTheSpread() : ?int
    {
        return $this->winsAgainstTheSpread;
    }
    /**
     * 
     *
     * @param int|null $winsAgainstTheSpread
     *
     * @return self
     */
    public function setWinsAgainstTheSpread(?int $winsAgainstTheSpread) : self
    {
        $this->winsAgainstTheSpread = $winsAgainstTheSpread;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLossesAgainstTheSpread() : ?int
    {
        return $this->lossesAgainstTheSpread;
    }
    /**
     * 
     *
     * @param int|null $lossesAgainstTheSpread
     *
     * @return self
     */
    public function setLossesAgainstTheSpread(?int $lossesAgainstTheSpread) : self
    {
        $this->lossesAgainstTheSpread = $lossesAgainstTheSpread;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPushesAgainstTheSpread() : ?int
    {
        return $this->pushesAgainstTheSpread;
    }
    /**
     * 
     *
     * @param int|null $pushesAgainstTheSpread
     *
     * @return self
     */
    public function setPushesAgainstTheSpread(?int $pushesAgainstTheSpread) : self
    {
        $this->pushesAgainstTheSpread = $pushesAgainstTheSpread;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOvers() : ?int
    {
        return $this->overs;
    }
    /**
     * 
     *
     * @param int|null $overs
     *
     * @return self
     */
    public function setOvers(?int $overs) : self
    {
        $this->overs = $overs;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUnders() : ?int
    {
        return $this->unders;
    }
    /**
     * 
     *
     * @param int|null $unders
     *
     * @return self
     */
    public function setUnders(?int $unders) : self
    {
        $this->unders = $unders;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOverUnderPushes() : ?int
    {
        return $this->overUnderPushes;
    }
    /**
     * 
     *
     * @param int|null $overUnderPushes
     *
     * @return self
     */
    public function setOverUnderPushes(?int $overUnderPushes) : self
    {
        $this->overUnderPushes = $overUnderPushes;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAverageScore() : ?float
    {
        return $this->averageScore;
    }
    /**
     * 
     *
     * @param float|null $averageScore
     *
     * @return self
     */
    public function setAverageScore(?float $averageScore) : self
    {
        $this->averageScore = $averageScore;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAverageOpponentScore() : ?float
    {
        return $this->averageOpponentScore;
    }
    /**
     * 
     *
     * @param float|null $averageOpponentScore
     *
     * @return self
     */
    public function setAverageOpponentScore(?float $averageOpponentScore) : self
    {
        $this->averageOpponentScore = $averageOpponentScore;
        return $this;
    }
}