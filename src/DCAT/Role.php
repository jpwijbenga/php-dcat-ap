<?php

namespace PHP_DCAT_AP\DCAT;

use PHP_DCAT_AP\Attribute\URI;

/**
 * A role is the function of a resource or agent with respect to another resource,
 * in the context of resource attribution or resource relationships.
 * Note it is a subclass of skos:Concept.
 */
#[URI('http://www.w3.org/ns/dcat#Role')]
class Role extends Resource
{
}
