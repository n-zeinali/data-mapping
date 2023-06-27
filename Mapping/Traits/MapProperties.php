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
    private function mapProperties(EntityInterface $entity, mixed $data, String $type): EntityInterface
    {
        //Parse YAML file and get relations mapping from it
        $properties = Yaml::parseFile(__DIR__.'/../Config/api.yaml')[$type];
        foreach ($properties as $proName => $proEqual) {
            $proEqualValue = $this->getPropertyValue($proEqual, $data);
            $this->propertyAccessor->setValue($entity, $proName, $proEqualValue);
        }
        return $entity;
    }





}
