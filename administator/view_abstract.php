<?php
require"header2.php";
?>
    <br>
    <br>

    <h3>&nbsp;&nbsp;&nbsp;Abstract</h3>
    <section>
        <div class="col-lg-3">
            <?php
                        include 'db/database.php';
                        $sql_cust = "SELECT COUNT(*) AS COUNTPM FROM abstract";
                        $result_cust = mysqli_query($link, $sql_cust);
                        $count_cust = mysqli_fetch_assoc($result_cust);
                        ?>
                <div class="card ks-widget-payment-simple-amount-item ks-pink">
                    <div class="payment-simple-amount-item-icon-block">
                        <span class="ks-icon-user ks-icon"></span>
                    </div>

                    <div class="payment-simple-amount-item-body">
                        <div class="payment-simple-amount-item-amount">
                            <span class="ks-amount"><?= $count_cust['COUNTPM']; ?> </span>
                            <span class="ks-amount-icon ks-icon-circled-down-left"></span>
                        </div>

                    </div>
                    
                    
                     <div class="payment-simple-amount-item-body">
                        <div class="payment-simple-amount-item-amount">
                            <span class="ks-amount"><?= $count_cust['COUNTPM']; ?> </span>
                            <span class="ks-amount-icon ks-icon-circled-down-left"></span>
                        </div>

                    </div>
                </div>
        </div>
        <div class="table-responsive">
            <div class="ks-nav-body">

                <div class="container-fluid">
                    <table id="ks-datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>

                            <tr>

                             

                                <th>เลขที่</th>
                                <th> Firstname</th>
                                <th>Familyname</th>
                                <th>Country</th>
                              
                                <th>Email</th>
                                <th>Type Presentation</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>เลขที่</th>
                                <th> Firstname</th>
                                <th>Familyname</th>
                                <th>Country</th>
                            
                                <th>Email</th>
                                <th>Type Presentation</th>


                            </tr>
                        </tfoot>







                        <?PHP
require( "config.php" );
?>


                            <?PHP
                                            $search_sql = "";
                                            $pp = null;

                                            $sql = " SELECT * FROM abstract  Order By id DESC; ";
                                            $q = $connection->prepare($sql);
                                            if ($q->execute($pp)) {

                                                $no = 1;

                                                while ($f = $q->fetch(PDO::FETCH_ASSOC)) {
                                                    echo "
                              <tr>
                         
                                         <td>" . $f['id'] . "</td>    
                           <td>" . $f['frmcontact_firstname'] . "</td>
                      <td>" . $f['frmcontact_familyname'] . "</td>
                     
                      
                       <td>" . $f['country'] . "</td>
                  
                     
                     <td>" . $f['email'] . "</td>
                                 <td>" . $f['typepresentation'] . "</td>
                                
                                           <td>" . $f['image'] . "</td>
                                          
                                            
                                                
                                        </tr>
                        ";

                                                    $no++;
                                                }
                                            }
                                            ?>



                    </table>
                </div>

            </div>