<?php

namespace Sportsdata\API\MMA\Model;

class Fighter
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
     * @var string
     */
    protected $nickname;
    /**
     * 
     *
     * @var string
     */
    protected $weightClass;
    /**
     * 
     *
     * @var string
     */
    protected $birthDate;
    /**
     * 
     *
     * @var float
     */
    protected $height;
    /**
     * 
     *
     * @var float
     */
    protected $weight;
    /**
     * 
     *
     * @var float
     */
    protected $reach;
    /**
     * 
     *
     * @var int
     */
    protected $wins;
    /**
     * 
     *
     * @var int
     */
    protected $losses;
    /**
     * 
     *
     * @var int
     */
    protected $draws;
    /**
     * 
     *
     * @var int
     */
    protected $noContests;
    /**
     * 
     *
     * @var int
     */
    protected $technicalKnockouts;
    /**
     * 
     *
     * @var int
     */
    protected $technicalKnockoutLosses;
    /**
     * 
     *
     * @var int
     */
    protected $submissions;
    /**
     * 
     *
     * @var int
     */
    protected $submissionLosses;
    /**
     * 
     *
     * @var int
     */
    protected $titleWins;
    /**
     * 
     *
     * @var int
     */
    protected $titleLosses;
    /**
     * 
     *
     * @var int
     */
    protected $titleDraws;
    /**
     * 
     *
     * @var CareerStat
     */
    protected $careerStats;
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
     * @return string
     */
    public function getNickname() : string
    {
        return $this->nickname;
    }
    /**
     * 
     *
     * @param string $nickname
     *
     * @return self
     */
    public function setNickname(string $nickname) : self
    {
        $this->nickname = $nickname;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWeightClass() : string
    {
        return $this->weightClass;
    }
    /**
     * 
     *
     * @param string $weightClass
     *
     * @return self
     */
    public function setWeightClass(string $weightClass) : self
    {
        $this->weightClass = $weightClass;
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
     * @return float
     */
    public function getHeight() : float
    {
        return $this->height;
    }
    /**
     * 
     *
     * @param float $height
     *
     * @return self
     */
    public function setHeight(float $height) : self
    {
        $this->height = $height;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWeight() : float
    {
        return $this->weight;
    }
    /**
     * 
     *
     * @param float $weight
     *
     * @return self
     */
    public function setWeight(float $weight) : self
    {
        $this->weight = $weight;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getReach() : float
    {
        return $this->reach;
    }
    /**
     * 
     *
     * @param float $reach
     *
     * @return self
     */
    public function setReach(float $reach) : self
    {
        $this->reach = $reach;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWins() : int
    {
        return $this->wins;
    }
    /**
     * 
     *
     * @param int $wins
     *
     * @return self
     */
    public function setWins(int $wins) : self
    {
        $this->wins = $wins;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLosses() : int
    {
        return $this->losses;
    }
    /**
     * 
     *
     * @param int $losses
     *
     * @return self
     */
    public function setLosses(int $losses) : self
    {
        $this->losses = $losses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDraws() : int
    {
        return $this->draws;
    }
    /**
     * 
     *
     * @param int $draws
     *
     * @return self
     */
    public function setDraws(int $draws) : self
    {
        $this->draws = $draws;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNoContests() : int
    {
        return $this->noContests;
    }
    /**
     * 
     *
     * @param int $noContests
     *
     * @return self
     */
    public function setNoContests(int $noContests) : self
    {
        $this->noContests = $noContests;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTechnicalKnockouts() : int
    {
        return $this->technicalKnockouts;
    }
    /**
     * 
     *
     * @param int $technicalKnockouts
     *
     * @return self
     */
    public function setTechnicalKnockouts(int $technicalKnockouts) : self
    {
        $this->technicalKnockouts = $technicalKnockouts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTechnicalKnockoutLosses() : int
    {
        return $this->technicalKnockoutLosses;
    }
    /**
     * 
     *
     * @param int $technicalKnockoutLosses
     *
     * @return self
     */
    public function setTechnicalKnockoutLosses(int $technicalKnockoutLosses) : self
    {
        $this->technicalKnockoutLosses = $technicalKnockoutLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSubmissions() : int
    {
        return $this->submissions;
    }
    /**
     * 
     *
     * @param int $submissions
     *
     * @return self
     */
    public function setSubmissions(int $submissions) : self
    {
        $this->submissions = $submissions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSubmissionLosses() : int
    {
        return $this->submissionLosses;
    }
    /**
     * 
     *
     * @param int $submissionLosses
     *
     * @return self
     */
    public function setSubmissionLosses(int $submissionLosses) : self
    {
        $this->submissionLosses = $submissionLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTitleWins() : int
    {
        return $this->titleWins;
    }
    /**
     * 
     *
     * @param int $titleWins
     *
     * @return self
     */
    public function setTitleWins(int $titleWins) : self
    {
        $this->titleWins = $titleWins;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTitleLosses() : int
    {
        return $this->titleLosses;
    }
    /**
     * 
     *
     * @param int $titleLosses
     *
     * @return self
     */
    public function setTitleLosses(int $titleLosses) : self
    {
        $this->titleLosses = $titleLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTitleDraws() : int
    {
        return $this->titleDraws;
    }
    /**
     * 
     *
     * @param int $titleDraws
     *
     * @return self
     */
    public function setTitleDraws(int $titleDraws) : self
    {
        $this->titleDraws = $titleDraws;
        return $this;
    }
    /**
     * 
     *
     * @return CareerStat
     */
    public function getCareerStats() : CareerStat
    {
        return $this->careerStats;
    }
    /**
     * 
     *
     * @param CareerStat $careerStats
     *
     * @return self
     */
    public function setCareerStats(CareerStat $careerStats) : self
    {
        $this->careerStats = $careerStats;
        return $this;
    }
}