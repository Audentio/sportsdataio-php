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
class PlayerTournamentProjectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Golf\\Model\\PlayerTournamentProjection';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Golf\\Model\\PlayerTournamentProjection';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Golf\Model\PlayerTournamentProjection();
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
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Rank', $data) && $data['Rank'] !== null) {
            $object->setRank($data['Rank']);
        }
        elseif (\array_key_exists('Rank', $data) && $data['Rank'] === null) {
            $object->setRank(null);
        }
        if (\array_key_exists('Country', $data) && $data['Country'] !== null) {
            $object->setCountry($data['Country']);
        }
        elseif (\array_key_exists('Country', $data) && $data['Country'] === null) {
            $object->setCountry(null);
        }
        if (\array_key_exists('TotalScore', $data) && $data['TotalScore'] !== null) {
            $object->setTotalScore($data['TotalScore']);
        }
        elseif (\array_key_exists('TotalScore', $data) && $data['TotalScore'] === null) {
            $object->setTotalScore(null);
        }
        if (\array_key_exists('TotalStrokes', $data) && $data['TotalStrokes'] !== null) {
            $object->setTotalStrokes($data['TotalStrokes']);
        }
        elseif (\array_key_exists('TotalStrokes', $data) && $data['TotalStrokes'] === null) {
            $object->setTotalStrokes(null);
        }
        if (\array_key_exists('TotalThrough', $data) && $data['TotalThrough'] !== null) {
            $object->setTotalThrough($data['TotalThrough']);
        }
        elseif (\array_key_exists('TotalThrough', $data) && $data['TotalThrough'] === null) {
            $object->setTotalThrough(null);
        }
        if (\array_key_exists('Earnings', $data) && $data['Earnings'] !== null) {
            $object->setEarnings($data['Earnings']);
        }
        elseif (\array_key_exists('Earnings', $data) && $data['Earnings'] === null) {
            $object->setEarnings(null);
        }
        if (\array_key_exists('FedExPoints', $data) && $data['FedExPoints'] !== null) {
            $object->setFedExPoints($data['FedExPoints']);
        }
        elseif (\array_key_exists('FedExPoints', $data) && $data['FedExPoints'] === null) {
            $object->setFedExPoints(null);
        }
        if (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] !== null) {
            $object->setFantasyPoints($data['FantasyPoints']);
        }
        elseif (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] === null) {
            $object->setFantasyPoints(null);
        }
        if (\array_key_exists('FantasyPointsDraftKings', $data) && $data['FantasyPointsDraftKings'] !== null) {
            $object->setFantasyPointsDraftKings($data['FantasyPointsDraftKings']);
        }
        elseif (\array_key_exists('FantasyPointsDraftKings', $data) && $data['FantasyPointsDraftKings'] === null) {
            $object->setFantasyPointsDraftKings(null);
        }
        if (\array_key_exists('DraftKingsSalary', $data) && $data['DraftKingsSalary'] !== null) {
            $object->setDraftKingsSalary($data['DraftKingsSalary']);
        }
        elseif (\array_key_exists('DraftKingsSalary', $data) && $data['DraftKingsSalary'] === null) {
            $object->setDraftKingsSalary(null);
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
        if (\array_key_exists('StreaksOfThreeBirdiesOrBetter', $data) && $data['StreaksOfThreeBirdiesOrBetter'] !== null) {
            $object->setStreaksOfThreeBirdiesOrBetter($data['StreaksOfThreeBirdiesOrBetter']);
        }
        elseif (\array_key_exists('StreaksOfThreeBirdiesOrBetter', $data) && $data['StreaksOfThreeBirdiesOrBetter'] === null) {
            $object->setStreaksOfThreeBirdiesOrBetter(null);
        }
        if (\array_key_exists('BogeyFreeRounds', $data) && $data['BogeyFreeRounds'] !== null) {
            $object->setBogeyFreeRounds($data['BogeyFreeRounds']);
        }
        elseif (\array_key_exists('BogeyFreeRounds', $data) && $data['BogeyFreeRounds'] === null) {
            $object->setBogeyFreeRounds(null);
        }
        if (\array_key_exists('RoundsUnderSeventy', $data) && $data['RoundsUnderSeventy'] !== null) {
            $object->setRoundsUnderSeventy($data['RoundsUnderSeventy']);
        }
        elseif (\array_key_exists('RoundsUnderSeventy', $data) && $data['RoundsUnderSeventy'] === null) {
            $object->setRoundsUnderSeventy(null);
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
        if (\array_key_exists('TeeTime', $data) && $data['TeeTime'] !== null) {
            $object->setTeeTime($data['TeeTime']);
        }
        elseif (\array_key_exists('TeeTime', $data) && $data['TeeTime'] === null) {
            $object->setTeeTime(null);
        }
        if (\array_key_exists('MadeCut', $data) && $data['MadeCut'] !== null) {
            $object->setMadeCut($data['MadeCut']);
        }
        elseif (\array_key_exists('MadeCut', $data) && $data['MadeCut'] === null) {
            $object->setMadeCut(null);
        }
        if (\array_key_exists('Win', $data) && $data['Win'] !== null) {
            $object->setWin($data['Win']);
        }
        elseif (\array_key_exists('Win', $data) && $data['Win'] === null) {
            $object->setWin(null);
        }
        if (\array_key_exists('TournamentStatus', $data) && $data['TournamentStatus'] !== null) {
            $object->setTournamentStatus($data['TournamentStatus']);
        }
        elseif (\array_key_exists('TournamentStatus', $data) && $data['TournamentStatus'] === null) {
            $object->setTournamentStatus(null);
        }
        if (\array_key_exists('IsAlternate', $data) && $data['IsAlternate'] !== null) {
            $object->setIsAlternate($data['IsAlternate']);
        }
        elseif (\array_key_exists('IsAlternate', $data) && $data['IsAlternate'] === null) {
            $object->setIsAlternate(null);
        }
        if (\array_key_exists('FanDuelSalary', $data) && $data['FanDuelSalary'] !== null) {
            $object->setFanDuelSalary($data['FanDuelSalary']);
        }
        elseif (\array_key_exists('FanDuelSalary', $data) && $data['FanDuelSalary'] === null) {
            $object->setFanDuelSalary(null);
        }
        if (\array_key_exists('FantasyDraftSalary', $data) && $data['FantasyDraftSalary'] !== null) {
            $object->setFantasyDraftSalary($data['FantasyDraftSalary']);
        }
        elseif (\array_key_exists('FantasyDraftSalary', $data) && $data['FantasyDraftSalary'] === null) {
            $object->setFantasyDraftSalary(null);
        }
        if (\array_key_exists('MadeCutDidNotFinish', $data) && $data['MadeCutDidNotFinish'] !== null) {
            $object->setMadeCutDidNotFinish($data['MadeCutDidNotFinish']);
        }
        elseif (\array_key_exists('MadeCutDidNotFinish', $data) && $data['MadeCutDidNotFinish'] === null) {
            $object->setMadeCutDidNotFinish(null);
        }
        if (\array_key_exists('Rounds', $data)) {
            $values = array();
            foreach ($data['Rounds'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\Golf\\Model\\PlayerRound', 'json', $context);
            }
            $object->setRounds($values);
        }
        if (\array_key_exists('OddsToWin', $data) && $data['OddsToWin'] !== null) {
            $object->setOddsToWin($data['OddsToWin']);
        }
        elseif (\array_key_exists('OddsToWin', $data) && $data['OddsToWin'] === null) {
            $object->setOddsToWin(null);
        }
        if (\array_key_exists('OddsToWinDescription', $data) && $data['OddsToWinDescription'] !== null) {
            $object->setOddsToWinDescription($data['OddsToWinDescription']);
        }
        elseif (\array_key_exists('OddsToWinDescription', $data) && $data['OddsToWinDescription'] === null) {
            $object->setOddsToWinDescription(null);
        }
        if (\array_key_exists('FantasyPointsFanDuel', $data) && $data['FantasyPointsFanDuel'] !== null) {
            $object->setFantasyPointsFanDuel($data['FantasyPointsFanDuel']);
        }
        elseif (\array_key_exists('FantasyPointsFanDuel', $data) && $data['FantasyPointsFanDuel'] === null) {
            $object->setFantasyPointsFanDuel(null);
        }
        if (\array_key_exists('FantasyPointsFantasyDraft', $data) && $data['FantasyPointsFantasyDraft'] !== null) {
            $object->setFantasyPointsFantasyDraft($data['FantasyPointsFantasyDraft']);
        }
        elseif (\array_key_exists('FantasyPointsFantasyDraft', $data) && $data['FantasyPointsFantasyDraft'] === null) {
            $object->setFantasyPointsFantasyDraft(null);
        }
        if (\array_key_exists('StreaksOfFourBirdiesOrBetter', $data) && $data['StreaksOfFourBirdiesOrBetter'] !== null) {
            $object->setStreaksOfFourBirdiesOrBetter($data['StreaksOfFourBirdiesOrBetter']);
        }
        elseif (\array_key_exists('StreaksOfFourBirdiesOrBetter', $data) && $data['StreaksOfFourBirdiesOrBetter'] === null) {
            $object->setStreaksOfFourBirdiesOrBetter(null);
        }
        if (\array_key_exists('StreaksOfFiveBirdiesOrBetter', $data) && $data['StreaksOfFiveBirdiesOrBetter'] !== null) {
            $object->setStreaksOfFiveBirdiesOrBetter($data['StreaksOfFiveBirdiesOrBetter']);
        }
        elseif (\array_key_exists('StreaksOfFiveBirdiesOrBetter', $data) && $data['StreaksOfFiveBirdiesOrBetter'] === null) {
            $object->setStreaksOfFiveBirdiesOrBetter(null);
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
        if (\array_key_exists('RoundsWithFiveOrMoreBirdiesOrBetter', $data) && $data['RoundsWithFiveOrMoreBirdiesOrBetter'] !== null) {
            $object->setRoundsWithFiveOrMoreBirdiesOrBetter($data['RoundsWithFiveOrMoreBirdiesOrBetter']);
        }
        elseif (\array_key_exists('RoundsWithFiveOrMoreBirdiesOrBetter', $data) && $data['RoundsWithFiveOrMoreBirdiesOrBetter'] === null) {
            $object->setRoundsWithFiveOrMoreBirdiesOrBetter(null);
        }
        if (\array_key_exists('IsWithdrawn', $data)) {
            $object->setIsWithdrawn($data['IsWithdrawn']);
        }
        if (\array_key_exists('FantasyPointsYahoo', $data) && $data['FantasyPointsYahoo'] !== null) {
            $object->setFantasyPointsYahoo($data['FantasyPointsYahoo']);
        }
        elseif (\array_key_exists('FantasyPointsYahoo', $data) && $data['FantasyPointsYahoo'] === null) {
            $object->setFantasyPointsYahoo(null);
        }
        if (\array_key_exists('StreaksOfSixBirdiesOrBetter', $data) && $data['StreaksOfSixBirdiesOrBetter'] !== null) {
            $object->setStreaksOfSixBirdiesOrBetter($data['StreaksOfSixBirdiesOrBetter']);
        }
        elseif (\array_key_exists('StreaksOfSixBirdiesOrBetter', $data) && $data['StreaksOfSixBirdiesOrBetter'] === null) {
            $object->setStreaksOfSixBirdiesOrBetter(null);
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