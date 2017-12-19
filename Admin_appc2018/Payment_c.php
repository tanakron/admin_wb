  <?php include 'header2.php'; ?>
  <?php include 'nav.php'; ?>
 <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                </div>
                 <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <a href="services.php" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">dashboard</a>
                 
                </div>
            </div>
        </div>
    </section><!--/#title-->     
    <section class="status">
         <div class="container">
             
             <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                          
                        <?
$date = date("ymd his") ;
echo $date ;

?>   <br>
      Name :  <?php echo $row_cust['first_name_eg']; ?>
          <br> last_name :   <?php echo $row_cust['last_name_eg']; ?>
       <br>Email: <?php echo $row_cust['email']; ?>
          <br>id :   <?php echo $row_cust['custID']; ?>
       <hr> 

<!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                        <!-- .row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">steps Payment </h3>
                            <div class="row numbered-bg">
                                <div class="col-md-4 column-step active">
                                    <div class="step-number">1</div>
                                    <div class="step-title">USER ID</div>
                                    <div class="step-info">Payment Information</div>
                                </div>
                                <div class="col-md-4 column-step ">
                                    <div class="step-number">2</div>
                                    <div class="step-title">PAY</div>
                                    <div class="step-info">Payment Now </div>
                                </div>
                                <div class="col-md-4 column-step">
                                    <div class="step-number">3</div>
                                     <div class="step-title">Success</div>
                                    <div class="step-info">Receipt</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .row -->

    <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <div class="panel panel-info">
                         
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <b> <font color="red"><?php
function Random($length){//Randon srting use in Upload picture
    	$possible = "1234567890"; //ตัวอักษรที่ต้องการสุ่ม
	  		$str = "";
	  		while(strlen($str)<$length){
	      		$str.=substr($possible,(rand()%strlen($possible)),1);
	  		}
	  		return $str;
   	}


?></font>
                                </div>
                            </div>
                        </div>
                    </div>
</div>


    
       <form class="form-material form-horizontal" name="payFormCcard" action="https://ipay.bangkokbank.com/b2c/eng/payment/payForm.jsp" method="post">
         
                                <div class="form-group">
                                    <label class="col-md-12" for="example-text">*Payment Number
                                    </label>
                                    <div class="col-md-12">
   <input type="text" name="orderRef" value="<?php echo   Random(8);?>" class="form-control"placeholder="*Payment Number"required> </div>
                                </div>
                              
                               
                            
                                
                                 <?php
                        include './db/database.php';
                        $sql_cust = "SELECT * FROM `pay_card` WHERE  custID={$_GET['custID']}";
                        $result_cust = mysqli_query($link, $sql_cust);
                        $count_pay = mysqli_fetch_assoc($result_cust);
                  
                        ?>
                                
                              
                                <div class="form-group">
                                    <label class="col-md-12" for="toamt">Total Amount 
                              <br>
                               <?php echo $row_cust['Rate_USD']; ?><?php echo $row_cust['Rate_for_WS_USD']; ?>   USD </label>
                                </div>


    <input type="hidden" name="merchantId" value="5223">
    <input type="hidden" name="amount" value="<?php echo $row_cust['admin_Cre']; ?>" >
<input type="hidden" name="currCode" value="764" >
<input type="hidden" name="successUrl" value="http://www.appc2018.com/Admin_appc2018">
<input type="hidden" name="failUrl" value="http://www.appc2018.com/Admin_appc2018">
<input type="hidden" name="cancelUrl" value="http://www.appc2018.com/Admin_appc2018">
<input type="hidden" name="payType" value="N" >
<input type="hidden" name="lang" VALUE="E">

<input type="hidden" name="remark" value="<?php echo $row_cust['email']; ?>">
                                <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                              
                            </form>
                    <br><br>
<a href="ENG_dashboard.php"> <button type="button" class="btn btn-inverse waves-effect waves-light">Cancel</button></a>
         
                               
                               
                          

    
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 



                        </div>      
                        
                        </div>   
   </div>
                            </div>
                       
            </div>
</body>
</html>


   

                             