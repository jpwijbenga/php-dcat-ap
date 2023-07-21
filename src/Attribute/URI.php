<?php

namespace PHP_DCAT_AP\Attribute;

use Attribute;

#[Attribute]
class URI
{
    public function __construct(public string $uri)
    {
    }
}
