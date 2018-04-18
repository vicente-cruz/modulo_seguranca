<?php
/**
 * Duas formas:
 * 1) Varrer o DB inteiro (dando SELECT em todas as tabelas e guardando em arquivos)
 * 2) Usar recurso próprio do MySQL: 'mysqldump' (copiar caminho completo)
 *  usar função exec() ou system(). Executa um comando no Bash
 *  ex: exec("<caminho_do_mysqldump>/mysqldump -u <usuario> -p<senha> <nome_banco> > <arquivo>.sql")
 * 3) Configurar no CRON um horario para executar o script.
 */
try {
    exec("C:\xampp\mysql\bin\mysqldump -u root projeto_usuarios > db_backup.sql");
}
catch(Exception $e) {
    echo "[ERRO]: ".$e->getMessage();
    exit;
}

?>