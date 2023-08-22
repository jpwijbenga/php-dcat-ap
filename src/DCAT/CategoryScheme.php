<?php

namespace PHP_DCAT_AP\DCAT;

use PHP_DCAT_AP\Attribute\URI;

/**
 * A concept collection (e.g. controlled vocabulary) in which the Category is defined.
 */
#[URI('http://www.w3.org/2004/02/skos/core#ConceptScheme')]
class CategoryScheme extends Resource
{
    /** @var string[] */
    protected static $REQUIRED_PROPERTIES = [
        'title'
    ];

    /**********************************************************************************************
     * MANDATORY PROPERTIES
     *********************************************************************************************/
    /**
     * This property contains a name of the category scheme.
     * May be repeated for different versions of the name
     * @var \PHP_DCAT_AP\DCAT\Literal[]
     */
    #[URI('http://purl.org/dc/terms/title')]
    public array $title;

     /**********************************************************************************************
     * NO RECOMMENDED PROPERTIES
     *********************************************************************************************/

    /**********************************************************************************************
     * NO OPTIONAL PROPERTIES
     *********************************************************************************************/
}
