<?php

namespace Mapping\Traits;

use Doctrine\Common\Annotations\AnnotationReader;
use ReflectionException;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\PropertyAccess\PropertyAccessor;

trait GetPropertiesNameAndValue
{
    protected PropertyAccessor $propertyAccessor;
    protected AnnotationReader $annotationReader;

    public function __construct(AnnotationReader $annotationReader)
    {
        $this->propertyAccessor = PropertyAccess::createPropertyAccessor();
        $this->annotationReader = $annotationReader;
    }

    /**
     * @param $property
     * @param array $result
     * @return array
     * @throws ReflectionException
     */
    private function getPropertyNameAndValue($property, array $result): array
    {
        $propertyAnnotation = $this->getPropertyDataMapper($property);
        $json_field = $propertyAnnotation->json_field;

        if (!$json_field) {
            return [$property->getName(), null];
        }
        $value = $result[$json_field];

        if (!is_array($value)) {
            return [$property->getName(), $value];
        }

        return [$property->getName(), $this->mapProperties(new ($property->getType()->getName()), $value)];


    }

    /**
     * Finds out Data mapper of given property
     * @param $property
     * @return mixed|object|null
     */
    private function getPropertyDataMapper($property): mixed
    {
        $annotations = $this->annotationReader->getPropertyAnnotations($property);
        return $this->annotationReader->getPropertyAnnotation($property, get_class(current($annotations)));
    }
}
