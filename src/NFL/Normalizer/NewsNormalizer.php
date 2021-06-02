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
        if (\array_key_exists('Source', $data)) {
            $object->setSource($data['Source']);
        }
        if (\array_key_exists('Updated', $data)) {
            $object->setUpdated($data['Updated']);
        }
        if (\array_key_exists('TimeAgo', $data)) {
            $object->setTimeAgo($data['TimeAgo']);
        }
        if (\array_key_exists('Title', $data)) {
            $object->setTitle($data['Title']);
        }
        if (\array_key_exists('Content', $data)) {
            $object->setContent($data['Content']);
        }
        if (\array_key_exists('Url', $data)) {
            $object->setUrl($data['Url']);
        }
        if (\array_key_exists('TermsOfUse', $data)) {
            $object->setTermsOfUse($data['TermsOfUse']);
        }
        if (\array_key_exists('Author', $data)) {
            $object->setAuthor($data['Author']);
        }
        if (\array_key_exists('Categories', $data)) {
            $object->setCategories($data['Categories']);
        }
        if (\array_key_exists('PlayerID', $data)) {
            $object->setPlayerID($data['PlayerID']);
        }
        if (\array_key_exists('TeamID', $data)) {
            $object->setTeamID($data['TeamID']);
        }
        if (\array_key_exists('Team', $data)) {
            $object->setTeam($data['Team']);
        }
        if (\array_key_exists('PlayerID2', $data)) {
            $object->setPlayerID2($data['PlayerID2']);
        }
        if (\array_key_exists('TeamID2', $data)) {
            $object->setTeamID2($data['TeamID2']);
        }
        if (\array_key_exists('Team2', $data)) {
            $object->setTeam2($data['Team2']);
        }
        if (\array_key_exists('OriginalSource', $data)) {
            $object->setOriginalSource($data['OriginalSource']);
        }
        if (\array_key_exists('OriginalSourceUrl', $data)) {
            $object->setOriginalSourceUrl($data['OriginalSourceUrl']);
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