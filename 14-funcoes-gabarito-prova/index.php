<?php
function calcularValorEmEstoque(float $quantidade, float $precoUnitario){
   return $quantidade * $precoUnitario;
   
}

$resultado = calcularValorEmEstoque(10, 219.90);
echo $resultado;

function formatarValorGasto(float $valor){
   return "R$ " . number_format($valor, 2, ",", ",") . " reais";
}

echo formatarValorGasto(200);
echo formatarValorGasto(3500);

   
/* ---------------------------------------------------------------------
   QUESTÃO 3 — Biblioteca Municipal
   Calcula a multa por atraso na devolução de um livro.
   Os 3 primeiros dias são tolerados sem cobrança.
   Cada dia de atraso além disso custa R$ 1,00.
   --------------------------------------------------------------------- */
function calcularMulta(int $quantidadeDeDiasAtrasado){

const DIAS_TOLERADOS = 3;

if(quantidadeDeDiasAtrasado <= DIAS_TOLERADOS){
   return 0;
}

$diasCobrados = $quantidadeDeDiasAtrasado - DIAS_TOLERADOS;
$valorDaMulta = $diasCobrados * 1.00;

return $valorDaMulta;
}


/* ---------------------------------------------------------------------
   QUESTÃO 4 — Chamados de Manutenção
   Conta quantos chamados, dentro de um array de status,
   ainda estão como "pendente". Usa foreach e count().
   --------------------------------------------------------------------- */



/* ---------------------------------------------------------------------
   QUESTÃO 5 — Banco de Talentos de Egressos
   Calcula a pontuação de compatibilidade de um egresso com uma vaga,
   com base no nível de experiência, e um bônus opcional de certificação.

   Iniciante = 40 pontos | pleno = 70 pontos | sênior = 100 pontos
   com certificação relevante: +10 pontos (parâmetro opcional)
   --------------------------------------------------------------------- */

