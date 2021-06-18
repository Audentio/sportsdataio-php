<?php

namespace Sportsdata\API\Golf\Model;

class PlayerRound
{
    /**
     * 
     *
     * @var int
     */
    protected $playerRoundID;
    /**
     * 
     *
     * @var int
     */
    protected $playerTournamentID;
    /**
     * 
     *
     * @var int|null
     */
    protected $number;
    /**
     * 
     *
     * @var string|null
     */
    protected $day;
    /**
     * 
     *
     * @var int|null
     */
    protected $par;
    /**
     * 
     *
     * @var int|null
     */
    protected $score;
    /**
     * 
     *
     * @var bool
     */
    protected $bogeyFree;
    /**
     * 
     *
     * @var bool
     */
    protected $includesStreakOfThreeBirdiesOrBetter;
    /**
     * 
     *
     * @var int|null
     */
    protected $doubleEagles;
    /**
     * 
     *
     * @var int|null
     */
    protected $eagles;
    /**
     * 
     *
     * @var int|null
     */
    protected $birdies;
    /**
     * 
     *
     * @var int|null
     */
    protected $pars;
    /**
     * 
     *
     * @var int|null
     */
    protected $bogeys;
    /**
     * 
     *
     * @var int|null
     */
    protected $doubleBogeys;
    /**
     * 
     *
     * @var int|null
     */
    protected $worseThanDoubleBogey;
    /**
     * 
     *
     * @var int|null
     */
    protected $holeInOnes;
    /**
     * 
     *
     * @var int|null
     */
    protected $tripleBogeys;
    /**
     * 
     *
     * @var int|null
     */
    protected $worseThanTripleBogey;
    /**
     * 
     *
     * @var PlayerHole[]
     */
    protected $holes;
    /**
     * 
     *
     * @var float|null
     */
    protected $longestBirdieOrBetterStreak;
    /**
     * 
     *
     * @var float|null
     */
    protected $consecutiveBirdieOrBetterCount;
    /**
     * 
     *
     * @var float|null
     */
    protected $bounceBackCount;
    /**
     * 
     *
     * @var bool
     */
    protected $includesStreakOfFourBirdiesOrBetter;
    /**
     * 
     *
     * @var bool
     */
    protected $includesStreakOfFiveBirdiesOrBetter;
    /**
     * 
     *
     * @var bool
     */
    protected $includesFiveOrMoreBirdiesOrBetter;
    /**
     * 
     *
     * @var bool
     */
    protected $includesStreakOfSixBirdiesOrBetter;
    /**
     * 
     *
     * @var string|null
     */
    protected $teeTime;
    /**
     * 
     *
     * @return int
     */
    public function getPlayerRoundID() : int
    {
        return $this->playerRoundID;
    }
    /**
     * 
     *
     * @param int $playerRoundID
     *
     * @return self
     */
    public function setPlayerRoundID(int $playerRoundID) : self
    {
        $this->playerRoundID = $playerRoundID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlayerTournamentID() : int
    {
        return $this->playerTournamentID;
    }
    /**
     * 
     *
     * @param int $playerTournamentID
     *
     * @return self
     */
    public function setPlayerTournamentID(int $playerTournamentID) : self
    {
        $this->playerTournamentID = $playerTournamentID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNumber() : ?int
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param int|null $number
     *
     * @return self
     */
    public function setNumber(?int $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDay() : ?string
    {
        return $this->day;
    }
    /**
     * 
     *
     * @param string|null $day
     *
     * @return self
     */
    public function setDay(?string $day) : self
    {
        $this->day = $day;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPar() : ?int
    {
        return $this->par;
    }
    /**
     * 
     *
     * @param int|null $par
     *
     * @return self
     */
    public function setPar(?int $par) : self
    {
        $this->par = $par;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getScore() : ?int
    {
        return $this->score;
    }
    /**
     * 
     *
     * @param int|null $score
     *
     * @return self
     */
    public function setScore(?int $score) : self
    {
        $this->score = $score;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBogeyFree() : bool
    {
        return $this->bogeyFree;
    }
    /**
     * 
     *
     * @param bool $bogeyFree
     *
     * @return self
     */
    public function setBogeyFree(bool $bogeyFree) : self
    {
        $this->bogeyFree = $bogeyFree;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIncludesStreakOfThreeBirdiesOrBetter() : bool
    {
        return $this->includesStreakOfThreeBirdiesOrBetter;
    }
    /**
     * 
     *
     * @param bool $includesStreakOfThreeBirdiesOrBetter
     *
     * @return self
     */
    public function setIncludesStreakOfThreeBirdiesOrBetter(bool $includesStreakOfThreeBirdiesOrBetter) : self
    {
        $this->includesStreakOfThreeBirdiesOrBetter = $includesStreakOfThreeBirdiesOrBetter;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDoubleEagles() : ?int
    {
        return $this->doubleEagles;
    }
    /**
     * 
     *
     * @param int|null $doubleEagles
     *
     * @return self
     */
    public function setDoubleEagles(?int $doubleEagles) : self
    {
        $this->doubleEagles = $doubleEagles;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getEagles() : ?int
    {
        return $this->eagles;
    }
    /**
     * 
     *
     * @param int|null $eagles
     *
     * @return self
     */
    public function setEagles(?int $eagles) : self
    {
        $this->eagles = $eagles;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBirdies() : ?int
    {
        return $this->birdies;
    }
    /**
     * 
     *
     * @param int|null $birdies
     *
     * @return self
     */
    public function setBirdies(?int $birdies) : self
    {
        $this->birdies = $birdies;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPars() : ?int
    {
        return $this->pars;
    }
    /**
     * 
     *
     * @param int|null $pars
     *
     * @return self
     */
    public function setPars(?int $pars) : self
    {
        $this->pars = $pars;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBogeys() : ?int
    {
        return $this->bogeys;
    }
    /**
     * 
     *
     * @param int|null $bogeys
     *
     * @return self
     */
    public function setBogeys(?int $bogeys) : self
    {
        $this->bogeys = $bogeys;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDoubleBogeys() : ?int
    {
        return $this->doubleBogeys;
    }
    /**
     * 
     *
     * @param int|null $doubleBogeys
     *
     * @return self
     */
    public function setDoubleBogeys(?int $doubleBogeys) : self
    {
        $this->doubleBogeys = $doubleBogeys;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWorseThanDoubleBogey() : ?int
    {
        return $this->worseThanDoubleBogey;
    }
    /**
     * 
     *
     * @param int|null $worseThanDoubleBogey
     *
     * @return self
     */
    public function setWorseThanDoubleBogey(?int $worseThanDoubleBogey) : self
    {
        $this->worseThanDoubleBogey = $worseThanDoubleBogey;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHoleInOnes() : ?int
    {
        return $this->holeInOnes;
    }
    /**
     * 
     *
     * @param int|null $holeInOnes
     *
     * @return self
     */
    public function setHoleInOnes(?int $holeInOnes) : self
    {
        $this->holeInOnes = $holeInOnes;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTripleBogeys() : ?int
    {
        return $this->tripleBogeys;
    }
    /**
     * 
     *
     * @param int|null $tripleBogeys
     *
     * @return self
     */
    public function setTripleBogeys(?int $tripleBogeys) : self
    {
        $this->tripleBogeys = $tripleBogeys;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWorseThanTripleBogey() : ?int
    {
        return $this->worseThanTripleBogey;
    }
    /**
     * 
     *
     * @param int|null $worseThanTripleBogey
     *
     * @return self
     */
    public function setWorseThanTripleBogey(?int $worseThanTripleBogey) : self
    {
        $this->worseThanTripleBogey = $worseThanTripleBogey;
        return $this;
    }
    /**
     * 
     *
     * @return PlayerHole[]
     */
    public function getHoles() : array
    {
        return $this->holes;
    }
    /**
     * 
     *
     * @param PlayerHole[] $holes
     *
     * @return self
     */
    public function setHoles(array $holes) : self
    {
        $this->holes = $holes;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getLongestBirdieOrBetterStreak() : ?float
    {
        return $this->longestBirdieOrBetterStreak;
    }
    /**
     * 
     *
     * @param float|null $longestBirdieOrBetterStreak
     *
     * @return self
     */
    public function setLongestBirdieOrBetterStreak(?float $longestBirdieOrBetterStreak) : self
    {
        $this->longestBirdieOrBetterStreak = $longestBirdieOrBetterStreak;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getConsecutiveBirdieOrBetterCount() : ?float
    {
        return $this->consecutiveBirdieOrBetterCount;
    }
    /**
     * 
     *
     * @param float|null $consecutiveBirdieOrBetterCount
     *
     * @return self
     */
    public function setConsecutiveBirdieOrBetterCount(?float $consecutiveBirdieOrBetterCount) : self
    {
        $this->consecutiveBirdieOrBetterCount = $consecutiveBirdieOrBetterCount;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBounceBackCount() : ?float
    {
        return $this->bounceBackCount;
    }
    /**
     * 
     *
     * @param float|null $bounceBackCount
     *
     * @return self
     */
    public function setBounceBackCount(?float $bounceBackCount) : self
    {
        $this->bounceBackCount = $bounceBackCount;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIncludesStreakOfFourBirdiesOrBetter() : bool
    {
        return $this->includesStreakOfFourBirdiesOrBetter;
    }
    /**
     * 
     *
     * @param bool $includesStreakOfFourBirdiesOrBetter
     *
     * @return self
     */
    public function setIncludesStreakOfFourBirdiesOrBetter(bool $includesStreakOfFourBirdiesOrBetter) : self
    {
        $this->includesStreakOfFourBirdiesOrBetter = $includesStreakOfFourBirdiesOrBetter;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIncludesStreakOfFiveBirdiesOrBetter() : bool
    {
        return $this->includesStreakOfFiveBirdiesOrBetter;
    }
    /**
     * 
     *
     * @param bool $includesStreakOfFiveBirdiesOrBetter
     *
     * @return self
     */
    public function setIncludesStreakOfFiveBirdiesOrBetter(bool $includesStreakOfFiveBirdiesOrBetter) : self
    {
        $this->includesStreakOfFiveBirdiesOrBetter = $includesStreakOfFiveBirdiesOrBetter;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIncludesFiveOrMoreBirdiesOrBetter() : bool
    {
        return $this->includesFiveOrMoreBirdiesOrBetter;
    }
    /**
     * 
     *
     * @param bool $includesFiveOrMoreBirdiesOrBetter
     *
     * @return self
     */
    public function setIncludesFiveOrMoreBirdiesOrBetter(bool $includesFiveOrMoreBirdiesOrBetter) : self
    {
        $this->includesFiveOrMoreBirdiesOrBetter = $includesFiveOrMoreBirdiesOrBetter;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIncludesStreakOfSixBirdiesOrBetter() : bool
    {
        return $this->includesStreakOfSixBirdiesOrBetter;
    }
    /**
     * 
     *
     * @param bool $includesStreakOfSixBirdiesOrBetter
     *
     * @return self
     */
    public function setIncludesStreakOfSixBirdiesOrBetter(bool $includesStreakOfSixBirdiesOrBetter) : self
    {
        $this->includesStreakOfSixBirdiesOrBetter = $includesStreakOfSixBirdiesOrBetter;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTeeTime() : ?string
    {
        return $this->teeTime;
    }
    /**
     * 
     *
     * @param string|null $teeTime
     *
     * @return self
     */
    public function setTeeTime(?string $teeTime) : self
    {
        $this->teeTime = $teeTime;
        return $this;
    }
}