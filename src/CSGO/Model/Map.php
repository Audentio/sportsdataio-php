<?php

namespace Sportsdata\API\CSGO\Model;

class Map
{
    /**
     * 
     *
     * @var int|null
     */
    protected $number;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
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
    protected $currentRound;
    /**
     * 
     *
     * @var int|null
     */
    protected $teamAScore;
    /**
     * 
     *
     * @var int|null
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
     * @return int|null
     */
    public function getNumber() : ?int
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param int|null $number
     *
     * @return self
     */
    public function setNumber(?int $number) : self
    {
        $this->number = $number;
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
    public function getCurrentRound() : ?int
    {
        return $this->currentRound;
    }
    /**
     * 
     *
     * @param int|null $currentRound
     *
     * @return self
     */
    public function setCurrentRound(?int $currentRound) : self
    {
        $this->currentRound = $currentRound;
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