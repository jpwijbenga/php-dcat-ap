<?php

namespace PHP_DCAT_AP\Interface;

interface DCATClassInterface
{
    public function getUri(): string;

    public function checkRequiredProperties(): void;
}
