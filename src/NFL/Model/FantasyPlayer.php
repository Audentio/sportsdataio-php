<?php

namespace Sportsdata\API\NFL\Model;

class FantasyPlayer
{
    /**
     * 
     *
     * @var string|null
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
    protected $position;
    /**
     * 
     *
     * @var float|null
     */
    protected $averageDraftPosition;
    /**
     * 
     *
     * @var float|null
     */
    protected $averageDraftPositionPPR;
    /**
     * 
     *
     * @var int|null
     */
    protected $byeWeek;
    /**
     * 
     *
     * @var float|null
     */
    protected $lastSeasonFantasyPoints;
    /**
     * 
     *
     * @var float|null
     */
    protected $projectedFantasyPoints;
    /**
     * 
     *
     * @var int|null
     */
    protected $auctionValue;
    /**
     * 
     *
     * @var int|null
     */
    protected $auctionValuePPR;
    /**
     * 
     *
     * @var int|null
     */
    protected $averageDraftPositionIDP;
    /**
     * 
     *
     * @var float|null
     */
    protected $averageDraftPositionRookie;
    /**
     * 
     *
     * @var float|null
     */
    protected $averageDraftPositionDynasty;
    /**
     * 
     *
     * @var float|null
     */
    protected $averageDraftPosition2QB;
    /**
     * 
     *
     * @return string|null
     */
    public function getFantasyPlayerKey() : ?string
    {
        return $this->fantasyPlayerKey;
    }
    /**
     * 
     *
     * @param string|null $fantasyPlayerKey
     *
     * @return self
     */
    public function setFantasyPlayerKey(?string $fantasyPlayerKey) : self
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
     * @return float|null
     */
    public function getAverageDraftPosition() : ?float
    {
        return $this->averageDraftPosition;
    }
    /**
     * 
     *
     * @param float|null $averageDraftPosition
     *
     * @return self
     */
    public function setAverageDraftPosition(?float $averageDraftPosition) : self
    {
        $this->averageDraftPosition = $averageDraftPosition;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAverageDraftPositionPPR() : ?float
    {
        return $this->averageDraftPositionPPR;
    }
    /**
     * 
     *
     * @param float|null $averageDraftPositionPPR
     *
     * @return self
     */
    public function setAverageDraftPositionPPR(?float $averageDraftPositionPPR) : self
    {
        $this->averageDraftPositionPPR = $averageDraftPositionPPR;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getByeWeek() : ?int
    {
        return $this->byeWeek;
    }
    /**
     * 
     *
     * @param int|null $byeWeek
     *
     * @return self
     */
    public function setByeWeek(?int $byeWeek) : self
    {
        $this->byeWeek = $byeWeek;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getLastSeasonFantasyPoints() : ?float
    {
        return $this->lastSeasonFantasyPoints;
    }
    /**
     * 
     *
     * @param float|null $lastSeasonFantasyPoints
     *
     * @return self
     */
    public function setLastSeasonFantasyPoints(?float $lastSeasonFantasyPoints) : self
    {
        $this->lastSeasonFantasyPoints = $lastSeasonFantasyPoints;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getProjectedFantasyPoints() : ?float
    {
        return $this->projectedFantasyPoints;
    }
    /**
     * 
     *
     * @param float|null $projectedFantasyPoints
     *
     * @return self
     */
    public function setProjectedFantasyPoints(?float $projectedFantasyPoints) : self
    {
        $this->projectedFantasyPoints = $projectedFantasyPoints;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAuctionValue() : ?int
    {
        return $this->auctionValue;
    }
    /**
     * 
     *
     * @param int|null $auctionValue
     *
     * @return self
     */
    public function setAuctionValue(?int $auctionValue) : self
    {
        $this->auctionValue = $auctionValue;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAuctionValuePPR() : ?int
    {
        return $this->auctionValuePPR;
    }
    /**
     * 
     *
     * @param int|null $auctionValuePPR
     *
     * @return self
     */
    public function setAuctionValuePPR(?int $auctionValuePPR) : self
    {
        $this->auctionValuePPR = $auctionValuePPR;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAverageDraftPositionIDP() : ?int
    {
        return $this->averageDraftPositionIDP;
    }
    /**
     * 
     *
     * @param int|null $averageDraftPositionIDP
     *
     * @return self
     */
    public function setAverageDraftPositionIDP(?int $averageDraftPositionIDP) : self
    {
        $this->averageDraftPositionIDP = $averageDraftPositionIDP;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAverageDraftPositionRookie() : ?float
    {
        return $this->averageDraftPositionRookie;
    }
    /**
     * 
     *
     * @param float|null $averageDraftPositionRookie
     *
     * @return self
     */
    public function setAverageDraftPositionRookie(?float $averageDraftPositionRookie) : self
    {
        $this->averageDraftPositionRookie = $averageDraftPositionRookie;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAverageDraftPositionDynasty() : ?float
    {
        return $this->averageDraftPositionDynasty;
    }
    /**
     * 
     *
     * @param float|null $averageDraftPositionDynasty
     *
     * @return self
     */
    public function setAverageDraftPositionDynasty(?float $averageDraftPositionDynasty) : self
    {
        $this->averageDraftPositionDynasty = $averageDraftPositionDynasty;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAverageDraftPosition2QB() : ?float
    {
        return $this->averageDraftPosition2QB;
    }
    /**
     * 
     *
     * @param float|null $averageDraftPosition2QB
     *
     * @return self
     */
    public function setAverageDraftPosition2QB(?float $averageDraftPosition2QB) : self
    {
        $this->averageDraftPosition2QB = $averageDraftPosition2QB;
        return $this;
    }
}