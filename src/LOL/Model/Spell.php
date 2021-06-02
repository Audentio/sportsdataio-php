<?php

namespace Sportsdata\API\LOL\Model;

class Spell
{
    /**
     * 
     *
     * @var int
     */
    protected $spellId;
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
    public function getSpellId() : int
    {
        return $this->spellId;
    }
    /**
     * 
     *
     * @param int $spellId
     *
     * @return self
     */
    public function setSpellId(int $spellId) : self
    {
        $this->spellId = $spellId;
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