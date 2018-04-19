<?php
// Ex: sistema de login
// Inserir ' OR TRUE OR ' no campo email e/ou senha
// Inserir ' OR 1;DELETE FROM usuarios WHERE id=3 AND '1

// Protecao 1: addslashes
$email = filter_input(INPUT_POST,'email');
$senha = filter_input(INPUT_POST,'senha');

// Protecao 2: Usar PDO Statement (prepare() e bindValue())

$pdo = new PDO('mysql:dbname=projeto_usuarios;host=localhost','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
$query = $pdo->prepare($sql);
$query->bindValue(":email",$email);
$query->bindValue(":senha",md5($senha));
$query->execute();

if ($query->rowCount() > 0) {
    echo "Usuario logado!<br/>";
}
else {
    echo "Email e/ou senha errado!<br/>";
}
?>