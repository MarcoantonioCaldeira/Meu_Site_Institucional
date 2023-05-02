<?php
header('Content-Type: application/json');

// Obter os dados do formulário
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$message = $_POST['mensagem'];

// Validar os dados do formulário
if (empty($nome) || empty($sobrenome) || empty($email) || empty($mensagem)) {
  // Se algum dos campos estiver vazio, retorne uma mensagem de erro
  echo json_encode(array('success' => false, 'message' => 'Por favor, preencha todos os campos.'));
  exit;
}

// Configurar as informações do e-mail
$to = 'caldeiran391@gmail.com';
$subject = 'Nova mensagem do formulário de contato';
$body = "Nome: $nome\n   Sobrenome: $sobrenome\n   E-mail: $email\n  Mensagem:\n$mensagem";

// Enviar o e-mail
if (mail($to, $subject, $body)) {
  // Se o e-mail for enviado com sucesso, retorne uma mensagem de sucesso
  echo json_encode(array('success' => true, 'message' => 'Mensagem enviada com sucesso!'));
} else {
  // Se ocorrer um erro ao enviar o e-mail, retorne uma mensagem de erro
  echo json_encode(array('success' => false, 'message' => 'Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente.'));
}
?>