<?php
require_once "../core/Controller.php";

class NotFoundController extends Controller {

    /*
        Call a 404 basic page
    */
    public function index() {
        $this->view("404");
    }
}
