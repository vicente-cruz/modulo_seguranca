<?php
if ( ! empty($_FILES['foto']['tmp_name'])) {
    // Tentativa 0: A mais falha. Pega o arquivo e joga direto para a pasta.
    // Falha: pode-se enviar um script.php renomeado como script.png
//    move_uploaded_file($_FILES['foto']['tmp_name'], 'fotos/'.$_FILES['foto']['name']);
//    echo "Foto carregada com sucesso!<br/>";
    
    // Tentativa 1: Pega a extensao do nome do arquivo.
    // Obs: Falha pois pode-se enviar um script.php renomeado como script.png
//    $ext_array = explode('.', $_FILES['foto']['name']);
//    $ext = end($ext_array);
//    echo ($ext == 'png' ? "Imagem" : "Nao Imagem");

    // Tentativa 2: Pega pelo $_FILES['foto']['type']
    // Ex1: Verifica se é imagem
//    echo ($_FILES['foto']['type'] == 'image/png' ? "Imagem" : "Nao Imagem");
    // Ex2: Verifica se é um zip
//    echo ($_FILES['foto']['type'] == 'application/zip' ? "Arquivo ZIP" : "Não ZIP");
    
    // Definitivo para imagens.png
    if ($_FILES['foto']['type'] == 'image/png') {
        $nome = md5(rand(0,9999).time()).".png";
        move_uploaded_file($_FILES['foto']['tmp_name'], 'fotos/'.$nome);
    }
    
    echo "Foto carregada com sucesso!";
}
?>