<?php
require"header.php";
?>
     <div class="ks-page-content">
            <div class="ks-page-content-body">
                <div class="ks-dashboard-tabbed-sidebar">
                    <div class="ks-dashboard-tabbed-sidebar-widgets">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card ks-widget-payment-simple-amount-item ks-purple">
                                    <div class="payment-simple-amount-item-icon-block">
                                        <span class="ks-icon-combo-chart ks-icon"></span>
                                    </div>

                                    <div class="payment-simple-amount-item-body">
                                        <div class="payment-simple-amount-item-amount">
                                            <span class="ks-amount"> <h4>ยังไม่แจ้งชำระ </h4> </span>
                                            <span class="ks-amount-icon ks-icon-circled-up-right"></span>
                                        </div>
                                        <div class="payment-simple-amount-item-description">
                                          <span class="ks-progress-type"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card ks-widget-payment-simple-amount-item ks-green">
                                    <div class="payment-simple-amount-item-icon-block">
                                        <span class="la la-pie-chart ks-icon"></span>
                                    </div>

                                    <div class="payment-simple-amount-item-body">
                                        <div class="payment-simple-amount-item-amount">
                                            <span class="ks-amount">ชำระเงิน</span>
                                            <span class="ks-amount-icon ks-icon-circled-up-right"></span>
                                        </div>
                                        <div class="payment-simple-amount-item-description">
                                          <span class="ks-progress-type"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card ks-widget-payment-simple-amount-item ks-pink">
                                    <div class="payment-simple-amount-item-icon-block">
                                        <span class="ks-icon-user ks-icon"></span>
                                    </div>

                                    <div class="payment-simple-amount-item-body">
                                        <div class="payment-simple-amount-item-amount">
                                            <span class="ks-amount"> <!-- Count -  Row --></span>
                                            <span class="ks-amount-icon ks-icon-circled-down-left"></span>
                                        </div>
                                        <div class="payment-simple-amount-item-description">
                                           <h3>ผู้ลงทะเบียนแล้ว</h3>  <span class="ks-progress-type">  <?php
                        include 'db/database.php';
                        $sql_cust = "SELECT COUNT(*) AS COUNTCUST FROM customer";
                        $result_cust = mysqli_query($link, $sql_cust);
                        $count_cust = mysqli_fetch_assoc($result_cust);
                        ?><h4> <?= $count_cust['COUNTCUST']; ?> </h4></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card ks-widget-payment-simple-amount-item ks-orange">
                                    <div class="payment-simple-amount-item-icon-block">
                                        <span class="la la-area-chart ks-icon"></span>
                                    </div>

                                    <div class="payment-simple-amount-item-body">
                                        <div class="payment-simple-amount-item-amount">
                                            <span class="ks-amount"></span>
                                            <span class="ks-amount-icon ks-icon-circled-up-right"></span>
                                        </div>
                                        <div class="payment-simple-amount-item-description">
                                          <h4> CONFIRMATION </h4>  
                                          
                                          
                                          <span class="ks-progress-type"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        เงื่อนไขการค้นหา <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search for...">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-primary" type="button">Search!</button>
                                                </span>
                                                  </div>    </div>
                                                  <br>
                             <section class="ks-title">
                <h3>ลงทะเบียนคนไทย</h3>

                <div class="ks-controls">
                    <nav class="breadcrumb ks-default">
                        <a class="breadcrumb-item ks-breadcrumb-icon" href="index.html">
                            <span class="la la-home ks-icon"></span>
                        </a>
                        <a href="#" class="breadcrumb-item">ข้อมูลลงทะเบียนคนไทย</a>
                    
                    </nav>
                    <br>
                </div>
            </section>    
      
                <div class="ks-nav-body">
                    <div class="ks-nav-body-wrapper">
                        <div class="container-fluid">
                            <table id="ks-datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                              
                        <tr>
                         <th>  <center><a href="#"> <h4><span class="badge badge-primary ">เพิ่มข้อมูลลงทะเบียน</span></h4></a> </center>  
                          <center><a href="#"> <h4><span class="badge badge-pink ">report excel</span></h4></a> </cent
                          
                         </th>
                         
                         	 <th>เลขที่ ลงทะเบียน</th>
                            <th> วันที่ ลงทะเบียน</th>
                             <th>ชื่อ</th>
                            <th>นามสกุล</th>
                            <th>Email</th>
                           <th>ราคา ลงทะเบียน THB</th>
                            <th> ลงทะเบียน workshop</th>
                              <th>VIEW</th>
                            <th>อนุมัติการลงทะเบียน</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                             <th></th>
                            <th>เลขที่ ลงทะเบียน</th>
                            <th> วันที่ ลงทะเบียน</th>
                             <th>ชื่อ</th>
                            <th> ประเทศ</th>
                                <th>Email</th>
                            <th>ราคา ลงทะเบียน THB</th>
                             <th> ลงทะเบียน workshop</th>
                            <th>VIEW</th>
                            <th>อนุมัติการลงทะเบียน</th>
                        </tr>
                        </tfoot>
              
                        <tbody>
                        <tr>  
 
      
      
 <td>
<?PHP
require( "config.php" );
?>

                           
                            <?PHP
                                            $search_sql = "";
                                            $pp = null;

                                            $sql = " SELECT * FROM customer  ";
                                            $q = $connection->prepare($sql);
                                            if ($q->execute($pp)) {

                                                $no = 1;

                                                while ($f = $q->fetch(PDO::FETCH_ASSOC)) {
                                                    echo "
                        

                                      
                            <tbody>       
                              <tr>
                                       <td>
             <a href='form.php?id=" . $f['custID'] . "'>UPDATE</a>
                                            /
                                        <a href='delete.php?custID=" . $f['custID'] . "' onclick=\"return confirm('Confirm Delete ??')\">DELETE</a>
                                                 
                                                  </td>                
                                         <td>" . $f['custID'] . "</td>    
                        
                           <td>" . $f['dateTime'] . "</td>
                      <td>" . $f['first_name'] . "</td>
                      <td>" . $f['last_name'] . "</td>
                         <td>" . $f['email'] . "</td>
                                          <td>3,500 บาท</td>
                                             <td></td>
                                           <td><a href='view_custid.php?custID=".$f['custID']."'> <button >VIEW</button></a></td>
                                          
                                               <td>  <a href='success_user.php?custID=" . $f['custID'] . "'>อนุมัติ</a></td>
                                                
                                        </tr>
                                        

                                        ";

                                                    $no++;
                                                }
                                            }
                                            ?> 
    </td>

                        </tr>
                     
                      
                        </tbody>
                    </table>
                    
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  