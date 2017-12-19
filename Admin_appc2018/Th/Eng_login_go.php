<?php
    include './db/database.php';
    
    $email= mysqli_real_escape_string($link,$_POST['email']);
    $custPassword = mysqli_real_escape_string($link,$_POST['custPassword']);
    
    $sql = "SELECT * FROM  customer_th   WHERE (email='$email' AND custPassword='$custPassword')";
    $result = mysqli_query($link, $sql);
    $rows = mysqli_num_rows($result);
    
    if($rows == 1){
        session_start();
        $row_cust = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $_SESSION['custID'] = $row_cust['custID'];
        $_SESSION['email'] = $row_cust['email'];
        header('Content-Type: application/json');
        echo json_encode(array('status' => 'success'));
        header("Location:Th_dashboard.php");
    }else {
        header('Content-Type: application/json');
        $errors = "Email OR Password incorrect" . mysqli_error($link);
        echo json_encode(array('status' => 'danger','message' => $errors));
         
    }
    mysqli_close($link);