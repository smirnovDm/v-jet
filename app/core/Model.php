<?php

namespace core;

use PDO;

class Model {

    /**
     *
     * @var mysqli
     */
    protected $db;

    /**
     *
     * @var string
     */
    protected $table;

    public function __construct() {
        $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PWD, DB_OPTION);          
    }
}
