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
     * @var string|null
     */
    protected $key;
    /**
     * 
     *
     * @var string|null
     */
    protected $city;
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
    protected $conference;
    /**
     * 
     *
     * @var string|null
     */
    protected $division;
    /**
     * 
     *
     * @var int|null
     */
    protected $wins;
    /**
     * 
     *
     * @var int|null
     */
    protected $losses;
    /**
     * 
     *
     * @var float|null
     */
    protected $percentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $conferenceWins;
    /**
     * 
     *
     * @var int|null
     */
    protected $conferenceLosses;
    /**
     * 
     *
     * @var int|null
     */
    protected $divisionWins;
    /**
     * 
     *
     * @var int|null
     */
    protected $divisionLosses;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeWins;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeLosses;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayWins;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayLosses;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastTenWins;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastTenLosses;
    /**
     * 
     *
     * @var float|null
     */
    protected $pointsPerGameFor;
    /**
     * 
     *
     * @var float|null
     */
    protected $pointsPerGameAgainst;
    /**
     * 
     *
     * @var int|null
     */
    protected $streak;
    /**
     * 
     *
     * @var float|null
     */
    protected $gamesBack;
    /**
     * 
     *
     * @var string|null
     */
    protected $streakDescription;
    /**
     * 
     *
     * @var int|null
     */
    protected $globalTeamID;
    /**
     * 
     *
     * @var int|null
     */
    protected $conferenceRank;
    /**
     * 
     *
     * @var int|null
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
     * @return string|null
     */
    public function getKey() : ?string
    {
        return $this->key;
    }
    /**
     * 
     *
     * @param string|null $key
     *
     * @return self
     */
    public function setKey(?string $key) : self
    {
        $this->key = $key;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * 
     *
     * @param string|null $city
     *
     * @return self
     */
    public function setCity(?string $city) : self
    {
        $this->city = $city;
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
    public function getConference() : ?string
    {
        return $this->conference;
    }
    /**
     * 
     *
     * @param string|null $conference
     *
     * @return self
     */
    public function setConference(?string $conference) : self
    {
        $this->conference = $conference;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDivision() : ?string
    {
        return $this->division;
    }
    /**
     * 
     *
     * @param string|null $division
     *
     * @return self
     */
    public function setDivision(?string $division) : self
    {
        $this->division = $division;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWins() : ?int
    {
        return $this->wins;
    }
    /**
     * 
     *
     * @param int|null $wins
     *
     * @return self
     */
    public function setWins(?int $wins) : self
    {
        $this->wins = $wins;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLosses() : ?int
    {
        return $this->losses;
    }
    /**
     * 
     *
     * @param int|null $losses
     *
     * @return self
     */
    public function setLosses(?int $losses) : self
    {
        $this->losses = $losses;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPercentage() : ?float
    {
        return $this->percentage;
    }
    /**
     * 
     *
     * @param float|null $percentage
     *
     * @return self
     */
    public function setPercentage(?float $percentage) : self
    {
        $this->percentage = $percentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getConferenceWins() : ?int
    {
        return $this->conferenceWins;
    }
    /**
     * 
     *
     * @param int|null $conferenceWins
     *
     * @return self
     */
    public function setConferenceWins(?int $conferenceWins) : self
    {
        $this->conferenceWins = $conferenceWins;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getConferenceLosses() : ?int
    {
        return $this->conferenceLosses;
    }
    /**
     * 
     *
     * @param int|null $conferenceLosses
     *
     * @return self
     */
    public function setConferenceLosses(?int $conferenceLosses) : self
    {
        $this->conferenceLosses = $conferenceLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDivisionWins() : ?int
    {
        return $this->divisionWins;
    }
    /**
     * 
     *
     * @param int|null $divisionWins
     *
     * @return self
     */
    public function setDivisionWins(?int $divisionWins) : self
    {
        $this->divisionWins = $divisionWins;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDivisionLosses() : ?int
    {
        return $this->divisionLosses;
    }
    /**
     * 
     *
     * @param int|null $divisionLosses
     *
     * @return self
     */
    public function setDivisionLosses(?int $divisionLosses) : self
    {
        $this->divisionLosses = $divisionLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeWins() : ?int
    {
        return $this->homeWins;
    }
    /**
     * 
     *
     * @param int|null $homeWins
     *
     * @return self
     */
    public function setHomeWins(?int $homeWins) : self
    {
        $this->homeWins = $homeWins;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeLosses() : ?int
    {
        return $this->homeLosses;
    }
    /**
     * 
     *
     * @param int|null $homeLosses
     *
     * @return self
     */
    public function setHomeLosses(?int $homeLosses) : self
    {
        $this->homeLosses = $homeLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayWins() : ?int
    {
        return $this->awayWins;
    }
    /**
     * 
     *
     * @param int|null $awayWins
     *
     * @return self
     */
    public function setAwayWins(?int $awayWins) : self
    {
        $this->awayWins = $awayWins;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayLosses() : ?int
    {
        return $this->awayLosses;
    }
    /**
     * 
     *
     * @param int|null $awayLosses
     *
     * @return self
     */
    public function setAwayLosses(?int $awayLosses) : self
    {
        $this->awayLosses = $awayLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLastTenWins() : ?int
    {
        return $this->lastTenWins;
    }
    /**
     * 
     *
     * @param int|null $lastTenWins
     *
     * @return self
     */
    public function setLastTenWins(?int $lastTenWins) : self
    {
        $this->lastTenWins = $lastTenWins;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLastTenLosses() : ?int
    {
        return $this->lastTenLosses;
    }
    /**
     * 
     *
     * @param int|null $lastTenLosses
     *
     * @return self
     */
    public function setLastTenLosses(?int $lastTenLosses) : self
    {
        $this->lastTenLosses = $lastTenLosses;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPointsPerGameFor() : ?float
    {
        return $this->pointsPerGameFor;
    }
    /**
     * 
     *
     * @param float|null $pointsPerGameFor
     *
     * @return self
     */
    public function setPointsPerGameFor(?float $pointsPerGameFor) : self
    {
        $this->pointsPerGameFor = $pointsPerGameFor;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPointsPerGameAgainst() : ?float
    {
        return $this->pointsPerGameAgainst;
    }
    /**
     * 
     *
     * @param float|null $pointsPerGameAgainst
     *
     * @return self
     */
    public function setPointsPerGameAgainst(?float $pointsPerGameAgainst) : self
    {
        $this->pointsPerGameAgainst = $pointsPerGameAgainst;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStreak() : ?int
    {
        return $this->streak;
    }
    /**
     * 
     *
     * @param int|null $streak
     *
     * @return self
     */
    public function setStreak(?int $streak) : self
    {
        $this->streak = $streak;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGamesBack() : ?float
    {
        return $this->gamesBack;
    }
    /**
     * 
     *
     * @param float|null $gamesBack
     *
     * @return self
     */
    public function setGamesBack(?float $gamesBack) : self
    {
        $this->gamesBack = $gamesBack;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStreakDescription() : ?string
    {
        return $this->streakDescription;
    }
    /**
     * 
     *
     * @param string|null $streakDescription
     *
     * @return self
     */
    public function setStreakDescription(?string $streakDescription) : self
    {
        $this->streakDescription = $streakDescription;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGlobalTeamID() : ?int
    {
        return $this->globalTeamID;
    }
    /**
     * 
     *
     * @param int|null $globalTeamID
     *
     * @return self
     */
    public function setGlobalTeamID(?int $globalTeamID) : self
    {
        $this->globalTeamID = $globalTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getConferenceRank() : ?int
    {
        return $this->conferenceRank;
    }
    /**
     * 
     *
     * @param int|null $conferenceRank
     *
     * @return self
     */
    public function setConferenceRank(?int $conferenceRank) : self
    {
        $this->conferenceRank = $conferenceRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDivisionRank() : ?int
    {
        return $this->divisionRank;
    }
    /**
     * 
     *
     * @param int|null $divisionRank
     *
     * @return self
     */
    public function setDivisionRank(?int $divisionRank) : self
    {
        $this->divisionRank = $divisionRank;
        return $this;
    }
}