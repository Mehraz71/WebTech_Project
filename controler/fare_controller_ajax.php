
<?php
require_once('../model/fare_model_ajax.php'); 

if (isset($_POST['showfare'])) {
    $data = json_decode($_POST['showfare']);
    $fare = $data->fare;
 
if($fare == "dhakabusfare"){

    $result = dhakabusfare();
    if ($result && mysqli_num_rows($result) > 0) {
        $showfare = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $showfare[] = $row;
            
        }
        echo json_encode($showfare);
    } 
}
elseif($fare == "ctgbusfare"){

        $result = ctgbusfare();
        if ($result && mysqli_num_rows($result) > 0) {
            $showfare = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $showfare[] = $row;
                
            }
            echo json_encode($showfare);

    }

}
elseif($fare == "intercityfare"){

    $result = intercity();
    if ($result && mysqli_num_rows($result) > 0) {
        $showfare = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $showfare[] = $row;
            
        }
        echo json_encode($showfare);

}

}

elseif($fare == "chittagong"){

    $result = ctgbusfare();
    if ($result && mysqli_num_rows($result) > 0) {
        $showfare = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $showfare[] = $row;
            
        }
        echo json_encode($showfare);

}

}

}






?>  