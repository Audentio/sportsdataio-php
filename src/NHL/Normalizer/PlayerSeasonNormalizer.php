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
class PlayerSeasonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NHL\\Model\\PlayerSeason';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NHL\\Model\\PlayerSeason';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NHL\Model\PlayerSeason();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('StatID', $data)) {
            $object->setStatID($data['StatID']);
        }
        if (\array_key_exists('TeamID', $data) && $data['TeamID'] !== null) {
            $object->setTeamID($data['TeamID']);
        }
        elseif (\array_key_exists('TeamID', $data) && $data['TeamID'] === null) {
            $object->setTeamID(null);
        }
        if (\array_key_exists('PlayerID', $data) && $data['PlayerID'] !== null) {
            $object->setPlayerID($data['PlayerID']);
        }
        elseif (\array_key_exists('PlayerID', $data) && $data['PlayerID'] === null) {
            $object->setPlayerID(null);
        }
        if (\array_key_exists('SeasonType', $data) && $data['SeasonType'] !== null) {
            $object->setSeasonType($data['SeasonType']);
        }
        elseif (\array_key_exists('SeasonType', $data) && $data['SeasonType'] === null) {
            $object->setSeasonType(null);
        }
        if (\array_key_exists('Season', $data) && $data['Season'] !== null) {
            $object->setSeason($data['Season']);
        }
        elseif (\array_key_exists('Season', $data) && $data['Season'] === null) {
            $object->setSeason(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Team', $data) && $data['Team'] !== null) {
            $object->setTeam($data['Team']);
        }
        elseif (\array_key_exists('Team', $data) && $data['Team'] === null) {
            $object->setTeam(null);
        }
        if (\array_key_exists('Position', $data) && $data['Position'] !== null) {
            $object->setPosition($data['Position']);
        }
        elseif (\array_key_exists('Position', $data) && $data['Position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] !== null) {
            $object->setGlobalTeamID($data['GlobalTeamID']);
        }
        elseif (\array_key_exists('GlobalTeamID', $data) && $data['GlobalTeamID'] === null) {
            $object->setGlobalTeamID(null);
        }
        if (\array_key_exists('Updated', $data) && $data['Updated'] !== null) {
            $object->setUpdated($data['Updated']);
        }
        elseif (\array_key_exists('Updated', $data) && $data['Updated'] === null) {
            $object->setUpdated(null);
        }
        if (\array_key_exists('Games', $data) && $data['Games'] !== null) {
            $object->setGames($data['Games']);
        }
        elseif (\array_key_exists('Games', $data) && $data['Games'] === null) {
            $object->setGames(null);
        }
        if (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] !== null) {
            $object->setFantasyPoints($data['FantasyPoints']);
        }
        elseif (\array_key_exists('FantasyPoints', $data) && $data['FantasyPoints'] === null) {
            $object->setFantasyPoints(null);
        }
        if (\array_key_exists('FantasyPointsFanDuel', $data) && $data['FantasyPointsFanDuel'] !== null) {
            $object->setFantasyPointsFanDuel($data['FantasyPointsFanDuel']);
        }
        elseif (\array_key_exists('FantasyPointsFanDuel', $data) && $data['FantasyPointsFanDuel'] === null) {
            $object->setFantasyPointsFanDuel(null);
        }
        if (\array_key_exists('FantasyPointsDraftKings', $data) && $data['FantasyPointsDraftKings'] !== null) {
            $object->setFantasyPointsDraftKings($data['FantasyPointsDraftKings']);
        }
        elseif (\array_key_exists('FantasyPointsDraftKings', $data) && $data['FantasyPointsDraftKings'] === null) {
            $object->setFantasyPointsDraftKings(null);
        }
        if (\array_key_exists('FantasyPointsYahoo', $data) && $data['FantasyPointsYahoo'] !== null) {
            $object->setFantasyPointsYahoo($data['FantasyPointsYahoo']);
        }
        elseif (\array_key_exists('FantasyPointsYahoo', $data) && $data['FantasyPointsYahoo'] === null) {
            $object->setFantasyPointsYahoo(null);
        }
        if (\array_key_exists('Minutes', $data) && $data['Minutes'] !== null) {
            $object->setMinutes($data['Minutes']);
        }
        elseif (\array_key_exists('Minutes', $data) && $data['Minutes'] === null) {
            $object->setMinutes(null);
        }
        if (\array_key_exists('Seconds', $data) && $data['Seconds'] !== null) {
            $object->setSeconds($data['Seconds']);
        }
        elseif (\array_key_exists('Seconds', $data) && $data['Seconds'] === null) {
            $object->setSeconds(null);
        }
        if (\array_key_exists('Goals', $data) && $data['Goals'] !== null) {
            $object->setGoals($data['Goals']);
        }
        elseif (\array_key_exists('Goals', $data) && $data['Goals'] === null) {
            $object->setGoals(null);
        }
        if (\array_key_exists('Assists', $data) && $data['Assists'] !== null) {
            $object->setAssists($data['Assists']);
        }
        elseif (\array_key_exists('Assists', $data) && $data['Assists'] === null) {
            $object->setAssists(null);
        }
        if (\array_key_exists('ShotsOnGoal', $data) && $data['ShotsOnGoal'] !== null) {
            $object->setShotsOnGoal($data['ShotsOnGoal']);
        }
        elseif (\array_key_exists('ShotsOnGoal', $data) && $data['ShotsOnGoal'] === null) {
            $object->setShotsOnGoal(null);
        }
        if (\array_key_exists('PowerPlayGoals', $data) && $data['PowerPlayGoals'] !== null) {
            $object->setPowerPlayGoals($data['PowerPlayGoals']);
        }
        elseif (\array_key_exists('PowerPlayGoals', $data) && $data['PowerPlayGoals'] === null) {
            $object->setPowerPlayGoals(null);
        }
        if (\array_key_exists('ShortHandedGoals', $data) && $data['ShortHandedGoals'] !== null) {
            $object->setShortHandedGoals($data['ShortHandedGoals']);
        }
        elseif (\array_key_exists('ShortHandedGoals', $data) && $data['ShortHandedGoals'] === null) {
            $object->setShortHandedGoals(null);
        }
        if (\array_key_exists('EmptyNetGoals', $data) && $data['EmptyNetGoals'] !== null) {
            $object->setEmptyNetGoals($data['EmptyNetGoals']);
        }
        elseif (\array_key_exists('EmptyNetGoals', $data) && $data['EmptyNetGoals'] === null) {
            $object->setEmptyNetGoals(null);
        }
        if (\array_key_exists('PowerPlayAssists', $data) && $data['PowerPlayAssists'] !== null) {
            $object->setPowerPlayAssists($data['PowerPlayAssists']);
        }
        elseif (\array_key_exists('PowerPlayAssists', $data) && $data['PowerPlayAssists'] === null) {
            $object->setPowerPlayAssists(null);
        }
        if (\array_key_exists('ShortHandedAssists', $data) && $data['ShortHandedAssists'] !== null) {
            $object->setShortHandedAssists($data['ShortHandedAssists']);
        }
        elseif (\array_key_exists('ShortHandedAssists', $data) && $data['ShortHandedAssists'] === null) {
            $object->setShortHandedAssists(null);
        }
        if (\array_key_exists('HatTricks', $data) && $data['HatTricks'] !== null) {
            $object->setHatTricks($data['HatTricks']);
        }
        elseif (\array_key_exists('HatTricks', $data) && $data['HatTricks'] === null) {
            $object->setHatTricks(null);
        }
        if (\array_key_exists('ShootoutGoals', $data) && $data['ShootoutGoals'] !== null) {
            $object->setShootoutGoals($data['ShootoutGoals']);
        }
        elseif (\array_key_exists('ShootoutGoals', $data) && $data['ShootoutGoals'] === null) {
            $object->setShootoutGoals(null);
        }
        if (\array_key_exists('PlusMinus', $data) && $data['PlusMinus'] !== null) {
            $object->setPlusMinus($data['PlusMinus']);
        }
        elseif (\array_key_exists('PlusMinus', $data) && $data['PlusMinus'] === null) {
            $object->setPlusMinus(null);
        }
        if (\array_key_exists('PenaltyMinutes', $data) && $data['PenaltyMinutes'] !== null) {
            $object->setPenaltyMinutes($data['PenaltyMinutes']);
        }
        elseif (\array_key_exists('PenaltyMinutes', $data) && $data['PenaltyMinutes'] === null) {
            $object->setPenaltyMinutes(null);
        }
        if (\array_key_exists('Blocks', $data) && $data['Blocks'] !== null) {
            $object->setBlocks($data['Blocks']);
        }
        elseif (\array_key_exists('Blocks', $data) && $data['Blocks'] === null) {
            $object->setBlocks(null);
        }
        if (\array_key_exists('Hits', $data) && $data['Hits'] !== null) {
            $object->setHits($data['Hits']);
        }
        elseif (\array_key_exists('Hits', $data) && $data['Hits'] === null) {
            $object->setHits(null);
        }
        if (\array_key_exists('Takeaways', $data) && $data['Takeaways'] !== null) {
            $object->setTakeaways($data['Takeaways']);
        }
        elseif (\array_key_exists('Takeaways', $data) && $data['Takeaways'] === null) {
            $object->setTakeaways(null);
        }
        if (\array_key_exists('Giveaways', $data) && $data['Giveaways'] !== null) {
            $object->setGiveaways($data['Giveaways']);
        }
        elseif (\array_key_exists('Giveaways', $data) && $data['Giveaways'] === null) {
            $object->setGiveaways(null);
        }
        if (\array_key_exists('FaceoffsWon', $data) && $data['FaceoffsWon'] !== null) {
            $object->setFaceoffsWon($data['FaceoffsWon']);
        }
        elseif (\array_key_exists('FaceoffsWon', $data) && $data['FaceoffsWon'] === null) {
            $object->setFaceoffsWon(null);
        }
        if (\array_key_exists('FaceoffsLost', $data) && $data['FaceoffsLost'] !== null) {
            $object->setFaceoffsLost($data['FaceoffsLost']);
        }
        elseif (\array_key_exists('FaceoffsLost', $data) && $data['FaceoffsLost'] === null) {
            $object->setFaceoffsLost(null);
        }
        if (\array_key_exists('Shifts', $data) && $data['Shifts'] !== null) {
            $object->setShifts($data['Shifts']);
        }
        elseif (\array_key_exists('Shifts', $data) && $data['Shifts'] === null) {
            $object->setShifts(null);
        }
        if (\array_key_exists('GoaltendingMinutes', $data) && $data['GoaltendingMinutes'] !== null) {
            $object->setGoaltendingMinutes($data['GoaltendingMinutes']);
        }
        elseif (\array_key_exists('GoaltendingMinutes', $data) && $data['GoaltendingMinutes'] === null) {
            $object->setGoaltendingMinutes(null);
        }
        if (\array_key_exists('GoaltendingSeconds', $data) && $data['GoaltendingSeconds'] !== null) {
            $object->setGoaltendingSeconds($data['GoaltendingSeconds']);
        }
        elseif (\array_key_exists('GoaltendingSeconds', $data) && $data['GoaltendingSeconds'] === null) {
            $object->setGoaltendingSeconds(null);
        }
        if (\array_key_exists('GoaltendingShotsAgainst', $data) && $data['GoaltendingShotsAgainst'] !== null) {
            $object->setGoaltendingShotsAgainst($data['GoaltendingShotsAgainst']);
        }
        elseif (\array_key_exists('GoaltendingShotsAgainst', $data) && $data['GoaltendingShotsAgainst'] === null) {
            $object->setGoaltendingShotsAgainst(null);
        }
        if (\array_key_exists('GoaltendingGoalsAgainst', $data) && $data['GoaltendingGoalsAgainst'] !== null) {
            $object->setGoaltendingGoalsAgainst($data['GoaltendingGoalsAgainst']);
        }
        elseif (\array_key_exists('GoaltendingGoalsAgainst', $data) && $data['GoaltendingGoalsAgainst'] === null) {
            $object->setGoaltendingGoalsAgainst(null);
        }
        if (\array_key_exists('GoaltendingSaves', $data) && $data['GoaltendingSaves'] !== null) {
            $object->setGoaltendingSaves($data['GoaltendingSaves']);
        }
        elseif (\array_key_exists('GoaltendingSaves', $data) && $data['GoaltendingSaves'] === null) {
            $object->setGoaltendingSaves(null);
        }
        if (\array_key_exists('GoaltendingWins', $data) && $data['GoaltendingWins'] !== null) {
            $object->setGoaltendingWins($data['GoaltendingWins']);
        }
        elseif (\array_key_exists('GoaltendingWins', $data) && $data['GoaltendingWins'] === null) {
            $object->setGoaltendingWins(null);
        }
        if (\array_key_exists('GoaltendingLosses', $data) && $data['GoaltendingLosses'] !== null) {
            $object->setGoaltendingLosses($data['GoaltendingLosses']);
        }
        elseif (\array_key_exists('GoaltendingLosses', $data) && $data['GoaltendingLosses'] === null) {
            $object->setGoaltendingLosses(null);
        }
        if (\array_key_exists('GoaltendingShutouts', $data) && $data['GoaltendingShutouts'] !== null) {
            $object->setGoaltendingShutouts($data['GoaltendingShutouts']);
        }
        elseif (\array_key_exists('GoaltendingShutouts', $data) && $data['GoaltendingShutouts'] === null) {
            $object->setGoaltendingShutouts(null);
        }
        if (\array_key_exists('Started', $data) && $data['Started'] !== null) {
            $object->setStarted($data['Started']);
        }
        elseif (\array_key_exists('Started', $data) && $data['Started'] === null) {
            $object->setStarted(null);
        }
        if (\array_key_exists('BenchPenaltyMinutes', $data) && $data['BenchPenaltyMinutes'] !== null) {
            $object->setBenchPenaltyMinutes($data['BenchPenaltyMinutes']);
        }
        elseif (\array_key_exists('BenchPenaltyMinutes', $data) && $data['BenchPenaltyMinutes'] === null) {
            $object->setBenchPenaltyMinutes(null);
        }
        if (\array_key_exists('GoaltendingOvertimeLosses', $data) && $data['GoaltendingOvertimeLosses'] !== null) {
            $object->setGoaltendingOvertimeLosses($data['GoaltendingOvertimeLosses']);
        }
        elseif (\array_key_exists('GoaltendingOvertimeLosses', $data) && $data['GoaltendingOvertimeLosses'] === null) {
            $object->setGoaltendingOvertimeLosses(null);
        }
        if (\array_key_exists('FantasyPointsFantasyDraft', $data) && $data['FantasyPointsFantasyDraft'] !== null) {
            $object->setFantasyPointsFantasyDraft($data['FantasyPointsFantasyDraft']);
        }
        elseif (\array_key_exists('FantasyPointsFantasyDraft', $data) && $data['FantasyPointsFantasyDraft'] === null) {
            $object->setFantasyPointsFantasyDraft(null);
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
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
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
        if (null !== $object->getPosition()) {
            $data['Position'] = $object->getPosition();
        }
        if (null !== $object->getGlobalTeamID()) {
            $data['GlobalTeamID'] = $object->getGlobalTeamID();
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