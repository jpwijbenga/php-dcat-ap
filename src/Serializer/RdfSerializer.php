<?php

namespace PHP_DCAT_AP\Serializer;

use EasyRdf\Graph;
use PHP_DCAT_AP\Attribute\URI;
use PHP_DCAT_AP\Interface\DCATClassInterface;
use ReflectionAttribute;
use ReflectionClass;
use ReflectionProperty;

class RdfSerializer
{
    public Graph $graph;

    public function __construct()
    {
        $this->graph = new Graph();
    }

    public function addSubject(DCATClassInterface $subject): void
    {
        $resource = $this->graph->resource($subject->getUri());
        
        $reflection = new ReflectionClass($subject);
        $attributes = $reflection->getAttributes(URI::class);

        foreach ($attributes as $attribute) {
            $typeUri = $attribute->newInstance()->uri;
            $resource->setType($typeUri);
        }

        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);

        foreach ($properties as $property) {
            if (!$property->isInitialized($subject)) {
                continue;
            }
            
            $attributes = $property->getAttributes(URI::class);

            foreach ($attributes as $attribute) {
                $this->addProperty($resource, $subject, $property, $attribute);
            }
        }
    }

    /**
     * Undocumented function
     *
     * @param \EasyRdf\Resource $resource
     * @param DCATClassInterface $subject
     * @param ReflectionProperty $property
     * @param ReflectionAttribute<\PHP_DCAT_AP\Attribute\URI> $attribute
     * @return void
     */
    public function addProperty(
        \EasyRdf\Resource $resource,
        DCATClassInterface $subject,
        ReflectionProperty $property,
        $attribute
    ): void {
        $propertyUri = $attribute->newInstance()->uri;

        $values = $subject->{$property->getName()};

        if (is_array($values)) {
            foreach ($values as $value) {
                // TODO: now just adding a literal, but can be any type
                $resource->addLiteral($propertyUri, $value);
            }
        } else {
            $resource->addLiteral($propertyUri, $values);
        }
    }
}
