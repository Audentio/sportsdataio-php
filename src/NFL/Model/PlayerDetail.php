<?php

namespace Sportsdata\API\NFL\Model;

class PlayerDetail
{
    /**
     * 
     *
     * @var PlayerSeason
     */
    protected $playerSeason;
    /**
     * 
     *
     * @var News[]
     */
    protected $latestNews;
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
    protected $team;
    /**
     * 
     *
     * @var int
     */
    protected $number;
    /**
     * 
     *
     * @var string
     */
    protected $firstName;
    /**
     * 
     *
     * @var string
     */
    protected $lastName;
    /**
     * 
     *
     * @var string
     */
    protected $position;
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
    protected $height;
    /**
     * 
     *
     * @var int
     */
    protected $weight;
    /**
     * 
     *
     * @var string
     */
    protected $birthDate;
    /**
     * 
     *
     * @var string
     */
    protected $college;
    /**
     * 
     *
     * @var int
     */
    protected $experience;
    /**
     * 
     *
     * @var string
     */
    protected $fantasyPosition;
    /**
     * 
     *
     * @var bool
     */
    protected $active;
    /**
     * 
     *
     * @var string
     */
    protected $positionCategory;
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
    protected $age;
    /**
     * 
     *
     * @var string
     */
    protected $experienceString;
    /**
     * 
     *
     * @var string
     */
    protected $birthDateString;
    /**
     * 
     *
     * @var string
     */
    protected $photoUrl;
    /**
     * 
     *
     * @var int
     */
    protected $byeWeek;
    /**
     * 
     *
     * @var string
     */
    protected $upcomingGameOpponent;
    /**
     * 
     *
     * @var int
     */
    protected $upcomingGameWeek;
    /**
     * 
     *
     * @var string
     */
    protected $shortName;
    /**
     * 
     *
     * @var float
     */
    protected $averageDraftPosition;
    /**
     * 
     *
     * @var string
     */
    protected $depthPositionCategory;
    /**
     * 
     *
     * @var string
     */
    protected $depthPosition;
    /**
     * 
     *
     * @var int
     */
    protected $depthOrder;
    /**
     * 
     *
     * @var int
     */
    protected $depthDisplayOrder;
    /**
     * 
     *
     * @var string
     */
    protected $currentTeam;
    /**
     * 
     *
     * @var string
     */
    protected $collegeDraftTeam;
    /**
     * 
     *
     * @var int
     */
    protected $collegeDraftYear;
    /**
     * 
     *
     * @var int
     */
    protected $collegeDraftRound;
    /**
     * 
     *
     * @var int
     */
    protected $collegeDraftPick;
    /**
     * 
     *
     * @var bool
     */
    protected $isUndraftedFreeAgent;
    /**
     * 
     *
     * @var int
     */
    protected $heightFeet;
    /**
     * 
     *
     * @var int
     */
    protected $heightInches;
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
     * @var string
     */
    protected $currentStatus;
    /**
     * 
     *
     * @var int
     */
    protected $upcomingSalary;
    /**
     * 
     *
     * @var int
     */
    protected $fantasyAlarmPlayerID;
    /**
     * 
     *
     * @var string
     */
    protected $sportRadarPlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $rotoworldPlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $rotoWirePlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $statsPlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $sportsDirectPlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $xmlTeamPlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $fanDuelPlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $draftKingsPlayerID;
    /**
     * 
     *
     * @var int
     */
    protected $yahooPlayerID;
    /**
     * 
     *
     * @var string
     */
    protected $injuryStatus;
    /**
     * 
     *
     * @var string
     */
    protected $injuryBodyPart;
    /**
     * 
     *
     * @var string
     */
    protected $injuryStartDate;
    /**
     * 
     *
     * @var string
     */
    protected $injuryNotes;
    /**
     * 
     *
     * @var string
     */
    protected $fanDuelName;
    /**
     * 
     *
     * @var string
     */
    protected $draftKingsName;
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
    protected $fantasyPositionDepthOrder;
    /**
     * 
     *
     * @var string
     */
    protected $injuryPractice;
    /**
     * 
     *
     * @var string
     */
    protected $injuryPracticeDescription;
    /**
     * 
     *
     * @var bool
     */
    protected $declaredInactive;
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
     * @var int
     */
    protected $teamID;
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
    protected $fantasyDraftPlayerID;
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
    protected $usaTodayPlayerID;
    /**
     * 
     *
     * @var string
     */
    protected $usaTodayHeadshotUrl;
    /**
     * 
     *
     * @var string
     */
    protected $usaTodayHeadshotNoBackgroundUrl;
    /**
     * 
     *
     * @var string
     */
    protected $usaTodayHeadshotUpdated;
    /**
     * 
     *
     * @var string
     */
    protected $usaTodayHeadshotNoBackgroundUpdated;
    /**
     * 
     *
     * @return PlayerSeason
     */
    public function getPlayerSeason() : PlayerSeason
    {
        return $this->playerSeason;
    }
    /**
     * 
     *
     * @param PlayerSeason $playerSeason
     *
     * @return self
     */
    public function setPlayerSeason(PlayerSeason $playerSeason) : self
    {
        $this->playerSeason = $playerSeason;
        return $this;
    }
    /**
     * 
     *
     * @return News[]
     */
    public function getLatestNews() : array
    {
        return $this->latestNews;
    }
    /**
     * 
     *
     * @param News[] $latestNews
     *
     * @return self
     */
    public function setLatestNews(array $latestNews) : self
    {
        $this->latestNews = $latestNews;
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
     * @return int
     */
    public function getNumber() : int
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(int $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName) : self
    {
        $this->lastName = $lastName;
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
    public function getHeight() : string
    {
        return $this->height;
    }
    /**
     * 
     *
     * @param string $height
     *
     * @return self
     */
    public function setHeight(string $height) : self
    {
        $this->height = $height;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWeight() : int
    {
        return $this->weight;
    }
    /**
     * 
     *
     * @param int $weight
     *
     * @return self
     */
    public function setWeight(int $weight) : self
    {
        $this->weight = $weight;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBirthDate() : string
    {
        return $this->birthDate;
    }
    /**
     * 
     *
     * @param string $birthDate
     *
     * @return self
     */
    public function setBirthDate(string $birthDate) : self
    {
        $this->birthDate = $birthDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCollege() : string
    {
        return $this->college;
    }
    /**
     * 
     *
     * @param string $college
     *
     * @return self
     */
    public function setCollege(string $college) : self
    {
        $this->college = $college;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExperience() : int
    {
        return $this->experience;
    }
    /**
     * 
     *
     * @param int $experience
     *
     * @return self
     */
    public function setExperience(int $experience) : self
    {
        $this->experience = $experience;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFantasyPosition() : string
    {
        return $this->fantasyPosition;
    }
    /**
     * 
     *
     * @param string $fantasyPosition
     *
     * @return self
     */
    public function setFantasyPosition(string $fantasyPosition) : self
    {
        $this->fantasyPosition = $fantasyPosition;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getActive() : bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active) : self
    {
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPositionCategory() : string
    {
        return $this->positionCategory;
    }
    /**
     * 
     *
     * @param string $positionCategory
     *
     * @return self
     */
    public function setPositionCategory(string $positionCategory) : self
    {
        $this->positionCategory = $positionCategory;
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
    public function getAge() : int
    {
        return $this->age;
    }
    /**
     * 
     *
     * @param int $age
     *
     * @return self
     */
    public function setAge(int $age) : self
    {
        $this->age = $age;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getExperienceString() : string
    {
        return $this->experienceString;
    }
    /**
     * 
     *
     * @param string $experienceString
     *
     * @return self
     */
    public function setExperienceString(string $experienceString) : self
    {
        $this->experienceString = $experienceString;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBirthDateString() : string
    {
        return $this->birthDateString;
    }
    /**
     * 
     *
     * @param string $birthDateString
     *
     * @return self
     */
    public function setBirthDateString(string $birthDateString) : self
    {
        $this->birthDateString = $birthDateString;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPhotoUrl() : string
    {
        return $this->photoUrl;
    }
    /**
     * 
     *
     * @param string $photoUrl
     *
     * @return self
     */
    public function setPhotoUrl(string $photoUrl) : self
    {
        $this->photoUrl = $photoUrl;
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
     * @return string
     */
    public function getUpcomingGameOpponent() : string
    {
        return $this->upcomingGameOpponent;
    }
    /**
     * 
     *
     * @param string $upcomingGameOpponent
     *
     * @return self
     */
    public function setUpcomingGameOpponent(string $upcomingGameOpponent) : self
    {
        $this->upcomingGameOpponent = $upcomingGameOpponent;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUpcomingGameWeek() : int
    {
        return $this->upcomingGameWeek;
    }
    /**
     * 
     *
     * @param int $upcomingGameWeek
     *
     * @return self
     */
    public function setUpcomingGameWeek(int $upcomingGameWeek) : self
    {
        $this->upcomingGameWeek = $upcomingGameWeek;
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
     * @return string
     */
    public function getDepthPositionCategory() : string
    {
        return $this->depthPositionCategory;
    }
    /**
     * 
     *
     * @param string $depthPositionCategory
     *
     * @return self
     */
    public function setDepthPositionCategory(string $depthPositionCategory) : self
    {
        $this->depthPositionCategory = $depthPositionCategory;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDepthPosition() : string
    {
        return $this->depthPosition;
    }
    /**
     * 
     *
     * @param string $depthPosition
     *
     * @return self
     */
    public function setDepthPosition(string $depthPosition) : self
    {
        $this->depthPosition = $depthPosition;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDepthOrder() : int
    {
        return $this->depthOrder;
    }
    /**
     * 
     *
     * @param int $depthOrder
     *
     * @return self
     */
    public function setDepthOrder(int $depthOrder) : self
    {
        $this->depthOrder = $depthOrder;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDepthDisplayOrder() : int
    {
        return $this->depthDisplayOrder;
    }
    /**
     * 
     *
     * @param int $depthDisplayOrder
     *
     * @return self
     */
    public function setDepthDisplayOrder(int $depthDisplayOrder) : self
    {
        $this->depthDisplayOrder = $depthDisplayOrder;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCurrentTeam() : string
    {
        return $this->currentTeam;
    }
    /**
     * 
     *
     * @param string $currentTeam
     *
     * @return self
     */
    public function setCurrentTeam(string $currentTeam) : self
    {
        $this->currentTeam = $currentTeam;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCollegeDraftTeam() : string
    {
        return $this->collegeDraftTeam;
    }
    /**
     * 
     *
     * @param string $collegeDraftTeam
     *
     * @return self
     */
    public function setCollegeDraftTeam(string $collegeDraftTeam) : self
    {
        $this->collegeDraftTeam = $collegeDraftTeam;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCollegeDraftYear() : int
    {
        return $this->collegeDraftYear;
    }
    /**
     * 
     *
     * @param int $collegeDraftYear
     *
     * @return self
     */
    public function setCollegeDraftYear(int $collegeDraftYear) : self
    {
        $this->collegeDraftYear = $collegeDraftYear;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCollegeDraftRound() : int
    {
        return $this->collegeDraftRound;
    }
    /**
     * 
     *
     * @param int $collegeDraftRound
     *
     * @return self
     */
    public function setCollegeDraftRound(int $collegeDraftRound) : self
    {
        $this->collegeDraftRound = $collegeDraftRound;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCollegeDraftPick() : int
    {
        return $this->collegeDraftPick;
    }
    /**
     * 
     *
     * @param int $collegeDraftPick
     *
     * @return self
     */
    public function setCollegeDraftPick(int $collegeDraftPick) : self
    {
        $this->collegeDraftPick = $collegeDraftPick;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsUndraftedFreeAgent() : bool
    {
        return $this->isUndraftedFreeAgent;
    }
    /**
     * 
     *
     * @param bool $isUndraftedFreeAgent
     *
     * @return self
     */
    public function setIsUndraftedFreeAgent(bool $isUndraftedFreeAgent) : self
    {
        $this->isUndraftedFreeAgent = $isUndraftedFreeAgent;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHeightFeet() : int
    {
        return $this->heightFeet;
    }
    /**
     * 
     *
     * @param int $heightFeet
     *
     * @return self
     */
    public function setHeightFeet(int $heightFeet) : self
    {
        $this->heightFeet = $heightFeet;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHeightInches() : int
    {
        return $this->heightInches;
    }
    /**
     * 
     *
     * @param int $heightInches
     *
     * @return self
     */
    public function setHeightInches(int $heightInches) : self
    {
        $this->heightInches = $heightInches;
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
     * @return string
     */
    public function getCurrentStatus() : string
    {
        return $this->currentStatus;
    }
    /**
     * 
     *
     * @param string $currentStatus
     *
     * @return self
     */
    public function setCurrentStatus(string $currentStatus) : self
    {
        $this->currentStatus = $currentStatus;
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
     * @return int
     */
    public function getFantasyAlarmPlayerID() : int
    {
        return $this->fantasyAlarmPlayerID;
    }
    /**
     * 
     *
     * @param int $fantasyAlarmPlayerID
     *
     * @return self
     */
    public function setFantasyAlarmPlayerID(int $fantasyAlarmPlayerID) : self
    {
        $this->fantasyAlarmPlayerID = $fantasyAlarmPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSportRadarPlayerID() : string
    {
        return $this->sportRadarPlayerID;
    }
    /**
     * 
     *
     * @param string $sportRadarPlayerID
     *
     * @return self
     */
    public function setSportRadarPlayerID(string $sportRadarPlayerID) : self
    {
        $this->sportRadarPlayerID = $sportRadarPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRotoworldPlayerID() : int
    {
        return $this->rotoworldPlayerID;
    }
    /**
     * 
     *
     * @param int $rotoworldPlayerID
     *
     * @return self
     */
    public function setRotoworldPlayerID(int $rotoworldPlayerID) : self
    {
        $this->rotoworldPlayerID = $rotoworldPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRotoWirePlayerID() : int
    {
        return $this->rotoWirePlayerID;
    }
    /**
     * 
     *
     * @param int $rotoWirePlayerID
     *
     * @return self
     */
    public function setRotoWirePlayerID(int $rotoWirePlayerID) : self
    {
        $this->rotoWirePlayerID = $rotoWirePlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStatsPlayerID() : int
    {
        return $this->statsPlayerID;
    }
    /**
     * 
     *
     * @param int $statsPlayerID
     *
     * @return self
     */
    public function setStatsPlayerID(int $statsPlayerID) : self
    {
        $this->statsPlayerID = $statsPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSportsDirectPlayerID() : int
    {
        return $this->sportsDirectPlayerID;
    }
    /**
     * 
     *
     * @param int $sportsDirectPlayerID
     *
     * @return self
     */
    public function setSportsDirectPlayerID(int $sportsDirectPlayerID) : self
    {
        $this->sportsDirectPlayerID = $sportsDirectPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getXmlTeamPlayerID() : int
    {
        return $this->xmlTeamPlayerID;
    }
    /**
     * 
     *
     * @param int $xmlTeamPlayerID
     *
     * @return self
     */
    public function setXmlTeamPlayerID(int $xmlTeamPlayerID) : self
    {
        $this->xmlTeamPlayerID = $xmlTeamPlayerID;
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
     * @return string
     */
    public function getInjuryStatus() : string
    {
        return $this->injuryStatus;
    }
    /**
     * 
     *
     * @param string $injuryStatus
     *
     * @return self
     */
    public function setInjuryStatus(string $injuryStatus) : self
    {
        $this->injuryStatus = $injuryStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInjuryBodyPart() : string
    {
        return $this->injuryBodyPart;
    }
    /**
     * 
     *
     * @param string $injuryBodyPart
     *
     * @return self
     */
    public function setInjuryBodyPart(string $injuryBodyPart) : self
    {
        $this->injuryBodyPart = $injuryBodyPart;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInjuryStartDate() : string
    {
        return $this->injuryStartDate;
    }
    /**
     * 
     *
     * @param string $injuryStartDate
     *
     * @return self
     */
    public function setInjuryStartDate(string $injuryStartDate) : self
    {
        $this->injuryStartDate = $injuryStartDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInjuryNotes() : string
    {
        return $this->injuryNotes;
    }
    /**
     * 
     *
     * @param string $injuryNotes
     *
     * @return self
     */
    public function setInjuryNotes(string $injuryNotes) : self
    {
        $this->injuryNotes = $injuryNotes;
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
    public function getFantasyPositionDepthOrder() : int
    {
        return $this->fantasyPositionDepthOrder;
    }
    /**
     * 
     *
     * @param int $fantasyPositionDepthOrder
     *
     * @return self
     */
    public function setFantasyPositionDepthOrder(int $fantasyPositionDepthOrder) : self
    {
        $this->fantasyPositionDepthOrder = $fantasyPositionDepthOrder;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInjuryPractice() : string
    {
        return $this->injuryPractice;
    }
    /**
     * 
     *
     * @param string $injuryPractice
     *
     * @return self
     */
    public function setInjuryPractice(string $injuryPractice) : self
    {
        $this->injuryPractice = $injuryPractice;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInjuryPracticeDescription() : string
    {
        return $this->injuryPracticeDescription;
    }
    /**
     * 
     *
     * @param string $injuryPracticeDescription
     *
     * @return self
     */
    public function setInjuryPracticeDescription(string $injuryPracticeDescription) : self
    {
        $this->injuryPracticeDescription = $injuryPracticeDescription;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDeclaredInactive() : bool
    {
        return $this->declaredInactive;
    }
    /**
     * 
     *
     * @param bool $declaredInactive
     *
     * @return self
     */
    public function setDeclaredInactive(bool $declaredInactive) : self
    {
        $this->declaredInactive = $declaredInactive;
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
    public function getUsaTodayPlayerID() : int
    {
        return $this->usaTodayPlayerID;
    }
    /**
     * 
     *
     * @param int $usaTodayPlayerID
     *
     * @return self
     */
    public function setUsaTodayPlayerID(int $usaTodayPlayerID) : self
    {
        $this->usaTodayPlayerID = $usaTodayPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUsaTodayHeadshotUrl() : string
    {
        return $this->usaTodayHeadshotUrl;
    }
    /**
     * 
     *
     * @param string $usaTodayHeadshotUrl
     *
     * @return self
     */
    public function setUsaTodayHeadshotUrl(string $usaTodayHeadshotUrl) : self
    {
        $this->usaTodayHeadshotUrl = $usaTodayHeadshotUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUsaTodayHeadshotNoBackgroundUrl() : string
    {
        return $this->usaTodayHeadshotNoBackgroundUrl;
    }
    /**
     * 
     *
     * @param string $usaTodayHeadshotNoBackgroundUrl
     *
     * @return self
     */
    public function setUsaTodayHeadshotNoBackgroundUrl(string $usaTodayHeadshotNoBackgroundUrl) : self
    {
        $this->usaTodayHeadshotNoBackgroundUrl = $usaTodayHeadshotNoBackgroundUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUsaTodayHeadshotUpdated() : string
    {
        return $this->usaTodayHeadshotUpdated;
    }
    /**
     * 
     *
     * @param string $usaTodayHeadshotUpdated
     *
     * @return self
     */
    public function setUsaTodayHeadshotUpdated(string $usaTodayHeadshotUpdated) : self
    {
        $this->usaTodayHeadshotUpdated = $usaTodayHeadshotUpdated;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUsaTodayHeadshotNoBackgroundUpdated() : string
    {
        return $this->usaTodayHeadshotNoBackgroundUpdated;
    }
    /**
     * 
     *
     * @param string $usaTodayHeadshotNoBackgroundUpdated
     *
     * @return self
     */
    public function setUsaTodayHeadshotNoBackgroundUpdated(string $usaTodayHeadshotNoBackgroundUpdated) : self
    {
        $this->usaTodayHeadshotNoBackgroundUpdated = $usaTodayHeadshotNoBackgroundUpdated;
        return $this;
    }
}