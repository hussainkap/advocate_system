<?php

class Controller {

    protected function view($view, $data = []) {
        extract($data);
        require BASE_PATH . "/app/views/{$view}.php";
    }

    protected function redirect($url) {
        header("Location: " . BASE_URL . $url);
        exit;
    }
}