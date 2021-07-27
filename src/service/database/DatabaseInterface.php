<?php

namespace Service\Database;

use PDO;

interface DatabaseInterface
{
    public static function getInstance(): self;
    public function getConnection(): PDO;
}