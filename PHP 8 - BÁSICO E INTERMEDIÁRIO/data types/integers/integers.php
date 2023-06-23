<?php

//INTEGERS

//são valores inteiros -> sem casa decimal

$valor1 = 32;
$valor2 = 0;
$valor3 = -213;

//em sistemas de 32 e 64 bits temos limites máximos e mínimos diferentes 

//podemos ver os limites utlizando constantes nativas do php

echo PHP_INT_MAX . '<br>';
echo PHP_INT_MIN . '<br>';

//conversões de string para inteiros

echo (int)'25' . '<br>'; //25
echo (int)'25teste' . '<br>'; //25
echo (int) 'teste' . '<br>'; //0

//podemos definir valores inteiros também dessa forma:
$outro_valor = 1_500_000;
echo $outro_valor;
