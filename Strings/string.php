<?php

#CONCATENACAO DE STRING

$string = "Eu"." Sou"." Muito"." Lindo!"; #O ponto liga uma string a outra

#"string = Eu Sou Muito Lindo!"

$string = "Ola ";
$string .= "Mundo!"; #Faz a contatencao com o valor j� existente na string

#string = "Ola Mundo!"

$x = "Quero";
$y = "Tomar";
$z = "Cafe";

$string = "$x $y $z"; #Aspas duplas interpretam os valores das variaveis (Parser)

#string = "Quero Tomar Cafe"

$string = '$s $y $z'; #Aspas simples consideram tudo como texto

#string = '$s $y $z'

$texto = <<<LABEL
    Este metodo � util para armazenar textos muito
    grandes, de varias linhas. Quando LABEL � escrito
    sem aspas simples, como neste exemplo. ha a interpretcao
    das variaveis (efeito de parser)
    Exemplo: $s, perceba que a cor da variavel mudou no editor
    de texto, pois esta sento interpretada
LABEL;


$texto = <<<'LABEL'
    Este metodo � util para armazenar textos muito
    grandes, de varias linhas. Quando LABEL � escrito
    com aspas simples, como neste exemplo.n�o ha a interpretcao
    das variaveis (efeito de parser).
    Exemplo: $s, perceba que a cor da variavel � a mesma do texto
    no editor de texto, pois n�o esta sendo interpretada
LABEL;
