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
     * @var string|null
     */
    protected $name;
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
     * @var string|null
     */
    protected $position;
    /**
     * 
     *
     * @var string|null
     */
    protected $fantasyPosition;
    /**
     * 
     *
     * @var string|null
     */
    protected $positionGroup;
    /**
     * 
     *
     * @var float|null
     */
    protected $bMI;
    /**
     * 
     *
     * @var int|null
     */
    protected $bMIRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $handSize;
    /**
     * 
     *
     * @var int|null
     */
    protected $handSizeRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $armLength;
    /**
     * 
     *
     * @var int|null
     */
    protected $armLengthRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $qualityScore;
    /**
     * 
     *
     * @var int|null
     */
    protected $qualityScoreRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $fortyYardDash;
    /**
     * 
     *
     * @var int|null
     */
    protected $fortyYardDashRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $threeConeDrill;
    /**
     * 
     *
     * @var int|null
     */
    protected $threeConeDrillRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $twentyYardShuttle;
    /**
     * 
     *
     * @var int|null
     */
    protected $twentyYardShuttleRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $agilityScore;
    /**
     * 
     *
     * @var int|null
     */
    protected $agilityScoreRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $verticalJump;
    /**
     * 
     *
     * @var int|null
     */
    protected $verticalJumpRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $broadJump;
    /**
     * 
     *
     * @var int|null
     */
    protected $broadJumpRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $burstScore;
    /**
     * 
     *
     * @var int|null
     */
    protected $burstScoreRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $sPARQx;
    /**
     * 
     *
     * @var int|null
     */
    protected $sPARQxRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $athleticismScore;
    /**
     * 
     *
     * @var int|null
     */
    protected $athleticismScoreRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $speedScore;
    /**
     * 
     *
     * @var int|null
     */
    protected $speedScoreRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $throwVelocity;
    /**
     * 
     *
     * @var int|null
     */
    protected $throwVelocityRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $wonderlicScore;
    /**
     * 
     *
     * @var int|null
     */
    protected $wonderlicScoreRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $heightAdjustedSpeedScore;
    /**
     * 
     *
     * @var int|null
     */
    protected $heightAdjustedSpeedScoreRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $catchRadius;
    /**
     * 
     *
     * @var int|null
     */
    protected $catchRadiusRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $benchPress;
    /**
     * 
     *
     * @var int|null
     */
    protected $benchPressRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $playmakingRadius;
    /**
     * 
     *
     * @var int|null
     */
    protected $playmakingRadiusRank;
    /**
     * 
     *
     * @var string|null
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
     * @return string|null
     */
    public function getPosition() : ?string
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param string|null $position
     *
     * @return self
     */
    public function setPosition(?string $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFantasyPosition() : ?string
    {
        return $this->fantasyPosition;
    }
    /**
     * 
     *
     * @param string|null $fantasyPosition
     *
     * @return self
     */
    public function setFantasyPosition(?string $fantasyPosition) : self
    {
        $this->fantasyPosition = $fantasyPosition;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPositionGroup() : ?string
    {
        return $this->positionGroup;
    }
    /**
     * 
     *
     * @param string|null $positionGroup
     *
     * @return self
     */
    public function setPositionGroup(?string $positionGroup) : self
    {
        $this->positionGroup = $positionGroup;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBMI() : ?float
    {
        return $this->bMI;
    }
    /**
     * 
     *
     * @param float|null $bMI
     *
     * @return self
     */
    public function setBMI(?float $bMI) : self
    {
        $this->bMI = $bMI;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBMIRank() : ?int
    {
        return $this->bMIRank;
    }
    /**
     * 
     *
     * @param int|null $bMIRank
     *
     * @return self
     */
    public function setBMIRank(?int $bMIRank) : self
    {
        $this->bMIRank = $bMIRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHandSize() : ?float
    {
        return $this->handSize;
    }
    /**
     * 
     *
     * @param float|null $handSize
     *
     * @return self
     */
    public function setHandSize(?float $handSize) : self
    {
        $this->handSize = $handSize;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHandSizeRank() : ?int
    {
        return $this->handSizeRank;
    }
    /**
     * 
     *
     * @param int|null $handSizeRank
     *
     * @return self
     */
    public function setHandSizeRank(?int $handSizeRank) : self
    {
        $this->handSizeRank = $handSizeRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getArmLength() : ?float
    {
        return $this->armLength;
    }
    /**
     * 
     *
     * @param float|null $armLength
     *
     * @return self
     */
    public function setArmLength(?float $armLength) : self
    {
        $this->armLength = $armLength;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getArmLengthRank() : ?int
    {
        return $this->armLengthRank;
    }
    /**
     * 
     *
     * @param int|null $armLengthRank
     *
     * @return self
     */
    public function setArmLengthRank(?int $armLengthRank) : self
    {
        $this->armLengthRank = $armLengthRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getQualityScore() : ?float
    {
        return $this->qualityScore;
    }
    /**
     * 
     *
     * @param float|null $qualityScore
     *
     * @return self
     */
    public function setQualityScore(?float $qualityScore) : self
    {
        $this->qualityScore = $qualityScore;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getQualityScoreRank() : ?int
    {
        return $this->qualityScoreRank;
    }
    /**
     * 
     *
     * @param int|null $qualityScoreRank
     *
     * @return self
     */
    public function setQualityScoreRank(?int $qualityScoreRank) : self
    {
        $this->qualityScoreRank = $qualityScoreRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFortyYardDash() : ?float
    {
        return $this->fortyYardDash;
    }
    /**
     * 
     *
     * @param float|null $fortyYardDash
     *
     * @return self
     */
    public function setFortyYardDash(?float $fortyYardDash) : self
    {
        $this->fortyYardDash = $fortyYardDash;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFortyYardDashRank() : ?int
    {
        return $this->fortyYardDashRank;
    }
    /**
     * 
     *
     * @param int|null $fortyYardDashRank
     *
     * @return self
     */
    public function setFortyYardDashRank(?int $fortyYardDashRank) : self
    {
        $this->fortyYardDashRank = $fortyYardDashRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getThreeConeDrill() : ?float
    {
        return $this->threeConeDrill;
    }
    /**
     * 
     *
     * @param float|null $threeConeDrill
     *
     * @return self
     */
    public function setThreeConeDrill(?float $threeConeDrill) : self
    {
        $this->threeConeDrill = $threeConeDrill;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getThreeConeDrillRank() : ?int
    {
        return $this->threeConeDrillRank;
    }
    /**
     * 
     *
     * @param int|null $threeConeDrillRank
     *
     * @return self
     */
    public function setThreeConeDrillRank(?int $threeConeDrillRank) : self
    {
        $this->threeConeDrillRank = $threeConeDrillRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTwentyYardShuttle() : ?float
    {
        return $this->twentyYardShuttle;
    }
    /**
     * 
     *
     * @param float|null $twentyYardShuttle
     *
     * @return self
     */
    public function setTwentyYardShuttle(?float $twentyYardShuttle) : self
    {
        $this->twentyYardShuttle = $twentyYardShuttle;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTwentyYardShuttleRank() : ?int
    {
        return $this->twentyYardShuttleRank;
    }
    /**
     * 
     *
     * @param int|null $twentyYardShuttleRank
     *
     * @return self
     */
    public function setTwentyYardShuttleRank(?int $twentyYardShuttleRank) : self
    {
        $this->twentyYardShuttleRank = $twentyYardShuttleRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAgilityScore() : ?float
    {
        return $this->agilityScore;
    }
    /**
     * 
     *
     * @param float|null $agilityScore
     *
     * @return self
     */
    public function setAgilityScore(?float $agilityScore) : self
    {
        $this->agilityScore = $agilityScore;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAgilityScoreRank() : ?int
    {
        return $this->agilityScoreRank;
    }
    /**
     * 
     *
     * @param int|null $agilityScoreRank
     *
     * @return self
     */
    public function setAgilityScoreRank(?int $agilityScoreRank) : self
    {
        $this->agilityScoreRank = $agilityScoreRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getVerticalJump() : ?float
    {
        return $this->verticalJump;
    }
    /**
     * 
     *
     * @param float|null $verticalJump
     *
     * @return self
     */
    public function setVerticalJump(?float $verticalJump) : self
    {
        $this->verticalJump = $verticalJump;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getVerticalJumpRank() : ?int
    {
        return $this->verticalJumpRank;
    }
    /**
     * 
     *
     * @param int|null $verticalJumpRank
     *
     * @return self
     */
    public function setVerticalJumpRank(?int $verticalJumpRank) : self
    {
        $this->verticalJumpRank = $verticalJumpRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBroadJump() : ?float
    {
        return $this->broadJump;
    }
    /**
     * 
     *
     * @param float|null $broadJump
     *
     * @return self
     */
    public function setBroadJump(?float $broadJump) : self
    {
        $this->broadJump = $broadJump;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBroadJumpRank() : ?int
    {
        return $this->broadJumpRank;
    }
    /**
     * 
     *
     * @param int|null $broadJumpRank
     *
     * @return self
     */
    public function setBroadJumpRank(?int $broadJumpRank) : self
    {
        $this->broadJumpRank = $broadJumpRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBurstScore() : ?float
    {
        return $this->burstScore;
    }
    /**
     * 
     *
     * @param float|null $burstScore
     *
     * @return self
     */
    public function setBurstScore(?float $burstScore) : self
    {
        $this->burstScore = $burstScore;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBurstScoreRank() : ?int
    {
        return $this->burstScoreRank;
    }
    /**
     * 
     *
     * @param int|null $burstScoreRank
     *
     * @return self
     */
    public function setBurstScoreRank(?int $burstScoreRank) : self
    {
        $this->burstScoreRank = $burstScoreRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSPARQx() : ?float
    {
        return $this->sPARQx;
    }
    /**
     * 
     *
     * @param float|null $sPARQx
     *
     * @return self
     */
    public function setSPARQx(?float $sPARQx) : self
    {
        $this->sPARQx = $sPARQx;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSPARQxRank() : ?int
    {
        return $this->sPARQxRank;
    }
    /**
     * 
     *
     * @param int|null $sPARQxRank
     *
     * @return self
     */
    public function setSPARQxRank(?int $sPARQxRank) : self
    {
        $this->sPARQxRank = $sPARQxRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAthleticismScore() : ?float
    {
        return $this->athleticismScore;
    }
    /**
     * 
     *
     * @param float|null $athleticismScore
     *
     * @return self
     */
    public function setAthleticismScore(?float $athleticismScore) : self
    {
        $this->athleticismScore = $athleticismScore;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAthleticismScoreRank() : ?int
    {
        return $this->athleticismScoreRank;
    }
    /**
     * 
     *
     * @param int|null $athleticismScoreRank
     *
     * @return self
     */
    public function setAthleticismScoreRank(?int $athleticismScoreRank) : self
    {
        $this->athleticismScoreRank = $athleticismScoreRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSpeedScore() : ?float
    {
        return $this->speedScore;
    }
    /**
     * 
     *
     * @param float|null $speedScore
     *
     * @return self
     */
    public function setSpeedScore(?float $speedScore) : self
    {
        $this->speedScore = $speedScore;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSpeedScoreRank() : ?int
    {
        return $this->speedScoreRank;
    }
    /**
     * 
     *
     * @param int|null $speedScoreRank
     *
     * @return self
     */
    public function setSpeedScoreRank(?int $speedScoreRank) : self
    {
        $this->speedScoreRank = $speedScoreRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getThrowVelocity() : ?float
    {
        return $this->throwVelocity;
    }
    /**
     * 
     *
     * @param float|null $throwVelocity
     *
     * @return self
     */
    public function setThrowVelocity(?float $throwVelocity) : self
    {
        $this->throwVelocity = $throwVelocity;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getThrowVelocityRank() : ?int
    {
        return $this->throwVelocityRank;
    }
    /**
     * 
     *
     * @param int|null $throwVelocityRank
     *
     * @return self
     */
    public function setThrowVelocityRank(?int $throwVelocityRank) : self
    {
        $this->throwVelocityRank = $throwVelocityRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getWonderlicScore() : ?float
    {
        return $this->wonderlicScore;
    }
    /**
     * 
     *
     * @param float|null $wonderlicScore
     *
     * @return self
     */
    public function setWonderlicScore(?float $wonderlicScore) : self
    {
        $this->wonderlicScore = $wonderlicScore;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWonderlicScoreRank() : ?int
    {
        return $this->wonderlicScoreRank;
    }
    /**
     * 
     *
     * @param int|null $wonderlicScoreRank
     *
     * @return self
     */
    public function setWonderlicScoreRank(?int $wonderlicScoreRank) : self
    {
        $this->wonderlicScoreRank = $wonderlicScoreRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHeightAdjustedSpeedScore() : ?float
    {
        return $this->heightAdjustedSpeedScore;
    }
    /**
     * 
     *
     * @param float|null $heightAdjustedSpeedScore
     *
     * @return self
     */
    public function setHeightAdjustedSpeedScore(?float $heightAdjustedSpeedScore) : self
    {
        $this->heightAdjustedSpeedScore = $heightAdjustedSpeedScore;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHeightAdjustedSpeedScoreRank() : ?int
    {
        return $this->heightAdjustedSpeedScoreRank;
    }
    /**
     * 
     *
     * @param int|null $heightAdjustedSpeedScoreRank
     *
     * @return self
     */
    public function setHeightAdjustedSpeedScoreRank(?int $heightAdjustedSpeedScoreRank) : self
    {
        $this->heightAdjustedSpeedScoreRank = $heightAdjustedSpeedScoreRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCatchRadius() : ?float
    {
        return $this->catchRadius;
    }
    /**
     * 
     *
     * @param float|null $catchRadius
     *
     * @return self
     */
    public function setCatchRadius(?float $catchRadius) : self
    {
        $this->catchRadius = $catchRadius;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCatchRadiusRank() : ?int
    {
        return $this->catchRadiusRank;
    }
    /**
     * 
     *
     * @param int|null $catchRadiusRank
     *
     * @return self
     */
    public function setCatchRadiusRank(?int $catchRadiusRank) : self
    {
        $this->catchRadiusRank = $catchRadiusRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBenchPress() : ?float
    {
        return $this->benchPress;
    }
    /**
     * 
     *
     * @param float|null $benchPress
     *
     * @return self
     */
    public function setBenchPress(?float $benchPress) : self
    {
        $this->benchPress = $benchPress;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBenchPressRank() : ?int
    {
        return $this->benchPressRank;
    }
    /**
     * 
     *
     * @param int|null $benchPressRank
     *
     * @return self
     */
    public function setBenchPressRank(?int $benchPressRank) : self
    {
        $this->benchPressRank = $benchPressRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPlaymakingRadius() : ?float
    {
        return $this->playmakingRadius;
    }
    /**
     * 
     *
     * @param float|null $playmakingRadius
     *
     * @return self
     */
    public function setPlaymakingRadius(?float $playmakingRadius) : self
    {
        $this->playmakingRadius = $playmakingRadius;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPlaymakingRadiusRank() : ?int
    {
        return $this->playmakingRadiusRank;
    }
    /**
     * 
     *
     * @param int|null $playmakingRadiusRank
     *
     * @return self
     */
    public function setPlaymakingRadiusRank(?int $playmakingRadiusRank) : self
    {
        $this->playmakingRadiusRank = $playmakingRadiusRank;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHighlightClip() : ?string
    {
        return $this->highlightClip;
    }
    /**
     * 
     *
     * @param string|null $highlightClip
     *
     * @return self
     */
    public function setHighlightClip(?string $highlightClip) : self
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