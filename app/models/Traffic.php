<?php

require_once "../core/Model.php";
require_once "../app/helpers/ServerFunctions.php";

class Traffic extends Model {
    
    /*
        Save the information from the client in the DB
        PARAMS:
            $data: The information tracked from client
    */
    public function saveTraffic($data) {
        // Clear Special Chars
        $url = $this->conn->real_escape_string($data["url"]);
        $referrer = $this->conn->real_escape_string($data["referrer"]);
        $user_agent = $this->conn->real_escape_string($data["userAgent"]);
        $screen_size = $this->conn->real_escape_string($data["screenSize"]);
        $language = $this->conn->real_escape_string($data["language"]);
        $ip_address = getUserIP();

        // Build Insert query
        $sql = "INSERT INTO traffic (url, referrer, user_agent, screen_size, language, ip_address)
        VALUES ('$url', '$referrer', '$user_agent', '$screen_size', '$language', '$ip_address')";

        // Just echo success or SQL error
        if ($this->conn->query($sql) === TRUE) {
            echo json_encode(["status" => "success"]);
        } else {
            echo json_encode(["status" => "error", "message" => $this->conn->error]);
        }
    }

    /*
        Get clients traffic information and return it
    */
    public function getTraffic() {
        // Clear Special Chars
        $from = $this->conn->real_escape_string($_GET["from"]);
        $to = $this->conn->real_escape_string($_GET["to"]);

        // Build Select query
        $sql = "SELECT url, visit_date, COUNT(DISTINCT ip_address) AS unique_visits
        FROM traffic
        WHERE visit_date BETWEEN '$from 00:00:00' AND '$to 23:59:59'
        GROUP BY url
        ORDER BY unique_visits DESC;";

        // Get results
        $results = $this->conn->query($sql);
        $report = $results->fetch_all(MYSQLI_ASSOC);

        return $report;
    }
}