4di<?php
if(isset($_POST['email'])) {
     
    $email_to = "davidstasi@davidstasinos.com";
    $email_subject = "I sow your profile on Git";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['contactName']) ||
        !isset($_POST['contactEmailAddress']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }
     
    $company_name = $_POST['compName']; // not required
    $contact_name = $_POST['contactname']; // required
    $email_from = $_POST['contactEmailAddress']; // required
    $address = $_POST['address']; // not required
    $city = $_POST['city']; // not required
    $state = $_POST['state']; // not required
    $zip = $_POST['zipCode']; // required
    $comments = $_POST['message']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Company Name: ".clean_string($company_name)."\n";
    $email_message .= "Contact Name: ".clean_string($contact_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "City: ".clean_string($city)." ";
    $email_message .= "State: ".clean_string($state)." ";
    $email_message .= "Zip: ".clean_string($zip)."\n";
    $email_message .= "Message: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
?>
 
<!-- include your own success html here -->
<script type="text/javascript">

    window.location.href = "thankyou.htm"
</script>  
<?php
}
?>
