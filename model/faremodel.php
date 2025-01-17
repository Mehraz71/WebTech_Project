<?php
require_once('../model/connection.php');

class FareModel {
    private $conn;

    public function __construct() {
        $this->conn = getConnection();
    }

    public function getDhakaCityFares() {
        $sql = "SELECT * FROM dhakacityfare";
        return $this->conn->query($sql);
    }
}
?>
