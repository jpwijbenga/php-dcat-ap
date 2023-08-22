<?php

namespace PHP_DCAT_AP\DCAT;

use PHP_DCAT_AP\Attribute\URI;

/**
 * A catalogue or repository that hosts the Datasets being described.
 */
#[URI('http://www.w3.org/ns/dcat#Catalog')]
class Catalogue extends Resource
{
    /** @var string[] */
    protected static $REQUIRED_PROPERTIES = [
        'dataset', 'description', 'publisher', 'title'
    ];

    /**********************************************************************************************
     * MANDATORY PROPERTIES
     *********************************************************************************************/

    /**
     * This property links the Catalogue with a Dataset that is part of the Catalogue.
     * @var \PHP_DCAT_AP\DCAT\Dataset[]
     */
    #[URI('http://www.w3.org/ns/dcat#dataset')]
    public array $dataset;

    /**
     * This property contains a free-text account of the Catalogue.
     * This property can be repeated for parallel language versions of the description.
     * @var \PHP_DCAT_AP\DCAT\Literal[]
     */
    #[URI('http://purl.org/dc/terms/description')]
    public array $description;

    /**
     * This property refers to an entity (organisation) responsible for making the Catalogue available.
     * @var \PHP_DCAT_AP\DCAT\Agent
     */
    #[URI('http://purl.org/dc/terms/publisher')]
    public Agent $publisher;

    /**
     * This property contains a name given to the Catalogue.
     * This property can be repeated for parallel language versions of the name.
     * @var \PHP_DCAT_AP\DCAT\Literal[]
     */
    #[URI('http://purl.org/dc/terms/title')]
    public array $title;

    /**********************************************************************************************
     * RECOMMENDED PROPERTIES
     *********************************************************************************************/

    /**
     * This property refers to a web page that acts as the main page for the Catalogue.
     * @var Document
     */
    #[URI('http://xmlns.com/foaf/0.1/homepage')]
    public Document $homepage;

    /**
     * This property refers to a language used in the textual metadata describing titles,
     * descriptions, etc. of the Datasets in the Catalogue. This property can be repeated
     * if the metadata is provided in multiple languages.
     * @var \PHP_DCAT_AP\DCAT\LinguisticSystem[]
     */
    #[URI('http://purl.org/dc/terms/language')]
    public array $language;

    /**
     * This property refers to the licence under which the Catalogue can be used or reused.
     * @var \PHP_DCAT_AP\DCAT\LicenseDocument
     */
    #[URI('http://purl.org/dc/terms/license')]
    public LicenseDocument $licence;

    /**
     * This property contains the date of formal issuance (e.g., publication) of the Catalogue.
     * @var \PHP_DCAT_AP\DCAT\Literal
     */
    #[URI('http://purl.org/dc/terms/issued')]
    public Literal $releaseDate;

    /**
     * This property refers to a geographical area covered by the Catalogue.
     * @var \PHP_DCAT_AP\DCAT\Location[]
     */
    #[URI('http://purl.org/dc/terms/spatial')]
    public array $spatial;

    /**
     * This property refers to a knowledge organization system used to classify the Catalogue's Datasets.
     * @var \PHP_DCAT_AP\DCAT\CategoryScheme[]
     */
    #[URI('http://www.w3.org/ns/dcat#themeTaxonomy')]
    public array $themes;

    /**
     * This property contains the most recent date on which the Catalogue was modified.
     * @var \PHP_DCAT_AP\DCAT\Literal
     */
    #[URI('http://purl.org/dc/terms/modified')]
    public Literal $modificationDate;

    /**********************************************************************************************
     * OPTIONAL PROPERTIES
     *********************************************************************************************/

    /**
     * This property refers to a related Catalogue that is part of the described Catalogue.
     * @var \PHP_DCAT_AP\DCAT\Catalogue[]
     */
    #[URI('http://purl.org/dc/terms/hasPart')]
    public array $hasPart;

    /**
     * This property refers to a related Catalogue in which the described Catalogue is physically or logically included.
     * @var \PHP_DCAT_AP\DCAT\Catalogue
     */
    #[URI('http://purl.org/dc/terms/isPartOf')]
    public Catalogue $isPartOf;

    /**
     * This property refers to a Catalogue Record that is part of the Catalogue.
     * @var \PHP_DCAT_AP\DCAT\CatalogueRecord[]
     */
    #[URI('http://www.w3.org/ns/dcat#record')]
    public array $record;

    /**
     * This property refers to a statement that specifies rights associated with the Catalogue.
     * @var \PHP_DCAT_AP\DCAT\RightsStatement
     */
    #[URI('http://purl.org/dc/terms/rights')]
    public RightsStatement $rights;

    /**
     * This property refers to a site or end-point that is listed in the catalog.
     * @var \PHP_DCAT_AP\DCAT\DataService[]
     */
    #[URI('http://www.w3.org/ns/dcat#service')]
    public array $service;

    /**
     * This property refers to a catalog whose contents are of interest in the context of this catalog.
     * @var \PHP_DCAT_AP\DCAT\Catalogue[]
     */
    #[URI('http://www.w3.org/ns/dcat#catalog')]
    public array $catalogue;

    /**
     * This property refers to the  entity primarily responsible for producing the catalogue.
     * @var \PHP_DCAT_AP\DCAT\Agent
     */
    #[URI('http://purl.org/dc/terms/creator')]
    public Agent $creator;
}
