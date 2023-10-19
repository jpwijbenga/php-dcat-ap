<?php

namespace PHP_DCAT_AP\DCAT;

use PHP_DCAT_AP\Attribute\URI;

/**
 * A conceptual entity that represents the information published.
 */
#[URI('http://www.w3.org/ns/dcat#Dataset')]
class Dataset extends Resource
{
    /** @var string[] */
    protected static $REQUIRED_PROPERTIES = [
        'description', 'title'
    ];

    /**********************************************************************************************
     * MANDATORY PROPERTIES
     *********************************************************************************************/
    /**
     * This property contains a free-text account of the Dataset.
     * This property can be repeated for parallel language versions of the description.
     * @var \PHP_DCAT_AP\DCAT\Literal[]
     */
    #[URI('http://purl.org/dc/terms/description')]
    public array $description;

    /**
     * This property contains a name given to the Dataset.
     * This property can be repeated for parallel language versions of the name.
     * @var \PHP_DCAT_AP\DCAT\Literal[]
     */
    #[URI('http://purl.org/dc/terms/title')]
    public array $title;

     /**********************************************************************************************
     * RECOMMENDED PROPERTIES
     *********************************************************************************************/
    /**
     * This property contains contact information that can be used for sending comments about the Dataset.
     * @var \PHP_DCAT_AP\DCAT\Kind[]
     */
    #[URI('http://www.w3.org/ns/dcat#contactPoint')]
    public array $contactPoint;

    /**
     * This property links the Dataset to an available Distribution.
     * @var \PHP_DCAT_AP\DCAT\Distribution[]
     */
    #[URI('http://www.w3.org/ns/dcat#distribution')]
    public array $datasetDistribution;

    /**
     * This property contains a keyword or tag describing the Dataset.
     * @var \PHP_DCAT_AP\DCAT\Literal[]
     */
    #[URI('http://www.w3.org/ns/dcat#keyword')]
    public array $keyword;

    /**
     * This property refers to an entity (organisation) responsible for making the Dataset available.
     * @var \PHP_DCAT_AP\DCAT\Agent
     */
    #[URI('http://purl.org/dc/terms/publisher')]
    public Agent $publisher;

    /**
     * This property refers to a geographic region that is covered by the Dataset.
     * @var \PHP_DCAT_AP\DCAT\Location[]
     */
    #[URI('http://purl.org/dc/terms/spatial')]
    public array $spatialCoverage;

    /**
     * This property refers to a temporal period that the Dataset covers.
     * @var \PHP_DCAT_AP\DCAT\PeriodOfTime[]
     */
    #[URI('http://purl.org/dc/terms/temporal')]
    public array $temporalCoverage;

    /**
     * This property refers to a category of the Dataset.
     * A Dataset may be associated with multiple themes.
     * @var \PHP_DCAT_AP\DCAT\Category[]
     */
    #[URI('http://www.w3.org/ns/dcat#theme')]
    public array $theme;

    /**********************************************************************************************
     * OPTIONAL PROPERTIES
     *********************************************************************************************/

    // TODO: complete list of optional properties

    /**
     * This property refers to a related Dataset that is a version, edition, or adaptation of the described Dataset.
     *
     * @var \PHP_DCAT_AP\DCAT\Dataset[]
     */
    #[URI('http://purl.org/dc/terms/hasVersion')]
    public array $hasVersion;

    /**
     * This property refers to a web page that provides access to the Dataset, its Distributions and/or additional information.
     * It is intended to point to a landing page at the original data provider, not to a page on a site of a third party,
     * such as an aggregator.
     *
     * @var \PHP_DCAT_AP\DCAT\Document[]
     */
    #[URI('http://www.w3.org/ns/dcat#landingPage')]
    public array $landingPage;
}
