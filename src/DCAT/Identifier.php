<?php

namespace PHP_DCAT_AP\DCAT;

use PHP_DCAT_AP\Attribute\URI;

/**
 * An identifier in a particular context, consisting of:
 * - the string that is the identifier;
 * - an optional identifier for the identifier scheme;
 * - an optional identifier for the version of the identifier scheme;
 * - an optional identifier for the agency that manages the identifier scheme.
 */
#[URI('http://www.w3.org/ns/adms#Identifier')]
class Identifier extends Resource
{
    /** @var string[] */
    protected static $REQUIRED_PROPERTIES = [
        'notation'
    ];

    /**********************************************************************************************
     * MANDATORY PROPERTIES
     *********************************************************************************************/
    /**
     * This property contains a string that is an identifier in the context of the identifier
     * scheme referenced by its datatype.
     * @var \PHP_DCAT_AP\DCAT\Literal
     */
    #[URI('http://www.w3.org/2004/02/skos/core#notation')]
    public Literal $notation;

     /**********************************************************************************************
     * NO RECOMMENDED PROPERTIES
     *********************************************************************************************/

    /**********************************************************************************************
     * NO OPTIONAL PROPERTIES
     *********************************************************************************************/
}
