<?php
/**
 * Em hospedagens de site. Hostgator, Hostdime, locaweb, etc.
 * Caso haja invasão ao servidor, evitar danos maiores desabilitando certos parametros.
 * 1) Abrir o php.ini
 * 2) Definir o parametro 'disable_functions' para nao executar certas funcoes
 *  ...
 *  disable_functions = exec,shell_exec,system (unlink? melhor não...)
 * 3) Definir o parametro 'disable_classes' para nao instanciar certas classes
 *  ...
 *  disable_classes = Directory,DirectoryIterator
 */

?>