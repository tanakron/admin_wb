
<?php 
if ($_POST["email"]<>'') { 
    $ToEmail = $_POST ['email'];
    $EmailSubject = $_POST =" the 11th Asia Pacific Poultry Conference or APPC2018";
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

$MESSAGE_BODY .= "Thank you for your abstract submission. The abstract will be considered by our scientific committee and will notify you very soon after the deadline of abstract submission.
For all accepted abstracts, abstract senders are requested to register to the conference to ensure that the abstract will be scheduled for presentation. <br>"; 

  $MESSAGE_BODY .= "LOGIN WEB appc2018:  http://www.appc2018.com/ <br><br>"; 
    $MESSAGE_BODY .= " 19/2 Ekamai 10, Sukhumvit 63 Wattana Bangkok. 10110 THAILAND 
Email:  info@appc2018.com
Tel. +662 714 259 0-1, +662 714 1487 
Fax. +662 714 2656
"; 
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
}

?> 

 <script>
                            alert('completed.');
                            window.location = 'http://www.appc2018.com';
                        </script>