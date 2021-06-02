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
class PlayerTournamentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Golf\\Model\\PlayerTournament';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Golf\\Model\\PlayerTournament';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Golf\Model\PlayerTournament();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PlayerTournamentID', $data)) {
            $object->setPlayerTournamentID($data['PlayerTournamentID']);
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
        }
        if (\array_key_exists('TournamentID', $data)) {
            $object->setTournamentID($data['TournamentID']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('Rank', $data)) {
            $object->setRank($data['Rank']);
        }
        if (\array_key_exists('Country', $data)) {
            $object->setCountry($data['Country']);
        }
        if (\array_key_exists('TotalScore', $data)) {
            $object->setTotalScore($data['TotalScore']);
        }
        if (\array_key_exists('TotalStrokes', $data)) {
            $object->setTotalStrokes($data['TotalStrokes']);
        }
        if (\array_key_exists('TotalThrough', $data)) {
            $object->setTotalThrough($data['TotalThrough']);
        }
        if (\array_key_exists('Earnings', $data)) {
            $object->setEarnings($data['Earnings']);
        }
        if (\array_key_exists('FedExPoints', $data)) {
            $object->setFedExPoints($data['FedExPoints']);
        }
        if (\array_key_exists('FantasyPoints', $data)) {
            $object->setFantasyPoints($data['FantasyPoints']);
        }
        if (\array_key_exists('FantasyPointsDraftKings', $data)) {
            $object->setFantasyPointsDraftKings($data['FantasyPointsDraftKings']);
        }
        if (\array_key_exists('DraftKingsSalary', $data)) {
            $object->setDraftKingsSalary($data['DraftKingsSalary']);
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
        if (\array_key_exists('StreaksOfThreeBirdiesOrBetter', $data)) {
            $object->setStreaksOfThreeBirdiesOrBetter($data['StreaksOfThreeBirdiesOrBetter']);
        }
        if (\array_key_exists('BogeyFreeRounds', $data)) {
            $object->setBogeyFreeRounds($data['BogeyFreeRounds']);
        }
        if (\array_key_exists('RoundsUnderSeventy', $data)) {
            $object->setRoundsUnderSeventy($data['RoundsUnderSeventy']);
        }
        if (\array_key_exists('TripleBogeys', $data)) {
            $object->setTripleBogeys($data['TripleBogeys']);
        }
        if (\array_key_exists('WorseThanTripleBogey', $data)) {
            $object->setWorseThanTripleBogey($data['WorseThanTripleBogey']);
        }
        if (\array_key_exists('TeeTime', $data)) {
            $object->setTeeTime($data['TeeTime']);
        }
        if (\array_key_exists('MadeCut', $data)) {
            $object->setMadeCut($data['MadeCut']);
        }
        if (\array_key_exists('Win', $data)) {
            $object->setWin($data['Win']);
        }
        if (\array_key_exists('TournamentStatus', $data)) {
            $object->setTournamentStatus($data['TournamentStatus']);
        }
        if (\array_key_exists('IsAlternate', $data)) {
            $object->setIsAlternate($data['IsAlternate']);
        }
        if (\array_key_exists('FanDuelSalary', $data)) {
            $object->setFanDuelSalary($data['FanDuelSalary']);
        }
        if (\array_key_exists('FantasyDraftSalary', $data)) {
            $object->setFantasyDraftSalary($data['FantasyDraftSalary']);
        }
        if (\array_key_exists('MadeCutDidNotFinish', $data)) {
            $object->setMadeCutDidNotFinish($data['MadeCutDidNotFinish']);
        }
        if (\array_key_exists('Rounds', $data)) {
            $values = array();
            foreach ($data['Rounds'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\Golf\\Model\\PlayerRound', 'json', $context);
            }
            $object->setRounds($values);
        }
        if (\array_key_exists('OddsToWin', $data)) {
            $object->setOddsToWin($data['OddsToWin']);
        }
        if (\array_key_exists('OddsToWinDescription', $data)) {
            $object->setOddsToWinDescription($data['OddsToWinDescription']);
        }
        if (\array_key_exists('FantasyPointsFanDuel', $data)) {
            $object->setFantasyPointsFanDuel($data['FantasyPointsFanDuel']);
        }
        if (\array_key_exists('FantasyPointsFantasyDraft', $data)) {
            $object->setFantasyPointsFantasyDraft($data['FantasyPointsFantasyDraft']);
        }
        if (\array_key_exists('StreaksOfFourBirdiesOrBetter', $data)) {
            $object->setStreaksOfFourBirdiesOrBetter($data['StreaksOfFourBirdiesOrBetter']);
        }
        if (\array_key_exists('StreaksOfFiveBirdiesOrBetter', $data)) {
            $object->setStreaksOfFiveBirdiesOrBetter($data['StreaksOfFiveBirdiesOrBetter']);
        }
        if (\array_key_exists('ConsecutiveBirdieOrBetterCount', $data)) {
            $object->setConsecutiveBirdieOrBetterCount($data['ConsecutiveBirdieOrBetterCount']);
        }
        if (\array_key_exists('BounceBackCount', $data)) {
            $object->setBounceBackCount($data['BounceBackCount']);
        }
        if (\array_key_exists('RoundsWithFiveOrMoreBirdiesOrBetter', $data)) {
            $object->setRoundsWithFiveOrMoreBirdiesOrBetter($data['RoundsWithFiveOrMoreBirdiesOrBetter']);
        }
        if (\array_key_exists('IsWithdrawn', $data)) {
            $object->setIsWithdrawn($data['IsWithdrawn']);
        }
        if (\array_key_exists('FantasyPointsYahoo', $data)) {
            $object->setFantasyPointsYahoo($data['FantasyPointsYahoo']);
        }
        if (\array_key_exists('StreaksOfSixBirdiesOrBetter', $data)) {
            $object->setStreaksOfSixBirdiesOrBetter($data['StreaksOfSixBirdiesOrBetter']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPlayerTournamentID()) {
            $data['PlayerTournamentID'] = $object->getPlayerTournamentID();
        }
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getTournamentID()) {
            $data['TournamentID'] = $object->getTournamentID();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getRank()) {
            $data['Rank'] = $object->getRank();
        }
        if (null !== $object->getCountry()) {
            $data['Country'] = $object->getCountry();
        }
        if (null !== $object->getTotalScore()) {
            $data['TotalScore'] = $object->getTotalScore();
        }
        if (null !== $object->getTotalStrokes()) {
            $data['TotalStrokes'] = $object->getTotalStrokes();
        }
        if (null !== $object->getTotalThrough()) {
            $data['TotalThrough'] = $object->getTotalThrough();
        }
        if (null !== $object->getEarnings()) {
            $data['Earnings'] = $object->getEarnings();
        }
        if (null !== $object->getFedExPoints()) {
            $data['FedExPoints'] = $object->getFedExPoints();
        }
        if (null !== $object->getFantasyPoints()) {
            $data['FantasyPoints'] = $object->getFantasyPoints();
        }
        if (null !== $object->getFantasyPointsDraftKings()) {
            $data['FantasyPointsDraftKings'] = $object->getFantasyPointsDraftKings();
        }
        if (null !== $object->getDraftKingsSalary()) {
            $data['DraftKingsSalary'] = $object->getDraftKingsSalary();
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
        if (null !== $object->getStreaksOfThreeBirdiesOrBetter()) {
            $data['StreaksOfThreeBirdiesOrBetter'] = $object->getStreaksOfThreeBirdiesOrBetter();
        }
        if (null !== $object->getBogeyFreeRounds()) {
            $data['BogeyFreeRounds'] = $object->getBogeyFreeRounds();
        }
        if (null !== $object->getRoundsUnderSeventy()) {
            $data['RoundsUnderSeventy'] = $object->getRoundsUnderSeventy();
        }
        if (null !== $object->getTripleBogeys()) {
            $data['TripleBogeys'] = $object->getTripleBogeys();
        }
        if (null !== $object->getWorseThanTripleBogey()) {
            $data['WorseThanTripleBogey'] = $object->getWorseThanTripleBogey();
        }
        if (null !== $object->getTeeTime()) {
            $data['TeeTime'] = $object->getTeeTime();
        }
        if (null !== $object->getMadeCut()) {
            $data['MadeCut'] = $object->getMadeCut();
        }
        if (null !== $object->getWin()) {
            $data['Win'] = $object->getWin();
        }
        if (null !== $object->getTournamentStatus()) {
            $data['TournamentStatus'] = $object->getTournamentStatus();
        }
        if (null !== $object->getIsAlternate()) {
            $data['IsAlternate'] = $object->getIsAlternate();
        }
        if (null !== $object->getFanDuelSalary()) {
            $data['FanDuelSalary'] = $object->getFanDuelSalary();
        }
        if (null !== $object->getFantasyDraftSalary()) {
            $data['FantasyDraftSalary'] = $object->getFantasyDraftSalary();
        }
        if (null !== $object->getMadeCutDidNotFinish()) {
            $data['MadeCutDidNotFinish'] = $object->getMadeCutDidNotFinish();
        }
        if (null !== $object->getRounds()) {
            $values = array();
            foreach ($object->getRounds() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Rounds'] = $values;
        }
        if (null !== $object->getOddsToWin()) {
            $data['OddsToWin'] = $object->getOddsToWin();
        }
        if (null !== $object->getOddsToWinDescription()) {
            $data['OddsToWinDescription'] = $object->getOddsToWinDescription();
        }
        if (null !== $object->getFantasyPointsFanDuel()) {
            $data['FantasyPointsFanDuel'] = $object->getFantasyPointsFanDuel();
        }
        if (null !== $object->getFantasyPointsFantasyDraft()) {
            $data['FantasyPointsFantasyDraft'] = $object->getFantasyPointsFantasyDraft();
        }
        if (null !== $object->getStreaksOfFourBirdiesOrBetter()) {
            $data['StreaksOfFourBirdiesOrBetter'] = $object->getStreaksOfFourBirdiesOrBetter();
        }
        if (null !== $object->getStreaksOfFiveBirdiesOrBetter()) {
            $data['StreaksOfFiveBirdiesOrBetter'] = $object->getStreaksOfFiveBirdiesOrBetter();
        }
        if (null !== $object->getConsecutiveBirdieOrBetterCount()) {
            $data['ConsecutiveBirdieOrBetterCount'] = $object->getConsecutiveBirdieOrBetterCount();
        }
        if (null !== $object->getBounceBackCount()) {
            $data['BounceBackCount'] = $object->getBounceBackCount();
        }
        if (null !== $object->getRoundsWithFiveOrMoreBirdiesOrBetter()) {
            $data['RoundsWithFiveOrMoreBirdiesOrBetter'] = $object->getRoundsWithFiveOrMoreBirdiesOrBetter();
        }
        if (null !== $object->getIsWithdrawn()) {
            $data['IsWithdrawn'] = $object->getIsWithdrawn();
        }
        if (null !== $object->getFantasyPointsYahoo()) {
            $data['FantasyPointsYahoo'] = $object->getFantasyPointsYahoo();
        }
        if (null !== $object->getStreaksOfSixBirdiesOrBetter()) {
            $data['StreaksOfSixBirdiesOrBetter'] = $object->getStreaksOfSixBirdiesOrBetter();
        }
        return $data;
    }
}