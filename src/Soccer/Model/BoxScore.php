<?php

namespace Sportsdata\API\Soccer\Model;

class BoxScore
{
    /**
     * 
     *
     * @var Game
     */
    protected $game;
    /**
     * 
     *
     * @var Coach
     */
    protected $awayTeamCoach;
    /**
     * 
     *
     * @var Coach
     */
    protected $homeTeamCoach;
    /**
     * 
     *
     * @var Referee
     */
    protected $mainReferee;
    /**
     * 
     *
     * @var Referee
     */
    protected $assistantReferee1;
    /**
     * 
     *
     * @var Referee
     */
    protected $assistantReferee2;
    /**
     * 
     *
     * @var Referee
     */
    protected $fourthReferee;
    /**
     * 
     *
     * @var Referee
     */
    protected $additionalAssistantReferee1;
    /**
     * 
     *
     * @var Referee
     */
    protected $additionalAssistantReferee2;
    /**
     * 
     *
     * @var Lineup[]
     */
    protected $lineups;
    /**
     * 
     *
     * @var Goal[]
     */
    protected $goals;
    /**
     * 
     *
     * @var Booking[]
     */
    protected $bookings;
    /**
     * 
     *
     * @var PenaltyShootout[]
     */
    protected $penaltyShootouts;
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
     * @var Referee
     */
    protected $videoAssistantReferee;
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
     * @return Coach
     */
    public function getAwayTeamCoach() : Coach
    {
        return $this->awayTeamCoach;
    }
    /**
     * 
     *
     * @param Coach $awayTeamCoach
     *
     * @return self
     */
    public function setAwayTeamCoach(Coach $awayTeamCoach) : self
    {
        $this->awayTeamCoach = $awayTeamCoach;
        return $this;
    }
    /**
     * 
     *
     * @return Coach
     */
    public function getHomeTeamCoach() : Coach
    {
        return $this->homeTeamCoach;
    }
    /**
     * 
     *
     * @param Coach $homeTeamCoach
     *
     * @return self
     */
    public function setHomeTeamCoach(Coach $homeTeamCoach) : self
    {
        $this->homeTeamCoach = $homeTeamCoach;
        return $this;
    }
    /**
     * 
     *
     * @return Referee
     */
    public function getMainReferee() : Referee
    {
        return $this->mainReferee;
    }
    /**
     * 
     *
     * @param Referee $mainReferee
     *
     * @return self
     */
    public function setMainReferee(Referee $mainReferee) : self
    {
        $this->mainReferee = $mainReferee;
        return $this;
    }
    /**
     * 
     *
     * @return Referee
     */
    public function getAssistantReferee1() : Referee
    {
        return $this->assistantReferee1;
    }
    /**
     * 
     *
     * @param Referee $assistantReferee1
     *
     * @return self
     */
    public function setAssistantReferee1(Referee $assistantReferee1) : self
    {
        $this->assistantReferee1 = $assistantReferee1;
        return $this;
    }
    /**
     * 
     *
     * @return Referee
     */
    public function getAssistantReferee2() : Referee
    {
        return $this->assistantReferee2;
    }
    /**
     * 
     *
     * @param Referee $assistantReferee2
     *
     * @return self
     */
    public function setAssistantReferee2(Referee $assistantReferee2) : self
    {
        $this->assistantReferee2 = $assistantReferee2;
        return $this;
    }
    /**
     * 
     *
     * @return Referee
     */
    public function getFourthReferee() : Referee
    {
        return $this->fourthReferee;
    }
    /**
     * 
     *
     * @param Referee $fourthReferee
     *
     * @return self
     */
    public function setFourthReferee(Referee $fourthReferee) : self
    {
        $this->fourthReferee = $fourthReferee;
        return $this;
    }
    /**
     * 
     *
     * @return Referee
     */
    public function getAdditionalAssistantReferee1() : Referee
    {
        return $this->additionalAssistantReferee1;
    }
    /**
     * 
     *
     * @param Referee $additionalAssistantReferee1
     *
     * @return self
     */
    public function setAdditionalAssistantReferee1(Referee $additionalAssistantReferee1) : self
    {
        $this->additionalAssistantReferee1 = $additionalAssistantReferee1;
        return $this;
    }
    /**
     * 
     *
     * @return Referee
     */
    public function getAdditionalAssistantReferee2() : Referee
    {
        return $this->additionalAssistantReferee2;
    }
    /**
     * 
     *
     * @param Referee $additionalAssistantReferee2
     *
     * @return self
     */
    public function setAdditionalAssistantReferee2(Referee $additionalAssistantReferee2) : self
    {
        $this->additionalAssistantReferee2 = $additionalAssistantReferee2;
        return $this;
    }
    /**
     * 
     *
     * @return Lineup[]
     */
    public function getLineups() : array
    {
        return $this->lineups;
    }
    /**
     * 
     *
     * @param Lineup[] $lineups
     *
     * @return self
     */
    public function setLineups(array $lineups) : self
    {
        $this->lineups = $lineups;
        return $this;
    }
    /**
     * 
     *
     * @return Goal[]
     */
    public function getGoals() : array
    {
        return $this->goals;
    }
    /**
     * 
     *
     * @param Goal[] $goals
     *
     * @return self
     */
    public function setGoals(array $goals) : self
    {
        $this->goals = $goals;
        return $this;
    }
    /**
     * 
     *
     * @return Booking[]
     */
    public function getBookings() : array
    {
        return $this->bookings;
    }
    /**
     * 
     *
     * @param Booking[] $bookings
     *
     * @return self
     */
    public function setBookings(array $bookings) : self
    {
        $this->bookings = $bookings;
        return $this;
    }
    /**
     * 
     *
     * @return PenaltyShootout[]
     */
    public function getPenaltyShootouts() : array
    {
        return $this->penaltyShootouts;
    }
    /**
     * 
     *
     * @param PenaltyShootout[] $penaltyShootouts
     *
     * @return self
     */
    public function setPenaltyShootouts(array $penaltyShootouts) : self
    {
        $this->penaltyShootouts = $penaltyShootouts;
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
     * @return Referee
     */
    public function getVideoAssistantReferee() : Referee
    {
        return $this->videoAssistantReferee;
    }
    /**
     * 
     *
     * @param Referee $videoAssistantReferee
     *
     * @return self
     */
    public function setVideoAssistantReferee(Referee $videoAssistantReferee) : self
    {
        $this->videoAssistantReferee = $videoAssistantReferee;
        return $this;
    }
}