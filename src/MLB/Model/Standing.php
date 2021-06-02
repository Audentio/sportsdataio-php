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
    protected $league;
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
     * @var float
     */
    protected $gamesBehind;
    /**
     * 
     *
     * @var int
     */
    protected $lastTenGamesWins;
    /**
     * 
     *
     * @var int
     */
    protected $lastTenGamesLosses;
    /**
     * 
     *
     * @var string
     */
    protected $streak;
    /**
     * 
     *
     * @var int
     */
    protected $leagueRank;
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
    protected $wildCardRank;
    /**
     * 
     *
     * @var float
     */
    protected $wildCardGamesBehind;
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
    protected $dayWins;
    /**
     * 
     *
     * @var int
     */
    protected $dayLosses;
    /**
     * 
     *
     * @var int
     */
    protected $nightWins;
    /**
     * 
     *
     * @var int
     */
    protected $nightLosses;
    /**
     * 
     *
     * @var int
     */
    protected $runsScored;
    /**
     * 
     *
     * @var int
     */
    protected $runsAgainst;
    /**
     * 
     *
     * @var int
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
    public function getLeague() : string
    {
        return $this->league;
    }
    /**
     * 
     *
     * @param string $league
     *
     * @return self
     */
    public function setLeague(string $league) : self
    {
        $this->league = $league;
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
     * @return float
     */
    public function getGamesBehind() : float
    {
        return $this->gamesBehind;
    }
    /**
     * 
     *
     * @param float $gamesBehind
     *
     * @return self
     */
    public function setGamesBehind(float $gamesBehind) : self
    {
        $this->gamesBehind = $gamesBehind;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLastTenGamesWins() : int
    {
        return $this->lastTenGamesWins;
    }
    /**
     * 
     *
     * @param int $lastTenGamesWins
     *
     * @return self
     */
    public function setLastTenGamesWins(int $lastTenGamesWins) : self
    {
        $this->lastTenGamesWins = $lastTenGamesWins;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLastTenGamesLosses() : int
    {
        return $this->lastTenGamesLosses;
    }
    /**
     * 
     *
     * @param int $lastTenGamesLosses
     *
     * @return self
     */
    public function setLastTenGamesLosses(int $lastTenGamesLosses) : self
    {
        $this->lastTenGamesLosses = $lastTenGamesLosses;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStreak() : string
    {
        return $this->streak;
    }
    /**
     * 
     *
     * @param string $streak
     *
     * @return self
     */
    public function setStreak(string $streak) : self
    {
        $this->streak = $streak;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLeagueRank() : int
    {
        return $this->leagueRank;
    }
    /**
     * 
     *
     * @param int $leagueRank
     *
     * @return self
     */
    public function setLeagueRank(int $leagueRank) : self
    {
        $this->leagueRank = $leagueRank;
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
    public function getWildCardRank() : int
    {
        return $this->wildCardRank;
    }
    /**
     * 
     *
     * @param int $wildCardRank
     *
     * @return self
     */
    public function setWildCardRank(int $wildCardRank) : self
    {
        $this->wildCardRank = $wildCardRank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWildCardGamesBehind() : float
    {
        return $this->wildCardGamesBehind;
    }
    /**
     * 
     *
     * @param float $wildCardGamesBehind
     *
     * @return self
     */
    public function setWildCardGamesBehind(float $wildCardGamesBehind) : self
    {
        $this->wildCardGamesBehind = $wildCardGamesBehind;
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
    public function getDayWins() : int
    {
        return $this->dayWins;
    }
    /**
     * 
     *
     * @param int $dayWins
     *
     * @return self
     */
    public function setDayWins(int $dayWins) : self
    {
        $this->dayWins = $dayWins;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDayLosses() : int
    {
        return $this->dayLosses;
    }
    /**
     * 
     *
     * @param int $dayLosses
     *
     * @return self
     */
    public function setDayLosses(int $dayLosses) : self
    {
        $this->dayLosses = $dayLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNightWins() : int
    {
        return $this->nightWins;
    }
    /**
     * 
     *
     * @param int $nightWins
     *
     * @return self
     */
    public function setNightWins(int $nightWins) : self
    {
        $this->nightWins = $nightWins;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNightLosses() : int
    {
        return $this->nightLosses;
    }
    /**
     * 
     *
     * @param int $nightLosses
     *
     * @return self
     */
    public function setNightLosses(int $nightLosses) : self
    {
        $this->nightLosses = $nightLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRunsScored() : int
    {
        return $this->runsScored;
    }
    /**
     * 
     *
     * @param int $runsScored
     *
     * @return self
     */
    public function setRunsScored(int $runsScored) : self
    {
        $this->runsScored = $runsScored;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRunsAgainst() : int
    {
        return $this->runsAgainst;
    }
    /**
     * 
     *
     * @param int $runsAgainst
     *
     * @return self
     */
    public function setRunsAgainst(int $runsAgainst) : self
    {
        $this->runsAgainst = $runsAgainst;
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
}