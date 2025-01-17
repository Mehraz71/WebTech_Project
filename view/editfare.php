<?php 
//require_once('../view/admintemplate.html');
if (!isset($_SESSION['username']) && (!isset($_COOKIE['logged_in']) || $_COOKIE['logged_in'] !== 'true')) {
    header("Location: ../model/login.php");
    exit;
  }
  $start_point = '';
  $end_point = '';
  $amount = '';

  if (isset($_POST['mydata'])) {
    $data = json_decode($_POST['mydata']);
    $start_point = $data->start_point;
    $end_point = $data->end_point;
    $amount = $data->amount;

  }

?>
<html>
<head>
    <title>Edit Fare</title>
    <link rel="stylesheet" href="../css/editfare.css">
    <script src="../js/editfare.js"></script>
</head>
<body>
    <h2 id="msg"></h2>
    <h2>Edit Fare</h2>
    <form>
        <div class="table">
            <table>
                <tr>
                    <td>ID:</td>
                    <td><input type="number" id="id" name="id" value="<?php echo $id; ?>" /></td>
                    <td>Starting Point:</td>
                    <td><input type="text" id="start_point" name="start_point" value="<?php echo $start_point; ?>" /></td>
                    <td>Ending Point:</td>
                    <td><input type="text" id="end_point" name="end_point" value="<?php echo $end_point; ?>" /></td>
                    <td>Fare:</td>
                    <td><input type="number" id="fare" name="fare" value="<?php echo $amount; ?>" /></td>
                    <td><input type="button" id="btn" value="Update" onclick="update()" /></td>
                    <td><input type="reset" name="clear" value="Clear" /></td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>
