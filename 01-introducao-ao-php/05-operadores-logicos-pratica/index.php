<?php

require __DIR__ . "/../../senac/senac.php";
senacClassName("Operadores Lógicos - Práticas");
?>

<?php senacClassSession("Operadores lógicos - prática", __LINE__);

$idade = 38;
$temCarteira = false;

var_dump($idade >= 18 && $temCarteira === true);

$nota = 5;
$presencaMinima = true;

var_dump($nota >= 7 && $presencaMinima === true);

senacClassSession("Operadores lógicos - práticas ||", __LINE__);

$mesAniversario = false;
$temCupom = true;

var_dump($mesAniversario === true || $temCupom === true);


