
  <?php include 'head_dashboard.php'; ?>
  <?php include 'nav.php'; ?>
 <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                </div>
                 <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <a href="index.php" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Log out</a>
                 
                </div>
            </div>
        </div>
  <div class="col-md-12 col-sm-4 col-xs-6 ">
     <div class="col-md-6">  </div>
                   <div class="col-md-4">      
       First name:  <?php echo $row_cust['first_name_eg']; ?>
          <br> Last name:   <?php echo $row_cust['last_name_eg']; ?>
       <br>Email: <?php echo $row_cust['email']; ?>
          <br>Password:   <?php echo $row_cust['custPassword']; ?>
                       <br>  country:  <?php echo $row_cust['country']; ?>
                       <br> 
                      
       <hr> 
                                </div>
                          </div>      
    </section>
     <section id="body" class="emerald">
     
     <div class="col-md-12">
       
      
        <center>
        
         <br> Please register online first <br> if you do not register online first, you can not see your persanal information<br>   
         
            <a href="ENGregister_ENG_2.php?custID=<?php echo $row_cust['custID']; ?>">    <button class="fcbtn  btn-lg btn btn-success btn-outline btn-1d">Persanal Information</button>
              </a>
           
              <a href="persanal.php?custID=<?php echo $row_cust['custID']; ?>">  <button class="fcbtn  btn-lg btn btn-info btn-outline btn-1d">Registration summary </button></a>&nbsp;&nbsp;
            
         
            
            <!--<a href="cus_page.php?custID=<?php echo $row_cust['custID']; ?>"> </a>--><button class="fcbtn  btn-lg btn btn-danger btn-outline btn-1d">Abstract Submission Online</button>
            &nbsp;&nbsp;&nbsp;&nbsp;
            
           
      </center>  
    </div>
       
       </section>
               
</body>
</html>
