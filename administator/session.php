<?php
session_start();

include 'db/database.php';

if (isset($_SESSION['custID'])) {
    $session_custID = $_SESSION['custID'];
  
    $qry_cust = "SELECT * FROM customer WHERE custID='$session_custID'";
    $result_cust = mysqli_query($link, $qry_cust);
    if ($result_cust) {
        $row_cust = mysqli_fetch_array($result_cust, MYSQLI_ASSOC);
         $_SESSION['email'] = $row_cust['email'];
        mysqli_free_result($result_cust);
    }
} 
        