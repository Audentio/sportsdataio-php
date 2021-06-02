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
        if (\array_key_exists('Number', $data)) {
            $object->setNumber($data['Number']);
        }
        if (\array_key_exists('Day', $data)) {
            $object->setDay($data['Day']);
        }
        if (\array_key_exists('Par', $data)) {
            $object->setPar($data['Par']);
        }
        if (\array_key_exists('Score', $data)) {
            $object->setScore($data['Score']);
        }
        if (\array_key_exists('BogeyFree', $data)) {
            $object->setBogeyFree($data['BogeyFree']);
        }
        if (\array_key_exists('IncludesStreakOfThreeBirdiesOrBetter', $data)) {
            $object->setIncludesStreakOfThreeBirdiesOrBetter($data['IncludesStreakOfThreeBirdiesOrBetter']);
        }
        if (\array_key_exists('DoubleEagles', $data)) {
            $object->setDoubleEagles($data['DoubleEagles']);
        }
        if (\array_key_exists('Eagles', $data)) {
            $object->setEagles($data['Eagles']);
        }
        if (\array_key_exists('Birdies', $data)) {
            $object->setBirdies($data['Birdies']);
        }
        if (\array_key_exists('Pars', $data)) {
            $object->setPars($data['Pars']);
        }
        if (\array_key_exists('Bogeys', $data)) {
            $object->setBogeys($data['Bogeys']);
        }
        if (\array_key_exists('DoubleBogeys', $data)) {
            $object->setDoubleBogeys($data['DoubleBogeys']);
        }
        if (\array_key_exists('WorseThanDoubleBogey', $data)) {
            $object->setWorseThanDoubleBogey($data['WorseThanDoubleBogey']);
        }
        if (\array_key_exists('HoleInOnes', $data)) {
            $object->setHoleInOnes($data['HoleInOnes']);
        }
        if (\array_key_exists('TripleBogeys', $data)) {
            $object->setTripleBogeys($data['TripleBogeys']);
        }
        if (\array_key_exists('WorseThanTripleBogey', $data)) {
            $object->setWorseThanTripleBogey($data['WorseThanTripleBogey']);
        }
        if (\array_key_exists('Holes', $data)) {
            $values = array();
            foreach ($data['Holes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\Golf\\Model\\PlayerHole', 'json', $context);
            }
            $object->setHoles($values);
        }
        if (\array_key_exists('LongestBirdieOrBetterStreak', $data)) {
            $object->setLongestBirdieOrBetterStreak($data['LongestBirdieOrBetterStreak']);
        }
        if (\array_key_exists('ConsecutiveBirdieOrBetterCount', $data)) {
            $object->setConsecutiveBirdieOrBetterCount($data['ConsecutiveBirdieOrBetterCount']);
        }
        if (\array_key_exists('BounceBackCount', $data)) {
            $object->setBounceBackCount($data['BounceBackCount']);
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
        if (\array_key_exists('TeeTime', $data)) {
            $object->setTeeTime($data['TeeTime']);
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