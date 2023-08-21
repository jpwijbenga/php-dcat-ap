<?php

namespace PHP_DCAT_AP\Serializer;

use EasyRdf\Graph;
use PHP_DCAT_AP\Attribute\URI;
use PHP_DCAT_AP\DCAT\Literal;
use PHP_DCAT_AP\Interface\DCATClassInterface;
use ReflectionAttribute;
use ReflectionClass;
use ReflectionProperty;

class RdfSerializer
{
    public Graph $graph;

    public string $defaultLang = 'en';
    public bool $checkRequiredProperties = true;

    public function __construct()
    {
        $this->graph = new Graph();
    }

    public function addSubject(DCATClassInterface $subject): DCATClassInterface
    {
        // Validate mandatory properties
        if ($this->checkRequiredProperties) {
            $subject->checkRequiredProperties();
        }

        $uri = $subject->getUri();
        
        if (is_null($uri)) {
            $uri = $this->graph->newBNode()->getUri();
            $subject->setUri($uri);
        }

        $resource = $this->graph->resource($uri);
        
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

        return $subject;
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

        $values = is_array($values) ? $values : [$values];

        
        foreach ($values as $value) {
            if ($value instanceof DCATClassInterface) {
                $this->addSubject($value);
                $resource->addResource($propertyUri, $value->getUri());
            } elseif ($value instanceof Literal) {
                $resource->addLiteral($propertyUri, $value);
            } else {
                $resource->addLiteral($propertyUri, $value, $this->defaultLang);
            }
        }
    }
}
