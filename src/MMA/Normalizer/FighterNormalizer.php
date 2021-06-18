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
        if (\array_key_exists('Nickname', $data) && $data['Nickname'] !== null) {
            $object->setNickname($data['Nickname']);
        }
        elseif (\array_key_exists('Nickname', $data) && $data['Nickname'] === null) {
            $object->setNickname(null);
        }
        if (\array_key_exists('WeightClass', $data) && $data['WeightClass'] !== null) {
            $object->setWeightClass($data['WeightClass']);
        }
        elseif (\array_key_exists('WeightClass', $data) && $data['WeightClass'] === null) {
            $object->setWeightClass(null);
        }
        if (\array_key_exists('BirthDate', $data) && $data['BirthDate'] !== null) {
            $object->setBirthDate($data['BirthDate']);
        }
        elseif (\array_key_exists('BirthDate', $data) && $data['BirthDate'] === null) {
            $object->setBirthDate(null);
        }
        if (\array_key_exists('Height', $data) && $data['Height'] !== null) {
            $object->setHeight($data['Height']);
        }
        elseif (\array_key_exists('Height', $data) && $data['Height'] === null) {
            $object->setHeight(null);
        }
        if (\array_key_exists('Weight', $data) && $data['Weight'] !== null) {
            $object->setWeight($data['Weight']);
        }
        elseif (\array_key_exists('Weight', $data) && $data['Weight'] === null) {
            $object->setWeight(null);
        }
        if (\array_key_exists('Reach', $data) && $data['Reach'] !== null) {
            $object->setReach($data['Reach']);
        }
        elseif (\array_key_exists('Reach', $data) && $data['Reach'] === null) {
            $object->setReach(null);
        }
        if (\array_key_exists('Wins', $data) && $data['Wins'] !== null) {
            $object->setWins($data['Wins']);
        }
        elseif (\array_key_exists('Wins', $data) && $data['Wins'] === null) {
            $object->setWins(null);
        }
        if (\array_key_exists('Losses', $data) && $data['Losses'] !== null) {
            $object->setLosses($data['Losses']);
        }
        elseif (\array_key_exists('Losses', $data) && $data['Losses'] === null) {
            $object->setLosses(null);
        }
        if (\array_key_exists('Draws', $data) && $data['Draws'] !== null) {
            $object->setDraws($data['Draws']);
        }
        elseif (\array_key_exists('Draws', $data) && $data['Draws'] === null) {
            $object->setDraws(null);
        }
        if (\array_key_exists('NoContests', $data) && $data['NoContests'] !== null) {
            $object->setNoContests($data['NoContests']);
        }
        elseif (\array_key_exists('NoContests', $data) && $data['NoContests'] === null) {
            $object->setNoContests(null);
        }
        if (\array_key_exists('TechnicalKnockouts', $data) && $data['TechnicalKnockouts'] !== null) {
            $object->setTechnicalKnockouts($data['TechnicalKnockouts']);
        }
        elseif (\array_key_exists('TechnicalKnockouts', $data) && $data['TechnicalKnockouts'] === null) {
            $object->setTechnicalKnockouts(null);
        }
        if (\array_key_exists('TechnicalKnockoutLosses', $data) && $data['TechnicalKnockoutLosses'] !== null) {
            $object->setTechnicalKnockoutLosses($data['TechnicalKnockoutLosses']);
        }
        elseif (\array_key_exists('TechnicalKnockoutLosses', $data) && $data['TechnicalKnockoutLosses'] === null) {
            $object->setTechnicalKnockoutLosses(null);
        }
        if (\array_key_exists('Submissions', $data) && $data['Submissions'] !== null) {
            $object->setSubmissions($data['Submissions']);
        }
        elseif (\array_key_exists('Submissions', $data) && $data['Submissions'] === null) {
            $object->setSubmissions(null);
        }
        if (\array_key_exists('SubmissionLosses', $data) && $data['SubmissionLosses'] !== null) {
            $object->setSubmissionLosses($data['SubmissionLosses']);
        }
        elseif (\array_key_exists('SubmissionLosses', $data) && $data['SubmissionLosses'] === null) {
            $object->setSubmissionLosses(null);
        }
        if (\array_key_exists('TitleWins', $data) && $data['TitleWins'] !== null) {
            $object->setTitleWins($data['TitleWins']);
        }
        elseif (\array_key_exists('TitleWins', $data) && $data['TitleWins'] === null) {
            $object->setTitleWins(null);
        }
        if (\array_key_exists('TitleLosses', $data) && $data['TitleLosses'] !== null) {
            $object->setTitleLosses($data['TitleLosses']);
        }
        elseif (\array_key_exists('TitleLosses', $data) && $data['TitleLosses'] === null) {
            $object->setTitleLosses(null);
        }
        if (\array_key_exists('TitleDraws', $data) && $data['TitleDraws'] !== null) {
            $object->setTitleDraws($data['TitleDraws']);
        }
        elseif (\array_key_exists('TitleDraws', $data) && $data['TitleDraws'] === null) {
            $object->setTitleDraws(null);
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