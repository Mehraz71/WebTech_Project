<?php 
if (!isset($_SESSION['username']) && (!isset($_COOKIE['logged_in']) || $_COOKIE['logged_in'] !== 'true')) {
    header("Location: ../model/login.php");
    exit;
}

if (isset($_REQUEST['start_point']) && isset($_REQUEST['end_point'])) {
    $id=$_REQUEST['id'];
    $start_point = $_REQUEST['start_point'];
    $end_point = $_REQUEST['end_point'];
    $amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : '';  // Ensure 'amount' is set
}
?>

<html>
<head>
    <title>Edit Fare</title>
    <link rel="stylesheet" href="../css/editfare.css">
    <script src="../js/update.js"></script>
</head>
<body>
    <h2 id="msg"></h2>
    <h2>Edit Fare</h2>
    <form>
        <div class="table">
            <table>
                <tr>
                <td>ID:</td>
                <td><input type="number" id="id" name="id" value="<?php echo $id; ?>" readonly/></td>
                
                    <td>Starting Point:</td>
                    <td><input type="text" id="start_point" name="start_point" value="<?php echo $start_point; ?>" /></td>
                    <td>Ending Point:</td>
                    <td><input type="text" id="end_point" name="end_point" value="<?php echo $end_point; ?>" /></td>
                    <td>Fare:</td>
                    <td><input type="number" id="fare" name="fare" value="<?php echo $amount; ?>" /></td>
</tr>
<tr>
                
                    <td><input type="button" id="btn" value="Go Back" onclick="back()" /></td>  
                    <td><input type="button" id="btn" value="add" onclick="add()" /></td>
                  
                    
                    <td><input type="button" id="remove" value="Delete" onclick="remove()" /></td>
                    
                    <td><input type="button" id="btn" value="Update" onclick="update()" /></td>
                    
                </tr>
            </table>
        </div>
    </form>
</body>
</html>
