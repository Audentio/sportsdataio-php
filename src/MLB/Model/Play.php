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
     * @var int
     */
    protected $inningNumber;
    /**
     * 
     *
     * @var string
     */
    protected $inningHalf;
    /**
     * 
     *
     * @var int
     */
    protected $playNumber;
    /**
     * 
     *
     * @var int
     */
    protected $inningBatterNumber;
    /**
     * 
     *
     * @var int
     */
    protected $awayTeamRuns;
    /**
     * 
     *
     * @var int
     */
    protected $homeTeamRuns;
    /**
     * 
     *
     * @var int
     */
    protected $hitterID;
    /**
     * 
     *
     * @var int
     */
    protected $pitcherID;
    /**
     * 
     *
     * @var int
     */
    protected $hitterTeamID;
    /**
     * 
     *
     * @var int
     */
    protected $pitcherTeamID;
    /**
     * 
     *
     * @var string
     */
    protected $hitterName;
    /**
     * 
     *
     * @var string
     */
    protected $pitcherName;
    /**
     * 
     *
     * @var string
     */
    protected $pitcherThrowHand;
    /**
     * 
     *
     * @var string
     */
    protected $hitterBatHand;
    /**
     * 
     *
     * @var string
     */
    protected $hitterPosition;
    /**
     * 
     *
     * @var int
     */
    protected $outs;
    /**
     * 
     *
     * @var int
     */
    protected $balls;
    /**
     * 
     *
     * @var int
     */
    protected $strikes;
    /**
     * 
     *
     * @var int
     */
    protected $pitchNumberThisAtBat;
    /**
     * 
     *
     * @var string
     */
    protected $result;
    /**
     * 
     *
     * @var int
     */
    protected $numberOfOutsOnPlay;
    /**
     * 
     *
     * @var int
     */
    protected $runsBattedIn;
    /**
     * 
     *
     * @var bool
     */
    protected $atBat;
    /**
     * 
     *
     * @var bool
     */
    protected $strikeout;
    /**
     * 
     *
     * @var bool
     */
    protected $walk;
    /**
     * 
     *
     * @var bool
     */
    protected $hit;
    /**
     * 
     *
     * @var bool
     */
    protected $out;
    /**
     * 
     *
     * @var bool
     */
    protected $sacrifice;
    /**
     * 
     *
     * @var bool
     */
    protected $error;
    /**
     * 
     *
     * @var string
     */
    protected $updated;
    /**
     * 
     *
     * @var string
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
     * @var int
     */
    protected $runner1ID;
    /**
     * 
     *
     * @var int
     */
    protected $runner2ID;
    /**
     * 
     *
     * @var int
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
     * @return int
     */
    public function getInningNumber() : int
    {
        return $this->inningNumber;
    }
    /**
     * 
     *
     * @param int $inningNumber
     *
     * @return self
     */
    public function setInningNumber(int $inningNumber) : self
    {
        $this->inningNumber = $inningNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInningHalf() : string
    {
        return $this->inningHalf;
    }
    /**
     * 
     *
     * @param string $inningHalf
     *
     * @return self
     */
    public function setInningHalf(string $inningHalf) : self
    {
        $this->inningHalf = $inningHalf;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlayNumber() : int
    {
        return $this->playNumber;
    }
    /**
     * 
     *
     * @param int $playNumber
     *
     * @return self
     */
    public function setPlayNumber(int $playNumber) : self
    {
        $this->playNumber = $playNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInningBatterNumber() : int
    {
        return $this->inningBatterNumber;
    }
    /**
     * 
     *
     * @param int $inningBatterNumber
     *
     * @return self
     */
    public function setInningBatterNumber(int $inningBatterNumber) : self
    {
        $this->inningBatterNumber = $inningBatterNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAwayTeamRuns() : int
    {
        return $this->awayTeamRuns;
    }
    /**
     * 
     *
     * @param int $awayTeamRuns
     *
     * @return self
     */
    public function setAwayTeamRuns(int $awayTeamRuns) : self
    {
        $this->awayTeamRuns = $awayTeamRuns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHomeTeamRuns() : int
    {
        return $this->homeTeamRuns;
    }
    /**
     * 
     *
     * @param int $homeTeamRuns
     *
     * @return self
     */
    public function setHomeTeamRuns(int $homeTeamRuns) : self
    {
        $this->homeTeamRuns = $homeTeamRuns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHitterID() : int
    {
        return $this->hitterID;
    }
    /**
     * 
     *
     * @param int $hitterID
     *
     * @return self
     */
    public function setHitterID(int $hitterID) : self
    {
        $this->hitterID = $hitterID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPitcherID() : int
    {
        return $this->pitcherID;
    }
    /**
     * 
     *
     * @param int $pitcherID
     *
     * @return self
     */
    public function setPitcherID(int $pitcherID) : self
    {
        $this->pitcherID = $pitcherID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHitterTeamID() : int
    {
        return $this->hitterTeamID;
    }
    /**
     * 
     *
     * @param int $hitterTeamID
     *
     * @return self
     */
    public function setHitterTeamID(int $hitterTeamID) : self
    {
        $this->hitterTeamID = $hitterTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPitcherTeamID() : int
    {
        return $this->pitcherTeamID;
    }
    /**
     * 
     *
     * @param int $pitcherTeamID
     *
     * @return self
     */
    public function setPitcherTeamID(int $pitcherTeamID) : self
    {
        $this->pitcherTeamID = $pitcherTeamID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHitterName() : string
    {
        return $this->hitterName;
    }
    /**
     * 
     *
     * @param string $hitterName
     *
     * @return self
     */
    public function setHitterName(string $hitterName) : self
    {
        $this->hitterName = $hitterName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPitcherName() : string
    {
        return $this->pitcherName;
    }
    /**
     * 
     *
     * @param string $pitcherName
     *
     * @return self
     */
    public function setPitcherName(string $pitcherName) : self
    {
        $this->pitcherName = $pitcherName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPitcherThrowHand() : string
    {
        return $this->pitcherThrowHand;
    }
    /**
     * 
     *
     * @param string $pitcherThrowHand
     *
     * @return self
     */
    public function setPitcherThrowHand(string $pitcherThrowHand) : self
    {
        $this->pitcherThrowHand = $pitcherThrowHand;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHitterBatHand() : string
    {
        return $this->hitterBatHand;
    }
    /**
     * 
     *
     * @param string $hitterBatHand
     *
     * @return self
     */
    public function setHitterBatHand(string $hitterBatHand) : self
    {
        $this->hitterBatHand = $hitterBatHand;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHitterPosition() : string
    {
        return $this->hitterPosition;
    }
    /**
     * 
     *
     * @param string $hitterPosition
     *
     * @return self
     */
    public function setHitterPosition(string $hitterPosition) : self
    {
        $this->hitterPosition = $hitterPosition;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOuts() : int
    {
        return $this->outs;
    }
    /**
     * 
     *
     * @param int $outs
     *
     * @return self
     */
    public function setOuts(int $outs) : self
    {
        $this->outs = $outs;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBalls() : int
    {
        return $this->balls;
    }
    /**
     * 
     *
     * @param int $balls
     *
     * @return self
     */
    public function setBalls(int $balls) : self
    {
        $this->balls = $balls;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStrikes() : int
    {
        return $this->strikes;
    }
    /**
     * 
     *
     * @param int $strikes
     *
     * @return self
     */
    public function setStrikes(int $strikes) : self
    {
        $this->strikes = $strikes;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPitchNumberThisAtBat() : int
    {
        return $this->pitchNumberThisAtBat;
    }
    /**
     * 
     *
     * @param int $pitchNumberThisAtBat
     *
     * @return self
     */
    public function setPitchNumberThisAtBat(int $pitchNumberThisAtBat) : self
    {
        $this->pitchNumberThisAtBat = $pitchNumberThisAtBat;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getResult() : string
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param string $result
     *
     * @return self
     */
    public function setResult(string $result) : self
    {
        $this->result = $result;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNumberOfOutsOnPlay() : int
    {
        return $this->numberOfOutsOnPlay;
    }
    /**
     * 
     *
     * @param int $numberOfOutsOnPlay
     *
     * @return self
     */
    public function setNumberOfOutsOnPlay(int $numberOfOutsOnPlay) : self
    {
        $this->numberOfOutsOnPlay = $numberOfOutsOnPlay;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRunsBattedIn() : int
    {
        return $this->runsBattedIn;
    }
    /**
     * 
     *
     * @param int $runsBattedIn
     *
     * @return self
     */
    public function setRunsBattedIn(int $runsBattedIn) : self
    {
        $this->runsBattedIn = $runsBattedIn;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAtBat() : bool
    {
        return $this->atBat;
    }
    /**
     * 
     *
     * @param bool $atBat
     *
     * @return self
     */
    public function setAtBat(bool $atBat) : self
    {
        $this->atBat = $atBat;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getStrikeout() : bool
    {
        return $this->strikeout;
    }
    /**
     * 
     *
     * @param bool $strikeout
     *
     * @return self
     */
    public function setStrikeout(bool $strikeout) : self
    {
        $this->strikeout = $strikeout;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getWalk() : bool
    {
        return $this->walk;
    }
    /**
     * 
     *
     * @param bool $walk
     *
     * @return self
     */
    public function setWalk(bool $walk) : self
    {
        $this->walk = $walk;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHit() : bool
    {
        return $this->hit;
    }
    /**
     * 
     *
     * @param bool $hit
     *
     * @return self
     */
    public function setHit(bool $hit) : self
    {
        $this->hit = $hit;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getOut() : bool
    {
        return $this->out;
    }
    /**
     * 
     *
     * @param bool $out
     *
     * @return self
     */
    public function setOut(bool $out) : self
    {
        $this->out = $out;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSacrifice() : bool
    {
        return $this->sacrifice;
    }
    /**
     * 
     *
     * @param bool $sacrifice
     *
     * @return self
     */
    public function setSacrifice(bool $sacrifice) : self
    {
        $this->sacrifice = $sacrifice;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getError() : bool
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param bool $error
     *
     * @return self
     */
    public function setError(bool $error) : self
    {
        $this->error = $error;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUpdated() : string
    {
        return $this->updated;
    }
    /**
     * 
     *
     * @param string $updated
     *
     * @return self
     */
    public function setUpdated(string $updated) : self
    {
        $this->updated = $updated;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
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
     * @return int
     */
    public function getRunner1ID() : int
    {
        return $this->runner1ID;
    }
    /**
     * 
     *
     * @param int $runner1ID
     *
     * @return self
     */
    public function setRunner1ID(int $runner1ID) : self
    {
        $this->runner1ID = $runner1ID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRunner2ID() : int
    {
        return $this->runner2ID;
    }
    /**
     * 
     *
     * @param int $runner2ID
     *
     * @return self
     */
    public function setRunner2ID(int $runner2ID) : self
    {
        $this->runner2ID = $runner2ID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRunner3ID() : int
    {
        return $this->runner3ID;
    }
    /**
     * 
     *
     * @param int $runner3ID
     *
     * @return self
     */
    public function setRunner3ID(int $runner3ID) : self
    {
        $this->runner3ID = $runner3ID;
        return $this;
    }
}