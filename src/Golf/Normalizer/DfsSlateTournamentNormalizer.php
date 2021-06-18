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
class DfsSlateTournamentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Sportsdata\\API\\Golf\\Model\\DfsSlateTournament';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Sportsdata\\API\\Golf\\Model\\DfsSlateTournament';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Sportsdata\API\Golf\Model\DfsSlateTournament();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('SlateTournamentID', $data)) {
            $object->setSlateTournamentID($data['SlateTournamentID']);
        }
        if (\array_key_exists('SlateID', $data)) {
            $object->setSlateID($data['SlateID']);
        }
        if (\array_key_exists('TournamentID', $data) && $data['TournamentID'] !== null) {
            $object->setTournamentID($data['TournamentID']);
        }
        elseif (\array_key_exists('TournamentID', $data) && $data['TournamentID'] === null) {
            $object->setTournamentID(null);
        }
        if (\array_key_exists('Tournament', $data)) {
            $object->setTournament($this->denormalizer->denormalize($data['Tournament'], 'Sportsdata\\API\\Golf\\Model\\Tournament', 'json', $context));
        }
        if (\array_key_exists('OperatorTournamentID', $data) && $data['OperatorTournamentID'] !== null) {
            $object->setOperatorTournamentID($data['OperatorTournamentID']);
        }
        elseif (\array_key_exists('OperatorTournamentID', $data) && $data['OperatorTournamentID'] === null) {
            $object->setOperatorTournamentID(null);
        }
        if (\array_key_exists('RemovedByOperator', $data) && $data['RemovedByOperator'] !== null) {
            $object->setRemovedByOperator($data['RemovedByOperator']);
        }
        elseif (\array_key_exists('RemovedByOperator', $data) && $data['RemovedByOperator'] === null) {
            $object->setRemovedByOperator(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSlateTournamentID()) {
            $data['SlateTournamentID'] = $object->getSlateTournamentID();
        }
        if (null !== $object->getSlateID()) {
            $data['SlateID'] = $object->getSlateID();
        }
        if (null !== $object->getTournamentID()) {
            $data['TournamentID'] = $object->getTournamentID();
        }
        if (null !== $object->getTournament()) {
            $data['Tournament'] = $this->normalizer->normalize($object->getTournament(), 'json', $context);
        }
        if (null !== $object->getOperatorTournamentID()) {
            $data['OperatorTournamentID'] = $object->getOperatorTournamentID();
        }
        if (null !== $object->getRemovedByOperator()) {
            $data['RemovedByOperator'] = $object->getRemovedByOperator();
        }
        return $data;
    }
}