<?php

namespace PHP_DCAT_AP\DCAT;

use PHP_DCAT_AP\Attribute\URI;

/**
 * A media type, e.g. the format of a computer file.
 */
#[URI('http://purl.org/dc/terms/MediaType')]
class MediaType extends Resource
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

    /**********************************************************************************************
     * STATIC CONSTRUCTORS
     *********************************************************************************************/
    /**
     * @return MediaType The IANA media type application/xml
     */
    public static function XML(): MediaType
    {
        return new self(uri: 'https://www.iana.org/assignments/media-types/application/xml');
    }

    /**
     * @return MediaType The IANA media type application/yaml
     */
    public static function YAML(): MediaType
    {
        return new self(uri: 'https://www.iana.org/assignments/media-types/application/yaml');
    }

    /**
     * @return MediaType The IANA media type for TTL syntax RDF data: text/turtle
     */
    public static function TURTLE(): MediaType
    {
        return new self(uri: 'https://www.iana.org/assignments/media-types/text/turtle');
    }

    /**
     * @return MediaType The IANA media type application/json
     */
    public static function JSON(): MediaType
    {
        return new self(uri: 'https://www.iana.org/assignments/media-types/application/json');
    }
}
