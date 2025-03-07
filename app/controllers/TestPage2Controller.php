<?php
require_once "../core/Controller.php";

class TestPage2Controller extends Controller {

    /*
        Call a basic test page
    */
    public function index() {
        $this->view("TestPage2");
    }
}
