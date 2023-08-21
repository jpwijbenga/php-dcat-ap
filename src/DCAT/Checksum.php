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
}
