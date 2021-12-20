<?php

$int = [1,2,3,4,5,6];
$string = ["eu","sou","legal"];

$dados = [10 => 2, 20 => 32, 30 => 43];//neste caso as chaves não saõ 0,1,2 mas 10,20,30

//se adicionarmos um novo elemento ao final do array dados
//o elemento tera chave = ultima chave + 1, 30+1

$dados[] = 54; //$dados[31] = 54;

//arrays assosiativos

$dados[
  "nome" => "Hugo",
  "email" => "hugo@gmail.com",
  "telefone" => "99999999"
];


//arrays mistos

$dados [
  "nome" => "Hugo",
  19 => "dia"
];

//Arrays multidimensionais

$dados[
  [1,2,3,4,5],
  [2,4,6,8,10],
  [4,8,12,16,20],
  [6,12,18,24,30]
]
//para apresentar o numero '16'
echo $dados[2][3];//=16

//Arrays multidimensionais assosiativos, e mistos

$dados[
  "Hugo" => ["idade" => 19,"data de nascimento" => "19/04/2002"],
  "Bruno" => ["idade" => 24,"data de nascimento" => "19/01/1998"],
  "Luan" => ["idade" => 17,"data de nascimento" => "19/04/2004"],
]

//para apresentar a idade de Hugo

echo $dados["Hugo"]["idade"]; //19
