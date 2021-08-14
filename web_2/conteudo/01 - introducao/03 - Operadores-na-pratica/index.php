<?php
require __DIR__ . '/../../_config/funcoes.php';

tituloPagina("03 - Operadores na prática");

/**
 * [Atribuição] https://www.php.net/manual/en/language.operators.php
 */

CriarTitulo("Atribuição", __LINE__);

$operatorA = 5;
$operators = [
 "a += 5" => ($operatorA += 5),
 "a -= 5" => ($operatorA -=5),
 "a *= 5" => ($operatorA *=5),
 "a /= 5" => ($operatorA /=5),
];

var_dump($operators);

$incrementA = 5;
$incrementB = 5;

$increments =[
    "pós-incremento" => $incrementA++,
    "res-incremento" => $incrementA,
    "pré-incremento" => ++$incrementA,
    "pós-decremento" => $incrementB--,
    "res-decremento" => $incrementB,
    "pré-decremento" => --$incrementB
];

var_dump($increments);





CriarTitulo("Comparação", __LINE__);
$comparationA = 5;
$comparationB = "5";
$comparationC = 10;


$comparation = [
    "a == b" => ($comparationA == $comparationB),
    "a === b" => ($comparationA === $comparationB),
    "a != b" => ($comparationA != $comparationB),
    "a !== b" => ($comparationA !== $comparationB),
    "a > c" => ($comparationA > $comparationC),
    "a < c" => ($comparationA < $comparationC),
    "a >= c" => ($comparationA >= $comparationC),
    "a <= c" => ($comparationA <= $comparationC),
    "a > b" => ($comparationA > $comparationB),    
];

var_dump($comparation);



CriarTitulo("Lógicos", __LINE__);
$logicA = true;
$logicB = false;

$logic = [
    "a && b" => ($logicA && $logicB),
    "a || b" => ($logicA || $logicB),
    "a" => ($logicA),
    "! a" => (!$logicA),
    "! b" => (!$logicB),
];

var_dump($logic);



CriarTitulo("Aritiméticos", __LINE__);

$calcA = 2;
$caldB = 3;

$calc = [
    "a + b" => ($calcA + $caldB),
    "a - b" => ($calcA - $caldB),
    "a * b" => ($calcA * $caldB),
    "a / b" => ($calcA / $caldB),
    "a % b" => ($calcA % $caldB),
    "a ** b" => ($calcA ** $caldB)
];
var_dump($calc);
