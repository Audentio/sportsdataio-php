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
class PlayerRoundNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Golf\\Model\\PlayerRound';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Golf\\Model\\PlayerRound';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Golf\Model\PlayerRound();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayerRoundID', $data)) {
            $object->setPlayerRoundID($data['PlayerRoundID']);
        }
        if (\array_key_exists('PlayerTournamentID', $data)) {
            $object->setPlayerTournamentID($data['PlayerTournamentID']);
        }
        if (\array_key_exists('Number', $data) && $data['Number'] !== null) {
            $object->setNumber($data['Number']);
        }
        elseif (\array_key_exists('Number', $data) && $data['Number'] === null) {
            $object->setNumber(null);
        }
        if (\array_key_exists('Day', $data) && $data['Day'] !== null) {
            $object->setDay($data['Day']);
        }
        elseif (\array_key_exists('Day', $data) && $data['Day'] === null) {
            $object->setDay(null);
        }
        if (\array_key_exists('Par', $data) && $data['Par'] !== null) {
            $object->setPar($data['Par']);
        }
        elseif (\array_key_exists('Par', $data) && $data['Par'] === null) {
            $object->setPar(null);
        }
        if (\array_key_exists('Score', $data) && $data['Score'] !== null) {
            $object->setScore($data['Score']);
        }
        elseif (\array_key_exists('Score', $data) && $data['Score'] === null) {
            $object->setScore(null);
        }
        if (\array_key_exists('BogeyFree', $data)) {
            $object->setBogeyFree($data['BogeyFree']);
        }
        if (\array_key_exists('IncludesStreakOfThreeBirdiesOrBetter', $data)) {
            $object->setIncludesStreakOfThreeBirdiesOrBetter($data['IncludesStreakOfThreeBirdiesOrBetter']);
        }
        if (\array_key_exists('DoubleEagles', $data) && $data['DoubleEagles'] !== null) {
            $object->setDoubleEagles($data['DoubleEagles']);
        }
        elseif (\array_key_exists('DoubleEagles', $data) && $data['DoubleEagles'] === null) {
            $object->setDoubleEagles(null);
        }
        if (\array_key_exists('Eagles', $data) && $data['Eagles'] !== null) {
            $object->setEagles($data['Eagles']);
        }
        elseif (\array_key_exists('Eagles', $data) && $data['Eagles'] === null) {
            $object->setEagles(null);
        }
        if (\array_key_exists('Birdies', $data) && $data['Birdies'] !== null) {
            $object->setBirdies($data['Birdies']);
        }
        elseif (\array_key_exists('Birdies', $data) && $data['Birdies'] === null) {
            $object->setBirdies(null);
        }
        if (\array_key_exists('Pars', $data) && $data['Pars'] !== null) {
            $object->setPars($data['Pars']);
        }
        elseif (\array_key_exists('Pars', $data) && $data['Pars'] === null) {
            $object->setPars(null);
        }
        if (\array_key_exists('Bogeys', $data) && $data['Bogeys'] !== null) {
            $object->setBogeys($data['Bogeys']);
        }
        elseif (\array_key_exists('Bogeys', $data) && $data['Bogeys'] === null) {
            $object->setBogeys(null);
        }
        if (\array_key_exists('DoubleBogeys', $data) && $data['DoubleBogeys'] !== null) {
            $object->setDoubleBogeys($data['DoubleBogeys']);
        }
        elseif (\array_key_exists('DoubleBogeys', $data) && $data['DoubleBogeys'] === null) {
            $object->setDoubleBogeys(null);
        }
        if (\array_key_exists('WorseThanDoubleBogey', $data) && $data['WorseThanDoubleBogey'] !== null) {
            $object->setWorseThanDoubleBogey($data['WorseThanDoubleBogey']);
        }
        elseif (\array_key_exists('WorseThanDoubleBogey', $data) && $data['WorseThanDoubleBogey'] === null) {
            $object->setWorseThanDoubleBogey(null);
        }
        if (\array_key_exists('HoleInOnes', $data) && $data['HoleInOnes'] !== null) {
            $object->setHoleInOnes($data['HoleInOnes']);
        }
        elseif (\array_key_exists('HoleInOnes', $data) && $data['HoleInOnes'] === null) {
            $object->setHoleInOnes(null);
        }
        if (\array_key_exists('TripleBogeys', $data) && $data['TripleBogeys'] !== null) {
            $object->setTripleBogeys($data['TripleBogeys']);
        }
        elseif (\array_key_exists('TripleBogeys', $data) && $data['TripleBogeys'] === null) {
            $object->setTripleBogeys(null);
        }
        if (\array_key_exists('WorseThanTripleBogey', $data) && $data['WorseThanTripleBogey'] !== null) {
            $object->setWorseThanTripleBogey($data['WorseThanTripleBogey']);
        }
        elseif (\array_key_exists('WorseThanTripleBogey', $data) && $data['WorseThanTripleBogey'] === null) {
            $object->setWorseThanTripleBogey(null);
        }
        if (\array_key_exists('Holes', $data)) {
            $values = array();
            foreach ($data['Holes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\Golf\\Model\\PlayerHole', 'json', $context);
            }
            $object->setHoles($values);
        }
        if (\array_key_exists('LongestBirdieOrBetterStreak', $data) && $data['LongestBirdieOrBetterStreak'] !== null) {
            $object->setLongestBirdieOrBetterStreak($data['LongestBirdieOrBetterStreak']);
        }
        elseif (\array_key_exists('LongestBirdieOrBetterStreak', $data) && $data['LongestBirdieOrBetterStreak'] === null) {
            $object->setLongestBirdieOrBetterStreak(null);
        }
        if (\array_key_exists('ConsecutiveBirdieOrBetterCount', $data) && $data['ConsecutiveBirdieOrBetterCount'] !== null) {
            $object->setConsecutiveBirdieOrBetterCount($data['ConsecutiveBirdieOrBetterCount']);
        }
        elseif (\array_key_exists('ConsecutiveBirdieOrBetterCount', $data) && $data['ConsecutiveBirdieOrBetterCount'] === null) {
            $object->setConsecutiveBirdieOrBetterCount(null);
        }
        if (\array_key_exists('BounceBackCount', $data) && $data['BounceBackCount'] !== null) {
            $object->setBounceBackCount($data['BounceBackCount']);
        }
        elseif (\array_key_exists('BounceBackCount', $data) && $data['BounceBackCount'] === null) {
            $object->setBounceBackCount(null);
        }
        if (\array_key_exists('IncludesStreakOfFourBirdiesOrBetter', $data)) {
            $object->setIncludesStreakOfFourBirdiesOrBetter($data['IncludesStreakOfFourBirdiesOrBetter']);
        }
        if (\array_key_exists('IncludesStreakOfFiveBirdiesOrBetter', $data)) {
            $object->setIncludesStreakOfFiveBirdiesOrBetter($data['IncludesStreakOfFiveBirdiesOrBetter']);
        }
        if (\array_key_exists('IncludesFiveOrMoreBirdiesOrBetter', $data)) {
            $object->setIncludesFiveOrMoreBirdiesOrBetter($data['IncludesFiveOrMoreBirdiesOrBetter']);
        }
        if (\array_key_exists('IncludesStreakOfSixBirdiesOrBetter', $data)) {
            $object->setIncludesStreakOfSixBirdiesOrBetter($data['IncludesStreakOfSixBirdiesOrBetter']);
        }
        if (\array_key_exists('TeeTime', $data) && $data['TeeTime'] !== null) {
            $object->setTeeTime($data['TeeTime']);
        }
        elseif (\array_key_exists('TeeTime', $data) && $data['TeeTime'] === null) {
            $object->setTeeTime(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPlayerRoundID()) {
            $data['PlayerRoundID'] = $object->getPlayerRoundID();
        }
        if (null !== $object->getPlayerTournamentID()) {
            $data['PlayerTournamentID'] = $object->getPlayerTournamentID();
        }
        if (null !== $object->getNumber()) {
            $data['Number'] = $object->getNumber();
        }
        if (null !== $object->getDay()) {
            $data['Day'] = $object->getDay();
        }
        if (null !== $object->getPar()) {
            $data['Par'] = $object->getPar();
        }
        if (null !== $object->getScore()) {
            $data['Score'] = $object->getScore();
        }
        if (null !== $object->getBogeyFree()) {
            $data['BogeyFree'] = $object->getBogeyFree();
        }
        if (null !== $object->getIncludesStreakOfThreeBirdiesOrBetter()) {
            $data['IncludesStreakOfThreeBirdiesOrBetter'] = $object->getIncludesStreakOfThreeBirdiesOrBetter();
        }
        if (null !== $object->getDoubleEagles()) {
            $data['DoubleEagles'] = $object->getDoubleEagles();
        }
        if (null !== $object->getEagles()) {
            $data['Eagles'] = $object->getEagles();
        }
        if (null !== $object->getBirdies()) {
            $data['Birdies'] = $object->getBirdies();
        }
        if (null !== $object->getPars()) {
            $data['Pars'] = $object->getPars();
        }
        if (null !== $object->getBogeys()) {
            $data['Bogeys'] = $object->getBogeys();
        }
        if (null !== $object->getDoubleBogeys()) {
            $data['DoubleBogeys'] = $object->getDoubleBogeys();
        }
        if (null !== $object->getWorseThanDoubleBogey()) {
            $data['WorseThanDoubleBogey'] = $object->getWorseThanDoubleBogey();
        }
        if (null !== $object->getHoleInOnes()) {
            $data['HoleInOnes'] = $object->getHoleInOnes();
        }
        if (null !== $object->getTripleBogeys()) {
            $data['TripleBogeys'] = $object->getTripleBogeys();
        }
        if (null !== $object->getWorseThanTripleBogey()) {
            $data['WorseThanTripleBogey'] = $object->getWorseThanTripleBogey();
        }
        if (null !== $object->getHoles()) {
            $values = array();
            foreach ($object->getHoles() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Holes'] = $values;
        }
        if (null !== $object->getLongestBirdieOrBetterStreak()) {
            $data['LongestBirdieOrBetterStreak'] = $object->getLongestBirdieOrBetterStreak();
        }
        if (null !== $object->getConsecutiveBirdieOrBetterCount()) {
            $data['ConsecutiveBirdieOrBetterCount'] = $object->getConsecutiveBirdieOrBetterCount();
        }
        if (null !== $object->getBounceBackCount()) {
            $data['BounceBackCount'] = $object->getBounceBackCount();
        }
        if (null !== $object->getIncludesStreakOfFourBirdiesOrBetter()) {
            $data['IncludesStreakOfFourBirdiesOrBetter'] = $object->getIncludesStreakOfFourBirdiesOrBetter();
        }
        if (null !== $object->getIncludesStreakOfFiveBirdiesOrBetter()) {
            $data['IncludesStreakOfFiveBirdiesOrBetter'] = $object->getIncludesStreakOfFiveBirdiesOrBetter();
        }
        if (null !== $object->getIncludesFiveOrMoreBirdiesOrBetter()) {
            $data['IncludesFiveOrMoreBirdiesOrBetter'] = $object->getIncludesFiveOrMoreBirdiesOrBetter();
        }
        if (null !== $object->getIncludesStreakOfSixBirdiesOrBetter()) {
            $data['IncludesStreakOfSixBirdiesOrBetter'] = $object->getIncludesStreakOfSixBirdiesOrBetter();
        }
        if (null !== $object->getTeeTime()) {
            $data['TeeTime'] = $object->getTeeTime();
        }
        return $data;
    }
}