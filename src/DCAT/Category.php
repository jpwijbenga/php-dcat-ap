<?php

namespace PHP_DCAT_AP\DCAT;

use PHP_DCAT_AP\Attribute\URI;

/**
 * A subject of a Dataset.
 */
#[URI('http://www.w3.org/2004/02/skos/core#Concept')]
class Category extends Resource
{
    /** @var string[] */
    protected static $REQUIRED_PROPERTIES = [
        'preferredLabel'
    ];

    /**********************************************************************************************
     * MANDATORY PROPERTIES
     *********************************************************************************************/
    /**
     * This property contains a preferred label of the category.
     * This property can be repeated for parallel language versions of the label.
     * @var \PHP_DCAT_AP\DCAT\Literal[]
     */
    #[URI('http://www.w3.org/2004/02/skos/core#prefLabel')]
    public array $preferredLabel = [];

     /**********************************************************************************************
     * NO RECOMMENDED PROPERTIES
     *********************************************************************************************/

    /**********************************************************************************************
     * NO OPTIONAL PROPERTIES
     *********************************************************************************************/
}
