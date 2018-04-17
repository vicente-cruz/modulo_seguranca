<?php
/**
 * Instruções p/ executar session hijacking:
 * 0) Instalar a extensão do Chrome: "Cookie Inspector"
 * 1) Acessar esse script no Chrome no modo normal e ver o "valor imprimido"
 * 2) Abrir aba anônima no Chrome, acessar esse script e ver o "novo valor gerado"
 * 3) Apertar F12 -> aba Cookies -> Copiar o valor de PHPSESSID.
 * 4) Voltar para a aba normal -> Apertar F12 -> aba Cookies -> Colar o valor de PHPSESSID e apertar em Submit.
 * 5) Notar que o valor na aba normal é o mesmo da aba anônima.
 */
// Instalar extensao do Chrome: "Cookie Inspector"
session_start();

if (empty($_SESSION['dono'])) {
    $_SESSION['dono'] = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
}

$token = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
if ($_SESSION['dono'] != $token) {
    echo "SESSÃO SEQUESTRADA!<br/>";
    exit;
}

// Evitando o hijacking
//if (empty($_SESSION['numero'])) {
//    $_SESSION['numero'] = rand(0,99);
//}

print_r($_SESSION);


?>