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
    /**
     * This property contains a URL that gives access to a Distribution of the Dataset.
     * The resource at the access URL may contain information about how to get the Dataset.
     * @var \PHP_DCAT_AP\DCAT\Resource[]
     */
    #[URI('http://www.w3.org/ns/dcat#accessURL')]
    public array $accessURL;

     /**********************************************************************************************
     * RECOMMENDED PROPERTIES
     *********************************************************************************************/
    /**
     * This property indicates how long it is planned to keep the Distribution of the Dataset available.
     * @var \PHP_DCAT_AP\DCAT\Category
     */
    #[URI('http://data.europa.eu/r5r/availability')]
    public Category $availability;

    /**
     * This property contains a free-text account of the Distribution.
     * This property can be repeated for parallel language versions of the description.
     * @var \PHP_DCAT_AP\DCAT\Literal[]
     */
    #[URI('http://purl.org/dc/terms/description')]
    public array $description;

    /**
     * This property refers to the file format of the Distribution.
     * @var \PHP_DCAT_AP\DCAT\MediaType
     */
    #[URI('http://purl.org/dc/terms/format')]
    public MediaType $format;

    /**
     * This property refers to the licence under which the Distribution is made available.
     * @var \PHP_DCAT_AP\DCAT\LicenseDocument
     */
    #[URI('http://purl.org/dc/terms/license')]
    public LicenseDocument $licence;

    /**********************************************************************************************
     * OPTIONAL PROPERTIES
     *********************************************************************************************/

    // TODO
}
