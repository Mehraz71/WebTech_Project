<?php
require_once('../model/dhkfaremodel.php');

class FareController {
    private $model;

    public function __construct() {
        $this->model = new FareModel();
    }

    public function getDhakaCityFares() {
        return $this->model->getDhakaCityFares();
    }
}
?>
