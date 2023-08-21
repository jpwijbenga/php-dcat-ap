<?php

namespace PHP_DCAT_AP\DCAT;

use PHP_DCAT_AP\Attribute\URI;
use PHP_DCAT_AP\Interface\DCATClassInterface;

/**
 * Anything described by RDF.
 */
#[URI('rdfs:Resource:Dataset')]
class Resource implements DCATClassInterface
{
    protected string $uri;

    public function getUri(): string
    {
        return $this->uri;
    }
}
