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
     * @var string|null
     */
    protected $date;
    /**
     * 
     *
     * @var string|null
     */
    protected $shortName;
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
     * @var float|null
     */
    protected $lastGameFantasyPoints;
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
    protected $opponentRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $opponentPositionRank;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var string|null
     */
    protected $statusCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $statusColor;
    /**
     * 
     *
     * @var int|null
     */
    protected $fanDuelSalary;
    /**
     * 
     *
     * @var int|null
     */
    protected $draftKingsSalary;
    /**
     * 
     *
     * @var int|null
     */
    protected $yahooSalary;
    /**
     * 
     *
     * @var int|null
     */
    protected $fantasyDataSalary;
    /**
     * 
     *
     * @var int|null
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
     * @return string|null
     */
    public function getDate() : ?string
    {
        return $this->date;
    }
    /**
     * 
     *
     * @param string|null $date
     *
     * @return self
     */
    public function setDate(?string $date) : self
    {
        $this->date = $date;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShortName() : ?string
    {
        return $this->shortName;
    }
    /**
     * 
     *
     * @param string|null $shortName
     *
     * @return self
     */
    public function setShortName(?string $shortName) : self
    {
        $this->shortName = $shortName;
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
     * @return float|null
     */
    public function getLastGameFantasyPoints() : ?float
    {
        return $this->lastGameFantasyPoints;
    }
    /**
     * 
     *
     * @param float|null $lastGameFantasyPoints
     *
     * @return self
     */
    public function setLastGameFantasyPoints(?float $lastGameFantasyPoints) : self
    {
        $this->lastGameFantasyPoints = $lastGameFantasyPoints;
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
    public function getOpponentRank() : ?int
    {
        return $this->opponentRank;
    }
    /**
     * 
     *
     * @param int|null $opponentRank
     *
     * @return self
     */
    public function setOpponentRank(?int $opponentRank) : self
    {
        $this->opponentRank = $opponentRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpponentPositionRank() : ?int
    {
        return $this->opponentPositionRank;
    }
    /**
     * 
     *
     * @param int|null $opponentPositionRank
     *
     * @return self
     */
    public function setOpponentPositionRank(?int $opponentPositionRank) : self
    {
        $this->opponentPositionRank = $opponentPositionRank;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatusCode() : ?string
    {
        return $this->statusCode;
    }
    /**
     * 
     *
     * @param string|null $statusCode
     *
     * @return self
     */
    public function setStatusCode(?string $statusCode) : self
    {
        $this->statusCode = $statusCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatusColor() : ?string
    {
        return $this->statusColor;
    }
    /**
     * 
     *
     * @param string|null $statusColor
     *
     * @return self
     */
    public function setStatusColor(?string $statusColor) : self
    {
        $this->statusColor = $statusColor;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFanDuelSalary() : ?int
    {
        return $this->fanDuelSalary;
    }
    /**
     * 
     *
     * @param int|null $fanDuelSalary
     *
     * @return self
     */
    public function setFanDuelSalary(?int $fanDuelSalary) : self
    {
        $this->fanDuelSalary = $fanDuelSalary;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDraftKingsSalary() : ?int
    {
        return $this->draftKingsSalary;
    }
    /**
     * 
     *
     * @param int|null $draftKingsSalary
     *
     * @return self
     */
    public function setDraftKingsSalary(?int $draftKingsSalary) : self
    {
        $this->draftKingsSalary = $draftKingsSalary;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getYahooSalary() : ?int
    {
        return $this->yahooSalary;
    }
    /**
     * 
     *
     * @param int|null $yahooSalary
     *
     * @return self
     */
    public function setYahooSalary(?int $yahooSalary) : self
    {
        $this->yahooSalary = $yahooSalary;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFantasyDataSalary() : ?int
    {
        return $this->fantasyDataSalary;
    }
    /**
     * 
     *
     * @param int|null $fantasyDataSalary
     *
     * @return self
     */
    public function setFantasyDataSalary(?int $fantasyDataSalary) : self
    {
        $this->fantasyDataSalary = $fantasyDataSalary;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFantasyDraftSalary() : ?int
    {
        return $this->fantasyDraftSalary;
    }
    /**
     * 
     *
     * @param int|null $fantasyDraftSalary
     *
     * @return self
     */
    public function setFantasyDraftSalary(?int $fantasyDraftSalary) : self
    {
        $this->fantasyDraftSalary = $fantasyDraftSalary;
        return $this;
    }
}