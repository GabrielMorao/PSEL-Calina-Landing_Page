<?php 

/*
This code was implemented based on email_handler from this website:
https://form.guide/contact-form/php-email-contact-form.htmll
*/

$errors = '';
$myemail = 'leandro@calina.ag, gabrielmunizmorao@gmail.com';//<-----emails to whom the form will be sended.
$senderemail = 'noreply@contraterpg.com';//<-----generic email adress.
if(empty($_POST['name'])  || empty($_POST['email']) || empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$mensagem = $_POST['message']; 

//Verify the email adress
if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Erro: Endereço de email inválido";
}

//If no erros where found, proceed with the action
if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contato de $name";
	$email_body = "Obrigado por se entrar em contato.\n ".
	"Aqui estão os dados do formulário:\n Nome: $name \n Email: $email_address \n Mensagem: $mensagem"; 
	
	$headers = "From: $senderemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: contact-form-thank-you.html');
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>