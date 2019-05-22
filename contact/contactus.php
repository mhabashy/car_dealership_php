<?php 

if(isset($_POST['Email']) && $_POST['secret'] == "habashy"){
	$text = "";
	foreach ($_POST as $key => $value) {
		if($key != "secret")
			$text .= $key. " " . $value."\n";
	}
	$message = "Good Samaritan Pharmacy Contact US page\n";
	$message .= "----------------------------------------\n";
	$message .= $text;
	$message .= "----------------------------------------\n";

	$to      = 'care@goodsamaritanpharmacy.net';
	$subject = 'Contact US: Good Samaritan Pharmacy';
	$headers = 'From: '.$_POST['Email'] . "\r\n" .
	    'Reply-To: '.$_POST['Email']  . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
	echo "success";
}else{
	echo "fail";
}


?>