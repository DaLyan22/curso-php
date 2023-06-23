<?php

//STRINGS

$nome1 = "Gabriel"; //pode conter variáveis dentro
$nome2 = 'Arthur'; //não pode conter variáveis dentro

//podemos melhorar a leitura assim

$mostrar = "O meu nome é {$nome1} e não {$nome2}.";
echo $mostrar;

//concatenação
echo '<br>';

$nome_completo =  $nome1 . ' ' . $nome2;
echo $nome_completo;

//Outros
echo '<br>';
echo $nome1[0]; //G
echo '<br>';
echo $nome1[-1]; //L


$nome2[3] = 'd';
echo '<br>';
echo $nome2;
echo '<br>';
// <<<TEXT

$texto1 = <<<'TEXT'

frase 1
frase 2
frase 3
TEXT;
echo $texto1; // sem quebra de linhas

echo '<br>';
echo nl2br($texto1); //new line to break

//funcionalidades str
echo '<br>';
echo strlen($texto1) . '<br>'; //lenght
echo strtoupper($texto1) . '<br>'; //capslock
echo str_contains($texto1, 'frase') . '<br>';