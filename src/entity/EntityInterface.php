<?php

namespace Entity;

interface EntityInterface
{
    static public function hydrateAll(array $articlesInput): array;
}