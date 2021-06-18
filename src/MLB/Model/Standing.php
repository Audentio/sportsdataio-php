<?php

namespace Sportsdata\API\MLB\Model;

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
    protected $league;
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
     * @var float|null
     */
    protected $gamesBehind;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastTenGamesWins;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastTenGamesLosses;
    /**
     * 
     *
     * @var string|null
     */
    protected $streak;
    /**
     * 
     *
     * @var int|null
     */
    protected $leagueRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $divisionRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $wildCardRank;
    /**
     * 
     *
     * @var float|null
     */
    protected $wildCardGamesBehind;
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
    protected $dayWins;
    /**
     * 
     *
     * @var int|null
     */
    protected $dayLosses;
    /**
     * 
     *
     * @var int|null
     */
    protected $nightWins;
    /**
     * 
     *
     * @var int|null
     */
    protected $nightLosses;
    /**
     * 
     *
     * @var int|null
     */
    protected $runsScored;
    /**
     * 
     *
     * @var int|null
     */
    protected $runsAgainst;
    /**
     * 
     *
     * @var int|null
     */
    protected $globalTeamID;
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
    public function getLeague() : ?string
    {
        return $this->league;
    }
    /**
     * 
     *
     * @param string|null $league
     *
     * @return self
     */
    public function setLeague(?string $league) : self
    {
        $this->league = $league;
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
     * @return float|null
     */
    public function getGamesBehind() : ?float
    {
        return $this->gamesBehind;
    }
    /**
     * 
     *
     * @param float|null $gamesBehind
     *
     * @return self
     */
    public function setGamesBehind(?float $gamesBehind) : self
    {
        $this->gamesBehind = $gamesBehind;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLastTenGamesWins() : ?int
    {
        return $this->lastTenGamesWins;
    }
    /**
     * 
     *
     * @param int|null $lastTenGamesWins
     *
     * @return self
     */
    public function setLastTenGamesWins(?int $lastTenGamesWins) : self
    {
        $this->lastTenGamesWins = $lastTenGamesWins;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLastTenGamesLosses() : ?int
    {
        return $this->lastTenGamesLosses;
    }
    /**
     * 
     *
     * @param int|null $lastTenGamesLosses
     *
     * @return self
     */
    public function setLastTenGamesLosses(?int $lastTenGamesLosses) : self
    {
        $this->lastTenGamesLosses = $lastTenGamesLosses;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStreak() : ?string
    {
        return $this->streak;
    }
    /**
     * 
     *
     * @param string|null $streak
     *
     * @return self
     */
    public function setStreak(?string $streak) : self
    {
        $this->streak = $streak;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLeagueRank() : ?int
    {
        return $this->leagueRank;
    }
    /**
     * 
     *
     * @param int|null $leagueRank
     *
     * @return self
     */
    public function setLeagueRank(?int $leagueRank) : self
    {
        $this->leagueRank = $leagueRank;
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
    /**
     * 
     *
     * @return int|null
     */
    public function getWildCardRank() : ?int
    {
        return $this->wildCardRank;
    }
    /**
     * 
     *
     * @param int|null $wildCardRank
     *
     * @return self
     */
    public function setWildCardRank(?int $wildCardRank) : self
    {
        $this->wildCardRank = $wildCardRank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getWildCardGamesBehind() : ?float
    {
        return $this->wildCardGamesBehind;
    }
    /**
     * 
     *
     * @param float|null $wildCardGamesBehind
     *
     * @return self
     */
    public function setWildCardGamesBehind(?float $wildCardGamesBehind) : self
    {
        $this->wildCardGamesBehind = $wildCardGamesBehind;
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
    public function getDayWins() : ?int
    {
        return $this->dayWins;
    }
    /**
     * 
     *
     * @param int|null $dayWins
     *
     * @return self
     */
    public function setDayWins(?int $dayWins) : self
    {
        $this->dayWins = $dayWins;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDayLosses() : ?int
    {
        return $this->dayLosses;
    }
    /**
     * 
     *
     * @param int|null $dayLosses
     *
     * @return self
     */
    public function setDayLosses(?int $dayLosses) : self
    {
        $this->dayLosses = $dayLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNightWins() : ?int
    {
        return $this->nightWins;
    }
    /**
     * 
     *
     * @param int|null $nightWins
     *
     * @return self
     */
    public function setNightWins(?int $nightWins) : self
    {
        $this->nightWins = $nightWins;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNightLosses() : ?int
    {
        return $this->nightLosses;
    }
    /**
     * 
     *
     * @param int|null $nightLosses
     *
     * @return self
     */
    public function setNightLosses(?int $nightLosses) : self
    {
        $this->nightLosses = $nightLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRunsScored() : ?int
    {
        return $this->runsScored;
    }
    /**
     * 
     *
     * @param int|null $runsScored
     *
     * @return self
     */
    public function setRunsScored(?int $runsScored) : self
    {
        $this->runsScored = $runsScored;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRunsAgainst() : ?int
    {
        return $this->runsAgainst;
    }
    /**
     * 
     *
     * @param int|null $runsAgainst
     *
     * @return self
     */
    public function setRunsAgainst(?int $runsAgainst) : self
    {
        $this->runsAgainst = $runsAgainst;
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
}