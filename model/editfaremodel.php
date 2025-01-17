<?php
require_once('../model/connection.php');

class FareModel {
    private $conn;

    public function __construct() {
        $this->conn = getConnection();
    }

    // Fetch fare record by ID
    public function getFareById($id) {
        $sql = "SELECT * FROM dhakacityfare WHERE id = '$id'";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc(); // Return a single record
    }

    // Update fare record by ID
    public function updateFare($id, $from, $to, $fare) {
        $sql = "UPDATE dhakacityfare 
                SET start_point = '$from', end_point = '$to', fare = '$fare' 
                WHERE id = '$id'";
        return $this->conn->query($sql);
    }
}
?>
