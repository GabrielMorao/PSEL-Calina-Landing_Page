<?php

require 'C:\xampp\htdocs\lp\class.simple_mail.php';

if (isset($_POST['send'])) {
  $to = 'bielmorao@gmail.com';
  $subject = 'Contato do cliente';
  $message = 'Name: '. $_POST['name']. "\r\n\r\n";
  $message .= 'Email: '. $_POST['email']. "\r\n\r\n";
  $message .= 'Mensagem: '. $_POST['mensagem']. "\r\n\r\n";

  $send = SimpleMail::make()
    ->setTo($to, 'gabriel')
    ->setFrom($_POST['email'], $_POST['name'])
    ->setSubject($subject)
    ->setMessage($message)
    ->setReplyTo($_POST['email'], $_POST['name'])
    ->setHtml()
    ->setWrap(100)
    ->send();
    
echo ($send) ? 'Email sent successfully' : 'Could not send email';

}

$success = mail($to, $subject, $message);

?>


<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php if (isset($sucess) && $sucess){ ?>
<h1>Obrigado</h1>
Sua mensagem foi enviada.
<?php } else{ ?>
<h1>Oops!</h1>
Desculpe, houve um problema enviando sua mensagem.
<?php } ?>

</body>
</html>
