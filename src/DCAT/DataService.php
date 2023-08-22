<?php

namespace PHP_DCAT_AP\DCAT;

use PHP_DCAT_AP\Attribute\URI;

/**
 * A collection of operations that provides access to one or more datasets or data processing functions.
 */
#[URI('http://www.w3.org/ns/dcat#DataService')]
class DataService extends Resource
{
    /** @var string[] */
    protected static $REQUIRED_PROPERTIES = [
        'endpointURL', 'title'
    ];

    /**********************************************************************************************
     * MANDATORY PROPERTIES
     *********************************************************************************************/
    /**
     * The root location or primary endpoint of the service (an IRI).
     * @var \PHP_DCAT_AP\DCAT\Resource[]
     */
    #[URI('http://www.w3.org/ns/dcat#endpointURL')]
    public array $endpointURL = [];

    /**
     * This property contains a name given to the Data Service.
     * This property can be repeated for parallel language versions of the name.
     * @var \PHP_DCAT_AP\DCAT\Literal[]
     */
    #[URI('http://purl.org/dc/terms/title')]
    public array $title = [];

     /**********************************************************************************************
     * RECOMMENDED PROPERTIES
     *********************************************************************************************/
    /**
     * This property contains a  description of the services available via the end-points, including
     * their operations, parameters etc. The property gives specific details of the actual endpoint
     * instances, while dct:conformsTo is used to indicate the general standard or specification
     * that the endpoints implement.
     * @var \PHP_DCAT_AP\DCAT\Resource[]
     */
    #[URI('http://www.w3.org/ns/dcat#endpointDescription')]
    public array $endpointDescription = [];

    /**
     * This property refers to a collection of data that this data service can distribute.
     * @var \PHP_DCAT_AP\DCAT\Dataset[]
     */
    #[URI('http://www.w3.org/ns/dcat#servesDataset')]
    public array $servesDataset = [];

    /**********************************************************************************************
     * OPTIONAL PROPERTIES
     *********************************************************************************************/
    /**
     * This property MAY include information regarding access or restrictions based on privacy,
     * security, or other policies.
     * @var \PHP_DCAT_AP\DCAT\RightsStatement
     */
    #[URI('http://purl.org/dc/terms/accessRights')]
    public RightsStatement $accessRights;

    /**
     * This property contains a name given to the Data Service.
     * This property can be repeated for parallel language versions of the name.
     * @var \PHP_DCAT_AP\DCAT\Literal[]
     */
    #[URI('http://purl.org/dc/terms/description')]
    public array $description = [];

    /**
     * This property contains  the licence under which the Data service is made available.
     * @var \PHP_DCAT_AP\DCAT\LicenseDocument
     */
    #[URI('http://purl.org/dc/terms/license')]
    public LicenseDocument $licence;
}
