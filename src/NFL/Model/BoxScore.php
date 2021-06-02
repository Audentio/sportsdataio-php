<?php

namespace Sportsdata\API\NFL\Model;

class BoxScore
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
     * @var Game
     */
    protected $game;
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
     * @var FantasyDefenseGame
     */
    protected $awayFantasyDefense;
    /**
     * 
     *
     * @var FantasyDefenseGame
     */
    protected $homeFantasyDefense;
    /**
     * 
     *
     * @var PlayerPassing[]
     */
    protected $awayPassing;
    /**
     * 
     *
     * @var PlayerRushing[]
     */
    protected $awayRushing;
    /**
     * 
     *
     * @var PlayerReceiving[]
     */
    protected $awayReceiving;
    /**
     * 
     *
     * @var PlayerKicking[]
     */
    protected $awayKicking;
    /**
     * 
     *
     * @var PlayerPunting[]
     */
    protected $awayPunting;
    /**
     * 
     *
     * @var PlayerKickPuntReturns[]
     */
    protected $awayKickPuntReturns;
    /**
     * 
     *
     * @var PlayerDefense[]
     */
    protected $awayDefense;
    /**
     * 
     *
     * @var PlayerPassing[]
     */
    protected $homePassing;
    /**
     * 
     *
     * @var PlayerRushing[]
     */
    protected $homeRushing;
    /**
     * 
     *
     * @var PlayerReceiving[]
     */
    protected $homeReceiving;
    /**
     * 
     *
     * @var PlayerKicking[]
     */
    protected $homeKicking;
    /**
     * 
     *
     * @var PlayerPunting[]
     */
    protected $homePunting;
    /**
     * 
     *
     * @var PlayerKickPuntReturns[]
     */
    protected $homeKickPuntReturns;
    /**
     * 
     *
     * @var PlayerDefense[]
     */
    protected $homeDefense;
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
     * @return Game
     */
    public function getGame() : Game
    {
        return $this->game;
    }
    /**
     * 
     *
     * @param Game $game
     *
     * @return self
     */
    public function setGame(Game $game) : self
    {
        $this->game = $game;
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
    /**
     * 
     *
     * @return FantasyDefenseGame
     */
    public function getAwayFantasyDefense() : FantasyDefenseGame
    {
        return $this->awayFantasyDefense;
    }
    /**
     * 
     *
     * @param FantasyDefenseGame $awayFantasyDefense
     *
     * @return self
     */
    public function setAwayFantasyDefense(FantasyDefenseGame $awayFantasyDefense) : self
    {
        $this->awayFantasyDefense = $awayFantasyDefense;
        return $this;
    }
    /**
     * 
     *
     * @return FantasyDefenseGame
     */
    public function getHomeFantasyDefense() : FantasyDefenseGame
    {
        return $this->homeFantasyDefense;
    }
    /**
     * 
     *
     * @param FantasyDefenseGame $homeFantasyDefense
     *
     * @return self
     */
    public function setHomeFantasyDefense(FantasyDefenseGame $homeFantasyDefense) : self
    {
        $this->homeFantasyDefense = $homeFantasyDefense;
        return $this;
    }
    /**
     * 
     *
     * @return PlayerPassing[]
     */
    public function getAwayPassing() : array
    {
        return $this->awayPassing;
    }
    /**
     * 
     *
     * @param PlayerPassing[] $awayPassing
     *
     * @return self
     */
    public function setAwayPassing(array $awayPassing) : self
    {
        $this->awayPassing = $awayPassing;
        return $this;
    }
    /**
     * 
     *
     * @return PlayerRushing[]
     */
    public function getAwayRushing() : array
    {
        return $this->awayRushing;
    }
    /**
     * 
     *
     * @param PlayerRushing[] $awayRushing
     *
     * @return self
     */
    public function setAwayRushing(array $awayRushing) : self
    {
        $this->awayRushing = $awayRushing;
        return $this;
    }
    /**
     * 
     *
     * @return PlayerReceiving[]
     */
    public function getAwayReceiving() : array
    {
        return $this->awayReceiving;
    }
    /**
     * 
     *
     * @param PlayerReceiving[] $awayReceiving
     *
     * @return self
     */
    public function setAwayReceiving(array $awayReceiving) : self
    {
        $this->awayReceiving = $awayReceiving;
        return $this;
    }
    /**
     * 
     *
     * @return PlayerKicking[]
     */
    public function getAwayKicking() : array
    {
        return $this->awayKicking;
    }
    /**
     * 
     *
     * @param PlayerKicking[] $awayKicking
     *
     * @return self
     */
    public function setAwayKicking(array $awayKicking) : self
    {
        $this->awayKicking = $awayKicking;
        return $this;
    }
    /**
     * 
     *
     * @return PlayerPunting[]
     */
    public function getAwayPunting() : array
    {
        return $this->awayPunting;
    }
    /**
     * 
     *
     * @param PlayerPunting[] $awayPunting
     *
     * @return self
     */
    public function setAwayPunting(array $awayPunting) : self
    {
        $this->awayPunting = $awayPunting;
        return $this;
    }
    /**
     * 
     *
     * @return PlayerKickPuntReturns[]
     */
    public function getAwayKickPuntReturns() : array
    {
        return $this->awayKickPuntReturns;
    }
    /**
     * 
     *
     * @param PlayerKickPuntReturns[] $awayKickPuntReturns
     *
     * @return self
     */
    public function setAwayKickPuntReturns(array $awayKickPuntReturns) : self
    {
        $this->awayKickPuntReturns = $awayKickPuntReturns;
        return $this;
    }
    /**
     * 
     *
     * @return PlayerDefense[]
     */
    public function getAwayDefense() : array
    {
        return $this->awayDefense;
    }
    /**
     * 
     *
     * @param PlayerDefense[] $awayDefense
     *
     * @return self
     */
    public function setAwayDefense(array $awayDefense) : self
    {
        $this->awayDefense = $awayDefense;
        return $this;
    }
    /**
     * 
     *
     * @return PlayerPassing[]
     */
    public function getHomePassing() : array
    {
        return $this->homePassing;
    }
    /**
     * 
     *
     * @param PlayerPassing[] $homePassing
     *
     * @return self
     */
    public function setHomePassing(array $homePassing) : self
    {
        $this->homePassing = $homePassing;
        return $this;
    }
    /**
     * 
     *
     * @return PlayerRushing[]
     */
    public function getHomeRushing() : array
    {
        return $this->homeRushing;
    }
    /**
     * 
     *
     * @param PlayerRushing[] $homeRushing
     *
     * @return self
     */
    public function setHomeRushing(array $homeRushing) : self
    {
        $this->homeRushing = $homeRushing;
        return $this;
    }
    /**
     * 
     *
     * @return PlayerReceiving[]
     */
    public function getHomeReceiving() : array
    {
        return $this->homeReceiving;
    }
    /**
     * 
     *
     * @param PlayerReceiving[] $homeReceiving
     *
     * @return self
     */
    public function setHomeReceiving(array $homeReceiving) : self
    {
        $this->homeReceiving = $homeReceiving;
        return $this;
    }
    /**
     * 
     *
     * @return PlayerKicking[]
     */
    public function getHomeKicking() : array
    {
        return $this->homeKicking;
    }
    /**
     * 
     *
     * @param PlayerKicking[] $homeKicking
     *
     * @return self
     */
    public function setHomeKicking(array $homeKicking) : self
    {
        $this->homeKicking = $homeKicking;
        return $this;
    }
    /**
     * 
     *
     * @return PlayerPunting[]
     */
    public function getHomePunting() : array
    {
        return $this->homePunting;
    }
    /**
     * 
     *
     * @param PlayerPunting[] $homePunting
     *
     * @return self
     */
    public function setHomePunting(array $homePunting) : self
    {
        $this->homePunting = $homePunting;
        return $this;
    }
    /**
     * 
     *
     * @return PlayerKickPuntReturns[]
     */
    public function getHomeKickPuntReturns() : array
    {
        return $this->homeKickPuntReturns;
    }
    /**
     * 
     *
     * @param PlayerKickPuntReturns[] $homeKickPuntReturns
     *
     * @return self
     */
    public function setHomeKickPuntReturns(array $homeKickPuntReturns) : self
    {
        $this->homeKickPuntReturns = $homeKickPuntReturns;
        return $this;
    }
    /**
     * 
     *
     * @return PlayerDefense[]
     */
    public function getHomeDefense() : array
    {
        return $this->homeDefense;
    }
    /**
     * 
     *
     * @param PlayerDefense[] $homeDefense
     *
     * @return self
     */
    public function setHomeDefense(array $homeDefense) : self
    {
        $this->homeDefense = $homeDefense;
        return $this;
    }
}