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
     * @var string|null
     */
    protected $team;
    /**
     * 
     *
     * @var int|null
     */
    protected $number;
    /**
     * 
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * 
     *
     * @var string|null
     */
    protected $position;
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
    protected $height;
    /**
     * 
     *
     * @var int|null
     */
    protected $weight;
    /**
     * 
     *
     * @var string|null
     */
    protected $birthDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $college;
    /**
     * 
     *
     * @var int|null
     */
    protected $experience;
    /**
     * 
     *
     * @var string|null
     */
    protected $fantasyPosition;
    /**
     * 
     *
     * @var bool|null
     */
    protected $active;
    /**
     * 
     *
     * @var string|null
     */
    protected $positionCategory;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var int|null
     */
    protected $age;
    /**
     * 
     *
     * @var string|null
     */
    protected $experienceString;
    /**
     * 
     *
     * @var string|null
     */
    protected $birthDateString;
    /**
     * 
     *
     * @var string|null
     */
    protected $photoUrl;
    /**
     * 
     *
     * @var int|null
     */
    protected $byeWeek;
    /**
     * 
     *
     * @var string|null
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
     * @var string|null
     */
    protected $shortName;
    /**
     * 
     *
     * @var float|null
     */
    protected $averageDraftPosition;
    /**
     * 
     *
     * @var string|null
     */
    protected $depthPositionCategory;
    /**
     * 
     *
     * @var string|null
     */
    protected $depthPosition;
    /**
     * 
     *
     * @var int|null
     */
    protected $depthOrder;
    /**
     * 
     *
     * @var int|null
     */
    protected $depthDisplayOrder;
    /**
     * 
     *
     * @var string|null
     */
    protected $currentTeam;
    /**
     * 
     *
     * @var string|null
     */
    protected $collegeDraftTeam;
    /**
     * 
     *
     * @var int|null
     */
    protected $collegeDraftYear;
    /**
     * 
     *
     * @var int|null
     */
    protected $collegeDraftRound;
    /**
     * 
     *
     * @var int|null
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
     * @var int|null
     */
    protected $heightFeet;
    /**
     * 
     *
     * @var int|null
     */
    protected $heightInches;
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
     * @var string|null
     */
    protected $currentStatus;
    /**
     * 
     *
     * @var int|null
     */
    protected $upcomingSalary;
    /**
     * 
     *
     * @var int|null
     */
    protected $fantasyAlarmPlayerID;
    /**
     * 
     *
     * @var string|null
     */
    protected $sportRadarPlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $rotoworldPlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $rotoWirePlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $statsPlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $sportsDirectPlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $xmlTeamPlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $fanDuelPlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $draftKingsPlayerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $yahooPlayerID;
    /**
     * 
     *
     * @var string|null
     */
    protected $injuryStatus;
    /**
     * 
     *
     * @var string|null
     */
    protected $injuryBodyPart;
    /**
     * 
     *
     * @var string|null
     */
    protected $injuryStartDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $injuryNotes;
    /**
     * 
     *
     * @var string|null
     */
    protected $fanDuelName;
    /**
     * 
     *
     * @var string|null
     */
    protected $draftKingsName;
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
    protected $fantasyPositionDepthOrder;
    /**
     * 
     *
     * @var string|null
     */
    protected $injuryPractice;
    /**
     * 
     *
     * @var string|null
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
     * @var int|null
     */
    protected $teamID;
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
    protected $fantasyDraftPlayerID;
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
    protected $usaTodayPlayerID;
    /**
     * 
     *
     * @var string|null
     */
    protected $usaTodayHeadshotUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $usaTodayHeadshotNoBackgroundUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $usaTodayHeadshotUpdated;
    /**
     * 
     *
     * @var string|null
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
     * @return int|null
     */
    public function getNumber() : ?int
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param int|null $number
     *
     * @return self
     */
    public function setNumber(?int $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFirstName() : ?string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastName() : ?string
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName) : self
    {
        $this->lastName = $lastName;
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
    public function getHeight() : ?string
    {
        return $this->height;
    }
    /**
     * 
     *
     * @param string|null $height
     *
     * @return self
     */
    public function setHeight(?string $height) : self
    {
        $this->height = $height;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWeight() : ?int
    {
        return $this->weight;
    }
    /**
     * 
     *
     * @param int|null $weight
     *
     * @return self
     */
    public function setWeight(?int $weight) : self
    {
        $this->weight = $weight;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBirthDate() : ?string
    {
        return $this->birthDate;
    }
    /**
     * 
     *
     * @param string|null $birthDate
     *
     * @return self
     */
    public function setBirthDate(?string $birthDate) : self
    {
        $this->birthDate = $birthDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCollege() : ?string
    {
        return $this->college;
    }
    /**
     * 
     *
     * @param string|null $college
     *
     * @return self
     */
    public function setCollege(?string $college) : self
    {
        $this->college = $college;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getExperience() : ?int
    {
        return $this->experience;
    }
    /**
     * 
     *
     * @param int|null $experience
     *
     * @return self
     */
    public function setExperience(?int $experience) : self
    {
        $this->experience = $experience;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFantasyPosition() : ?string
    {
        return $this->fantasyPosition;
    }
    /**
     * 
     *
     * @param string|null $fantasyPosition
     *
     * @return self
     */
    public function setFantasyPosition(?string $fantasyPosition) : self
    {
        $this->fantasyPosition = $fantasyPosition;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getActive() : ?bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool|null $active
     *
     * @return self
     */
    public function setActive(?bool $active) : self
    {
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPositionCategory() : ?string
    {
        return $this->positionCategory;
    }
    /**
     * 
     *
     * @param string|null $positionCategory
     *
     * @return self
     */
    public function setPositionCategory(?string $positionCategory) : self
    {
        $this->positionCategory = $positionCategory;
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
     * @return int|null
     */
    public function getAge() : ?int
    {
        return $this->age;
    }
    /**
     * 
     *
     * @param int|null $age
     *
     * @return self
     */
    public function setAge(?int $age) : self
    {
        $this->age = $age;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExperienceString() : ?string
    {
        return $this->experienceString;
    }
    /**
     * 
     *
     * @param string|null $experienceString
     *
     * @return self
     */
    public function setExperienceString(?string $experienceString) : self
    {
        $this->experienceString = $experienceString;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBirthDateString() : ?string
    {
        return $this->birthDateString;
    }
    /**
     * 
     *
     * @param string|null $birthDateString
     *
     * @return self
     */
    public function setBirthDateString(?string $birthDateString) : self
    {
        $this->birthDateString = $birthDateString;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPhotoUrl() : ?string
    {
        return $this->photoUrl;
    }
    /**
     * 
     *
     * @param string|null $photoUrl
     *
     * @return self
     */
    public function setPhotoUrl(?string $photoUrl) : self
    {
        $this->photoUrl = $photoUrl;
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
     * @return string|null
     */
    public function getUpcomingGameOpponent() : ?string
    {
        return $this->upcomingGameOpponent;
    }
    /**
     * 
     *
     * @param string|null $upcomingGameOpponent
     *
     * @return self
     */
    public function setUpcomingGameOpponent(?string $upcomingGameOpponent) : self
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
     * @return string|null
     */
    public function getDepthPositionCategory() : ?string
    {
        return $this->depthPositionCategory;
    }
    /**
     * 
     *
     * @param string|null $depthPositionCategory
     *
     * @return self
     */
    public function setDepthPositionCategory(?string $depthPositionCategory) : self
    {
        $this->depthPositionCategory = $depthPositionCategory;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDepthPosition() : ?string
    {
        return $this->depthPosition;
    }
    /**
     * 
     *
     * @param string|null $depthPosition
     *
     * @return self
     */
    public function setDepthPosition(?string $depthPosition) : self
    {
        $this->depthPosition = $depthPosition;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDepthOrder() : ?int
    {
        return $this->depthOrder;
    }
    /**
     * 
     *
     * @param int|null $depthOrder
     *
     * @return self
     */
    public function setDepthOrder(?int $depthOrder) : self
    {
        $this->depthOrder = $depthOrder;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDepthDisplayOrder() : ?int
    {
        return $this->depthDisplayOrder;
    }
    /**
     * 
     *
     * @param int|null $depthDisplayOrder
     *
     * @return self
     */
    public function setDepthDisplayOrder(?int $depthDisplayOrder) : self
    {
        $this->depthDisplayOrder = $depthDisplayOrder;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCurrentTeam() : ?string
    {
        return $this->currentTeam;
    }
    /**
     * 
     *
     * @param string|null $currentTeam
     *
     * @return self
     */
    public function setCurrentTeam(?string $currentTeam) : self
    {
        $this->currentTeam = $currentTeam;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCollegeDraftTeam() : ?string
    {
        return $this->collegeDraftTeam;
    }
    /**
     * 
     *
     * @param string|null $collegeDraftTeam
     *
     * @return self
     */
    public function setCollegeDraftTeam(?string $collegeDraftTeam) : self
    {
        $this->collegeDraftTeam = $collegeDraftTeam;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCollegeDraftYear() : ?int
    {
        return $this->collegeDraftYear;
    }
    /**
     * 
     *
     * @param int|null $collegeDraftYear
     *
     * @return self
     */
    public function setCollegeDraftYear(?int $collegeDraftYear) : self
    {
        $this->collegeDraftYear = $collegeDraftYear;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCollegeDraftRound() : ?int
    {
        return $this->collegeDraftRound;
    }
    /**
     * 
     *
     * @param int|null $collegeDraftRound
     *
     * @return self
     */
    public function setCollegeDraftRound(?int $collegeDraftRound) : self
    {
        $this->collegeDraftRound = $collegeDraftRound;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCollegeDraftPick() : ?int
    {
        return $this->collegeDraftPick;
    }
    /**
     * 
     *
     * @param int|null $collegeDraftPick
     *
     * @return self
     */
    public function setCollegeDraftPick(?int $collegeDraftPick) : self
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
     * @return int|null
     */
    public function getHeightFeet() : ?int
    {
        return $this->heightFeet;
    }
    /**
     * 
     *
     * @param int|null $heightFeet
     *
     * @return self
     */
    public function setHeightFeet(?int $heightFeet) : self
    {
        $this->heightFeet = $heightFeet;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHeightInches() : ?int
    {
        return $this->heightInches;
    }
    /**
     * 
     *
     * @param int|null $heightInches
     *
     * @return self
     */
    public function setHeightInches(?int $heightInches) : self
    {
        $this->heightInches = $heightInches;
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
     * @return string|null
     */
    public function getCurrentStatus() : ?string
    {
        return $this->currentStatus;
    }
    /**
     * 
     *
     * @param string|null $currentStatus
     *
     * @return self
     */
    public function setCurrentStatus(?string $currentStatus) : self
    {
        $this->currentStatus = $currentStatus;
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
     * @return int|null
     */
    public function getFantasyAlarmPlayerID() : ?int
    {
        return $this->fantasyAlarmPlayerID;
    }
    /**
     * 
     *
     * @param int|null $fantasyAlarmPlayerID
     *
     * @return self
     */
    public function setFantasyAlarmPlayerID(?int $fantasyAlarmPlayerID) : self
    {
        $this->fantasyAlarmPlayerID = $fantasyAlarmPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSportRadarPlayerID() : ?string
    {
        return $this->sportRadarPlayerID;
    }
    /**
     * 
     *
     * @param string|null $sportRadarPlayerID
     *
     * @return self
     */
    public function setSportRadarPlayerID(?string $sportRadarPlayerID) : self
    {
        $this->sportRadarPlayerID = $sportRadarPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRotoworldPlayerID() : ?int
    {
        return $this->rotoworldPlayerID;
    }
    /**
     * 
     *
     * @param int|null $rotoworldPlayerID
     *
     * @return self
     */
    public function setRotoworldPlayerID(?int $rotoworldPlayerID) : self
    {
        $this->rotoworldPlayerID = $rotoworldPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRotoWirePlayerID() : ?int
    {
        return $this->rotoWirePlayerID;
    }
    /**
     * 
     *
     * @param int|null $rotoWirePlayerID
     *
     * @return self
     */
    public function setRotoWirePlayerID(?int $rotoWirePlayerID) : self
    {
        $this->rotoWirePlayerID = $rotoWirePlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStatsPlayerID() : ?int
    {
        return $this->statsPlayerID;
    }
    /**
     * 
     *
     * @param int|null $statsPlayerID
     *
     * @return self
     */
    public function setStatsPlayerID(?int $statsPlayerID) : self
    {
        $this->statsPlayerID = $statsPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSportsDirectPlayerID() : ?int
    {
        return $this->sportsDirectPlayerID;
    }
    /**
     * 
     *
     * @param int|null $sportsDirectPlayerID
     *
     * @return self
     */
    public function setSportsDirectPlayerID(?int $sportsDirectPlayerID) : self
    {
        $this->sportsDirectPlayerID = $sportsDirectPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getXmlTeamPlayerID() : ?int
    {
        return $this->xmlTeamPlayerID;
    }
    /**
     * 
     *
     * @param int|null $xmlTeamPlayerID
     *
     * @return self
     */
    public function setXmlTeamPlayerID(?int $xmlTeamPlayerID) : self
    {
        $this->xmlTeamPlayerID = $xmlTeamPlayerID;
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
     * @return string|null
     */
    public function getInjuryStatus() : ?string
    {
        return $this->injuryStatus;
    }
    /**
     * 
     *
     * @param string|null $injuryStatus
     *
     * @return self
     */
    public function setInjuryStatus(?string $injuryStatus) : self
    {
        $this->injuryStatus = $injuryStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInjuryBodyPart() : ?string
    {
        return $this->injuryBodyPart;
    }
    /**
     * 
     *
     * @param string|null $injuryBodyPart
     *
     * @return self
     */
    public function setInjuryBodyPart(?string $injuryBodyPart) : self
    {
        $this->injuryBodyPart = $injuryBodyPart;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInjuryStartDate() : ?string
    {
        return $this->injuryStartDate;
    }
    /**
     * 
     *
     * @param string|null $injuryStartDate
     *
     * @return self
     */
    public function setInjuryStartDate(?string $injuryStartDate) : self
    {
        $this->injuryStartDate = $injuryStartDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInjuryNotes() : ?string
    {
        return $this->injuryNotes;
    }
    /**
     * 
     *
     * @param string|null $injuryNotes
     *
     * @return self
     */
    public function setInjuryNotes(?string $injuryNotes) : self
    {
        $this->injuryNotes = $injuryNotes;
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
    public function getFantasyPositionDepthOrder() : ?int
    {
        return $this->fantasyPositionDepthOrder;
    }
    /**
     * 
     *
     * @param int|null $fantasyPositionDepthOrder
     *
     * @return self
     */
    public function setFantasyPositionDepthOrder(?int $fantasyPositionDepthOrder) : self
    {
        $this->fantasyPositionDepthOrder = $fantasyPositionDepthOrder;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInjuryPractice() : ?string
    {
        return $this->injuryPractice;
    }
    /**
     * 
     *
     * @param string|null $injuryPractice
     *
     * @return self
     */
    public function setInjuryPractice(?string $injuryPractice) : self
    {
        $this->injuryPractice = $injuryPractice;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInjuryPracticeDescription() : ?string
    {
        return $this->injuryPracticeDescription;
    }
    /**
     * 
     *
     * @param string|null $injuryPracticeDescription
     *
     * @return self
     */
    public function setInjuryPracticeDescription(?string $injuryPracticeDescription) : self
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
     * @return int|null
     */
    public function getTeamID() : ?int
    {
        return $this->teamID;
    }
    /**
     * 
     *
     * @param int|null $teamID
     *
     * @return self
     */
    public function setTeamID(?int $teamID) : self
    {
        $this->teamID = $teamID;
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
    public function getUsaTodayPlayerID() : ?int
    {
        return $this->usaTodayPlayerID;
    }
    /**
     * 
     *
     * @param int|null $usaTodayPlayerID
     *
     * @return self
     */
    public function setUsaTodayPlayerID(?int $usaTodayPlayerID) : self
    {
        $this->usaTodayPlayerID = $usaTodayPlayerID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUsaTodayHeadshotUrl() : ?string
    {
        return $this->usaTodayHeadshotUrl;
    }
    /**
     * 
     *
     * @param string|null $usaTodayHeadshotUrl
     *
     * @return self
     */
    public function setUsaTodayHeadshotUrl(?string $usaTodayHeadshotUrl) : self
    {
        $this->usaTodayHeadshotUrl = $usaTodayHeadshotUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUsaTodayHeadshotNoBackgroundUrl() : ?string
    {
        return $this->usaTodayHeadshotNoBackgroundUrl;
    }
    /**
     * 
     *
     * @param string|null $usaTodayHeadshotNoBackgroundUrl
     *
     * @return self
     */
    public function setUsaTodayHeadshotNoBackgroundUrl(?string $usaTodayHeadshotNoBackgroundUrl) : self
    {
        $this->usaTodayHeadshotNoBackgroundUrl = $usaTodayHeadshotNoBackgroundUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUsaTodayHeadshotUpdated() : ?string
    {
        return $this->usaTodayHeadshotUpdated;
    }
    /**
     * 
     *
     * @param string|null $usaTodayHeadshotUpdated
     *
     * @return self
     */
    public function setUsaTodayHeadshotUpdated(?string $usaTodayHeadshotUpdated) : self
    {
        $this->usaTodayHeadshotUpdated = $usaTodayHeadshotUpdated;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUsaTodayHeadshotNoBackgroundUpdated() : ?string
    {
        return $this->usaTodayHeadshotNoBackgroundUpdated;
    }
    /**
     * 
     *
     * @param string|null $usaTodayHeadshotNoBackgroundUpdated
     *
     * @return self
     */
    public function setUsaTodayHeadshotNoBackgroundUpdated(?string $usaTodayHeadshotNoBackgroundUpdated) : self
    {
        $this->usaTodayHeadshotNoBackgroundUpdated = $usaTodayHeadshotNoBackgroundUpdated;
        return $this;
    }
}