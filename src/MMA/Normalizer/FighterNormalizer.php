<?php

namespace Sportsdata\API\MMA\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\MMA\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class FighterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\MMA\\Model\\Fighter';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\MMA\\Model\\Fighter';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\MMA\Model\Fighter();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('FighterId', $data)) {
            $object->setFighterId($data['FighterId']);
        }
        if (\array_key_exists('FirstName', $data)) {
            $object->setFirstName($data['FirstName']);
        }
        if (\array_key_exists('LastName', $data)) {
            $object->setLastName($data['LastName']);
        }
        if (\array_key_exists('Nickname', $data)) {
            $object->setNickname($data['Nickname']);
        }
        if (\array_key_exists('WeightClass', $data)) {
            $object->setWeightClass($data['WeightClass']);
        }
        if (\array_key_exists('BirthDate', $data)) {
            $object->setBirthDate($data['BirthDate']);
        }
        if (\array_key_exists('Height', $data)) {
            $object->setHeight($data['Height']);
        }
        if (\array_key_exists('Weight', $data)) {
            $object->setWeight($data['Weight']);
        }
        if (\array_key_exists('Reach', $data)) {
            $object->setReach($data['Reach']);
        }
        if (\array_key_exists('Wins', $data)) {
            $object->setWins($data['Wins']);
        }
        if (\array_key_exists('Losses', $data)) {
            $object->setLosses($data['Losses']);
        }
        if (\array_key_exists('Draws', $data)) {
            $object->setDraws($data['Draws']);
        }
        if (\array_key_exists('NoContests', $data)) {
            $object->setNoContests($data['NoContests']);
        }
        if (\array_key_exists('TechnicalKnockouts', $data)) {
            $object->setTechnicalKnockouts($data['TechnicalKnockouts']);
        }
        if (\array_key_exists('TechnicalKnockoutLosses', $data)) {
            $object->setTechnicalKnockoutLosses($data['TechnicalKnockoutLosses']);
        }
        if (\array_key_exists('Submissions', $data)) {
            $object->setSubmissions($data['Submissions']);
        }
        if (\array_key_exists('SubmissionLosses', $data)) {
            $object->setSubmissionLosses($data['SubmissionLosses']);
        }
        if (\array_key_exists('TitleWins', $data)) {
            $object->setTitleWins($data['TitleWins']);
        }
        if (\array_key_exists('TitleLosses', $data)) {
            $object->setTitleLosses($data['TitleLosses']);
        }
        if (\array_key_exists('TitleDraws', $data)) {
            $object->setTitleDraws($data['TitleDraws']);
        }
        if (\array_key_exists('CareerStats', $data)) {
            $object->setCareerStats($this->denormalizer->denormalize($data['CareerStats'], 'Sportsdata\\API\\MMA\\Model\\CareerStat', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFighterId()) {
            $data['FighterId'] = $object->getFighterId();
        }
        if (null !== $object->getFirstName()) {
            $data['FirstName'] = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data['LastName'] = $object->getLastName();
        }
        if (null !== $object->getNickname()) {
            $data['Nickname'] = $object->getNickname();
        }
        if (null !== $object->getWeightClass()) {
            $data['WeightClass'] = $object->getWeightClass();
        }
        if (null !== $object->getBirthDate()) {
            $data['BirthDate'] = $object->getBirthDate();
        }
        if (null !== $object->getHeight()) {
            $data['Height'] = $object->getHeight();
        }
        if (null !== $object->getWeight()) {
            $data['Weight'] = $object->getWeight();
        }
        if (null !== $object->getReach()) {
            $data['Reach'] = $object->getReach();
        }
        if (null !== $object->getWins()) {
            $data['Wins'] = $object->getWins();
        }
        if (null !== $object->getLosses()) {
            $data['Losses'] = $object->getLosses();
        }
        if (null !== $object->getDraws()) {
            $data['Draws'] = $object->getDraws();
        }
        if (null !== $object->getNoContests()) {
            $data['NoContests'] = $object->getNoContests();
        }
        if (null !== $object->getTechnicalKnockouts()) {
            $data['TechnicalKnockouts'] = $object->getTechnicalKnockouts();
        }
        if (null !== $object->getTechnicalKnockoutLosses()) {
            $data['TechnicalKnockoutLosses'] = $object->getTechnicalKnockoutLosses();
        }
        if (null !== $object->getSubmissions()) {
            $data['Submissions'] = $object->getSubmissions();
        }
        if (null !== $object->getSubmissionLosses()) {
            $data['SubmissionLosses'] = $object->getSubmissionLosses();
        }
        if (null !== $object->getTitleWins()) {
            $data['TitleWins'] = $object->getTitleWins();
        }
        if (null !== $object->getTitleLosses()) {
            $data['TitleLosses'] = $object->getTitleLosses();
        }
        if (null !== $object->getTitleDraws()) {
            $data['TitleDraws'] = $object->getTitleDraws();
        }
        if (null !== $object->getCareerStats()) {
            $data['CareerStats'] = $this->normalizer->normalize($object->getCareerStats(), 'json', $context);
        }
        return $data;
    }
}