<?php

namespace PHP_DCAT_AP\DCAT;

use PHP_DCAT_AP\Attribute\URI;

/**
 * A description following the vCard specification,
 * e.g. to provide telephone number and e-mail address for a contact point.
 * Note that the class Kind is the parent class for the four explicit types
 * of vCards (Individual, Organization, Location, Group).
 */
#[URI('http://www.w3.org/2006/vcard/ns#Kind')]
class Kind extends Resource
{
    /**********************************************************************************************
     * NO MANDATORY PROPERTIES
     *********************************************************************************************/

     /**********************************************************************************************
     * NO RECOMMENDED PROPERTIES
     *********************************************************************************************/

    /**********************************************************************************************
     * NO OPTIONAL PROPERTIES
     *********************************************************************************************/
}
