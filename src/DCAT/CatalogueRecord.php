<?php

namespace PHP_DCAT_AP\DCAT;

use PHP_DCAT_AP\Attribute\URI;

/**
 * A description of a Dataset’s entry in the Catalogue.
 */
#[URI('http://www.w3.org/ns/dcat#CatalogRecord')]
class CatalogueRecord extends Resource
{
    /** @var string[] */
    protected static $REQUIRED_PROPERTIES = [
        'primaryTopic', 'modificationDate'
    ];

    /**********************************************************************************************
     * MANDATORY PROPERTIES
     *********************************************************************************************/
    /**
     * This property links the Catalogue Record to the Dataset, Data service or Catalog described in the record.
     * @var Dataset|DataService|Catalogue
     */
    #[URI('http://xmlns.com/foaf/0.1/primaryTopic')]
    public Dataset|DataService|Catalogue $primaryTopic;

    /**
     * This property contains the most recent date on which the Catalogue entry was changed or modified.
     * @var \PHP_DCAT_AP\DCAT\Literal
     */
    #[URI('http://purl.org/dc/terms/modified')]
    public Literal $modificationDate;

     /**********************************************************************************************
     * RECOMMENDED PROPERTIES
     *********************************************************************************************/
    /**
     * This property refers to an Application Profile that the Dataset’s metadata conforms to.
     * @var \PHP_DCAT_AP\DCAT\Standard
     */
    #[URI('http://purl.org/dc/terms/conformsTo')]
    public Standard $applicationProfile;

    /**
     * This property refers to the type of the latest revision of a Dataset's entry in the Catalogue.
     * @var \PHP_DCAT_AP\DCAT\Status
     */
    #[URI('http://www.w3.org/ns/adms#status')]
    public Status $changeType;

    /**
     * This property contains the date on which the description of the Dataset was included in the Catalogue.
     * @var \PHP_DCAT_AP\DCAT\Literal
     */
    #[URI('http://purl.org/dc/terms/issued')]
    public Literal $listingDate;


    /**********************************************************************************************
     * OPTIONAL PROPERTIES
     *********************************************************************************************/
    /**
     * This property contains a free-text account of the record.
     * This property can be repeated for parallel language versions of the description.
     * @var \PHP_DCAT_AP\DCAT\Literal[]
     */
    #[URI('http://purl.org/dc/terms/description')]
    public array $description = [];

    /**
     * This property refers to a language used in the textual metadata describing titles,
     * descriptions, etc. of the Dataset. This property can be repeated if the metadata
     * is provided in multiple languages.
     * @var \PHP_DCAT_AP\DCAT\LinguisticSystem[]
     */
    #[URI('http://purl.org/dc/terms/language')]
    public array $language = [];

    /**
     * This property refers to the original metadata that was used in creating metadata for the Dataset.
     * @var \PHP_DCAT_AP\DCAT\CatalogueRecord
     */
    #[URI('http://purl.org/dc/terms/source')]
    public CatalogueRecord $source;

    /**
     * This property contains a name given to the Catalogue Record.
     * This property can be repeated for parallel language versions of the name.
     * @var \PHP_DCAT_AP\DCAT\Literal[]
     */
    #[URI('http://purl.org/dc/terms/title')]
    public array $title = [];
}
