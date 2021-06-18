<?php

namespace Sportsdata\API\NHL\Model;

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
     * @var string|null
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
}