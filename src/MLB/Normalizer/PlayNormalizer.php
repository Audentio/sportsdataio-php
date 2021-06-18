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
        if (\array_key_exists('InningNumber', $data) && $data['InningNumber'] !== null) {
            $object->setInningNumber($data['InningNumber']);
        }
        elseif (\array_key_exists('InningNumber', $data) && $data['InningNumber'] === null) {
            $object->setInningNumber(null);
        }
        if (\array_key_exists('InningHalf', $data) && $data['InningHalf'] !== null) {
            $object->setInningHalf($data['InningHalf']);
        }
        elseif (\array_key_exists('InningHalf', $data) && $data['InningHalf'] === null) {
            $object->setInningHalf(null);
        }
        if (\array_key_exists('PlayNumber', $data) && $data['PlayNumber'] !== null) {
            $object->setPlayNumber($data['PlayNumber']);
        }
        elseif (\array_key_exists('PlayNumber', $data) && $data['PlayNumber'] === null) {
            $object->setPlayNumber(null);
        }
        if (\array_key_exists('InningBatterNumber', $data) && $data['InningBatterNumber'] !== null) {
            $object->setInningBatterNumber($data['InningBatterNumber']);
        }
        elseif (\array_key_exists('InningBatterNumber', $data) && $data['InningBatterNumber'] === null) {
            $object->setInningBatterNumber(null);
        }
        if (\array_key_exists('AwayTeamRuns', $data) && $data['AwayTeamRuns'] !== null) {
            $object->setAwayTeamRuns($data['AwayTeamRuns']);
        }
        elseif (\array_key_exists('AwayTeamRuns', $data) && $data['AwayTeamRuns'] === null) {
            $object->setAwayTeamRuns(null);
        }
        if (\array_key_exists('HomeTeamRuns', $data) && $data['HomeTeamRuns'] !== null) {
            $object->setHomeTeamRuns($data['HomeTeamRuns']);
        }
        elseif (\array_key_exists('HomeTeamRuns', $data) && $data['HomeTeamRuns'] === null) {
            $object->setHomeTeamRuns(null);
        }
        if (\array_key_exists('HitterID', $data) && $data['HitterID'] !== null) {
            $object->setHitterID($data['HitterID']);
        }
        elseif (\array_key_exists('HitterID', $data) && $data['HitterID'] === null) {
            $object->setHitterID(null);
        }
        if (\array_key_exists('PitcherID', $data) && $data['PitcherID'] !== null) {
            $object->setPitcherID($data['PitcherID']);
        }
        elseif (\array_key_exists('PitcherID', $data) && $data['PitcherID'] === null) {
            $object->setPitcherID(null);
        }
        if (\array_key_exists('HitterTeamID', $data) && $data['HitterTeamID'] !== null) {
            $object->setHitterTeamID($data['HitterTeamID']);
        }
        elseif (\array_key_exists('HitterTeamID', $data) && $data['HitterTeamID'] === null) {
            $object->setHitterTeamID(null);
        }
        if (\array_key_exists('PitcherTeamID', $data) && $data['PitcherTeamID'] !== null) {
            $object->setPitcherTeamID($data['PitcherTeamID']);
        }
        elseif (\array_key_exists('PitcherTeamID', $data) && $data['PitcherTeamID'] === null) {
            $object->setPitcherTeamID(null);
        }
        if (\array_key_exists('HitterName', $data) && $data['HitterName'] !== null) {
            $object->setHitterName($data['HitterName']);
        }
        elseif (\array_key_exists('HitterName', $data) && $data['HitterName'] === null) {
            $object->setHitterName(null);
        }
        if (\array_key_exists('PitcherName', $data) && $data['PitcherName'] !== null) {
            $object->setPitcherName($data['PitcherName']);
        }
        elseif (\array_key_exists('PitcherName', $data) && $data['PitcherName'] === null) {
            $object->setPitcherName(null);
        }
        if (\array_key_exists('PitcherThrowHand', $data) && $data['PitcherThrowHand'] !== null) {
            $object->setPitcherThrowHand($data['PitcherThrowHand']);
        }
        elseif (\array_key_exists('PitcherThrowHand', $data) && $data['PitcherThrowHand'] === null) {
            $object->setPitcherThrowHand(null);
        }
        if (\array_key_exists('HitterBatHand', $data) && $data['HitterBatHand'] !== null) {
            $object->setHitterBatHand($data['HitterBatHand']);
        }
        elseif (\array_key_exists('HitterBatHand', $data) && $data['HitterBatHand'] === null) {
            $object->setHitterBatHand(null);
        }
        if (\array_key_exists('HitterPosition', $data) && $data['HitterPosition'] !== null) {
            $object->setHitterPosition($data['HitterPosition']);
        }
        elseif (\array_key_exists('HitterPosition', $data) && $data['HitterPosition'] === null) {
            $object->setHitterPosition(null);
        }
        if (\array_key_exists('Outs', $data) && $data['Outs'] !== null) {
            $object->setOuts($data['Outs']);
        }
        elseif (\array_key_exists('Outs', $data) && $data['Outs'] === null) {
            $object->setOuts(null);
        }
        if (\array_key_exists('Balls', $data) && $data['Balls'] !== null) {
            $object->setBalls($data['Balls']);
        }
        elseif (\array_key_exists('Balls', $data) && $data['Balls'] === null) {
            $object->setBalls(null);
        }
        if (\array_key_exists('Strikes', $data) && $data['Strikes'] !== null) {
            $object->setStrikes($data['Strikes']);
        }
        elseif (\array_key_exists('Strikes', $data) && $data['Strikes'] === null) {
            $object->setStrikes(null);
        }
        if (\array_key_exists('PitchNumberThisAtBat', $data) && $data['PitchNumberThisAtBat'] !== null) {
            $object->setPitchNumberThisAtBat($data['PitchNumberThisAtBat']);
        }
        elseif (\array_key_exists('PitchNumberThisAtBat', $data) && $data['PitchNumberThisAtBat'] === null) {
            $object->setPitchNumberThisAtBat(null);
        }
        if (\array_key_exists('Result', $data) && $data['Result'] !== null) {
            $object->setResult($data['Result']);
        }
        elseif (\array_key_exists('Result', $data) && $data['Result'] === null) {
            $object->setResult(null);
        }
        if (\array_key_exists('NumberOfOutsOnPlay', $data) && $data['NumberOfOutsOnPlay'] !== null) {
            $object->setNumberOfOutsOnPlay($data['NumberOfOutsOnPlay']);
        }
        elseif (\array_key_exists('NumberOfOutsOnPlay', $data) && $data['NumberOfOutsOnPlay'] === null) {
            $object->setNumberOfOutsOnPlay(null);
        }
        if (\array_key_exists('RunsBattedIn', $data) && $data['RunsBattedIn'] !== null) {
            $object->setRunsBattedIn($data['RunsBattedIn']);
        }
        elseif (\array_key_exists('RunsBattedIn', $data) && $data['RunsBattedIn'] === null) {
            $object->setRunsBattedIn(null);
        }
        if (\array_key_exists('AtBat', $data) && $data['AtBat'] !== null) {
            $object->setAtBat($data['AtBat']);
        }
        elseif (\array_key_exists('AtBat', $data) && $data['AtBat'] === null) {
            $object->setAtBat(null);
        }
        if (\array_key_exists('Strikeout', $data) && $data['Strikeout'] !== null) {
            $object->setStrikeout($data['Strikeout']);
        }
        elseif (\array_key_exists('Strikeout', $data) && $data['Strikeout'] === null) {
            $object->setStrikeout(null);
        }
        if (\array_key_exists('Walk', $data) && $data['Walk'] !== null) {
            $object->setWalk($data['Walk']);
        }
        elseif (\array_key_exists('Walk', $data) && $data['Walk'] === null) {
            $object->setWalk(null);
        }
        if (\array_key_exists('Hit', $data) && $data['Hit'] !== null) {
            $object->setHit($data['Hit']);
        }
        elseif (\array_key_exists('Hit', $data) && $data['Hit'] === null) {
            $object->setHit(null);
        }
        if (\array_key_exists('Out', $data) && $data['Out'] !== null) {
            $object->setOut($data['Out']);
        }
        elseif (\array_key_exists('Out', $data) && $data['Out'] === null) {
            $object->setOut(null);
        }
        if (\array_key_exists('Sacrifice', $data) && $data['Sacrifice'] !== null) {
            $object->setSacrifice($data['Sacrifice']);
        }
        elseif (\array_key_exists('Sacrifice', $data) && $data['Sacrifice'] === null) {
            $object->setSacrifice(null);
        }
        if (\array_key_exists('Error', $data) && $data['Error'] !== null) {
            $object->setError($data['Error']);
        }
        elseif (\array_key_exists('Error', $data) && $data['Error'] === null) {
            $object->setError(null);
        }
        if (\array_key_exists('Updated', $data) && $data['Updated'] !== null) {
            $object->setUpdated($data['Updated']);
        }
        elseif (\array_key_exists('Updated', $data) && $data['Updated'] === null) {
            $object->setUpdated(null);
        }
        if (\array_key_exists('Description', $data) && $data['Description'] !== null) {
            $object->setDescription($data['Description']);
        }
        elseif (\array_key_exists('Description', $data) && $data['Description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('Pitches', $data)) {
            $values = array();
            foreach ($data['Pitches'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\MLB\\Model\\Pitch', 'json', $context);
            }
            $object->setPitches($values);
        }
        if (\array_key_exists('Runner1ID', $data) && $data['Runner1ID'] !== null) {
            $object->setRunner1ID($data['Runner1ID']);
        }
        elseif (\array_key_exists('Runner1ID', $data) && $data['Runner1ID'] === null) {
            $object->setRunner1ID(null);
        }
        if (\array_key_exists('Runner2ID', $data) && $data['Runner2ID'] !== null) {
            $object->setRunner2ID($data['Runner2ID']);
        }
        elseif (\array_key_exists('Runner2ID', $data) && $data['Runner2ID'] === null) {
            $object->setRunner2ID(null);
        }
        if (\array_key_exists('Runner3ID', $data) && $data['Runner3ID'] !== null) {
            $object->setRunner3ID($data['Runner3ID']);
        }
        elseif (\array_key_exists('Runner3ID', $data) && $data['Runner3ID'] === null) {
            $object->setRunner3ID(null);
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