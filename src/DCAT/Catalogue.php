<?php

namespace PHP_DCAT_AP\DCAT;

use PHP_DCAT_AP\Attribute\URI;

/**
 * A catalogue or repository that hosts the Datasets being described.
 */
#[URI('dcat:Catalog')]
class Catalogue extends Resource
{
    /** @var string[] */
    protected static $REQUIRED_PROPERTIES = [
        'dataset', 'description', 'publisher', 'title'
    ];

    /**
     * This property links the Catalogue with a Dataset that is part of the Catalogue.
     * @var \PHP_DCAT_AP\DCAT\Dataset[]
     */
    #[URI('dcat:dataset')]
    public array $dataset = [];

    /**
     * This property contains a free-text account of the Catalogue.
     * This property can be repeated for parallel language versions of the description.
     * @var \PHP_DCAT_AP\DCAT\Literal[]
     */
    #[URI('dct:description')]
    public array $description = [];

    /**
     * This property refers to an entity (organisation) responsible for making the Catalogue available.
     * @var \PHP_DCAT_AP\DCAT\Agent
     */
    #[URI('dct:publisher')]
    public Agent $publisher;

    /**
     * This property contains a name given to the Catalogue.
     * This property can be repeated for parallel language versions of the name.
     * @var \PHP_DCAT_AP\DCAT\Literal[]
     */
    #[URI('dct:title')]
    public array $title = [];

    public function __construct(string $uri)
    {
        $this->uri = $uri;
    }
}
