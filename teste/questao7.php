<?php
//Questão7 

$number1 = readline("Digite um numero: ");
$op = readline ("Digite uma operação ( operações permitidas -,+,*,/): ");
$number2 = readline ("Digite um numero: ");

function usuario($n, $ope, $n2){
if ($ope == "+") {
  $soma= $n + $n2;
  echo $n. "+". $n2. "=" . $soma."\n";}
  elseif ($ope == "-") {
 $soma = $n - $n2;
 echo $n. "-". $n2 . "=". $soma."\n";
}elseif ($ope == "*") {
  $soma = $n * $n2;
  echo $n. "*". $n2 . "=". $soma."\n";}
  elseif ($ope == "/") {
    $soma = $n /$n2;
    echo $n . "/". $n2. "=" . $soma."\n";
  } else {
    echo "Erro, insira uma operação permitida!"."\n";
  }
} usuario($number1, $op, $number2);
?>