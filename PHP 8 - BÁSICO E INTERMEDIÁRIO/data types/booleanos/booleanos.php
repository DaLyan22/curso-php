<?php

//booleanos

$apresentar_nome = true;
$apresentar_idade = false;

$mostrar = TRUE; // é o mesmo que $mostrar = true;

//são usados majoritariamente em estruturas de controle de fluxo do código: ciclos(loops) e instruções condicionais

//veremos que podemos converter valores em booelanos
//tradicionalmente 0 = false e todos os outros valores = true

//podemos determinaar se uma variável é booleana ou não assim:

var_dump(is_bool($apresentar_idade));