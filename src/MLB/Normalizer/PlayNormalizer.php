<?php

namespace Sportsdata\API\MLB\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\MLB\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PlayNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\MLB\\Model\\Play';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\MLB\\Model\\Play';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\MLB\Model\Play();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayID', $data)) {
            $object->setPlayID($data['PlayID']);
        }
        if (\array_key_exists('InningID', $data)) {
            $object->setInningID($data['InningID']);
        }
        if (\array_key_exists('InningNumber', $data)) {
            $object->setInningNumber($data['InningNumber']);
        }
        if (\array_key_exists('InningHalf', $data)) {
            $object->setInningHalf($data['InningHalf']);
        }
        if (\array_key_exists('PlayNumber', $data)) {
            $object->setPlayNumber($data['PlayNumber']);
        }
        if (\array_key_exists('InningBatterNumber', $data)) {
            $object->setInningBatterNumber($data['InningBatterNumber']);
        }
        if (\array_key_exists('AwayTeamRuns', $data)) {
            $object->setAwayTeamRuns($data['AwayTeamRuns']);
        }
        if (\array_key_exists('HomeTeamRuns', $data)) {
            $object->setHomeTeamRuns($data['HomeTeamRuns']);
        }
        if (\array_key_exists('HitterID', $data)) {
            $object->setHitterID($data['HitterID']);
        }
        if (\array_key_exists('PitcherID', $data)) {
            $object->setPitcherID($data['PitcherID']);
        }
        if (\array_key_exists('HitterTeamID', $data)) {
            $object->setHitterTeamID($data['HitterTeamID']);
        }
        if (\array_key_exists('PitcherTeamID', $data)) {
            $object->setPitcherTeamID($data['PitcherTeamID']);
        }
        if (\array_key_exists('HitterName', $data)) {
            $object->setHitterName($data['HitterName']);
        }
        if (\array_key_exists('PitcherName', $data)) {
            $object->setPitcherName($data['PitcherName']);
        }
        if (\array_key_exists('PitcherThrowHand', $data)) {
            $object->setPitcherThrowHand($data['PitcherThrowHand']);
        }
        if (\array_key_exists('HitterBatHand', $data)) {
            $object->setHitterBatHand($data['HitterBatHand']);
        }
        if (\array_key_exists('HitterPosition', $data)) {
            $object->setHitterPosition($data['HitterPosition']);
        }
        if (\array_key_exists('Outs', $data)) {
            $object->setOuts($data['Outs']);
        }
        if (\array_key_exists('Balls', $data)) {
            $object->setBalls($data['Balls']);
        }
        if (\array_key_exists('Strikes', $data)) {
            $object->setStrikes($data['Strikes']);
        }
        if (\array_key_exists('PitchNumberThisAtBat', $data)) {
            $object->setPitchNumberThisAtBat($data['PitchNumberThisAtBat']);
        }
        if (\array_key_exists('Result', $data)) {
            $object->setResult($data['Result']);
        }
        if (\array_key_exists('NumberOfOutsOnPlay', $data)) {
            $object->setNumberOfOutsOnPlay($data['NumberOfOutsOnPlay']);
        }
        if (\array_key_exists('RunsBattedIn', $data)) {
            $object->setRunsBattedIn($data['RunsBattedIn']);
        }
        if (\array_key_exists('AtBat', $data)) {
            $object->setAtBat($data['AtBat']);
        }
        if (\array_key_exists('Strikeout', $data)) {
            $object->setStrikeout($data['Strikeout']);
        }
        if (\array_key_exists('Walk', $data)) {
            $object->setWalk($data['Walk']);
        }
        if (\array_key_exists('Hit', $data)) {
            $object->setHit($data['Hit']);
        }
        if (\array_key_exists('Out', $data)) {
            $object->setOut($data['Out']);
        }
        if (\array_key_exists('Sacrifice', $data)) {
            $object->setSacrifice($data['Sacrifice']);
        }
        if (\array_key_exists('Error', $data)) {
            $object->setError($data['Error']);
        }
        if (\array_key_exists('Updated', $data)) {
            $object->setUpdated($data['Updated']);
        }
        if (\array_key_exists('Description', $data)) {
            $object->setDescription($data['Description']);
        }
        if (\array_key_exists('Pitches', $data)) {
            $values = array();
            foreach ($data['Pitches'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\MLB\\Model\\Pitch', 'json', $context);
            }
            $object->setPitches($values);
        }
        if (\array_key_exists('Runner1ID', $data)) {
            $object->setRunner1ID($data['Runner1ID']);
        }
        if (\array_key_exists('Runner2ID', $data)) {
            $object->setRunner2ID($data['Runner2ID']);
        }
        if (\array_key_exists('Runner3ID', $data)) {
            $object->setRunner3ID($data['Runner3ID']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPlayID()) {
            $data['PlayID'] = $object->getPlayID();
        }
        if (null !== $object->getInningID()) {
            $data['InningID'] = $object->getInningID();
        }
        if (null !== $object->getInningNumber()) {
            $data['InningNumber'] = $object->getInningNumber();
        }
        if (null !== $object->getInningHalf()) {
            $data['InningHalf'] = $object->getInningHalf();
        }
        if (null !== $object->getPlayNumber()) {
            $data['PlayNumber'] = $object->getPlayNumber();
        }
        if (null !== $object->getInningBatterNumber()) {
            $data['InningBatterNumber'] = $object->getInningBatterNumber();
        }
        if (null !== $object->getAwayTeamRuns()) {
            $data['AwayTeamRuns'] = $object->getAwayTeamRuns();
        }
        if (null !== $object->getHomeTeamRuns()) {
            $data['HomeTeamRuns'] = $object->getHomeTeamRuns();
        }
        if (null !== $object->getHitterID()) {
            $data['HitterID'] = $object->getHitterID();
        }
        if (null !== $object->getPitcherID()) {
            $data['PitcherID'] = $object->getPitcherID();
        }
        if (null !== $object->getHitterTeamID()) {
            $data['HitterTeamID'] = $object->getHitterTeamID();
        }
        if (null !== $object->getPitcherTeamID()) {
            $data['PitcherTeamID'] = $object->getPitcherTeamID();
        }
        if (null !== $object->getHitterName()) {
            $data['HitterName'] = $object->getHitterName();
        }
        if (null !== $object->getPitcherName()) {
            $data['PitcherName'] = $object->getPitcherName();
        }
        if (null !== $object->getPitcherThrowHand()) {
            $data['PitcherThrowHand'] = $object->getPitcherThrowHand();
        }
        if (null !== $object->getHitterBatHand()) {
            $data['HitterBatHand'] = $object->getHitterBatHand();
        }
        if (null !== $object->getHitterPosition()) {
            $data['HitterPosition'] = $object->getHitterPosition();
        }
        if (null !== $object->getOuts()) {
            $data['Outs'] = $object->getOuts();
        }
        if (null !== $object->getBalls()) {
            $data['Balls'] = $object->getBalls();
        }
        if (null !== $object->getStrikes()) {
            $data['Strikes'] = $object->getStrikes();
        }
        if (null !== $object->getPitchNumberThisAtBat()) {
            $data['PitchNumberThisAtBat'] = $object->getPitchNumberThisAtBat();
        }
        if (null !== $object->getResult()) {
            $data['Result'] = $object->getResult();
        }
        if (null !== $object->getNumberOfOutsOnPlay()) {
            $data['NumberOfOutsOnPlay'] = $object->getNumberOfOutsOnPlay();
        }
        if (null !== $object->getRunsBattedIn()) {
            $data['RunsBattedIn'] = $object->getRunsBattedIn();
        }
        if (null !== $object->getAtBat()) {
            $data['AtBat'] = $object->getAtBat();
        }
        if (null !== $object->getStrikeout()) {
            $data['Strikeout'] = $object->getStrikeout();
        }
        if (null !== $object->getWalk()) {
            $data['Walk'] = $object->getWalk();
        }
        if (null !== $object->getHit()) {
            $data['Hit'] = $object->getHit();
        }
        if (null !== $object->getOut()) {
            $data['Out'] = $object->getOut();
        }
        if (null !== $object->getSacrifice()) {
            $data['Sacrifice'] = $object->getSacrifice();
        }
        if (null !== $object->getError()) {
            $data['Error'] = $object->getError();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getDescription()) {
            $data['Description'] = $object->getDescription();
        }
        if (null !== $object->getPitches()) {
            $values = array();
            foreach ($object->getPitches() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Pitches'] = $values;
        }
        if (null !== $object->getRunner1ID()) {
            $data['Runner1ID'] = $object->getRunner1ID();
        }
        if (null !== $object->getRunner2ID()) {
            $data['Runner2ID'] = $object->getRunner2ID();
        }
        if (null !== $object->getRunner3ID()) {
            $data['Runner3ID'] = $object->getRunner3ID();
        }
        return $data;
    }
}