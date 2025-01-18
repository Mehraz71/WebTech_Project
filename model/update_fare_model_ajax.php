<?php
require_once('connection.php');
function updatefare($id,$start_point,$end_point,$amount) {

    $conn = getconnection();
    if($id<999){
    $sql = "UPDATE dhakacityfare SET fare = '$amount', start_point = '$start_point', end_point = '$end_point' WHERE id = '$id'";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
    }
    elseif($id >999 && $id <10000){
    
    $sql = "UPDATE ctgbusfare SET fare = '$amount', start_point = '$start_point', end_point = '$end_point' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
    }
    else{
        $sql = "UPDATE intercityfare SET fare = '$amount', start_point = '$start_point', end_point = '$end_point' WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;


    }
}

function removefare($id) {
    $conn = getconnection();
    if($id<999){
    $sql = "DELETE FROM dhakacityfare WHERE id ='$id' ";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
    }
    elseif($id >999 && $id <10000){
        $sql = "DELETE FROM ctgbusfare WHERE id ='$id' ";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;

    }
    
    else{
        $sql = "DELETE FROM intercityfare WHERE id ='$id' ";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;

    }
}

function add($id,$start_point,$end_point,$amount) {
    $conn = getconnection();

    if($id<999){
    $sql = "INSERT INTO dhakacityfare (start_point, end_point, fare)
VALUES ('$start_point', '$end_point', '$amount');
";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;

}
elseif($id >999 && $id <10000){

    $sql = "INSERT INTO ctgbusfare (start_point, end_point, fare)
    VALUES ('$start_point', '$end_point', '$amount');
    ";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
}

else{
    $sql = "INSERT INTO intercityfare (start_point, end_point, fare)
    VALUES ('$start_point', '$end_point', '$amount');
    ";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;



}



}


?>