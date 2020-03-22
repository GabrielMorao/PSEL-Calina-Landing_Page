<?php

ini_set("SMTP", "https://romantic-goldberg-a56118.netlify.com");
ini_set("smtp_port", "25");

if ($_POST['send']) {
  # code...

  if(!$_POST['name']){
      $error="<br/>- Por favor entre com seu nome";
  }
  if(!$_POST['email']){
      $error="<br/>- Por favor entre com seu email";
  }
  if(!$_POST['mensagem']){
      $error="<br/>- Por favor entre com sua mensagem";
  }
    mail("bielmorao@gmail.com","contato message","Name: ".$_POST['name']."
      Email: ".$_POST['email']."
      Mensagem: ".$_POST['mensagem']);

    {
      $result="Obrigado. Entramemos em contato em breve";
    }
}
 ?>
