<?php
require_once "../core/Controller.php";
require_once "../app/models/Traffic.php";

class TrafficTrackController extends Controller {

    /*
        Call the model that save the user data tracked
    */
    public function save() {
        // Get json data from javascript
        $data = json_decode(file_get_contents("php://input"), true);

        if ($data) {
            $traffic = new Traffic();
            $traffic->saveTraffic($data);
        }
    }
}
