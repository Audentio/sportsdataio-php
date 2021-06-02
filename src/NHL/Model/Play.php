<?php

namespace Sportsdata\API\NHL\Model;

class Play
{
    /**
     * 
     *
     * @var int
     */
    protected $playID;
    /**
     * 
     *
     * @var int
     */
    protected $periodID;
    /**
     * 
     *
     * @var string
     */
    protected $periodName;
    /**
     * 
     *
     * @var int
     */
    protected $sequence;
    /**
     * 
     *
     * @var int
     */
    protected $clockMinutes;
    /**
     * 
     *
     * @var int
     */
    protected $clockSeconds;
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
    protected $homeTeamScore;
    /**
     * 
     *
     * @var int
     */
    protected $teamID;
    /**
     * 
     *
     * @var string
     */
    protected $team;
    /**
     * 
     *
     * @var int
     */
    protected $opponentID;
    /**
     * 
     *
     * @var string
     */
    protected $opponent;
    /**
     * 
     *
     * @var string
     */
    protected $category;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var int
     */
    protected $playerID;
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
    protected $created;
    /**
     * 
     *
     * @var int
     */
    protected $firstAssistedByPlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $secondAssistedByPlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $powerPlayTeamID;
    /**
     * 
     *
     * @var string
     */
    protected $powerPlayTeam;
    /**
     * 
     *
     * @var int
     */
    protected $opposingPlayerID;
    /**
     * 
     *
     * @return int
     */
    public function getPlayID() : int
    {
        return $this->playID;
    }
    /**
     * 
     *
     * @param int $playID
     *
     * @return self
     */
    public function setPlayID(int $playID) : self
    {
        $this->playID = $playID;
        return $this;
    }
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
     * @return string
     */
    public function getPeriodName() : string
    {
        return $this->periodName;
    }
    /**
     * 
     *
     * @param string $periodName
     *
     * @return self
     */
    public function setPeriodName(string $periodName) : self
    {
        $this->periodName = $periodName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSequence() : int
    {
        return $this->sequence;
    }
    /**
     * 
     *
     * @param int $sequence
     *
     * @return self
     */
    public function setSequence(int $sequence) : self
    {
        $this->sequence = $sequence;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getClockMinutes() : int
    {
        return $this->clockMinutes;
    }
    /**
     * 
     *
     * @param int $clockMinutes
     *
     * @return self
     */
    public function setClockMinutes(int $clockMinutes) : self
    {
        $this->clockMinutes = $clockMinutes;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getClockSeconds() : int
    {
        return $this->clockSeconds;
    }
    /**
     * 
     *
     * @param int $clockSeconds
     *
     * @return self
     */
    public function setClockSeconds(int $clockSeconds) : self
    {
        $this->clockSeconds = $clockSeconds;
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
     * @return string
     */
    public function getTeam() : string
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param string $team
     *
     * @return self
     */
    public function setTeam(string $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentID() : int
    {
        return $this->opponentID;
    }
    /**
     * 
     *
     * @param int $opponentID
     *
     * @return self
     */
    public function setOpponentID(int $opponentID) : self
    {
        $this->opponentID = $opponentID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOpponent() : string
    {
        return $this->opponent;
    }
    /**
     * 
     *
     * @param string $opponent
     *
     * @return self
     */
    public function setOpponent(string $opponent) : self
    {
        $this->opponent = $opponent;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCategory() : string
    {
        return $this->category;
    }
    /**
     * 
     *
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category) : self
    {
        $this->category = $category;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlayerID() : int
    {
        return $this->playerID;
    }
    /**
     * 
     *
     * @param int $playerID
     *
     * @return self
     */
    public function setPlayerID(int $playerID) : self
    {
        $this->playerID = $playerID;
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
    public function getCreated() : string
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param string $created
     *
     * @return self
     */
    public function setCreated(string $created) : self
    {
        $this->created = $created;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFirstAssistedByPlayerID() : int
    {
        return $this->firstAssistedByPlayerID;
    }
    /**
     * 
     *
     * @param int $firstAssistedByPlayerID
     *
     * @return self
     */
    public function setFirstAssistedByPlayerID(int $firstAssistedByPlayerID) : self
    {
        $this->firstAssistedByPlayerID = $firstAssistedByPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSecondAssistedByPlayerID() : int
    {
        return $this->secondAssistedByPlayerID;
    }
    /**
     * 
     *
     * @param int $secondAssistedByPlayerID
     *
     * @return self
     */
    public function setSecondAssistedByPlayerID(int $secondAssistedByPlayerID) : self
    {
        $this->secondAssistedByPlayerID = $secondAssistedByPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPowerPlayTeamID() : int
    {
        return $this->powerPlayTeamID;
    }
    /**
     * 
     *
     * @param int $powerPlayTeamID
     *
     * @return self
     */
    public function setPowerPlayTeamID(int $powerPlayTeamID) : self
    {
        $this->powerPlayTeamID = $powerPlayTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPowerPlayTeam() : string
    {
        return $this->powerPlayTeam;
    }
    /**
     * 
     *
     * @param string $powerPlayTeam
     *
     * @return self
     */
    public function setPowerPlayTeam(string $powerPlayTeam) : self
    {
        $this->powerPlayTeam = $powerPlayTeam;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpposingPlayerID() : int
    {
        return $this->opposingPlayerID;
    }
    /**
     * 
     *
     * @param int $opposingPlayerID
     *
     * @return self
     */
    public function setOpposingPlayerID(int $opposingPlayerID) : self
    {
        $this->opposingPlayerID = $opposingPlayerID;
        return $this;
    }
}