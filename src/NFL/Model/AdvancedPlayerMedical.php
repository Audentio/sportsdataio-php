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
     * @var int
     */
    protected $season;
    /**
     * 
     *
     * @var string|null
     */
    protected $incidentDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $injuryDescription;
    /**
     * 
     *
     * @var string|null
     */
    protected $severity;
    /**
     * 
     *
     * @var int|null
     */
    protected $gamesMissed;
    /**
     * 
     *
     * @var int|null
     */
    protected $gamesOnInjuryReport;
    /**
     * 
     *
     * @var string|null
     */
    protected $surgery;
    /**
     * 
     *
     * @var string|null
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
     * @return string|null
     */
    public function getIncidentDate() : ?string
    {
        return $this->incidentDate;
    }
    /**
     * 
     *
     * @param string|null $incidentDate
     *
     * @return self
     */
    public function setIncidentDate(?string $incidentDate) : self
    {
        $this->incidentDate = $incidentDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInjuryDescription() : ?string
    {
        return $this->injuryDescription;
    }
    /**
     * 
     *
     * @param string|null $injuryDescription
     *
     * @return self
     */
    public function setInjuryDescription(?string $injuryDescription) : self
    {
        $this->injuryDescription = $injuryDescription;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSeverity() : ?string
    {
        return $this->severity;
    }
    /**
     * 
     *
     * @param string|null $severity
     *
     * @return self
     */
    public function setSeverity(?string $severity) : self
    {
        $this->severity = $severity;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGamesMissed() : ?int
    {
        return $this->gamesMissed;
    }
    /**
     * 
     *
     * @param int|null $gamesMissed
     *
     * @return self
     */
    public function setGamesMissed(?int $gamesMissed) : self
    {
        $this->gamesMissed = $gamesMissed;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGamesOnInjuryReport() : ?int
    {
        return $this->gamesOnInjuryReport;
    }
    /**
     * 
     *
     * @param int|null $gamesOnInjuryReport
     *
     * @return self
     */
    public function setGamesOnInjuryReport(?int $gamesOnInjuryReport) : self
    {
        $this->gamesOnInjuryReport = $gamesOnInjuryReport;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSurgery() : ?string
    {
        return $this->surgery;
    }
    /**
     * 
     *
     * @param string|null $surgery
     *
     * @return self
     */
    public function setSurgery(?string $surgery) : self
    {
        $this->surgery = $surgery;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRecoveryTimetable() : ?string
    {
        return $this->recoveryTimetable;
    }
    /**
     * 
     *
     * @param string|null $recoveryTimetable
     *
     * @return self
     */
    public function setRecoveryTimetable(?string $recoveryTimetable) : self
    {
        $this->recoveryTimetable = $recoveryTimetable;
        return $this;
    }
}