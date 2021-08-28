<?php
require __DIR__ . '/../../_config/funcoes.php';

tituloPagina("09 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
CriarTitulo("functions", __LINE__);

require __DIR__ ."/functions.php";

var_dump(functionName("Pearl Jam", "AC/DC", "Alter Bridge"));
var_dump(functionName("Nome 1", "Nome 2", "Nome 3"));

var_dump(optionArgs("Teste 01"));
var_dump(optionArgs("Teste 01", "Teste 02"));
var_dump(optionArgs("Teste 01", "Teste 02", "Teste 03"));


/*
 * [ global access ] global $var
 */
CriarTitulo("global access", __LINE__);

$weigth = 70;
$height = 1.70;

echo calcImc();

/*
 * [ static arguments ] static $var
 */
CriarTitulo("static arguments", __LINE__);

$pay = payTotal(200);
$pay = payTotal(500);
$pay = payTotal(500);

echo $pay;


/*
 * [ dinamic arguments ] get_args | num_args
 */
CriarTitulo("dinamic arguments", __LINE__);

var_dump(Alunos("Martins", "Gabriel Curto", "Victor", "Rubens"));
