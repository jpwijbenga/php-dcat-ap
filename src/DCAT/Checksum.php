<?php

namespace PHP_DCAT_AP\DCAT;

use PHP_DCAT_AP\Attribute\URI;

/**
 * A value that allows the contents of a file to be authenticated.
 * This class allows the results of a variety of checksum and cryptographic
 * message digest algorithms to be represented.
 */
#[URI('http://spdx.org/rdf/terms#Checksum')]
class Checksum extends Resource
{
    /** @var string[] */
    protected static $REQUIRED_PROPERTIES = [
        'algorithm', 'checksumValue'
    ];

    /**********************************************************************************************
     * MANDATORY PROPERTIES
     *********************************************************************************************/
    /**
     * This property identifies the algorithm used to produce the subject Checksum.
     * Currently, SHA-1 is the only supported algorithm.
     * It is anticipated that other algorithms will be supported at a later time.
     * @var \PHP_DCAT_AP\DCAT\Resource
     */
    #[URI('http://spdx.org/rdf/terms#algorithm')]
    public Resource $algorithm;
    
    /**
     * This property provides a lower case hexadecimal encoded digest value produced using a specific algorithm.
     * @var \PHP_DCAT_AP\DCAT\Literal
     */
    #[URI('http://spdx.org/rdf/terms#checksumValue')]
    public Literal $checksumValue;

     /**********************************************************************************************
     * NO RECOMMENDED PROPERTIES
     *********************************************************************************************/

    /**********************************************************************************************
     * NO OPTIONAL PROPERTIES
     *********************************************************************************************/
}
