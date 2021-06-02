<?php

namespace Sportsdata\API\NFL\Model;

class FantasyPlayer
{
    /**
     * 
     *
     * @var string
     */
    protected $fantasyPlayerKey;
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
    protected $position;
    /**
     * 
     *
     * @var float
     */
    protected $averageDraftPosition;
    /**
     * 
     *
     * @var float
     */
    protected $averageDraftPositionPPR;
    /**
     * 
     *
     * @var int
     */
    protected $byeWeek;
    /**
     * 
     *
     * @var float
     */
    protected $lastSeasonFantasyPoints;
    /**
     * 
     *
     * @var float
     */
    protected $projectedFantasyPoints;
    /**
     * 
     *
     * @var int
     */
    protected $auctionValue;
    /**
     * 
     *
     * @var int
     */
    protected $auctionValuePPR;
    /**
     * 
     *
     * @var int
     */
    protected $averageDraftPositionIDP;
    /**
     * 
     *
     * @var float
     */
    protected $averageDraftPositionRookie;
    /**
     * 
     *
     * @var float
     */
    protected $averageDraftPositionDynasty;
    /**
     * 
     *
     * @var float
     */
    protected $averageDraftPosition2QB;
    /**
     * 
     *
     * @return string
     */
    public function getFantasyPlayerKey() : string
    {
        return $this->fantasyPlayerKey;
    }
    /**
     * 
     *
     * @param string $fantasyPlayerKey
     *
     * @return self
     */
    public function setFantasyPlayerKey(string $fantasyPlayerKey) : self
    {
        $this->fantasyPlayerKey = $fantasyPlayerKey;
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
     * @return float
     */
    public function getAverageDraftPosition() : float
    {
        return $this->averageDraftPosition;
    }
    /**
     * 
     *
     * @param float $averageDraftPosition
     *
     * @return self
     */
    public function setAverageDraftPosition(float $averageDraftPosition) : self
    {
        $this->averageDraftPosition = $averageDraftPosition;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAverageDraftPositionPPR() : float
    {
        return $this->averageDraftPositionPPR;
    }
    /**
     * 
     *
     * @param float $averageDraftPositionPPR
     *
     * @return self
     */
    public function setAverageDraftPositionPPR(float $averageDraftPositionPPR) : self
    {
        $this->averageDraftPositionPPR = $averageDraftPositionPPR;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getByeWeek() : int
    {
        return $this->byeWeek;
    }
    /**
     * 
     *
     * @param int $byeWeek
     *
     * @return self
     */
    public function setByeWeek(int $byeWeek) : self
    {
        $this->byeWeek = $byeWeek;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getLastSeasonFantasyPoints() : float
    {
        return $this->lastSeasonFantasyPoints;
    }
    /**
     * 
     *
     * @param float $lastSeasonFantasyPoints
     *
     * @return self
     */
    public function setLastSeasonFantasyPoints(float $lastSeasonFantasyPoints) : self
    {
        $this->lastSeasonFantasyPoints = $lastSeasonFantasyPoints;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getProjectedFantasyPoints() : float
    {
        return $this->projectedFantasyPoints;
    }
    /**
     * 
     *
     * @param float $projectedFantasyPoints
     *
     * @return self
     */
    public function setProjectedFantasyPoints(float $projectedFantasyPoints) : self
    {
        $this->projectedFantasyPoints = $projectedFantasyPoints;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAuctionValue() : int
    {
        return $this->auctionValue;
    }
    /**
     * 
     *
     * @param int $auctionValue
     *
     * @return self
     */
    public function setAuctionValue(int $auctionValue) : self
    {
        $this->auctionValue = $auctionValue;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAuctionValuePPR() : int
    {
        return $this->auctionValuePPR;
    }
    /**
     * 
     *
     * @param int $auctionValuePPR
     *
     * @return self
     */
    public function setAuctionValuePPR(int $auctionValuePPR) : self
    {
        $this->auctionValuePPR = $auctionValuePPR;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAverageDraftPositionIDP() : int
    {
        return $this->averageDraftPositionIDP;
    }
    /**
     * 
     *
     * @param int $averageDraftPositionIDP
     *
     * @return self
     */
    public function setAverageDraftPositionIDP(int $averageDraftPositionIDP) : self
    {
        $this->averageDraftPositionIDP = $averageDraftPositionIDP;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAverageDraftPositionRookie() : float
    {
        return $this->averageDraftPositionRookie;
    }
    /**
     * 
     *
     * @param float $averageDraftPositionRookie
     *
     * @return self
     */
    public function setAverageDraftPositionRookie(float $averageDraftPositionRookie) : self
    {
        $this->averageDraftPositionRookie = $averageDraftPositionRookie;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAverageDraftPositionDynasty() : float
    {
        return $this->averageDraftPositionDynasty;
    }
    /**
     * 
     *
     * @param float $averageDraftPositionDynasty
     *
     * @return self
     */
    public function setAverageDraftPositionDynasty(float $averageDraftPositionDynasty) : self
    {
        $this->averageDraftPositionDynasty = $averageDraftPositionDynasty;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAverageDraftPosition2QB() : float
    {
        return $this->averageDraftPosition2QB;
    }
    /**
     * 
     *
     * @param float $averageDraftPosition2QB
     *
     * @return self
     */
    public function setAverageDraftPosition2QB(float $averageDraftPosition2QB) : self
    {
        $this->averageDraftPosition2QB = $averageDraftPosition2QB;
        return $this;
    }
}