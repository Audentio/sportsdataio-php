<?php

namespace Sportsdata\API\LOL\Model;

class Champion
{
    /**
     * 
     *
     * @var float
     */
    protected $attack;
    /**
     * 
     *
     * @var float
     */
    protected $defense;
    /**
     * 
     *
     * @var float
     */
    protected $magic;
    /**
     * 
     *
     * @var float
     */
    protected $difficulty;
    /**
     * 
     *
     * @var float
     */
    protected $hp;
    /**
     * 
     *
     * @var float
     */
    protected $hpUpPerLevel;
    /**
     * 
     *
     * @var float
     */
    protected $mp;
    /**
     * 
     *
     * @var float
     */
    protected $mpUpPerLevel;
    /**
     * 
     *
     * @var float
     */
    protected $moveSpeed;
    /**
     * 
     *
     * @var float
     */
    protected $armor;
    /**
     * 
     *
     * @var float
     */
    protected $armorPerLevel;
    /**
     * 
     *
     * @var float
     */
    protected $spellBlock;
    /**
     * 
     *
     * @var float
     */
    protected $spellBlockPerLevel;
    /**
     * 
     *
     * @var float
     */
    protected $attackRange;
    /**
     * 
     *
     * @var float
     */
    protected $hpRegen;
    /**
     * 
     *
     * @var float
     */
    protected $hpRegenPerLevel;
    /**
     * 
     *
     * @var float
     */
    protected $mpRegen;
    /**
     * 
     *
     * @var float
     */
    protected $mpRegenPerLevel;
    /**
     * 
     *
     * @var float
     */
    protected $attackDamage;
    /**
     * 
     *
     * @var float
     */
    protected $attackDamagePerLevel;
    /**
     * 
     *
     * @var float
     */
    protected $attackSpeedOffset;
    /**
     * 
     *
     * @var int
     */
    protected $championId;
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
    protected $title;
    /**
     * 
     *
     * @return float
     */
    public function getAttack() : float
    {
        return $this->attack;
    }
    /**
     * 
     *
     * @param float $attack
     *
     * @return self
     */
    public function setAttack(float $attack) : self
    {
        $this->attack = $attack;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDefense() : float
    {
        return $this->defense;
    }
    /**
     * 
     *
     * @param float $defense
     *
     * @return self
     */
    public function setDefense(float $defense) : self
    {
        $this->defense = $defense;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMagic() : float
    {
        return $this->magic;
    }
    /**
     * 
     *
     * @param float $magic
     *
     * @return self
     */
    public function setMagic(float $magic) : self
    {
        $this->magic = $magic;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDifficulty() : float
    {
        return $this->difficulty;
    }
    /**
     * 
     *
     * @param float $difficulty
     *
     * @return self
     */
    public function setDifficulty(float $difficulty) : self
    {
        $this->difficulty = $difficulty;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHp() : float
    {
        return $this->hp;
    }
    /**
     * 
     *
     * @param float $hp
     *
     * @return self
     */
    public function setHp(float $hp) : self
    {
        $this->hp = $hp;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHpUpPerLevel() : float
    {
        return $this->hpUpPerLevel;
    }
    /**
     * 
     *
     * @param float $hpUpPerLevel
     *
     * @return self
     */
    public function setHpUpPerLevel(float $hpUpPerLevel) : self
    {
        $this->hpUpPerLevel = $hpUpPerLevel;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMp() : float
    {
        return $this->mp;
    }
    /**
     * 
     *
     * @param float $mp
     *
     * @return self
     */
    public function setMp(float $mp) : self
    {
        $this->mp = $mp;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMpUpPerLevel() : float
    {
        return $this->mpUpPerLevel;
    }
    /**
     * 
     *
     * @param float $mpUpPerLevel
     *
     * @return self
     */
    public function setMpUpPerLevel(float $mpUpPerLevel) : self
    {
        $this->mpUpPerLevel = $mpUpPerLevel;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMoveSpeed() : float
    {
        return $this->moveSpeed;
    }
    /**
     * 
     *
     * @param float $moveSpeed
     *
     * @return self
     */
    public function setMoveSpeed(float $moveSpeed) : self
    {
        $this->moveSpeed = $moveSpeed;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getArmor() : float
    {
        return $this->armor;
    }
    /**
     * 
     *
     * @param float $armor
     *
     * @return self
     */
    public function setArmor(float $armor) : self
    {
        $this->armor = $armor;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getArmorPerLevel() : float
    {
        return $this->armorPerLevel;
    }
    /**
     * 
     *
     * @param float $armorPerLevel
     *
     * @return self
     */
    public function setArmorPerLevel(float $armorPerLevel) : self
    {
        $this->armorPerLevel = $armorPerLevel;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSpellBlock() : float
    {
        return $this->spellBlock;
    }
    /**
     * 
     *
     * @param float $spellBlock
     *
     * @return self
     */
    public function setSpellBlock(float $spellBlock) : self
    {
        $this->spellBlock = $spellBlock;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSpellBlockPerLevel() : float
    {
        return $this->spellBlockPerLevel;
    }
    /**
     * 
     *
     * @param float $spellBlockPerLevel
     *
     * @return self
     */
    public function setSpellBlockPerLevel(float $spellBlockPerLevel) : self
    {
        $this->spellBlockPerLevel = $spellBlockPerLevel;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAttackRange() : float
    {
        return $this->attackRange;
    }
    /**
     * 
     *
     * @param float $attackRange
     *
     * @return self
     */
    public function setAttackRange(float $attackRange) : self
    {
        $this->attackRange = $attackRange;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHpRegen() : float
    {
        return $this->hpRegen;
    }
    /**
     * 
     *
     * @param float $hpRegen
     *
     * @return self
     */
    public function setHpRegen(float $hpRegen) : self
    {
        $this->hpRegen = $hpRegen;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHpRegenPerLevel() : float
    {
        return $this->hpRegenPerLevel;
    }
    /**
     * 
     *
     * @param float $hpRegenPerLevel
     *
     * @return self
     */
    public function setHpRegenPerLevel(float $hpRegenPerLevel) : self
    {
        $this->hpRegenPerLevel = $hpRegenPerLevel;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMpRegen() : float
    {
        return $this->mpRegen;
    }
    /**
     * 
     *
     * @param float $mpRegen
     *
     * @return self
     */
    public function setMpRegen(float $mpRegen) : self
    {
        $this->mpRegen = $mpRegen;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMpRegenPerLevel() : float
    {
        return $this->mpRegenPerLevel;
    }
    /**
     * 
     *
     * @param float $mpRegenPerLevel
     *
     * @return self
     */
    public function setMpRegenPerLevel(float $mpRegenPerLevel) : self
    {
        $this->mpRegenPerLevel = $mpRegenPerLevel;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAttackDamage() : float
    {
        return $this->attackDamage;
    }
    /**
     * 
     *
     * @param float $attackDamage
     *
     * @return self
     */
    public function setAttackDamage(float $attackDamage) : self
    {
        $this->attackDamage = $attackDamage;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAttackDamagePerLevel() : float
    {
        return $this->attackDamagePerLevel;
    }
    /**
     * 
     *
     * @param float $attackDamagePerLevel
     *
     * @return self
     */
    public function setAttackDamagePerLevel(float $attackDamagePerLevel) : self
    {
        $this->attackDamagePerLevel = $attackDamagePerLevel;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAttackSpeedOffset() : float
    {
        return $this->attackSpeedOffset;
    }
    /**
     * 
     *
     * @param float $attackSpeedOffset
     *
     * @return self
     */
    public function setAttackSpeedOffset(float $attackSpeedOffset) : self
    {
        $this->attackSpeedOffset = $attackSpeedOffset;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getChampionId() : int
    {
        return $this->championId;
    }
    /**
     * 
     *
     * @param int $championId
     *
     * @return self
     */
    public function setChampionId(int $championId) : self
    {
        $this->championId = $championId;
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
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->title = $title;
        return $this;
    }
}