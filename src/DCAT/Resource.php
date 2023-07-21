<?php

namespace PHP_DCAT_AP\DCAT;

use PHP_DCAT_AP\Attribute\URI;

/**
 * Anything described by RDF.
 */
#[URI('rdfs:Resource:Dataset')]
class Resource
{
    public string $uri;
}
