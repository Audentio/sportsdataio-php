<?php

namespace Sportsdata\API\MMA\Model;

class FightStat
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
     * @var bool|null
     */
    protected $winner;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPoints;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsDraftKings;
    /**
     * 
     *
     * @var float|null
     */
    protected $knockdowns;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalStrikesAttempted;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalStrikesLanded;
    /**
     * 
     *
     * @var float|null
     */
    protected $sigStrikesAttempted;
    /**
     * 
     *
     * @var float|null
     */
    protected $sigStrikesLanded;
    /**
     * 
     *
     * @var float|null
     */
    protected $takedownsAttempted;
    /**
     * 
     *
     * @var float|null
     */
    protected $takedownsLanded;
    /**
     * 
     *
     * @var float|null
     */
    protected $takedownsSlams;
    /**
     * 
     *
     * @var float|null
     */
    protected $takedownAccuracy;
    /**
     * 
     *
     * @var float|null
     */
    protected $advances;
    /**
     * 
     *
     * @var float|null
     */
    protected $reversals;
    /**
     * 
     *
     * @var float|null
     */
    protected $submissions;
    /**
     * 
     *
     * @var float|null
     */
    protected $slamRate;
    /**
     * 
     *
     * @var float|null
     */
    protected $timeInControl;
    /**
     * 
     *
     * @var bool|null
     */
    protected $firstRoundWin;
    /**
     * 
     *
     * @var bool|null
     */
    protected $secondRoundWin;
    /**
     * 
     *
     * @var bool|null
     */
    protected $thirdRoundWin;
    /**
     * 
     *
     * @var bool|null
     */
    protected $fourthRoundWin;
    /**
     * 
     *
     * @var bool|null
     */
    protected $fifthRoundWin;
    /**
     * 
     *
     * @var bool|null
     */
    protected $decisionWin;
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
     * @return bool|null
     */
    public function getWinner() : ?bool
    {
        return $this->winner;
    }
    /**
     * 
     *
     * @param bool|null $winner
     *
     * @return self
     */
    public function setWinner(?bool $winner) : self
    {
        $this->winner = $winner;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPoints() : ?float
    {
        return $this->fantasyPoints;
    }
    /**
     * 
     *
     * @param float|null $fantasyPoints
     *
     * @return self
     */
    public function setFantasyPoints(?float $fantasyPoints) : self
    {
        $this->fantasyPoints = $fantasyPoints;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPointsDraftKings() : ?float
    {
        return $this->fantasyPointsDraftKings;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsDraftKings
     *
     * @return self
     */
    public function setFantasyPointsDraftKings(?float $fantasyPointsDraftKings) : self
    {
        $this->fantasyPointsDraftKings = $fantasyPointsDraftKings;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getKnockdowns() : ?float
    {
        return $this->knockdowns;
    }
    /**
     * 
     *
     * @param float|null $knockdowns
     *
     * @return self
     */
    public function setKnockdowns(?float $knockdowns) : self
    {
        $this->knockdowns = $knockdowns;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTotalStrikesAttempted() : ?float
    {
        return $this->totalStrikesAttempted;
    }
    /**
     * 
     *
     * @param float|null $totalStrikesAttempted
     *
     * @return self
     */
    public function setTotalStrikesAttempted(?float $totalStrikesAttempted) : self
    {
        $this->totalStrikesAttempted = $totalStrikesAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTotalStrikesLanded() : ?float
    {
        return $this->totalStrikesLanded;
    }
    /**
     * 
     *
     * @param float|null $totalStrikesLanded
     *
     * @return self
     */
    public function setTotalStrikesLanded(?float $totalStrikesLanded) : self
    {
        $this->totalStrikesLanded = $totalStrikesLanded;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSigStrikesAttempted() : ?float
    {
        return $this->sigStrikesAttempted;
    }
    /**
     * 
     *
     * @param float|null $sigStrikesAttempted
     *
     * @return self
     */
    public function setSigStrikesAttempted(?float $sigStrikesAttempted) : self
    {
        $this->sigStrikesAttempted = $sigStrikesAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSigStrikesLanded() : ?float
    {
        return $this->sigStrikesLanded;
    }
    /**
     * 
     *
     * @param float|null $sigStrikesLanded
     *
     * @return self
     */
    public function setSigStrikesLanded(?float $sigStrikesLanded) : self
    {
        $this->sigStrikesLanded = $sigStrikesLanded;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTakedownsAttempted() : ?float
    {
        return $this->takedownsAttempted;
    }
    /**
     * 
     *
     * @param float|null $takedownsAttempted
     *
     * @return self
     */
    public function setTakedownsAttempted(?float $takedownsAttempted) : self
    {
        $this->takedownsAttempted = $takedownsAttempted;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTakedownsLanded() : ?float
    {
        return $this->takedownsLanded;
    }
    /**
     * 
     *
     * @param float|null $takedownsLanded
     *
     * @return self
     */
    public function setTakedownsLanded(?float $takedownsLanded) : self
    {
        $this->takedownsLanded = $takedownsLanded;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTakedownsSlams() : ?float
    {
        return $this->takedownsSlams;
    }
    /**
     * 
     *
     * @param float|null $takedownsSlams
     *
     * @return self
     */
    public function setTakedownsSlams(?float $takedownsSlams) : self
    {
        $this->takedownsSlams = $takedownsSlams;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTakedownAccuracy() : ?float
    {
        return $this->takedownAccuracy;
    }
    /**
     * 
     *
     * @param float|null $takedownAccuracy
     *
     * @return self
     */
    public function setTakedownAccuracy(?float $takedownAccuracy) : self
    {
        $this->takedownAccuracy = $takedownAccuracy;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAdvances() : ?float
    {
        return $this->advances;
    }
    /**
     * 
     *
     * @param float|null $advances
     *
     * @return self
     */
    public function setAdvances(?float $advances) : self
    {
        $this->advances = $advances;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getReversals() : ?float
    {
        return $this->reversals;
    }
    /**
     * 
     *
     * @param float|null $reversals
     *
     * @return self
     */
    public function setReversals(?float $reversals) : self
    {
        $this->reversals = $reversals;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSubmissions() : ?float
    {
        return $this->submissions;
    }
    /**
     * 
     *
     * @param float|null $submissions
     *
     * @return self
     */
    public function setSubmissions(?float $submissions) : self
    {
        $this->submissions = $submissions;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSlamRate() : ?float
    {
        return $this->slamRate;
    }
    /**
     * 
     *
     * @param float|null $slamRate
     *
     * @return self
     */
    public function setSlamRate(?float $slamRate) : self
    {
        $this->slamRate = $slamRate;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTimeInControl() : ?float
    {
        return $this->timeInControl;
    }
    /**
     * 
     *
     * @param float|null $timeInControl
     *
     * @return self
     */
    public function setTimeInControl(?float $timeInControl) : self
    {
        $this->timeInControl = $timeInControl;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getFirstRoundWin() : ?bool
    {
        return $this->firstRoundWin;
    }
    /**
     * 
     *
     * @param bool|null $firstRoundWin
     *
     * @return self
     */
    public function setFirstRoundWin(?bool $firstRoundWin) : self
    {
        $this->firstRoundWin = $firstRoundWin;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSecondRoundWin() : ?bool
    {
        return $this->secondRoundWin;
    }
    /**
     * 
     *
     * @param bool|null $secondRoundWin
     *
     * @return self
     */
    public function setSecondRoundWin(?bool $secondRoundWin) : self
    {
        $this->secondRoundWin = $secondRoundWin;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getThirdRoundWin() : ?bool
    {
        return $this->thirdRoundWin;
    }
    /**
     * 
     *
     * @param bool|null $thirdRoundWin
     *
     * @return self
     */
    public function setThirdRoundWin(?bool $thirdRoundWin) : self
    {
        $this->thirdRoundWin = $thirdRoundWin;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getFourthRoundWin() : ?bool
    {
        return $this->fourthRoundWin;
    }
    /**
     * 
     *
     * @param bool|null $fourthRoundWin
     *
     * @return self
     */
    public function setFourthRoundWin(?bool $fourthRoundWin) : self
    {
        $this->fourthRoundWin = $fourthRoundWin;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getFifthRoundWin() : ?bool
    {
        return $this->fifthRoundWin;
    }
    /**
     * 
     *
     * @param bool|null $fifthRoundWin
     *
     * @return self
     */
    public function setFifthRoundWin(?bool $fifthRoundWin) : self
    {
        $this->fifthRoundWin = $fifthRoundWin;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDecisionWin() : ?bool
    {
        return $this->decisionWin;
    }
    /**
     * 
     *
     * @param bool|null $decisionWin
     *
     * @return self
     */
    public function setDecisionWin(?bool $decisionWin) : self
    {
        $this->decisionWin = $decisionWin;
        return $this;
    }
}