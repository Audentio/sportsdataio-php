<?php

namespace Sportsdata\API\NFL\Model;

class Team
{
    /**
     * 
     *
     * @var string|null
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
     * @var string|null
     */
    protected $fullName;
    /**
     * 
     *
     * @var int|null
     */
    protected $stadiumID;
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
     * @var string|null
     */
    protected $headCoach;
    /**
     * 
     *
     * @var string|null
     */
    protected $offensiveCoordinator;
    /**
     * 
     *
     * @var string|null
     */
    protected $defensiveCoordinator;
    /**
     * 
     *
     * @var string|null
     */
    protected $specialTeamsCoach;
    /**
     * 
     *
     * @var string|null
     */
    protected $offensiveScheme;
    /**
     * 
     *
     * @var string|null
     */
    protected $defensiveScheme;
    /**
     * 
     *
     * @var int|null
     */
    protected $upcomingSalary;
    /**
     * 
     *
     * @var string|null
     */
    protected $upcomingOpponent;
    /**
     * 
     *
     * @var int|null
     */
    protected $upcomingOpponentRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $upcomingOpponentPositionRank;
    /**
     * 
     *
     * @var int|null
     */
    protected $upcomingFanDuelSalary;
    /**
     * 
     *
     * @var int|null
     */
    protected $upcomingDraftKingsSalary;
    /**
     * 
     *
     * @var int|null
     */
    protected $upcomingYahooSalary;
    /**
     * 
     *
     * @var string|null
     */
    protected $primaryColor;
    /**
     * 
     *
     * @var string|null
     */
    protected $secondaryColor;
    /**
     * 
     *
     * @var string|null
     */
    protected $tertiaryColor;
    /**
     * 
     *
     * @var string|null
     */
    protected $quaternaryColor;
    /**
     * 
     *
     * @var string|null
     */
    protected $wikipediaLogoUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $wikipediaWordMarkUrl;
    /**
     * 
     *
     * @var int|null
     */
    protected $globalTeamID;
    /**
     * 
     *
     * @var string|null
     */
    protected $draftKingsName;
    /**
     * 
     *
     * @var int|null
     */
    protected $draftKingsPlayerID;
    /**
     * 
     *
     * @var string|null
     */
    protected $fanDuelName;
    /**
     * 
     *
     * @var int|null
     */
    protected $fanDuelPlayerID;
    /**
     * 
     *
     * @var string|null
     */
    protected $fantasyDraftName;
    /**
     * 
     *
     * @var int|null
     */
    protected $fantasyDraftPlayerID;
    /**
     * 
     *
     * @var string|null
     */
    protected $yahooName;
    /**
     * 
     *
     * @var int|null
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
     * @var float|null
     */
    protected $averageDraftPosition2QB;
    /**
     * 
     *
     * @var float|null
     */
    protected $averageDraftPositionDynasty;
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
     * @return string|null
     */
    public function getFullName() : ?string
    {
        return $this->fullName;
    }
    /**
     * 
     *
     * @param string|null $fullName
     *
     * @return self
     */
    public function setFullName(?string $fullName) : self
    {
        $this->fullName = $fullName;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStadiumID() : ?int
    {
        return $this->stadiumID;
    }
    /**
     * 
     *
     * @param int|null $stadiumID
     *
     * @return self
     */
    public function setStadiumID(?int $stadiumID) : self
    {
        $this->stadiumID = $stadiumID;
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
     * @return string|null
     */
    public function getHeadCoach() : ?string
    {
        return $this->headCoach;
    }
    /**
     * 
     *
     * @param string|null $headCoach
     *
     * @return self
     */
    public function setHeadCoach(?string $headCoach) : self
    {
        $this->headCoach = $headCoach;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOffensiveCoordinator() : ?string
    {
        return $this->offensiveCoordinator;
    }
    /**
     * 
     *
     * @param string|null $offensiveCoordinator
     *
     * @return self
     */
    public function setOffensiveCoordinator(?string $offensiveCoordinator) : self
    {
        $this->offensiveCoordinator = $offensiveCoordinator;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDefensiveCoordinator() : ?string
    {
        return $this->defensiveCoordinator;
    }
    /**
     * 
     *
     * @param string|null $defensiveCoordinator
     *
     * @return self
     */
    public function setDefensiveCoordinator(?string $defensiveCoordinator) : self
    {
        $this->defensiveCoordinator = $defensiveCoordinator;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSpecialTeamsCoach() : ?string
    {
        return $this->specialTeamsCoach;
    }
    /**
     * 
     *
     * @param string|null $specialTeamsCoach
     *
     * @return self
     */
    public function setSpecialTeamsCoach(?string $specialTeamsCoach) : self
    {
        $this->specialTeamsCoach = $specialTeamsCoach;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOffensiveScheme() : ?string
    {
        return $this->offensiveScheme;
    }
    /**
     * 
     *
     * @param string|null $offensiveScheme
     *
     * @return self
     */
    public function setOffensiveScheme(?string $offensiveScheme) : self
    {
        $this->offensiveScheme = $offensiveScheme;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDefensiveScheme() : ?string
    {
        return $this->defensiveScheme;
    }
    /**
     * 
     *
     * @param string|null $defensiveScheme
     *
     * @return self
     */
    public function setDefensiveScheme(?string $defensiveScheme) : self
    {
        $this->defensiveScheme = $defensiveScheme;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUpcomingSalary() : ?int
    {
        return $this->upcomingSalary;
    }
    /**
     * 
     *
     * @param int|null $upcomingSalary
     *
     * @return self
     */
    public function setUpcomingSalary(?int $upcomingSalary) : self
    {
        $this->upcomingSalary = $upcomingSalary;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUpcomingOpponent() : ?string
    {
        return $this->upcomingOpponent;
    }
    /**
     * 
     *
     * @param string|null $upcomingOpponent
     *
     * @return self
     */
    public function setUpcomingOpponent(?string $upcomingOpponent) : self
    {
        $this->upcomingOpponent = $upcomingOpponent;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUpcomingOpponentRank() : ?int
    {
        return $this->upcomingOpponentRank;
    }
    /**
     * 
     *
     * @param int|null $upcomingOpponentRank
     *
     * @return self
     */
    public function setUpcomingOpponentRank(?int $upcomingOpponentRank) : self
    {
        $this->upcomingOpponentRank = $upcomingOpponentRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUpcomingOpponentPositionRank() : ?int
    {
        return $this->upcomingOpponentPositionRank;
    }
    /**
     * 
     *
     * @param int|null $upcomingOpponentPositionRank
     *
     * @return self
     */
    public function setUpcomingOpponentPositionRank(?int $upcomingOpponentPositionRank) : self
    {
        $this->upcomingOpponentPositionRank = $upcomingOpponentPositionRank;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUpcomingFanDuelSalary() : ?int
    {
        return $this->upcomingFanDuelSalary;
    }
    /**
     * 
     *
     * @param int|null $upcomingFanDuelSalary
     *
     * @return self
     */
    public function setUpcomingFanDuelSalary(?int $upcomingFanDuelSalary) : self
    {
        $this->upcomingFanDuelSalary = $upcomingFanDuelSalary;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUpcomingDraftKingsSalary() : ?int
    {
        return $this->upcomingDraftKingsSalary;
    }
    /**
     * 
     *
     * @param int|null $upcomingDraftKingsSalary
     *
     * @return self
     */
    public function setUpcomingDraftKingsSalary(?int $upcomingDraftKingsSalary) : self
    {
        $this->upcomingDraftKingsSalary = $upcomingDraftKingsSalary;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUpcomingYahooSalary() : ?int
    {
        return $this->upcomingYahooSalary;
    }
    /**
     * 
     *
     * @param int|null $upcomingYahooSalary
     *
     * @return self
     */
    public function setUpcomingYahooSalary(?int $upcomingYahooSalary) : self
    {
        $this->upcomingYahooSalary = $upcomingYahooSalary;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPrimaryColor() : ?string
    {
        return $this->primaryColor;
    }
    /**
     * 
     *
     * @param string|null $primaryColor
     *
     * @return self
     */
    public function setPrimaryColor(?string $primaryColor) : self
    {
        $this->primaryColor = $primaryColor;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSecondaryColor() : ?string
    {
        return $this->secondaryColor;
    }
    /**
     * 
     *
     * @param string|null $secondaryColor
     *
     * @return self
     */
    public function setSecondaryColor(?string $secondaryColor) : self
    {
        $this->secondaryColor = $secondaryColor;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTertiaryColor() : ?string
    {
        return $this->tertiaryColor;
    }
    /**
     * 
     *
     * @param string|null $tertiaryColor
     *
     * @return self
     */
    public function setTertiaryColor(?string $tertiaryColor) : self
    {
        $this->tertiaryColor = $tertiaryColor;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getQuaternaryColor() : ?string
    {
        return $this->quaternaryColor;
    }
    /**
     * 
     *
     * @param string|null $quaternaryColor
     *
     * @return self
     */
    public function setQuaternaryColor(?string $quaternaryColor) : self
    {
        $this->quaternaryColor = $quaternaryColor;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWikipediaLogoUrl() : ?string
    {
        return $this->wikipediaLogoUrl;
    }
    /**
     * 
     *
     * @param string|null $wikipediaLogoUrl
     *
     * @return self
     */
    public function setWikipediaLogoUrl(?string $wikipediaLogoUrl) : self
    {
        $this->wikipediaLogoUrl = $wikipediaLogoUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWikipediaWordMarkUrl() : ?string
    {
        return $this->wikipediaWordMarkUrl;
    }
    /**
     * 
     *
     * @param string|null $wikipediaWordMarkUrl
     *
     * @return self
     */
    public function setWikipediaWordMarkUrl(?string $wikipediaWordMarkUrl) : self
    {
        $this->wikipediaWordMarkUrl = $wikipediaWordMarkUrl;
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
     * @return string|null
     */
    public function getDraftKingsName() : ?string
    {
        return $this->draftKingsName;
    }
    /**
     * 
     *
     * @param string|null $draftKingsName
     *
     * @return self
     */
    public function setDraftKingsName(?string $draftKingsName) : self
    {
        $this->draftKingsName = $draftKingsName;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDraftKingsPlayerID() : ?int
    {
        return $this->draftKingsPlayerID;
    }
    /**
     * 
     *
     * @param int|null $draftKingsPlayerID
     *
     * @return self
     */
    public function setDraftKingsPlayerID(?int $draftKingsPlayerID) : self
    {
        $this->draftKingsPlayerID = $draftKingsPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFanDuelName() : ?string
    {
        return $this->fanDuelName;
    }
    /**
     * 
     *
     * @param string|null $fanDuelName
     *
     * @return self
     */
    public function setFanDuelName(?string $fanDuelName) : self
    {
        $this->fanDuelName = $fanDuelName;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFanDuelPlayerID() : ?int
    {
        return $this->fanDuelPlayerID;
    }
    /**
     * 
     *
     * @param int|null $fanDuelPlayerID
     *
     * @return self
     */
    public function setFanDuelPlayerID(?int $fanDuelPlayerID) : self
    {
        $this->fanDuelPlayerID = $fanDuelPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFantasyDraftName() : ?string
    {
        return $this->fantasyDraftName;
    }
    /**
     * 
     *
     * @param string|null $fantasyDraftName
     *
     * @return self
     */
    public function setFantasyDraftName(?string $fantasyDraftName) : self
    {
        $this->fantasyDraftName = $fantasyDraftName;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFantasyDraftPlayerID() : ?int
    {
        return $this->fantasyDraftPlayerID;
    }
    /**
     * 
     *
     * @param int|null $fantasyDraftPlayerID
     *
     * @return self
     */
    public function setFantasyDraftPlayerID(?int $fantasyDraftPlayerID) : self
    {
        $this->fantasyDraftPlayerID = $fantasyDraftPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getYahooName() : ?string
    {
        return $this->yahooName;
    }
    /**
     * 
     *
     * @param string|null $yahooName
     *
     * @return self
     */
    public function setYahooName(?string $yahooName) : self
    {
        $this->yahooName = $yahooName;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getYahooPlayerID() : ?int
    {
        return $this->yahooPlayerID;
    }
    /**
     * 
     *
     * @param int|null $yahooPlayerID
     *
     * @return self
     */
    public function setYahooPlayerID(?int $yahooPlayerID) : self
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
}