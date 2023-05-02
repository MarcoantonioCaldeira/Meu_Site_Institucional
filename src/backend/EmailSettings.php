<?php
header('Content-Type: application/json');


$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$message = $_POST['mensagem'];

if (empty($nome) || empty($sobrenome) || empty($email) || empty($telefone) || empty($mensagem)) {

  echo json_encode(array('success' => false, 'message' => 'Por favor, preencha todos os campos.'));
  exit;
}

$to = 'caldeiran391@gmail.com';
$subject = 'Nova mensagem do formulário de contato';
$body = "Nome: $nome\n   Sobrenome: $sobrenome\n   E-mail: $email\n  Telefone: $telefone\n Mensagem:\n$mensagem";


if (mail($to, $subject, $body)) {

  echo json_encode(array('success' => true, 'message' => 'Mensagem enviada com sucesso!'));
} else {

  echo json_encode(array('success' => false, 'message' => 'Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente.'));
}
?>