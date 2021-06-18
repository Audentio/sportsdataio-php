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
class NewsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Golf\\Model\\News';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Golf\\Model\\News';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Golf\Model\News();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('NewsID', $data)) {
            $object->setNewsID($data['NewsID']);
        }
        if (\array_key_exists('PlayerID', $data) && $data['PlayerID'] !== null) {
            $object->setPlayerID($data['PlayerID']);
        }
        elseif (\array_key_exists('PlayerID', $data) && $data['PlayerID'] === null) {
            $object->setPlayerID(null);
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
        if (\array_key_exists('Source', $data) && $data['Source'] !== null) {
            $object->setSource($data['Source']);
        }
        elseif (\array_key_exists('Source', $data) && $data['Source'] === null) {
            $object->setSource(null);
        }
        if (\array_key_exists('TermsOfUse', $data) && $data['TermsOfUse'] !== null) {
            $object->setTermsOfUse($data['TermsOfUse']);
        }
        elseif (\array_key_exists('TermsOfUse', $data) && $data['TermsOfUse'] === null) {
            $object->setTermsOfUse(null);
        }
        if (\array_key_exists('Updated', $data) && $data['Updated'] !== null) {
            $object->setUpdated($data['Updated']);
        }
        elseif (\array_key_exists('Updated', $data) && $data['Updated'] === null) {
            $object->setUpdated(null);
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
        if (null !== $object->getPlayerID()) {
            $data['PlayerID'] = $object->getPlayerID();
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
        if (null !== $object->getSource()) {
            $data['Source'] = $object->getSource();
        }
        if (null !== $object->getTermsOfUse()) {
            $data['TermsOfUse'] = $object->getTermsOfUse();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
        }
        if (null !== $object->getAuthor()) {
            $data['Author'] = $object->getAuthor();
        }
        if (null !== $object->getCategories()) {
            $data['Categories'] = $object->getCategories();
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