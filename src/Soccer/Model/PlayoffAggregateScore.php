<?php

namespace Sportsdata\API\Soccer\Model;

class PlayoffAggregateScore
{
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
    protected $teamAAggregateScore;
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
    protected $teamBAggregateScore;
    /**
     * 
     *
     * @var int
     */
    protected $winningTeamId;
    /**
     * 
     *
     * @var string|null
     */
    protected $created;
    /**
     * 
     *
     * @var string|null
     */
    protected $updated;
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
    public function getTeamAAggregateScore() : int
    {
        return $this->teamAAggregateScore;
    }
    /**
     * 
     *
     * @param int $teamAAggregateScore
     *
     * @return self
     */
    public function setTeamAAggregateScore(int $teamAAggregateScore) : self
    {
        $this->teamAAggregateScore = $teamAAggregateScore;
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
    public function getTeamBAggregateScore() : int
    {
        return $this->teamBAggregateScore;
    }
    /**
     * 
     *
     * @param int $teamBAggregateScore
     *
     * @return self
     */
    public function setTeamBAggregateScore(int $teamBAggregateScore) : self
    {
        $this->teamBAggregateScore = $teamBAggregateScore;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWinningTeamId() : int
    {
        return $this->winningTeamId;
    }
    /**
     * 
     *
     * @param int $winningTeamId
     *
     * @return self
     */
    public function setWinningTeamId(int $winningTeamId) : self
    {
        $this->winningTeamId = $winningTeamId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreated() : ?string
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param string|null $created
     *
     * @return self
     */
    public function setCreated(?string $created) : self
    {
        $this->created = $created;
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
}