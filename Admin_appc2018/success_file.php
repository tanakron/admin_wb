


<?php
include 'head_dashboard.php';

?>
<div class="container-fluid">
   
               
                   
  
          <div class="col-md-3 col-xs-3 col-sm-3"> </div>
        
             <div class="col-md-9 col-xs-12 col-sm-6" >
    
 <?php
                        include './db/database.php';
                        $sql_cust = "SELECT * FROM `newabstract`ORDER BY `id` DESC ";
                        $result_cust = mysqli_query($link, $sql_cust);
                        $count_cust = mysqli_fetch_assoc($result_cust);
                        ?>
                        <br><br><br>
                         First name:<?= $count_cust ['frmcontact_firstname'];?><br>
Last name:<?= $count_cust ['frmcontact_familyname'];?><br>
Email:<?= $count_cust ['email'];?><br>
File:<?= $count_cust ['image'];?><br>



     <br>
  <!--<a href="frm-login.php">  <button  class="btn btn-success " value="">Success</button> </a> -->
 <a href="ENG_dashboard.php"> <button  class="btn btn-danger " value="">NEXT</button>   </a>
  
  <br><br><br><br><br><br><br>
  
 