<?php

namespace Sportsdata\API\MMA\Model;

class FightStat
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
     * @var bool
     */
    protected $winner;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPoints;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsDraftKings;
    /**
     * 
     *
     * @var float
     */
    protected $knockdowns;
    /**
     * 
     *
     * @var float
     */
    protected $totalStrikesAttempted;
    /**
     * 
     *
     * @var float
     */
    protected $totalStrikesLanded;
    /**
     * 
     *
     * @var float
     */
    protected $sigStrikesAttempted;
    /**
     * 
     *
     * @var float
     */
    protected $sigStrikesLanded;
    /**
     * 
     *
     * @var float
     */
    protected $takedownsAttempted;
    /**
     * 
     *
     * @var float
     */
    protected $takedownsLanded;
    /**
     * 
     *
     * @var float
     */
    protected $takedownsSlams;
    /**
     * 
     *
     * @var float
     */
    protected $takedownAccuracy;
    /**
     * 
     *
     * @var float
     */
    protected $advances;
    /**
     * 
     *
     * @var float
     */
    protected $reversals;
    /**
     * 
     *
     * @var float
     */
    protected $submissions;
    /**
     * 
     *
     * @var float
     */
    protected $slamRate;
    /**
     * 
     *
     * @var float
     */
    protected $timeInControl;
    /**
     * 
     *
     * @var bool
     */
    protected $firstRoundWin;
    /**
     * 
     *
     * @var bool
     */
    protected $secondRoundWin;
    /**
     * 
     *
     * @var bool
     */
    protected $thirdRoundWin;
    /**
     * 
     *
     * @var bool
     */
    protected $fourthRoundWin;
    /**
     * 
     *
     * @var bool
     */
    protected $fifthRoundWin;
    /**
     * 
     *
     * @var bool
     */
    protected $decisionWin;
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
     * @return bool
     */
    public function getWinner() : bool
    {
        return $this->winner;
    }
    /**
     * 
     *
     * @param bool $winner
     *
     * @return self
     */
    public function setWinner(bool $winner) : self
    {
        $this->winner = $winner;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyPoints() : float
    {
        return $this->fantasyPoints;
    }
    /**
     * 
     *
     * @param float $fantasyPoints
     *
     * @return self
     */
    public function setFantasyPoints(float $fantasyPoints) : self
    {
        $this->fantasyPoints = $fantasyPoints;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyPointsDraftKings() : float
    {
        return $this->fantasyPointsDraftKings;
    }
    /**
     * 
     *
     * @param float $fantasyPointsDraftKings
     *
     * @return self
     */
    public function setFantasyPointsDraftKings(float $fantasyPointsDraftKings) : self
    {
        $this->fantasyPointsDraftKings = $fantasyPointsDraftKings;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getKnockdowns() : float
    {
        return $this->knockdowns;
    }
    /**
     * 
     *
     * @param float $knockdowns
     *
     * @return self
     */
    public function setKnockdowns(float $knockdowns) : self
    {
        $this->knockdowns = $knockdowns;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalStrikesAttempted() : float
    {
        return $this->totalStrikesAttempted;
    }
    /**
     * 
     *
     * @param float $totalStrikesAttempted
     *
     * @return self
     */
    public function setTotalStrikesAttempted(float $totalStrikesAttempted) : self
    {
        $this->totalStrikesAttempted = $totalStrikesAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalStrikesLanded() : float
    {
        return $this->totalStrikesLanded;
    }
    /**
     * 
     *
     * @param float $totalStrikesLanded
     *
     * @return self
     */
    public function setTotalStrikesLanded(float $totalStrikesLanded) : self
    {
        $this->totalStrikesLanded = $totalStrikesLanded;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSigStrikesAttempted() : float
    {
        return $this->sigStrikesAttempted;
    }
    /**
     * 
     *
     * @param float $sigStrikesAttempted
     *
     * @return self
     */
    public function setSigStrikesAttempted(float $sigStrikesAttempted) : self
    {
        $this->sigStrikesAttempted = $sigStrikesAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSigStrikesLanded() : float
    {
        return $this->sigStrikesLanded;
    }
    /**
     * 
     *
     * @param float $sigStrikesLanded
     *
     * @return self
     */
    public function setSigStrikesLanded(float $sigStrikesLanded) : self
    {
        $this->sigStrikesLanded = $sigStrikesLanded;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTakedownsAttempted() : float
    {
        return $this->takedownsAttempted;
    }
    /**
     * 
     *
     * @param float $takedownsAttempted
     *
     * @return self
     */
    public function setTakedownsAttempted(float $takedownsAttempted) : self
    {
        $this->takedownsAttempted = $takedownsAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTakedownsLanded() : float
    {
        return $this->takedownsLanded;
    }
    /**
     * 
     *
     * @param float $takedownsLanded
     *
     * @return self
     */
    public function setTakedownsLanded(float $takedownsLanded) : self
    {
        $this->takedownsLanded = $takedownsLanded;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTakedownsSlams() : float
    {
        return $this->takedownsSlams;
    }
    /**
     * 
     *
     * @param float $takedownsSlams
     *
     * @return self
     */
    public function setTakedownsSlams(float $takedownsSlams) : self
    {
        $this->takedownsSlams = $takedownsSlams;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTakedownAccuracy() : float
    {
        return $this->takedownAccuracy;
    }
    /**
     * 
     *
     * @param float $takedownAccuracy
     *
     * @return self
     */
    public function setTakedownAccuracy(float $takedownAccuracy) : self
    {
        $this->takedownAccuracy = $takedownAccuracy;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAdvances() : float
    {
        return $this->advances;
    }
    /**
     * 
     *
     * @param float $advances
     *
     * @return self
     */
    public function setAdvances(float $advances) : self
    {
        $this->advances = $advances;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getReversals() : float
    {
        return $this->reversals;
    }
    /**
     * 
     *
     * @param float $reversals
     *
     * @return self
     */
    public function setReversals(float $reversals) : self
    {
        $this->reversals = $reversals;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSubmissions() : float
    {
        return $this->submissions;
    }
    /**
     * 
     *
     * @param float $submissions
     *
     * @return self
     */
    public function setSubmissions(float $submissions) : self
    {
        $this->submissions = $submissions;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSlamRate() : float
    {
        return $this->slamRate;
    }
    /**
     * 
     *
     * @param float $slamRate
     *
     * @return self
     */
    public function setSlamRate(float $slamRate) : self
    {
        $this->slamRate = $slamRate;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTimeInControl() : float
    {
        return $this->timeInControl;
    }
    /**
     * 
     *
     * @param float $timeInControl
     *
     * @return self
     */
    public function setTimeInControl(float $timeInControl) : self
    {
        $this->timeInControl = $timeInControl;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFirstRoundWin() : bool
    {
        return $this->firstRoundWin;
    }
    /**
     * 
     *
     * @param bool $firstRoundWin
     *
     * @return self
     */
    public function setFirstRoundWin(bool $firstRoundWin) : self
    {
        $this->firstRoundWin = $firstRoundWin;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSecondRoundWin() : bool
    {
        return $this->secondRoundWin;
    }
    /**
     * 
     *
     * @param bool $secondRoundWin
     *
     * @return self
     */
    public function setSecondRoundWin(bool $secondRoundWin) : self
    {
        $this->secondRoundWin = $secondRoundWin;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getThirdRoundWin() : bool
    {
        return $this->thirdRoundWin;
    }
    /**
     * 
     *
     * @param bool $thirdRoundWin
     *
     * @return self
     */
    public function setThirdRoundWin(bool $thirdRoundWin) : self
    {
        $this->thirdRoundWin = $thirdRoundWin;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFourthRoundWin() : bool
    {
        return $this->fourthRoundWin;
    }
    /**
     * 
     *
     * @param bool $fourthRoundWin
     *
     * @return self
     */
    public function setFourthRoundWin(bool $fourthRoundWin) : self
    {
        $this->fourthRoundWin = $fourthRoundWin;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFifthRoundWin() : bool
    {
        return $this->fifthRoundWin;
    }
    /**
     * 
     *
     * @param bool $fifthRoundWin
     *
     * @return self
     */
    public function setFifthRoundWin(bool $fifthRoundWin) : self
    {
        $this->fifthRoundWin = $fifthRoundWin;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDecisionWin() : bool
    {
        return $this->decisionWin;
    }
    /**
     * 
     *
     * @param bool $decisionWin
     *
     * @return self
     */
    public function setDecisionWin(bool $decisionWin) : self
    {
        $this->decisionWin = $decisionWin;
        return $this;
    }
}