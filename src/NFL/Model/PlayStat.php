<?php

namespace Sportsdata\API\NFL\Model;

class PlayStat
{
    /**
     * 
     *
     * @var int
     */
    protected $playStatID;
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
    protected $sequence;
    /**
     * 
     *
     * @var int
     */
    protected $playerID;
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
    protected $team;
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
    protected $homeOrAway;
    /**
     * 
     *
     * @var string|null
     */
    protected $direction;
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
    protected $passingAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $passingCompletions;
    /**
     * 
     *
     * @var int|null
     */
    protected $passingYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $passingTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $passingInterceptions;
    /**
     * 
     *
     * @var int|null
     */
    protected $passingSacks;
    /**
     * 
     *
     * @var int|null
     */
    protected $passingSackYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $rushingAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $rushingYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $rushingTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $receivingTargets;
    /**
     * 
     *
     * @var int|null
     */
    protected $receptions;
    /**
     * 
     *
     * @var int|null
     */
    protected $receivingYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $receivingTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $fumbles;
    /**
     * 
     *
     * @var int|null
     */
    protected $fumblesLost;
    /**
     * 
     *
     * @var int|null
     */
    protected $twoPointConversionAttempts;
    /**
     * 
     *
     * @var int|null
     */
    protected $twoPointConversionPasses;
    /**
     * 
     *
     * @var int|null
     */
    protected $twoPointConversionRuns;
    /**
     * 
     *
     * @var int|null
     */
    protected $twoPointConversionReceptions;
    /**
     * 
     *
     * @var int|null
     */
    protected $twoPointConversionReturns;
    /**
     * 
     *
     * @var int|null
     */
    protected $soloTackles;
    /**
     * 
     *
     * @var int|null
     */
    protected $assistedTackles;
    /**
     * 
     *
     * @var int|null
     */
    protected $tacklesForLoss;
    /**
     * 
     *
     * @var float|null
     */
    protected $sacks;
    /**
     * 
     *
     * @var float|null
     */
    protected $sackYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $passesDefended;
    /**
     * 
     *
     * @var int|null
     */
    protected $safeties;
    /**
     * 
     *
     * @var int|null
     */
    protected $fumblesForced;
    /**
     * 
     *
     * @var int|null
     */
    protected $fumblesRecovered;
    /**
     * 
     *
     * @var int|null
     */
    protected $fumbleReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $fumbleReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $interceptions;
    /**
     * 
     *
     * @var int|null
     */
    protected $interceptionReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $interceptionReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $puntReturns;
    /**
     * 
     *
     * @var int|null
     */
    protected $puntReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $puntReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $kickReturns;
    /**
     * 
     *
     * @var int|null
     */
    protected $kickReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $kickReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $blockedKicks;
    /**
     * 
     *
     * @var int|null
     */
    protected $blockedKickReturns;
    /**
     * 
     *
     * @var int|null
     */
    protected $blockedKickReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $blockedKickReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $fieldGoalReturns;
    /**
     * 
     *
     * @var int|null
     */
    protected $fieldGoalReturnYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $fieldGoalReturnTouchdowns;
    /**
     * 
     *
     * @var int|null
     */
    protected $kickoffs;
    /**
     * 
     *
     * @var int|null
     */
    protected $kickoffYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $kickoffTouchbacks;
    /**
     * 
     *
     * @var int|null
     */
    protected $punts;
    /**
     * 
     *
     * @var int|null
     */
    protected $puntYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $puntTouchbacks;
    /**
     * 
     *
     * @var int|null
     */
    protected $puntsHadBlocked;
    /**
     * 
     *
     * @var int|null
     */
    protected $fieldGoalsAttempted;
    /**
     * 
     *
     * @var int|null
     */
    protected $fieldGoalsMade;
    /**
     * 
     *
     * @var int|null
     */
    protected $fieldGoalsYards;
    /**
     * 
     *
     * @var int|null
     */
    protected $fieldGoalsHadBlocked;
    /**
     * 
     *
     * @var int|null
     */
    protected $extraPointsAttempted;
    /**
     * 
     *
     * @var int|null
     */
    protected $extraPointsMade;
    /**
     * 
     *
     * @var int|null
     */
    protected $extraPointsHadBlocked;
    /**
     * 
     *
     * @var int|null
     */
    protected $penalties;
    /**
     * 
     *
     * @var int|null
     */
    protected $penaltyYards;
    /**
     * 
     *
     * @return int
     */
    public function getPlayStatID() : int
    {
        return $this->playStatID;
    }
    /**
     * 
     *
     * @param int $playStatID
     *
     * @return self
     */
    public function setPlayStatID(int $playStatID) : self
    {
        $this->playStatID = $playStatID;
        return $this;
    }
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
    public function getHomeOrAway() : ?string
    {
        return $this->homeOrAway;
    }
    /**
     * 
     *
     * @param string|null $homeOrAway
     *
     * @return self
     */
    public function setHomeOrAway(?string $homeOrAway) : self
    {
        $this->homeOrAway = $homeOrAway;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDirection() : ?string
    {
        return $this->direction;
    }
    /**
     * 
     *
     * @param string|null $direction
     *
     * @return self
     */
    public function setDirection(?string $direction) : self
    {
        $this->direction = $direction;
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
    public function getPassingAttempts() : ?int
    {
        return $this->passingAttempts;
    }
    /**
     * 
     *
     * @param int|null $passingAttempts
     *
     * @return self
     */
    public function setPassingAttempts(?int $passingAttempts) : self
    {
        $this->passingAttempts = $passingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPassingCompletions() : ?int
    {
        return $this->passingCompletions;
    }
    /**
     * 
     *
     * @param int|null $passingCompletions
     *
     * @return self
     */
    public function setPassingCompletions(?int $passingCompletions) : self
    {
        $this->passingCompletions = $passingCompletions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPassingYards() : ?int
    {
        return $this->passingYards;
    }
    /**
     * 
     *
     * @param int|null $passingYards
     *
     * @return self
     */
    public function setPassingYards(?int $passingYards) : self
    {
        $this->passingYards = $passingYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPassingTouchdowns() : ?int
    {
        return $this->passingTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $passingTouchdowns
     *
     * @return self
     */
    public function setPassingTouchdowns(?int $passingTouchdowns) : self
    {
        $this->passingTouchdowns = $passingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPassingInterceptions() : ?int
    {
        return $this->passingInterceptions;
    }
    /**
     * 
     *
     * @param int|null $passingInterceptions
     *
     * @return self
     */
    public function setPassingInterceptions(?int $passingInterceptions) : self
    {
        $this->passingInterceptions = $passingInterceptions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPassingSacks() : ?int
    {
        return $this->passingSacks;
    }
    /**
     * 
     *
     * @param int|null $passingSacks
     *
     * @return self
     */
    public function setPassingSacks(?int $passingSacks) : self
    {
        $this->passingSacks = $passingSacks;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPassingSackYards() : ?int
    {
        return $this->passingSackYards;
    }
    /**
     * 
     *
     * @param int|null $passingSackYards
     *
     * @return self
     */
    public function setPassingSackYards(?int $passingSackYards) : self
    {
        $this->passingSackYards = $passingSackYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRushingAttempts() : ?int
    {
        return $this->rushingAttempts;
    }
    /**
     * 
     *
     * @param int|null $rushingAttempts
     *
     * @return self
     */
    public function setRushingAttempts(?int $rushingAttempts) : self
    {
        $this->rushingAttempts = $rushingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRushingYards() : ?int
    {
        return $this->rushingYards;
    }
    /**
     * 
     *
     * @param int|null $rushingYards
     *
     * @return self
     */
    public function setRushingYards(?int $rushingYards) : self
    {
        $this->rushingYards = $rushingYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRushingTouchdowns() : ?int
    {
        return $this->rushingTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $rushingTouchdowns
     *
     * @return self
     */
    public function setRushingTouchdowns(?int $rushingTouchdowns) : self
    {
        $this->rushingTouchdowns = $rushingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getReceivingTargets() : ?int
    {
        return $this->receivingTargets;
    }
    /**
     * 
     *
     * @param int|null $receivingTargets
     *
     * @return self
     */
    public function setReceivingTargets(?int $receivingTargets) : self
    {
        $this->receivingTargets = $receivingTargets;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getReceptions() : ?int
    {
        return $this->receptions;
    }
    /**
     * 
     *
     * @param int|null $receptions
     *
     * @return self
     */
    public function setReceptions(?int $receptions) : self
    {
        $this->receptions = $receptions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getReceivingYards() : ?int
    {
        return $this->receivingYards;
    }
    /**
     * 
     *
     * @param int|null $receivingYards
     *
     * @return self
     */
    public function setReceivingYards(?int $receivingYards) : self
    {
        $this->receivingYards = $receivingYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getReceivingTouchdowns() : ?int
    {
        return $this->receivingTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $receivingTouchdowns
     *
     * @return self
     */
    public function setReceivingTouchdowns(?int $receivingTouchdowns) : self
    {
        $this->receivingTouchdowns = $receivingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFumbles() : ?int
    {
        return $this->fumbles;
    }
    /**
     * 
     *
     * @param int|null $fumbles
     *
     * @return self
     */
    public function setFumbles(?int $fumbles) : self
    {
        $this->fumbles = $fumbles;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFumblesLost() : ?int
    {
        return $this->fumblesLost;
    }
    /**
     * 
     *
     * @param int|null $fumblesLost
     *
     * @return self
     */
    public function setFumblesLost(?int $fumblesLost) : self
    {
        $this->fumblesLost = $fumblesLost;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTwoPointConversionAttempts() : ?int
    {
        return $this->twoPointConversionAttempts;
    }
    /**
     * 
     *
     * @param int|null $twoPointConversionAttempts
     *
     * @return self
     */
    public function setTwoPointConversionAttempts(?int $twoPointConversionAttempts) : self
    {
        $this->twoPointConversionAttempts = $twoPointConversionAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTwoPointConversionPasses() : ?int
    {
        return $this->twoPointConversionPasses;
    }
    /**
     * 
     *
     * @param int|null $twoPointConversionPasses
     *
     * @return self
     */
    public function setTwoPointConversionPasses(?int $twoPointConversionPasses) : self
    {
        $this->twoPointConversionPasses = $twoPointConversionPasses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTwoPointConversionRuns() : ?int
    {
        return $this->twoPointConversionRuns;
    }
    /**
     * 
     *
     * @param int|null $twoPointConversionRuns
     *
     * @return self
     */
    public function setTwoPointConversionRuns(?int $twoPointConversionRuns) : self
    {
        $this->twoPointConversionRuns = $twoPointConversionRuns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTwoPointConversionReceptions() : ?int
    {
        return $this->twoPointConversionReceptions;
    }
    /**
     * 
     *
     * @param int|null $twoPointConversionReceptions
     *
     * @return self
     */
    public function setTwoPointConversionReceptions(?int $twoPointConversionReceptions) : self
    {
        $this->twoPointConversionReceptions = $twoPointConversionReceptions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTwoPointConversionReturns() : ?int
    {
        return $this->twoPointConversionReturns;
    }
    /**
     * 
     *
     * @param int|null $twoPointConversionReturns
     *
     * @return self
     */
    public function setTwoPointConversionReturns(?int $twoPointConversionReturns) : self
    {
        $this->twoPointConversionReturns = $twoPointConversionReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSoloTackles() : ?int
    {
        return $this->soloTackles;
    }
    /**
     * 
     *
     * @param int|null $soloTackles
     *
     * @return self
     */
    public function setSoloTackles(?int $soloTackles) : self
    {
        $this->soloTackles = $soloTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAssistedTackles() : ?int
    {
        return $this->assistedTackles;
    }
    /**
     * 
     *
     * @param int|null $assistedTackles
     *
     * @return self
     */
    public function setAssistedTackles(?int $assistedTackles) : self
    {
        $this->assistedTackles = $assistedTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTacklesForLoss() : ?int
    {
        return $this->tacklesForLoss;
    }
    /**
     * 
     *
     * @param int|null $tacklesForLoss
     *
     * @return self
     */
    public function setTacklesForLoss(?int $tacklesForLoss) : self
    {
        $this->tacklesForLoss = $tacklesForLoss;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSacks() : ?float
    {
        return $this->sacks;
    }
    /**
     * 
     *
     * @param float|null $sacks
     *
     * @return self
     */
    public function setSacks(?float $sacks) : self
    {
        $this->sacks = $sacks;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSackYards() : ?float
    {
        return $this->sackYards;
    }
    /**
     * 
     *
     * @param float|null $sackYards
     *
     * @return self
     */
    public function setSackYards(?float $sackYards) : self
    {
        $this->sackYards = $sackYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPassesDefended() : ?int
    {
        return $this->passesDefended;
    }
    /**
     * 
     *
     * @param int|null $passesDefended
     *
     * @return self
     */
    public function setPassesDefended(?int $passesDefended) : self
    {
        $this->passesDefended = $passesDefended;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSafeties() : ?int
    {
        return $this->safeties;
    }
    /**
     * 
     *
     * @param int|null $safeties
     *
     * @return self
     */
    public function setSafeties(?int $safeties) : self
    {
        $this->safeties = $safeties;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFumblesForced() : ?int
    {
        return $this->fumblesForced;
    }
    /**
     * 
     *
     * @param int|null $fumblesForced
     *
     * @return self
     */
    public function setFumblesForced(?int $fumblesForced) : self
    {
        $this->fumblesForced = $fumblesForced;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFumblesRecovered() : ?int
    {
        return $this->fumblesRecovered;
    }
    /**
     * 
     *
     * @param int|null $fumblesRecovered
     *
     * @return self
     */
    public function setFumblesRecovered(?int $fumblesRecovered) : self
    {
        $this->fumblesRecovered = $fumblesRecovered;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFumbleReturnYards() : ?int
    {
        return $this->fumbleReturnYards;
    }
    /**
     * 
     *
     * @param int|null $fumbleReturnYards
     *
     * @return self
     */
    public function setFumbleReturnYards(?int $fumbleReturnYards) : self
    {
        $this->fumbleReturnYards = $fumbleReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFumbleReturnTouchdowns() : ?int
    {
        return $this->fumbleReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $fumbleReturnTouchdowns
     *
     * @return self
     */
    public function setFumbleReturnTouchdowns(?int $fumbleReturnTouchdowns) : self
    {
        $this->fumbleReturnTouchdowns = $fumbleReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getInterceptions() : ?int
    {
        return $this->interceptions;
    }
    /**
     * 
     *
     * @param int|null $interceptions
     *
     * @return self
     */
    public function setInterceptions(?int $interceptions) : self
    {
        $this->interceptions = $interceptions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getInterceptionReturnYards() : ?int
    {
        return $this->interceptionReturnYards;
    }
    /**
     * 
     *
     * @param int|null $interceptionReturnYards
     *
     * @return self
     */
    public function setInterceptionReturnYards(?int $interceptionReturnYards) : self
    {
        $this->interceptionReturnYards = $interceptionReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getInterceptionReturnTouchdowns() : ?int
    {
        return $this->interceptionReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $interceptionReturnTouchdowns
     *
     * @return self
     */
    public function setInterceptionReturnTouchdowns(?int $interceptionReturnTouchdowns) : self
    {
        $this->interceptionReturnTouchdowns = $interceptionReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPuntReturns() : ?int
    {
        return $this->puntReturns;
    }
    /**
     * 
     *
     * @param int|null $puntReturns
     *
     * @return self
     */
    public function setPuntReturns(?int $puntReturns) : self
    {
        $this->puntReturns = $puntReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPuntReturnYards() : ?int
    {
        return $this->puntReturnYards;
    }
    /**
     * 
     *
     * @param int|null $puntReturnYards
     *
     * @return self
     */
    public function setPuntReturnYards(?int $puntReturnYards) : self
    {
        $this->puntReturnYards = $puntReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPuntReturnTouchdowns() : ?int
    {
        return $this->puntReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $puntReturnTouchdowns
     *
     * @return self
     */
    public function setPuntReturnTouchdowns(?int $puntReturnTouchdowns) : self
    {
        $this->puntReturnTouchdowns = $puntReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getKickReturns() : ?int
    {
        return $this->kickReturns;
    }
    /**
     * 
     *
     * @param int|null $kickReturns
     *
     * @return self
     */
    public function setKickReturns(?int $kickReturns) : self
    {
        $this->kickReturns = $kickReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getKickReturnYards() : ?int
    {
        return $this->kickReturnYards;
    }
    /**
     * 
     *
     * @param int|null $kickReturnYards
     *
     * @return self
     */
    public function setKickReturnYards(?int $kickReturnYards) : self
    {
        $this->kickReturnYards = $kickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getKickReturnTouchdowns() : ?int
    {
        return $this->kickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $kickReturnTouchdowns
     *
     * @return self
     */
    public function setKickReturnTouchdowns(?int $kickReturnTouchdowns) : self
    {
        $this->kickReturnTouchdowns = $kickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBlockedKicks() : ?int
    {
        return $this->blockedKicks;
    }
    /**
     * 
     *
     * @param int|null $blockedKicks
     *
     * @return self
     */
    public function setBlockedKicks(?int $blockedKicks) : self
    {
        $this->blockedKicks = $blockedKicks;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBlockedKickReturns() : ?int
    {
        return $this->blockedKickReturns;
    }
    /**
     * 
     *
     * @param int|null $blockedKickReturns
     *
     * @return self
     */
    public function setBlockedKickReturns(?int $blockedKickReturns) : self
    {
        $this->blockedKickReturns = $blockedKickReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBlockedKickReturnYards() : ?int
    {
        return $this->blockedKickReturnYards;
    }
    /**
     * 
     *
     * @param int|null $blockedKickReturnYards
     *
     * @return self
     */
    public function setBlockedKickReturnYards(?int $blockedKickReturnYards) : self
    {
        $this->blockedKickReturnYards = $blockedKickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBlockedKickReturnTouchdowns() : ?int
    {
        return $this->blockedKickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $blockedKickReturnTouchdowns
     *
     * @return self
     */
    public function setBlockedKickReturnTouchdowns(?int $blockedKickReturnTouchdowns) : self
    {
        $this->blockedKickReturnTouchdowns = $blockedKickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFieldGoalReturns() : ?int
    {
        return $this->fieldGoalReturns;
    }
    /**
     * 
     *
     * @param int|null $fieldGoalReturns
     *
     * @return self
     */
    public function setFieldGoalReturns(?int $fieldGoalReturns) : self
    {
        $this->fieldGoalReturns = $fieldGoalReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFieldGoalReturnYards() : ?int
    {
        return $this->fieldGoalReturnYards;
    }
    /**
     * 
     *
     * @param int|null $fieldGoalReturnYards
     *
     * @return self
     */
    public function setFieldGoalReturnYards(?int $fieldGoalReturnYards) : self
    {
        $this->fieldGoalReturnYards = $fieldGoalReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFieldGoalReturnTouchdowns() : ?int
    {
        return $this->fieldGoalReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int|null $fieldGoalReturnTouchdowns
     *
     * @return self
     */
    public function setFieldGoalReturnTouchdowns(?int $fieldGoalReturnTouchdowns) : self
    {
        $this->fieldGoalReturnTouchdowns = $fieldGoalReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getKickoffs() : ?int
    {
        return $this->kickoffs;
    }
    /**
     * 
     *
     * @param int|null $kickoffs
     *
     * @return self
     */
    public function setKickoffs(?int $kickoffs) : self
    {
        $this->kickoffs = $kickoffs;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getKickoffYards() : ?int
    {
        return $this->kickoffYards;
    }
    /**
     * 
     *
     * @param int|null $kickoffYards
     *
     * @return self
     */
    public function setKickoffYards(?int $kickoffYards) : self
    {
        $this->kickoffYards = $kickoffYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getKickoffTouchbacks() : ?int
    {
        return $this->kickoffTouchbacks;
    }
    /**
     * 
     *
     * @param int|null $kickoffTouchbacks
     *
     * @return self
     */
    public function setKickoffTouchbacks(?int $kickoffTouchbacks) : self
    {
        $this->kickoffTouchbacks = $kickoffTouchbacks;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPunts() : ?int
    {
        return $this->punts;
    }
    /**
     * 
     *
     * @param int|null $punts
     *
     * @return self
     */
    public function setPunts(?int $punts) : self
    {
        $this->punts = $punts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPuntYards() : ?int
    {
        return $this->puntYards;
    }
    /**
     * 
     *
     * @param int|null $puntYards
     *
     * @return self
     */
    public function setPuntYards(?int $puntYards) : self
    {
        $this->puntYards = $puntYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPuntTouchbacks() : ?int
    {
        return $this->puntTouchbacks;
    }
    /**
     * 
     *
     * @param int|null $puntTouchbacks
     *
     * @return self
     */
    public function setPuntTouchbacks(?int $puntTouchbacks) : self
    {
        $this->puntTouchbacks = $puntTouchbacks;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPuntsHadBlocked() : ?int
    {
        return $this->puntsHadBlocked;
    }
    /**
     * 
     *
     * @param int|null $puntsHadBlocked
     *
     * @return self
     */
    public function setPuntsHadBlocked(?int $puntsHadBlocked) : self
    {
        $this->puntsHadBlocked = $puntsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFieldGoalsAttempted() : ?int
    {
        return $this->fieldGoalsAttempted;
    }
    /**
     * 
     *
     * @param int|null $fieldGoalsAttempted
     *
     * @return self
     */
    public function setFieldGoalsAttempted(?int $fieldGoalsAttempted) : self
    {
        $this->fieldGoalsAttempted = $fieldGoalsAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFieldGoalsMade() : ?int
    {
        return $this->fieldGoalsMade;
    }
    /**
     * 
     *
     * @param int|null $fieldGoalsMade
     *
     * @return self
     */
    public function setFieldGoalsMade(?int $fieldGoalsMade) : self
    {
        $this->fieldGoalsMade = $fieldGoalsMade;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFieldGoalsYards() : ?int
    {
        return $this->fieldGoalsYards;
    }
    /**
     * 
     *
     * @param int|null $fieldGoalsYards
     *
     * @return self
     */
    public function setFieldGoalsYards(?int $fieldGoalsYards) : self
    {
        $this->fieldGoalsYards = $fieldGoalsYards;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFieldGoalsHadBlocked() : ?int
    {
        return $this->fieldGoalsHadBlocked;
    }
    /**
     * 
     *
     * @param int|null $fieldGoalsHadBlocked
     *
     * @return self
     */
    public function setFieldGoalsHadBlocked(?int $fieldGoalsHadBlocked) : self
    {
        $this->fieldGoalsHadBlocked = $fieldGoalsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getExtraPointsAttempted() : ?int
    {
        return $this->extraPointsAttempted;
    }
    /**
     * 
     *
     * @param int|null $extraPointsAttempted
     *
     * @return self
     */
    public function setExtraPointsAttempted(?int $extraPointsAttempted) : self
    {
        $this->extraPointsAttempted = $extraPointsAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getExtraPointsMade() : ?int
    {
        return $this->extraPointsMade;
    }
    /**
     * 
     *
     * @param int|null $extraPointsMade
     *
     * @return self
     */
    public function setExtraPointsMade(?int $extraPointsMade) : self
    {
        $this->extraPointsMade = $extraPointsMade;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getExtraPointsHadBlocked() : ?int
    {
        return $this->extraPointsHadBlocked;
    }
    /**
     * 
     *
     * @param int|null $extraPointsHadBlocked
     *
     * @return self
     */
    public function setExtraPointsHadBlocked(?int $extraPointsHadBlocked) : self
    {
        $this->extraPointsHadBlocked = $extraPointsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPenalties() : ?int
    {
        return $this->penalties;
    }
    /**
     * 
     *
     * @param int|null $penalties
     *
     * @return self
     */
    public function setPenalties(?int $penalties) : self
    {
        $this->penalties = $penalties;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPenaltyYards() : ?int
    {
        return $this->penaltyYards;
    }
    /**
     * 
     *
     * @param int|null $penaltyYards
     *
     * @return self
     */
    public function setPenaltyYards(?int $penaltyYards) : self
    {
        $this->penaltyYards = $penaltyYards;
        return $this;
    }
}