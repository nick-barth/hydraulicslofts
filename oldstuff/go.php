<?php
	if (isset($_POST['email']) && $_POST['email'] != '') {
		$email_to = 'alexb@savarinocompanies.com';
		$email_subject = 'Hydraulics Lofts Coming Soon Contact Inquiry';
		
		function died($error) {
        	echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        	echo "These errors appear below.<br /><br />";
        	echo $error."<br /><br />";
        	echo "Please go back and fix these errors.<br /><br />";
        	die();
    	}
    	
    	if (!isset($_POST['email'])) {
	    	died('We are sorry, but there appears to be a problem with the form you submitted.');
    	}
    	
    	$email = $_POST['email'];
    	
    	function clean_string($string) {
			$bad = array("content-type","bcc:","to:","cc:","href");
			return str_replace($bad,"",$string);
    	}
    	
    	$email_message .= "Email: " . clean_string($email);
    	
    	$headers = 'From: '.$email."\r\n".
				   'Reply-To: '.$email."\r\n" .
				   'X-Mailer: PHP/' . phpversion();
				   @mail($email_to, $email_subject, $email_message, $headers);
?>

Thanks for contacting us!  We'll be in touch with you soon. <a href="http://hydraulicslofts.com">Go back.</a>

<?php
	}
?>