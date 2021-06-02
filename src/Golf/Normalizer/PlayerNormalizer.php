<?php

namespace Sportsdata\API\Golf\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\Golf\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PlayerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Golf\\Model\\Player';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Golf\\Model\\Player';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Golf\Model\Player();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
        }
        if (\array_key_exists('FirstName', $data)) {
            $object->setFirstName($data['FirstName']);
        }
        if (\array_key_exists('LastName', $data)) {
            $object->setLastName($data['LastName']);
        }
        if (\array_key_exists('Weight', $data)) {
            $object->setWeight($data['Weight']);
        }
        if (\array_key_exists('Swings', $data)) {
            $object->setSwings($data['Swings']);
        }
        if (\array_key_exists('PgaDebut', $data)) {
            $object->setPgaDebut($data['PgaDebut']);
        }
        if (\array_key_exists('Country', $data)) {
            $object->setCountry($data['Country']);
        }
        if (\array_key_exists('BirthDate', $data)) {
            $object->setBirthDate($data['BirthDate']);
        }
        if (\array_key_exists('BirthCity', $data)) {
            $object->setBirthCity($data['BirthCity']);
        }
        if (\array_key_exists('BirthState', $data)) {
            $object->setBirthState($data['BirthState']);
        }
        if (\array_key_exists('College', $data)) {
            $object->setCollege($data['College']);
        }
        if (\array_key_exists('PhotoUrl', $data)) {
            $object->setPhotoUrl($data['PhotoUrl']);
        }
        if (\array_key_exists('SportRadarPlayerID', $data)) {
            $object->setSportRadarPlayerID($data['SportRadarPlayerID']);
        }
        if (\array_key_exists('PgaTourPlayerID', $data)) {
            $object->setPgaTourPlayerID($data['PgaTourPlayerID']);
        }
        if (\array_key_exists('RotoworldPlayerID', $data)) {
            $object->setRotoworldPlayerID($data['RotoworldPlayerID']);
        }
        if (\array_key_exists('RotoWirePlayerID', $data)) {
            $object->setRotoWirePlayerID($data['RotoWirePlayerID']);
        }
        if (\array_key_exists('FantasyAlarmPlayerID', $data)) {
            $object->setFantasyAlarmPlayerID($data['FantasyAlarmPlayerID']);
        }
        if (\array_key_exists('DraftKingsName', $data)) {
            $object->setDraftKingsName($data['DraftKingsName']);
        }
        if (\array_key_exists('FantasyDraftName', $data)) {
            $object->setFantasyDraftName($data['FantasyDraftName']);
        }
        if (\array_key_exists('FanDuelName', $data)) {
            $object->setFanDuelName($data['FanDuelName']);
        }
        if (\array_key_exists('FantasyDraftPlayerID', $data)) {
            $object->setFantasyDraftPlayerID($data['FantasyDraftPlayerID']);
        }
        if (\array_key_exists('DraftKingsPlayerID', $data)) {
            $object->setDraftKingsPlayerID($data['DraftKingsPlayerID']);
        }
        if (\array_key_exists('FanDuelPlayerID', $data)) {
            $object->setFanDuelPlayerID($data['FanDuelPlayerID']);
        }
        if (\array_key_exists('YahooPlayerID', $data)) {
            $object->setYahooPlayerID($data['YahooPlayerID']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getFirstName()) {
            $data['FirstName'] = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data['LastName'] = $object->getLastName();
        }
        if (null !== $object->getWeight()) {
            $data['Weight'] = $object->getWeight();
        }
        if (null !== $object->getSwings()) {
            $data['Swings'] = $object->getSwings();
        }
        if (null !== $object->getPgaDebut()) {
            $data['PgaDebut'] = $object->getPgaDebut();
        }
        if (null !== $object->getCountry()) {
            $data['Country'] = $object->getCountry();
        }
        if (null !== $object->getBirthDate()) {
            $data['BirthDate'] = $object->getBirthDate();
        }
        if (null !== $object->getBirthCity()) {
            $data['BirthCity'] = $object->getBirthCity();
        }
        if (null !== $object->getBirthState()) {
            $data['BirthState'] = $object->getBirthState();
        }
        if (null !== $object->getCollege()) {
            $data['College'] = $object->getCollege();
        }
        if (null !== $object->getPhotoUrl()) {
            $data['PhotoUrl'] = $object->getPhotoUrl();
        }
        if (null !== $object->getSportRadarPlayerID()) {
            $data['SportRadarPlayerID'] = $object->getSportRadarPlayerID();
        }
        if (null !== $object->getPgaTourPlayerID()) {
            $data['PgaTourPlayerID'] = $object->getPgaTourPlayerID();
        }
        if (null !== $object->getRotoworldPlayerID()) {
            $data['RotoworldPlayerID'] = $object->getRotoworldPlayerID();
        }
        if (null !== $object->getRotoWirePlayerID()) {
            $data['RotoWirePlayerID'] = $object->getRotoWirePlayerID();
        }
        if (null !== $object->getFantasyAlarmPlayerID()) {
            $data['FantasyAlarmPlayerID'] = $object->getFantasyAlarmPlayerID();
        }
        if (null !== $object->getDraftKingsName()) {
            $data['DraftKingsName'] = $object->getDraftKingsName();
        }
        if (null !== $object->getFantasyDraftName()) {
            $data['FantasyDraftName'] = $object->getFantasyDraftName();
        }
        if (null !== $object->getFanDuelName()) {
            $data['FanDuelName'] = $object->getFanDuelName();
        }
        if (null !== $object->getFantasyDraftPlayerID()) {
            $data['FantasyDraftPlayerID'] = $object->getFantasyDraftPlayerID();
        }
        if (null !== $object->getDraftKingsPlayerID()) {
            $data['DraftKingsPlayerID'] = $object->getDraftKingsPlayerID();
        }
        if (null !== $object->getFanDuelPlayerID()) {
            $data['FanDuelPlayerID'] = $object->getFanDuelPlayerID();
        }
        if (null !== $object->getYahooPlayerID()) {
            $data['YahooPlayerID'] = $object->getYahooPlayerID();
        }
        return $data;
    }
}