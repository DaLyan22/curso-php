<?php

//Different of variables, contants have values that can't be changeds

//Define a constant
define('nome', 'valor');

//constants are regulary defined using capital letters
define('TAXA_FIXA', 10);
define('APRESENTAR_DADOS', false);

//Present a constant value
echo TAXA_FIXA; //10

//use a constant value
$preço_inicial = 500;
$preço_final = $preço_inicial + TAXA_FIXA;
echo $preço_final;

