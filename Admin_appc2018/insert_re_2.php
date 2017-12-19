<?php

include './db/database.php';

$titel = $_POST['titel'];
$first_name_eg = $_POST['first_name_eg'];
$last_name_eg = $_POST['last_name_eg'];
$medicalLicense = $_POST['medicalLicense'];
$Department = $_POST['Department'];
$institution = $_POST['institution'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$Province = $_POST['Province'];
$Postal_Code = $_POST['Postal_Code'];
$country = $_POST['country'];
$tel = $_POST['tel'];
$Mobile = $_POST['Mobile'];
$fax = $_POST['fax'];
$email = $_POST['email'];
$Remark = $_POST['Remark'];
$Rate_for_WS_USD = $_POST['Rate_for_WS_USD'];
$Remark = $_POST['Remark'];
$Payment_Credit = $_POST['Payment_Credit'];
$Rate_USD = $_POST['Rate_USD'];
$Payment = $_POST['Payment'];
$custID = $_POST['custID'];
$STATUS = $_POST['STATUS'];
$food = $_POST['food'];
$Receipt_Name = $_POST['Receipt_Name'];
$Receipt_Address = $_POST['Receipt_Address'];
$eng_th = $_POST['eng_th'];
$Remark = $_POST['Remark'];
$hospital = $_POST['hospital'];

if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"],"myfile/".$_FILES["fileUpload"]["name"]))
	{
		echo "Copy/Upload Complete<br>";
	
	}

     

$sql = "INSERT INTO `costomer_re_eng_success` (`titel`,`first_name_eg`,`last_name_eg`,`medicalLicense`,`Department`,`institution`,`Address`,`City`,`Province`,`Postal_Code`,`country`,`tel`,`Mobile`,`fax`,`email`,`Tpye_Reg`,`Rate_for_WS_USD`,`fileUpload`,`Payment_Credit`,`Rate_USD`,`Payment`,`custID`,`STATUS`,`food`,`Receipt_Name`,`Receipt_Address`,`eng_th`,`Remark`,`hospital`,`dateTime`) "
. "VALUES ('$titel','$first_name_eg','$last_name_eg','$medicalLicense', '$Department', '$institution','$Address','$City', '$Province', '$Postal_Code', '$country', '$tel', '$Mobile', '$fax', '$email', '$Tpye_Reg','$Rate_for_WS_USD','".$_FILES["fileUpload"]["name"]."','$Payment_Credit','$Rate_USD','$Payment','$custID','$STATUS','$food','$Receipt_Name','$Receipt_Address','$eng_th','$Remark','$hospital',NOW())";

$result = mysqli_query($link, $sql);

if ($result) {
    echo "
                        <script>
                            alert('ลงทะเบียนเรียบร้อย.');
                            window.location = 'persanal.php';
                        </script>
                    ";
} else {
    header('Content-Type: application/json');
    $errors = "เกิดข้อผิดพลาดในการบันทึก กรุณาลองใหม่ " . mysqli_error($link);
    echo json_encode(array('status' => 'danger', 'message' => $errors));
    
}