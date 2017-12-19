  <?php include 'header2.php'; ?>
  <?php include 'nav.php'; ?>
  <br>
                     
                  

      <div class="col-md-12">     
      
       <hr> 
       <div class="row">
         
                    <div class="col-md-5 col-xs-12">
                        <button class="fcbtn btn btn-danger btn-outline btn-1d"> <i class="icon-note"></i>&nbsp;Edit Profile </button>  <strong></strong> 
                        <div class="white-box">
                       <br>
                           
                               <div class="col-sm-6 col-md-8 col-lg-3">
                                </div>
                            <div class="user-btm-box">
                              
                                
                                <!-- .row -->
                                
                                <div class="row text-center m-t-12">
                                  
                                    <div class="col-md-6 b-r"><strong>Name</strong>
                                        <p><?php echo $row_cust['first_name_eg']; ?></p>
                                    </div>
                                    <div class="col-md-6"><strong>Last name</strong>
                                        <p><?php echo $row_cust['last_name_eg']; ?></p>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <hr>
                                <!-- .row -->
                                <div class="row text-center m-t-12">
                                    <div class="col-md-6 b-r"><strong>Email ID</strong>
                                        <p><?php echo $row_cust['email']; ?></p>
                                    </div>
                                    <div class="col-md-6"><strong>Phone</strong>
                                        <p><?php echo $row_cust ['tel']; ?></p>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <hr>
                                
                                   <div class="row text-center m-t-12">
                                    <div class="col-md-6 b-r"><strong>Address</strong>
                                        <p><?php echo $row_cust['Address']; ?></p>
                                    </div>
                                    <div class="col-md-6"><strong>Country</strong>
                                        <p><?php echo $row_cust['country']; ?></p>
                                    </div>
                                </div>
                                
                                </div>
                             
                                <hr>
                        </div>
                    
       
     
                                </div>
                                
                                  <div class="col-md-6 col-xs-12">
                                 
                                      <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-6 b-r"><strong></strong>
                                       <a href="ENG_dashboard.php"> <button class="fcbtn btn btn-danger btn-outline btn-1d"> &nbsp;Back</button>  </a>
                               <br>    <br>
                                    </div>
                                    
                                      <div class="col-md-6 b-r">
                                        
                               <a href="http://www.appc2018.com/registration.php"><button class="fcbtn btn btn-success btn-outline btn-1d">  <i class="icon-tag"></i>&nbsp;Registration  Rate</button> </a>
                               <br>    <br>
                                  <!--  <a href="contact-us.php?custID=< echo $row_cust['custID']; ?>"> <button class="fcbtn btn btn-primary btn-outline btn-1d"> <i class="ti-user"></i>&nbsp;Contact Admin  </button>  </a>
                               -->
                                <br>    <br>
                                  <a href="Pay_invoice.php?custID=<?php echo $row_cust['custID']; ?>"> <button class="fcbtn btn btn-danger btn-outline btn-1d"> <i class="ti-credit-card"></i>&nbsp;Online Payment with Credit Card  </button>  </a>
                               <br>    <br>  
                               
                                  <!--  <a href="invoice.php?id=< echo $row_cust['custID']; ?>"><button class="fcbtn btn btn-info btn-outline btn-1d">   <i class="ti-printer"></i> &nbsp;Print</button> </a> -->
                               </div>
                                </div>
                           
                                <hr>
                                   
                                   
                
                        
                               
                                   <div class="col-md-7"><strong><font size="5">Registration Rate</font></strong>
                                   
                                   &nbsp; &nbsp;
                                 
                                <br></div>
                                
                       
                                  
 <strong><font size="5">ID &nbsp;<?php echo $row_cust ['custID']; ?></font> </strong><br>
  <strong><font size="8">total :   
 <?php echo $row_cust ['Rate_USD']; ?><?php echo $row_cust ['Rate_for_WS_USD']; ?>

   <strong>
        </strong><br>
  


                              </font> </strong>


                                        <hr>
                                      

 <br> <br> <br> <br> <br> <br>
                                    </div>

                 
                                