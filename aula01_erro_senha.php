<?php
/* Evitar ataques de força bruta.
 * 1) Bloqueia conta após numero fixo de tentativas (ex: 3x).
 * 2) Mostrar o Captcha.
 **/
session_start();

if ( ! empty($_POST['email'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    if (isset($_SESSION['login_tentativas']) && $_SESSION['login_tentativas'] > 3) {
        echo "Seu acesso está bloqueado!";
    }
    else {
        if ($email == 'u1@u.com' && $senha == '123') {
            echo "ACESSO OK!";
            $_SESSION['login_tentativas'] = 0;
        }
        else {
            if ( ! isset($_SESSION['login_tentativas'])) {
                $_SESSION['login_tentativas'] = 1;
            }
            else {
                $_SESSION['login_tentativas']++;
            }
            echo "Senha errada! Tentativas: ".$_SESSION['login_tentativas'];
        }   
    }
    
    echo "<hr/>";
}

?>
<form method="POST">
    E-mail:<br/>
    <input type="email" name="email" /><br/><br/>
    
    Senha:<br/>
    <input type="password" name="senha" /><br/><br/>
    
    <input type="submit" value="Enviar" />
</form>