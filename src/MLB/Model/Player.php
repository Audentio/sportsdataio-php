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
     * @var string
     */
    protected $sportsDataID;
    /**
     * 
     *
     * @var string
     */
    protected $status;
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
    protected $team;
    /**
     * 
     *
     * @var int
     */
    protected $jersey;
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
    protected $position;
    /**
     * 
     *
     * @var int
     */
    protected $mLBAMID;
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
    protected $batHand;
    /**
     * 
     *
     * @var string
     */
    protected $throwHand;
    /**
     * 
     *
     * @var int
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
    protected $birthCity;
    /**
     * 
     *
     * @var string
     */
    protected $birthState;
    /**
     * 
     *
     * @var string
     */
    protected $birthCountry;
    /**
     * 
     *
     * @var string
     */
    protected $highSchool;
    /**
     * 
     *
     * @var string
     */
    protected $college;
    /**
     * 
     *
     * @var string
     */
    protected $proDebut;
    /**
     * 
     *
     * @var int
     */
    protected $salary;
    /**
     * 
     *
     * @var string
     */
    protected $photoUrl;
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
    protected $fantasyAlarmPlayerID;
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
     * @var int
     */
    protected $upcomingGameID;
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
    protected $globalTeamID;
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
    protected $experience;
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
    public function getSportsDataID() : string
    {
        return $this->sportsDataID;
    }
    /**
     * 
     *
     * @param string $sportsDataID
     *
     * @return self
     */
    public function setSportsDataID(string $sportsDataID) : self
    {
        $this->sportsDataID = $sportsDataID;
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
    public function getJersey() : int
    {
        return $this->jersey;
    }
    /**
     * 
     *
     * @param int $jersey
     *
     * @return self
     */
    public function setJersey(int $jersey) : self
    {
        $this->jersey = $jersey;
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
     * @return int
     */
    public function getMLBAMID() : int
    {
        return $this->mLBAMID;
    }
    /**
     * 
     *
     * @param int $mLBAMID
     *
     * @return self
     */
    public function setMLBAMID(int $mLBAMID) : self
    {
        $this->mLBAMID = $mLBAMID;
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
    public function getBatHand() : string
    {
        return $this->batHand;
    }
    /**
     * 
     *
     * @param string $batHand
     *
     * @return self
     */
    public function setBatHand(string $batHand) : self
    {
        $this->batHand = $batHand;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getThrowHand() : string
    {
        return $this->throwHand;
    }
    /**
     * 
     *
     * @param string $throwHand
     *
     * @return self
     */
    public function setThrowHand(string $throwHand) : self
    {
        $this->throwHand = $throwHand;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHeight() : int
    {
        return $this->height;
    }
    /**
     * 
     *
     * @param int $height
     *
     * @return self
     */
    public function setHeight(int $height) : self
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
    public function getBirthCity() : string
    {
        return $this->birthCity;
    }
    /**
     * 
     *
     * @param string $birthCity
     *
     * @return self
     */
    public function setBirthCity(string $birthCity) : self
    {
        $this->birthCity = $birthCity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBirthState() : string
    {
        return $this->birthState;
    }
    /**
     * 
     *
     * @param string $birthState
     *
     * @return self
     */
    public function setBirthState(string $birthState) : self
    {
        $this->birthState = $birthState;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBirthCountry() : string
    {
        return $this->birthCountry;
    }
    /**
     * 
     *
     * @param string $birthCountry
     *
     * @return self
     */
    public function setBirthCountry(string $birthCountry) : self
    {
        $this->birthCountry = $birthCountry;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHighSchool() : string
    {
        return $this->highSchool;
    }
    /**
     * 
     *
     * @param string $highSchool
     *
     * @return self
     */
    public function setHighSchool(string $highSchool) : self
    {
        $this->highSchool = $highSchool;
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
     * @return string
     */
    public function getProDebut() : string
    {
        return $this->proDebut;
    }
    /**
     * 
     *
     * @param string $proDebut
     *
     * @return self
     */
    public function setProDebut(string $proDebut) : self
    {
        $this->proDebut = $proDebut;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSalary() : int
    {
        return $this->salary;
    }
    /**
     * 
     *
     * @param int $salary
     *
     * @return self
     */
    public function setSalary(int $salary) : self
    {
        $this->salary = $salary;
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
     * @return int
     */
    public function getUpcomingGameID() : int
    {
        return $this->upcomingGameID;
    }
    /**
     * 
     *
     * @param int $upcomingGameID
     *
     * @return self
     */
    public function setUpcomingGameID(int $upcomingGameID) : self
    {
        $this->upcomingGameID = $upcomingGameID;
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
    public function getExperience() : string
    {
        return $this->experience;
    }
    /**
     * 
     *
     * @param string $experience
     *
     * @return self
     */
    public function setExperience(string $experience) : self
    {
        $this->experience = $experience;
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