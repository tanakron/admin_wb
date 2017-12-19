  <?php include 'head_dashboard.php'; ?>
  <?php include 'nav.php'; ?>
<div class="container-fluid">
          <div class="col-md-3 col-xs-3 col-sm-3"> </div>
        
             <div class="col-md-9 col-xs-12 col-sm-6" >
                 <br><br>
            
    
 <?php
                        include './db/database.php';
                        $sql_cust = "SELECT * FROM `abstract`ORDER BY `id` DESC ";
                        $result_cust = mysqli_query($link, $sql_cust);
                        $count_cust = mysqli_fetch_assoc($result_cust);
                        ?>
                        <br><br><br>
<?= $count_cust ['title'];?><br>
<b>First name:</b> &nbsp;<?= $count_cust ['frmcontact_firstname'];?><br>
<b>Family name:</b>&nbsp;<?= $count_cust ['frmcontact_familyname'];?><br>
<b>Department</b>&nbsp;<?= $count_cust ['frmcontact_department'];?><br>
<b>Address:</b>&nbsp;<?= $count_cust ['frmcontact_addr'];?><br>
<b>Province:</b>&nbsp;<?= $count_cust ['frmcontact_province'];?><br>
<b>Zipcode</b>&nbsp;<?= $count_cust ['frmcontact_zipcode'];?><br>
<b>Country:</b>&nbsp;<?= $count_cust ['country'];?><br>
<b>Tel:</b>&nbsp;<?= $count_cust ['frmoffice_tel'];?><br>
<b>Mobile:</b>&nbsp;<?= $count_cust ['frmmobile'];?><br>
<b>Email:</b>&nbsp;<?= $count_cust ['email'];?><br>
<b></b>&nbsp;<?= $count_cust ['frmemail2'];?><br>
<b>Abstract Category:</b>&nbsp;<?= $count_cust ['abstractcategory'];?><br>
<b>Abstract Ttitle:</b>&nbsp;<?= $count_cust ['abstracttitle'];?><br>
<b>presentation:</b>&nbsp;<?= $count_cust ['presentation'];?><br>
<b>Oralpresentation:</b>&nbsp;<?= $count_cust ['oralpresentation'];?><br>
<b>Presenting_1:</b>&nbsp;<?= $count_cust ['frmab_presenting_1'];?><br>
<b>Author_1:</b>&nbsp;<?= $count_cust ['frmab_author_1'];?><br>
<b>Institution_1:</b>&nbsp;<?= $count_cust ['frmab_institution_1'];?><br>
<b>Email_1:</b>&nbsp;<?= $count_cust ['frmab_email_1'];?><br>
<b>Presenting_2:</b>&nbsp;<?= $count_cust ['frmab_presenting_2'];?><br>
<b>Author_2:</b>&nbsp;<?= $count_cust ['frmab_author_2'];?><br>
<b>Institution_2:</b>&nbsp;<?= $count_cust ['frmab_institution_2'];?><br>
<b>Email_2:</b>&nbsp;<?= $count_cust ['frmab_email_2'];?><br>
<b>Presenting_3:</b>&nbsp;<?= $count_cust ['frmab_presenting_3'];?><br>
<b>Author_3:</b>&nbsp;<?= $count_cust ['frmab_author_3'];?><br>
<b>Institution_3:</b>&nbsp;<?= $count_cust ['frmab_institution_3'];?><br>
<b>Email_3:</b>&nbsp;<?= $count_cust ['frmab_email_3'];?><br>
<b>Presenting_4:</b>&nbsp;<?= $count_cust ['frmab_presenting_4'];?><br>
<b>Author_4:</b>&nbsp;<?= $count_cust ['frmab_author_4'];?><br>
<b>Institution_4:</b>&nbsp;<?= $count_cust ['frmab_institution_4'];?><br>
<b>Email_4:</b>&nbsp;<?= $count_cust ['frmab_email_4'];?><br>
<b>Presenting_5:</b>&nbsp;<?= $count_cust ['frmab_presenting_5'];?><br>
<b>Author_5:</b>&nbsp;<?= $count_cust ['frmab_author_5'];?><br>
<b>Institution_5:</b>&nbsp;<?= $count_cust ['frmab_institution_5'];?><br>
<b>Email_5:</b>&nbsp;<?= $count_cust ['frmab_email_5'];?><br>
<b>Presenting_6:</b>&nbsp;<?= $count_cust ['frmab_presenting_6'];?><br>
<b>Author_6:</b>&nbsp;<?= $count_cust ['frmab_author_6'];?><br>
<b>Institution_6:</b>&nbsp;<?= $count_cust ['frmab_institution_6'];?><br>
<b>Email_6:</b>&nbsp;<?= $count_cust ['frmab_email_6'];?><br>
<b>Presenting_7:</b>&nbsp;<?= $count_cust ['frmab_presenting_7'];?><br>
<b>Author_7:</b>&nbsp;<?= $count_cust ['frmab_author_7'];?><br>
<b>Institution_7:</b>&nbsp;<?= $count_cust ['frmab_institution_7'];?><br>
<b>Email_7:</b>&nbsp;<?= $count_cust ['frmab_email_7'];?><br>
<b>Presenting_8:</b>&nbsp;<?= $count_cust ['frmab_presenting_8'];?><br>
<b>Author_8:</b>:&nbsp;<?= $count_cust ['frmab_author_8'];?><br>
<b>Institution_8:</b>&nbsp;<?= $count_cust ['frmab_institution_8'];?><br>
<b>Email_8:</b>&nbsp;<?= $count_cust ['frmab_email_8'];?><br>
<b>Presenting_9:</b>&nbsp;<?= $count_cust ['frmab_presenting_9'];?><br>
<b>Author_9:</b>&nbsp;<?= $count_cust ['frmab_author_9'];?><br>
<b>Institution_9:</b>&nbsp;<?= $count_cust ['frmab_institution_9'];?><br>
<b>Email_9:</b>&nbsp;<?= $count_cust ['frmab_email_9'];?><br>
<b>Presenting_10:</b>&nbsp;<?= $count_cust ['frmab_presenting_10'];?><br>
<b>Author_10:</b>&nbsp;<?= $count_cust ['frmab_author_10'];?><br>
<b>Institution_10:</b>&nbsp;<?= $count_cust ['frmab_institution_10'];?><br>
<b>Email_10:</b>&nbsp;<?= $count_cust ['frmab_email_10'];?><br>
<b>Background:</b>&nbsp;<?= $count_cust ['frmab_background'];?><br>
<b>Objectives:</b>&nbsp;<?= $count_cust ['frmab_objectives'];?><br>
<b>Materialsmethods:</b>&nbsp;<?= $count_cust ['frmab_materialsmethods'];?><br>
<b>Results:</b>&nbsp;<?= $count_cust ['frmab_results'];?><br>
<b>Conclusions:</b>&nbsp;<?= $count_cust ['frmab_conclusions'];?><br>
<b>Fiell:</b>&nbsp;<?= $count_cust ['image'];?><br>
   <br><br><br>
   
   
<form action="mail_go_ab.php" method="post">
    
    <input type="hidden" name="abstracttitle" value="<?= $count_cust ['abstracttitle'];?>">
 
    <input type="hidden" name="email" value="<?= $count_cust ['email'];?>">
           
             <p class="jusify"> "Thank you for your submission. The abstract will be considered by our scientific committee and will notify you very soon after the deadline of abstract submission.
For all accepted abstracts, abstract senders are requested to register to the conference to ensure that the abstract will be scheduled for presentation".</p>  
         <input class="btn btn-success " type="submit" name="Success" value="NEXT">
       </form> 
     <br>
  <!--<a href="frm-login.php">  <button  class="btn btn-success " value="">Success</button> </a> -->
 <a href="registration.php"> <button  class="btn btn-danger " value="">back</button>   </a>
  
  <br><br><br><br><br><br><br>
  
 