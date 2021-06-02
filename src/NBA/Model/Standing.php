<?php

namespace Sportsdata\API\NBA\Model;

class Standing
{
    /**
     * 
     *
     * @var int
     */
    protected $season;
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
    protected $teamID;
    /**
     * 
     *
     * @var string
     */
    protected $key;
    /**
     * 
     *
     * @var string
     */
    protected $city;
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
     * @var float
     */
    protected $percentage;
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
    protected $homeWins;
    /**
     * 
     *
     * @var int
     */
    protected $homeLosses;
    /**
     * 
     *
     * @var int
     */
    protected $awayWins;
    /**
     * 
     *
     * @var int
     */
    protected $awayLosses;
    /**
     * 
     *
     * @var int
     */
    protected $lastTenWins;
    /**
     * 
     *
     * @var int
     */
    protected $lastTenLosses;
    /**
     * 
     *
     * @var float
     */
    protected $pointsPerGameFor;
    /**
     * 
     *
     * @var float
     */
    protected $pointsPerGameAgainst;
    /**
     * 
     *
     * @var int
     */
    protected $streak;
    /**
     * 
     *
     * @var float
     */
    protected $gamesBack;
    /**
     * 
     *
     * @var string
     */
    protected $streakDescription;
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
    protected $conferenceRank;
    /**
     * 
     *
     * @var int
     */
    protected $divisionRank;
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
    public function getKey() : string
    {
        return $this->key;
    }
    /**
     * 
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key) : self
    {
        $this->key = $key;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * 
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city) : self
    {
        $this->city = $city;
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
    public function getHomeWins() : int
    {
        return $this->homeWins;
    }
    /**
     * 
     *
     * @param int $homeWins
     *
     * @return self
     */
    public function setHomeWins(int $homeWins) : self
    {
        $this->homeWins = $homeWins;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeLosses() : int
    {
        return $this->homeLosses;
    }
    /**
     * 
     *
     * @param int $homeLosses
     *
     * @return self
     */
    public function setHomeLosses(int $homeLosses) : self
    {
        $this->homeLosses = $homeLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayWins() : int
    {
        return $this->awayWins;
    }
    /**
     * 
     *
     * @param int $awayWins
     *
     * @return self
     */
    public function setAwayWins(int $awayWins) : self
    {
        $this->awayWins = $awayWins;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayLosses() : int
    {
        return $this->awayLosses;
    }
    /**
     * 
     *
     * @param int $awayLosses
     *
     * @return self
     */
    public function setAwayLosses(int $awayLosses) : self
    {
        $this->awayLosses = $awayLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLastTenWins() : int
    {
        return $this->lastTenWins;
    }
    /**
     * 
     *
     * @param int $lastTenWins
     *
     * @return self
     */
    public function setLastTenWins(int $lastTenWins) : self
    {
        $this->lastTenWins = $lastTenWins;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLastTenLosses() : int
    {
        return $this->lastTenLosses;
    }
    /**
     * 
     *
     * @param int $lastTenLosses
     *
     * @return self
     */
    public function setLastTenLosses(int $lastTenLosses) : self
    {
        $this->lastTenLosses = $lastTenLosses;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPointsPerGameFor() : float
    {
        return $this->pointsPerGameFor;
    }
    /**
     * 
     *
     * @param float $pointsPerGameFor
     *
     * @return self
     */
    public function setPointsPerGameFor(float $pointsPerGameFor) : self
    {
        $this->pointsPerGameFor = $pointsPerGameFor;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPointsPerGameAgainst() : float
    {
        return $this->pointsPerGameAgainst;
    }
    /**
     * 
     *
     * @param float $pointsPerGameAgainst
     *
     * @return self
     */
    public function setPointsPerGameAgainst(float $pointsPerGameAgainst) : self
    {
        $this->pointsPerGameAgainst = $pointsPerGameAgainst;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStreak() : int
    {
        return $this->streak;
    }
    /**
     * 
     *
     * @param int $streak
     *
     * @return self
     */
    public function setStreak(int $streak) : self
    {
        $this->streak = $streak;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGamesBack() : float
    {
        return $this->gamesBack;
    }
    /**
     * 
     *
     * @param float $gamesBack
     *
     * @return self
     */
    public function setGamesBack(float $gamesBack) : self
    {
        $this->gamesBack = $gamesBack;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStreakDescription() : string
    {
        return $this->streakDescription;
    }
    /**
     * 
     *
     * @param string $streakDescription
     *
     * @return self
     */
    public function setStreakDescription(string $streakDescription) : self
    {
        $this->streakDescription = $streakDescription;
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
}