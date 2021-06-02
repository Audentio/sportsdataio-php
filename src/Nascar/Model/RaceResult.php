<?php

namespace Sportsdata\API\Nascar\Model;

class RaceResult
{
    /**
     * 
     *
     * @var Race
     */
    protected $race;
    /**
     * 
     *
     * @var DriverRace[]
     */
    protected $driverRaces;
    /**
     * 
     *
     * @return Race
     */
    public function getRace() : Race
    {
        return $this->race;
    }
    /**
     * 
     *
     * @param Race $race
     *
     * @return self
     */
    public function setRace(Race $race) : self
    {
        $this->race = $race;
        return $this;
    }
    /**
     * 
     *
     * @return DriverRace[]
     */
    public function getDriverRaces() : array
    {
        return $this->driverRaces;
    }
    /**
     * 
     *
     * @param DriverRace[] $driverRaces
     *
     * @return self
     */
    public function setDriverRaces(array $driverRaces) : self
    {
        $this->driverRaces = $driverRaces;
        return $this;
    }
}