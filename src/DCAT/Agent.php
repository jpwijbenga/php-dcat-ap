<?php

namespace PHP_DCAT_AP\DCAT;

use PHP_DCAT_AP\Attribute\URI;

/**
 * An entity that is associated with Catalogues and/or Datasets.
 * If the Agent is an organization, the use of the Organization Ontology is recommended.
 */
#[URI('foaf:Agent')]
class Agent extends Resource
{
    /** @var string[] */
    protected static $REQUIRED_PROPERTIES = [
        'name'
    ];

    /**********************************************************************************************
     * MANDATORY PROPERTIES
     *********************************************************************************************/
    /**
     * This property contains a name of the agent.
     * This property can be repeated for different versions of the name (e.g. the name in different languages)
     * @var \PHP_DCAT_AP\DCAT\Literal[]
     */
    #[URI('http://xmlns.com/foaf/0.1/name')]
    public array $name = [];

     /**********************************************************************************************
     * RECOMMENDED PROPERTIES
     *********************************************************************************************/
    /**
     * This property refers to a type of the agent that makes the Catalogue or Dataset available.
     * @var \PHP_DCAT_AP\DCAT\Category
     */
    #[URI('http://purl.org/dc/terms/type')]
    public Category $type;

    /**********************************************************************************************
     * NO OPTIONAL PROPERTIES
     *********************************************************************************************/
}
