<?php

include './db/database.php';


$TiTel = $_POST['TiTel'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$first_name_eg = $_POST['first_name_eg'];
$last_name_eg = $_POST['last_name_eg'];
$medicalLicense = $_POST['medicalLicense'];
$Department = $_POST['Department'];
$institution = $_POST['institution'];
$Address = $_POST['Address'];
$Postal_Code = $_POST['Postal_Code'];
$country = $_POST['country'];
$tel = $_POST['tel'];
$fax = $_POST['fax'];
$email = $_POST['email'];
$custPassword = $_POST['custPassword'];

//ตรวจสอบ User ซ้ำ
$sql2 = "SELECT custID FROM customer_th WHERE email='$email'";
$result2 = mysqli_query($link, $sql2);
$row2 = mysqli_num_rows($result2);
if ($row2 == 1) {
    header('Content-Type: application/json');
    echo json_encode(array('status' => 'danger', 'message' => 'email นี้มีคนใช้แล้ว!'));
    exit;	
}
$sql = "INSERT INTO `customer_th` (`TiTel`,`first_name`,`last_name`,`first_name_eg`,`last_name_eg`,`medicalLicense`,`Department`,`institution`,`Address`,`Postal_Code`,`country`,`tel`,`fax`,`email`,`custPassword`,`dateTime`) "
                       . "VALUES ('$TiTel','$first_name','$last_name','$first_name_eg','$last_name_eg','$medicalLicense', '$Department', '$institution','$Address', '$Postal_Code', '$country', '$tel', '$fax', '$email', '$custPassword',NOW())";

$result = mysqli_query($link, $sql);

if ($result) {
    echo "
                        <script>
                            alert('Your account is complete ');
                            window.location = 'ENG_success_re.php';
                        </script>
                    ";
} else {
    header('Content-Type: application/json');
    $errors = "เกิดข้อผิดพลาดในการบันทึก กรุณาลองใหม่ " . mysqli_error($link);
    echo json_encode(array('status' => 'danger', 'message' => $errors));
    
}