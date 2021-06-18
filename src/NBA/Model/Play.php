<?php

namespace Sportsdata\API\NBA\Model;

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
    protected $quarterID;
    /**
     * 
     *
     * @var string|null
     */
    protected $quarterName;
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
    protected $potentialPoints;
    /**
     * 
     *
     * @var int|null
     */
    protected $points;
    /**
     * 
     *
     * @var bool|null
     */
    protected $shotMade;
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
     * @var int|null
     */
    protected $receivingTeamID;
    /**
     * 
     *
     * @var string|null
     */
    protected $receivingTeam;
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
     * @var int|null
     */
    protected $assistedByPlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $blockedByPlayerID;
    /**
     * 
     *
     * @var bool|null
     */
    protected $fastBreak;
    /**
     * 
     *
     * @var string|null
     */
    protected $sideOfBasket;
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
    protected $substituteInPlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $substituteOutPlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayPlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $homePlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $receivingPlayerID;
    /**
     * 
     *
     * @var float|null
     */
    protected $baselineOffsetPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $sidelineOffsetPercentage;
    /**
     * 
     *
     * @var string|null
     */
    protected $coordinates;
    /**
     * 
     *
     * @var int|null
     */
    protected $stolenByPlayerID;
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
    public function getQuarterID() : int
    {
        return $this->quarterID;
    }
    /**
     * 
     *
     * @param int $quarterID
     *
     * @return self
     */
    public function setQuarterID(int $quarterID) : self
    {
        $this->quarterID = $quarterID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getQuarterName() : ?string
    {
        return $this->quarterName;
    }
    /**
     * 
     *
     * @param string|null $quarterName
     *
     * @return self
     */
    public function setQuarterName(?string $quarterName) : self
    {
        $this->quarterName = $quarterName;
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
    public function getPotentialPoints() : ?int
    {
        return $this->potentialPoints;
    }
    /**
     * 
     *
     * @param int|null $potentialPoints
     *
     * @return self
     */
    public function setPotentialPoints(?int $potentialPoints) : self
    {
        $this->potentialPoints = $potentialPoints;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPoints() : ?int
    {
        return $this->points;
    }
    /**
     * 
     *
     * @param int|null $points
     *
     * @return self
     */
    public function setPoints(?int $points) : self
    {
        $this->points = $points;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getShotMade() : ?bool
    {
        return $this->shotMade;
    }
    /**
     * 
     *
     * @param bool|null $shotMade
     *
     * @return self
     */
    public function setShotMade(?bool $shotMade) : self
    {
        $this->shotMade = $shotMade;
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
     * @return int|null
     */
    public function getReceivingTeamID() : ?int
    {
        return $this->receivingTeamID;
    }
    /**
     * 
     *
     * @param int|null $receivingTeamID
     *
     * @return self
     */
    public function setReceivingTeamID(?int $receivingTeamID) : self
    {
        $this->receivingTeamID = $receivingTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getReceivingTeam() : ?string
    {
        return $this->receivingTeam;
    }
    /**
     * 
     *
     * @param string|null $receivingTeam
     *
     * @return self
     */
    public function setReceivingTeam(?string $receivingTeam) : self
    {
        $this->receivingTeam = $receivingTeam;
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
     * @return int|null
     */
    public function getAssistedByPlayerID() : ?int
    {
        return $this->assistedByPlayerID;
    }
    /**
     * 
     *
     * @param int|null $assistedByPlayerID
     *
     * @return self
     */
    public function setAssistedByPlayerID(?int $assistedByPlayerID) : self
    {
        $this->assistedByPlayerID = $assistedByPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBlockedByPlayerID() : ?int
    {
        return $this->blockedByPlayerID;
    }
    /**
     * 
     *
     * @param int|null $blockedByPlayerID
     *
     * @return self
     */
    public function setBlockedByPlayerID(?int $blockedByPlayerID) : self
    {
        $this->blockedByPlayerID = $blockedByPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getFastBreak() : ?bool
    {
        return $this->fastBreak;
    }
    /**
     * 
     *
     * @param bool|null $fastBreak
     *
     * @return self
     */
    public function setFastBreak(?bool $fastBreak) : self
    {
        $this->fastBreak = $fastBreak;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSideOfBasket() : ?string
    {
        return $this->sideOfBasket;
    }
    /**
     * 
     *
     * @param string|null $sideOfBasket
     *
     * @return self
     */
    public function setSideOfBasket(?string $sideOfBasket) : self
    {
        $this->sideOfBasket = $sideOfBasket;
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
    public function getSubstituteInPlayerID() : ?int
    {
        return $this->substituteInPlayerID;
    }
    /**
     * 
     *
     * @param int|null $substituteInPlayerID
     *
     * @return self
     */
    public function setSubstituteInPlayerID(?int $substituteInPlayerID) : self
    {
        $this->substituteInPlayerID = $substituteInPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSubstituteOutPlayerID() : ?int
    {
        return $this->substituteOutPlayerID;
    }
    /**
     * 
     *
     * @param int|null $substituteOutPlayerID
     *
     * @return self
     */
    public function setSubstituteOutPlayerID(?int $substituteOutPlayerID) : self
    {
        $this->substituteOutPlayerID = $substituteOutPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayPlayerID() : ?int
    {
        return $this->awayPlayerID;
    }
    /**
     * 
     *
     * @param int|null $awayPlayerID
     *
     * @return self
     */
    public function setAwayPlayerID(?int $awayPlayerID) : self
    {
        $this->awayPlayerID = $awayPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomePlayerID() : ?int
    {
        return $this->homePlayerID;
    }
    /**
     * 
     *
     * @param int|null $homePlayerID
     *
     * @return self
     */
    public function setHomePlayerID(?int $homePlayerID) : self
    {
        $this->homePlayerID = $homePlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getReceivingPlayerID() : ?int
    {
        return $this->receivingPlayerID;
    }
    /**
     * 
     *
     * @param int|null $receivingPlayerID
     *
     * @return self
     */
    public function setReceivingPlayerID(?int $receivingPlayerID) : self
    {
        $this->receivingPlayerID = $receivingPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBaselineOffsetPercentage() : ?float
    {
        return $this->baselineOffsetPercentage;
    }
    /**
     * 
     *
     * @param float|null $baselineOffsetPercentage
     *
     * @return self
     */
    public function setBaselineOffsetPercentage(?float $baselineOffsetPercentage) : self
    {
        $this->baselineOffsetPercentage = $baselineOffsetPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSidelineOffsetPercentage() : ?float
    {
        return $this->sidelineOffsetPercentage;
    }
    /**
     * 
     *
     * @param float|null $sidelineOffsetPercentage
     *
     * @return self
     */
    public function setSidelineOffsetPercentage(?float $sidelineOffsetPercentage) : self
    {
        $this->sidelineOffsetPercentage = $sidelineOffsetPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCoordinates() : ?string
    {
        return $this->coordinates;
    }
    /**
     * 
     *
     * @param string|null $coordinates
     *
     * @return self
     */
    public function setCoordinates(?string $coordinates) : self
    {
        $this->coordinates = $coordinates;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStolenByPlayerID() : ?int
    {
        return $this->stolenByPlayerID;
    }
    /**
     * 
     *
     * @param int|null $stolenByPlayerID
     *
     * @return self
     */
    public function setStolenByPlayerID(?int $stolenByPlayerID) : self
    {
        $this->stolenByPlayerID = $stolenByPlayerID;
        return $this;
    }
}