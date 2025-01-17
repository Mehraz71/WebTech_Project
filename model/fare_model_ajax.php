<?php
require_once('connection.php');

function dhakabusfare(){  
        $conn = getConnection();
        $sql = "SELECT * FROM dhakacityfare";
        $result = mysqli_query($conn, $sql);
        return $result;
    
}

function ctgbusfare(){  
    $conn = getConnection();
    $sql = "SELECT * FROM ctgbusfare";
    $result = mysqli_query($conn, $sql);
    return $result;

}

function intercity(){  
    $conn = getConnection();
    $sql = "SELECT * FROM intercityfare";
    $result = mysqli_query($conn, $sql);
    return $result;

}




?>