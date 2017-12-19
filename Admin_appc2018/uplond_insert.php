<?PHP

require( './db/dbcon.php' );

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
isset($_POST['frmcontact_firstname']) ? $frmcontact_firstname = $_POST['frmcontact_firstname'] : $frmcontact_firstname = "";
isset($_POST['frmcontact_familyname']) ? $frmcontact_familyname = $_POST['frmcontact_familyname'] : $frmcontact_familyname = "";
       isset($_POST['email']) ? $email = $_POST['email'] : $email = "";
             isset($_POST['image']) ? $image = $_POST['image'] : $image = "";
    $image_tmp = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        
        if( !empty( $image_tmp ) && !empty($image_name) ) {
            
            copy( $image_tmp, "uplond/".$image_name );
            
        }         
           
}
$sql = "
                    INSERT INTO
                  `newabstract`
                    (
                       id,
                        frmcontact_firstname,
                       frmcontact_familyname,
                       email,
                       image,
                       dateTime


                    )
                    VALUES
                    (
                        NULL,
                        :frmcontact_firstname,
                        :frmcontact_familyname,
                        :email,
                        :image,
                        :dateTime
                    )
                  ";

$q = $connection->prepare($sql);
$pp = array(
    ":frmcontact_firstname" => $frmcontact_firstname,
    ":frmcontact_familyname" => $frmcontact_familyname,
    ":email" => $email,
   ":image"=>$image_name,
     ":dateTime"=>date("Y-m-d H:i:s")
  
    
);
if ($q->execute($pp)) {

    header("Location:success_file.php");
} else {

    echo "
                        <script>
                            alert('Please try again.');
                            window.location = 'page_uplond.php';
                        </script>
                    ";
}


