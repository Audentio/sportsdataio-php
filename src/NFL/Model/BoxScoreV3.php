<?php

namespace Sportsdata\API\NFL\Model;

class BoxScoreV3
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
     * @var TeamGame[]
     */
    protected $teamGames;
    /**
     * 
     *
     * @var PlayerGame[]
     */
    protected $playerGames;
    /**
     * 
     *
     * @var FantasyDefenseGame[]
     */
    protected $fantasyDefenseGames;
    /**
     * 
     *
     * @var ScoringPlay[]
     */
    protected $scoringPlays;
    /**
     * 
     *
     * @var ScoringDetail[]
     */
    protected $scoringDetails;
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
     * @return TeamGame[]
     */
    public function getTeamGames() : array
    {
        return $this->teamGames;
    }
    /**
     * 
     *
     * @param TeamGame[] $teamGames
     *
     * @return self
     */
    public function setTeamGames(array $teamGames) : self
    {
        $this->teamGames = $teamGames;
        return $this;
    }
    /**
     * 
     *
     * @return PlayerGame[]
     */
    public function getPlayerGames() : array
    {
        return $this->playerGames;
    }
    /**
     * 
     *
     * @param PlayerGame[] $playerGames
     *
     * @return self
     */
    public function setPlayerGames(array $playerGames) : self
    {
        $this->playerGames = $playerGames;
        return $this;
    }
    /**
     * 
     *
     * @return FantasyDefenseGame[]
     */
    public function getFantasyDefenseGames() : array
    {
        return $this->fantasyDefenseGames;
    }
    /**
     * 
     *
     * @param FantasyDefenseGame[] $fantasyDefenseGames
     *
     * @return self
     */
    public function setFantasyDefenseGames(array $fantasyDefenseGames) : self
    {
        $this->fantasyDefenseGames = $fantasyDefenseGames;
        return $this;
    }
    /**
     * 
     *
     * @return ScoringPlay[]
     */
    public function getScoringPlays() : array
    {
        return $this->scoringPlays;
    }
    /**
     * 
     *
     * @param ScoringPlay[] $scoringPlays
     *
     * @return self
     */
    public function setScoringPlays(array $scoringPlays) : self
    {
        $this->scoringPlays = $scoringPlays;
        return $this;
    }
    /**
     * 
     *
     * @return ScoringDetail[]
     */
    public function getScoringDetails() : array
    {
        return $this->scoringDetails;
    }
    /**
     * 
     *
     * @param ScoringDetail[] $scoringDetails
     *
     * @return self
     */
    public function setScoringDetails(array $scoringDetails) : self
    {
        $this->scoringDetails = $scoringDetails;
        return $this;
    }
}