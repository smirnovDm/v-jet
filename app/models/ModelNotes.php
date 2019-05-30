<?php

namespace models;

use core\Model;
use PDO;

class ModelNotes extends Model {

    public function __construct() {
        parent::__construct();
        $this->table = 'notes';
    }

    public function getNoteById($id) {

        $query = "SELECT * FROM " . $this->table . " where id = $id;";
        $result = $this->db->query($query);
        if (!$result) {
            return false;
        }
        return $result->fetchAll((PDO::FETCH_ASSOC));
    }

    public function getComments($id) {
        $query = "SELECT * FROM comments where note_id = $id;";
        $result = $this->db->query($query);
        if (!$result) {
            return false;
        }
        return $result->fetchAll((PDO::FETCH_ASSOC));
    }

}
