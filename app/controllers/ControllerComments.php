<?php

namespace controllers;

use core\Controller;
use models\ModelComments;
/**
 * Description of ControllerComments
 *
 * @author Admin
 */
class ControllerComments extends Controller {

    public function __construct() {
        parent::__construct();
        $this->model = new ModelComments();
    }

    public function action_index() {
        $comment = filter_input_array(INPUT_POST);
        $name = strip_tags($comment['name']);
        $text = strip_tags($comment['text']);
        $id = (int) $comment['id'];
        if($this->model->save($name, $text, $id)){
            header("Location: notes/show");
        }

    }

}
