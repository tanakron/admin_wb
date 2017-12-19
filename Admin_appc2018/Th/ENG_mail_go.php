
<?php 
if ($_POST["email"]<>'') { 
    $ToEmail = $_POST ['email'];
    $EmailSubject = 'Thank you for your interest in OHIC 2017 Conference'; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 



 $MESSAGE_BODY .= "Dear Participant,<br><br>
 
Thank you for your interest in appc2018  Conference
<br>"; 
$MESSAGE_BODY .= "
<br>"; 
  $MESSAGE_BODY .= "Your information has been collected in our system and your ID number is  ".$_POST["custID"]."<br><br>"; 
  $MESSAGE_BODY .= "The conference secretariat will send you a confirmation letter by email after bank transfer/credit card transaction is successful. 
<br><br>"; 
  $MESSAGE_BODY .= "The confirmation letter is an important document to identify that your registration is complete. Please present this letter to our staff at the conference venue to collect conference kit and receipt. If you don’t receive the confirmation letter within 2 weeks, please contact us at info@appc2018.com
<br><br>"; 
     $MESSAGE_BODY .= "USER: ".$_POST["email"]."<br>"; 
     $MESSAGE_BODY .= "PASSWORD: ".$_POST["custPassword"]."<br><br>"; 
     $MESSAGE_BODY .= "You can view your registration and make online payment here :  http://www.appc2018.com/Admin_appc2018/Eng_login.php <br>"; 
    $MESSAGE_BODY .= "<br> 19/2 Ekamai 10, Sukhumvit 63 Wattana Bangkok. 10110 THAILAND <br>
Email: info@appc2018.com  Tel. +662 714 259 0-1, +662 714 1487  Fax. +662 714 2656<br>

"; 
  
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
}

?> 

 <script>
                            alert('completed.');
                            window.location = 'Th_login.php';
                        </script>