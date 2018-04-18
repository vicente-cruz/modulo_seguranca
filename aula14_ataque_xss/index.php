<?php
/**
 * Por meio de JS ou DB. Invasor insere código que executa no HTML.
 * 1) inserir <script>alert('Página Hackeada!')</script> no campo abaixo
 * 2) Chrome retornará página de erro com mensagem "ERR_BLOCKED_BY_XSS_AUDITOR"
 * 
 * Evitar:
 *  Usar a função 'htmlspecialchars()' ao mostrar o valor da variável
 */
?>
<form method="GET" action="busca.php">
    <input type="text" name="busca" />
    
    <input type="submit" Value="Pesquisar" />
</form>