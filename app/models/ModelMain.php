<?php

namespace models;

use core\Model;
use PDO;

class ModelMain extends Model {

    public function __construct() {
        parent::__construct();
        $this->table = 'notes';
    }

    public function save($name, $text, $date) {
        $query = "INSERT INTO " . $this->table . "(id, author_name, content, created_at) VALUES (NULL, '" . $name . "', '" . $text . "', '" . $date . "');";
        $result = $this->db->prepare($query);
        if (!$result->execute()) {
            return false;
        }
        return true;
    }

    public function getNotes() {
        $query = "select pp.*
    FROM
     (select p.id,p.author_name,p.content,p.created_at,count(p.text) as num
      from
        (SELECT notes.id, notes.author_name, notes.content, notes.created_at, comments.text
			FROM notes LEFT OUTER JOIN comments
			ON notes.id = comments.note_id) p
      
      group by p.id,p.author_name,p.content,p.created_at) pp
     order by created_at DESC;";
        $result = $this->db->query($query);
        if (!$result) {
            return false;
        }
        return $result->fetchAll((PDO::FETCH_ASSOC));
    }

    public function getPopularComments() {
        $query = "select pp.*
    FROM
     (select p.id,p.author_name,p.content,p.created_at,count(p.text) as num
      from
        (SELECT notes.id, notes.author_name, notes.content, notes.created_at, comments.text
			FROM notes LEFT OUTER JOIN comments
			ON notes.id = comments.note_id ORDER BY notes.created_at DESC) p
      
      group by p.id,p.author_name,p.content,p.created_at) pp
     order by num DESC, created_at DESC limit 5;";
        $result = $this->db->query($query);
        if(!$result){
            return false;
        } 
        return $result->fetchAll((PDO::FETCH_ASSOC));
    }

}
