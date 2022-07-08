<?php

//Questão01
$name = readline ("Digite seu nome: "); 
$salarioA = readline (" Digite seu salário: ");

if ($salarioA <=1500) {
  $abono =$salarioA * 0.1;
  $sal= $salarioA + $abono; 
  echo "Nome:" . $name. "\n";
  echo "Salario antigo:" . $salarioA . "\n";
  echo "Abono: 10%". "\n";
  echo "Salario com abono" . $sal;}
  else {
    $abono = $salarioA * 0.05;
    $sal= $salarioA + $abono; 
    echo "Nome:" . $name. "\n";
    echo "Salario antigo:" . $salarioA . "\n";
    echo "Abono 5%". "\n";
    echo "Salario com abono" . $sal. "\n";
  }
//Questão2
$nome= readline ("Digite seu nome: ");
$idade = readline ("Digite sua idade : ");
$nasc = 2022 - $idade;
Echo "Olá $nome, " . "sua idade é  $idade ". "e seu ano de nascimento é $nasc". "\n";

//Questão3
$hora = readline ("Digite o horário: ");
if ($hora<12) {
  echo "manhã"."\n";
}elseif ($hora >= 12 && $hora < 18) {
    echo " Tarde"."\n";
}else {
  echo "Noite"."\n";}

//Questão4
$continuar = true;
do {
  $num1 = readline("Numero 1:");
  $num2 = readline("Numero 2:");
  if ($num1 > $num2) {
    echo "Maior: {$num1}"."\n";
    echo "\nMenor: {$num2}"."\n";
   } else {
    echo "Maior: {$num2}"."\n";
    echo "\nMenor: {$num1}"."\n";
  }
  $respsta = readline ("\nDeseja continuar? [S/x]");
  if ($respsta == "x"."\n") {
    $continuar = false;
  }
} while ($continuar);



//Questão5
$number = readline ("Digite um numero Positivo: ");
for ($i=1; $i < 11; $i++) { 
 echo "$i x $number = " . $i*$number. "\n";
}
 
//Questão6

 $carac = readline ("Digite um numero: ");
function numeral($n)
{ 
  if ($n >0 ) {
  echo "P"."\n";
  }
 else {
 echo "N"."\n";
}}
numeral($carac);

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