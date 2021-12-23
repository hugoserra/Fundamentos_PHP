<?php


//Introdu��o a classes:

//Objetos: Classes instanciadas em uma variavel
//propriedade ou atributo: Caracteristicas individuais de cada Objeto
//metodos: Fun��es dentro de uma classe


class Humano_
{
  // propriedades e m�todos
}

class JogadorFutebol//conven��o de nome para classes
{
  // propriedades e m�todos
}

//o corpo de uma classe contem propriedades e metodos
//no PHP as propriedades tem um nivel d eacesso especificado
//como no exemplo mais a frente

class FiguraGeometrica
{
  public $largura, $altura;///////
  public $x;/////PROPRIEDADES/////
  public $y;//////////////////////

  public function nova_area($a,$b)///METODO///
  {
        return $a*$b;
  }


}//Class_FiguraGeometrica


//como utilizar o 'this'

class Humano
{

  public $nome = "Hugo";
  public $sobrenome = "Serra";

  public function nome_completo()
  {
        $nome = "teste";
        $sobrenome = "Carvalho"
        // $this->nome se refere a propriedade da classe. Ao nome "Hugo"
        //A variavel $nome = teste existe apenas dentro da function
        //$this->nome sempre s refere as propriedades da classe
        //no caso do sobrenome, ser� utilizado o "Carvalho", pois esta sem o prefixo $this->

        return "$this->nome $sobrenome";
  }//nome_completo

}//Class_Humano


//Acima foram utilizados metodos e popriedades publicas
//isto significa que, quando instanciarmos a classe Humano
//o objeto Humano, podera acessar as fun��es e variaveis publicas
//J� as propriedades e metodos privados, s� podem ser acessados de
//dentro da classe


//INSTANCIAR UMA CLASSE

$homem = new Humano(); //$homem � o objeto da classe humano, o prefixo 'new', significa que homem recebera uma copia da classe humano, instanciada na memopria


//Chamando uma fun��o dentro do objeto

echo $homem->nome_completo(); //Hugo Carvalho
// � de se reparar que o nome acima �  estatico
//ou seja, todas as instancias desta classe, ter�o o nome
//completo iguais a Hugo Carvalho.

//veremos abaixo como deixar esta situa��i dinamica
//com a utiliza��o da function constructor
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//CONSTRUCTOR'S

//O Constructor � um metodo especial dento de uma classe
//que � sempre executado automaticamente quando � criado um
//objeto a partir de uma classe. Este metodo � definido d euma forma
//especial, com __(dois underscores). S�o chamados metodos magicos
//porque tem uma execu��o especifica ou automatica associada.

class Humano2
{
    public $nome;
    public $sobrenome;

    function __construct($_nome, $_sobrenome)
    {
      $this->nome = $_nome;
      $this->sobrenome = $_sobrenome;
    }//__construct

    public function nome_completo()
    {
      return "$this->nome $this->sobrenome";
    }//nome_completo
}//Class_Humano2

class Humano3
{
    //esta classe tem o mesmo funcionamento da classe Humano2.
    //a fun��o contruct abaixo promove as variaveis nome e sobrenome
    //para propriedades, por possuirem um especificador de acesso junto (public)
    function __construct(public $nome, public $sobrenome)
    {
      $this->nome = $nome;
      $this->sobrenome = $sobrenome;
    }//__construct

    public function nome_completo()
    {
      return "$this->nome $this->sobrenome";
    }//nome_completo
}//Class_Humano2


$homem = new Humano2("Hugo", "Serra");
$mulher = new Humano2("Leia","Guimar�o")

echo $homem->nome_completo(); //"Hugo Serra"

echo $mulher->nome_completo(); //"Leia Guimar�o"


// Para classe que tem conbstrutor sem paarmetros, podemos
//instanciar assim:
$homem = new Humano();
//ou
$homem = new Humano;


//////////////////propriedades privadas como bom costume//////////////
//definir tipo para variavel privada utilizando classes e seus metodos
//Mecanismos de getters e setters

class Humano4
{
  private $idade;

  function set_idade($int_idade)
  {
      if(is_numeric($int_idade))
      {
        $this->idade = $int_idade;
      }//if

  }//function set_idade

  function get_idade()
  {

      return $this->idade;

  }//function get_idade

}//class_Humano4

//em Humano4, a propriedade idade s� pode assumir valores numericos
//por meio da fun��o set_idade
