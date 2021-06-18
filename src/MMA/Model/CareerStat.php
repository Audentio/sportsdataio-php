<?php

namespace Sportsdata\API\MMA\Model;

class CareerStat
{
    /**
     * 
     *
     * @var int|null
     */
    protected $fighterId;
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
     * @var float|null
     */
    protected $sigStrikesLandedPerMinute;
    /**
     * 
     *
     * @var float|null
     */
    protected $sigStrikeAccuracy;
    /**
     * 
     *
     * @var float|null
     */
    protected $takedownAverage;
    /**
     * 
     *
     * @var float|null
     */
    protected $submissionAverage;
    /**
     * 
     *
     * @var float|null
     */
    protected $knockoutPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $technicalKnockoutPercentage;
    /**
     * 
     *
     * @var float|null
     */
    protected $decisionPercentage;
    /**
     * 
     *
     * @return int|null
     */
    public function getFighterId() : ?int
    {
        return $this->fighterId;
    }
    /**
     * 
     *
     * @param int|null $fighterId
     *
     * @return self
     */
    public function setFighterId(?int $fighterId) : self
    {
        $this->fighterId = $fighterId;
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
     * @return float|null
     */
    public function getSigStrikesLandedPerMinute() : ?float
    {
        return $this->sigStrikesLandedPerMinute;
    }
    /**
     * 
     *
     * @param float|null $sigStrikesLandedPerMinute
     *
     * @return self
     */
    public function setSigStrikesLandedPerMinute(?float $sigStrikesLandedPerMinute) : self
    {
        $this->sigStrikesLandedPerMinute = $sigStrikesLandedPerMinute;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSigStrikeAccuracy() : ?float
    {
        return $this->sigStrikeAccuracy;
    }
    /**
     * 
     *
     * @param float|null $sigStrikeAccuracy
     *
     * @return self
     */
    public function setSigStrikeAccuracy(?float $sigStrikeAccuracy) : self
    {
        $this->sigStrikeAccuracy = $sigStrikeAccuracy;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTakedownAverage() : ?float
    {
        return $this->takedownAverage;
    }
    /**
     * 
     *
     * @param float|null $takedownAverage
     *
     * @return self
     */
    public function setTakedownAverage(?float $takedownAverage) : self
    {
        $this->takedownAverage = $takedownAverage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSubmissionAverage() : ?float
    {
        return $this->submissionAverage;
    }
    /**
     * 
     *
     * @param float|null $submissionAverage
     *
     * @return self
     */
    public function setSubmissionAverage(?float $submissionAverage) : self
    {
        $this->submissionAverage = $submissionAverage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getKnockoutPercentage() : ?float
    {
        return $this->knockoutPercentage;
    }
    /**
     * 
     *
     * @param float|null $knockoutPercentage
     *
     * @return self
     */
    public function setKnockoutPercentage(?float $knockoutPercentage) : self
    {
        $this->knockoutPercentage = $knockoutPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTechnicalKnockoutPercentage() : ?float
    {
        return $this->technicalKnockoutPercentage;
    }
    /**
     * 
     *
     * @param float|null $technicalKnockoutPercentage
     *
     * @return self
     */
    public function setTechnicalKnockoutPercentage(?float $technicalKnockoutPercentage) : self
    {
        $this->technicalKnockoutPercentage = $technicalKnockoutPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDecisionPercentage() : ?float
    {
        return $this->decisionPercentage;
    }
    /**
     * 
     *
     * @param float|null $decisionPercentage
     *
     * @return self
     */
    public function setDecisionPercentage(?float $decisionPercentage) : self
    {
        $this->decisionPercentage = $decisionPercentage;
        return $this;
    }
}