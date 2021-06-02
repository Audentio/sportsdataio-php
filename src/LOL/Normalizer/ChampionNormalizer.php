<?php

namespace Sportsdata\API\LOL\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\LOL\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ChampionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\LOL\\Model\\Champion';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\LOL\\Model\\Champion';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\LOL\Model\Champion();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Attack', $data)) {
            $object->setAttack($data['Attack']);
        }
        if (\array_key_exists('Defense', $data)) {
            $object->setDefense($data['Defense']);
        }
        if (\array_key_exists('Magic', $data)) {
            $object->setMagic($data['Magic']);
        }
        if (\array_key_exists('Difficulty', $data)) {
            $object->setDifficulty($data['Difficulty']);
        }
        if (\array_key_exists('Hp', $data)) {
            $object->setHp($data['Hp']);
        }
        if (\array_key_exists('HpUpPerLevel', $data)) {
            $object->setHpUpPerLevel($data['HpUpPerLevel']);
        }
        if (\array_key_exists('Mp', $data)) {
            $object->setMp($data['Mp']);
        }
        if (\array_key_exists('MpUpPerLevel', $data)) {
            $object->setMpUpPerLevel($data['MpUpPerLevel']);
        }
        if (\array_key_exists('MoveSpeed', $data)) {
            $object->setMoveSpeed($data['MoveSpeed']);
        }
        if (\array_key_exists('Armor', $data)) {
            $object->setArmor($data['Armor']);
        }
        if (\array_key_exists('ArmorPerLevel', $data)) {
            $object->setArmorPerLevel($data['ArmorPerLevel']);
        }
        if (\array_key_exists('SpellBlock', $data)) {
            $object->setSpellBlock($data['SpellBlock']);
        }
        if (\array_key_exists('SpellBlockPerLevel', $data)) {
            $object->setSpellBlockPerLevel($data['SpellBlockPerLevel']);
        }
        if (\array_key_exists('AttackRange', $data)) {
            $object->setAttackRange($data['AttackRange']);
        }
        if (\array_key_exists('HpRegen', $data)) {
            $object->setHpRegen($data['HpRegen']);
        }
        if (\array_key_exists('HpRegenPerLevel', $data)) {
            $object->setHpRegenPerLevel($data['HpRegenPerLevel']);
        }
        if (\array_key_exists('MpRegen', $data)) {
            $object->setMpRegen($data['MpRegen']);
        }
        if (\array_key_exists('MpRegenPerLevel', $data)) {
            $object->setMpRegenPerLevel($data['MpRegenPerLevel']);
        }
        if (\array_key_exists('AttackDamage', $data)) {
            $object->setAttackDamage($data['AttackDamage']);
        }
        if (\array_key_exists('AttackDamagePerLevel', $data)) {
            $object->setAttackDamagePerLevel($data['AttackDamagePerLevel']);
        }
        if (\array_key_exists('AttackSpeedOffset', $data)) {
            $object->setAttackSpeedOffset($data['AttackSpeedOffset']);
        }
        if (\array_key_exists('ChampionId', $data)) {
            $object->setChampionId($data['ChampionId']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('Title', $data)) {
            $object->setTitle($data['Title']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAttack()) {
            $data['Attack'] = $object->getAttack();
        }
        if (null !== $object->getDefense()) {
            $data['Defense'] = $object->getDefense();
        }
        if (null !== $object->getMagic()) {
            $data['Magic'] = $object->getMagic();
        }
        if (null !== $object->getDifficulty()) {
            $data['Difficulty'] = $object->getDifficulty();
        }
        if (null !== $object->getHp()) {
            $data['Hp'] = $object->getHp();
        }
        if (null !== $object->getHpUpPerLevel()) {
            $data['HpUpPerLevel'] = $object->getHpUpPerLevel();
        }
        if (null !== $object->getMp()) {
            $data['Mp'] = $object->getMp();
        }
        if (null !== $object->getMpUpPerLevel()) {
            $data['MpUpPerLevel'] = $object->getMpUpPerLevel();
        }
        if (null !== $object->getMoveSpeed()) {
            $data['MoveSpeed'] = $object->getMoveSpeed();
        }
        if (null !== $object->getArmor()) {
            $data['Armor'] = $object->getArmor();
        }
        if (null !== $object->getArmorPerLevel()) {
            $data['ArmorPerLevel'] = $object->getArmorPerLevel();
        }
        if (null !== $object->getSpellBlock()) {
            $data['SpellBlock'] = $object->getSpellBlock();
        }
        if (null !== $object->getSpellBlockPerLevel()) {
            $data['SpellBlockPerLevel'] = $object->getSpellBlockPerLevel();
        }
        if (null !== $object->getAttackRange()) {
            $data['AttackRange'] = $object->getAttackRange();
        }
        if (null !== $object->getHpRegen()) {
            $data['HpRegen'] = $object->getHpRegen();
        }
        if (null !== $object->getHpRegenPerLevel()) {
            $data['HpRegenPerLevel'] = $object->getHpRegenPerLevel();
        }
        if (null !== $object->getMpRegen()) {
            $data['MpRegen'] = $object->getMpRegen();
        }
        if (null !== $object->getMpRegenPerLevel()) {
            $data['MpRegenPerLevel'] = $object->getMpRegenPerLevel();
        }
        if (null !== $object->getAttackDamage()) {
            $data['AttackDamage'] = $object->getAttackDamage();
        }
        if (null !== $object->getAttackDamagePerLevel()) {
            $data['AttackDamagePerLevel'] = $object->getAttackDamagePerLevel();
        }
        if (null !== $object->getAttackSpeedOffset()) {
            $data['AttackSpeedOffset'] = $object->getAttackSpeedOffset();
        }
        if (null !== $object->getChampionId()) {
            $data['ChampionId'] = $object->getChampionId();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getTitle()) {
            $data['Title'] = $object->getTitle();
        }
        return $data;
    }
}