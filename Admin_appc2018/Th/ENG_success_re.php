


<?php
include 'head_dashboard.php';

?>
<div class="container-fluid">
   
               
                   
  
          <div class="col-md-3 col-xs-3 col-sm-3"> </div>
        
             <div class="col-md-9 col-xs-12 col-sm-6" >
    
 <?php
                        include './db/database.php';
                        $sql_cust = "SELECT * FROM `costomer_eng`ORDER BY `custID` DESC ";
                        $result_cust = mysqli_query($link, $sql_cust);
                        $count_cust = mysqli_fetch_assoc($result_cust);
                        ?>
                        <br><br><br>
                        custID:<?= $count_cust ['custID'];?><br>
TiTel:<?= $count_cust ['TiTel'];?><br>
First name:<?= $count_cust ['first_name_eg'];?><br>
Family name:<?= $count_cust ['last_name_eg'];?><br>
medicalLicense:<?= $count_cust ['medicalLicense'];?><br>
Department:<?= $count_cust ['Department'];?><br>
institution:<?= $count_cust ['institution'];?><br>
Address:<?= $count_cust ['Address'];?><br>
Postal_Code:<?= $count_cust ['Postal_Code'];?><br>
country:<?= $count_cust ['country'];?><br>
tel:<?= $count_cust ['tel'];?><br>
fax:<?= $count_cust ['fax'];?><br>
email:<?= $count_cust ['email'];?><br>
Password:<?= $count_cust ['custPassword'];?><br>

   <br><br><br>
<form action="ENG_mail_go.php" method="post">
    <input type="hidden" name="email" value="<?= $count_cust ['email'];?>">
     <input type="hidden" name="custID" value="<?= $count_cust ['custID'];?>">
       <input type="hidden" name="first_name_eg" value="<?= $count_cust ['first_name_eg'];?>">
      <input type="hidden" name="last_name_eg" value="<?= $count_cust ['last_name_eg'];?>">
       <input type="hidden" name="custPassword" value="<?= $count_cust ['custPassword'];?>">
           <input type="hidden" name="Workshop" value="<?= $count_cust ['Workshop'];?>">
         <input class="btn btn-success " type="submit" name="Success" value="NEXT">
       </form> 
       
     <br>
  <!--<a href="frm-login.php">  <button  class="btn btn-success " value="">Success</button> </a> -->
 <a href="registration.php"> <button  class="btn btn-danger " value="">back</button>   </a>
  
  <br><br><br><br><br><br><br>
  
 