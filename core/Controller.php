<?php
class Controller {

    /*
        Require the view and return data
    */
    public function view($view, $data = []) {
        require_once "../app/views/$view.php";
    }
}
