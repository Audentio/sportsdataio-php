<?php

namespace Sportsdata\API\NFL\Model;

class AdvancedPlayer
{
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
     * @var string
     */
    protected $position;
    /**
     * 
     *
     * @var string
     */
    protected $fantasyPosition;
    /**
     * 
     *
     * @var string
     */
    protected $positionGroup;
    /**
     * 
     *
     * @var float
     */
    protected $bMI;
    /**
     * 
     *
     * @var int
     */
    protected $bMIRank;
    /**
     * 
     *
     * @var float
     */
    protected $handSize;
    /**
     * 
     *
     * @var int
     */
    protected $handSizeRank;
    /**
     * 
     *
     * @var float
     */
    protected $armLength;
    /**
     * 
     *
     * @var int
     */
    protected $armLengthRank;
    /**
     * 
     *
     * @var float
     */
    protected $qualityScore;
    /**
     * 
     *
     * @var int
     */
    protected $qualityScoreRank;
    /**
     * 
     *
     * @var float
     */
    protected $fortyYardDash;
    /**
     * 
     *
     * @var int
     */
    protected $fortyYardDashRank;
    /**
     * 
     *
     * @var float
     */
    protected $threeConeDrill;
    /**
     * 
     *
     * @var int
     */
    protected $threeConeDrillRank;
    /**
     * 
     *
     * @var float
     */
    protected $twentyYardShuttle;
    /**
     * 
     *
     * @var int
     */
    protected $twentyYardShuttleRank;
    /**
     * 
     *
     * @var float
     */
    protected $agilityScore;
    /**
     * 
     *
     * @var int
     */
    protected $agilityScoreRank;
    /**
     * 
     *
     * @var float
     */
    protected $verticalJump;
    /**
     * 
     *
     * @var int
     */
    protected $verticalJumpRank;
    /**
     * 
     *
     * @var float
     */
    protected $broadJump;
    /**
     * 
     *
     * @var int
     */
    protected $broadJumpRank;
    /**
     * 
     *
     * @var float
     */
    protected $burstScore;
    /**
     * 
     *
     * @var int
     */
    protected $burstScoreRank;
    /**
     * 
     *
     * @var float
     */
    protected $sPARQx;
    /**
     * 
     *
     * @var int
     */
    protected $sPARQxRank;
    /**
     * 
     *
     * @var float
     */
    protected $athleticismScore;
    /**
     * 
     *
     * @var int
     */
    protected $athleticismScoreRank;
    /**
     * 
     *
     * @var float
     */
    protected $speedScore;
    /**
     * 
     *
     * @var int
     */
    protected $speedScoreRank;
    /**
     * 
     *
     * @var float
     */
    protected $throwVelocity;
    /**
     * 
     *
     * @var int
     */
    protected $throwVelocityRank;
    /**
     * 
     *
     * @var float
     */
    protected $wonderlicScore;
    /**
     * 
     *
     * @var int
     */
    protected $wonderlicScoreRank;
    /**
     * 
     *
     * @var float
     */
    protected $heightAdjustedSpeedScore;
    /**
     * 
     *
     * @var int
     */
    protected $heightAdjustedSpeedScoreRank;
    /**
     * 
     *
     * @var float
     */
    protected $catchRadius;
    /**
     * 
     *
     * @var int
     */
    protected $catchRadiusRank;
    /**
     * 
     *
     * @var float
     */
    protected $benchPress;
    /**
     * 
     *
     * @var int
     */
    protected $benchPressRank;
    /**
     * 
     *
     * @var float
     */
    protected $playmakingRadius;
    /**
     * 
     *
     * @var int
     */
    protected $playmakingRadiusRank;
    /**
     * 
     *
     * @var string
     */
    protected $highlightClip;
    /**
     * 
     *
     * @var AdvancedPlayerMedical[]
     */
    protected $medicalHistory;
    /**
     * 
     *
     * @var PlayerInfo[]
     */
    protected $comparablePlayers;
    /**
     * 
     *
     * @var AdvancedPlayerSeason[]
     */
    protected $advancedPlayerSeasons;
    /**
     * 
     *
     * @var AdvancedPlayerGame[]
     */
    protected $advancedPlayerGames;
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
     * @return string
     */
    public function getPosition() : string
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param string $position
     *
     * @return self
     */
    public function setPosition(string $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFantasyPosition() : string
    {
        return $this->fantasyPosition;
    }
    /**
     * 
     *
     * @param string $fantasyPosition
     *
     * @return self
     */
    public function setFantasyPosition(string $fantasyPosition) : self
    {
        $this->fantasyPosition = $fantasyPosition;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPositionGroup() : string
    {
        return $this->positionGroup;
    }
    /**
     * 
     *
     * @param string $positionGroup
     *
     * @return self
     */
    public function setPositionGroup(string $positionGroup) : self
    {
        $this->positionGroup = $positionGroup;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBMI() : float
    {
        return $this->bMI;
    }
    /**
     * 
     *
     * @param float $bMI
     *
     * @return self
     */
    public function setBMI(float $bMI) : self
    {
        $this->bMI = $bMI;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBMIRank() : int
    {
        return $this->bMIRank;
    }
    /**
     * 
     *
     * @param int $bMIRank
     *
     * @return self
     */
    public function setBMIRank(int $bMIRank) : self
    {
        $this->bMIRank = $bMIRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHandSize() : float
    {
        return $this->handSize;
    }
    /**
     * 
     *
     * @param float $handSize
     *
     * @return self
     */
    public function setHandSize(float $handSize) : self
    {
        $this->handSize = $handSize;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHandSizeRank() : int
    {
        return $this->handSizeRank;
    }
    /**
     * 
     *
     * @param int $handSizeRank
     *
     * @return self
     */
    public function setHandSizeRank(int $handSizeRank) : self
    {
        $this->handSizeRank = $handSizeRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getArmLength() : float
    {
        return $this->armLength;
    }
    /**
     * 
     *
     * @param float $armLength
     *
     * @return self
     */
    public function setArmLength(float $armLength) : self
    {
        $this->armLength = $armLength;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getArmLengthRank() : int
    {
        return $this->armLengthRank;
    }
    /**
     * 
     *
     * @param int $armLengthRank
     *
     * @return self
     */
    public function setArmLengthRank(int $armLengthRank) : self
    {
        $this->armLengthRank = $armLengthRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getQualityScore() : float
    {
        return $this->qualityScore;
    }
    /**
     * 
     *
     * @param float $qualityScore
     *
     * @return self
     */
    public function setQualityScore(float $qualityScore) : self
    {
        $this->qualityScore = $qualityScore;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getQualityScoreRank() : int
    {
        return $this->qualityScoreRank;
    }
    /**
     * 
     *
     * @param int $qualityScoreRank
     *
     * @return self
     */
    public function setQualityScoreRank(int $qualityScoreRank) : self
    {
        $this->qualityScoreRank = $qualityScoreRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFortyYardDash() : float
    {
        return $this->fortyYardDash;
    }
    /**
     * 
     *
     * @param float $fortyYardDash
     *
     * @return self
     */
    public function setFortyYardDash(float $fortyYardDash) : self
    {
        $this->fortyYardDash = $fortyYardDash;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFortyYardDashRank() : int
    {
        return $this->fortyYardDashRank;
    }
    /**
     * 
     *
     * @param int $fortyYardDashRank
     *
     * @return self
     */
    public function setFortyYardDashRank(int $fortyYardDashRank) : self
    {
        $this->fortyYardDashRank = $fortyYardDashRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getThreeConeDrill() : float
    {
        return $this->threeConeDrill;
    }
    /**
     * 
     *
     * @param float $threeConeDrill
     *
     * @return self
     */
    public function setThreeConeDrill(float $threeConeDrill) : self
    {
        $this->threeConeDrill = $threeConeDrill;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getThreeConeDrillRank() : int
    {
        return $this->threeConeDrillRank;
    }
    /**
     * 
     *
     * @param int $threeConeDrillRank
     *
     * @return self
     */
    public function setThreeConeDrillRank(int $threeConeDrillRank) : self
    {
        $this->threeConeDrillRank = $threeConeDrillRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTwentyYardShuttle() : float
    {
        return $this->twentyYardShuttle;
    }
    /**
     * 
     *
     * @param float $twentyYardShuttle
     *
     * @return self
     */
    public function setTwentyYardShuttle(float $twentyYardShuttle) : self
    {
        $this->twentyYardShuttle = $twentyYardShuttle;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTwentyYardShuttleRank() : int
    {
        return $this->twentyYardShuttleRank;
    }
    /**
     * 
     *
     * @param int $twentyYardShuttleRank
     *
     * @return self
     */
    public function setTwentyYardShuttleRank(int $twentyYardShuttleRank) : self
    {
        $this->twentyYardShuttleRank = $twentyYardShuttleRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAgilityScore() : float
    {
        return $this->agilityScore;
    }
    /**
     * 
     *
     * @param float $agilityScore
     *
     * @return self
     */
    public function setAgilityScore(float $agilityScore) : self
    {
        $this->agilityScore = $agilityScore;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAgilityScoreRank() : int
    {
        return $this->agilityScoreRank;
    }
    /**
     * 
     *
     * @param int $agilityScoreRank
     *
     * @return self
     */
    public function setAgilityScoreRank(int $agilityScoreRank) : self
    {
        $this->agilityScoreRank = $agilityScoreRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getVerticalJump() : float
    {
        return $this->verticalJump;
    }
    /**
     * 
     *
     * @param float $verticalJump
     *
     * @return self
     */
    public function setVerticalJump(float $verticalJump) : self
    {
        $this->verticalJump = $verticalJump;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getVerticalJumpRank() : int
    {
        return $this->verticalJumpRank;
    }
    /**
     * 
     *
     * @param int $verticalJumpRank
     *
     * @return self
     */
    public function setVerticalJumpRank(int $verticalJumpRank) : self
    {
        $this->verticalJumpRank = $verticalJumpRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBroadJump() : float
    {
        return $this->broadJump;
    }
    /**
     * 
     *
     * @param float $broadJump
     *
     * @return self
     */
    public function setBroadJump(float $broadJump) : self
    {
        $this->broadJump = $broadJump;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBroadJumpRank() : int
    {
        return $this->broadJumpRank;
    }
    /**
     * 
     *
     * @param int $broadJumpRank
     *
     * @return self
     */
    public function setBroadJumpRank(int $broadJumpRank) : self
    {
        $this->broadJumpRank = $broadJumpRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBurstScore() : float
    {
        return $this->burstScore;
    }
    /**
     * 
     *
     * @param float $burstScore
     *
     * @return self
     */
    public function setBurstScore(float $burstScore) : self
    {
        $this->burstScore = $burstScore;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBurstScoreRank() : int
    {
        return $this->burstScoreRank;
    }
    /**
     * 
     *
     * @param int $burstScoreRank
     *
     * @return self
     */
    public function setBurstScoreRank(int $burstScoreRank) : self
    {
        $this->burstScoreRank = $burstScoreRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSPARQx() : float
    {
        return $this->sPARQx;
    }
    /**
     * 
     *
     * @param float $sPARQx
     *
     * @return self
     */
    public function setSPARQx(float $sPARQx) : self
    {
        $this->sPARQx = $sPARQx;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSPARQxRank() : int
    {
        return $this->sPARQxRank;
    }
    /**
     * 
     *
     * @param int $sPARQxRank
     *
     * @return self
     */
    public function setSPARQxRank(int $sPARQxRank) : self
    {
        $this->sPARQxRank = $sPARQxRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAthleticismScore() : float
    {
        return $this->athleticismScore;
    }
    /**
     * 
     *
     * @param float $athleticismScore
     *
     * @return self
     */
    public function setAthleticismScore(float $athleticismScore) : self
    {
        $this->athleticismScore = $athleticismScore;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAthleticismScoreRank() : int
    {
        return $this->athleticismScoreRank;
    }
    /**
     * 
     *
     * @param int $athleticismScoreRank
     *
     * @return self
     */
    public function setAthleticismScoreRank(int $athleticismScoreRank) : self
    {
        $this->athleticismScoreRank = $athleticismScoreRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSpeedScore() : float
    {
        return $this->speedScore;
    }
    /**
     * 
     *
     * @param float $speedScore
     *
     * @return self
     */
    public function setSpeedScore(float $speedScore) : self
    {
        $this->speedScore = $speedScore;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSpeedScoreRank() : int
    {
        return $this->speedScoreRank;
    }
    /**
     * 
     *
     * @param int $speedScoreRank
     *
     * @return self
     */
    public function setSpeedScoreRank(int $speedScoreRank) : self
    {
        $this->speedScoreRank = $speedScoreRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getThrowVelocity() : float
    {
        return $this->throwVelocity;
    }
    /**
     * 
     *
     * @param float $throwVelocity
     *
     * @return self
     */
    public function setThrowVelocity(float $throwVelocity) : self
    {
        $this->throwVelocity = $throwVelocity;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getThrowVelocityRank() : int
    {
        return $this->throwVelocityRank;
    }
    /**
     * 
     *
     * @param int $throwVelocityRank
     *
     * @return self
     */
    public function setThrowVelocityRank(int $throwVelocityRank) : self
    {
        $this->throwVelocityRank = $throwVelocityRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWonderlicScore() : float
    {
        return $this->wonderlicScore;
    }
    /**
     * 
     *
     * @param float $wonderlicScore
     *
     * @return self
     */
    public function setWonderlicScore(float $wonderlicScore) : self
    {
        $this->wonderlicScore = $wonderlicScore;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWonderlicScoreRank() : int
    {
        return $this->wonderlicScoreRank;
    }
    /**
     * 
     *
     * @param int $wonderlicScoreRank
     *
     * @return self
     */
    public function setWonderlicScoreRank(int $wonderlicScoreRank) : self
    {
        $this->wonderlicScoreRank = $wonderlicScoreRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHeightAdjustedSpeedScore() : float
    {
        return $this->heightAdjustedSpeedScore;
    }
    /**
     * 
     *
     * @param float $heightAdjustedSpeedScore
     *
     * @return self
     */
    public function setHeightAdjustedSpeedScore(float $heightAdjustedSpeedScore) : self
    {
        $this->heightAdjustedSpeedScore = $heightAdjustedSpeedScore;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHeightAdjustedSpeedScoreRank() : int
    {
        return $this->heightAdjustedSpeedScoreRank;
    }
    /**
     * 
     *
     * @param int $heightAdjustedSpeedScoreRank
     *
     * @return self
     */
    public function setHeightAdjustedSpeedScoreRank(int $heightAdjustedSpeedScoreRank) : self
    {
        $this->heightAdjustedSpeedScoreRank = $heightAdjustedSpeedScoreRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCatchRadius() : float
    {
        return $this->catchRadius;
    }
    /**
     * 
     *
     * @param float $catchRadius
     *
     * @return self
     */
    public function setCatchRadius(float $catchRadius) : self
    {
        $this->catchRadius = $catchRadius;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCatchRadiusRank() : int
    {
        return $this->catchRadiusRank;
    }
    /**
     * 
     *
     * @param int $catchRadiusRank
     *
     * @return self
     */
    public function setCatchRadiusRank(int $catchRadiusRank) : self
    {
        $this->catchRadiusRank = $catchRadiusRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBenchPress() : float
    {
        return $this->benchPress;
    }
    /**
     * 
     *
     * @param float $benchPress
     *
     * @return self
     */
    public function setBenchPress(float $benchPress) : self
    {
        $this->benchPress = $benchPress;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBenchPressRank() : int
    {
        return $this->benchPressRank;
    }
    /**
     * 
     *
     * @param int $benchPressRank
     *
     * @return self
     */
    public function setBenchPressRank(int $benchPressRank) : self
    {
        $this->benchPressRank = $benchPressRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPlaymakingRadius() : float
    {
        return $this->playmakingRadius;
    }
    /**
     * 
     *
     * @param float $playmakingRadius
     *
     * @return self
     */
    public function setPlaymakingRadius(float $playmakingRadius) : self
    {
        $this->playmakingRadius = $playmakingRadius;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlaymakingRadiusRank() : int
    {
        return $this->playmakingRadiusRank;
    }
    /**
     * 
     *
     * @param int $playmakingRadiusRank
     *
     * @return self
     */
    public function setPlaymakingRadiusRank(int $playmakingRadiusRank) : self
    {
        $this->playmakingRadiusRank = $playmakingRadiusRank;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHighlightClip() : string
    {
        return $this->highlightClip;
    }
    /**
     * 
     *
     * @param string $highlightClip
     *
     * @return self
     */
    public function setHighlightClip(string $highlightClip) : self
    {
        $this->highlightClip = $highlightClip;
        return $this;
    }
    /**
     * 
     *
     * @return AdvancedPlayerMedical[]
     */
    public function getMedicalHistory() : array
    {
        return $this->medicalHistory;
    }
    /**
     * 
     *
     * @param AdvancedPlayerMedical[] $medicalHistory
     *
     * @return self
     */
    public function setMedicalHistory(array $medicalHistory) : self
    {
        $this->medicalHistory = $medicalHistory;
        return $this;
    }
    /**
     * 
     *
     * @return PlayerInfo[]
     */
    public function getComparablePlayers() : array
    {
        return $this->comparablePlayers;
    }
    /**
     * 
     *
     * @param PlayerInfo[] $comparablePlayers
     *
     * @return self
     */
    public function setComparablePlayers(array $comparablePlayers) : self
    {
        $this->comparablePlayers = $comparablePlayers;
        return $this;
    }
    /**
     * 
     *
     * @return AdvancedPlayerSeason[]
     */
    public function getAdvancedPlayerSeasons() : array
    {
        return $this->advancedPlayerSeasons;
    }
    /**
     * 
     *
     * @param AdvancedPlayerSeason[] $advancedPlayerSeasons
     *
     * @return self
     */
    public function setAdvancedPlayerSeasons(array $advancedPlayerSeasons) : self
    {
        $this->advancedPlayerSeasons = $advancedPlayerSeasons;
        return $this;
    }
    /**
     * 
     *
     * @return AdvancedPlayerGame[]
     */
    public function getAdvancedPlayerGames() : array
    {
        return $this->advancedPlayerGames;
    }
    /**
     * 
     *
     * @param AdvancedPlayerGame[] $advancedPlayerGames
     *
     * @return self
     */
    public function setAdvancedPlayerGames(array $advancedPlayerGames) : self
    {
        $this->advancedPlayerGames = $advancedPlayerGames;
        return $this;
    }
}