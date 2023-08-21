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

     /**********************************************************************************************
     * RECOMMENDED PROPERTIES
     *********************************************************************************************/

    /**********************************************************************************************
     * OPTIONAL PROPERTIES
     *********************************************************************************************/
}
