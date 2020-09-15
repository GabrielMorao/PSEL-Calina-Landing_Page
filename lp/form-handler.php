<?php 

/*
Esse código é uma variante do código para envio de emails dessa fonte:
https://form.guide/contact-form/php-email-contact-form.html
*/

$errors = '';
$myemail = 'bielmorao@gmail.com, gabrielmunizmorao@gmail.com';//<-----emails para quais o formulário será enviado.
$senderemail = 'noreply@contraterpg.com';// endereço de email generico que envia emais de formulário.
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message'])
{
    $errors .= "\n Erro: preencha todos os campos";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$mensagem = $_POST['message']; 


if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Erro: Endereço de email inválido";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contato de $name";
	$email_body = "Obrigado por entrar em contato.\n Aqui estão os dados do formulário:\n Nome: $name \n Email: $email_address \n Mensagem: $message"; 
	
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