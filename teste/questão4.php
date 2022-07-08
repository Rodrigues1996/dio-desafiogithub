<?php 

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
    echo "\nMenor: {$num1}"."\n";
}
$resposta = readline ("\nDeseja continuar? [S/x]");
if ($resposta == "x"."\n") {
  $continuar = false;
}
} while ($continuar);

    ?>