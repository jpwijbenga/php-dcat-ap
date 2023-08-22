<?php

namespace PHP_DCAT_AP\DCAT;

use PHP_DCAT_AP\Attribute\URI;

/**
 * A legal document giving official permission to do something with a resource.
 */
#[URI('http://purl.org/dc/terms/LicenseDocument')]
class LicenseDocument extends Resource
{
    /**********************************************************************************************
     * NO MANDATORY PROPERTIES
     *********************************************************************************************/

     /**********************************************************************************************
     * RECOMMENDED PROPERTIES
     *********************************************************************************************/
    /**
     * This property refers to a type of licence, e.g. indicating ‘public domain’ or ‘royalties required’.
     * @var \PHP_DCAT_AP\DCAT\Category[]
     */
    #[URI('http://purl.org/dc/terms/type')]
    public array $licenceType;

    /**********************************************************************************************
     * NO OPTIONAL PROPERTIES
     *********************************************************************************************/
}
