 <?php
require"header2.php";
?>
 
 
 <div class="container">
     
 <div class="col-md-4">
     <div class="card-block" data-widget-content>
                                    <div class="ks-header">
                                        อนุมัติ การลงทะเบียน
                                      <br>           <br>
                                      
          <?php
                        include 'db/database.php';
                        $sql_cust = "SELECT * FROM customer WHERE custID ={$_GET['custID']} ";
                        $result_cust = mysqli_query($link, $sql_cust);
                        $count_cust = mysqli_fetch_assoc($result_cust);
                        ?>
                        
                        <span class="ks-amount">ชื่อ:</span>
                                            <?= $count_cust['first_name']; ?> 
                                              <span class="ks-amount">นามสกุล:</span>
                                            <?= $count_cust['last_name']; ?> <br>
                                              <span class="ks-amount">EMAIL:</span>
                                            <?= $count_cust['email']; ?> 
                                    </div>
                                       <br>           <br>   <br>           <br>
                                    <div class="ks-body ks-scrollable" data-height="140">
                                        <ul class="ks-wrapper">
                                            <li class="ks-task">
                                                <span class="ks-icon la la-bars"></span>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" value="ยืนยันการลงทะเบียน">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">ยืนยันการลงทะเบียน</span>
                                                </label>
                                            </li>
                                            <li class="ks-task">
                                                <span class="ks-icon la la-bars"></span>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" value="ยืนยันการชำระเงิน">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">ยืนยันการชำระเงิน</span>
                                                </label>
                                            </li>
                                            <li class="ks-task">
                                                <span class="ks-icon la la-bars"></span>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" value="ยืนยันลงworkshop">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">ยืนยันลงworkshop</span>
                                                </label>
                                            </li>
                                           
                                    </div>
                                    <form class="ks-footer">
                                        <input type="hidden" value="<?= $count_cust['first_name']; ?> " >
                                        <input type="hidden" value="<?= $count_cust['custID']; ?> " >
                                        <input type="text" value=" <?= $count_cust['email']; ?> "class="form-control" placeholder="    <?= $count_cust['email']; ?> "><br>
                                        <button class="btn btn-primary" type="submit" >Add</button>
                                    </form>
                                    <br> <br>
                                      <a href="register_Th.php"><button class="btn btn-primary">Back</button></a>
                                </div>
                            </div>
                        </div>
                 <div class="container">
                     <div class="col-md-2">        </div> 
      <div class="col-md-8">
      &nbsp; &nbsp; &nbsp;<b>รายการที่ชำระเงิน</b> 
                <div class="ks-nav-body">
                    <div class="ks-nav-body-wrapper">
                        <div class="container-fluid">
                            <table id="ks-datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                              
                        <tr>
                       
                         
                         	 <th>#</th>
                             <th>ชื่อ</th>
                            <th>นามสกุล</th>
                            <th>Email</th>
                           <th>ID USER</th>
                            <th>ใบเสร็จ</th>
                                <th>เวลาที่แจ้ง</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>#</th>
                             <th>ชื่อ</th>
                            <th>นามสกุล</th>
                            <th>Email</th>
                           <th>ID USER</th>
                            <th>ใบเสร็จ</th>
                                <th>เวลาที่แจ้ง</th>
                        </tr>
                        </tfoot>
              
                        <tbody>
                        <tr>  

<?PHP
require( "config.php" );
?>

                           
                            <?PHP
                                            $search_sql = "";
                                            $pp = null;

                                            $sql = " SELECT * FROM payment_th  ";
                                            $q = $connection->prepare($sql);
                                            if ($q->execute($pp)) {
                                                 
                                                $no = 1;

                                                while ($f = $q->fetch(PDO::FETCH_ASSOC)) {
                                       echo "<img src=".$f['image'].">";
                                                    echo "
                            <tbody>       
                              <tr>
                                       <td>
                                                  </td>                
                           <td>" . $f['name'] . "</td>
                      <td>" . $f['lastname'] . "</td>
                      <td>" . $f['email'] . "</td>
                         <td>" . $f['id_user'] . "</td>
                          <td>" . $f['image'] . "</td>
                                       <td>" . $f['dateTime'] . "</td>   
                                       
                                        </tr>
                                                  </tbody>    	

                                        ";
                                    

                                                    $no++;
                                              
                                                }
                                            }
                                            
                                            
                                            ?> 
    </td>

                        </tr>
                     
                      
                        </tbody>
                    </table>
                    </div></div></div></div> </div> 
      </div>
 </div>

 </div>