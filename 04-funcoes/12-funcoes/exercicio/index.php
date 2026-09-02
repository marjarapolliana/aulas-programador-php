<?php

$comissao = 20000 * 0.1;

echo "R$ "  .  number_format($comissao, 2, ",", ".");

// R$ 152,00
// R$ 1.152,00



$nota1 = 1;0
$nota2 = 7;
$nota3 = 5;
$nota4 = 9.5;
$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

function calcularMedia(float $nota1, float $nota2, float $nota3, float $nota4){
    return ($nota1 + $nota2 + $nota3 + $nota4) / 4;
}

$mediaDaEmily = calcularMedia (10, 7, 5, 9.5);
$mediaDoRyan = calcularMedia (8, 7, 5.6, 6.5);
mediaDoMiguel = calcularMedia (10, 4, 6.5, 10);

echo "Media da Emily: "  . number_format($mediaDaEmily, 1, ".");






$notasDaEmily = [
    10, 10, 10, 10, 10
];

function calculamedia (array $notas) {

$soma = 0;
foreach($notas as $nota){
    $soma = soma + $nota;

}

$media = $soma / count ($notas);
return $media;

}
echo "<br>";
echo calculamedia($notasDaEmily);
