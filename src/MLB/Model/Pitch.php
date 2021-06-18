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
     * @var int|null
     */
    protected $pitchNumberThisAtBat;
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
    protected $hitterID;
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
    protected $ballsBeforePitch;
    /**
     * 
     *
     * @var int|null
     */
    protected $strikesBeforePitch;
    /**
     * 
     *
     * @var bool|null
     */
    protected $strike;
    /**
     * 
     *
     * @var bool|null
     */
    protected $ball;
    /**
     * 
     *
     * @var bool|null
     */
    protected $foul;
    /**
     * 
     *
     * @var bool|null
     */
    protected $swinging;
    /**
     * 
     *
     * @var bool|null
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
    public function getBallsBeforePitch() : ?int
    {
        return $this->ballsBeforePitch;
    }
    /**
     * 
     *
     * @param int|null $ballsBeforePitch
     *
     * @return self
     */
    public function setBallsBeforePitch(?int $ballsBeforePitch) : self
    {
        $this->ballsBeforePitch = $ballsBeforePitch;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStrikesBeforePitch() : ?int
    {
        return $this->strikesBeforePitch;
    }
    /**
     * 
     *
     * @param int|null $strikesBeforePitch
     *
     * @return self
     */
    public function setStrikesBeforePitch(?int $strikesBeforePitch) : self
    {
        $this->strikesBeforePitch = $strikesBeforePitch;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getStrike() : ?bool
    {
        return $this->strike;
    }
    /**
     * 
     *
     * @param bool|null $strike
     *
     * @return self
     */
    public function setStrike(?bool $strike) : self
    {
        $this->strike = $strike;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getBall() : ?bool
    {
        return $this->ball;
    }
    /**
     * 
     *
     * @param bool|null $ball
     *
     * @return self
     */
    public function setBall(?bool $ball) : self
    {
        $this->ball = $ball;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getFoul() : ?bool
    {
        return $this->foul;
    }
    /**
     * 
     *
     * @param bool|null $foul
     *
     * @return self
     */
    public function setFoul(?bool $foul) : self
    {
        $this->foul = $foul;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSwinging() : ?bool
    {
        return $this->swinging;
    }
    /**
     * 
     *
     * @param bool|null $swinging
     *
     * @return self
     */
    public function setSwinging(?bool $swinging) : self
    {
        $this->swinging = $swinging;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getLooking() : ?bool
    {
        return $this->looking;
    }
    /**
     * 
     *
     * @param bool|null $looking
     *
     * @return self
     */
    public function setLooking(?bool $looking) : self
    {
        $this->looking = $looking;
        return $this;
    }
}