<?php

////ISSET/////
//esta condiчуo permite verificar se uma variavel estс ou
//nуo definida. elas retarna verdadeiro se a variavel existe
//, e false se nуo existe

$a = 1;
if(isset($a))//true

//se $a for null, isset tambem retorna false




////EMPTY////
//Verifica se a variavel tem um valor vazio, null, 0, false ou string vazia
//e retorna true ou false

$b = 'joao';
if(empty($b))//false

$c = false;
if(empty($c))//true

$d = [];
if(empty($d))//true

$e = null;
if(empty($e))//true


////IS_NULL////
//verifica se a variavel щ estritamente nula, a variavel deve existir

$f = null;
if(is_null($f))//true

$g = 'joao';
if(is_null($g))//false


////UNSET///
//permite "destruir" uma variavel.

$h = 'joao';
unset($h); //desaloca da memoria

$h = null; //limpa a memoria, mas sem desalocar
