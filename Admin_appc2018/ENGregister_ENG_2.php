  <?php include 'head_dashboard.php'; ?>
  <?php include 'nav.php'; ?>
  
<div class="container">
   <!-------------------------------------------------------------------------------------------------------------------------->
               
    <form name="register"class="form-horizontal form-bordered" method="post" action="insert_re_2.php"id="usrform"enctype="multipart/form-data" >

    <div class="col-md-12 col-xs-12">
        <br>
 <div class="ribbon-wrapper ribbon-info">
<font size="5" color="white"> <right>Personal Details</right></font></div>
<br><br><br>
<div class="col-md-6 col-xs-6">
     <b>Titel</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text"name="titel"value="<?= $row_cust ['TiTel'];?>">  <br><br>
                        <b>Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b><input type="text"name="first_name_eg"value="<?= $row_cust ['first_name_eg'];?>"> <br><br>
                    <b>Last name&nbsp; &nbsp;</b><input type="text"name="last_name_eg"value="<?= $row_cust ['last_name_eg'];?>"> <br>
    
</div>
          <div class="col-md-6 col-xs-6">              
                       
                                           <b>Department&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b><input type="text"name="Department"value="<?= $row_cust ['Department'];?>"> <br><br>
                         <b>Institution &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b><input type="text"name="institution"value="<?= $row_cust ['institution'];?>"> <br>
            
                         </div>     
                  <br><br><br><br><br><br><br>
                   <div class="ribbon-wrapper ribbon-info">
<font size="5" color="white"> <right>Contact Details</right></font></div>
<br><br><br>
                  
                 

               <b>	Hospital &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b><input type="text"name="hospital"value=""> <br><br>
                   
                     <b>Address  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;</b><input type="text" name="Address"value="<?= $row_cust ['Address'];?>">
                     <br><br>
                      <b>City/Amphur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text"name="City"value="" >
                      <br><br>
                      <b>State/Province &nbsp;&nbsp;</b><input type="text"name="Province"value="" >
                 <b>Postal Code *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text"name="Postal_Code"value="<?= $row_cust ['Postal_Code'];?>">
                                          <br><br>
                                            <b>Country&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text"name="country"value="<?= $row_cust ['country'];?>">
                                             <br><br>
                   <b>Telephone No.* &nbsp;&nbsp;&nbsp;</b><input type="text"name="tel"value="<?= $row_cust ['tel'];?>">
                    <br><br>
                <b>Fax&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><input type="text"name="fax"value="<?= $row_cust ['fax'];?>">
                       <br><br>
                          <b>Email* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text"name="email"value="<?= $row_cust ['email'];?>">
                        
                                 
                       
                     

                        
                      
                           <br><br><br><br>

                          <div class="col-sm-12">
                                 Food
                         &nbsp;&nbsp;&nbsp; <input type="radio" value="Normal" name="food">
                        &nbsp;Normal
                        &nbsp;&nbsp;&nbsp; <input type="radio" value="Vegetarian" name="food">
                        &nbsp;Vegetarian
                        <input type="radio" value="Islam" name="food">Islam         
                           <br> <br>
                              
                              <div class="table-responsive">
                                <table class="table color-bordered-table inverse-bordered-table">
                                    <thead>
                                        <tr>
                                            <th><font size="5">Registration</font></th>
                                            <th>Type</th>
                                            <th>Early Bird            Regular               Onsite

                            (Till Dec 31,2017)</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td> <input type="radio"value="400"name="Rate_USD"> <b>Member Participant </b></td>
                                            <td>USD 400 &nbsp;(THB 13,400)</td>

                                            <td></td>
                                        </tr>
                                         <tr>
                                            <td></td>
                                            <td> <input type="radio"value="450"name="Rate_USD"> <b>Non Member Participant </b></td>
                                            <td>USD 450 &nbsp;(THB 15,075)</td>

                                            <td></td>
                                        </tr>
                                        
                                        <tr>
                                            <td></td>
                                            <td> <input type="radio"value="200"name="Rate_for_WS_USD"> <b>Student * </b></td>
                                            <td>USD 200 &nbsp;(THB 6,700)</td>
                                            <td></td>
                                        </tr>
                                    
                                        <tr>
                                            <td></td>
                                            <td>Benefits for registration
- Access to all scientific sessions, Invitation to welcome reception, Conference kits (book and bag),
Coffee breaks and lunches (lunch symposium)
 <hr>
Cancellation policy 
- Refund before December 15, 2017 - 50% of registration fee will be deducted.
- There is no refund after December 15, 2017.</td>
<td></td>
<td></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        
                                 
                   <div class="ribbon-wrapper ribbon-info">
<font size="5" color="white"> <right>Payment</right></font></div>
<br>
<div class="col-md-3"></div>
<div class="col-md-6">
                         <input type="radio" value="Payment Credit Card" name="Payment_Credit">Online Payment with Credit Card<br>
                         &nbsp;&nbsp;&nbsp; <input type="radio" value="Visa card" name="Payment">&nbsp;&nbsp;&nbsp;Visa card  
                        &nbsp;&nbsp;&nbsp; <input type="radio" value="Master card" name="Payment">&nbsp;&nbsp;&nbsp;Master card<br>
                       
                          
                          
                     </div>
                        
                        
                          <div class="col-md-3"><br> </div> 
                    <div class="col-md-3">
                            <b> Remark </b><textarea name="Remark" form="usrform"></textarea></div>

       <br>
 <div class="col-md-9">

   <b>Receipt Name &nbsp;&nbsp;&nbsp;</b><input type="text"name="Receipt_Name"value="">
   <b>Receipt Address &nbsp;&nbsp;&nbsp;</b><input type="text"name="Receipt_Address"value="">
                          </div>
                          <div class="col-md-12">
                              <input type="hidden"value="Participant"name="Tpye_Reg">
                        <input type="hidden"name="STATUS"value="online">
                     <input type="hidden"name="custID"value="<?= $row_cust ['custID'];?>">
                     <input type="hidden"name="eng_th"value="ENG">
           <br>
        
           <input type="file" name="fileUpload" >(*.jpg, *.png, *.pdf)<br>
            <b>* The verification document from the organization or university is required (Student) :</b> <br><br><br><br>
                            <center><button type="submit"  class="btn btn-success "  value="">Submit</button></center>  
                         </div> 
                         <br> <br> <br> <br>  </div> 
                                 </form>
                          
                            <div class="col-md-12"><br><br><br> </div>
                      