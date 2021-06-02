<?php

namespace Sportsdata\API\CSGO\Model;

class Map
{
    /**
     * 
     *
     * @var int
     */
    protected $number;
    /**
     * 
     *
     * @var string
     */
    protected $name;
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
    protected $currentRound;
    /**
     * 
     *
     * @var int
     */
    protected $teamAScore;
    /**
     * 
     *
     * @var int
     */
    protected $teamBScore;
    /**
     * 
     *
     * @var Leaderboard[]
     */
    protected $leaderboards;
    /**
     * 
     *
     * @return int
     */
    public function getNumber() : int
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(int $number) : self
    {
        $this->number = $number;
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
    public function getCurrentRound() : int
    {
        return $this->currentRound;
    }
    /**
     * 
     *
     * @param int $currentRound
     *
     * @return self
     */
    public function setCurrentRound(int $currentRound) : self
    {
        $this->currentRound = $currentRound;
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
     * @return Leaderboard[]
     */
    public function getLeaderboards() : array
    {
        return $this->leaderboards;
    }
    /**
     * 
     *
     * @param Leaderboard[] $leaderboards
     *
     * @return self
     */
    public function setLeaderboards(array $leaderboards) : self
    {
        $this->leaderboards = $leaderboards;
        return $this;
    }
}