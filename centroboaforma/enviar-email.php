<?php
session_start();
// Recebendo dados do formulário
$name = $_POST['name'];
$email = $_POST['email'];
# $phone = $_POST['telefone'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$headers = "Content-Type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Dados que serão enviados
$body = "Formulário da página de contato <br>";
$body .= "Nome: " . $name . " <br>";
$body .= "Telefone: " . $phone . " <br>";
$body .= "Email: " . $email . " <br>";
$body .= "Mensagem: " . $message . " <br>";

// Email que receberá a mensagem (Não se esqueça de substituir)
$email_to = 'contato@saudetotalvendasonline.com.br';

// Enviando email
$status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $body, $headers);

if ($status):
  // Enviada com sucesso
  $_SESSION['status'] = 1;
  header('location:index.php');
else:
  // Se der erro
  $_SESSION['status'] = 0;
  header('location:index.php');
endif;
?>