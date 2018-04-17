<?php
/**
 * Listar configurações do PHP para encontrar pasta e arquivo php.ini:
 * Localizar o campo "Configuration File (php.ini) Path" e "Loaded Configuration File"
 */
//phpinfo();

/**
 * Abrir o php.ini, localizar o parametro 'session.use_cookie' e setar como 1
 * session.use_cookies = 1
 * 
 * Sugere-se mudar o valor de session.name de PHPSESSID para um aleatório.
 * session.name = PHPSESSID
 * 
 * Ativar "session.use_only_cookies" (descomentar e setar como 1)
 * Evita mudar o Session ID via GET
 *   http://www.meusite.com/index.php?PHPSESSID=dlfkjsdfa
 * 
 * Ativar 'session.cookie_httponly' para bloquear acesso a cookies via JS
 * session.cookie_httponly = 1
 * 
 * Ativar 'session.cookie_secure' para receber cookies apenas por HTTPS, SSH etc..
 * session.cookie_secure = 1
 */
?>