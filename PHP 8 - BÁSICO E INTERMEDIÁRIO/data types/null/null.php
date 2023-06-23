<?php

//NULL

//null é um tipo especial de dado
// representa uma variável sem valor definido ou valor equivalente a null

$valor1 = "aaaaaaa";
$valor2 = null;
echo "valor 1: $valor1" . '<br>';
echo "valor 2: $valor2" . '<br>';

echo '---------------------------------------------------' . '<br>';


var_dump($nao_existe);

echo '<br>';
echo '---------------------------------------------------' . '<br>';

$var = 100;
echo $var . '<br>';
unset($var);
var_dump($var);