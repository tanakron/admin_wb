<?PHP

require( './db/dbcon.php' );

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    isset($_POST['title']) ? $title = $_POST['title'] : $title = "";
    isset($_POST['frmcontact_firstname']) ? $frmcontact_firstname = $_POST['frmcontact_firstname'] : $frmcontact_firstname = "";
    isset($_POST['frmcontact_familyname']) ? $frmcontact_familyname = $_POST['frmcontact_familyname'] : $frmcontact_familyname = "";
    isset($_POST['frmcontact_department']) ? $frmcontact_department = $_POST['frmcontact_department'] : $frmcontact_department = "";
    isset($_POST['frmcontact_institute']) ? $frmcontact_institute = $_POST['frmcontact_institute'] : $frmcontact_institute = "";
    isset($_POST['frmcontact_addr']) ? $frmcontact_addr = $_POST['frmcontact_addr'] : $frmcontact_addr = "";
    isset($_POST['frmcontact_amphur']) ? $frmcontact_amphur = $_POST['frmcontact_amphur'] : $frmcontact_amphur = "";
    isset($_POST['frmcontact_province']) ? $frmcontact_province = $_POST['frmcontact_province'] : $frmcontact_province = "";
    isset($_POST['frmcontact_zipcode']) ? $frmcontact_zipcode = $_POST['frmcontact_zipcode'] : $frmcontact_zipcode = "";
    isset($_POST['country']) ? $country = $_POST['country'] : $country = "";
    isset($_POST['frmoffice_tel']) ? $frmoffice_tel = $_POST['frmoffice_tel'] : $frmoffice_tel = "";
    isset($_POST['frmmobile']) ? $frmmobile = $_POST['frmmobile'] : $frmmobile = "";
    isset($_POST['frmfax']) ? $frmfax = $_POST['frmfax'] : $frmfax = "";
    isset($_POST['email']) ? $email = $_POST['email'] : $email = "";
    isset($_POST['frmemail2']) ? $frmemail2 = $_POST['frmemail2'] : $frmemail2 = "";
    isset($_POST['abstractcategory']) ? $abstractcategory = $_POST['abstractcategory'] : $abstractcategory = "";
    isset($_POST['abstracttitle']) ? $abstracttitle = $_POST['abstracttitle'] : $abstracttitle = "";
    isset($_POST['presentation']) ? $presentation = $_POST['presentation'] : $presentation = "";
    isset($_POST['oralpresentation']) ? $oralpresentation = $_POST['oralpresentation'] : $oralpresentation = "";
    isset($_POST['frmab_presenting_1']) ? $frmab_presenting_1 = $_POST['frmab_presenting_1'] : $frmab_presenting_1 = "";
    isset($_POST['frmab_author_1']) ? $frmab_author_1 = $_POST['frmab_author_1'] : $frmab_author_1 = "";
    isset($_POST['frmab_institution_1']) ? $frmab_institution_1 = $_POST['frmab_institution_1'] : $frmab_institution_1 = "";
    isset($_POST['frmab_email_1']) ? $frmab_email_1 = $_POST['frmab_email_1'] : $frmab_email_1 = "";
    isset($_POST['frmab_presenting_2']) ? $frmab_presenting_2 = $_POST['frmab_presenting_2'] : $frmab_presenting_2 = "";
    isset($_POST['frmab_author_2']) ? $frmab_author_2 = $_POST['frmab_author_2'] : $frmab_author_2 = "";
    isset($_POST['frmab_institution_2']) ? $frmab_institution_2 = $_POST['frmab_institution_2'] : $frmab_institution_2 = "";
    isset($_POST['frmab_email_2']) ? $frmab_email_2 = $_POST['frmab_email_2'] : $frmab_email_2 = "";
    isset($_POST['frmab_presenting_3']) ? $frmab_presenting_3 = $_POST['frmab_presenting_3'] : $frmab_presenting_3 = "";
    isset($_POST['frmab_author_3']) ? $frmab_author_3 = $_POST['frmab_author_3'] : $frmab_author_3 = "";
    isset($_POST['frmab_institution_3']) ? $frmab_institution_3 = $_POST['frmab_institution_3'] : $frmab_institution_3 = "";
    isset($_POST['frmab_email_3']) ? $frmab_email_3 = $_POST['frmab_email_3'] : $frmab_email_3 = "";
    isset($_POST['frmab_presenting_4']) ? $frmab_presenting_4 = $_POST['frmab_presenting_4'] : $frmab_presenting_4 = "";
    isset($_POST['frmab_author_4']) ? $frmab_author_4 = $_POST['frmab_author_4'] : $frmab_author_4 = "";
    isset($_POST['frmab_institution_4']) ? $frmab_institution_4 = $_POST['frmab_institution_4'] : $frmab_institution_4 = "";
    isset($_POST['frmab_email_4']) ? $frmab_email_4 = $_POST['frmab_email_4'] : $frmab_email_4 = "";
    isset($_POST['frmab_presenting_5']) ? $frmab_presenting_5 = $_POST['frmab_presenting_5'] : $frmab_presenting_5 = "";
    isset($_POST['frmab_author_5']) ? $frmab_author_5 = $_POST['frmab_author_5'] : $frmab_author_5 = "";
    isset($_POST['frmab_institution_5']) ? $frmab_institution_5 = $_POST['frmab_institution_5'] : $frmab_institution_5 = "";
    isset($_POST['frmab_email_5']) ? $frmab_email_5 = $_POST['frmab_email_5'] : $frmab_email_5 = "";
    isset($_POST['frmab_presenting_6']) ? $frmab_presenting_6 = $_POST['frmab_presenting_6'] : $frmab_presenting_6 = "";
    isset($_POST['frmab_author_6']) ? $frmab_author_6 = $_POST['frmab_author_6'] : $frmab_author_6 = "";
    isset($_POST['frmab_institution_6']) ? $frmab_institution_6 = $_POST['frmab_institution_6'] : $frmab_institution_6 = "";
    isset($_POST['frmab_email_6']) ? $frmab_email_6 = $_POST['frmab_email_6'] : $frmab_email_6 = "";
    isset($_POST['frmab_presenting_7']) ? $frmab_presenting_7 = $_POST['frmab_presenting_7'] : $frmab_presenting_7 = "";
    isset($_POST['frmab_author_7']) ? $frmab_author_7 = $_POST['frmab_author_7'] : $frmab_author_7 = "";
    isset($_POST['frmab_institution_7']) ? $frmab_institution_7 = $_POST['frmab_institution_7'] : $frmab_institution_7 = "";
    isset($_POST['frmab_email_7']) ? $frmab_email_7 = $_POST['frmab_email_7'] : $frmab_email_7 = "";
    isset($_POST['frmab_presenting_8']) ? $frmab_presenting_8 = $_POST['frmab_presenting_8'] : $frmab_presenting_8 = "";
    isset($_POST['frmab_author_8']) ? $frmab_author_8 = $_POST['frmab_author_8'] : $frmab_author_8 = "";
    isset($_POST['frmab_institution_8']) ? $frmab_institution_8 = $_POST['frmab_institution_8'] : $frmab_institution_8 = "";
    isset($_POST['frmab_email_8']) ? $frmab_email_8 = $_POST['frmab_email_8'] : $frmab_email_8 = "";
    isset($_POST['frmab_presenting_9']) ? $frmab_presenting_9 = $_POST['frmab_presenting_9'] : $frmab_presenting_9 = "";
    isset($_POST['frmab_author_9']) ? $frmab_author_9 = $_POST['frmab_author_9'] : $frmab_author_9 = "";
    isset($_POST['frmab_institution_9']) ? $frmab_institution_9 = $_POST['frmab_institution_9'] : $frmab_institution_9 = "";
    isset($_POST['frmab_email_9']) ? $frmab_email_9 = $_POST['frmab_email_9'] : $frmab_email_9 = "";
    isset($_POST['frmab_presenting_10']) ? $frmab_presenting_10 = $_POST['frmab_presenting_10'] : $frmab_presenting_10 = "";
    isset($_POST['frmab_author_10']) ? $frmab_author_10 = $_POST['frmab_author_10'] : $frmab_author_10 = "";
    isset($_POST['frmab_institution_10']) ? $frmab_institution_10 = $_POST['frmab_institution_10'] : $frmab_institution_10 = "";
    isset($_POST['frmab_email_10']) ? $frmab_email_10 = $_POST['frmab_email_10'] : $frmab_email_10 = "";
     isset($_POST['frmab_background']) ? $frmab_background = $_POST['frmab_background'] : $frmab_background = "";
           isset($_POST['frmab_objectives']) ? $frmab_objectives = $_POST['frmab_objectives'] : $frmab_objectives = "";
             isset($_POST['frmab_materialsmethods']) ? $frmab_materialsmethods = $_POST['frmab_materialsmethods'] : $frmab_materialsmethods = "";
             isset($_POST['frmab_results']) ? $frmab_results = $_POST['frmab_results'] : $frmab_results = "";
              isset($_POST['frmab_conclusions']) ? $frmab_conclusions = $_POST['frmab_conclusions'] : $frmab_conclusions = "";
              isset($_POST['image']) ? $image = $_POST['image'] : $image = "";
           isset($_POST['frmab_certify']) ? $frmab_certify = $_POST['frmab_certify'] : $frmab_certify= "";
            isset($_POST['cust_id']) ? $cust_id = $_POST['cust_id'] : $cust_id= "";
     $image_tmp = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        
        if( !empty( $image_tmp ) && !empty($image_name) ) {
            
            copy( $image_tmp, "uplond/".$image_name );
            
        }
    
           
           
           
           
}
$sql = "
                    INSERT INTO
                  `abstract`
                    (
                       id,
                        title,
                       frmcontact_firstname,
                       frmcontact_familyname,
                       frmcontact_department,
                       frmcontact_institute,
                       frmcontact_addr,
                       frmcontact_amphur,
                       frmcontact_province,
                       frmcontact_zipcode,
                       country,
                       frmoffice_tel,
                       frmmobile,
                       frmfax,
                       email,
                       frmemail2,
                       abstractcategory,
                       abstracttitle,
                       presentation,
                       oralpresentation,
                       frmab_presenting_1,
                       frmab_author_1,
                       frmab_institution_1,
                       frmab_email_1,
                       frmab_presenting_2,
                       frmab_author_2,
                       frmab_institution_2,
                       frmab_email_2,
                       frmab_presenting_3,
                       frmab_author_3,
                       frmab_institution_3,
                       frmab_email_3,
                       frmab_presenting_4,
                       frmab_author_4,
                       frmab_institution_4,
                       frmab_email_4,
                       frmab_presenting_5,
                       frmab_author_5,
                       frmab_institution_5,
                       frmab_email_5,
                        frmab_presenting_6,
                       frmab_author_6,
                       frmab_institution_6,
                       frmab_email_6,
                      frmab_presenting_7,
                       frmab_author_7,
                       frmab_institution_7,
                       frmab_email_7,
                       frmab_presenting_8,
                       frmab_author_8,
                       frmab_institution_8,
                       frmab_email_8,
                        frmab_presenting_9,
                       frmab_author_9,
                       frmab_institution_9,
                       frmab_email_9,
                       frmab_presenting_10,
                       frmab_author_10,
                       frmab_institution_10,
                       frmab_email_10,
                       frmab_background,
                       frmab_objectives,
                       frmab_materialsmethods,
                       frmab_results,
                       frmab_conclusions,
                       image,
                       frmab_certify,
                       cust_id,
                       dateTime


                    )
                    VALUES
                    (
                        NULL,
                        :title,
                        :frmcontact_firstname,
                        :frmcontact_familyname,
                        :frmcontact_department,
                        :frmcontact_institute,
                        :frmcontact_addr,
                        :frmcontact_amphur,
                        :frmcontact_province,
                        :frmcontact_zipcode,
                        :country,
                        :frmoffice_tel,
                        :frmmobile,
                        :frmfax,
                        :email,
                        :frmemail2,
                        :abstractcategory,
                        :abstracttitle,
                        :presentation,
                        :oralpresentation,
                        :frmab_presenting_1,
                        :frmab_author_1,
                       :frmab_institution_1,
                       :frmab_email_1,
                       :frmab_presenting_2,
                       :frmab_author_2,
                       :frmab_institution_2,
                       :frmab_email_2,
                       :frmab_presenting_3,
                       :frmab_author_3,
                       :frmab_institution_3,
                       :frmab_email_3,
                       :frmab_presenting_4,
                       :frmab_author_4,
                       :frmab_institution_4,
                       :frmab_email_4,
                        :frmab_presenting_5,
                       :frmab_author_5,
                       :frmab_institution_5,
                       :frmab_email_5,
                        :frmab_presenting_6,
                       :frmab_author_6,
                       :frmab_institution_6,
                       :frmab_email_6,
                        :frmab_presenting_7,
                       :frmab_author_7,
                       :frmab_institution_7,
                       :frmab_email_7,
                       :frmab_presenting_8,
                       :frmab_author_8,
                       :frmab_institution_8,
                       :frmab_email_8,
                       :frmab_presenting_9,
                       :frmab_author_9,
                       :frmab_institution_9,
                       :frmab_email_9,
                       :frmab_presenting_10,
                       :frmab_author_10,
                       :frmab_institution_10,
                       :frmab_email_10,
                       :frmab_background,
                       :frmab_objectives,
                       :frmab_materialsmethods,
                       :frmab_results,
                       :frmab_conclusions,
                       :image,
                       :frmab_certify,
                       :cust_id,
                        :dateTime
                    )
                  ";

$q = $connection->prepare($sql);
$pp = array(
    ":title" => $title,
    ":frmcontact_firstname" => $frmcontact_firstname,
    ":frmcontact_familyname" => $frmcontact_familyname,
    ":frmcontact_department" => $frmcontact_department,
    ":frmcontact_institute" => $frmcontact_institute,
    ":frmcontact_addr" => $frmcontact_addr,
    ":frmcontact_amphur" => $frmcontact_amphur,
    ":frmcontact_province" => $frmcontact_province,
    ":frmcontact_zipcode" => $frmcontact_zipcode,
    ":country" => $country,
    ":frmoffice_tel" => $frmoffice_tel,
    ":frmmobile" => $frmmobile,
    ":frmfax" => $frmfax,
    ":email" => $email,
    ":frmemail2" => $frmemail2,
    ":abstractcategory" => $abstractcategory,
    ":abstracttitle" => $abstracttitle,
    ":presentation" => $presentation,
    ":oralpresentation" => $oralpresentation,
    ":frmab_presenting_1" => $frmab_presenting_1,
    ":frmab_author_1" => $frmab_author_1,
    ":frmab_institution_1" => $frmab_institution_1,
    ":frmab_email_1" => $frmab_email_1,
    ":frmab_presenting_2" => $frmab_presenting_2,
    ":frmab_author_2" => $frmab_author_2,
    ":frmab_institution_2" => $frmab_institution_2,
    ":frmab_email_2" => $frmab_email_2,
    ":frmab_presenting_3" => $frmab_presenting_3,
    ":frmab_author_3" => $frmab_author_3,
    ":frmab_institution_3" => $frmab_institution_3,
    ":frmab_email_3" => $frmab_email_3,
    ":frmab_presenting_4" => $frmab_presenting_4,
    ":frmab_author_4" => $frmab_author_4,
    ":frmab_institution_4" => $frmab_institution_4,
    ":frmab_email_4" => $frmab_email_4,
    ":frmab_presenting_5" => $frmab_presenting_5,
    ":frmab_author_5" => $frmab_author_5,
    ":frmab_institution_5" => $frmab_institution_5,
    ":frmab_email_5" => $frmab_email_5,
    ":frmab_presenting_6" => $frmab_presenting_6,
    ":frmab_author_6" => $frmab_author_6,
    ":frmab_institution_6" => $frmab_institution_6,
    ":frmab_email_6" => $frmab_email_7,
    ":frmab_presenting_7" => $frmab_presenting_7,
    ":frmab_author_7" => $frmab_author_7,
    ":frmab_institution_7" => $frmab_institution_7,
    ":frmab_email_7" => $frmab_email_7,
    ":frmab_presenting_8" => $frmab_presenting_8,
    ":frmab_author_8" => $frmab_author_8,
    ":frmab_institution_8" => $frmab_institution_8,
    ":frmab_email_8" => $frmab_email_8,
    ":frmab_presenting_9" => $frmab_presenting_9,
    ":frmab_author_9" => $frmab_author_9,
    ":frmab_institution_9" => $frmab_institution_9,
    ":frmab_email_9" => $frmab_email_9,
    ":frmab_presenting_10" => $frmab_presenting_10,
    ":frmab_author_10" => $frmab_author_10,
    ":frmab_institution_10" => $frmab_institution_10,
    ":frmab_email_10" => $frmab_email_10,
    ":frmab_background" => $frmab_background,
    ":frmab_objectives" => $frmab_objectives,
    ":frmab_materialsmethods" => $frmab_materialsmethods,
       ":frmab_results" => $frmab_results,
       ":frmab_conclusions" => $frmab_conclusions,
     ":image"=>$image_name,
     ":frmab_certify" => $frmab_certify,
     ":cust_id" => $cust_id,
     ":dateTime"=>date("Y-m-d H:i:s")
  
    
);
if ($q->execute($pp)) {

    header("Location:ENG_success_ab.php");
} else {

    echo "
                        <script>
                            alert('Please try again.');
                            window.location = 'cus_page.php';
                        </script>
                    ";
}
        