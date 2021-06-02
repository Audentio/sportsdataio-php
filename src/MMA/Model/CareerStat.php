<?php

namespace Sportsdata\API\MMA\Model;

class CareerStat
{
    /**
     * 
     *
     * @var int
     */
    protected $fighterId;
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
     * @var float
     */
    protected $sigStrikesLandedPerMinute;
    /**
     * 
     *
     * @var float
     */
    protected $sigStrikeAccuracy;
    /**
     * 
     *
     * @var float
     */
    protected $takedownAverage;
    /**
     * 
     *
     * @var float
     */
    protected $submissionAverage;
    /**
     * 
     *
     * @var float
     */
    protected $knockoutPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $technicalKnockoutPercentage;
    /**
     * 
     *
     * @var float
     */
    protected $decisionPercentage;
    /**
     * 
     *
     * @return int
     */
    public function getFighterId() : int
    {
        return $this->fighterId;
    }
    /**
     * 
     *
     * @param int $fighterId
     *
     * @return self
     */
    public function setFighterId(int $fighterId) : self
    {
        $this->fighterId = $fighterId;
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
     * @return float
     */
    public function getSigStrikesLandedPerMinute() : float
    {
        return $this->sigStrikesLandedPerMinute;
    }
    /**
     * 
     *
     * @param float $sigStrikesLandedPerMinute
     *
     * @return self
     */
    public function setSigStrikesLandedPerMinute(float $sigStrikesLandedPerMinute) : self
    {
        $this->sigStrikesLandedPerMinute = $sigStrikesLandedPerMinute;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSigStrikeAccuracy() : float
    {
        return $this->sigStrikeAccuracy;
    }
    /**
     * 
     *
     * @param float $sigStrikeAccuracy
     *
     * @return self
     */
    public function setSigStrikeAccuracy(float $sigStrikeAccuracy) : self
    {
        $this->sigStrikeAccuracy = $sigStrikeAccuracy;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTakedownAverage() : float
    {
        return $this->takedownAverage;
    }
    /**
     * 
     *
     * @param float $takedownAverage
     *
     * @return self
     */
    public function setTakedownAverage(float $takedownAverage) : self
    {
        $this->takedownAverage = $takedownAverage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSubmissionAverage() : float
    {
        return $this->submissionAverage;
    }
    /**
     * 
     *
     * @param float $submissionAverage
     *
     * @return self
     */
    public function setSubmissionAverage(float $submissionAverage) : self
    {
        $this->submissionAverage = $submissionAverage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getKnockoutPercentage() : float
    {
        return $this->knockoutPercentage;
    }
    /**
     * 
     *
     * @param float $knockoutPercentage
     *
     * @return self
     */
    public function setKnockoutPercentage(float $knockoutPercentage) : self
    {
        $this->knockoutPercentage = $knockoutPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTechnicalKnockoutPercentage() : float
    {
        return $this->technicalKnockoutPercentage;
    }
    /**
     * 
     *
     * @param float $technicalKnockoutPercentage
     *
     * @return self
     */
    public function setTechnicalKnockoutPercentage(float $technicalKnockoutPercentage) : self
    {
        $this->technicalKnockoutPercentage = $technicalKnockoutPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDecisionPercentage() : float
    {
        return $this->decisionPercentage;
    }
    /**
     * 
     *
     * @param float $decisionPercentage
     *
     * @return self
     */
    public function setDecisionPercentage(float $decisionPercentage) : self
    {
        $this->decisionPercentage = $decisionPercentage;
        return $this;
    }
}