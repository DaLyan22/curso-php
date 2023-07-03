<?php

//retirar do array valor específico

$nomes = ["Júlia", "Gabriel", "Tomás"];

unset($nomes[2]); //remove especificamente o segundo valor

echo '<pre>'; //deixa mais organizado - tag html
print_r($nomes); //não apresenta o data type e deixa mais organizado
echo '</pre>';

//existem muitas funções relacionadas a arrays, com o tempo detalharei mais outras