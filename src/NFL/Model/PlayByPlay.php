<?php

namespace Sportsdata\API\NFL\Model;

class PlayByPlay
{
    /**
     * 
     *
     * @var Score
     */
    protected $score;
    /**
     * 
     *
     * @var Quarter[]
     */
    protected $quarters;
    /**
     * 
     *
     * @var Play[]
     */
    protected $plays;
    /**
     * 
     *
     * @return Score
     */
    public function getScore() : Score
    {
        return $this->score;
    }
    /**
     * 
     *
     * @param Score $score
     *
     * @return self
     */
    public function setScore(Score $score) : self
    {
        $this->score = $score;
        return $this;
    }
    /**
     * 
     *
     * @return Quarter[]
     */
    public function getQuarters() : array
    {
        return $this->quarters;
    }
    /**
     * 
     *
     * @param Quarter[] $quarters
     *
     * @return self
     */
    public function setQuarters(array $quarters) : self
    {
        $this->quarters = $quarters;
        return $this;
    }
    /**
     * 
     *
     * @return Play[]
     */
    public function getPlays() : array
    {
        return $this->plays;
    }
    /**
     * 
     *
     * @param Play[] $plays
     *
     * @return self
     */
    public function setPlays(array $plays) : self
    {
        $this->plays = $plays;
        return $this;
    }
}