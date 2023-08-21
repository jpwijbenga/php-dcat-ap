<?php

namespace PHP_DCAT_AP\DCAT;

use PHP_DCAT_AP\Attribute\URI;

/**
 * An association class for attaching additional information to a relationship between DCAT Resources
 */
#[URI('http://www.w3.org/ns/dcat#Relationship')]
class Relationship extends Resource
{
    /** @var string[] */
    protected static $REQUIRED_PROPERTIES = [
        'hadRole', 'relation'
    ];

    /**********************************************************************************************
     * MANDATORY PROPERTIES
     *********************************************************************************************/

     /**********************************************************************************************
     * RECOMMENDED PROPERTIES
     *********************************************************************************************/

    /**********************************************************************************************
     * OPTIONAL PROPERTIES
     *********************************************************************************************/
}
