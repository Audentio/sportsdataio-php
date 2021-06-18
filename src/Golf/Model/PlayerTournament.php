<?php

namespace Sportsdata\API\Golf\Model;

class PlayerTournament
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
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var int|null
     */
    protected $rank;
    /**
     * 
     *
     * @var string|null
     */
    protected $country;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalScore;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalStrokes;
    /**
     * 
     *
     * @var int|null
     */
    protected $totalThrough;
    /**
     * 
     *
     * @var float|null
     */
    protected $earnings;
    /**
     * 
     *
     * @var int|null
     */
    protected $fedExPoints;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPoints;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsDraftKings;
    /**
     * 
     *
     * @var int|null
     */
    protected $draftKingsSalary;
    /**
     * 
     *
     * @var float|null
     */
    protected $doubleEagles;
    /**
     * 
     *
     * @var float|null
     */
    protected $eagles;
    /**
     * 
     *
     * @var float|null
     */
    protected $birdies;
    /**
     * 
     *
     * @var float|null
     */
    protected $pars;
    /**
     * 
     *
     * @var float|null
     */
    protected $bogeys;
    /**
     * 
     *
     * @var float|null
     */
    protected $doubleBogeys;
    /**
     * 
     *
     * @var float|null
     */
    protected $worseThanDoubleBogey;
    /**
     * 
     *
     * @var float|null
     */
    protected $holeInOnes;
    /**
     * 
     *
     * @var float|null
     */
    protected $streaksOfThreeBirdiesOrBetter;
    /**
     * 
     *
     * @var float|null
     */
    protected $bogeyFreeRounds;
    /**
     * 
     *
     * @var float|null
     */
    protected $roundsUnderSeventy;
    /**
     * 
     *
     * @var float|null
     */
    protected $tripleBogeys;
    /**
     * 
     *
     * @var float|null
     */
    protected $worseThanTripleBogey;
    /**
     * 
     *
     * @var string|null
     */
    protected $teeTime;
    /**
     * 
     *
     * @var float|null
     */
    protected $madeCut;
    /**
     * 
     *
     * @var float|null
     */
    protected $win;
    /**
     * 
     *
     * @var string|null
     */
    protected $tournamentStatus;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isAlternate;
    /**
     * 
     *
     * @var int|null
     */
    protected $fanDuelSalary;
    /**
     * 
     *
     * @var int|null
     */
    protected $fantasyDraftSalary;
    /**
     * 
     *
     * @var bool|null
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
     * @var float|null
     */
    protected $oddsToWin;
    /**
     * 
     *
     * @var string|null
     */
    protected $oddsToWinDescription;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsFanDuel;
    /**
     * 
     *
     * @var float|null
     */
    protected $fantasyPointsFantasyDraft;
    /**
     * 
     *
     * @var float|null
     */
    protected $streaksOfFourBirdiesOrBetter;
    /**
     * 
     *
     * @var float|null
     */
    protected $streaksOfFiveBirdiesOrBetter;
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
     * @var float|null
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
     * @var float|null
     */
    protected $fantasyPointsYahoo;
    /**
     * 
     *
     * @var float|null
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
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRank() : ?int
    {
        return $this->rank;
    }
    /**
     * 
     *
     * @param int|null $rank
     *
     * @return self
     */
    public function setRank(?int $rank) : self
    {
        $this->rank = $rank;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCountry() : ?string
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param string|null $country
     *
     * @return self
     */
    public function setCountry(?string $country) : self
    {
        $this->country = $country;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTotalScore() : ?float
    {
        return $this->totalScore;
    }
    /**
     * 
     *
     * @param float|null $totalScore
     *
     * @return self
     */
    public function setTotalScore(?float $totalScore) : self
    {
        $this->totalScore = $totalScore;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTotalStrokes() : ?float
    {
        return $this->totalStrokes;
    }
    /**
     * 
     *
     * @param float|null $totalStrokes
     *
     * @return self
     */
    public function setTotalStrokes(?float $totalStrokes) : self
    {
        $this->totalStrokes = $totalStrokes;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTotalThrough() : ?int
    {
        return $this->totalThrough;
    }
    /**
     * 
     *
     * @param int|null $totalThrough
     *
     * @return self
     */
    public function setTotalThrough(?int $totalThrough) : self
    {
        $this->totalThrough = $totalThrough;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getEarnings() : ?float
    {
        return $this->earnings;
    }
    /**
     * 
     *
     * @param float|null $earnings
     *
     * @return self
     */
    public function setEarnings(?float $earnings) : self
    {
        $this->earnings = $earnings;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFedExPoints() : ?int
    {
        return $this->fedExPoints;
    }
    /**
     * 
     *
     * @param int|null $fedExPoints
     *
     * @return self
     */
    public function setFedExPoints(?int $fedExPoints) : self
    {
        $this->fedExPoints = $fedExPoints;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPoints() : ?float
    {
        return $this->fantasyPoints;
    }
    /**
     * 
     *
     * @param float|null $fantasyPoints
     *
     * @return self
     */
    public function setFantasyPoints(?float $fantasyPoints) : self
    {
        $this->fantasyPoints = $fantasyPoints;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPointsDraftKings() : ?float
    {
        return $this->fantasyPointsDraftKings;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsDraftKings
     *
     * @return self
     */
    public function setFantasyPointsDraftKings(?float $fantasyPointsDraftKings) : self
    {
        $this->fantasyPointsDraftKings = $fantasyPointsDraftKings;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDraftKingsSalary() : ?int
    {
        return $this->draftKingsSalary;
    }
    /**
     * 
     *
     * @param int|null $draftKingsSalary
     *
     * @return self
     */
    public function setDraftKingsSalary(?int $draftKingsSalary) : self
    {
        $this->draftKingsSalary = $draftKingsSalary;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDoubleEagles() : ?float
    {
        return $this->doubleEagles;
    }
    /**
     * 
     *
     * @param float|null $doubleEagles
     *
     * @return self
     */
    public function setDoubleEagles(?float $doubleEagles) : self
    {
        $this->doubleEagles = $doubleEagles;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getEagles() : ?float
    {
        return $this->eagles;
    }
    /**
     * 
     *
     * @param float|null $eagles
     *
     * @return self
     */
    public function setEagles(?float $eagles) : self
    {
        $this->eagles = $eagles;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBirdies() : ?float
    {
        return $this->birdies;
    }
    /**
     * 
     *
     * @param float|null $birdies
     *
     * @return self
     */
    public function setBirdies(?float $birdies) : self
    {
        $this->birdies = $birdies;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPars() : ?float
    {
        return $this->pars;
    }
    /**
     * 
     *
     * @param float|null $pars
     *
     * @return self
     */
    public function setPars(?float $pars) : self
    {
        $this->pars = $pars;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBogeys() : ?float
    {
        return $this->bogeys;
    }
    /**
     * 
     *
     * @param float|null $bogeys
     *
     * @return self
     */
    public function setBogeys(?float $bogeys) : self
    {
        $this->bogeys = $bogeys;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDoubleBogeys() : ?float
    {
        return $this->doubleBogeys;
    }
    /**
     * 
     *
     * @param float|null $doubleBogeys
     *
     * @return self
     */
    public function setDoubleBogeys(?float $doubleBogeys) : self
    {
        $this->doubleBogeys = $doubleBogeys;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getWorseThanDoubleBogey() : ?float
    {
        return $this->worseThanDoubleBogey;
    }
    /**
     * 
     *
     * @param float|null $worseThanDoubleBogey
     *
     * @return self
     */
    public function setWorseThanDoubleBogey(?float $worseThanDoubleBogey) : self
    {
        $this->worseThanDoubleBogey = $worseThanDoubleBogey;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHoleInOnes() : ?float
    {
        return $this->holeInOnes;
    }
    /**
     * 
     *
     * @param float|null $holeInOnes
     *
     * @return self
     */
    public function setHoleInOnes(?float $holeInOnes) : self
    {
        $this->holeInOnes = $holeInOnes;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getStreaksOfThreeBirdiesOrBetter() : ?float
    {
        return $this->streaksOfThreeBirdiesOrBetter;
    }
    /**
     * 
     *
     * @param float|null $streaksOfThreeBirdiesOrBetter
     *
     * @return self
     */
    public function setStreaksOfThreeBirdiesOrBetter(?float $streaksOfThreeBirdiesOrBetter) : self
    {
        $this->streaksOfThreeBirdiesOrBetter = $streaksOfThreeBirdiesOrBetter;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBogeyFreeRounds() : ?float
    {
        return $this->bogeyFreeRounds;
    }
    /**
     * 
     *
     * @param float|null $bogeyFreeRounds
     *
     * @return self
     */
    public function setBogeyFreeRounds(?float $bogeyFreeRounds) : self
    {
        $this->bogeyFreeRounds = $bogeyFreeRounds;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRoundsUnderSeventy() : ?float
    {
        return $this->roundsUnderSeventy;
    }
    /**
     * 
     *
     * @param float|null $roundsUnderSeventy
     *
     * @return self
     */
    public function setRoundsUnderSeventy(?float $roundsUnderSeventy) : self
    {
        $this->roundsUnderSeventy = $roundsUnderSeventy;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTripleBogeys() : ?float
    {
        return $this->tripleBogeys;
    }
    /**
     * 
     *
     * @param float|null $tripleBogeys
     *
     * @return self
     */
    public function setTripleBogeys(?float $tripleBogeys) : self
    {
        $this->tripleBogeys = $tripleBogeys;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getWorseThanTripleBogey() : ?float
    {
        return $this->worseThanTripleBogey;
    }
    /**
     * 
     *
     * @param float|null $worseThanTripleBogey
     *
     * @return self
     */
    public function setWorseThanTripleBogey(?float $worseThanTripleBogey) : self
    {
        $this->worseThanTripleBogey = $worseThanTripleBogey;
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
    /**
     * 
     *
     * @return float|null
     */
    public function getMadeCut() : ?float
    {
        return $this->madeCut;
    }
    /**
     * 
     *
     * @param float|null $madeCut
     *
     * @return self
     */
    public function setMadeCut(?float $madeCut) : self
    {
        $this->madeCut = $madeCut;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getWin() : ?float
    {
        return $this->win;
    }
    /**
     * 
     *
     * @param float|null $win
     *
     * @return self
     */
    public function setWin(?float $win) : self
    {
        $this->win = $win;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTournamentStatus() : ?string
    {
        return $this->tournamentStatus;
    }
    /**
     * 
     *
     * @param string|null $tournamentStatus
     *
     * @return self
     */
    public function setTournamentStatus(?string $tournamentStatus) : self
    {
        $this->tournamentStatus = $tournamentStatus;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsAlternate() : ?bool
    {
        return $this->isAlternate;
    }
    /**
     * 
     *
     * @param bool|null $isAlternate
     *
     * @return self
     */
    public function setIsAlternate(?bool $isAlternate) : self
    {
        $this->isAlternate = $isAlternate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFanDuelSalary() : ?int
    {
        return $this->fanDuelSalary;
    }
    /**
     * 
     *
     * @param int|null $fanDuelSalary
     *
     * @return self
     */
    public function setFanDuelSalary(?int $fanDuelSalary) : self
    {
        $this->fanDuelSalary = $fanDuelSalary;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFantasyDraftSalary() : ?int
    {
        return $this->fantasyDraftSalary;
    }
    /**
     * 
     *
     * @param int|null $fantasyDraftSalary
     *
     * @return self
     */
    public function setFantasyDraftSalary(?int $fantasyDraftSalary) : self
    {
        $this->fantasyDraftSalary = $fantasyDraftSalary;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getMadeCutDidNotFinish() : ?bool
    {
        return $this->madeCutDidNotFinish;
    }
    /**
     * 
     *
     * @param bool|null $madeCutDidNotFinish
     *
     * @return self
     */
    public function setMadeCutDidNotFinish(?bool $madeCutDidNotFinish) : self
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
     * @return float|null
     */
    public function getOddsToWin() : ?float
    {
        return $this->oddsToWin;
    }
    /**
     * 
     *
     * @param float|null $oddsToWin
     *
     * @return self
     */
    public function setOddsToWin(?float $oddsToWin) : self
    {
        $this->oddsToWin = $oddsToWin;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOddsToWinDescription() : ?string
    {
        return $this->oddsToWinDescription;
    }
    /**
     * 
     *
     * @param string|null $oddsToWinDescription
     *
     * @return self
     */
    public function setOddsToWinDescription(?string $oddsToWinDescription) : self
    {
        $this->oddsToWinDescription = $oddsToWinDescription;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPointsFanDuel() : ?float
    {
        return $this->fantasyPointsFanDuel;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsFanDuel
     *
     * @return self
     */
    public function setFantasyPointsFanDuel(?float $fantasyPointsFanDuel) : self
    {
        $this->fantasyPointsFanDuel = $fantasyPointsFanDuel;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFantasyPointsFantasyDraft() : ?float
    {
        return $this->fantasyPointsFantasyDraft;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsFantasyDraft
     *
     * @return self
     */
    public function setFantasyPointsFantasyDraft(?float $fantasyPointsFantasyDraft) : self
    {
        $this->fantasyPointsFantasyDraft = $fantasyPointsFantasyDraft;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getStreaksOfFourBirdiesOrBetter() : ?float
    {
        return $this->streaksOfFourBirdiesOrBetter;
    }
    /**
     * 
     *
     * @param float|null $streaksOfFourBirdiesOrBetter
     *
     * @return self
     */
    public function setStreaksOfFourBirdiesOrBetter(?float $streaksOfFourBirdiesOrBetter) : self
    {
        $this->streaksOfFourBirdiesOrBetter = $streaksOfFourBirdiesOrBetter;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getStreaksOfFiveBirdiesOrBetter() : ?float
    {
        return $this->streaksOfFiveBirdiesOrBetter;
    }
    /**
     * 
     *
     * @param float|null $streaksOfFiveBirdiesOrBetter
     *
     * @return self
     */
    public function setStreaksOfFiveBirdiesOrBetter(?float $streaksOfFiveBirdiesOrBetter) : self
    {
        $this->streaksOfFiveBirdiesOrBetter = $streaksOfFiveBirdiesOrBetter;
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
     * @return float|null
     */
    public function getRoundsWithFiveOrMoreBirdiesOrBetter() : ?float
    {
        return $this->roundsWithFiveOrMoreBirdiesOrBetter;
    }
    /**
     * 
     *
     * @param float|null $roundsWithFiveOrMoreBirdiesOrBetter
     *
     * @return self
     */
    public function setRoundsWithFiveOrMoreBirdiesOrBetter(?float $roundsWithFiveOrMoreBirdiesOrBetter) : self
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
     * @return float|null
     */
    public function getFantasyPointsYahoo() : ?float
    {
        return $this->fantasyPointsYahoo;
    }
    /**
     * 
     *
     * @param float|null $fantasyPointsYahoo
     *
     * @return self
     */
    public function setFantasyPointsYahoo(?float $fantasyPointsYahoo) : self
    {
        $this->fantasyPointsYahoo = $fantasyPointsYahoo;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getStreaksOfSixBirdiesOrBetter() : ?float
    {
        return $this->streaksOfSixBirdiesOrBetter;
    }
    /**
     * 
     *
     * @param float|null $streaksOfSixBirdiesOrBetter
     *
     * @return self
     */
    public function setStreaksOfSixBirdiesOrBetter(?float $streaksOfSixBirdiesOrBetter) : self
    {
        $this->streaksOfSixBirdiesOrBetter = $streaksOfSixBirdiesOrBetter;
        return $this;
    }
}