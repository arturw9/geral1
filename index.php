<?php

//Variavel //Concatenação
$nome = 'Artur';

// //Comparacao
$idade = '26';
if($idade == 26){
    echo 'Verdadeiro';
} else{
    echo 'Falso';
}

//looping
for($i =0; $i < 10; $i++){
    echo $i;
    echo '<hr>';
}

$i = 0;
while($i < 10)
{
    echo $i;
    echo '<br>';
    $i++;
}

//Funcao
printNumero(30);
echo '<br>';
printNumero('Artur');
function printNumero($n){
    echo $n;
}

// Classe
class Pessoa{
    public $nome;
    public $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function printNomeEIdade(){
        echo $this->nome;
        echo '<br>';
        echo $this->idade;
    }

}

$pessoa = new Pessoa('Artur', '23');

$pessoa->printNomeEIdade();
echo '<br>';
$pessoa = new Pessoa('Maria', '59');

$pessoa->printNomeEIdade();

//Array
$arr = ['Artur', 'Maria', 'Joao'];

echo $arr[0];