<?php
namespace Mapping\Traits;


use Mapping\Classes\GetPropertiesReflector;
use Mapping\Interfaces\EntityInterface;
use Symfony\Component\Yaml\Yaml;
use ReflectionException;


trait MapProperties
{
    /**
     * @param EntityInterface $entity
     * @param mixed $data
     * @return EntityInterface
     * @throws ReflectionException
     */
    private function mapProperties(EntityInterface $entity, mixed $data): EntityInterface
    {
        $properties = app(GetPropertiesReflector::class)->getClassPropertiesByReflection($entity);
        foreach ($properties as $property) {
            list($name, $value) = $this->getPropertyNameAndValue($property, $data);
            $this->propertyAccessor->setValue($entity, $name, $value);
        }
        return $entity;
    }





}
