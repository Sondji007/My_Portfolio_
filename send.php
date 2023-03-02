<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "wilnersonducasse022@gmail.com";
  $body = "$message\n\nEnvoyé par : $email";
  $headers = "From: $email";

  if (mail($to, $body, $headers)) {
    echo "L'e-mail a été envoyé avec succès.";
  } else {
    echo "Une erreur est survenue lors de l'envoi de l'e-mail.";
  }
}