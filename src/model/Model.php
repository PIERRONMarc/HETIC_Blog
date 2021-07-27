<?php

namespace Model;

use Service\Database\Database;

abstract class Model
{
    protected $db;

    abstract public function getAll();

    public function __construct()
    {
        $this->db = Database::getInstance();
    }
}