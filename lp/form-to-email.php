<?php

ini_set("SMTP", "smtp.gmail.com");
ini_set("smtp_port", "465");

if ($_POST['send']) {

  if(!$_POST['name']){
      $error="<br/>- Por favor entre com seu nome";
  }
  if(!$_POST['email']){
      $error="<br/>- Por favor entre com seu email";
  }
    mail("leandro@calina.ag","contato message","Name: ".$_POST['name']."
      Email: ".$_POST['email']."
      Mensagem: ".$_POST['mensagem']);

    {
      $result="Obrigado. Entramemos em contato em breve";
    }
}
 ?>
