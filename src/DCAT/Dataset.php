<?php

namespace PHP_DCAT_AP\DCAT;

use PHP_DCAT_AP\Attribute\URI;

/**
 * A conceptual entity that represents the information published.
 */
#[URI('http://www.w3.org/ns/dcat#Dataset')]
class Dataset extends Resource
{
    /** @var string[] */
    protected static $REQUIRED_PROPERTIES = [
        'description', 'title'
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
