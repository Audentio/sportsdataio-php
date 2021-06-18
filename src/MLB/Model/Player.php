<?php

namespace Sportsdata\API\MLB\Model;

class Player
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
    protected $sportsDataID;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var int|null
     */
    protected $teamID;
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
    protected $jersey;
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
    protected $position;
    /**
     * 
     *
     * @var int|null
     */
    protected $mLBAMID;
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
    protected $batHand;
    /**
     * 
     *
     * @var string|null
     */
    protected $throwHand;
    /**
     * 
     *
     * @var int|null
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
    protected $birthCity;
    /**
     * 
     *
     * @var string|null
     */
    protected $birthState;
    /**
     * 
     *
     * @var string|null
     */
    protected $birthCountry;
    /**
     * 
     *
     * @var string|null
     */
    protected $highSchool;
    /**
     * 
     *
     * @var string|null
     */
    protected $college;
    /**
     * 
     *
     * @var string|null
     */
    protected $proDebut;
    /**
     * 
     *
     * @var int|null
     */
    protected $salary;
    /**
     * 
     *
     * @var string|null
     */
    protected $photoUrl;
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
    protected $fantasyAlarmPlayerID;
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
     * @var int|null
     */
    protected $upcomingGameID;
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
    protected $globalTeamID;
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
    protected $experience;
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
    public function getSportsDataID() : ?string
    {
        return $this->sportsDataID;
    }
    /**
     * 
     *
     * @param string|null $sportsDataID
     *
     * @return self
     */
    public function setSportsDataID(?string $sportsDataID) : self
    {
        $this->sportsDataID = $sportsDataID;
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
    public function getJersey() : ?int
    {
        return $this->jersey;
    }
    /**
     * 
     *
     * @param int|null $jersey
     *
     * @return self
     */
    public function setJersey(?int $jersey) : self
    {
        $this->jersey = $jersey;
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
     * @return int|null
     */
    public function getMLBAMID() : ?int
    {
        return $this->mLBAMID;
    }
    /**
     * 
     *
     * @param int|null $mLBAMID
     *
     * @return self
     */
    public function setMLBAMID(?int $mLBAMID) : self
    {
        $this->mLBAMID = $mLBAMID;
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
    public function getBatHand() : ?string
    {
        return $this->batHand;
    }
    /**
     * 
     *
     * @param string|null $batHand
     *
     * @return self
     */
    public function setBatHand(?string $batHand) : self
    {
        $this->batHand = $batHand;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getThrowHand() : ?string
    {
        return $this->throwHand;
    }
    /**
     * 
     *
     * @param string|null $throwHand
     *
     * @return self
     */
    public function setThrowHand(?string $throwHand) : self
    {
        $this->throwHand = $throwHand;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHeight() : ?int
    {
        return $this->height;
    }
    /**
     * 
     *
     * @param int|null $height
     *
     * @return self
     */
    public function setHeight(?int $height) : self
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
    public function getBirthCity() : ?string
    {
        return $this->birthCity;
    }
    /**
     * 
     *
     * @param string|null $birthCity
     *
     * @return self
     */
    public function setBirthCity(?string $birthCity) : self
    {
        $this->birthCity = $birthCity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBirthState() : ?string
    {
        return $this->birthState;
    }
    /**
     * 
     *
     * @param string|null $birthState
     *
     * @return self
     */
    public function setBirthState(?string $birthState) : self
    {
        $this->birthState = $birthState;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBirthCountry() : ?string
    {
        return $this->birthCountry;
    }
    /**
     * 
     *
     * @param string|null $birthCountry
     *
     * @return self
     */
    public function setBirthCountry(?string $birthCountry) : self
    {
        $this->birthCountry = $birthCountry;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHighSchool() : ?string
    {
        return $this->highSchool;
    }
    /**
     * 
     *
     * @param string|null $highSchool
     *
     * @return self
     */
    public function setHighSchool(?string $highSchool) : self
    {
        $this->highSchool = $highSchool;
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
     * @return string|null
     */
    public function getProDebut() : ?string
    {
        return $this->proDebut;
    }
    /**
     * 
     *
     * @param string|null $proDebut
     *
     * @return self
     */
    public function setProDebut(?string $proDebut) : self
    {
        $this->proDebut = $proDebut;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSalary() : ?int
    {
        return $this->salary;
    }
    /**
     * 
     *
     * @param int|null $salary
     *
     * @return self
     */
    public function setSalary(?int $salary) : self
    {
        $this->salary = $salary;
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
     * @return int|null
     */
    public function getUpcomingGameID() : ?int
    {
        return $this->upcomingGameID;
    }
    /**
     * 
     *
     * @param int|null $upcomingGameID
     *
     * @return self
     */
    public function setUpcomingGameID(?int $upcomingGameID) : self
    {
        $this->upcomingGameID = $upcomingGameID;
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
    public function getExperience() : ?string
    {
        return $this->experience;
    }
    /**
     * 
     *
     * @param string|null $experience
     *
     * @return self
     */
    public function setExperience(?string $experience) : self
    {
        $this->experience = $experience;
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