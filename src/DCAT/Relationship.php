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
    /**
     * This property refers to the function of an entity or agent with respect to another entity or resource.
     * @var \PHP_DCAT_AP\DCAT\Role[]
     */
    #[URI('http://www.w3.org/ns/dcat#hadRole')]
    public array $hadRole;

    /**
     * This property refers to the resource related to the source resource.
     * @var \PHP_DCAT_AP\DCAT\Resource[]
     */
    #[URI('http://purl.org/dc/terms/relation')]
    public array $relation;

     /**********************************************************************************************
     * NO RECOMMENDED PROPERTIES
     *********************************************************************************************/

    /**********************************************************************************************
     * NO OPTIONAL PROPERTIES
     *********************************************************************************************/
}
