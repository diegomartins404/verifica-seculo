<?php


function verificaSeculo($ano){
  $divisaointeira = intval($ano) % 100;
  // se são anos "redondos" (ex.: 1700, 1800, 2100) é só dividir por cem que obtém-se o século
  if  ($divisaointeira == 0){
    return intval($ano) / 100;
  } else { //se for ex.: 1937, 2017... faz-se a divisão por cem e depois é arredondado para cima
    return intval (ceil (intval ($ano) / 100));
  }
}

$ano = $_GET["ano"];
$seculo = verificaSeculo($ano);
if (!$seculo == ''){
  echo $seculo;
}
?> 
