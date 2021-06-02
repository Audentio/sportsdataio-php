<?php

namespace Sportsdata\API\Golf\Model;

class PlayerTournamentProjection
{
    /**
     * 
     *
     * @var int
     */
    protected $playerTournamentID;
    /**
     * 
     *
     * @var int
     */
    protected $playerID;
    /**
     * 
     *
     * @var int
     */
    protected $tournamentID;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $rank;
    /**
     * 
     *
     * @var string
     */
    protected $country;
    /**
     * 
     *
     * @var float
     */
    protected $totalScore;
    /**
     * 
     *
     * @var float
     */
    protected $totalStrokes;
    /**
     * 
     *
     * @var int
     */
    protected $totalThrough;
    /**
     * 
     *
     * @var float
     */
    protected $earnings;
    /**
     * 
     *
     * @var int
     */
    protected $fedExPoints;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPoints;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsDraftKings;
    /**
     * 
     *
     * @var int
     */
    protected $draftKingsSalary;
    /**
     * 
     *
     * @var float
     */
    protected $doubleEagles;
    /**
     * 
     *
     * @var float
     */
    protected $eagles;
    /**
     * 
     *
     * @var float
     */
    protected $birdies;
    /**
     * 
     *
     * @var float
     */
    protected $pars;
    /**
     * 
     *
     * @var float
     */
    protected $bogeys;
    /**
     * 
     *
     * @var float
     */
    protected $doubleBogeys;
    /**
     * 
     *
     * @var float
     */
    protected $worseThanDoubleBogey;
    /**
     * 
     *
     * @var float
     */
    protected $holeInOnes;
    /**
     * 
     *
     * @var float
     */
    protected $streaksOfThreeBirdiesOrBetter;
    /**
     * 
     *
     * @var float
     */
    protected $bogeyFreeRounds;
    /**
     * 
     *
     * @var float
     */
    protected $roundsUnderSeventy;
    /**
     * 
     *
     * @var float
     */
    protected $tripleBogeys;
    /**
     * 
     *
     * @var float
     */
    protected $worseThanTripleBogey;
    /**
     * 
     *
     * @var string
     */
    protected $teeTime;
    /**
     * 
     *
     * @var float
     */
    protected $madeCut;
    /**
     * 
     *
     * @var float
     */
    protected $win;
    /**
     * 
     *
     * @var string
     */
    protected $tournamentStatus;
    /**
     * 
     *
     * @var bool
     */
    protected $isAlternate;
    /**
     * 
     *
     * @var int
     */
    protected $fanDuelSalary;
    /**
     * 
     *
     * @var int
     */
    protected $fantasyDraftSalary;
    /**
     * 
     *
     * @var bool
     */
    protected $madeCutDidNotFinish;
    /**
     * 
     *
     * @var PlayerRound[]
     */
    protected $rounds;
    /**
     * 
     *
     * @var float
     */
    protected $oddsToWin;
    /**
     * 
     *
     * @var string
     */
    protected $oddsToWinDescription;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsFanDuel;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsFantasyDraft;
    /**
     * 
     *
     * @var float
     */
    protected $streaksOfFourBirdiesOrBetter;
    /**
     * 
     *
     * @var float
     */
    protected $streaksOfFiveBirdiesOrBetter;
    /**
     * 
     *
     * @var float
     */
    protected $consecutiveBirdieOrBetterCount;
    /**
     * 
     *
     * @var float
     */
    protected $bounceBackCount;
    /**
     * 
     *
     * @var float
     */
    protected $roundsWithFiveOrMoreBirdiesOrBetter;
    /**
     * 
     *
     * @var bool
     */
    protected $isWithdrawn;
    /**
     * 
     *
     * @var float
     */
    protected $fantasyPointsYahoo;
    /**
     * 
     *
     * @var float
     */
    protected $streaksOfSixBirdiesOrBetter;
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
     * @return int
     */
    public function getPlayerID() : int
    {
        return $this->playerID;
    }
    /**
     * 
     *
     * @param int $playerID
     *
     * @return self
     */
    public function setPlayerID(int $playerID) : self
    {
        $this->playerID = $playerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTournamentID() : int
    {
        return $this->tournamentID;
    }
    /**
     * 
     *
     * @param int $tournamentID
     *
     * @return self
     */
    public function setTournamentID(int $tournamentID) : self
    {
        $this->tournamentID = $tournamentID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRank() : int
    {
        return $this->rank;
    }
    /**
     * 
     *
     * @param int $rank
     *
     * @return self
     */
    public function setRank(int $rank) : self
    {
        $this->rank = $rank;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCountry() : string
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country) : self
    {
        $this->country = $country;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalScore() : float
    {
        return $this->totalScore;
    }
    /**
     * 
     *
     * @param float $totalScore
     *
     * @return self
     */
    public function setTotalScore(float $totalScore) : self
    {
        $this->totalScore = $totalScore;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalStrokes() : float
    {
        return $this->totalStrokes;
    }
    /**
     * 
     *
     * @param float $totalStrokes
     *
     * @return self
     */
    public function setTotalStrokes(float $totalStrokes) : self
    {
        $this->totalStrokes = $totalStrokes;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalThrough() : int
    {
        return $this->totalThrough;
    }
    /**
     * 
     *
     * @param int $totalThrough
     *
     * @return self
     */
    public function setTotalThrough(int $totalThrough) : self
    {
        $this->totalThrough = $totalThrough;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getEarnings() : float
    {
        return $this->earnings;
    }
    /**
     * 
     *
     * @param float $earnings
     *
     * @return self
     */
    public function setEarnings(float $earnings) : self
    {
        $this->earnings = $earnings;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFedExPoints() : int
    {
        return $this->fedExPoints;
    }
    /**
     * 
     *
     * @param int $fedExPoints
     *
     * @return self
     */
    public function setFedExPoints(int $fedExPoints) : self
    {
        $this->fedExPoints = $fedExPoints;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyPoints() : float
    {
        return $this->fantasyPoints;
    }
    /**
     * 
     *
     * @param float $fantasyPoints
     *
     * @return self
     */
    public function setFantasyPoints(float $fantasyPoints) : self
    {
        $this->fantasyPoints = $fantasyPoints;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyPointsDraftKings() : float
    {
        return $this->fantasyPointsDraftKings;
    }
    /**
     * 
     *
     * @param float $fantasyPointsDraftKings
     *
     * @return self
     */
    public function setFantasyPointsDraftKings(float $fantasyPointsDraftKings) : self
    {
        $this->fantasyPointsDraftKings = $fantasyPointsDraftKings;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDraftKingsSalary() : int
    {
        return $this->draftKingsSalary;
    }
    /**
     * 
     *
     * @param int $draftKingsSalary
     *
     * @return self
     */
    public function setDraftKingsSalary(int $draftKingsSalary) : self
    {
        $this->draftKingsSalary = $draftKingsSalary;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDoubleEagles() : float
    {
        return $this->doubleEagles;
    }
    /**
     * 
     *
     * @param float $doubleEagles
     *
     * @return self
     */
    public function setDoubleEagles(float $doubleEagles) : self
    {
        $this->doubleEagles = $doubleEagles;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getEagles() : float
    {
        return $this->eagles;
    }
    /**
     * 
     *
     * @param float $eagles
     *
     * @return self
     */
    public function setEagles(float $eagles) : self
    {
        $this->eagles = $eagles;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBirdies() : float
    {
        return $this->birdies;
    }
    /**
     * 
     *
     * @param float $birdies
     *
     * @return self
     */
    public function setBirdies(float $birdies) : self
    {
        $this->birdies = $birdies;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPars() : float
    {
        return $this->pars;
    }
    /**
     * 
     *
     * @param float $pars
     *
     * @return self
     */
    public function setPars(float $pars) : self
    {
        $this->pars = $pars;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBogeys() : float
    {
        return $this->bogeys;
    }
    /**
     * 
     *
     * @param float $bogeys
     *
     * @return self
     */
    public function setBogeys(float $bogeys) : self
    {
        $this->bogeys = $bogeys;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDoubleBogeys() : float
    {
        return $this->doubleBogeys;
    }
    /**
     * 
     *
     * @param float $doubleBogeys
     *
     * @return self
     */
    public function setDoubleBogeys(float $doubleBogeys) : self
    {
        $this->doubleBogeys = $doubleBogeys;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWorseThanDoubleBogey() : float
    {
        return $this->worseThanDoubleBogey;
    }
    /**
     * 
     *
     * @param float $worseThanDoubleBogey
     *
     * @return self
     */
    public function setWorseThanDoubleBogey(float $worseThanDoubleBogey) : self
    {
        $this->worseThanDoubleBogey = $worseThanDoubleBogey;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHoleInOnes() : float
    {
        return $this->holeInOnes;
    }
    /**
     * 
     *
     * @param float $holeInOnes
     *
     * @return self
     */
    public function setHoleInOnes(float $holeInOnes) : self
    {
        $this->holeInOnes = $holeInOnes;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getStreaksOfThreeBirdiesOrBetter() : float
    {
        return $this->streaksOfThreeBirdiesOrBetter;
    }
    /**
     * 
     *
     * @param float $streaksOfThreeBirdiesOrBetter
     *
     * @return self
     */
    public function setStreaksOfThreeBirdiesOrBetter(float $streaksOfThreeBirdiesOrBetter) : self
    {
        $this->streaksOfThreeBirdiesOrBetter = $streaksOfThreeBirdiesOrBetter;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBogeyFreeRounds() : float
    {
        return $this->bogeyFreeRounds;
    }
    /**
     * 
     *
     * @param float $bogeyFreeRounds
     *
     * @return self
     */
    public function setBogeyFreeRounds(float $bogeyFreeRounds) : self
    {
        $this->bogeyFreeRounds = $bogeyFreeRounds;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRoundsUnderSeventy() : float
    {
        return $this->roundsUnderSeventy;
    }
    /**
     * 
     *
     * @param float $roundsUnderSeventy
     *
     * @return self
     */
    public function setRoundsUnderSeventy(float $roundsUnderSeventy) : self
    {
        $this->roundsUnderSeventy = $roundsUnderSeventy;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTripleBogeys() : float
    {
        return $this->tripleBogeys;
    }
    /**
     * 
     *
     * @param float $tripleBogeys
     *
     * @return self
     */
    public function setTripleBogeys(float $tripleBogeys) : self
    {
        $this->tripleBogeys = $tripleBogeys;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWorseThanTripleBogey() : float
    {
        return $this->worseThanTripleBogey;
    }
    /**
     * 
     *
     * @param float $worseThanTripleBogey
     *
     * @return self
     */
    public function setWorseThanTripleBogey(float $worseThanTripleBogey) : self
    {
        $this->worseThanTripleBogey = $worseThanTripleBogey;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeeTime() : string
    {
        return $this->teeTime;
    }
    /**
     * 
     *
     * @param string $teeTime
     *
     * @return self
     */
    public function setTeeTime(string $teeTime) : self
    {
        $this->teeTime = $teeTime;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMadeCut() : float
    {
        return $this->madeCut;
    }
    /**
     * 
     *
     * @param float $madeCut
     *
     * @return self
     */
    public function setMadeCut(float $madeCut) : self
    {
        $this->madeCut = $madeCut;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWin() : float
    {
        return $this->win;
    }
    /**
     * 
     *
     * @param float $win
     *
     * @return self
     */
    public function setWin(float $win) : self
    {
        $this->win = $win;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTournamentStatus() : string
    {
        return $this->tournamentStatus;
    }
    /**
     * 
     *
     * @param string $tournamentStatus
     *
     * @return self
     */
    public function setTournamentStatus(string $tournamentStatus) : self
    {
        $this->tournamentStatus = $tournamentStatus;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsAlternate() : bool
    {
        return $this->isAlternate;
    }
    /**
     * 
     *
     * @param bool $isAlternate
     *
     * @return self
     */
    public function setIsAlternate(bool $isAlternate) : self
    {
        $this->isAlternate = $isAlternate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFanDuelSalary() : int
    {
        return $this->fanDuelSalary;
    }
    /**
     * 
     *
     * @param int $fanDuelSalary
     *
     * @return self
     */
    public function setFanDuelSalary(int $fanDuelSalary) : self
    {
        $this->fanDuelSalary = $fanDuelSalary;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFantasyDraftSalary() : int
    {
        return $this->fantasyDraftSalary;
    }
    /**
     * 
     *
     * @param int $fantasyDraftSalary
     *
     * @return self
     */
    public function setFantasyDraftSalary(int $fantasyDraftSalary) : self
    {
        $this->fantasyDraftSalary = $fantasyDraftSalary;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getMadeCutDidNotFinish() : bool
    {
        return $this->madeCutDidNotFinish;
    }
    /**
     * 
     *
     * @param bool $madeCutDidNotFinish
     *
     * @return self
     */
    public function setMadeCutDidNotFinish(bool $madeCutDidNotFinish) : self
    {
        $this->madeCutDidNotFinish = $madeCutDidNotFinish;
        return $this;
    }
    /**
     * 
     *
     * @return PlayerRound[]
     */
    public function getRounds() : array
    {
        return $this->rounds;
    }
    /**
     * 
     *
     * @param PlayerRound[] $rounds
     *
     * @return self
     */
    public function setRounds(array $rounds) : self
    {
        $this->rounds = $rounds;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOddsToWin() : float
    {
        return $this->oddsToWin;
    }
    /**
     * 
     *
     * @param float $oddsToWin
     *
     * @return self
     */
    public function setOddsToWin(float $oddsToWin) : self
    {
        $this->oddsToWin = $oddsToWin;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOddsToWinDescription() : string
    {
        return $this->oddsToWinDescription;
    }
    /**
     * 
     *
     * @param string $oddsToWinDescription
     *
     * @return self
     */
    public function setOddsToWinDescription(string $oddsToWinDescription) : self
    {
        $this->oddsToWinDescription = $oddsToWinDescription;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyPointsFanDuel() : float
    {
        return $this->fantasyPointsFanDuel;
    }
    /**
     * 
     *
     * @param float $fantasyPointsFanDuel
     *
     * @return self
     */
    public function setFantasyPointsFanDuel(float $fantasyPointsFanDuel) : self
    {
        $this->fantasyPointsFanDuel = $fantasyPointsFanDuel;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyPointsFantasyDraft() : float
    {
        return $this->fantasyPointsFantasyDraft;
    }
    /**
     * 
     *
     * @param float $fantasyPointsFantasyDraft
     *
     * @return self
     */
    public function setFantasyPointsFantasyDraft(float $fantasyPointsFantasyDraft) : self
    {
        $this->fantasyPointsFantasyDraft = $fantasyPointsFantasyDraft;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getStreaksOfFourBirdiesOrBetter() : float
    {
        return $this->streaksOfFourBirdiesOrBetter;
    }
    /**
     * 
     *
     * @param float $streaksOfFourBirdiesOrBetter
     *
     * @return self
     */
    public function setStreaksOfFourBirdiesOrBetter(float $streaksOfFourBirdiesOrBetter) : self
    {
        $this->streaksOfFourBirdiesOrBetter = $streaksOfFourBirdiesOrBetter;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getStreaksOfFiveBirdiesOrBetter() : float
    {
        return $this->streaksOfFiveBirdiesOrBetter;
    }
    /**
     * 
     *
     * @param float $streaksOfFiveBirdiesOrBetter
     *
     * @return self
     */
    public function setStreaksOfFiveBirdiesOrBetter(float $streaksOfFiveBirdiesOrBetter) : self
    {
        $this->streaksOfFiveBirdiesOrBetter = $streaksOfFiveBirdiesOrBetter;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getConsecutiveBirdieOrBetterCount() : float
    {
        return $this->consecutiveBirdieOrBetterCount;
    }
    /**
     * 
     *
     * @param float $consecutiveBirdieOrBetterCount
     *
     * @return self
     */
    public function setConsecutiveBirdieOrBetterCount(float $consecutiveBirdieOrBetterCount) : self
    {
        $this->consecutiveBirdieOrBetterCount = $consecutiveBirdieOrBetterCount;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBounceBackCount() : float
    {
        return $this->bounceBackCount;
    }
    /**
     * 
     *
     * @param float $bounceBackCount
     *
     * @return self
     */
    public function setBounceBackCount(float $bounceBackCount) : self
    {
        $this->bounceBackCount = $bounceBackCount;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRoundsWithFiveOrMoreBirdiesOrBetter() : float
    {
        return $this->roundsWithFiveOrMoreBirdiesOrBetter;
    }
    /**
     * 
     *
     * @param float $roundsWithFiveOrMoreBirdiesOrBetter
     *
     * @return self
     */
    public function setRoundsWithFiveOrMoreBirdiesOrBetter(float $roundsWithFiveOrMoreBirdiesOrBetter) : self
    {
        $this->roundsWithFiveOrMoreBirdiesOrBetter = $roundsWithFiveOrMoreBirdiesOrBetter;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsWithdrawn() : bool
    {
        return $this->isWithdrawn;
    }
    /**
     * 
     *
     * @param bool $isWithdrawn
     *
     * @return self
     */
    public function setIsWithdrawn(bool $isWithdrawn) : self
    {
        $this->isWithdrawn = $isWithdrawn;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFantasyPointsYahoo() : float
    {
        return $this->fantasyPointsYahoo;
    }
    /**
     * 
     *
     * @param float $fantasyPointsYahoo
     *
     * @return self
     */
    public function setFantasyPointsYahoo(float $fantasyPointsYahoo) : self
    {
        $this->fantasyPointsYahoo = $fantasyPointsYahoo;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getStreaksOfSixBirdiesOrBetter() : float
    {
        return $this->streaksOfSixBirdiesOrBetter;
    }
    /**
     * 
     *
     * @param float $streaksOfSixBirdiesOrBetter
     *
     * @return self
     */
    public function setStreaksOfSixBirdiesOrBetter(float $streaksOfSixBirdiesOrBetter) : self
    {
        $this->streaksOfSixBirdiesOrBetter = $streaksOfSixBirdiesOrBetter;
        return $this;
    }
}