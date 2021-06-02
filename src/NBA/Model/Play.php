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
     * @var string
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
     * @var int
     */
    protected $timeRemainingMinutes;
    /**
     * 
     *
     * @var int
     */
    protected $timeRemainingSeconds;
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
    protected $potentialPoints;
    /**
     * 
     *
     * @var int
     */
    protected $points;
    /**
     * 
     *
     * @var bool
     */
    protected $shotMade;
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
     * @var int
     */
    protected $receivingTeamID;
    /**
     * 
     *
     * @var string
     */
    protected $receivingTeam;
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
     * @var int
     */
    protected $assistedByPlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $blockedByPlayerID;
    /**
     * 
     *
     * @var bool
     */
    protected $fastBreak;
    /**
     * 
     *
     * @var string
     */
    protected $sideOfBasket;
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
    protected $substituteInPlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $substituteOutPlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $awayPlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $homePlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $receivingPlayerID;
    /**
     * 
     *
     * @var float
     */
    protected $baselineOffsetPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $sidelineOffsetPercentage;
    /**
     * 
     *
     * @var string
     */
    protected $coordinates;
    /**
     * 
     *
     * @var int
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
     * @return string
     */
    public function getQuarterName() : string
    {
        return $this->quarterName;
    }
    /**
     * 
     *
     * @param string $quarterName
     *
     * @return self
     */
    public function setQuarterName(string $quarterName) : self
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
     * @return int
     */
    public function getTimeRemainingMinutes() : int
    {
        return $this->timeRemainingMinutes;
    }
    /**
     * 
     *
     * @param int $timeRemainingMinutes
     *
     * @return self
     */
    public function setTimeRemainingMinutes(int $timeRemainingMinutes) : self
    {
        $this->timeRemainingMinutes = $timeRemainingMinutes;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTimeRemainingSeconds() : int
    {
        return $this->timeRemainingSeconds;
    }
    /**
     * 
     *
     * @param int $timeRemainingSeconds
     *
     * @return self
     */
    public function setTimeRemainingSeconds(int $timeRemainingSeconds) : self
    {
        $this->timeRemainingSeconds = $timeRemainingSeconds;
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
    public function getPotentialPoints() : int
    {
        return $this->potentialPoints;
    }
    /**
     * 
     *
     * @param int $potentialPoints
     *
     * @return self
     */
    public function setPotentialPoints(int $potentialPoints) : self
    {
        $this->potentialPoints = $potentialPoints;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPoints() : int
    {
        return $this->points;
    }
    /**
     * 
     *
     * @param int $points
     *
     * @return self
     */
    public function setPoints(int $points) : self
    {
        $this->points = $points;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getShotMade() : bool
    {
        return $this->shotMade;
    }
    /**
     * 
     *
     * @param bool $shotMade
     *
     * @return self
     */
    public function setShotMade(bool $shotMade) : self
    {
        $this->shotMade = $shotMade;
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
     * @return int
     */
    public function getReceivingTeamID() : int
    {
        return $this->receivingTeamID;
    }
    /**
     * 
     *
     * @param int $receivingTeamID
     *
     * @return self
     */
    public function setReceivingTeamID(int $receivingTeamID) : self
    {
        $this->receivingTeamID = $receivingTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReceivingTeam() : string
    {
        return $this->receivingTeam;
    }
    /**
     * 
     *
     * @param string $receivingTeam
     *
     * @return self
     */
    public function setReceivingTeam(string $receivingTeam) : self
    {
        $this->receivingTeam = $receivingTeam;
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
     * @return int
     */
    public function getAssistedByPlayerID() : int
    {
        return $this->assistedByPlayerID;
    }
    /**
     * 
     *
     * @param int $assistedByPlayerID
     *
     * @return self
     */
    public function setAssistedByPlayerID(int $assistedByPlayerID) : self
    {
        $this->assistedByPlayerID = $assistedByPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBlockedByPlayerID() : int
    {
        return $this->blockedByPlayerID;
    }
    /**
     * 
     *
     * @param int $blockedByPlayerID
     *
     * @return self
     */
    public function setBlockedByPlayerID(int $blockedByPlayerID) : self
    {
        $this->blockedByPlayerID = $blockedByPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFastBreak() : bool
    {
        return $this->fastBreak;
    }
    /**
     * 
     *
     * @param bool $fastBreak
     *
     * @return self
     */
    public function setFastBreak(bool $fastBreak) : self
    {
        $this->fastBreak = $fastBreak;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSideOfBasket() : string
    {
        return $this->sideOfBasket;
    }
    /**
     * 
     *
     * @param string $sideOfBasket
     *
     * @return self
     */
    public function setSideOfBasket(string $sideOfBasket) : self
    {
        $this->sideOfBasket = $sideOfBasket;
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
    public function getSubstituteInPlayerID() : int
    {
        return $this->substituteInPlayerID;
    }
    /**
     * 
     *
     * @param int $substituteInPlayerID
     *
     * @return self
     */
    public function setSubstituteInPlayerID(int $substituteInPlayerID) : self
    {
        $this->substituteInPlayerID = $substituteInPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSubstituteOutPlayerID() : int
    {
        return $this->substituteOutPlayerID;
    }
    /**
     * 
     *
     * @param int $substituteOutPlayerID
     *
     * @return self
     */
    public function setSubstituteOutPlayerID(int $substituteOutPlayerID) : self
    {
        $this->substituteOutPlayerID = $substituteOutPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayPlayerID() : int
    {
        return $this->awayPlayerID;
    }
    /**
     * 
     *
     * @param int $awayPlayerID
     *
     * @return self
     */
    public function setAwayPlayerID(int $awayPlayerID) : self
    {
        $this->awayPlayerID = $awayPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomePlayerID() : int
    {
        return $this->homePlayerID;
    }
    /**
     * 
     *
     * @param int $homePlayerID
     *
     * @return self
     */
    public function setHomePlayerID(int $homePlayerID) : self
    {
        $this->homePlayerID = $homePlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReceivingPlayerID() : int
    {
        return $this->receivingPlayerID;
    }
    /**
     * 
     *
     * @param int $receivingPlayerID
     *
     * @return self
     */
    public function setReceivingPlayerID(int $receivingPlayerID) : self
    {
        $this->receivingPlayerID = $receivingPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBaselineOffsetPercentage() : float
    {
        return $this->baselineOffsetPercentage;
    }
    /**
     * 
     *
     * @param float $baselineOffsetPercentage
     *
     * @return self
     */
    public function setBaselineOffsetPercentage(float $baselineOffsetPercentage) : self
    {
        $this->baselineOffsetPercentage = $baselineOffsetPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSidelineOffsetPercentage() : float
    {
        return $this->sidelineOffsetPercentage;
    }
    /**
     * 
     *
     * @param float $sidelineOffsetPercentage
     *
     * @return self
     */
    public function setSidelineOffsetPercentage(float $sidelineOffsetPercentage) : self
    {
        $this->sidelineOffsetPercentage = $sidelineOffsetPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCoordinates() : string
    {
        return $this->coordinates;
    }
    /**
     * 
     *
     * @param string $coordinates
     *
     * @return self
     */
    public function setCoordinates(string $coordinates) : self
    {
        $this->coordinates = $coordinates;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStolenByPlayerID() : int
    {
        return $this->stolenByPlayerID;
    }
    /**
     * 
     *
     * @param int $stolenByPlayerID
     *
     * @return self
     */
    public function setStolenByPlayerID(int $stolenByPlayerID) : self
    {
        $this->stolenByPlayerID = $stolenByPlayerID;
        return $this;
    }
}