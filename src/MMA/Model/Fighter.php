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
    protected $nickname;
    /**
     * 
     *
     * @var string|null
     */
    protected $weightClass;
    /**
     * 
     *
     * @var string|null
     */
    protected $birthDate;
    /**
     * 
     *
     * @var float|null
     */
    protected $height;
    /**
     * 
     *
     * @var float|null
     */
    protected $weight;
    /**
     * 
     *
     * @var float|null
     */
    protected $reach;
    /**
     * 
     *
     * @var int|null
     */
    protected $wins;
    /**
     * 
     *
     * @var int|null
     */
    protected $losses;
    /**
     * 
     *
     * @var int|null
     */
    protected $draws;
    /**
     * 
     *
     * @var int|null
     */
    protected $noContests;
    /**
     * 
     *
     * @var int|null
     */
    protected $technicalKnockouts;
    /**
     * 
     *
     * @var int|null
     */
    protected $technicalKnockoutLosses;
    /**
     * 
     *
     * @var int|null
     */
    protected $submissions;
    /**
     * 
     *
     * @var int|null
     */
    protected $submissionLosses;
    /**
     * 
     *
     * @var int|null
     */
    protected $titleWins;
    /**
     * 
     *
     * @var int|null
     */
    protected $titleLosses;
    /**
     * 
     *
     * @var int|null
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
    public function getNickname() : ?string
    {
        return $this->nickname;
    }
    /**
     * 
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setNickname(?string $nickname) : self
    {
        $this->nickname = $nickname;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWeightClass() : ?string
    {
        return $this->weightClass;
    }
    /**
     * 
     *
     * @param string|null $weightClass
     *
     * @return self
     */
    public function setWeightClass(?string $weightClass) : self
    {
        $this->weightClass = $weightClass;
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
     * @return float|null
     */
    public function getHeight() : ?float
    {
        return $this->height;
    }
    /**
     * 
     *
     * @param float|null $height
     *
     * @return self
     */
    public function setHeight(?float $height) : self
    {
        $this->height = $height;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getWeight() : ?float
    {
        return $this->weight;
    }
    /**
     * 
     *
     * @param float|null $weight
     *
     * @return self
     */
    public function setWeight(?float $weight) : self
    {
        $this->weight = $weight;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getReach() : ?float
    {
        return $this->reach;
    }
    /**
     * 
     *
     * @param float|null $reach
     *
     * @return self
     */
    public function setReach(?float $reach) : self
    {
        $this->reach = $reach;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWins() : ?int
    {
        return $this->wins;
    }
    /**
     * 
     *
     * @param int|null $wins
     *
     * @return self
     */
    public function setWins(?int $wins) : self
    {
        $this->wins = $wins;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLosses() : ?int
    {
        return $this->losses;
    }
    /**
     * 
     *
     * @param int|null $losses
     *
     * @return self
     */
    public function setLosses(?int $losses) : self
    {
        $this->losses = $losses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDraws() : ?int
    {
        return $this->draws;
    }
    /**
     * 
     *
     * @param int|null $draws
     *
     * @return self
     */
    public function setDraws(?int $draws) : self
    {
        $this->draws = $draws;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNoContests() : ?int
    {
        return $this->noContests;
    }
    /**
     * 
     *
     * @param int|null $noContests
     *
     * @return self
     */
    public function setNoContests(?int $noContests) : self
    {
        $this->noContests = $noContests;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTechnicalKnockouts() : ?int
    {
        return $this->technicalKnockouts;
    }
    /**
     * 
     *
     * @param int|null $technicalKnockouts
     *
     * @return self
     */
    public function setTechnicalKnockouts(?int $technicalKnockouts) : self
    {
        $this->technicalKnockouts = $technicalKnockouts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTechnicalKnockoutLosses() : ?int
    {
        return $this->technicalKnockoutLosses;
    }
    /**
     * 
     *
     * @param int|null $technicalKnockoutLosses
     *
     * @return self
     */
    public function setTechnicalKnockoutLosses(?int $technicalKnockoutLosses) : self
    {
        $this->technicalKnockoutLosses = $technicalKnockoutLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSubmissions() : ?int
    {
        return $this->submissions;
    }
    /**
     * 
     *
     * @param int|null $submissions
     *
     * @return self
     */
    public function setSubmissions(?int $submissions) : self
    {
        $this->submissions = $submissions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSubmissionLosses() : ?int
    {
        return $this->submissionLosses;
    }
    /**
     * 
     *
     * @param int|null $submissionLosses
     *
     * @return self
     */
    public function setSubmissionLosses(?int $submissionLosses) : self
    {
        $this->submissionLosses = $submissionLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTitleWins() : ?int
    {
        return $this->titleWins;
    }
    /**
     * 
     *
     * @param int|null $titleWins
     *
     * @return self
     */
    public function setTitleWins(?int $titleWins) : self
    {
        $this->titleWins = $titleWins;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTitleLosses() : ?int
    {
        return $this->titleLosses;
    }
    /**
     * 
     *
     * @param int|null $titleLosses
     *
     * @return self
     */
    public function setTitleLosses(?int $titleLosses) : self
    {
        $this->titleLosses = $titleLosses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTitleDraws() : ?int
    {
        return $this->titleDraws;
    }
    /**
     * 
     *
     * @param int|null $titleDraws
     *
     * @return self
     */
    public function setTitleDraws(?int $titleDraws) : self
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