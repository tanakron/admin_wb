  <?php include 'header2.php'; ?>
  <?php include 'nav.php'; ?>
   <!-- /.row -->
    <div class="container">
                <div class="row">
                  
                    <div class="col-md-12">
                      
                        <div class="white-box">
                             <div class="col-lg-2 col-md-12 col-xs-12">
                                      <div class="row">
                                 <a href="persanal.php"><button class="btn btn-block btn-outline btn-info">Back</button></a> 
                                 &nbsp;&nbsp;&nbsp;
                                </div> </div>
                            <h3><b>Registation</b> <span class="pull-right">ID:#<?php echo $row_cust['custID']; ?></span></h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left"> <address>
            <b> </b>
<p class="text-muted m-l-5">: 
the 11th Asia Pacific Poultry Conference or APPC2018.

                  </address> </div>
                                    <div class="pull-right text-right"> <address>
                  <h4 class="font-bold">Name <?php echo $row_cust['first_name_eg']; ?> </h4>
                  <p class="text-muted m-l-30">Last name  <?php echo $row_cust['last_name_eg']; ?><br/>
            Email :<?php echo $row_cust['email']; ?>
                
         <br>tel: <?php echo $row_cust['tel']; ?></p>
               
             <br>Address Receipt: <?php echo $row_cust['Receipt_Address']; ?>
                  </address> </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive m-t-40">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Name</th>
                                                    <th class="text-right">Detail</th>
                                                    <th class="text-right"></th>
                                                    <th class="text-right"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td> <?php echo $row_cust['last_name_eg']; ?></td>
                                                    <td class="text-right">  
                                                   </td>
                                                    <td class="text-right"></td>
                                                    <td class="text-right"></td>
                                                </tr>
                                              
                                            </tbody>	
                                        </table>
                                    </div>
                                </div>
                                
                                
<?php  
$f="350"
?>
                        
                               
                                   <div class="col-md-7"><strong><font size="5">Registration Rate</font></strong>
                                   
                                   &nbsp; &nbsp;
                                   <strong><font size="5">ID &nbsp;<?php echo $row_cust ['custID']; ?></font> </strong>
                                </div>
                                   <strong><font size="8">Total : USD 
                                 <?php echo $row_cust ['Rate_for_WS_USD']; ?> <?php echo $row_cust ['Rate_USD']; ?>
</font><br>&nbsp;(THB&nbsp;<?php echo $row_cust ['admin_Cre']; ?>)
                                     </strong>

                                    <div class="clearfix">
                                 
                                   
                               <br><br> <br><br><br><br><br><br>
                                        <button onClick="javascript:window.print();" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                                        </div>
                                         
                                 
                                
                                
                                
                                
                                <?php
                
            
                        include './db/database.php';
                        $sql_cust = "SELECT * FROM costomer_re_eng_success WHERE custID='$session_custID'; ";
                        $result_cust = mysqli_query($link, $sql_cust);
                        $count_cust = mysqli_fetch_assoc($result_cust);

?>
                                 
                               
                  
                                  
                                  <br> <br> <br> <br>
                                  
                               <form action="inser_card.php" class="form-horizontal form-bordered" method="post">  
                      <input type="hidden" value="<?php echo $row_cust['first_name_eg']; ?>" name="name">
                    <input type="hidden" value="  <?php echo $row_cust ['Rate_for_WS_USD']; ?> <?php echo $row_cust ['Rate_USD']; ?>" name="amount">
                    <input type="hidden" name="custID" value="<?php echo $row_cust['custID']; ?>" >
 <input type="hidden" name="email" value="<?php echo $row_cust['email']; ?>" >
 <br> <br> <br> <br> <br> <br> <br> <br>
 <button type="submit" class="btn btn-info btn-outline" >Next</button>
</form>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .row -->   </div>