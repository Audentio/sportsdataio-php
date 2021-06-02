<?php

namespace Sportsdata\API\NFL\Model;

class DailyFantasyPlayer
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
    protected $date;
    /**
     * 
     *
     * @var string
     */
    protected $shortName;
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
    protected $position;
    /**
     * 
     *
     * @var int
     */
    protected $salary;
    /**
     * 
     *
     * @var float
     */
    protected $lastGameFantasyPoints;
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
    protected $opponentRank;
    /**
     * 
     *
     * @var int
     */
    protected $opponentPositionRank;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var string
     */
    protected $statusCode;
    /**
     * 
     *
     * @var string
     */
    protected $statusColor;
    /**
     * 
     *
     * @var int
     */
    protected $fanDuelSalary;
    /**
     * 
     *
     * @var int
     */
    protected $draftKingsSalary;
    /**
     * 
     *
     * @var int
     */
    protected $yahooSalary;
    /**
     * 
     *
     * @var int
     */
    protected $fantasyDataSalary;
    /**
     * 
     *
     * @var int
     */
    protected $fantasyDraftSalary;
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
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * 
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date) : self
    {
        $this->date = $date;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShortName() : string
    {
        return $this->shortName;
    }
    /**
     * 
     *
     * @param string $shortName
     *
     * @return self
     */
    public function setShortName(string $shortName) : self
    {
        $this->shortName = $shortName;
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
     * @return int
     */
    public function getSalary() : int
    {
        return $this->salary;
    }
    /**
     * 
     *
     * @param int $salary
     *
     * @return self
     */
    public function setSalary(int $salary) : self
    {
        $this->salary = $salary;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getLastGameFantasyPoints() : float
    {
        return $this->lastGameFantasyPoints;
    }
    /**
     * 
     *
     * @param float $lastGameFantasyPoints
     *
     * @return self
     */
    public function setLastGameFantasyPoints(float $lastGameFantasyPoints) : self
    {
        $this->lastGameFantasyPoints = $lastGameFantasyPoints;
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
    public function getOpponentRank() : int
    {
        return $this->opponentRank;
    }
    /**
     * 
     *
     * @param int $opponentRank
     *
     * @return self
     */
    public function setOpponentRank(int $opponentRank) : self
    {
        $this->opponentRank = $opponentRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentPositionRank() : int
    {
        return $this->opponentPositionRank;
    }
    /**
     * 
     *
     * @param int $opponentPositionRank
     *
     * @return self
     */
    public function setOpponentPositionRank(int $opponentPositionRank) : self
    {
        $this->opponentPositionRank = $opponentPositionRank;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatusCode() : string
    {
        return $this->statusCode;
    }
    /**
     * 
     *
     * @param string $statusCode
     *
     * @return self
     */
    public function setStatusCode(string $statusCode) : self
    {
        $this->statusCode = $statusCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatusColor() : string
    {
        return $this->statusColor;
    }
    /**
     * 
     *
     * @param string $statusColor
     *
     * @return self
     */
    public function setStatusColor(string $statusColor) : self
    {
        $this->statusColor = $statusColor;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFanDuelSalary() : int
    {
        return $this->fanDuelSalary;
    }
    /**
     * 
     *
     * @param int $fanDuelSalary
     *
     * @return self
     */
    public function setFanDuelSalary(int $fanDuelSalary) : self
    {
        $this->fanDuelSalary = $fanDuelSalary;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDraftKingsSalary() : int
    {
        return $this->draftKingsSalary;
    }
    /**
     * 
     *
     * @param int $draftKingsSalary
     *
     * @return self
     */
    public function setDraftKingsSalary(int $draftKingsSalary) : self
    {
        $this->draftKingsSalary = $draftKingsSalary;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getYahooSalary() : int
    {
        return $this->yahooSalary;
    }
    /**
     * 
     *
     * @param int $yahooSalary
     *
     * @return self
     */
    public function setYahooSalary(int $yahooSalary) : self
    {
        $this->yahooSalary = $yahooSalary;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFantasyDataSalary() : int
    {
        return $this->fantasyDataSalary;
    }
    /**
     * 
     *
     * @param int $fantasyDataSalary
     *
     * @return self
     */
    public function setFantasyDataSalary(int $fantasyDataSalary) : self
    {
        $this->fantasyDataSalary = $fantasyDataSalary;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFantasyDraftSalary() : int
    {
        return $this->fantasyDraftSalary;
    }
    /**
     * 
     *
     * @param int $fantasyDraftSalary
     *
     * @return self
     */
    public function setFantasyDraftSalary(int $fantasyDraftSalary) : self
    {
        $this->fantasyDraftSalary = $fantasyDraftSalary;
        return $this;
    }
}