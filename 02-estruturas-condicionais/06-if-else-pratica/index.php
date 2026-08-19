<?php
require __DIR__ ."/../../senac/senac.php";
senacClassName("Estruturas Condicionais - if, else, elseif");
?>

<?php senacClassSession("if -sozinho - prática", __LINE__);

$valorTotalDoCarrinho = 370.00;

$valorMinimoFreteGratis = 249.99;

if ($valorTotalDoCarrinho >= $valorMinimoFreteGratis){
    echo "<p>Você ganhou frete grátis na sua compra!</p>";
}


$numero = 5;

if ($numero % 2 === 0){
    echo "<p>0 número {$numero} é par!</P>";
}else{
    echo "<p>0 número {$numero} é ímpar!</p>";

}

$horarioDeChegada = 20;

if($horarioDeChegada >= 14 && $horarioDeChegada <= 22){
    echo "<p>Pode fazer check-in</p>";
}else{
    echo "<p>check-in está insdisponível</p>";
}

if ($tipoDeMoradia === "apartamento" && $tempoDisponivel === "pouco") {

    echo "<p>Você pode ter um peixe de estimação</p>";

}else if ($tipoDeMoradia === "apartamento" && $prefereSilencio === true) {

echo"<p>Você pode ter um gato de estimação</p>";

}else if ($tipoDeMoradia === "casa" && $tempoDisponivel === "muito"){
    echo "<p>Você pode ter um cachorro de estimação</p>";
}else{
    echo "<p>Você pode ter um hamster de estimação</p>";

}