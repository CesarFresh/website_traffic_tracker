<?php
require_once "../core/Controller.php";
require_once "../app/models/Traffic.php";

class TrackReportController extends Controller {

    /*
        Get tracked data from DB if a range date was added 
        or just call the view if not filters were provided
    */
    public function index() {

        $report = [];
        
        if(isset($_GET['from']) && isset($_GET['to'])) {
            try {
                $this->validations();
                
                $traffic = new Traffic();
                $report = $traffic->getTraffic();
            } catch (\Exception $e) {
                $this->view("trackReport", ['error' => true, 'code' => 400, 'message' => $e->getMessage(), 'report' => $report]);
            } 
        }

        $this->view("trackReport", ['error' => false, 'code' => 200, 'report' => $report]);
    }

    /*
        Validate the date range filters
    */
    private function validations() {
        // Bot dates are required
        if(empty($_GET['from']) || empty($_GET['to'])) {
            throw new Exception("Please fill From and To dates");
        // To date need to be bigger that From
        } else if($_GET['to'] < $_GET['from']) {
            throw new Exception("To date need to be bigger than From");
        }
    }
}
