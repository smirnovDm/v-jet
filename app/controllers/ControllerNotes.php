<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace controllers;

use core\Controller;
use models\ModelNotes;

/**
 * Description of ControllerNotes
 *
 * @author Admin
 */
class ControllerNotes extends Controller {

    public function __construct() {
        parent::__construct();
        $this->model = new ModelNotes();
    }

    public function action_index() {
        
        $post_data = filter_input_array(INPUT_POST);
        $id = (int) $post_data['id'];
        $_SESSION['id'] = $id;
        header('location: /notes/show');
    }
    
    public function action_show(){
        $id = $_SESSION['id'];
        $this->view->note = $this->model->getNoteById($id);
         $this->view->comments = $this->model->getComments($id);
        $this->view->render('note_index_view');
        
    }
           

}
