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
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $team;
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
    protected $homeOrAway;
    /**
     * 
     *
     * @var string
     */
    protected $direction;
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
    protected $passingAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $passingCompletions;
    /**
     * 
     *
     * @var int
     */
    protected $passingYards;
    /**
     * 
     *
     * @var int
     */
    protected $passingTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $passingInterceptions;
    /**
     * 
     *
     * @var int
     */
    protected $passingSacks;
    /**
     * 
     *
     * @var int
     */
    protected $passingSackYards;
    /**
     * 
     *
     * @var int
     */
    protected $rushingAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $rushingYards;
    /**
     * 
     *
     * @var int
     */
    protected $rushingTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $receivingTargets;
    /**
     * 
     *
     * @var int
     */
    protected $receptions;
    /**
     * 
     *
     * @var int
     */
    protected $receivingYards;
    /**
     * 
     *
     * @var int
     */
    protected $receivingTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $fumbles;
    /**
     * 
     *
     * @var int
     */
    protected $fumblesLost;
    /**
     * 
     *
     * @var int
     */
    protected $twoPointConversionAttempts;
    /**
     * 
     *
     * @var int
     */
    protected $twoPointConversionPasses;
    /**
     * 
     *
     * @var int
     */
    protected $twoPointConversionRuns;
    /**
     * 
     *
     * @var int
     */
    protected $twoPointConversionReceptions;
    /**
     * 
     *
     * @var int
     */
    protected $twoPointConversionReturns;
    /**
     * 
     *
     * @var int
     */
    protected $soloTackles;
    /**
     * 
     *
     * @var int
     */
    protected $assistedTackles;
    /**
     * 
     *
     * @var int
     */
    protected $tacklesForLoss;
    /**
     * 
     *
     * @var float
     */
    protected $sacks;
    /**
     * 
     *
     * @var float
     */
    protected $sackYards;
    /**
     * 
     *
     * @var int
     */
    protected $passesDefended;
    /**
     * 
     *
     * @var int
     */
    protected $safeties;
    /**
     * 
     *
     * @var int
     */
    protected $fumblesForced;
    /**
     * 
     *
     * @var int
     */
    protected $fumblesRecovered;
    /**
     * 
     *
     * @var int
     */
    protected $fumbleReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $fumbleReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $interceptions;
    /**
     * 
     *
     * @var int
     */
    protected $interceptionReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $interceptionReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $puntReturns;
    /**
     * 
     *
     * @var int
     */
    protected $puntReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $puntReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $kickReturns;
    /**
     * 
     *
     * @var int
     */
    protected $kickReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $kickReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $blockedKicks;
    /**
     * 
     *
     * @var int
     */
    protected $blockedKickReturns;
    /**
     * 
     *
     * @var int
     */
    protected $blockedKickReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $blockedKickReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $fieldGoalReturns;
    /**
     * 
     *
     * @var int
     */
    protected $fieldGoalReturnYards;
    /**
     * 
     *
     * @var int
     */
    protected $fieldGoalReturnTouchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $kickoffs;
    /**
     * 
     *
     * @var int
     */
    protected $kickoffYards;
    /**
     * 
     *
     * @var int
     */
    protected $kickoffTouchbacks;
    /**
     * 
     *
     * @var int
     */
    protected $punts;
    /**
     * 
     *
     * @var int
     */
    protected $puntYards;
    /**
     * 
     *
     * @var int
     */
    protected $puntTouchbacks;
    /**
     * 
     *
     * @var int
     */
    protected $puntsHadBlocked;
    /**
     * 
     *
     * @var int
     */
    protected $fieldGoalsAttempted;
    /**
     * 
     *
     * @var int
     */
    protected $fieldGoalsMade;
    /**
     * 
     *
     * @var int
     */
    protected $fieldGoalsYards;
    /**
     * 
     *
     * @var int
     */
    protected $fieldGoalsHadBlocked;
    /**
     * 
     *
     * @var int
     */
    protected $extraPointsAttempted;
    /**
     * 
     *
     * @var int
     */
    protected $extraPointsMade;
    /**
     * 
     *
     * @var int
     */
    protected $extraPointsHadBlocked;
    /**
     * 
     *
     * @var int
     */
    protected $penalties;
    /**
     * 
     *
     * @var int
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
    public function getHomeOrAway() : string
    {
        return $this->homeOrAway;
    }
    /**
     * 
     *
     * @param string $homeOrAway
     *
     * @return self
     */
    public function setHomeOrAway(string $homeOrAway) : self
    {
        $this->homeOrAway = $homeOrAway;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDirection() : string
    {
        return $this->direction;
    }
    /**
     * 
     *
     * @param string $direction
     *
     * @return self
     */
    public function setDirection(string $direction) : self
    {
        $this->direction = $direction;
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
    public function getPassingAttempts() : int
    {
        return $this->passingAttempts;
    }
    /**
     * 
     *
     * @param int $passingAttempts
     *
     * @return self
     */
    public function setPassingAttempts(int $passingAttempts) : self
    {
        $this->passingAttempts = $passingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassingCompletions() : int
    {
        return $this->passingCompletions;
    }
    /**
     * 
     *
     * @param int $passingCompletions
     *
     * @return self
     */
    public function setPassingCompletions(int $passingCompletions) : self
    {
        $this->passingCompletions = $passingCompletions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassingYards() : int
    {
        return $this->passingYards;
    }
    /**
     * 
     *
     * @param int $passingYards
     *
     * @return self
     */
    public function setPassingYards(int $passingYards) : self
    {
        $this->passingYards = $passingYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassingTouchdowns() : int
    {
        return $this->passingTouchdowns;
    }
    /**
     * 
     *
     * @param int $passingTouchdowns
     *
     * @return self
     */
    public function setPassingTouchdowns(int $passingTouchdowns) : self
    {
        $this->passingTouchdowns = $passingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassingInterceptions() : int
    {
        return $this->passingInterceptions;
    }
    /**
     * 
     *
     * @param int $passingInterceptions
     *
     * @return self
     */
    public function setPassingInterceptions(int $passingInterceptions) : self
    {
        $this->passingInterceptions = $passingInterceptions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassingSacks() : int
    {
        return $this->passingSacks;
    }
    /**
     * 
     *
     * @param int $passingSacks
     *
     * @return self
     */
    public function setPassingSacks(int $passingSacks) : self
    {
        $this->passingSacks = $passingSacks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassingSackYards() : int
    {
        return $this->passingSackYards;
    }
    /**
     * 
     *
     * @param int $passingSackYards
     *
     * @return self
     */
    public function setPassingSackYards(int $passingSackYards) : self
    {
        $this->passingSackYards = $passingSackYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRushingAttempts() : int
    {
        return $this->rushingAttempts;
    }
    /**
     * 
     *
     * @param int $rushingAttempts
     *
     * @return self
     */
    public function setRushingAttempts(int $rushingAttempts) : self
    {
        $this->rushingAttempts = $rushingAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRushingYards() : int
    {
        return $this->rushingYards;
    }
    /**
     * 
     *
     * @param int $rushingYards
     *
     * @return self
     */
    public function setRushingYards(int $rushingYards) : self
    {
        $this->rushingYards = $rushingYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRushingTouchdowns() : int
    {
        return $this->rushingTouchdowns;
    }
    /**
     * 
     *
     * @param int $rushingTouchdowns
     *
     * @return self
     */
    public function setRushingTouchdowns(int $rushingTouchdowns) : self
    {
        $this->rushingTouchdowns = $rushingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReceivingTargets() : int
    {
        return $this->receivingTargets;
    }
    /**
     * 
     *
     * @param int $receivingTargets
     *
     * @return self
     */
    public function setReceivingTargets(int $receivingTargets) : self
    {
        $this->receivingTargets = $receivingTargets;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReceptions() : int
    {
        return $this->receptions;
    }
    /**
     * 
     *
     * @param int $receptions
     *
     * @return self
     */
    public function setReceptions(int $receptions) : self
    {
        $this->receptions = $receptions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReceivingYards() : int
    {
        return $this->receivingYards;
    }
    /**
     * 
     *
     * @param int $receivingYards
     *
     * @return self
     */
    public function setReceivingYards(int $receivingYards) : self
    {
        $this->receivingYards = $receivingYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReceivingTouchdowns() : int
    {
        return $this->receivingTouchdowns;
    }
    /**
     * 
     *
     * @param int $receivingTouchdowns
     *
     * @return self
     */
    public function setReceivingTouchdowns(int $receivingTouchdowns) : self
    {
        $this->receivingTouchdowns = $receivingTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFumbles() : int
    {
        return $this->fumbles;
    }
    /**
     * 
     *
     * @param int $fumbles
     *
     * @return self
     */
    public function setFumbles(int $fumbles) : self
    {
        $this->fumbles = $fumbles;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFumblesLost() : int
    {
        return $this->fumblesLost;
    }
    /**
     * 
     *
     * @param int $fumblesLost
     *
     * @return self
     */
    public function setFumblesLost(int $fumblesLost) : self
    {
        $this->fumblesLost = $fumblesLost;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTwoPointConversionAttempts() : int
    {
        return $this->twoPointConversionAttempts;
    }
    /**
     * 
     *
     * @param int $twoPointConversionAttempts
     *
     * @return self
     */
    public function setTwoPointConversionAttempts(int $twoPointConversionAttempts) : self
    {
        $this->twoPointConversionAttempts = $twoPointConversionAttempts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTwoPointConversionPasses() : int
    {
        return $this->twoPointConversionPasses;
    }
    /**
     * 
     *
     * @param int $twoPointConversionPasses
     *
     * @return self
     */
    public function setTwoPointConversionPasses(int $twoPointConversionPasses) : self
    {
        $this->twoPointConversionPasses = $twoPointConversionPasses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTwoPointConversionRuns() : int
    {
        return $this->twoPointConversionRuns;
    }
    /**
     * 
     *
     * @param int $twoPointConversionRuns
     *
     * @return self
     */
    public function setTwoPointConversionRuns(int $twoPointConversionRuns) : self
    {
        $this->twoPointConversionRuns = $twoPointConversionRuns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTwoPointConversionReceptions() : int
    {
        return $this->twoPointConversionReceptions;
    }
    /**
     * 
     *
     * @param int $twoPointConversionReceptions
     *
     * @return self
     */
    public function setTwoPointConversionReceptions(int $twoPointConversionReceptions) : self
    {
        $this->twoPointConversionReceptions = $twoPointConversionReceptions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTwoPointConversionReturns() : int
    {
        return $this->twoPointConversionReturns;
    }
    /**
     * 
     *
     * @param int $twoPointConversionReturns
     *
     * @return self
     */
    public function setTwoPointConversionReturns(int $twoPointConversionReturns) : self
    {
        $this->twoPointConversionReturns = $twoPointConversionReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSoloTackles() : int
    {
        return $this->soloTackles;
    }
    /**
     * 
     *
     * @param int $soloTackles
     *
     * @return self
     */
    public function setSoloTackles(int $soloTackles) : self
    {
        $this->soloTackles = $soloTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAssistedTackles() : int
    {
        return $this->assistedTackles;
    }
    /**
     * 
     *
     * @param int $assistedTackles
     *
     * @return self
     */
    public function setAssistedTackles(int $assistedTackles) : self
    {
        $this->assistedTackles = $assistedTackles;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTacklesForLoss() : int
    {
        return $this->tacklesForLoss;
    }
    /**
     * 
     *
     * @param int $tacklesForLoss
     *
     * @return self
     */
    public function setTacklesForLoss(int $tacklesForLoss) : self
    {
        $this->tacklesForLoss = $tacklesForLoss;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSacks() : float
    {
        return $this->sacks;
    }
    /**
     * 
     *
     * @param float $sacks
     *
     * @return self
     */
    public function setSacks(float $sacks) : self
    {
        $this->sacks = $sacks;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSackYards() : float
    {
        return $this->sackYards;
    }
    /**
     * 
     *
     * @param float $sackYards
     *
     * @return self
     */
    public function setSackYards(float $sackYards) : self
    {
        $this->sackYards = $sackYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPassesDefended() : int
    {
        return $this->passesDefended;
    }
    /**
     * 
     *
     * @param int $passesDefended
     *
     * @return self
     */
    public function setPassesDefended(int $passesDefended) : self
    {
        $this->passesDefended = $passesDefended;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSafeties() : int
    {
        return $this->safeties;
    }
    /**
     * 
     *
     * @param int $safeties
     *
     * @return self
     */
    public function setSafeties(int $safeties) : self
    {
        $this->safeties = $safeties;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFumblesForced() : int
    {
        return $this->fumblesForced;
    }
    /**
     * 
     *
     * @param int $fumblesForced
     *
     * @return self
     */
    public function setFumblesForced(int $fumblesForced) : self
    {
        $this->fumblesForced = $fumblesForced;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFumblesRecovered() : int
    {
        return $this->fumblesRecovered;
    }
    /**
     * 
     *
     * @param int $fumblesRecovered
     *
     * @return self
     */
    public function setFumblesRecovered(int $fumblesRecovered) : self
    {
        $this->fumblesRecovered = $fumblesRecovered;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFumbleReturnYards() : int
    {
        return $this->fumbleReturnYards;
    }
    /**
     * 
     *
     * @param int $fumbleReturnYards
     *
     * @return self
     */
    public function setFumbleReturnYards(int $fumbleReturnYards) : self
    {
        $this->fumbleReturnYards = $fumbleReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFumbleReturnTouchdowns() : int
    {
        return $this->fumbleReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $fumbleReturnTouchdowns
     *
     * @return self
     */
    public function setFumbleReturnTouchdowns(int $fumbleReturnTouchdowns) : self
    {
        $this->fumbleReturnTouchdowns = $fumbleReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInterceptions() : int
    {
        return $this->interceptions;
    }
    /**
     * 
     *
     * @param int $interceptions
     *
     * @return self
     */
    public function setInterceptions(int $interceptions) : self
    {
        $this->interceptions = $interceptions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInterceptionReturnYards() : int
    {
        return $this->interceptionReturnYards;
    }
    /**
     * 
     *
     * @param int $interceptionReturnYards
     *
     * @return self
     */
    public function setInterceptionReturnYards(int $interceptionReturnYards) : self
    {
        $this->interceptionReturnYards = $interceptionReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInterceptionReturnTouchdowns() : int
    {
        return $this->interceptionReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $interceptionReturnTouchdowns
     *
     * @return self
     */
    public function setInterceptionReturnTouchdowns(int $interceptionReturnTouchdowns) : self
    {
        $this->interceptionReturnTouchdowns = $interceptionReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPuntReturns() : int
    {
        return $this->puntReturns;
    }
    /**
     * 
     *
     * @param int $puntReturns
     *
     * @return self
     */
    public function setPuntReturns(int $puntReturns) : self
    {
        $this->puntReturns = $puntReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPuntReturnYards() : int
    {
        return $this->puntReturnYards;
    }
    /**
     * 
     *
     * @param int $puntReturnYards
     *
     * @return self
     */
    public function setPuntReturnYards(int $puntReturnYards) : self
    {
        $this->puntReturnYards = $puntReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPuntReturnTouchdowns() : int
    {
        return $this->puntReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $puntReturnTouchdowns
     *
     * @return self
     */
    public function setPuntReturnTouchdowns(int $puntReturnTouchdowns) : self
    {
        $this->puntReturnTouchdowns = $puntReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getKickReturns() : int
    {
        return $this->kickReturns;
    }
    /**
     * 
     *
     * @param int $kickReturns
     *
     * @return self
     */
    public function setKickReturns(int $kickReturns) : self
    {
        $this->kickReturns = $kickReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getKickReturnYards() : int
    {
        return $this->kickReturnYards;
    }
    /**
     * 
     *
     * @param int $kickReturnYards
     *
     * @return self
     */
    public function setKickReturnYards(int $kickReturnYards) : self
    {
        $this->kickReturnYards = $kickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getKickReturnTouchdowns() : int
    {
        return $this->kickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $kickReturnTouchdowns
     *
     * @return self
     */
    public function setKickReturnTouchdowns(int $kickReturnTouchdowns) : self
    {
        $this->kickReturnTouchdowns = $kickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBlockedKicks() : int
    {
        return $this->blockedKicks;
    }
    /**
     * 
     *
     * @param int $blockedKicks
     *
     * @return self
     */
    public function setBlockedKicks(int $blockedKicks) : self
    {
        $this->blockedKicks = $blockedKicks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBlockedKickReturns() : int
    {
        return $this->blockedKickReturns;
    }
    /**
     * 
     *
     * @param int $blockedKickReturns
     *
     * @return self
     */
    public function setBlockedKickReturns(int $blockedKickReturns) : self
    {
        $this->blockedKickReturns = $blockedKickReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBlockedKickReturnYards() : int
    {
        return $this->blockedKickReturnYards;
    }
    /**
     * 
     *
     * @param int $blockedKickReturnYards
     *
     * @return self
     */
    public function setBlockedKickReturnYards(int $blockedKickReturnYards) : self
    {
        $this->blockedKickReturnYards = $blockedKickReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBlockedKickReturnTouchdowns() : int
    {
        return $this->blockedKickReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $blockedKickReturnTouchdowns
     *
     * @return self
     */
    public function setBlockedKickReturnTouchdowns(int $blockedKickReturnTouchdowns) : self
    {
        $this->blockedKickReturnTouchdowns = $blockedKickReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFieldGoalReturns() : int
    {
        return $this->fieldGoalReturns;
    }
    /**
     * 
     *
     * @param int $fieldGoalReturns
     *
     * @return self
     */
    public function setFieldGoalReturns(int $fieldGoalReturns) : self
    {
        $this->fieldGoalReturns = $fieldGoalReturns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFieldGoalReturnYards() : int
    {
        return $this->fieldGoalReturnYards;
    }
    /**
     * 
     *
     * @param int $fieldGoalReturnYards
     *
     * @return self
     */
    public function setFieldGoalReturnYards(int $fieldGoalReturnYards) : self
    {
        $this->fieldGoalReturnYards = $fieldGoalReturnYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFieldGoalReturnTouchdowns() : int
    {
        return $this->fieldGoalReturnTouchdowns;
    }
    /**
     * 
     *
     * @param int $fieldGoalReturnTouchdowns
     *
     * @return self
     */
    public function setFieldGoalReturnTouchdowns(int $fieldGoalReturnTouchdowns) : self
    {
        $this->fieldGoalReturnTouchdowns = $fieldGoalReturnTouchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getKickoffs() : int
    {
        return $this->kickoffs;
    }
    /**
     * 
     *
     * @param int $kickoffs
     *
     * @return self
     */
    public function setKickoffs(int $kickoffs) : self
    {
        $this->kickoffs = $kickoffs;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getKickoffYards() : int
    {
        return $this->kickoffYards;
    }
    /**
     * 
     *
     * @param int $kickoffYards
     *
     * @return self
     */
    public function setKickoffYards(int $kickoffYards) : self
    {
        $this->kickoffYards = $kickoffYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getKickoffTouchbacks() : int
    {
        return $this->kickoffTouchbacks;
    }
    /**
     * 
     *
     * @param int $kickoffTouchbacks
     *
     * @return self
     */
    public function setKickoffTouchbacks(int $kickoffTouchbacks) : self
    {
        $this->kickoffTouchbacks = $kickoffTouchbacks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPunts() : int
    {
        return $this->punts;
    }
    /**
     * 
     *
     * @param int $punts
     *
     * @return self
     */
    public function setPunts(int $punts) : self
    {
        $this->punts = $punts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPuntYards() : int
    {
        return $this->puntYards;
    }
    /**
     * 
     *
     * @param int $puntYards
     *
     * @return self
     */
    public function setPuntYards(int $puntYards) : self
    {
        $this->puntYards = $puntYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPuntTouchbacks() : int
    {
        return $this->puntTouchbacks;
    }
    /**
     * 
     *
     * @param int $puntTouchbacks
     *
     * @return self
     */
    public function setPuntTouchbacks(int $puntTouchbacks) : self
    {
        $this->puntTouchbacks = $puntTouchbacks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPuntsHadBlocked() : int
    {
        return $this->puntsHadBlocked;
    }
    /**
     * 
     *
     * @param int $puntsHadBlocked
     *
     * @return self
     */
    public function setPuntsHadBlocked(int $puntsHadBlocked) : self
    {
        $this->puntsHadBlocked = $puntsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFieldGoalsAttempted() : int
    {
        return $this->fieldGoalsAttempted;
    }
    /**
     * 
     *
     * @param int $fieldGoalsAttempted
     *
     * @return self
     */
    public function setFieldGoalsAttempted(int $fieldGoalsAttempted) : self
    {
        $this->fieldGoalsAttempted = $fieldGoalsAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFieldGoalsMade() : int
    {
        return $this->fieldGoalsMade;
    }
    /**
     * 
     *
     * @param int $fieldGoalsMade
     *
     * @return self
     */
    public function setFieldGoalsMade(int $fieldGoalsMade) : self
    {
        $this->fieldGoalsMade = $fieldGoalsMade;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFieldGoalsYards() : int
    {
        return $this->fieldGoalsYards;
    }
    /**
     * 
     *
     * @param int $fieldGoalsYards
     *
     * @return self
     */
    public function setFieldGoalsYards(int $fieldGoalsYards) : self
    {
        $this->fieldGoalsYards = $fieldGoalsYards;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFieldGoalsHadBlocked() : int
    {
        return $this->fieldGoalsHadBlocked;
    }
    /**
     * 
     *
     * @param int $fieldGoalsHadBlocked
     *
     * @return self
     */
    public function setFieldGoalsHadBlocked(int $fieldGoalsHadBlocked) : self
    {
        $this->fieldGoalsHadBlocked = $fieldGoalsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExtraPointsAttempted() : int
    {
        return $this->extraPointsAttempted;
    }
    /**
     * 
     *
     * @param int $extraPointsAttempted
     *
     * @return self
     */
    public function setExtraPointsAttempted(int $extraPointsAttempted) : self
    {
        $this->extraPointsAttempted = $extraPointsAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExtraPointsMade() : int
    {
        return $this->extraPointsMade;
    }
    /**
     * 
     *
     * @param int $extraPointsMade
     *
     * @return self
     */
    public function setExtraPointsMade(int $extraPointsMade) : self
    {
        $this->extraPointsMade = $extraPointsMade;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExtraPointsHadBlocked() : int
    {
        return $this->extraPointsHadBlocked;
    }
    /**
     * 
     *
     * @param int $extraPointsHadBlocked
     *
     * @return self
     */
    public function setExtraPointsHadBlocked(int $extraPointsHadBlocked) : self
    {
        $this->extraPointsHadBlocked = $extraPointsHadBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPenalties() : int
    {
        return $this->penalties;
    }
    /**
     * 
     *
     * @param int $penalties
     *
     * @return self
     */
    public function setPenalties(int $penalties) : self
    {
        $this->penalties = $penalties;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPenaltyYards() : int
    {
        return $this->penaltyYards;
    }
    /**
     * 
     *
     * @param int $penaltyYards
     *
     * @return self
     */
    public function setPenaltyYards(int $penaltyYards) : self
    {
        $this->penaltyYards = $penaltyYards;
        return $this;
    }
}