<?php

namespace controllers;

use core\Controller;
use models\ModelMain;

class ControllerMain extends Controller {

    public function __construct() {
        parent::__construct();
        $this->model = new ModelMain();
    }

    public function action_index() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->view->notes = $this->model->getNotes();
            $this->view->popular_notes = $this->model->getPopularComments();
            $this->view->render('main_index_view');
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $post_data = filter_input_array(INPUT_POST);
            $name = strip_tags($post_data['name']);
            $content = strip_tags($post_data['content']);
            $created_at = date("Y-m-d H:i:s");
            if ($this->model->save($name, $content, $created_at)) {
                $uri = $_SERVER['HTTP_REFERER'];
                header("Location: $uri");
            }
        }
    }

}

// 2019-05-09 00:00:00
// INSERT INTO `notes` (`id`, `author_name`, `content`, `created_at`) VALUES (NULL, 'Дима', 'Сегодня была успешная рыбалка', '2019-05-09 00:00:00');