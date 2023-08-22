<?php

namespace PHP_DCAT_AP\Parser;

use EasyRdf\Graph;
use EasyRdf\RdfNamespace;
use EasyRdf\Resource;
use PHP_DCAT_AP\Attribute\URI;
use PHP_DCAT_AP\DCAT\Resource as DCATResource;
use PHP_DCAT_AP\Interface\DCATClassInterface;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ReflectionClass;
use RegexIterator;

class RdfParser
{
    protected static array $DCAT_CLASS_URI_MAP = [];

    public function __construct()
    {
        // Make sure that all DCAT classes are loaded, otherwise the #URI attributes are
        // not available to match for.
        $files = new RegexIterator(
            new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator(dirname(__FILE__, 2) . '/DCAT')
            ),
            '/\.php$/',
            RegexIterator::MATCH
        );
        
        foreach ($files as $file) {
            // Load all DCAT classes
            require_once($file->getPathName());
        }

        // Find DCAT classes
        $classes = array_filter(
            get_declared_classes(),
            function (string $className) {
                return str_starts_with($className, 'PHP_DCAT_AP\DCAT\\');
            }
        );

        foreach ($classes as $className) {
            $reflection = new ReflectionClass($className);
            $attributes = $reflection->getAttributes(URI::class);

            foreach ($attributes as $attribute) {
                $typeUri = $attribute->newInstance()->uri;
                self::$DCAT_CLASS_URI_MAP[$typeUri][] = $className;
            }
        }
    }

    /**
     * @return \PHP_DCAT_AP\DCAT\Resource[]
     */
    public function fromGraph(Graph $graph): array
    {
        $objects = [];
        $resources = $graph->resources();

        foreach ($resources as $uri => $resource) {
            // Pick first match
            foreach ($resource->types() as $shortTypeUri) {
                if (is_null($shortTypeUri)) {
                    continue;
                }

                $typeUri = RdfNamespace::expand($shortTypeUri);

                if (array_key_exists($typeUri, self::$DCAT_CLASS_URI_MAP)) {
                    $objects[] = $this->processResource($resource, self::$DCAT_CLASS_URI_MAP[$typeUri][0]);
                    break;
                }
            }
        }
        
        return $objects;
    }

    protected function processResource(Resource $resource, string $className): DCATResource
    {
        return new $className($resource->getUri());
    }
}
