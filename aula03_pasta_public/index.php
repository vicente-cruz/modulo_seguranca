<?php
require 'config.php';
require 'classes/Carro.php';

$carro = new Carro();
echo $carro->andar();
?>