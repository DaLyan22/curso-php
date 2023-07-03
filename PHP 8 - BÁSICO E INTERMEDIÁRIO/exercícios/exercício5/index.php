<?php

//mostre o resultado de um perímetro em metros de um quadrado com lado de 3.2 metros

$lado = 3.2;
$perímetro = $lado * 4;

echo '<pre>';

echo "Resultado: $perímetro m"; //primeira opção
echo '<br>';
echo 'Resultado: ' . ($lado * 4) . ' m'; //segunda opção

echo '</pre>';