<?php

namespace Sportsdata\API\NFL\Model;

class Team
{
    /**
     * 
     *
     * @var string
     */
    protected $key;
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
    protected $playerID;
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
     * @var string
     */
    protected $fullName;
    /**
     * 
     *
     * @var int
     */
    protected $stadiumID;
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
     * @var string
     */
    protected $headCoach;
    /**
     * 
     *
     * @var string
     */
    protected $offensiveCoordinator;
    /**
     * 
     *
     * @var string
     */
    protected $defensiveCoordinator;
    /**
     * 
     *
     * @var string
     */
    protected $specialTeamsCoach;
    /**
     * 
     *
     * @var string
     */
    protected $offensiveScheme;
    /**
     * 
     *
     * @var string
     */
    protected $defensiveScheme;
    /**
     * 
     *
     * @var int
     */
    protected $upcomingSalary;
    /**
     * 
     *
     * @var string
     */
    protected $upcomingOpponent;
    /**
     * 
     *
     * @var int
     */
    protected $upcomingOpponentRank;
    /**
     * 
     *
     * @var int
     */
    protected $upcomingOpponentPositionRank;
    /**
     * 
     *
     * @var int
     */
    protected $upcomingFanDuelSalary;
    /**
     * 
     *
     * @var int
     */
    protected $upcomingDraftKingsSalary;
    /**
     * 
     *
     * @var int
     */
    protected $upcomingYahooSalary;
    /**
     * 
     *
     * @var string
     */
    protected $primaryColor;
    /**
     * 
     *
     * @var string
     */
    protected $secondaryColor;
    /**
     * 
     *
     * @var string
     */
    protected $tertiaryColor;
    /**
     * 
     *
     * @var string
     */
    protected $quaternaryColor;
    /**
     * 
     *
     * @var string
     */
    protected $wikipediaLogoUrl;
    /**
     * 
     *
     * @var string
     */
    protected $wikipediaWordMarkUrl;
    /**
     * 
     *
     * @var int
     */
    protected $globalTeamID;
    /**
     * 
     *
     * @var string
     */
    protected $draftKingsName;
    /**
     * 
     *
     * @var int
     */
    protected $draftKingsPlayerID;
    /**
     * 
     *
     * @var string
     */
    protected $fanDuelName;
    /**
     * 
     *
     * @var int
     */
    protected $fanDuelPlayerID;
    /**
     * 
     *
     * @var string
     */
    protected $fantasyDraftName;
    /**
     * 
     *
     * @var int
     */
    protected $fantasyDraftPlayerID;
    /**
     * 
     *
     * @var string
     */
    protected $yahooName;
    /**
     * 
     *
     * @var int
     */
    protected $yahooPlayerID;
    /**
     * 
     *
     * @var Stadium
     */
    protected $stadiumDetails;
    /**
     * 
     *
     * @var float
     */
    protected $averageDraftPosition2QB;
    /**
     * 
     *
     * @var float
     */
    protected $averageDraftPositionDynasty;
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
     * @return string
     */
    public function getFullName() : string
    {
        return $this->fullName;
    }
    /**
     * 
     *
     * @param string $fullName
     *
     * @return self
     */
    public function setFullName(string $fullName) : self
    {
        $this->fullName = $fullName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStadiumID() : int
    {
        return $this->stadiumID;
    }
    /**
     * 
     *
     * @param int $stadiumID
     *
     * @return self
     */
    public function setStadiumID(int $stadiumID) : self
    {
        $this->stadiumID = $stadiumID;
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
     * @return string
     */
    public function getHeadCoach() : string
    {
        return $this->headCoach;
    }
    /**
     * 
     *
     * @param string $headCoach
     *
     * @return self
     */
    public function setHeadCoach(string $headCoach) : self
    {
        $this->headCoach = $headCoach;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOffensiveCoordinator() : string
    {
        return $this->offensiveCoordinator;
    }
    /**
     * 
     *
     * @param string $offensiveCoordinator
     *
     * @return self
     */
    public function setOffensiveCoordinator(string $offensiveCoordinator) : self
    {
        $this->offensiveCoordinator = $offensiveCoordinator;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDefensiveCoordinator() : string
    {
        return $this->defensiveCoordinator;
    }
    /**
     * 
     *
     * @param string $defensiveCoordinator
     *
     * @return self
     */
    public function setDefensiveCoordinator(string $defensiveCoordinator) : self
    {
        $this->defensiveCoordinator = $defensiveCoordinator;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSpecialTeamsCoach() : string
    {
        return $this->specialTeamsCoach;
    }
    /**
     * 
     *
     * @param string $specialTeamsCoach
     *
     * @return self
     */
    public function setSpecialTeamsCoach(string $specialTeamsCoach) : self
    {
        $this->specialTeamsCoach = $specialTeamsCoach;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOffensiveScheme() : string
    {
        return $this->offensiveScheme;
    }
    /**
     * 
     *
     * @param string $offensiveScheme
     *
     * @return self
     */
    public function setOffensiveScheme(string $offensiveScheme) : self
    {
        $this->offensiveScheme = $offensiveScheme;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDefensiveScheme() : string
    {
        return $this->defensiveScheme;
    }
    /**
     * 
     *
     * @param string $defensiveScheme
     *
     * @return self
     */
    public function setDefensiveScheme(string $defensiveScheme) : self
    {
        $this->defensiveScheme = $defensiveScheme;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUpcomingSalary() : int
    {
        return $this->upcomingSalary;
    }
    /**
     * 
     *
     * @param int $upcomingSalary
     *
     * @return self
     */
    public function setUpcomingSalary(int $upcomingSalary) : self
    {
        $this->upcomingSalary = $upcomingSalary;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUpcomingOpponent() : string
    {
        return $this->upcomingOpponent;
    }
    /**
     * 
     *
     * @param string $upcomingOpponent
     *
     * @return self
     */
    public function setUpcomingOpponent(string $upcomingOpponent) : self
    {
        $this->upcomingOpponent = $upcomingOpponent;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUpcomingOpponentRank() : int
    {
        return $this->upcomingOpponentRank;
    }
    /**
     * 
     *
     * @param int $upcomingOpponentRank
     *
     * @return self
     */
    public function setUpcomingOpponentRank(int $upcomingOpponentRank) : self
    {
        $this->upcomingOpponentRank = $upcomingOpponentRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUpcomingOpponentPositionRank() : int
    {
        return $this->upcomingOpponentPositionRank;
    }
    /**
     * 
     *
     * @param int $upcomingOpponentPositionRank
     *
     * @return self
     */
    public function setUpcomingOpponentPositionRank(int $upcomingOpponentPositionRank) : self
    {
        $this->upcomingOpponentPositionRank = $upcomingOpponentPositionRank;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUpcomingFanDuelSalary() : int
    {
        return $this->upcomingFanDuelSalary;
    }
    /**
     * 
     *
     * @param int $upcomingFanDuelSalary
     *
     * @return self
     */
    public function setUpcomingFanDuelSalary(int $upcomingFanDuelSalary) : self
    {
        $this->upcomingFanDuelSalary = $upcomingFanDuelSalary;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUpcomingDraftKingsSalary() : int
    {
        return $this->upcomingDraftKingsSalary;
    }
    /**
     * 
     *
     * @param int $upcomingDraftKingsSalary
     *
     * @return self
     */
    public function setUpcomingDraftKingsSalary(int $upcomingDraftKingsSalary) : self
    {
        $this->upcomingDraftKingsSalary = $upcomingDraftKingsSalary;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUpcomingYahooSalary() : int
    {
        return $this->upcomingYahooSalary;
    }
    /**
     * 
     *
     * @param int $upcomingYahooSalary
     *
     * @return self
     */
    public function setUpcomingYahooSalary(int $upcomingYahooSalary) : self
    {
        $this->upcomingYahooSalary = $upcomingYahooSalary;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPrimaryColor() : string
    {
        return $this->primaryColor;
    }
    /**
     * 
     *
     * @param string $primaryColor
     *
     * @return self
     */
    public function setPrimaryColor(string $primaryColor) : self
    {
        $this->primaryColor = $primaryColor;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSecondaryColor() : string
    {
        return $this->secondaryColor;
    }
    /**
     * 
     *
     * @param string $secondaryColor
     *
     * @return self
     */
    public function setSecondaryColor(string $secondaryColor) : self
    {
        $this->secondaryColor = $secondaryColor;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTertiaryColor() : string
    {
        return $this->tertiaryColor;
    }
    /**
     * 
     *
     * @param string $tertiaryColor
     *
     * @return self
     */
    public function setTertiaryColor(string $tertiaryColor) : self
    {
        $this->tertiaryColor = $tertiaryColor;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getQuaternaryColor() : string
    {
        return $this->quaternaryColor;
    }
    /**
     * 
     *
     * @param string $quaternaryColor
     *
     * @return self
     */
    public function setQuaternaryColor(string $quaternaryColor) : self
    {
        $this->quaternaryColor = $quaternaryColor;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWikipediaLogoUrl() : string
    {
        return $this->wikipediaLogoUrl;
    }
    /**
     * 
     *
     * @param string $wikipediaLogoUrl
     *
     * @return self
     */
    public function setWikipediaLogoUrl(string $wikipediaLogoUrl) : self
    {
        $this->wikipediaLogoUrl = $wikipediaLogoUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWikipediaWordMarkUrl() : string
    {
        return $this->wikipediaWordMarkUrl;
    }
    /**
     * 
     *
     * @param string $wikipediaWordMarkUrl
     *
     * @return self
     */
    public function setWikipediaWordMarkUrl(string $wikipediaWordMarkUrl) : self
    {
        $this->wikipediaWordMarkUrl = $wikipediaWordMarkUrl;
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
     * @return string
     */
    public function getDraftKingsName() : string
    {
        return $this->draftKingsName;
    }
    /**
     * 
     *
     * @param string $draftKingsName
     *
     * @return self
     */
    public function setDraftKingsName(string $draftKingsName) : self
    {
        $this->draftKingsName = $draftKingsName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDraftKingsPlayerID() : int
    {
        return $this->draftKingsPlayerID;
    }
    /**
     * 
     *
     * @param int $draftKingsPlayerID
     *
     * @return self
     */
    public function setDraftKingsPlayerID(int $draftKingsPlayerID) : self
    {
        $this->draftKingsPlayerID = $draftKingsPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFanDuelName() : string
    {
        return $this->fanDuelName;
    }
    /**
     * 
     *
     * @param string $fanDuelName
     *
     * @return self
     */
    public function setFanDuelName(string $fanDuelName) : self
    {
        $this->fanDuelName = $fanDuelName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFanDuelPlayerID() : int
    {
        return $this->fanDuelPlayerID;
    }
    /**
     * 
     *
     * @param int $fanDuelPlayerID
     *
     * @return self
     */
    public function setFanDuelPlayerID(int $fanDuelPlayerID) : self
    {
        $this->fanDuelPlayerID = $fanDuelPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFantasyDraftName() : string
    {
        return $this->fantasyDraftName;
    }
    /**
     * 
     *
     * @param string $fantasyDraftName
     *
     * @return self
     */
    public function setFantasyDraftName(string $fantasyDraftName) : self
    {
        $this->fantasyDraftName = $fantasyDraftName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFantasyDraftPlayerID() : int
    {
        return $this->fantasyDraftPlayerID;
    }
    /**
     * 
     *
     * @param int $fantasyDraftPlayerID
     *
     * @return self
     */
    public function setFantasyDraftPlayerID(int $fantasyDraftPlayerID) : self
    {
        $this->fantasyDraftPlayerID = $fantasyDraftPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getYahooName() : string
    {
        return $this->yahooName;
    }
    /**
     * 
     *
     * @param string $yahooName
     *
     * @return self
     */
    public function setYahooName(string $yahooName) : self
    {
        $this->yahooName = $yahooName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getYahooPlayerID() : int
    {
        return $this->yahooPlayerID;
    }
    /**
     * 
     *
     * @param int $yahooPlayerID
     *
     * @return self
     */
    public function setYahooPlayerID(int $yahooPlayerID) : self
    {
        $this->yahooPlayerID = $yahooPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return Stadium
     */
    public function getStadiumDetails() : Stadium
    {
        return $this->stadiumDetails;
    }
    /**
     * 
     *
     * @param Stadium $stadiumDetails
     *
     * @return self
     */
    public function setStadiumDetails(Stadium $stadiumDetails) : self
    {
        $this->stadiumDetails = $stadiumDetails;
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
}