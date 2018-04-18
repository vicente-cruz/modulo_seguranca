<?php
// PARA SITES ANTIGOS, NÃO MVC
// Poderia se fazer: www.meusite.com/index.php?p=../sobre
// Ou ainda: www.meusite.com/index.php?p=http://www.meusite.com/scriptmau.php

// 1: desabilitar os parametros allow_url_fopen e allow_url_include no php.ini
// allow_url_fopen = Off ou ;allow_url_fopen = Off
// allow_url_include = Off ou ;allow_url_include = Off
require "header.php";

// Correcao 1
//if ( ! empty($_GET['p'])) {
//    if (file_exists('paginas/'.$pagina.'.php')) {
//        require 'paginas/'.$_GET['p'].'.php';
//    }
//    else {
//        require 'paginas/home.php';
//    }
//}
//else {
//    require 'paginas/home.php';
//}

// Correcao 2:
$p = 'home';
if ( ! empty($_GET['p'])) {
    $pagina = $_GET['p'];
    // Se não existir o ponto na pagina
    if (strpos($pagina, '.') === FALSE) {
        if (file_exists('paginas/'.$pagina.'.php')) {
            $p = $pagina;
        }
    }
}
require 'paginas/'.$p.'.php';

require "footer.php";
?>