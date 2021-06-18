<?php

namespace Sportsdata\API\LOL\Model;

class TeamGame
{
    /**
     * 
     *
     * @var float|null
     */
    protected $firstBlood;
    /**
     * 
     *
     * @var float|null
     */
    protected $firstTower;
    /**
     * 
     *
     * @var float|null
     */
    protected $firstInhibitor;
    /**
     * 
     *
     * @var float|null
     */
    protected $firstBaron;
    /**
     * 
     *
     * @var float|null
     */
    protected $firstDragon;
    /**
     * 
     *
     * @var float|null
     */
    protected $firstRiftHerald;
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
     * @var string|null
     */
    protected $opponent;
    /**
     * 
     *
     * @var string|null
     */
    protected $day;
    /**
     * 
     *
     * @var string|null
     */
    protected $dateTime;
    /**
     * 
     *
     * @var string|null
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
     * @var int|null
     */
    protected $teamId;
    /**
     * 
     *
     * @var string|null
     */
    protected $team;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $matchName;
    /**
     * 
     *
     * @var float|null
     */
    protected $kills;
    /**
     * 
     *
     * @var float|null
     */
    protected $assists;
    /**
     * 
     *
     * @var float|null
     */
    protected $deaths;
    /**
     * 
     *
     * @var float|null
     */
    protected $largestKillingSpree;
    /**
     * 
     *
     * @var float|null
     */
    protected $largestMultiKill;
    /**
     * 
     *
     * @var float|null
     */
    protected $killingSpree;
    /**
     * 
     *
     * @var float|null
     */
    protected $longestTimeSpentLiving;
    /**
     * 
     *
     * @var float|null
     */
    protected $doubleKills;
    /**
     * 
     *
     * @var float|null
     */
    protected $tripleKills;
    /**
     * 
     *
     * @var float|null
     */
    protected $quadraKills;
    /**
     * 
     *
     * @var float|null
     */
    protected $pentaKills;
    /**
     * 
     *
     * @var float|null
     */
    protected $unrealKills;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalDamageDealt;
    /**
     * 
     *
     * @var float|null
     */
    protected $magicDamageDealt;
    /**
     * 
     *
     * @var float|null
     */
    protected $physicalDamageDealt;
    /**
     * 
     *
     * @var float|null
     */
    protected $trueDamageDealt;
    /**
     * 
     *
     * @var float|null
     */
    protected $largestCriticalStrike;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalDamageDealtToChampions;
    /**
     * 
     *
     * @var float|null
     */
    protected $magicDamageDealtToChampions;
    /**
     * 
     *
     * @var float|null
     */
    protected $physicalDamageDealtToChampions;
    /**
     * 
     *
     * @var float|null
     */
    protected $trueDamageDealtToChampions;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalHeal;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalUnitsHealed;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalDamageTaken;
    /**
     * 
     *
     * @var float|null
     */
    protected $magicDamageTaken;
    /**
     * 
     *
     * @var float|null
     */
    protected $physicalDamageTaken;
    /**
     * 
     *
     * @var float|null
     */
    protected $trueDamageTaken;
    /**
     * 
     *
     * @var float|null
     */
    protected $goldEarned;
    /**
     * 
     *
     * @var float|null
     */
    protected $goldSpent;
    /**
     * 
     *
     * @var float|null
     */
    protected $turretKills;
    /**
     * 
     *
     * @var float|null
     */
    protected $inhibitorKills;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalMinionsKilled;
    /**
     * 
     *
     * @var float|null
     */
    protected $neutralMinionsKIlled;
    /**
     * 
     *
     * @var float|null
     */
    protected $neutralMinionsKIlledTeamJungle;
    /**
     * 
     *
     * @var float|null
     */
    protected $neutralMinionsKilledEnemyJungle;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalTimeCrowdControlDealt;
    /**
     * 
     *
     * @var float|null
     */
    protected $visionWardsBoughtInGame;
    /**
     * 
     *
     * @var float|null
     */
    protected $sightWardsBoughtInGame;
    /**
     * 
     *
     * @var float|null
     */
    protected $wardsPlaced;
    /**
     * 
     *
     * @var float|null
     */
    protected $wardsKilled;
    /**
     * 
     *
     * @var float|null
     */
    protected $combatPlayerScore;
    /**
     * 
     *
     * @var float|null
     */
    protected $objectivePlayerScore;
    /**
     * 
     *
     * @var float|null
     */
    protected $totalPlayerScore;
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
    protected $tenKillsOrAssists;
    /**
     * 
     *
     * @var string|null
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
     * @return float|null
     */
    public function getFirstBlood() : ?float
    {
        return $this->firstBlood;
    }
    /**
     * 
     *
     * @param float|null $firstBlood
     *
     * @return self
     */
    public function setFirstBlood(?float $firstBlood) : self
    {
        $this->firstBlood = $firstBlood;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFirstTower() : ?float
    {
        return $this->firstTower;
    }
    /**
     * 
     *
     * @param float|null $firstTower
     *
     * @return self
     */
    public function setFirstTower(?float $firstTower) : self
    {
        $this->firstTower = $firstTower;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFirstInhibitor() : ?float
    {
        return $this->firstInhibitor;
    }
    /**
     * 
     *
     * @param float|null $firstInhibitor
     *
     * @return self
     */
    public function setFirstInhibitor(?float $firstInhibitor) : self
    {
        $this->firstInhibitor = $firstInhibitor;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFirstBaron() : ?float
    {
        return $this->firstBaron;
    }
    /**
     * 
     *
     * @param float|null $firstBaron
     *
     * @return self
     */
    public function setFirstBaron(?float $firstBaron) : self
    {
        $this->firstBaron = $firstBaron;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFirstDragon() : ?float
    {
        return $this->firstDragon;
    }
    /**
     * 
     *
     * @param float|null $firstDragon
     *
     * @return self
     */
    public function setFirstDragon(?float $firstDragon) : self
    {
        $this->firstDragon = $firstDragon;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getFirstRiftHerald() : ?float
    {
        return $this->firstRiftHerald;
    }
    /**
     * 
     *
     * @param float|null $firstRiftHerald
     *
     * @return self
     */
    public function setFirstRiftHerald(?float $firstRiftHerald) : self
    {
        $this->firstRiftHerald = $firstRiftHerald;
        return $this;
    }
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
     * @return string|null
     */
    public function getOpponent() : ?string
    {
        return $this->opponent;
    }
    /**
     * 
     *
     * @param string|null $opponent
     *
     * @return self
     */
    public function setOpponent(?string $opponent) : self
    {
        $this->opponent = $opponent;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDay() : ?string
    {
        return $this->day;
    }
    /**
     * 
     *
     * @param string|null $day
     *
     * @return self
     */
    public function setDay(?string $day) : self
    {
        $this->day = $day;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDateTime() : ?string
    {
        return $this->dateTime;
    }
    /**
     * 
     *
     * @param string|null $dateTime
     *
     * @return self
     */
    public function setDateTime(?string $dateTime) : self
    {
        $this->dateTime = $dateTime;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPosition() : ?string
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param string|null $position
     *
     * @return self
     */
    public function setPosition(?string $position) : self
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
     * @return int|null
     */
    public function getTeamId() : ?int
    {
        return $this->teamId;
    }
    /**
     * 
     *
     * @param int|null $teamId
     *
     * @return self
     */
    public function setTeamId(?int $teamId) : self
    {
        $this->teamId = $teamId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTeam() : ?string
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param string|null $team
     *
     * @return self
     */
    public function setTeam(?string $team) : self
    {
        $this->team = $team;
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
     * @return string|null
     */
    public function getMatchName() : ?string
    {
        return $this->matchName;
    }
    /**
     * 
     *
     * @param string|null $matchName
     *
     * @return self
     */
    public function setMatchName(?string $matchName) : self
    {
        $this->matchName = $matchName;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getKills() : ?float
    {
        return $this->kills;
    }
    /**
     * 
     *
     * @param float|null $kills
     *
     * @return self
     */
    public function setKills(?float $kills) : self
    {
        $this->kills = $kills;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAssists() : ?float
    {
        return $this->assists;
    }
    /**
     * 
     *
     * @param float|null $assists
     *
     * @return self
     */
    public function setAssists(?float $assists) : self
    {
        $this->assists = $assists;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDeaths() : ?float
    {
        return $this->deaths;
    }
    /**
     * 
     *
     * @param float|null $deaths
     *
     * @return self
     */
    public function setDeaths(?float $deaths) : self
    {
        $this->deaths = $deaths;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getLargestKillingSpree() : ?float
    {
        return $this->largestKillingSpree;
    }
    /**
     * 
     *
     * @param float|null $largestKillingSpree
     *
     * @return self
     */
    public function setLargestKillingSpree(?float $largestKillingSpree) : self
    {
        $this->largestKillingSpree = $largestKillingSpree;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getLargestMultiKill() : ?float
    {
        return $this->largestMultiKill;
    }
    /**
     * 
     *
     * @param float|null $largestMultiKill
     *
     * @return self
     */
    public function setLargestMultiKill(?float $largestMultiKill) : self
    {
        $this->largestMultiKill = $largestMultiKill;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getKillingSpree() : ?float
    {
        return $this->killingSpree;
    }
    /**
     * 
     *
     * @param float|null $killingSpree
     *
     * @return self
     */
    public function setKillingSpree(?float $killingSpree) : self
    {
        $this->killingSpree = $killingSpree;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getLongestTimeSpentLiving() : ?float
    {
        return $this->longestTimeSpentLiving;
    }
    /**
     * 
     *
     * @param float|null $longestTimeSpentLiving
     *
     * @return self
     */
    public function setLongestTimeSpentLiving(?float $longestTimeSpentLiving) : self
    {
        $this->longestTimeSpentLiving = $longestTimeSpentLiving;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDoubleKills() : ?float
    {
        return $this->doubleKills;
    }
    /**
     * 
     *
     * @param float|null $doubleKills
     *
     * @return self
     */
    public function setDoubleKills(?float $doubleKills) : self
    {
        $this->doubleKills = $doubleKills;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTripleKills() : ?float
    {
        return $this->tripleKills;
    }
    /**
     * 
     *
     * @param float|null $tripleKills
     *
     * @return self
     */
    public function setTripleKills(?float $tripleKills) : self
    {
        $this->tripleKills = $tripleKills;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getQuadraKills() : ?float
    {
        return $this->quadraKills;
    }
    /**
     * 
     *
     * @param float|null $quadraKills
     *
     * @return self
     */
    public function setQuadraKills(?float $quadraKills) : self
    {
        $this->quadraKills = $quadraKills;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPentaKills() : ?float
    {
        return $this->pentaKills;
    }
    /**
     * 
     *
     * @param float|null $pentaKills
     *
     * @return self
     */
    public function setPentaKills(?float $pentaKills) : self
    {
        $this->pentaKills = $pentaKills;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getUnrealKills() : ?float
    {
        return $this->unrealKills;
    }
    /**
     * 
     *
     * @param float|null $unrealKills
     *
     * @return self
     */
    public function setUnrealKills(?float $unrealKills) : self
    {
        $this->unrealKills = $unrealKills;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTotalDamageDealt() : ?float
    {
        return $this->totalDamageDealt;
    }
    /**
     * 
     *
     * @param float|null $totalDamageDealt
     *
     * @return self
     */
    public function setTotalDamageDealt(?float $totalDamageDealt) : self
    {
        $this->totalDamageDealt = $totalDamageDealt;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getMagicDamageDealt() : ?float
    {
        return $this->magicDamageDealt;
    }
    /**
     * 
     *
     * @param float|null $magicDamageDealt
     *
     * @return self
     */
    public function setMagicDamageDealt(?float $magicDamageDealt) : self
    {
        $this->magicDamageDealt = $magicDamageDealt;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPhysicalDamageDealt() : ?float
    {
        return $this->physicalDamageDealt;
    }
    /**
     * 
     *
     * @param float|null $physicalDamageDealt
     *
     * @return self
     */
    public function setPhysicalDamageDealt(?float $physicalDamageDealt) : self
    {
        $this->physicalDamageDealt = $physicalDamageDealt;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTrueDamageDealt() : ?float
    {
        return $this->trueDamageDealt;
    }
    /**
     * 
     *
     * @param float|null $trueDamageDealt
     *
     * @return self
     */
    public function setTrueDamageDealt(?float $trueDamageDealt) : self
    {
        $this->trueDamageDealt = $trueDamageDealt;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getLargestCriticalStrike() : ?float
    {
        return $this->largestCriticalStrike;
    }
    /**
     * 
     *
     * @param float|null $largestCriticalStrike
     *
     * @return self
     */
    public function setLargestCriticalStrike(?float $largestCriticalStrike) : self
    {
        $this->largestCriticalStrike = $largestCriticalStrike;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTotalDamageDealtToChampions() : ?float
    {
        return $this->totalDamageDealtToChampions;
    }
    /**
     * 
     *
     * @param float|null $totalDamageDealtToChampions
     *
     * @return self
     */
    public function setTotalDamageDealtToChampions(?float $totalDamageDealtToChampions) : self
    {
        $this->totalDamageDealtToChampions = $totalDamageDealtToChampions;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getMagicDamageDealtToChampions() : ?float
    {
        return $this->magicDamageDealtToChampions;
    }
    /**
     * 
     *
     * @param float|null $magicDamageDealtToChampions
     *
     * @return self
     */
    public function setMagicDamageDealtToChampions(?float $magicDamageDealtToChampions) : self
    {
        $this->magicDamageDealtToChampions = $magicDamageDealtToChampions;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPhysicalDamageDealtToChampions() : ?float
    {
        return $this->physicalDamageDealtToChampions;
    }
    /**
     * 
     *
     * @param float|null $physicalDamageDealtToChampions
     *
     * @return self
     */
    public function setPhysicalDamageDealtToChampions(?float $physicalDamageDealtToChampions) : self
    {
        $this->physicalDamageDealtToChampions = $physicalDamageDealtToChampions;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTrueDamageDealtToChampions() : ?float
    {
        return $this->trueDamageDealtToChampions;
    }
    /**
     * 
     *
     * @param float|null $trueDamageDealtToChampions
     *
     * @return self
     */
    public function setTrueDamageDealtToChampions(?float $trueDamageDealtToChampions) : self
    {
        $this->trueDamageDealtToChampions = $trueDamageDealtToChampions;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTotalHeal() : ?float
    {
        return $this->totalHeal;
    }
    /**
     * 
     *
     * @param float|null $totalHeal
     *
     * @return self
     */
    public function setTotalHeal(?float $totalHeal) : self
    {
        $this->totalHeal = $totalHeal;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTotalUnitsHealed() : ?float
    {
        return $this->totalUnitsHealed;
    }
    /**
     * 
     *
     * @param float|null $totalUnitsHealed
     *
     * @return self
     */
    public function setTotalUnitsHealed(?float $totalUnitsHealed) : self
    {
        $this->totalUnitsHealed = $totalUnitsHealed;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTotalDamageTaken() : ?float
    {
        return $this->totalDamageTaken;
    }
    /**
     * 
     *
     * @param float|null $totalDamageTaken
     *
     * @return self
     */
    public function setTotalDamageTaken(?float $totalDamageTaken) : self
    {
        $this->totalDamageTaken = $totalDamageTaken;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getMagicDamageTaken() : ?float
    {
        return $this->magicDamageTaken;
    }
    /**
     * 
     *
     * @param float|null $magicDamageTaken
     *
     * @return self
     */
    public function setMagicDamageTaken(?float $magicDamageTaken) : self
    {
        $this->magicDamageTaken = $magicDamageTaken;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPhysicalDamageTaken() : ?float
    {
        return $this->physicalDamageTaken;
    }
    /**
     * 
     *
     * @param float|null $physicalDamageTaken
     *
     * @return self
     */
    public function setPhysicalDamageTaken(?float $physicalDamageTaken) : self
    {
        $this->physicalDamageTaken = $physicalDamageTaken;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTrueDamageTaken() : ?float
    {
        return $this->trueDamageTaken;
    }
    /**
     * 
     *
     * @param float|null $trueDamageTaken
     *
     * @return self
     */
    public function setTrueDamageTaken(?float $trueDamageTaken) : self
    {
        $this->trueDamageTaken = $trueDamageTaken;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGoldEarned() : ?float
    {
        return $this->goldEarned;
    }
    /**
     * 
     *
     * @param float|null $goldEarned
     *
     * @return self
     */
    public function setGoldEarned(?float $goldEarned) : self
    {
        $this->goldEarned = $goldEarned;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGoldSpent() : ?float
    {
        return $this->goldSpent;
    }
    /**
     * 
     *
     * @param float|null $goldSpent
     *
     * @return self
     */
    public function setGoldSpent(?float $goldSpent) : self
    {
        $this->goldSpent = $goldSpent;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTurretKills() : ?float
    {
        return $this->turretKills;
    }
    /**
     * 
     *
     * @param float|null $turretKills
     *
     * @return self
     */
    public function setTurretKills(?float $turretKills) : self
    {
        $this->turretKills = $turretKills;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getInhibitorKills() : ?float
    {
        return $this->inhibitorKills;
    }
    /**
     * 
     *
     * @param float|null $inhibitorKills
     *
     * @return self
     */
    public function setInhibitorKills(?float $inhibitorKills) : self
    {
        $this->inhibitorKills = $inhibitorKills;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTotalMinionsKilled() : ?float
    {
        return $this->totalMinionsKilled;
    }
    /**
     * 
     *
     * @param float|null $totalMinionsKilled
     *
     * @return self
     */
    public function setTotalMinionsKilled(?float $totalMinionsKilled) : self
    {
        $this->totalMinionsKilled = $totalMinionsKilled;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getNeutralMinionsKIlled() : ?float
    {
        return $this->neutralMinionsKIlled;
    }
    /**
     * 
     *
     * @param float|null $neutralMinionsKIlled
     *
     * @return self
     */
    public function setNeutralMinionsKIlled(?float $neutralMinionsKIlled) : self
    {
        $this->neutralMinionsKIlled = $neutralMinionsKIlled;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getNeutralMinionsKIlledTeamJungle() : ?float
    {
        return $this->neutralMinionsKIlledTeamJungle;
    }
    /**
     * 
     *
     * @param float|null $neutralMinionsKIlledTeamJungle
     *
     * @return self
     */
    public function setNeutralMinionsKIlledTeamJungle(?float $neutralMinionsKIlledTeamJungle) : self
    {
        $this->neutralMinionsKIlledTeamJungle = $neutralMinionsKIlledTeamJungle;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getNeutralMinionsKilledEnemyJungle() : ?float
    {
        return $this->neutralMinionsKilledEnemyJungle;
    }
    /**
     * 
     *
     * @param float|null $neutralMinionsKilledEnemyJungle
     *
     * @return self
     */
    public function setNeutralMinionsKilledEnemyJungle(?float $neutralMinionsKilledEnemyJungle) : self
    {
        $this->neutralMinionsKilledEnemyJungle = $neutralMinionsKilledEnemyJungle;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTotalTimeCrowdControlDealt() : ?float
    {
        return $this->totalTimeCrowdControlDealt;
    }
    /**
     * 
     *
     * @param float|null $totalTimeCrowdControlDealt
     *
     * @return self
     */
    public function setTotalTimeCrowdControlDealt(?float $totalTimeCrowdControlDealt) : self
    {
        $this->totalTimeCrowdControlDealt = $totalTimeCrowdControlDealt;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getVisionWardsBoughtInGame() : ?float
    {
        return $this->visionWardsBoughtInGame;
    }
    /**
     * 
     *
     * @param float|null $visionWardsBoughtInGame
     *
     * @return self
     */
    public function setVisionWardsBoughtInGame(?float $visionWardsBoughtInGame) : self
    {
        $this->visionWardsBoughtInGame = $visionWardsBoughtInGame;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSightWardsBoughtInGame() : ?float
    {
        return $this->sightWardsBoughtInGame;
    }
    /**
     * 
     *
     * @param float|null $sightWardsBoughtInGame
     *
     * @return self
     */
    public function setSightWardsBoughtInGame(?float $sightWardsBoughtInGame) : self
    {
        $this->sightWardsBoughtInGame = $sightWardsBoughtInGame;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getWardsPlaced() : ?float
    {
        return $this->wardsPlaced;
    }
    /**
     * 
     *
     * @param float|null $wardsPlaced
     *
     * @return self
     */
    public function setWardsPlaced(?float $wardsPlaced) : self
    {
        $this->wardsPlaced = $wardsPlaced;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getWardsKilled() : ?float
    {
        return $this->wardsKilled;
    }
    /**
     * 
     *
     * @param float|null $wardsKilled
     *
     * @return self
     */
    public function setWardsKilled(?float $wardsKilled) : self
    {
        $this->wardsKilled = $wardsKilled;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCombatPlayerScore() : ?float
    {
        return $this->combatPlayerScore;
    }
    /**
     * 
     *
     * @param float|null $combatPlayerScore
     *
     * @return self
     */
    public function setCombatPlayerScore(?float $combatPlayerScore) : self
    {
        $this->combatPlayerScore = $combatPlayerScore;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getObjectivePlayerScore() : ?float
    {
        return $this->objectivePlayerScore;
    }
    /**
     * 
     *
     * @param float|null $objectivePlayerScore
     *
     * @return self
     */
    public function setObjectivePlayerScore(?float $objectivePlayerScore) : self
    {
        $this->objectivePlayerScore = $objectivePlayerScore;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTotalPlayerScore() : ?float
    {
        return $this->totalPlayerScore;
    }
    /**
     * 
     *
     * @param float|null $totalPlayerScore
     *
     * @return self
     */
    public function setTotalPlayerScore(?float $totalPlayerScore) : self
    {
        $this->totalPlayerScore = $totalPlayerScore;
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
    public function getTenKillsOrAssists() : ?float
    {
        return $this->tenKillsOrAssists;
    }
    /**
     * 
     *
     * @param float|null $tenKillsOrAssists
     *
     * @return self
     */
    public function setTenKillsOrAssists(?float $tenKillsOrAssists) : self
    {
        $this->tenKillsOrAssists = $tenKillsOrAssists;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUpdated() : ?string
    {
        return $this->updated;
    }
    /**
     * 
     *
     * @param string|null $updated
     *
     * @return self
     */
    public function setUpdated(?string $updated) : self
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