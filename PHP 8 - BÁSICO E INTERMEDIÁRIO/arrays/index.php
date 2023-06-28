<?php

//ARRAYS -> uma váriavel com uma coleção de dados

$nomes1 = array("Júlia", "Amanda", "Helena");
//ou
$nomes2 = ["Júlia", "Amanda", "Helena"];

//podemos definir as nossas própias chaves do array

$nomes3 = [
    10 => "Júlia",
    20 => "Amanda",
    30 => "Helena"

];

//APRESENTAR ARRAYS ---------------------------------------------

//primeira forma
var_dump($nomes1); // não mudei o nomes1 ainda
echo '<br>'; //quebra de linha
$nomes1[1] = "Mariana"; //mudei o nomes1
var_dump($nomes1); //nomes1 mudado
echo '<br>'; //quebra de linha

//outra forma
echo '<pre>'; //deixa mais organizado - tag html
print_r($nomes1); //não apresenta o data type e deixa mais organizado
echo '</pre>';

//ADICIONAR ELEMENTOS ---------------------------------------

$nomes1[] = "Ana";
//ou
array_push($nomes1, "Rafaela", "Isabela");

echo '<br>';
echo '<pre>'; 
print_r($nomes1); 
echo '</pre>';

//REMOVER ELEMENTOS ---------------------------------------------

unset($nomes1[1]);

echo '<br>';
echo '<pre>'; 
print_r($nomes1); 
echo '</pre>';

//OUTROS

$nomes4 = [
  'ceo' => "joão",
  'adm' => "ana",
  'empregado' => "marcos",
];

echo '<br>';
echo '<pre>'; 
print_r($nomes4); 
echo '</pre>';