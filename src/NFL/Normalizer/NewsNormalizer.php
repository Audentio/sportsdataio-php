<?php

namespace Sportsdata\API\NFL\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\NFL\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class NewsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\NFL\\Model\\News';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\NFL\\Model\\News';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\NFL\Model\News();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('NewsID', $data)) {
            $object->setNewsID($data['NewsID']);
        }
        if (\array_key_exists('Source', $data) && $data['Source'] !== null) {
            $object->setSource($data['Source']);
        }
        elseif (\array_key_exists('Source', $data) && $data['Source'] === null) {
            $object->setSource(null);
        }
        if (\array_key_exists('Updated', $data) && $data['Updated'] !== null) {
            $object->setUpdated($data['Updated']);
        }
        elseif (\array_key_exists('Updated', $data) && $data['Updated'] === null) {
            $object->setUpdated(null);
        }
        if (\array_key_exists('TimeAgo', $data) && $data['TimeAgo'] !== null) {
            $object->setTimeAgo($data['TimeAgo']);
        }
        elseif (\array_key_exists('TimeAgo', $data) && $data['TimeAgo'] === null) {
            $object->setTimeAgo(null);
        }
        if (\array_key_exists('Title', $data) && $data['Title'] !== null) {
            $object->setTitle($data['Title']);
        }
        elseif (\array_key_exists('Title', $data) && $data['Title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('Content', $data) && $data['Content'] !== null) {
            $object->setContent($data['Content']);
        }
        elseif (\array_key_exists('Content', $data) && $data['Content'] === null) {
            $object->setContent(null);
        }
        if (\array_key_exists('Url', $data) && $data['Url'] !== null) {
            $object->setUrl($data['Url']);
        }
        elseif (\array_key_exists('Url', $data) && $data['Url'] === null) {
            $object->setUrl(null);
        }
        if (\array_key_exists('TermsOfUse', $data) && $data['TermsOfUse'] !== null) {
            $object->setTermsOfUse($data['TermsOfUse']);
        }
        elseif (\array_key_exists('TermsOfUse', $data) && $data['TermsOfUse'] === null) {
            $object->setTermsOfUse(null);
        }
        if (\array_key_exists('Author', $data) && $data['Author'] !== null) {
            $object->setAuthor($data['Author']);
        }
        elseif (\array_key_exists('Author', $data) && $data['Author'] === null) {
            $object->setAuthor(null);
        }
        if (\array_key_exists('Categories', $data) && $data['Categories'] !== null) {
            $object->setCategories($data['Categories']);
        }
        elseif (\array_key_exists('Categories', $data) && $data['Categories'] === null) {
            $object->setCategories(null);
        }
        if (\array_key_exists('PlayerID', $data) && $data['PlayerID'] !== null) {
            $object->setPlayerID($data['PlayerID']);
        }
        elseif (\array_key_exists('PlayerID', $data) && $data['PlayerID'] === null) {
            $object->setPlayerID(null);
        }
        if (\array_key_exists('TeamID', $data) && $data['TeamID'] !== null) {
            $object->setTeamID($data['TeamID']);
        }
        elseif (\array_key_exists('TeamID', $data) && $data['TeamID'] === null) {
            $object->setTeamID(null);
        }
        if (\array_key_exists('Team', $data) && $data['Team'] !== null) {
            $object->setTeam($data['Team']);
        }
        elseif (\array_key_exists('Team', $data) && $data['Team'] === null) {
            $object->setTeam(null);
        }
        if (\array_key_exists('PlayerID2', $data) && $data['PlayerID2'] !== null) {
            $object->setPlayerID2($data['PlayerID2']);
        }
        elseif (\array_key_exists('PlayerID2', $data) && $data['PlayerID2'] === null) {
            $object->setPlayerID2(null);
        }
        if (\array_key_exists('TeamID2', $data) && $data['TeamID2'] !== null) {
            $object->setTeamID2($data['TeamID2']);
        }
        elseif (\array_key_exists('TeamID2', $data) && $data['TeamID2'] === null) {
            $object->setTeamID2(null);
        }
        if (\array_key_exists('Team2', $data) && $data['Team2'] !== null) {
            $object->setTeam2($data['Team2']);
        }
        elseif (\array_key_exists('Team2', $data) && $data['Team2'] === null) {
            $object->setTeam2(null);
        }
        if (\array_key_exists('OriginalSource', $data) && $data['OriginalSource'] !== null) {
            $object->setOriginalSource($data['OriginalSource']);
        }
        elseif (\array_key_exists('OriginalSource', $data) && $data['OriginalSource'] === null) {
            $object->setOriginalSource(null);
        }
        if (\array_key_exists('OriginalSourceUrl', $data) && $data['OriginalSourceUrl'] !== null) {
            $object->setOriginalSourceUrl($data['OriginalSourceUrl']);
        }
        elseif (\array_key_exists('OriginalSourceUrl', $data) && $data['OriginalSourceUrl'] === null) {
            $object->setOriginalSourceUrl(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getNewsID()) {
            $data['NewsID'] = $object->getNewsID();
        }
        if (null !== $object->getSource()) {
            $data['Source'] = $object->getSource();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getTimeAgo()) {
            $data['TimeAgo'] = $object->getTimeAgo();
        }
        if (null !== $object->getTitle()) {
            $data['Title'] = $object->getTitle();
        }
        if (null !== $object->getContent()) {
            $data['Content'] = $object->getContent();
        }
        if (null !== $object->getUrl()) {
            $data['Url'] = $object->getUrl();
        }
        if (null !== $object->getTermsOfUse()) {
            $data['TermsOfUse'] = $object->getTermsOfUse();
        }
        if (null !== $object->getAuthor()) {
            $data['Author'] = $object->getAuthor();
        }
        if (null !== $object->getCategories()) {
            $data['Categories'] = $object->getCategories();
        }
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
        }
        if (null !== $object->getTeamID()) {
            $data['TeamID'] = $object->getTeamID();
        }
        if (null !== $object->getTeam()) {
            $data['Team'] = $object->getTeam();
        }
        if (null !== $object->getPlayerID2()) {
            $data['PlayerID2'] = $object->getPlayerID2();
        }
        if (null !== $object->getTeamID2()) {
            $data['TeamID2'] = $object->getTeamID2();
        }
        if (null !== $object->getTeam2()) {
            $data['Team2'] = $object->getTeam2();
        }
        if (null !== $object->getOriginalSource()) {
            $data['OriginalSource'] = $object->getOriginalSource();
        }
        if (null !== $object->getOriginalSourceUrl()) {
            $data['OriginalSourceUrl'] = $object->getOriginalSourceUrl();
        }
        return $data;
    }
}