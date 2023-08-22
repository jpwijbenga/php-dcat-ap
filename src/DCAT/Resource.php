<?php

namespace PHP_DCAT_AP\DCAT;

use PHP_DCAT_AP\Attribute\URI;
use PHP_DCAT_AP\Interface\DCATClassInterface;
use ReflectionClass;

/**
 * Anything described by RDF.
 */
#[URI('rdfs:Resource:Dataset')]
class Resource implements DCATClassInterface
{
    protected static $REQUIRED_PROPERTIES = [];

    protected ?string $uri;

    /**
     * @param string|null $uri
     * @param array<string, mixed> $properties
     */
    public function __construct(?string $uri = null, array $properties = [])
    {
        $this->uri = $uri;

        foreach ($properties as $key => $value) {
            $this->{$key} = $value;
        }
    }

    public function getUri(): ?string
    {
        return $this->uri;
    }

    public function setUri(string $uri): void
    {
        $this->uri = $uri;
    }

    public function checkRequiredProperties(): void
    {
        $reflection = new ReflectionClass($this);

        foreach (static::$REQUIRED_PROPERTIES as $property) {
            if (!$reflection->hasProperty($property)) {
                throw new \Exception("Mandatory property '{$property}' not defined for class '{$reflection->getName()}'");
            }
        }

        foreach ($reflection->getProperties() as $property) {
            if (
                !in_array(
                    $property->getName(),
                    static::$REQUIRED_PROPERTIES // use 'static' instead of 'self' for late static binding and get the required properties from sub classes
                )
            ) {
                continue;
            }

            if (!$property->isInitialized($this)) {
                throw new \Exception("Missing mandatory property '{$property->getName()}' for resource '{$this->uri}'");
            }

            // For array type, check for at least 1 value
            $value = $property->getValue($this);
            if (is_array($value) && count($value) === 0) {
                throw new \Exception("Missing mandatory property '{$property->getName()}' for resource '{$this->uri}'");
            }

            // Check for null values. This shouldn't occur, because mandatory properties shouldn't be specified as nullable, but let's check anyway
            if (is_null($value)) {
                throw new \Exception("Missing mandatory property '{$property->getName()}' for resource '{$this->uri}'");
            }
        }
    }
}
