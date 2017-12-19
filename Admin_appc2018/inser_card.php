<?php

include './db/database.php';


$custID = $_POST['custID'];
$name = $_POST['name'];
$amount = $_POST['amount'];
$email = $_POST['email'];
if ($row2 == 1) {
    header('Content-Type: application/json');
    echo json_encode(array('status' => 'danger', 'message' => 'email นี้มีคนใช้แล้ว!'));
    exit;
}

$sql = "INSERT INTO `pay_card` (`custID`,`name`,`amount`,`email`) "
                       . "VALUES ('$custID','$name','$amount','$email')";

$result = mysqli_query($link, $sql);

if ($result) {
    echo "
                        <script>
                            alert('Next Payment.');
                           
                        </script>
                        
                    ";
                    header( "location: Payment_c.php?custID={$_POST['custID']}" );
 exit(0);
} else {
    header('Content-Type: application/json');
    $errors = "เกิดข้อผิดพลาดในการบันทึก กรุณาลองใหม่ " . mysqli_error($link);
    echo json_encode(array('status' => 'danger', 'message' => $errors));
    
}