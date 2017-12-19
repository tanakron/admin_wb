<?php
require"header2.php";
?>
<br><br><br><br>
                      <div class="container"> 
 <?php
                        include 'db/database.php';
                        $sql_cust = "SELECT * FROM customer  WHERE custID ={$_GET['custID']} ";
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
                                            <?= $count_cust['first_name']; ?> 
                                              <span class="ks-amount">นามสกุล:</span>
                                            <?= $count_cust['last_name']; ?> <br>
                                              <span class="ks-amount">EMAIL:</span>
                                            <?= $count_cust['email']; ?> 
                                            <h1><span class="badge badge-pink-outline ks-lg">สถานะการชำระเงิน :    </span> </h1>   <b>   </b>    <?= $count_cust['pay_ok']; ?>  บาทถ้วน
                                            
                                            
                                            <br>
                                            <h1><span class="badge badge-info-outline ks-lg">ลงทะเบียน workshop :    </span> </h1>   <b>   </b>    <?= $count_cust['']; ?> 
                                        </div>
                                        <div class="payment-simple-amount-item-description">
                                       <span class="ks-progress-type">  </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     
                       <div class="col-md-12">
                                <div class="card ks-widget-payment-simple-amount-item ks-pink">
                                   

                                 
                                         <div class="col-md-3"> </div>
                                         
                                           <div class="col-md-3">
                                        ชื่อภาษาอังกฤษ : <?= $count_cust['first_name_eg']; ?>  <br>
                                         นามสกุลภาษาอังกฤษ:   <?= $count_cust['last_name_eg']; ?>  <br>
                                           เลขที่ประกอบวิชาชีพ :<?= $count_cust['professional_number']; ?>  <br>
                                      โรงพยาบาล  :     <?= $count_cust['hospital']; ?>  <br>
                                        หน่วยงาน/แผนก  :    <?= $count_cust['departmentR']; ?>  <br>
                                             โทร :  <?= $count_cust['tel']; ?>  <br>
                                                </div>
                                                
                                                 <div class="col-md-3">
                                               แฟกซ์:  <?= $count_cust['fax']; ?>  <br>
                                                Email :<?= $count_cust['email']; ?>  <br>
                                             อาหาร   :   <?= $count_cust['food']; ?>  <br>
                                             ออกใบเสร็จรับเงินในนาม  :    <?= $count_cust['receipt']; ?>  <br>
                                               เลขที่ผู้เสียภาษี    : <?= $count_cust['tax_number']; ?>  <br>
                                       ที่อยู่สำหรับออกใบเสร็จ       :       <?= $count_cust['address_receipt']; ?>  <br>
                                           

                                                </div>
                                          
                                      
                             

                                </div>
                            </div>
                     
                     
                     
                    <br> <br>
                        <button onClick="javascript:window.print();" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                         <a href="register_Th.php"> <button class="btn btn-primary btn-outline" type="button">
                                 <span>Back</span> </button></a>  
                        </div>       
                

 <br> <br> <br> <br> <br>
  

                   
                   
                   
                       