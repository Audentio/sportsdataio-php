<?php

namespace Sportsdata\API\MLB\Model;

class Play
{
    /**
     * 
     *
     * @var int
     */
    protected $playID;
    /**
     * 
     *
     * @var int
     */
    protected $inningID;
    /**
     * 
     *
     * @var int|null
     */
    protected $inningNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $inningHalf;
    /**
     * 
     *
     * @var int|null
     */
    protected $playNumber;
    /**
     * 
     *
     * @var int|null
     */
    protected $inningBatterNumber;
    /**
     * 
     *
     * @var int|null
     */
    protected $awayTeamRuns;
    /**
     * 
     *
     * @var int|null
     */
    protected $homeTeamRuns;
    /**
     * 
     *
     * @var int|null
     */
    protected $hitterID;
    /**
     * 
     *
     * @var int|null
     */
    protected $pitcherID;
    /**
     * 
     *
     * @var int|null
     */
    protected $hitterTeamID;
    /**
     * 
     *
     * @var int|null
     */
    protected $pitcherTeamID;
    /**
     * 
     *
     * @var string|null
     */
    protected $hitterName;
    /**
     * 
     *
     * @var string|null
     */
    protected $pitcherName;
    /**
     * 
     *
     * @var string|null
     */
    protected $pitcherThrowHand;
    /**
     * 
     *
     * @var string|null
     */
    protected $hitterBatHand;
    /**
     * 
     *
     * @var string|null
     */
    protected $hitterPosition;
    /**
     * 
     *
     * @var int|null
     */
    protected $outs;
    /**
     * 
     *
     * @var int|null
     */
    protected $balls;
    /**
     * 
     *
     * @var int|null
     */
    protected $strikes;
    /**
     * 
     *
     * @var int|null
     */
    protected $pitchNumberThisAtBat;
    /**
     * 
     *
     * @var string|null
     */
    protected $result;
    /**
     * 
     *
     * @var int|null
     */
    protected $numberOfOutsOnPlay;
    /**
     * 
     *
     * @var int|null
     */
    protected $runsBattedIn;
    /**
     * 
     *
     * @var bool|null
     */
    protected $atBat;
    /**
     * 
     *
     * @var bool|null
     */
    protected $strikeout;
    /**
     * 
     *
     * @var bool|null
     */
    protected $walk;
    /**
     * 
     *
     * @var bool|null
     */
    protected $hit;
    /**
     * 
     *
     * @var bool|null
     */
    protected $out;
    /**
     * 
     *
     * @var bool|null
     */
    protected $sacrifice;
    /**
     * 
     *
     * @var bool|null
     */
    protected $error;
    /**
     * 
     *
     * @var string|null
     */
    protected $updated;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var Pitch[]
     */
    protected $pitches;
    /**
     * 
     *
     * @var int|null
     */
    protected $runner1ID;
    /**
     * 
     *
     * @var int|null
     */
    protected $runner2ID;
    /**
     * 
     *
     * @var int|null
     */
    protected $runner3ID;
    /**
     * 
     *
     * @return int
     */
    public function getPlayID() : int
    {
        return $this->playID;
    }
    /**
     * 
     *
     * @param int $playID
     *
     * @return self
     */
    public function setPlayID(int $playID) : self
    {
        $this->playID = $playID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInningID() : int
    {
        return $this->inningID;
    }
    /**
     * 
     *
     * @param int $inningID
     *
     * @return self
     */
    public function setInningID(int $inningID) : self
    {
        $this->inningID = $inningID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getInningNumber() : ?int
    {
        return $this->inningNumber;
    }
    /**
     * 
     *
     * @param int|null $inningNumber
     *
     * @return self
     */
    public function setInningNumber(?int $inningNumber) : self
    {
        $this->inningNumber = $inningNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInningHalf() : ?string
    {
        return $this->inningHalf;
    }
    /**
     * 
     *
     * @param string|null $inningHalf
     *
     * @return self
     */
    public function setInningHalf(?string $inningHalf) : self
    {
        $this->inningHalf = $inningHalf;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPlayNumber() : ?int
    {
        return $this->playNumber;
    }
    /**
     * 
     *
     * @param int|null $playNumber
     *
     * @return self
     */
    public function setPlayNumber(?int $playNumber) : self
    {
        $this->playNumber = $playNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getInningBatterNumber() : ?int
    {
        return $this->inningBatterNumber;
    }
    /**
     * 
     *
     * @param int|null $inningBatterNumber
     *
     * @return self
     */
    public function setInningBatterNumber(?int $inningBatterNumber) : self
    {
        $this->inningBatterNumber = $inningBatterNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAwayTeamRuns() : ?int
    {
        return $this->awayTeamRuns;
    }
    /**
     * 
     *
     * @param int|null $awayTeamRuns
     *
     * @return self
     */
    public function setAwayTeamRuns(?int $awayTeamRuns) : self
    {
        $this->awayTeamRuns = $awayTeamRuns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHomeTeamRuns() : ?int
    {
        return $this->homeTeamRuns;
    }
    /**
     * 
     *
     * @param int|null $homeTeamRuns
     *
     * @return self
     */
    public function setHomeTeamRuns(?int $homeTeamRuns) : self
    {
        $this->homeTeamRuns = $homeTeamRuns;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHitterID() : ?int
    {
        return $this->hitterID;
    }
    /**
     * 
     *
     * @param int|null $hitterID
     *
     * @return self
     */
    public function setHitterID(?int $hitterID) : self
    {
        $this->hitterID = $hitterID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPitcherID() : ?int
    {
        return $this->pitcherID;
    }
    /**
     * 
     *
     * @param int|null $pitcherID
     *
     * @return self
     */
    public function setPitcherID(?int $pitcherID) : self
    {
        $this->pitcherID = $pitcherID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHitterTeamID() : ?int
    {
        return $this->hitterTeamID;
    }
    /**
     * 
     *
     * @param int|null $hitterTeamID
     *
     * @return self
     */
    public function setHitterTeamID(?int $hitterTeamID) : self
    {
        $this->hitterTeamID = $hitterTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPitcherTeamID() : ?int
    {
        return $this->pitcherTeamID;
    }
    /**
     * 
     *
     * @param int|null $pitcherTeamID
     *
     * @return self
     */
    public function setPitcherTeamID(?int $pitcherTeamID) : self
    {
        $this->pitcherTeamID = $pitcherTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHitterName() : ?string
    {
        return $this->hitterName;
    }
    /**
     * 
     *
     * @param string|null $hitterName
     *
     * @return self
     */
    public function setHitterName(?string $hitterName) : self
    {
        $this->hitterName = $hitterName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPitcherName() : ?string
    {
        return $this->pitcherName;
    }
    /**
     * 
     *
     * @param string|null $pitcherName
     *
     * @return self
     */
    public function setPitcherName(?string $pitcherName) : self
    {
        $this->pitcherName = $pitcherName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPitcherThrowHand() : ?string
    {
        return $this->pitcherThrowHand;
    }
    /**
     * 
     *
     * @param string|null $pitcherThrowHand
     *
     * @return self
     */
    public function setPitcherThrowHand(?string $pitcherThrowHand) : self
    {
        $this->pitcherThrowHand = $pitcherThrowHand;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHitterBatHand() : ?string
    {
        return $this->hitterBatHand;
    }
    /**
     * 
     *
     * @param string|null $hitterBatHand
     *
     * @return self
     */
    public function setHitterBatHand(?string $hitterBatHand) : self
    {
        $this->hitterBatHand = $hitterBatHand;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHitterPosition() : ?string
    {
        return $this->hitterPosition;
    }
    /**
     * 
     *
     * @param string|null $hitterPosition
     *
     * @return self
     */
    public function setHitterPosition(?string $hitterPosition) : self
    {
        $this->hitterPosition = $hitterPosition;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOuts() : ?int
    {
        return $this->outs;
    }
    /**
     * 
     *
     * @param int|null $outs
     *
     * @return self
     */
    public function setOuts(?int $outs) : self
    {
        $this->outs = $outs;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBalls() : ?int
    {
        return $this->balls;
    }
    /**
     * 
     *
     * @param int|null $balls
     *
     * @return self
     */
    public function setBalls(?int $balls) : self
    {
        $this->balls = $balls;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStrikes() : ?int
    {
        return $this->strikes;
    }
    /**
     * 
     *
     * @param int|null $strikes
     *
     * @return self
     */
    public function setStrikes(?int $strikes) : self
    {
        $this->strikes = $strikes;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPitchNumberThisAtBat() : ?int
    {
        return $this->pitchNumberThisAtBat;
    }
    /**
     * 
     *
     * @param int|null $pitchNumberThisAtBat
     *
     * @return self
     */
    public function setPitchNumberThisAtBat(?int $pitchNumberThisAtBat) : self
    {
        $this->pitchNumberThisAtBat = $pitchNumberThisAtBat;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getResult() : ?string
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param string|null $result
     *
     * @return self
     */
    public function setResult(?string $result) : self
    {
        $this->result = $result;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNumberOfOutsOnPlay() : ?int
    {
        return $this->numberOfOutsOnPlay;
    }
    /**
     * 
     *
     * @param int|null $numberOfOutsOnPlay
     *
     * @return self
     */
    public function setNumberOfOutsOnPlay(?int $numberOfOutsOnPlay) : self
    {
        $this->numberOfOutsOnPlay = $numberOfOutsOnPlay;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRunsBattedIn() : ?int
    {
        return $this->runsBattedIn;
    }
    /**
     * 
     *
     * @param int|null $runsBattedIn
     *
     * @return self
     */
    public function setRunsBattedIn(?int $runsBattedIn) : self
    {
        $this->runsBattedIn = $runsBattedIn;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getAtBat() : ?bool
    {
        return $this->atBat;
    }
    /**
     * 
     *
     * @param bool|null $atBat
     *
     * @return self
     */
    public function setAtBat(?bool $atBat) : self
    {
        $this->atBat = $atBat;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getStrikeout() : ?bool
    {
        return $this->strikeout;
    }
    /**
     * 
     *
     * @param bool|null $strikeout
     *
     * @return self
     */
    public function setStrikeout(?bool $strikeout) : self
    {
        $this->strikeout = $strikeout;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getWalk() : ?bool
    {
        return $this->walk;
    }
    /**
     * 
     *
     * @param bool|null $walk
     *
     * @return self
     */
    public function setWalk(?bool $walk) : self
    {
        $this->walk = $walk;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getHit() : ?bool
    {
        return $this->hit;
    }
    /**
     * 
     *
     * @param bool|null $hit
     *
     * @return self
     */
    public function setHit(?bool $hit) : self
    {
        $this->hit = $hit;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getOut() : ?bool
    {
        return $this->out;
    }
    /**
     * 
     *
     * @param bool|null $out
     *
     * @return self
     */
    public function setOut(?bool $out) : self
    {
        $this->out = $out;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSacrifice() : ?bool
    {
        return $this->sacrifice;
    }
    /**
     * 
     *
     * @param bool|null $sacrifice
     *
     * @return self
     */
    public function setSacrifice(?bool $sacrifice) : self
    {
        $this->sacrifice = $sacrifice;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getError() : ?bool
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param bool|null $error
     *
     * @return self
     */
    public function setError(?bool $error) : self
    {
        $this->error = $error;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUpdated() : ?string
    {
        return $this->updated;
    }
    /**
     * 
     *
     * @param string|null $updated
     *
     * @return self
     */
    public function setUpdated(?string $updated) : self
    {
        $this->updated = $updated;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return Pitch[]
     */
    public function getPitches() : array
    {
        return $this->pitches;
    }
    /**
     * 
     *
     * @param Pitch[] $pitches
     *
     * @return self
     */
    public function setPitches(array $pitches) : self
    {
        $this->pitches = $pitches;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRunner1ID() : ?int
    {
        return $this->runner1ID;
    }
    /**
     * 
     *
     * @param int|null $runner1ID
     *
     * @return self
     */
    public function setRunner1ID(?int $runner1ID) : self
    {
        $this->runner1ID = $runner1ID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRunner2ID() : ?int
    {
        return $this->runner2ID;
    }
    /**
     * 
     *
     * @param int|null $runner2ID
     *
     * @return self
     */
    public function setRunner2ID(?int $runner2ID) : self
    {
        $this->runner2ID = $runner2ID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRunner3ID() : ?int
    {
        return $this->runner3ID;
    }
    /**
     * 
     *
     * @param int|null $runner3ID
     *
     * @return self
     */
    public function setRunner3ID(?int $runner3ID) : self
    {
        $this->runner3ID = $runner3ID;
        return $this;
    }
}