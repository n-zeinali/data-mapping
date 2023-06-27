<?php

namespace Mapping\Classes;
use ReflectionException;
use ReflectionProperty;

class GetPropertiesReflector
{

    /**
     * This Class Is Just To get Properties of class by reflection
     * @param $entity
     * @return ReflectionProperty[]
     * @throws ReflectionException
     */
    public function getClassPropertiesByReflection($entity): array
    {
        return (new \ReflectionClass($entity))->getProperties();
    }
}
