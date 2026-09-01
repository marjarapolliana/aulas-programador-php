<?php

function verificarMaioridade(int $anoNascimento){
    $idade = 2026 - $anoNascimento;

    if($idade < 18){
        return false;
    }else if ($idade >= 18){
        return true;
    }
}

if(verificarMaioridade(2005) === true){
    echo "<p>Você é MAIOR de idade!</p>";
}else{
    echo "<p>Você é MENOR de idade!</p>";
}

function calcularIdade(int $anoNascimento, string $nome = ""){
    $idade = 2026 - $anoNascimento;
    return $idade;
}

$idadeDaFabrícia = calcularIdade(1988, "Fabrícia");
echo "A Fabrícia tem {$idadeDaFabrícia} anos de idade";
echo calcularIdade(2011) . " anos de idade";


echo "Olá, Mundo";

function echo_p(string $string){
echo "<p>{$string}</p>";
}

echo_p("Olá, Mundo");
echo_p("A Fabrícia tem {$idadeDaFabrícia} anos de idade");
echo_p(calcularIdade(2011) . "anos de idade");