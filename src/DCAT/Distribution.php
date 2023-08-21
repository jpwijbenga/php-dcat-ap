<?php

namespace PHP_DCAT_AP\DCAT;

use PHP_DCAT_AP\Attribute\URI;

/**
 * A physical embodiment of the Dataset in a particular format.
 */
#[URI('http://www.w3.org/ns/dcat#Distribution')]
class Distribution extends Resource
{
    /** @var string[] */
    protected static $REQUIRED_PROPERTIES = [
        'accessURL'
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
