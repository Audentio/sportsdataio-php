<?php

namespace Sportsdata\API\NFL\Model;

class AdvancedPlayerMedical
{
    /**
     * 
     *
     * @var int
     */
    protected $advancedPlayerMedicalID;
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
    protected $season;
    /**
     * 
     *
     * @var string
     */
    protected $incidentDate;
    /**
     * 
     *
     * @var string
     */
    protected $injuryDescription;
    /**
     * 
     *
     * @var string
     */
    protected $severity;
    /**
     * 
     *
     * @var int
     */
    protected $gamesMissed;
    /**
     * 
     *
     * @var int
     */
    protected $gamesOnInjuryReport;
    /**
     * 
     *
     * @var string
     */
    protected $surgery;
    /**
     * 
     *
     * @var string
     */
    protected $recoveryTimetable;
    /**
     * 
     *
     * @return int
     */
    public function getAdvancedPlayerMedicalID() : int
    {
        return $this->advancedPlayerMedicalID;
    }
    /**
     * 
     *
     * @param int $advancedPlayerMedicalID
     *
     * @return self
     */
    public function setAdvancedPlayerMedicalID(int $advancedPlayerMedicalID) : self
    {
        $this->advancedPlayerMedicalID = $advancedPlayerMedicalID;
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
     * @return string
     */
    public function getIncidentDate() : string
    {
        return $this->incidentDate;
    }
    /**
     * 
     *
     * @param string $incidentDate
     *
     * @return self
     */
    public function setIncidentDate(string $incidentDate) : self
    {
        $this->incidentDate = $incidentDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInjuryDescription() : string
    {
        return $this->injuryDescription;
    }
    /**
     * 
     *
     * @param string $injuryDescription
     *
     * @return self
     */
    public function setInjuryDescription(string $injuryDescription) : self
    {
        $this->injuryDescription = $injuryDescription;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSeverity() : string
    {
        return $this->severity;
    }
    /**
     * 
     *
     * @param string $severity
     *
     * @return self
     */
    public function setSeverity(string $severity) : self
    {
        $this->severity = $severity;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGamesMissed() : int
    {
        return $this->gamesMissed;
    }
    /**
     * 
     *
     * @param int $gamesMissed
     *
     * @return self
     */
    public function setGamesMissed(int $gamesMissed) : self
    {
        $this->gamesMissed = $gamesMissed;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGamesOnInjuryReport() : int
    {
        return $this->gamesOnInjuryReport;
    }
    /**
     * 
     *
     * @param int $gamesOnInjuryReport
     *
     * @return self
     */
    public function setGamesOnInjuryReport(int $gamesOnInjuryReport) : self
    {
        $this->gamesOnInjuryReport = $gamesOnInjuryReport;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSurgery() : string
    {
        return $this->surgery;
    }
    /**
     * 
     *
     * @param string $surgery
     *
     * @return self
     */
    public function setSurgery(string $surgery) : self
    {
        $this->surgery = $surgery;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRecoveryTimetable() : string
    {
        return $this->recoveryTimetable;
    }
    /**
     * 
     *
     * @param string $recoveryTimetable
     *
     * @return self
     */
    public function setRecoveryTimetable(string $recoveryTimetable) : self
    {
        $this->recoveryTimetable = $recoveryTimetable;
        return $this;
    }
}