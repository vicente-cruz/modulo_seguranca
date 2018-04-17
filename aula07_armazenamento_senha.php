<?php
/**
 * Tipos de criptografia para armazenar senha:
 * 
 * MD5: Usado pelo Bonieky
 *  Caracteristica: irreversível.
 *  Problema: Um DB grande com várias palavras armazenadas em MD5.
 *  Ex: Dicionario gigante / Força bruta.
 * 
 * Recomendado pelo PHP: PASSWORD_HASH($senha,<TIPO_CRIPTOGRAFIA>)
 *  tipo_criptografia = <default | PASSWORD_BCRYPT (preferenciavel)> 
 *  Problema: funçãou única para PHP. No MySQL não funciona.
 */

//$senha_criptografada = password_hash('123456', PASSWORD_BCRYPT);
//$senha_criptografada = "$2y$10$/F2JFKIXgGSEEXfOl.oFVe9rFO3aC5x1O7r98CRG07f87ZK06x4nG";
//$senha_aberta = '123456';
//echo (password_verify($senha_aberta,$senha_criptografada) ? "Acertou!" : "Errou!");

//Em um sistema qualquer, sem PHP. Supor $pdo instanciada
$email = "u1@u.com";
$senha = "123456";

$query = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
$query->bindValue(":email",$email);
$query->execute();

if ($query->rowCount() > 0) {
    $usuario = $query->fetch();
    
    //AQUI busca a senha
    if (password_verify($senha,$dados['senha'])) {
        echo "Login correto!";
    }
    else {
        echo "Login incorreto!";
    }
}

?>