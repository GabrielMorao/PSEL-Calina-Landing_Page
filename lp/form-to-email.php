<?php

ini_set("SMTP","smtp.gmail.com");
ini_set("smtp_port","587");

if (isset($_POST['send'])) {
  $to = 'bielmorao@gmail.com';
  $name = $_POST['name'];
  $from = $_POST['email'];
  $subject = 'Contato do cliente';
  $message = $_POST['mensagem'];
  echo $subject, " from ", $name, " at ", $from, "<br/>";
echo $message;
    
mail($to, $subject, $message);

}

?>
