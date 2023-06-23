<?php

//DATATYPES = TIPOS DE DADOS
// no php as variáveis não são tipadas, isso vai ser mais complexo e pode gerar erros


// DADOS ESCALARES--------------------------------------------------------------------

//booleanos = aceita true ou false
$apresentar_dados = true;

//int = valores inteiros
$valor = 14;

//float = valores flutuantes ( com casas decimais)
$float = 14.01;

//string (letras, palavras, frases, textos...)
$nome = "Gabriel";
$letra = "A";
$frase = "Estou aprendendo a progamar";

// -----------------------------------------------------------------------------------

echo $apresentar_dados . '<br>'; //caso específico dos booleanos (1 e nada)

echo '-------------------' . '<br>';
//apresentar tipo das variáveis
echo gettype($nome) . '<br>';
echo gettype($valor) . '<br>';
echo gettype($float) . '<br>';
echo gettype($apresentar_dados) . '<br>';

echo '-------------------' . '<br>';
//apresentar dados
var_dump($nome);
echo '<br>';
var_dump($valor);
echo '<br>';
var_dump($float);
echo '<br>';
var_dump($apresentar_dados);
