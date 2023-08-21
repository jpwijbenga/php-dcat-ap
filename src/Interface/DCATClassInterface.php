<?php

namespace PHP_DCAT_AP\Interface;

interface DCATClassInterface
{
    public function getUri(): ?string;
    public function setUri(string $uri): void;

    public function checkRequiredProperties(): void;
}
