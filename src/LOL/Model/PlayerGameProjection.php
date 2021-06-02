<?php

namespace Sportsdata\API\LOL\Model;

class PlayerGameProjection
{
    /**
     * 
     *
     * @var int
     */
    protected $gameId;
    /**
     * 
     *
     * @var int
     */
    protected $opponentId;
    /**
     * 
     *
     * @var string
     */
    protected $opponent;
    /**
     * 
     *
     * @var string
     */
    protected $day;
    /**
     * 
     *
     * @var string
     */
    protected $dateTime;
    /**
     * 
     *
     * @var string
     */
    protected $position;
    /**
     * 
     *
     * @var int
     */
    protected $playerId;
    /**
     * 
     *
     * @var int
     */
    protected $teamId;
    /**
     * 
     *
     * @var string
     */
    protected $team;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $matchName;
    /**
     * 
     *
     * @var float
     */
    protected $kills;
    /**
     * 
     *
     * @var float
     */
    protected $assists;
    /**
     * 
     *
     * @var float
     */
    protected $deaths;
    /**
     * 
     *
     * @var float
     */
    protected $largestKillingSpree;
    /**
     * 
     *
     * @var float
     */
    protected $largestMultiKill;
    /**
     * 
     *
     * @var float
     */
    protected $killingSpree;
    /**
     * 
     *
     * @var float
     */
    protected $longestTimeSpentLiving;
    /**
     * 
     *
     * @var float
     */
    protected $doubleKills;
    /**
     * 
     *
     * @var float
     */
    protected $tripleKills;
    /**
     * 
     *
     * @var float
     */
    protected $quadraKills;
    /**
     * 
     *
     * @var float
     */
    protected $pentaKills;
    /**
     * 
     *
     * @var float
     */
    protected $unrealKills;
    /**
     * 
     *
     * @var float
     */
    protected $totalDamageDealt;
    /**
     * 
     *
     * @var float
     */
    protected $magicDamageDealt;
    /**
     * 
     *
     * @var float
     */
    protected $physicalDamageDealt;
    /**
     * 
     *
     * @var float
     */
    protected $trueDamageDealt;
    /**
     * 
     *
     * @var float
     */
    protected $largestCriticalStrike;
    /**
     * 
     *
     * @var float
     */
    protected $totalDamageDealtToChampions;
    /**
     * 
     *
     * @var float
     */
    protected $magicDamageDealtToChampions;
    /**
     * 
     *
     * @var float
     */
    protected $physicalDamageDealtToChampions;
    /**
     * 
     *
     * @var float
     */
    protected $trueDamageDealtToChampions;
    /**
     * 
     *
     * @var float
     */
    protected $totalHeal;
    /**
     * 
     *
     * @var float
     */
    protected $totalUnitsHealed;
    /**
     * 
     *
     * @var float
     */
    protected $totalDamageTaken;
    /**
     * 
     *
     * @var float
     */
    protected $magicDamageTaken;
    /**
     * 
     *
     * @var float
     */
    protected $physicalDamageTaken;
    /**
     * 
     *
     * @var float
     */
    protected $trueDamageTaken;
    /**
     * 
     *
     * @var float
     */
    protected $goldEarned;
    /**
     * 
     *
     * @var float
     */
    protected $goldSpent;
    /**
     * 
     *
     * @var float
     */
    protected $turretKills;
    /**
     * 
     *
     * @var float
     */
    protected $inhibitorKills;
    /**
     * 
     *
     * @var float
     */
    protected $totalMinionsKilled;
    /**
     * 
     *
     * @var float
     */
    protected $neutralMinionsKIlled;
    /**
     * 
     *
     * @var float
     */
    protected $neutralMinionsKIlledTeamJungle;
    /**
     * 
     *
     * @var float
     */
    protected $neutralMinionsKilledEnemyJungle;
    /**
     * 
     *
     * @var float
     */
    protected $totalTimeCrowdControlDealt;
    /**
     * 
     *
     * @var float
     */
    protected $visionWardsBoughtInGame;
    /**
     * 
     *
     * @var float
     */
    protected $sightWardsBoughtInGame;
    /**
     * 
     *
     * @var float
     */
    protected $wardsPlaced;
    /**
     * 
     *
     * @var float
     */
    protected $wardsKilled;
    /**
     * 
     *
     * @var float
     */
    protected $combatPlayerScore;
    /**
     * 
     *
     * @var float
     */
    protected $objectivePlayerScore;
    /**
     * 
     *
     * @var float
     */
    protected $totalPlayerScore;
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
    protected $tenKillsOrAssists;
    /**
     * 
     *
     * @var string
     */
    protected $updated;
    /**
     * 
     *
     * @var int
     */
    protected $games;
    /**
     * 
     *
     * @var int
     */
    protected $matches;
    /**
     * 
     *
     * @var bool
     */
    protected $isClosed;
    /**
     * 
     *
     * @return int
     */
    public function getGameId() : int
    {
        return $this->gameId;
    }
    /**
     * 
     *
     * @param int $gameId
     *
     * @return self
     */
    public function setGameId(int $gameId) : self
    {
        $this->gameId = $gameId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpponentId() : int
    {
        return $this->opponentId;
    }
    /**
     * 
     *
     * @param int $opponentId
     *
     * @return self
     */
    public function setOpponentId(int $opponentId) : self
    {
        $this->opponentId = $opponentId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOpponent() : string
    {
        return $this->opponent;
    }
    /**
     * 
     *
     * @param string $opponent
     *
     * @return self
     */
    public function setOpponent(string $opponent) : self
    {
        $this->opponent = $opponent;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDay() : string
    {
        return $this->day;
    }
    /**
     * 
     *
     * @param string $day
     *
     * @return self
     */
    public function setDay(string $day) : self
    {
        $this->day = $day;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDateTime() : string
    {
        return $this->dateTime;
    }
    /**
     * 
     *
     * @param string $dateTime
     *
     * @return self
     */
    public function setDateTime(string $dateTime) : self
    {
        $this->dateTime = $dateTime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPosition() : string
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param string $position
     *
     * @return self
     */
    public function setPosition(string $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlayerId() : int
    {
        return $this->playerId;
    }
    /**
     * 
     *
     * @param int $playerId
     *
     * @return self
     */
    public function setPlayerId(int $playerId) : self
    {
        $this->playerId = $playerId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamId() : int
    {
        return $this->teamId;
    }
    /**
     * 
     *
     * @param int $teamId
     *
     * @return self
     */
    public function setTeamId(int $teamId) : self
    {
        $this->teamId = $teamId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeam() : string
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param string $team
     *
     * @return self
     */
    public function setTeam(string $team) : self
    {
        $this->team = $team;
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
     * @return string
     */
    public function getMatchName() : string
    {
        return $this->matchName;
    }
    /**
     * 
     *
     * @param string $matchName
     *
     * @return self
     */
    public function setMatchName(string $matchName) : self
    {
        $this->matchName = $matchName;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getKills() : float
    {
        return $this->kills;
    }
    /**
     * 
     *
     * @param float $kills
     *
     * @return self
     */
    public function setKills(float $kills) : self
    {
        $this->kills = $kills;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAssists() : float
    {
        return $this->assists;
    }
    /**
     * 
     *
     * @param float $assists
     *
     * @return self
     */
    public function setAssists(float $assists) : self
    {
        $this->assists = $assists;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDeaths() : float
    {
        return $this->deaths;
    }
    /**
     * 
     *
     * @param float $deaths
     *
     * @return self
     */
    public function setDeaths(float $deaths) : self
    {
        $this->deaths = $deaths;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getLargestKillingSpree() : float
    {
        return $this->largestKillingSpree;
    }
    /**
     * 
     *
     * @param float $largestKillingSpree
     *
     * @return self
     */
    public function setLargestKillingSpree(float $largestKillingSpree) : self
    {
        $this->largestKillingSpree = $largestKillingSpree;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getLargestMultiKill() : float
    {
        return $this->largestMultiKill;
    }
    /**
     * 
     *
     * @param float $largestMultiKill
     *
     * @return self
     */
    public function setLargestMultiKill(float $largestMultiKill) : self
    {
        $this->largestMultiKill = $largestMultiKill;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getKillingSpree() : float
    {
        return $this->killingSpree;
    }
    /**
     * 
     *
     * @param float $killingSpree
     *
     * @return self
     */
    public function setKillingSpree(float $killingSpree) : self
    {
        $this->killingSpree = $killingSpree;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getLongestTimeSpentLiving() : float
    {
        return $this->longestTimeSpentLiving;
    }
    /**
     * 
     *
     * @param float $longestTimeSpentLiving
     *
     * @return self
     */
    public function setLongestTimeSpentLiving(float $longestTimeSpentLiving) : self
    {
        $this->longestTimeSpentLiving = $longestTimeSpentLiving;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDoubleKills() : float
    {
        return $this->doubleKills;
    }
    /**
     * 
     *
     * @param float $doubleKills
     *
     * @return self
     */
    public function setDoubleKills(float $doubleKills) : self
    {
        $this->doubleKills = $doubleKills;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTripleKills() : float
    {
        return $this->tripleKills;
    }
    /**
     * 
     *
     * @param float $tripleKills
     *
     * @return self
     */
    public function setTripleKills(float $tripleKills) : self
    {
        $this->tripleKills = $tripleKills;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getQuadraKills() : float
    {
        return $this->quadraKills;
    }
    /**
     * 
     *
     * @param float $quadraKills
     *
     * @return self
     */
    public function setQuadraKills(float $quadraKills) : self
    {
        $this->quadraKills = $quadraKills;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPentaKills() : float
    {
        return $this->pentaKills;
    }
    /**
     * 
     *
     * @param float $pentaKills
     *
     * @return self
     */
    public function setPentaKills(float $pentaKills) : self
    {
        $this->pentaKills = $pentaKills;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getUnrealKills() : float
    {
        return $this->unrealKills;
    }
    /**
     * 
     *
     * @param float $unrealKills
     *
     * @return self
     */
    public function setUnrealKills(float $unrealKills) : self
    {
        $this->unrealKills = $unrealKills;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalDamageDealt() : float
    {
        return $this->totalDamageDealt;
    }
    /**
     * 
     *
     * @param float $totalDamageDealt
     *
     * @return self
     */
    public function setTotalDamageDealt(float $totalDamageDealt) : self
    {
        $this->totalDamageDealt = $totalDamageDealt;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMagicDamageDealt() : float
    {
        return $this->magicDamageDealt;
    }
    /**
     * 
     *
     * @param float $magicDamageDealt
     *
     * @return self
     */
    public function setMagicDamageDealt(float $magicDamageDealt) : self
    {
        $this->magicDamageDealt = $magicDamageDealt;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPhysicalDamageDealt() : float
    {
        return $this->physicalDamageDealt;
    }
    /**
     * 
     *
     * @param float $physicalDamageDealt
     *
     * @return self
     */
    public function setPhysicalDamageDealt(float $physicalDamageDealt) : self
    {
        $this->physicalDamageDealt = $physicalDamageDealt;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTrueDamageDealt() : float
    {
        return $this->trueDamageDealt;
    }
    /**
     * 
     *
     * @param float $trueDamageDealt
     *
     * @return self
     */
    public function setTrueDamageDealt(float $trueDamageDealt) : self
    {
        $this->trueDamageDealt = $trueDamageDealt;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getLargestCriticalStrike() : float
    {
        return $this->largestCriticalStrike;
    }
    /**
     * 
     *
     * @param float $largestCriticalStrike
     *
     * @return self
     */
    public function setLargestCriticalStrike(float $largestCriticalStrike) : self
    {
        $this->largestCriticalStrike = $largestCriticalStrike;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalDamageDealtToChampions() : float
    {
        return $this->totalDamageDealtToChampions;
    }
    /**
     * 
     *
     * @param float $totalDamageDealtToChampions
     *
     * @return self
     */
    public function setTotalDamageDealtToChampions(float $totalDamageDealtToChampions) : self
    {
        $this->totalDamageDealtToChampions = $totalDamageDealtToChampions;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMagicDamageDealtToChampions() : float
    {
        return $this->magicDamageDealtToChampions;
    }
    /**
     * 
     *
     * @param float $magicDamageDealtToChampions
     *
     * @return self
     */
    public function setMagicDamageDealtToChampions(float $magicDamageDealtToChampions) : self
    {
        $this->magicDamageDealtToChampions = $magicDamageDealtToChampions;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPhysicalDamageDealtToChampions() : float
    {
        return $this->physicalDamageDealtToChampions;
    }
    /**
     * 
     *
     * @param float $physicalDamageDealtToChampions
     *
     * @return self
     */
    public function setPhysicalDamageDealtToChampions(float $physicalDamageDealtToChampions) : self
    {
        $this->physicalDamageDealtToChampions = $physicalDamageDealtToChampions;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTrueDamageDealtToChampions() : float
    {
        return $this->trueDamageDealtToChampions;
    }
    /**
     * 
     *
     * @param float $trueDamageDealtToChampions
     *
     * @return self
     */
    public function setTrueDamageDealtToChampions(float $trueDamageDealtToChampions) : self
    {
        $this->trueDamageDealtToChampions = $trueDamageDealtToChampions;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalHeal() : float
    {
        return $this->totalHeal;
    }
    /**
     * 
     *
     * @param float $totalHeal
     *
     * @return self
     */
    public function setTotalHeal(float $totalHeal) : self
    {
        $this->totalHeal = $totalHeal;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalUnitsHealed() : float
    {
        return $this->totalUnitsHealed;
    }
    /**
     * 
     *
     * @param float $totalUnitsHealed
     *
     * @return self
     */
    public function setTotalUnitsHealed(float $totalUnitsHealed) : self
    {
        $this->totalUnitsHealed = $totalUnitsHealed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalDamageTaken() : float
    {
        return $this->totalDamageTaken;
    }
    /**
     * 
     *
     * @param float $totalDamageTaken
     *
     * @return self
     */
    public function setTotalDamageTaken(float $totalDamageTaken) : self
    {
        $this->totalDamageTaken = $totalDamageTaken;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMagicDamageTaken() : float
    {
        return $this->magicDamageTaken;
    }
    /**
     * 
     *
     * @param float $magicDamageTaken
     *
     * @return self
     */
    public function setMagicDamageTaken(float $magicDamageTaken) : self
    {
        $this->magicDamageTaken = $magicDamageTaken;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPhysicalDamageTaken() : float
    {
        return $this->physicalDamageTaken;
    }
    /**
     * 
     *
     * @param float $physicalDamageTaken
     *
     * @return self
     */
    public function setPhysicalDamageTaken(float $physicalDamageTaken) : self
    {
        $this->physicalDamageTaken = $physicalDamageTaken;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTrueDamageTaken() : float
    {
        return $this->trueDamageTaken;
    }
    /**
     * 
     *
     * @param float $trueDamageTaken
     *
     * @return self
     */
    public function setTrueDamageTaken(float $trueDamageTaken) : self
    {
        $this->trueDamageTaken = $trueDamageTaken;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGoldEarned() : float
    {
        return $this->goldEarned;
    }
    /**
     * 
     *
     * @param float $goldEarned
     *
     * @return self
     */
    public function setGoldEarned(float $goldEarned) : self
    {
        $this->goldEarned = $goldEarned;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGoldSpent() : float
    {
        return $this->goldSpent;
    }
    /**
     * 
     *
     * @param float $goldSpent
     *
     * @return self
     */
    public function setGoldSpent(float $goldSpent) : self
    {
        $this->goldSpent = $goldSpent;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTurretKills() : float
    {
        return $this->turretKills;
    }
    /**
     * 
     *
     * @param float $turretKills
     *
     * @return self
     */
    public function setTurretKills(float $turretKills) : self
    {
        $this->turretKills = $turretKills;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getInhibitorKills() : float
    {
        return $this->inhibitorKills;
    }
    /**
     * 
     *
     * @param float $inhibitorKills
     *
     * @return self
     */
    public function setInhibitorKills(float $inhibitorKills) : self
    {
        $this->inhibitorKills = $inhibitorKills;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalMinionsKilled() : float
    {
        return $this->totalMinionsKilled;
    }
    /**
     * 
     *
     * @param float $totalMinionsKilled
     *
     * @return self
     */
    public function setTotalMinionsKilled(float $totalMinionsKilled) : self
    {
        $this->totalMinionsKilled = $totalMinionsKilled;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getNeutralMinionsKIlled() : float
    {
        return $this->neutralMinionsKIlled;
    }
    /**
     * 
     *
     * @param float $neutralMinionsKIlled
     *
     * @return self
     */
    public function setNeutralMinionsKIlled(float $neutralMinionsKIlled) : self
    {
        $this->neutralMinionsKIlled = $neutralMinionsKIlled;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getNeutralMinionsKIlledTeamJungle() : float
    {
        return $this->neutralMinionsKIlledTeamJungle;
    }
    /**
     * 
     *
     * @param float $neutralMinionsKIlledTeamJungle
     *
     * @return self
     */
    public function setNeutralMinionsKIlledTeamJungle(float $neutralMinionsKIlledTeamJungle) : self
    {
        $this->neutralMinionsKIlledTeamJungle = $neutralMinionsKIlledTeamJungle;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getNeutralMinionsKilledEnemyJungle() : float
    {
        return $this->neutralMinionsKilledEnemyJungle;
    }
    /**
     * 
     *
     * @param float $neutralMinionsKilledEnemyJungle
     *
     * @return self
     */
    public function setNeutralMinionsKilledEnemyJungle(float $neutralMinionsKilledEnemyJungle) : self
    {
        $this->neutralMinionsKilledEnemyJungle = $neutralMinionsKilledEnemyJungle;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalTimeCrowdControlDealt() : float
    {
        return $this->totalTimeCrowdControlDealt;
    }
    /**
     * 
     *
     * @param float $totalTimeCrowdControlDealt
     *
     * @return self
     */
    public function setTotalTimeCrowdControlDealt(float $totalTimeCrowdControlDealt) : self
    {
        $this->totalTimeCrowdControlDealt = $totalTimeCrowdControlDealt;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getVisionWardsBoughtInGame() : float
    {
        return $this->visionWardsBoughtInGame;
    }
    /**
     * 
     *
     * @param float $visionWardsBoughtInGame
     *
     * @return self
     */
    public function setVisionWardsBoughtInGame(float $visionWardsBoughtInGame) : self
    {
        $this->visionWardsBoughtInGame = $visionWardsBoughtInGame;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSightWardsBoughtInGame() : float
    {
        return $this->sightWardsBoughtInGame;
    }
    /**
     * 
     *
     * @param float $sightWardsBoughtInGame
     *
     * @return self
     */
    public function setSightWardsBoughtInGame(float $sightWardsBoughtInGame) : self
    {
        $this->sightWardsBoughtInGame = $sightWardsBoughtInGame;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWardsPlaced() : float
    {
        return $this->wardsPlaced;
    }
    /**
     * 
     *
     * @param float $wardsPlaced
     *
     * @return self
     */
    public function setWardsPlaced(float $wardsPlaced) : self
    {
        $this->wardsPlaced = $wardsPlaced;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWardsKilled() : float
    {
        return $this->wardsKilled;
    }
    /**
     * 
     *
     * @param float $wardsKilled
     *
     * @return self
     */
    public function setWardsKilled(float $wardsKilled) : self
    {
        $this->wardsKilled = $wardsKilled;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCombatPlayerScore() : float
    {
        return $this->combatPlayerScore;
    }
    /**
     * 
     *
     * @param float $combatPlayerScore
     *
     * @return self
     */
    public function setCombatPlayerScore(float $combatPlayerScore) : self
    {
        $this->combatPlayerScore = $combatPlayerScore;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getObjectivePlayerScore() : float
    {
        return $this->objectivePlayerScore;
    }
    /**
     * 
     *
     * @param float $objectivePlayerScore
     *
     * @return self
     */
    public function setObjectivePlayerScore(float $objectivePlayerScore) : self
    {
        $this->objectivePlayerScore = $objectivePlayerScore;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalPlayerScore() : float
    {
        return $this->totalPlayerScore;
    }
    /**
     * 
     *
     * @param float $totalPlayerScore
     *
     * @return self
     */
    public function setTotalPlayerScore(float $totalPlayerScore) : self
    {
        $this->totalPlayerScore = $totalPlayerScore;
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
    public function getTenKillsOrAssists() : float
    {
        return $this->tenKillsOrAssists;
    }
    /**
     * 
     *
     * @param float $tenKillsOrAssists
     *
     * @return self
     */
    public function setTenKillsOrAssists(float $tenKillsOrAssists) : self
    {
        $this->tenKillsOrAssists = $tenKillsOrAssists;
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
     * @return int
     */
    public function getGames() : int
    {
        return $this->games;
    }
    /**
     * 
     *
     * @param int $games
     *
     * @return self
     */
    public function setGames(int $games) : self
    {
        $this->games = $games;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMatches() : int
    {
        return $this->matches;
    }
    /**
     * 
     *
     * @param int $matches
     *
     * @return self
     */
    public function setMatches(int $matches) : self
    {
        $this->matches = $matches;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsClosed() : bool
    {
        return $this->isClosed;
    }
    /**
     * 
     *
     * @param bool $isClosed
     *
     * @return self
     */
    public function setIsClosed(bool $isClosed) : self
    {
        $this->isClosed = $isClosed;
        return $this;
    }
}