<?php

namespace Sportsdata\API\MLB\Model;

class Pitch
{
    /**
     * 
     *
     * @var int
     */
    protected $pitchID;
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
    protected $pitchNumberThisAtBat;
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
    protected $hitterID;
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
    protected $ballsBeforePitch;
    /**
     * 
     *
     * @var int
     */
    protected $strikesBeforePitch;
    /**
     * 
     *
     * @var bool
     */
    protected $strike;
    /**
     * 
     *
     * @var bool
     */
    protected $ball;
    /**
     * 
     *
     * @var bool
     */
    protected $foul;
    /**
     * 
     *
     * @var bool
     */
    protected $swinging;
    /**
     * 
     *
     * @var bool
     */
    protected $looking;
    /**
     * 
     *
     * @return int
     */
    public function getPitchID() : int
    {
        return $this->pitchID;
    }
    /**
     * 
     *
     * @param int $pitchID
     *
     * @return self
     */
    public function setPitchID(int $pitchID) : self
    {
        $this->pitchID = $pitchID;
        return $this;
    }
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
    public function getBallsBeforePitch() : int
    {
        return $this->ballsBeforePitch;
    }
    /**
     * 
     *
     * @param int $ballsBeforePitch
     *
     * @return self
     */
    public function setBallsBeforePitch(int $ballsBeforePitch) : self
    {
        $this->ballsBeforePitch = $ballsBeforePitch;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStrikesBeforePitch() : int
    {
        return $this->strikesBeforePitch;
    }
    /**
     * 
     *
     * @param int $strikesBeforePitch
     *
     * @return self
     */
    public function setStrikesBeforePitch(int $strikesBeforePitch) : self
    {
        $this->strikesBeforePitch = $strikesBeforePitch;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getStrike() : bool
    {
        return $this->strike;
    }
    /**
     * 
     *
     * @param bool $strike
     *
     * @return self
     */
    public function setStrike(bool $strike) : self
    {
        $this->strike = $strike;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBall() : bool
    {
        return $this->ball;
    }
    /**
     * 
     *
     * @param bool $ball
     *
     * @return self
     */
    public function setBall(bool $ball) : self
    {
        $this->ball = $ball;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFoul() : bool
    {
        return $this->foul;
    }
    /**
     * 
     *
     * @param bool $foul
     *
     * @return self
     */
    public function setFoul(bool $foul) : self
    {
        $this->foul = $foul;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSwinging() : bool
    {
        return $this->swinging;
    }
    /**
     * 
     *
     * @param bool $swinging
     *
     * @return self
     */
    public function setSwinging(bool $swinging) : self
    {
        $this->swinging = $swinging;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getLooking() : bool
    {
        return $this->looking;
    }
    /**
     * 
     *
     * @param bool $looking
     *
     * @return self
     */
    public function setLooking(bool $looking) : self
    {
        $this->looking = $looking;
        return $this;
    }
}