<?php

// xampp code fix      
//ini_set( 'sendmail_from', "bielmorao@gmail.com" ); // My usual e-mail address
//ini_set( 'SMTP', "ssl://smtp.gmail.com" );  // My usual sender
//ini_set( 'smtp_port', 587 );

	$name = $_POST['name'];
	$email = $_POST['email'];
	$to = 'bielmorao@gmail.com';
	$message = $_POST['message'];


	$sbj_owner='Newsletter subscription request from ';
	$header="Content-type: text/html; charset=utf-8 \r\n".'From: '.$email;

	
	$success = mail($to, $sbj_owner, $message, $header);
		if (!$success) {
    		$errorMessage = error_get_last()['message'];
		}

/*	try{
		if(mail($to,$sbj_owner,$message,$header)){
			echo "mail to owner sent";
		}else{
			throw new Exception('mail failed');
		}
	}catch(Exception $e){
		echo $e->getMessage() ."\n";
	}*/
?>