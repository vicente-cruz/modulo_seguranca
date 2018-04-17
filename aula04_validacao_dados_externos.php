<?php
/**
 * filter_var - Dados já recebidos e atribuídos a variáveis
 * filter_input - Dados oriundos de um 'form'
 * filter_list - Todos os filtros usáveis
 * 
 * Constantes enviadas como segundo parametro das funcoes acima: 
 * FILTER_VALIDADE_INT: variável é 'inteiro'?
 * FILTER_VALIDADE_BOOLEAN: é booleano?
 * FILTER_VALIDADE_FLOAT:
 * FILTER_VALIDADE_URL:
 * FILTER_VALIDADE_EMAIL:
 * FILTER_VALIDADE_REGEX:
 * FILTER_VALIDADE_IP:
 * FILTER_VALIDADE_ENCODED: p/caracteres especiais são 
 * FILTER_VALIDADE_SPECIAL_CHARS: converte html em string
 * 
 * Sanitize: Conserta determinado texto
 * FILTER_SANITIZE_STRING: Tira o que precisa tirar para formar a string (default)
 */

// Validando e-mail
//$email = 'u1@u.com';
//echo (filter_var($email, FILTER_VALIDATE_EMAIL) ? "E-mail correto" : "E-mail incorreto")."<br/>";
//$email = "u1@u";
//echo (filter_var($email, FILTER_VALIDATE_EMAIL) ? "E-mail correto" : "E-mail incorreto")."<br/>";

// Validando inteiro:
//$var = 123;
//echo (filter_var($var, FILTER_VALIDATE_INT) ? "Numero INTEIRO" : "Numero não inteiro")."<br/>";
//$var = "123";
//echo (filter_var($var, FILTER_VALIDATE_INT) ? "Numero INTEIRO" : "Numero não inteiro")."<br/>";
//$var = "skdfjsdaklçfaj";
//echo (filter_var($var, FILTER_VALIDATE_INT) ? "Numero INTEIRO" : "Numero não inteiro")."<br/>";

// Validando SPECIAL_CHARS
//$html = "Meu nome é <strong><u>Vicente</u></strong>";
//echo $html."<br/>";
//$texto = filter_var($html, FILTER_SANITIZE_SPECIAL_CHARS);
//echo $texto."<br/>";
//echo "Sem tags html:".strip_tags($html)."<br/>";

// FILTER INPUT: Igual acima, mas para dados enviados via GET ou POST
// Pegando variáveis do GET
//$nome = filter_input(INPUT_GET,'nome');
//$email = filter_input(INPUT_GET,'email', FILTER_VALIDATE_EMAIL);
//echo "Variáveis pegas via FILTER_INPUT:".$nome."-".$email."<br/>";

$prioridade = filter_input(
        INPUT_POST,
        "prioridade",
        FILTER_VALIDATE_INT,
        array(
            'options' => array(
                'min_range' => 1,
                'max_range' => 4,
                'default' => 1
            )
        )
);
echo "Prioridade selecionada: ".$prioridade;
?>

<form method="POST">
    <select name="prioridade">
        <option value="1">Prioridade 1</option>
        <option value="2">Prioridade 2</option>
        <option value="3">Prioridade 3</option>
        <option value="4">Prioridade 4</option>
    </select>
    
    <input type="submit" value="Enviar" />
</form>