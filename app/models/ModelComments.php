<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace models;

use core\Model;
use PDO;

/**
 * Description of ModelComments
 *
 * @author Admin
 */
class ModelComments extends Model {

    public function __construct() {
        parent::__construct();
        $this->table = 'comments';
    }

    public function save($name, $text, int $id) {
        $query = "INSERT INTO " . $this->table . "(id, author_name, text, note_id) VALUES (NULL, '" . $name . "', '" . $text . "', '" . $id . "');";
        $result = $this->db->prepare($query);
        if (!$result->execute()) {
            return false;
        }
        return true;
    }

}
