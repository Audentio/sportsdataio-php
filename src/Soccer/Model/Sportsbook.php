<?php

namespace Sportsdata\API\Soccer\Model;

class Sportsbook
{
    /**
     * 
     *
     * @var int
     */
    protected $sportsbookID;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @return int
     */
    public function getSportsbookID() : int
    {
        return $this->sportsbookID;
    }
    /**
     * 
     *
     * @param int $sportsbookID
     *
     * @return self
     */
    public function setSportsbookID(int $sportsbookID) : self
    {
        $this->sportsbookID = $sportsbookID;
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
}