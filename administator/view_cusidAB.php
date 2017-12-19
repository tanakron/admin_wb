<?php
require"header2.php";
?>
<br><br><br><br>
                      <div class="container"> 
 <?php
                        include 'db/database.php';
                        $sql_cust = "SELECT * FROM abstract  WHERE 	id={$_GET['id']} ";
                        $result_cust = mysqli_query($link, $sql_cust);
                        $count_cust = mysqli_fetch_assoc($result_cust);
                        ?>
      
                     
                     
                      <div class="col-md-12">
                                <div class="card ks-widget-payment-simple-amount-item ks-pink">
                                    <div class="payment-simple-amount-item-icon-block">
                                        <span class="ks-icon-user ks-icon"></span>
                                    </div>

                                    <div class="payment-simple-amount-item-body">
                                        <div class="payment-simple-amount-item-amount">
                                         
                                              <span class="ks-amount">ชื่อ:</span>
                                            <?= $count_cust['frmcontact_firstname']; ?> <br>
                                              <span class="ks-amount">นามสกุล:</span>
                                            <?= $count_cust['frmcontact_familyname']; ?> <br>
                                              <span class="ks-amount">Abstract title:</span>
                                            <?= $count_cust['abstracttitle']; ?> <br>
                                             
                                             <span class="ks-amount">Type of Presentation:</span>
                                            <?= $count_cust['oralpresentation']; ?> <br>
                                        </div>
                                        <div class="payment-simple-amount-item-description">
                                       <span class="ks-progress-type">  </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     
                       <div class="col-md-12">
                                <div class="card ks-widget-payment-simple-amount-item ks-pink">
                                   

                                 
                                         <div class="col-md-6"> 
                                       <b> abstract category :  </b> <?= $count_cust['abstractcategory']; ?> <br>
                                      <b> abstract title :   </b> <?= $count_cust['abstracttitle']; ?> <br>
                                  
                                         <b>Type of Presentation   : </b>  <?= $count_cust['oralpresentation']; ?> <br>
                                         </div>
                                         
                                           <div class="col-md-6">
                               <b> presenting_1 :</b> <?= $count_cust['	frmab_presenting_1']; ?> <br>
                                <b> author_1 : </b><?= $count_cust['frmab_author_1']; ?> <br>
                                  <b> institution_1  :</b> <?= $count_cust['frmab_institution_1']; ?> <br>
                                  <b> email_1  :  </b> <?= $count_cust['frmab_email_1']; ?> <br>
                                       
                                
                                
                                
                                  <br>
                                           

                                                </div>
                                          
                                      
                             

                                </div>
                            </div>
                                 <div class="col-md-12">
                                <div class="card ks-widget-payment-simple-amount-item ks-pink">
                                   

                                 
                                         <div class="col-md-6"> 
                                       <b>Background:  </b> <?= $count_cust['	frmab_background']; ?> <br>
                                      <b> Objectives:   </b> <?= $count_cust['abstracttitle']; ?> <br>
                                   <b>  Materialsmethods  :    </b>   <?= $count_cust['presentation']; ?> <br>
                                         <b> Results   : </b>  <?= $count_cust['oralpresentation']; ?> <br>
                                         </div>
                                         
                                           <div class="col-md-6">
                               <b> Conclusions:</b> <?= $count_cust['frmab_presenting_1']; ?> <br>
                                <b> File : </b>  
                                <?= $count_cust['image']; 
                          
                               
                                ?> 
                                 <?php
  
   include 'db/database.php';
                        $sql_cust = "SELECT * FROM abstract  WHERE 	id={$_GET['id']} ";
                        $result_cust = mysqli_query($link, $sql_cust);
                        $count_cust = mysqli_fetch_assoc($result_cust);
                        
              
         echo '<td><center>DOWLOND <br><a href="../Admin_appc2018/uplond/' . $count_cust["image"] . '">' . $count_cust["image"] . '</a></center></td>';
        ?>
                        
            
                                
                                
                                
                                
                             <br>

                                  <br>
                                           

                                                </div>
                                          
                                      
                             

                                </div>
                            </div>
                     
                     
                    <br> <br>
                        <button onClick="javascript:window.print();" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                         <a href="view_abstract.php"> <button class="btn btn-primary btn-outline" type="button">
                                 <span>Back</span> </button></a>  
                        </div>       
                

 <br> <br> <br> <br> <br>
  

                   
                   
                   
                       