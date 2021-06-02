<?php

namespace Sportsdata\API\NFL\Model;

class Standing
{
    /**
     * 
     *
     * @var int
     */
    protected $seasonType;
    /**
     * 
     *
     * @var int
     */
    protected $season;
    /**
     * 
     *
     * @var string
     */
    protected $conference;
    /**
     * 
     *
     * @var string
     */
    protected $division;
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
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $wins;
    /**
     * 
     *
     * @var int
     */
    protected $losses;
    /**
     * 
     *
     * @var int
     */
    protected $ties;
    /**
     * 
     *
     * @var float
     */
    protected $percentage;
    /**
     * 
     *
     * @var int
     */
    protected $pointsFor;
    /**
     * 
     *
     * @var int
     */
    protected $pointsAgainst;
    /**
     * 
     *
     * @var int
     */
    protected $netPoints;
    /**
     * 
     *
     * @var int
     */
    protected $touchdowns;
    /**
     * 
     *
     * @var int
     */
    protected $divisionWins;
    /**
     * 
     *
     * @var int
     */
    protected $divisionLosses;
    /**
     * 
     *
     * @var int
     */
    protected $conferenceWins;
    /**
     * 
     *
     * @var int
     */
    protected $conferenceLosses;
    /**
     * 
     *
     * @var int
     */
    protected $teamID;
    /**
     * 
     *
     * @var int
     */
    protected $divisionTies;
    /**
     * 
     *
     * @var int
     */
    protected $conferenceTies;
    /**
     * 
     *
     * @var int
     */
    protected $globalTeamID;
    /**
     * 
     *
     * @var int
     */
    protected $divisionRank;
    /**
     * 
     *
     * @var int
     */
    protected $conferenceRank;
    /**
     * 
     *
     * @return int
     */
    public function getSeasonType() : int
    {
        return $this->seasonType;
    }
    /**
     * 
     *
     * @param int $seasonType
     *
     * @return self
     */
    public function setSeasonType(int $seasonType) : self
    {
        $this->seasonType = $seasonType;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSeason() : int
    {
        return $this->season;
    }
    /**
     * 
     *
     * @param int $season
     *
     * @return self
     */
    public function setSeason(int $season) : self
    {
        $this->season = $season;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConference() : string
    {
        return $this->conference;
    }
    /**
     * 
     *
     * @param string $conference
     *
     * @return self
     */
    public function setConference(string $conference) : self
    {
        $this->conference = $conference;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDivision() : string
    {
        return $this->division;
    }
    /**
     * 
     *
     * @param string $division
     *
     * @return self
     */
    public function setDivision(string $division) : self
    {
        $this->division = $division;
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
    public function getWins() : int
    {
        return $this->wins;
    }
    /**
     * 
     *
     * @param int $wins
     *
     * @return self
     */
    public function setWins(int $wins) : self
    {
        $this->wins = $wins;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLosses() : int
    {
        return $this->losses;
    }
    /**
     * 
     *
     * @param int $losses
     *
     * @return self
     */
    public function setLosses(int $losses) : self
    {
        $this->losses = $losses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTies() : int
    {
        return $this->ties;
    }
    /**
     * 
     *
     * @param int $ties
     *
     * @return self
     */
    public function setTies(int $ties) : self
    {
        $this->ties = $ties;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPercentage() : float
    {
        return $this->percentage;
    }
    /**
     * 
     *
     * @param float $percentage
     *
     * @return self
     */
    public function setPercentage(float $percentage) : self
    {
        $this->percentage = $percentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPointsFor() : int
    {
        return $this->pointsFor;
    }
    /**
     * 
     *
     * @param int $pointsFor
     *
     * @return self
     */
    public function setPointsFor(int $pointsFor) : self
    {
        $this->pointsFor = $pointsFor;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPointsAgainst() : int
    {
        return $this->pointsAgainst;
    }
    /**
     * 
     *
     * @param int $pointsAgainst
     *
     * @return self
     */
    public function setPointsAgainst(int $pointsAgainst) : self
    {
        $this->pointsAgainst = $pointsAgainst;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNetPoints() : int
    {
        return $this->netPoints;
    }
    /**
     * 
     *
     * @param int $netPoints
     *
     * @return self
     */
    public function setNetPoints(int $netPoints) : self
    {
        $this->netPoints = $netPoints;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTouchdowns() : int
    {
        return $this->touchdowns;
    }
    /**
     * 
     *
     * @param int $touchdowns
     *
     * @return self
     */
    public function setTouchdowns(int $touchdowns) : self
    {
        $this->touchdowns = $touchdowns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDivisionWins() : int
    {
        return $this->divisionWins;
    }
    /**
     * 
     *
     * @param int $divisionWins
     *
     * @return self
     */
    public function setDivisionWins(int $divisionWins) : self
    {
        $this->divisionWins = $divisionWins;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDivisionLosses() : int
    {
        return $this->divisionLosses;
    }
    /**
     * 
     *
     * @param int $divisionLosses
     *
     * @return self
     */
    public function setDivisionLosses(int $divisionLosses) : self
    {
        $this->divisionLosses = $divisionLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getConferenceWins() : int
    {
        return $this->conferenceWins;
    }
    /**
     * 
     *
     * @param int $conferenceWins
     *
     * @return self
     */
    public function setConferenceWins(int $conferenceWins) : self
    {
        $this->conferenceWins = $conferenceWins;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getConferenceLosses() : int
    {
        return $this->conferenceLosses;
    }
    /**
     * 
     *
     * @param int $conferenceLosses
     *
     * @return self
     */
    public function setConferenceLosses(int $conferenceLosses) : self
    {
        $this->conferenceLosses = $conferenceLosses;
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
     * @return int
     */
    public function getDivisionTies() : int
    {
        return $this->divisionTies;
    }
    /**
     * 
     *
     * @param int $divisionTies
     *
     * @return self
     */
    public function setDivisionTies(int $divisionTies) : self
    {
        $this->divisionTies = $divisionTies;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getConferenceTies() : int
    {
        return $this->conferenceTies;
    }
    /**
     * 
     *
     * @param int $conferenceTies
     *
     * @return self
     */
    public function setConferenceTies(int $conferenceTies) : self
    {
        $this->conferenceTies = $conferenceTies;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGlobalTeamID() : int
    {
        return $this->globalTeamID;
    }
    /**
     * 
     *
     * @param int $globalTeamID
     *
     * @return self
     */
    public function setGlobalTeamID(int $globalTeamID) : self
    {
        $this->globalTeamID = $globalTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDivisionRank() : int
    {
        return $this->divisionRank;
    }
    /**
     * 
     *
     * @param int $divisionRank
     *
     * @return self
     */
    public function setDivisionRank(int $divisionRank) : self
    {
        $this->divisionRank = $divisionRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getConferenceRank() : int
    {
        return $this->conferenceRank;
    }
    /**
     * 
     *
     * @param int $conferenceRank
     *
     * @return self
     */
    public function setConferenceRank(int $conferenceRank) : self
    {
        $this->conferenceRank = $conferenceRank;
        return $this;
    }
}