<?php
/**
 * 1) Abrir o php.ini
 * 2) Buscar por 'error_reporting' e setar como E_ALL
 *      ...
 *      error_reporting = E_ALL
 * 3) Se estiver em desenvolvimento, definir 'display_errors' como 'On'
 *      ...
 *      display_errors = On
 *      Obs: pode-se definir o valor desse parâmetro direto no script. Ex:
 *      <?php ini_set('display_errors','Off');
 * 4) Tanto em desenv. quanto em prod., definir 'log_errors' para 'On'.
 *      ...
 *      log_errors = On
 * 5) Definir o caminho de 'error_log' FORA DA PASTA PUBLIC! Ex:
 *      ...
 *      error_log = "C:\xampp\php\logs\error.log"
 */
?>