<?php

namespace Sportsdata\API\MLB\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Sportsdata\API\MLB\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ArticleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\MLB\\Model\\Article';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\MLB\\Model\\Article';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\MLB\Model\Article();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ArticleID', $data)) {
            $object->setArticleID($data['ArticleID']);
        }
        if (\array_key_exists('Title', $data)) {
            $object->setTitle($data['Title']);
        }
        if (\array_key_exists('Source', $data)) {
            $object->setSource($data['Source']);
        }
        if (\array_key_exists('Updated', $data)) {
            $object->setUpdated($data['Updated']);
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
        if (\array_key_exists('Players', $data)) {
            $values = array();
            foreach ($data['Players'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Sportsdata\\API\\MLB\\Model\\PlayerInfo', 'json', $context);
            }
            $object->setPlayers($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getArticleID()) {
            $data['ArticleID'] = $object->getArticleID();
        }
        if (null !== $object->getTitle()) {
            $data['Title'] = $object->getTitle();
        }
        if (null !== $object->getSource()) {
            $data['Source'] = $object->getSource();
        }
        if (null !== $object->getUpdated()) {
            $data['Updated'] = $object->getUpdated();
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
        if (null !== $object->getPlayers()) {
            $values = array();
            foreach ($object->getPlayers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Players'] = $values;
        }
        return $data;
    }
}