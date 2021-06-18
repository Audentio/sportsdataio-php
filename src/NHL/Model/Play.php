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
     * @var string|null
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
     * @var int|null
     */
    protected $clockMinutes;
    /**
     * 
     *
     * @var int|null
     */
    protected $clockSeconds;
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
     * @var int|null
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
     * @var string|null
     */
    protected $category;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var int|null
     */
    protected $playerID;
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
    protected $created;
    /**
     * 
     *
     * @var int|null
     */
    protected $firstAssistedByPlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $secondAssistedByPlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $powerPlayTeamID;
    /**
     * 
     *
     * @var string|null
     */
    protected $powerPlayTeam;
    /**
     * 
     *
     * @var int|null
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
     * @return string|null
     */
    public function getPeriodName() : ?string
    {
        return $this->periodName;
    }
    /**
     * 
     *
     * @param string|null $periodName
     *
     * @return self
     */
    public function setPeriodName(?string $periodName) : self
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
     * @return int|null
     */
    public function getClockMinutes() : ?int
    {
        return $this->clockMinutes;
    }
    /**
     * 
     *
     * @param int|null $clockMinutes
     *
     * @return self
     */
    public function setClockMinutes(?int $clockMinutes) : self
    {
        $this->clockMinutes = $clockMinutes;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getClockSeconds() : ?int
    {
        return $this->clockSeconds;
    }
    /**
     * 
     *
     * @param int|null $clockSeconds
     *
     * @return self
     */
    public function setClockSeconds(?int $clockSeconds) : self
    {
        $this->clockSeconds = $clockSeconds;
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
     * @return int|null
     */
    public function getTeamID() : ?int
    {
        return $this->teamID;
    }
    /**
     * 
     *
     * @param int|null $teamID
     *
     * @return self
     */
    public function setTeamID(?int $teamID) : self
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
     * @return string|null
     */
    public function getCategory() : ?string
    {
        return $this->category;
    }
    /**
     * 
     *
     * @param string|null $category
     *
     * @return self
     */
    public function setCategory(?string $category) : self
    {
        $this->category = $category;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPlayerID() : ?int
    {
        return $this->playerID;
    }
    /**
     * 
     *
     * @param int|null $playerID
     *
     * @return self
     */
    public function setPlayerID(?int $playerID) : self
    {
        $this->playerID = $playerID;
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
     * @return int|null
     */
    public function getFirstAssistedByPlayerID() : ?int
    {
        return $this->firstAssistedByPlayerID;
    }
    /**
     * 
     *
     * @param int|null $firstAssistedByPlayerID
     *
     * @return self
     */
    public function setFirstAssistedByPlayerID(?int $firstAssistedByPlayerID) : self
    {
        $this->firstAssistedByPlayerID = $firstAssistedByPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSecondAssistedByPlayerID() : ?int
    {
        return $this->secondAssistedByPlayerID;
    }
    /**
     * 
     *
     * @param int|null $secondAssistedByPlayerID
     *
     * @return self
     */
    public function setSecondAssistedByPlayerID(?int $secondAssistedByPlayerID) : self
    {
        $this->secondAssistedByPlayerID = $secondAssistedByPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPowerPlayTeamID() : ?int
    {
        return $this->powerPlayTeamID;
    }
    /**
     * 
     *
     * @param int|null $powerPlayTeamID
     *
     * @return self
     */
    public function setPowerPlayTeamID(?int $powerPlayTeamID) : self
    {
        $this->powerPlayTeamID = $powerPlayTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPowerPlayTeam() : ?string
    {
        return $this->powerPlayTeam;
    }
    /**
     * 
     *
     * @param string|null $powerPlayTeam
     *
     * @return self
     */
    public function setPowerPlayTeam(?string $powerPlayTeam) : self
    {
        $this->powerPlayTeam = $powerPlayTeam;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpposingPlayerID() : ?int
    {
        return $this->opposingPlayerID;
    }
    /**
     * 
     *
     * @param int|null $opposingPlayerID
     *
     * @return self
     */
    public function setOpposingPlayerID(?int $opposingPlayerID) : self
    {
        $this->opposingPlayerID = $opposingPlayerID;
        return $this;
    }
}