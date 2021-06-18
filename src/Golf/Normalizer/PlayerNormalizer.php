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
        if (\array_key_exists('FirstName', $data) && $data['FirstName'] !== null) {
            $object->setFirstName($data['FirstName']);
        }
        elseif (\array_key_exists('FirstName', $data) && $data['FirstName'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('LastName', $data) && $data['LastName'] !== null) {
            $object->setLastName($data['LastName']);
        }
        elseif (\array_key_exists('LastName', $data) && $data['LastName'] === null) {
            $object->setLastName(null);
        }
        if (\array_key_exists('Weight', $data) && $data['Weight'] !== null) {
            $object->setWeight($data['Weight']);
        }
        elseif (\array_key_exists('Weight', $data) && $data['Weight'] === null) {
            $object->setWeight(null);
        }
        if (\array_key_exists('Swings', $data) && $data['Swings'] !== null) {
            $object->setSwings($data['Swings']);
        }
        elseif (\array_key_exists('Swings', $data) && $data['Swings'] === null) {
            $object->setSwings(null);
        }
        if (\array_key_exists('PgaDebut', $data) && $data['PgaDebut'] !== null) {
            $object->setPgaDebut($data['PgaDebut']);
        }
        elseif (\array_key_exists('PgaDebut', $data) && $data['PgaDebut'] === null) {
            $object->setPgaDebut(null);
        }
        if (\array_key_exists('Country', $data) && $data['Country'] !== null) {
            $object->setCountry($data['Country']);
        }
        elseif (\array_key_exists('Country', $data) && $data['Country'] === null) {
            $object->setCountry(null);
        }
        if (\array_key_exists('BirthDate', $data) && $data['BirthDate'] !== null) {
            $object->setBirthDate($data['BirthDate']);
        }
        elseif (\array_key_exists('BirthDate', $data) && $data['BirthDate'] === null) {
            $object->setBirthDate(null);
        }
        if (\array_key_exists('BirthCity', $data) && $data['BirthCity'] !== null) {
            $object->setBirthCity($data['BirthCity']);
        }
        elseif (\array_key_exists('BirthCity', $data) && $data['BirthCity'] === null) {
            $object->setBirthCity(null);
        }
        if (\array_key_exists('BirthState', $data) && $data['BirthState'] !== null) {
            $object->setBirthState($data['BirthState']);
        }
        elseif (\array_key_exists('BirthState', $data) && $data['BirthState'] === null) {
            $object->setBirthState(null);
        }
        if (\array_key_exists('College', $data) && $data['College'] !== null) {
            $object->setCollege($data['College']);
        }
        elseif (\array_key_exists('College', $data) && $data['College'] === null) {
            $object->setCollege(null);
        }
        if (\array_key_exists('PhotoUrl', $data) && $data['PhotoUrl'] !== null) {
            $object->setPhotoUrl($data['PhotoUrl']);
        }
        elseif (\array_key_exists('PhotoUrl', $data) && $data['PhotoUrl'] === null) {
            $object->setPhotoUrl(null);
        }
        if (\array_key_exists('SportRadarPlayerID', $data) && $data['SportRadarPlayerID'] !== null) {
            $object->setSportRadarPlayerID($data['SportRadarPlayerID']);
        }
        elseif (\array_key_exists('SportRadarPlayerID', $data) && $data['SportRadarPlayerID'] === null) {
            $object->setSportRadarPlayerID(null);
        }
        if (\array_key_exists('PgaTourPlayerID', $data) && $data['PgaTourPlayerID'] !== null) {
            $object->setPgaTourPlayerID($data['PgaTourPlayerID']);
        }
        elseif (\array_key_exists('PgaTourPlayerID', $data) && $data['PgaTourPlayerID'] === null) {
            $object->setPgaTourPlayerID(null);
        }
        if (\array_key_exists('RotoworldPlayerID', $data) && $data['RotoworldPlayerID'] !== null) {
            $object->setRotoworldPlayerID($data['RotoworldPlayerID']);
        }
        elseif (\array_key_exists('RotoworldPlayerID', $data) && $data['RotoworldPlayerID'] === null) {
            $object->setRotoworldPlayerID(null);
        }
        if (\array_key_exists('RotoWirePlayerID', $data) && $data['RotoWirePlayerID'] !== null) {
            $object->setRotoWirePlayerID($data['RotoWirePlayerID']);
        }
        elseif (\array_key_exists('RotoWirePlayerID', $data) && $data['RotoWirePlayerID'] === null) {
            $object->setRotoWirePlayerID(null);
        }
        if (\array_key_exists('FantasyAlarmPlayerID', $data) && $data['FantasyAlarmPlayerID'] !== null) {
            $object->setFantasyAlarmPlayerID($data['FantasyAlarmPlayerID']);
        }
        elseif (\array_key_exists('FantasyAlarmPlayerID', $data) && $data['FantasyAlarmPlayerID'] === null) {
            $object->setFantasyAlarmPlayerID(null);
        }
        if (\array_key_exists('DraftKingsName', $data) && $data['DraftKingsName'] !== null) {
            $object->setDraftKingsName($data['DraftKingsName']);
        }
        elseif (\array_key_exists('DraftKingsName', $data) && $data['DraftKingsName'] === null) {
            $object->setDraftKingsName(null);
        }
        if (\array_key_exists('FantasyDraftName', $data) && $data['FantasyDraftName'] !== null) {
            $object->setFantasyDraftName($data['FantasyDraftName']);
        }
        elseif (\array_key_exists('FantasyDraftName', $data) && $data['FantasyDraftName'] === null) {
            $object->setFantasyDraftName(null);
        }
        if (\array_key_exists('FanDuelName', $data) && $data['FanDuelName'] !== null) {
            $object->setFanDuelName($data['FanDuelName']);
        }
        elseif (\array_key_exists('FanDuelName', $data) && $data['FanDuelName'] === null) {
            $object->setFanDuelName(null);
        }
        if (\array_key_exists('FantasyDraftPlayerID', $data) && $data['FantasyDraftPlayerID'] !== null) {
            $object->setFantasyDraftPlayerID($data['FantasyDraftPlayerID']);
        }
        elseif (\array_key_exists('FantasyDraftPlayerID', $data) && $data['FantasyDraftPlayerID'] === null) {
            $object->setFantasyDraftPlayerID(null);
        }
        if (\array_key_exists('DraftKingsPlayerID', $data) && $data['DraftKingsPlayerID'] !== null) {
            $object->setDraftKingsPlayerID($data['DraftKingsPlayerID']);
        }
        elseif (\array_key_exists('DraftKingsPlayerID', $data) && $data['DraftKingsPlayerID'] === null) {
            $object->setDraftKingsPlayerID(null);
        }
        if (\array_key_exists('FanDuelPlayerID', $data) && $data['FanDuelPlayerID'] !== null) {
            $object->setFanDuelPlayerID($data['FanDuelPlayerID']);
        }
        elseif (\array_key_exists('FanDuelPlayerID', $data) && $data['FanDuelPlayerID'] === null) {
            $object->setFanDuelPlayerID(null);
        }
        if (\array_key_exists('YahooPlayerID', $data) && $data['YahooPlayerID'] !== null) {
            $object->setYahooPlayerID($data['YahooPlayerID']);
        }
        elseif (\array_key_exists('YahooPlayerID', $data) && $data['YahooPlayerID'] === null) {
            $object->setYahooPlayerID(null);
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