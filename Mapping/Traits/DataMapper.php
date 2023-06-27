<?php
namespace Mapping\Traits;

use Mapping\Interfaces\EntityInterface;
use ReflectionException;

trait DataMapper
{
    use MapProperties,GetPropertiesNameAndValue;

    /**
     * @param Mixed $data
     * @param EntityInterface $entity
     * @return EntityInterface
     * @throws ReflectionException
     */
    public function startMapping(mixed $data, EntityInterface $entity): EntityInterface
    {
        return $this->mapProperties($entity, $data);
    }



}
