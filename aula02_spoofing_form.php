<?php
//Colocar no servidor:
//  http://benim.daer.rs.gov.br/cursophp/cursophp_benin/modulo_seguranca/aula02_csrf_token.php
//session_start();
//
//if ( ! isset($_SESSION['csrf_token'])) {
//    $_SESSION['csrf_token'] = md5(time().rand(0,999));
//}
//
//if ( ! empty($_POST['email'])) {
//    $email = $_POST['email'];
//    $senha = $_POST['senha'];
//    
//    if ($_SESSION['csrf_token'] == $_POST['csrf_token']) {
//        if ($email = 'u1@u.com' && $senha = '123') {
//            echo "Acesso OK!";
//        }
//        else {
//            echo "Usuário e/ou senha errado!";
//        }
//    }
//    else {
//        echo "Recebimento inválido: dados enviados de outro site (Cross-site)";
//    }
//    
//    echo "<hr/>";
//}

?>

<form method="POST" action="http://benim.daer.rs.gov.br/cursophp/cursophp_benin/modulo_seguranca/aula02_csrf_token.php">
    E-mail:<br/>
    <input type="email" name="email" /><br/><br/>
    
    Senha:<br/>
    <input type="password" name="senha" /><br/><br/>
    
    <input type="submit" value="Enviar" />
</form>
