<?php

namespace PHP_DCAT_AP\DCAT;

use PHP_DCAT_AP\Attribute\URI;

/**
 * A spatial region or named place. It can be represented using a controlled
 * vocabulary or with geographic coordinates. In the latter case, the use of
 * the Core Location Vocabulary  is recommended, following the approach
 * described in the GeoDCAT-AP specification.
 */
#[URI('http://purl.org/dc/terms/Location')]
class Location extends Resource
{
    /**********************************************************************************************
     * NO MANDATORY PROPERTIES
     *********************************************************************************************/

     /**********************************************************************************************
     * RECOMMENDED PROPERTIES
     *********************************************************************************************/
    /**
     * This property refers to he geographic bounding box of a resource.
     *
     * Please note that the order of usage is as follows: use the most specific geospatial relationship
     * by preference. E.g. if the spatial description is a bbox, use dcat :bbox, otherwise use locn:geometry.
     * @var \PHP_DCAT_AP\DCAT\Literal
     */
    #[URI('http://www.w3.org/ns/dcat#bbox')]
    public Literal $boundingBox;

    /**
     * This property refers to the geographic center (centroid) of a resource.
     * @var \PHP_DCAT_AP\DCAT\Literal
     */
    #[URI('http://www.w3.org/ns/dcat#centroid')]
    public Literal $centroid;

    /**********************************************************************************************
     * OPTIONAL PROPERTIES
     *********************************************************************************************/
     /**
     * This property associates any resource with the corresponding geometry
     *
     * Please note that the order of usage is as follows: use the most specific geospatial relationship
     * by preference. E.g. if the spatial description is a bbox, use dcat :bbox, otherwise use locn:geometry.
     * @var \PHP_DCAT_AP\DCAT\Literal
     */
    #[URI('http://www.w3.org/ns/locn##geometry')]
    public Literal $geometry;
}
