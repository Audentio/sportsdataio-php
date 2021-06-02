<?php

namespace Sportsdata\API\NHL\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\NHL\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class OpponentSeasonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NHL\\Model\\OpponentSeason';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NHL\\Model\\OpponentSeason';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NHL\Model\OpponentSeason();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('StatID', $data)) {
            $object->setStatID($data['StatID']);
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
        }
        if (\array_key_exists('SeasonType', $data)) {
            $object->setSeasonType($data['SeasonType']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('Team', $data)) {
            $object->setTeam($data['Team']);
        }
        if (\array_key_exists('Wins', $data)) {
            $object->setWins($data['Wins']);
        }
        if (\array_key_exists('Losses', $data)) {
            $object->setLosses($data['Losses']);
        }
        if (\array_key_exists('OvertimeLosses', $data)) {
            $object->setOvertimeLosses($data['OvertimeLosses']);
        }
        if (\array_key_exists('OpponentPosition', $data)) {
            $object->setOpponentPosition($data['OpponentPosition']);
        }
        if (\array_key_exists('GlobalTeamID', $data)) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        if (\array_key_exists('OpponentStat', $data)) {
            $object->setOpponentStat($this->denormalizer->denormalize($data['OpponentStat'], 'Sportsdata\\API\\NHL\\Model\\OpponentSeason', 'json', $context));
        }
        if (\array_key_exists('Updated', $data)) {
            $object->setUpdated($data['Updated']);
        }
        if (\array_key_exists('Games', $data)) {
            $object->setGames($data['Games']);
        }
        if (\array_key_exists('FantasyPoints', $data)) {
            $object->setFantasyPoints($data['FantasyPoints']);
        }
        if (\array_key_exists('FantasyPointsFanDuel', $data)) {
            $object->setFantasyPointsFanDuel($data['FantasyPointsFanDuel']);
        }
        if (\array_key_exists('FantasyPointsDraftKings', $data)) {
            $object->setFantasyPointsDraftKings($data['FantasyPointsDraftKings']);
        }
        if (\array_key_exists('FantasyPointsYahoo', $data)) {
            $object->setFantasyPointsYahoo($data['FantasyPointsYahoo']);
        }
        if (\array_key_exists('Minutes', $data)) {
            $object->setMinutes($data['Minutes']);
        }
        if (\array_key_exists('Seconds', $data)) {
            $object->setSeconds($data['Seconds']);
        }
        if (\array_key_exists('Goals', $data)) {
            $object->setGoals($data['Goals']);
        }
        if (\array_key_exists('Assists', $data)) {
            $object->setAssists($data['Assists']);
        }
        if (\array_key_exists('ShotsOnGoal', $data)) {
            $object->setShotsOnGoal($data['ShotsOnGoal']);
        }
        if (\array_key_exists('PowerPlayGoals', $data)) {
            $object->setPowerPlayGoals($data['PowerPlayGoals']);
        }
        if (\array_key_exists('ShortHandedGoals', $data)) {
            $object->setShortHandedGoals($data['ShortHandedGoals']);
        }
        if (\array_key_exists('EmptyNetGoals', $data)) {
            $object->setEmptyNetGoals($data['EmptyNetGoals']);
        }
        if (\array_key_exists('PowerPlayAssists', $data)) {
            $object->setPowerPlayAssists($data['PowerPlayAssists']);
        }
        if (\array_key_exists('ShortHandedAssists', $data)) {
            $object->setShortHandedAssists($data['ShortHandedAssists']);
        }
        if (\array_key_exists('HatTricks', $data)) {
            $object->setHatTricks($data['HatTricks']);
        }
        if (\array_key_exists('ShootoutGoals', $data)) {
            $object->setShootoutGoals($data['ShootoutGoals']);
        }
        if (\array_key_exists('PlusMinus', $data)) {
            $object->setPlusMinus($data['PlusMinus']);
        }
        if (\array_key_exists('PenaltyMinutes', $data)) {
            $object->setPenaltyMinutes($data['PenaltyMinutes']);
        }
        if (\array_key_exists('Blocks', $data)) {
            $object->setBlocks($data['Blocks']);
        }
        if (\array_key_exists('Hits', $data)) {
            $object->setHits($data['Hits']);
        }
        if (\array_key_exists('Takeaways', $data)) {
            $object->setTakeaways($data['Takeaways']);
        }
        if (\array_key_exists('Giveaways', $data)) {
            $object->setGiveaways($data['Giveaways']);
        }
        if (\array_key_exists('FaceoffsWon', $data)) {
            $object->setFaceoffsWon($data['FaceoffsWon']);
        }
        if (\array_key_exists('FaceoffsLost', $data)) {
            $object->setFaceoffsLost($data['FaceoffsLost']);
        }
        if (\array_key_exists('Shifts', $data)) {
            $object->setShifts($data['Shifts']);
        }
        if (\array_key_exists('GoaltendingMinutes', $data)) {
            $object->setGoaltendingMinutes($data['GoaltendingMinutes']);
        }
        if (\array_key_exists('GoaltendingSeconds', $data)) {
            $object->setGoaltendingSeconds($data['GoaltendingSeconds']);
        }
        if (\array_key_exists('GoaltendingShotsAgainst', $data)) {
            $object->setGoaltendingShotsAgainst($data['GoaltendingShotsAgainst']);
        }
        if (\array_key_exists('GoaltendingGoalsAgainst', $data)) {
            $object->setGoaltendingGoalsAgainst($data['GoaltendingGoalsAgainst']);
        }
        if (\array_key_exists('GoaltendingSaves', $data)) {
            $object->setGoaltendingSaves($data['GoaltendingSaves']);
        }
        if (\array_key_exists('GoaltendingWins', $data)) {
            $object->setGoaltendingWins($data['GoaltendingWins']);
        }
        if (\array_key_exists('GoaltendingLosses', $data)) {
            $object->setGoaltendingLosses($data['GoaltendingLosses']);
        }
        if (\array_key_exists('GoaltendingShutouts', $data)) {
            $object->setGoaltendingShutouts($data['GoaltendingShutouts']);
        }
        if (\array_key_exists('Started', $data)) {
            $object->setStarted($data['Started']);
        }
        if (\array_key_exists('BenchPenaltyMinutes', $data)) {
            $object->setBenchPenaltyMinutes($data['BenchPenaltyMinutes']);
        }
        if (\array_key_exists('GoaltendingOvertimeLosses', $data)) {
            $object->setGoaltendingOvertimeLosses($data['GoaltendingOvertimeLosses']);
        }
        if (\array_key_exists('FantasyPointsFantasyDraft', $data)) {
            $object->setFantasyPointsFantasyDraft($data['FantasyPointsFantasyDraft']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getStatID()) {
            $data['StatID'] = $object->getStatID();
        }
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        if (null !== $object->getSeasonType()) {
            $data['SeasonType'] = $object->getSeasonType();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getWins()) {
            $data['Wins'] = $object->getWins();
        }
        if (null !== $object->getLosses()) {
            $data['Losses'] = $object->getLosses();
        }
        if (null !== $object->getOvertimeLosses()) {
            $data['OvertimeLosses'] = $object->getOvertimeLosses();
        }
        if (null !== $object->getOpponentPosition()) {
            $data['OpponentPosition'] = $object->getOpponentPosition();
        }
        if (null !== $object->getGlobalTeamID()) {
            $data['GlobalTeamID'] = $object->getGlobalTeamID();
        }
        if (null !== $object->getOpponentStat()) {
            $data['OpponentStat'] = $this->normalizer->normalize($object->getOpponentStat(), 'json', $context);
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getGames()) {
            $data['Games'] = $object->getGames();
        }
        if (null !== $object->getFantasyPoints()) {
            $data['FantasyPoints'] = $object->getFantasyPoints();
        }
        if (null !== $object->getFantasyPointsFanDuel()) {
            $data['FantasyPointsFanDuel'] = $object->getFantasyPointsFanDuel();
        }
        if (null !== $object->getFantasyPointsDraftKings()) {
            $data['FantasyPointsDraftKings'] = $object->getFantasyPointsDraftKings();
        }
        if (null !== $object->getFantasyPointsYahoo()) {
            $data['FantasyPointsYahoo'] = $object->getFantasyPointsYahoo();
        }
        if (null !== $object->getMinutes()) {
            $data['Minutes'] = $object->getMinutes();
        }
        if (null !== $object->getSeconds()) {
            $data['Seconds'] = $object->getSeconds();
        }
        if (null !== $object->getGoals()) {
            $data['Goals'] = $object->getGoals();
        }
        if (null !== $object->getAssists()) {
            $data['Assists'] = $object->getAssists();
        }
        if (null !== $object->getShotsOnGoal()) {
            $data['ShotsOnGoal'] = $object->getShotsOnGoal();
        }
        if (null !== $object->getPowerPlayGoals()) {
            $data['PowerPlayGoals'] = $object->getPowerPlayGoals();
        }
        if (null !== $object->getShortHandedGoals()) {
            $data['ShortHandedGoals'] = $object->getShortHandedGoals();
        }
        if (null !== $object->getEmptyNetGoals()) {
            $data['EmptyNetGoals'] = $object->getEmptyNetGoals();
        }
        if (null !== $object->getPowerPlayAssists()) {
            $data['PowerPlayAssists'] = $object->getPowerPlayAssists();
        }
        if (null !== $object->getShortHandedAssists()) {
            $data['ShortHandedAssists'] = $object->getShortHandedAssists();
        }
        if (null !== $object->getHatTricks()) {
            $data['HatTricks'] = $object->getHatTricks();
        }
        if (null !== $object->getShootoutGoals()) {
            $data['ShootoutGoals'] = $object->getShootoutGoals();
        }
        if (null !== $object->getPlusMinus()) {
            $data['PlusMinus'] = $object->getPlusMinus();
        }
        if (null !== $object->getPenaltyMinutes()) {
            $data['PenaltyMinutes'] = $object->getPenaltyMinutes();
        }
        if (null !== $object->getBlocks()) {
            $data['Blocks'] = $object->getBlocks();
        }
        if (null !== $object->getHits()) {
            $data['Hits'] = $object->getHits();
        }
        if (null !== $object->getTakeaways()) {
            $data['Takeaways'] = $object->getTakeaways();
        }
        if (null !== $object->getGiveaways()) {
            $data['Giveaways'] = $object->getGiveaways();
        }
        if (null !== $object->getFaceoffsWon()) {
            $data['FaceoffsWon'] = $object->getFaceoffsWon();
        }
        if (null !== $object->getFaceoffsLost()) {
            $data['FaceoffsLost'] = $object->getFaceoffsLost();
        }
        if (null !== $object->getShifts()) {
            $data['Shifts'] = $object->getShifts();
        }
        if (null !== $object->getGoaltendingMinutes()) {
            $data['GoaltendingMinutes'] = $object->getGoaltendingMinutes();
        }
        if (null !== $object->getGoaltendingSeconds()) {
            $data['GoaltendingSeconds'] = $object->getGoaltendingSeconds();
        }
        if (null !== $object->getGoaltendingShotsAgainst()) {
            $data['GoaltendingShotsAgainst'] = $object->getGoaltendingShotsAgainst();
        }
        if (null !== $object->getGoaltendingGoalsAgainst()) {
            $data['GoaltendingGoalsAgainst'] = $object->getGoaltendingGoalsAgainst();
        }
        if (null !== $object->getGoaltendingSaves()) {
            $data['GoaltendingSaves'] = $object->getGoaltendingSaves();
        }
        if (null !== $object->getGoaltendingWins()) {
            $data['GoaltendingWins'] = $object->getGoaltendingWins();
        }
        if (null !== $object->getGoaltendingLosses()) {
            $data['GoaltendingLosses'] = $object->getGoaltendingLosses();
        }
        if (null !== $object->getGoaltendingShutouts()) {
            $data['GoaltendingShutouts'] = $object->getGoaltendingShutouts();
        }
        if (null !== $object->getStarted()) {
            $data['Started'] = $object->getStarted();
        }
        if (null !== $object->getBenchPenaltyMinutes()) {
            $data['BenchPenaltyMinutes'] = $object->getBenchPenaltyMinutes();
        }
        if (null !== $object->getGoaltendingOvertimeLosses()) {
            $data['GoaltendingOvertimeLosses'] = $object->getGoaltendingOvertimeLosses();
        }
        if (null !== $object->getFantasyPointsFantasyDraft()) {
            $data['FantasyPointsFantasyDraft'] = $object->getFantasyPointsFantasyDraft();
        }
        return $data;
    }
}