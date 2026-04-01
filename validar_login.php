<?php
// Recebe os dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Simulação de usuário (fixo só para teste)
$email_correto = "admin@email.com";
$senha_correta = "1234";

// Verifica login
if ($email == $email_correto && $senha == $senha_correta) {
    echo "Login realizado com sucesso!";
} else {
    echo "Email ou senha incorretos!";
}
?>
