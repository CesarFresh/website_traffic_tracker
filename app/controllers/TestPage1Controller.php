<?php
require_once "../core/Controller.php";

class TestPage1Controller extends Controller {

    /*
        Call a basic test page
    */
    public function index() {
        $this->view("TestPage1");
    }
}
