<?php

namespace Sportsdata\API\LOL\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\LOL\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GameNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\LOL\\Model\\Game';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\LOL\\Model\\Game';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\LOL\Model\Game();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('GameId', $data)) {
            $object->setGameId($data['GameId']);
        }
        if (\array_key_exists('RoundId', $data)) {
            $object->setRoundId($data['RoundId']);
        }
        if (\array_key_exists('Season', $data)) {
            $object->setSeason($data['Season']);
        }
        if (\array_key_exists('SeasonType', $data)) {
            $object->setSeasonType($data['SeasonType']);
        }
        if (\array_key_exists('Group', $data) && $data['Group'] !== null) {
            $object->setGroup($data['Group']);
        }
        elseif (\array_key_exists('Group', $data) && $data['Group'] === null) {
            $object->setGroup(null);
        }
        if (\array_key_exists('TeamAId', $data) && $data['TeamAId'] !== null) {
            $object->setTeamAId($data['TeamAId']);
        }
        elseif (\array_key_exists('TeamAId', $data) && $data['TeamAId'] === null) {
            $object->setTeamAId(null);
        }
        if (\array_key_exists('TeamBId', $data) && $data['TeamBId'] !== null) {
            $object->setTeamBId($data['TeamBId']);
        }
        elseif (\array_key_exists('TeamBId', $data) && $data['TeamBId'] === null) {
            $object->setTeamBId(null);
        }
        if (\array_key_exists('VenueId', $data) && $data['VenueId'] !== null) {
            $object->setVenueId($data['VenueId']);
        }
        elseif (\array_key_exists('VenueId', $data) && $data['VenueId'] === null) {
            $object->setVenueId(null);
        }
        if (\array_key_exists('Day', $data) && $data['Day'] !== null) {
            $object->setDay($data['Day']);
        }
        elseif (\array_key_exists('Day', $data) && $data['Day'] === null) {
            $object->setDay(null);
        }
        if (\array_key_exists('DateTime', $data) && $data['DateTime'] !== null) {
            $object->setDateTime($data['DateTime']);
        }
        elseif (\array_key_exists('DateTime', $data) && $data['DateTime'] === null) {
            $object->setDateTime(null);
        }
        if (\array_key_exists('Status', $data) && $data['Status'] !== null) {
            $object->setStatus($data['Status']);
        }
        elseif (\array_key_exists('Status', $data) && $data['Status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('Week', $data) && $data['Week'] !== null) {
            $object->setWeek($data['Week']);
        }
        elseif (\array_key_exists('Week', $data) && $data['Week'] === null) {
            $object->setWeek(null);
        }
        if (\array_key_exists('BestOf', $data) && $data['BestOf'] !== null) {
            $object->setBestOf($data['BestOf']);
        }
        elseif (\array_key_exists('BestOf', $data) && $data['BestOf'] === null) {
            $object->setBestOf(null);
        }
        if (\array_key_exists('Winner', $data) && $data['Winner'] !== null) {
            $object->setWinner($data['Winner']);
        }
        elseif (\array_key_exists('Winner', $data) && $data['Winner'] === null) {
            $object->setWinner(null);
        }
        if (\array_key_exists('VenueType', $data) && $data['VenueType'] !== null) {
            $object->setVenueType($data['VenueType']);
        }
        elseif (\array_key_exists('VenueType', $data) && $data['VenueType'] === null) {
            $object->setVenueType(null);
        }
        if (\array_key_exists('TeamAKey', $data) && $data['TeamAKey'] !== null) {
            $object->setTeamAKey($data['TeamAKey']);
        }
        elseif (\array_key_exists('TeamAKey', $data) && $data['TeamAKey'] === null) {
            $object->setTeamAKey(null);
        }
        if (\array_key_exists('TeamAName', $data) && $data['TeamAName'] !== null) {
            $object->setTeamAName($data['TeamAName']);
        }
        elseif (\array_key_exists('TeamAName', $data) && $data['TeamAName'] === null) {
            $object->setTeamAName(null);
        }
        if (\array_key_exists('TeamAScore', $data) && $data['TeamAScore'] !== null) {
            $object->setTeamAScore($data['TeamAScore']);
        }
        elseif (\array_key_exists('TeamAScore', $data) && $data['TeamAScore'] === null) {
            $object->setTeamAScore(null);
        }
        if (\array_key_exists('TeamBKey', $data) && $data['TeamBKey'] !== null) {
            $object->setTeamBKey($data['TeamBKey']);
        }
        elseif (\array_key_exists('TeamBKey', $data) && $data['TeamBKey'] === null) {
            $object->setTeamBKey(null);
        }
        if (\array_key_exists('TeamBName', $data) && $data['TeamBName'] !== null) {
            $object->setTeamBName($data['TeamBName']);
        }
        elseif (\array_key_exists('TeamBName', $data) && $data['TeamBName'] === null) {
            $object->setTeamBName(null);
        }
        if (\array_key_exists('TeamBScore', $data) && $data['TeamBScore'] !== null) {
            $object->setTeamBScore($data['TeamBScore']);
        }
        elseif (\array_key_exists('TeamBScore', $data) && $data['TeamBScore'] === null) {
            $object->setTeamBScore(null);
        }
        if (\array_key_exists('TeamAMoneyLine', $data) && $data['TeamAMoneyLine'] !== null) {
            $object->setTeamAMoneyLine($data['TeamAMoneyLine']);
        }
        elseif (\array_key_exists('TeamAMoneyLine', $data) && $data['TeamAMoneyLine'] === null) {
            $object->setTeamAMoneyLine(null);
        }
        if (\array_key_exists('TeamBMoneyLine', $data) && $data['TeamBMoneyLine'] !== null) {
            $object->setTeamBMoneyLine($data['TeamBMoneyLine']);
        }
        elseif (\array_key_exists('TeamBMoneyLine', $data) && $data['TeamBMoneyLine'] === null) {
            $object->setTeamBMoneyLine(null);
        }
        if (\array_key_exists('DrawMoneyLine', $data) && $data['DrawMoneyLine'] !== null) {
            $object->setDrawMoneyLine($data['DrawMoneyLine']);
        }
        elseif (\array_key_exists('DrawMoneyLine', $data) && $data['DrawMoneyLine'] === null) {
            $object->setDrawMoneyLine(null);
        }
        if (\array_key_exists('PointSpread', $data) && $data['PointSpread'] !== null) {
            $object->setPointSpread($data['PointSpread']);
        }
        elseif (\array_key_exists('PointSpread', $data) && $data['PointSpread'] === null) {
            $object->setPointSpread(null);
        }
        if (\array_key_exists('TeamAPointSpreadPayout', $data) && $data['TeamAPointSpreadPayout'] !== null) {
            $object->setTeamAPointSpreadPayout($data['TeamAPointSpreadPayout']);
        }
        elseif (\array_key_exists('TeamAPointSpreadPayout', $data) && $data['TeamAPointSpreadPayout'] === null) {
            $object->setTeamAPointSpreadPayout(null);
        }
        if (\array_key_exists('TeamBPointSpreadPayout', $data) && $data['TeamBPointSpreadPayout'] !== null) {
            $object->setTeamBPointSpreadPayout($data['TeamBPointSpreadPayout']);
        }
        elseif (\array_key_exists('TeamBPointSpreadPayout', $data) && $data['TeamBPointSpreadPayout'] === null) {
            $object->setTeamBPointSpreadPayout(null);
        }
        if (\array_key_exists('Updated', $data) && $data['Updated'] !== null) {
            $object->setUpdated($data['Updated']);
        }
        elseif (\array_key_exists('Updated', $data) && $data['Updated'] === null) {
            $object->setUpdated(null);
        }
        if (\array_key_exists('UpdatedUtc', $data) && $data['UpdatedUtc'] !== null) {
            $object->setUpdatedUtc($data['UpdatedUtc']);
        }
        elseif (\array_key_exists('UpdatedUtc', $data) && $data['UpdatedUtc'] === null) {
            $object->setUpdatedUtc(null);
        }
        if (\array_key_exists('IsClosed', $data) && $data['IsClosed'] !== null) {
            $object->setIsClosed($data['IsClosed']);
        }
        elseif (\array_key_exists('IsClosed', $data) && $data['IsClosed'] === null) {
            $object->setIsClosed(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getGameId()) {
            $data['GameId'] = $object->getGameId();
        }
        if (null !== $object->getRoundId()) {
            $data['RoundId'] = $object->getRoundId();
        }
        if (null !== $object->getSeason()) {
            $data['Season'] = $object->getSeason();
        }
        if (null !== $object->getSeasonType()) {
            $data['SeasonType'] = $object->getSeasonType();
        }
        if (null !== $object->getGroup()) {
            $data['Group'] = $object->getGroup();
        }
        if (null !== $object->getTeamAId()) {
            $data['TeamAId'] = $object->getTeamAId();
        }
        if (null !== $object->getTeamBId()) {
            $data['TeamBId'] = $object->getTeamBId();
        }
        if (null !== $object->getVenueId()) {
            $data['VenueId'] = $object->getVenueId();
        }
        if (null !== $object->getDay()) {
            $data['Day'] = $object->getDay();
        }
        if (null !== $object->getDateTime()) {
            $data['DateTime'] = $object->getDateTime();
        }
        if (null !== $object->getStatus()) {
            $data['Status'] = $object->getStatus();
        }
        if (null !== $object->getWeek()) {
            $data['Week'] = $object->getWeek();
        }
        if (null !== $object->getBestOf()) {
            $data['BestOf'] = $object->getBestOf();
        }
        if (null !== $object->getWinner()) {
            $data['Winner'] = $object->getWinner();
        }
        if (null !== $object->getVenueType()) {
            $data['VenueType'] = $object->getVenueType();
        }
        if (null !== $object->getTeamAKey()) {
            $data['TeamAKey'] = $object->getTeamAKey();
        }
        if (null !== $object->getTeamAName()) {
            $data['TeamAName'] = $object->getTeamAName();
        }
        if (null !== $object->getTeamAScore()) {
            $data['TeamAScore'] = $object->getTeamAScore();
        }
        if (null !== $object->getTeamBKey()) {
            $data['TeamBKey'] = $object->getTeamBKey();
        }
        if (null !== $object->getTeamBName()) {
            $data['TeamBName'] = $object->getTeamBName();
        }
        if (null !== $object->getTeamBScore()) {
            $data['TeamBScore'] = $object->getTeamBScore();
        }
        if (null !== $object->getTeamAMoneyLine()) {
            $data['TeamAMoneyLine'] = $object->getTeamAMoneyLine();
        }
        if (null !== $object->getTeamBMoneyLine()) {
            $data['TeamBMoneyLine'] = $object->getTeamBMoneyLine();
        }
        if (null !== $object->getDrawMoneyLine()) {
            $data['DrawMoneyLine'] = $object->getDrawMoneyLine();
        }
        if (null !== $object->getPointSpread()) {
            $data['PointSpread'] = $object->getPointSpread();
        }
        if (null !== $object->getTeamAPointSpreadPayout()) {
            $data['TeamAPointSpreadPayout'] = $object->getTeamAPointSpreadPayout();
        }
        if (null !== $object->getTeamBPointSpreadPayout()) {
            $data['TeamBPointSpreadPayout'] = $object->getTeamBPointSpreadPayout();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getUpdatedUtc()) {
            $data['UpdatedUtc'] = $object->getUpdatedUtc();
        }
        if (null !== $object->getIsClosed()) {
            $data['IsClosed'] = $object->getIsClosed();
        }
        return $data;
    }
}