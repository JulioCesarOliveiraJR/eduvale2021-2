<?php
require __DIR__ . '/../../_config/funcoes.php';
tituloPagina("02 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
CriarTitulo("Variáveis", __LINE__);

$userFirstName = "Julio";
$userLastName = "Oliveira";
echo "<h3>{$userFirstName} {$userLastName}</h3>";

$user_first_name = "Julio 2";
$user_last_name = "Oliveira 2";
echo "<h3>{$user_first_name} {$user_last_name}</h3>";

$userAge = "25";
echo "<h3>{$user_first_name} {$user_last_name} <span class='tag'>tem {$userAge} anos</span></h3>";

/* Variavel da Variavel */
$faculdade = "Eduvale";
$$faculdade = "WEBII";
$$$faculdade = "variaveis";

echo "<h3>Faculdade: {$faculdade} - Curso: {$Eduvale} - Aula: {$WEBII}</h3>";

$calcA = 10;
$calcB = 20;

//$calcB = $calcA;
$calcB = &$calcA;

$calcB = 36;

var_dump([
    "a" => $calcA,
    "b" => $calcB
]);

/**
 * [ tipo boleano ] true | false
 */

CriarTitulo("Tipo boleano", __LINE__);
$true = true;
$false = false;

var_dump($true, $false);

$bestAge = ($userAge > 20);

var_dump($bestAge);

$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;

var_dump($a, $b, $c, $d, $e);

if($a || $b || $c || $d || $e){
    var_dump(true);
}else{
    var_dump(false);
}


/**
 * [ tipo callback ] call | closure
 */

CriarTitulo("Tipo callback", __LINE__);

$code = "<article><h1>Chamada de callback - Call User Function</h1></article>";
$codeClear = call_user_func("strip_tags", $code);

//var_dump($code, $codeClear);

$codeMore = function ($code){
    var_dump($code);
};

$exibirIdade = function ($anoNascimento){
    echo "<h3 class='tag'>" . 2021 - $anoNascimento . "</h3>";
};

$codeMore("PHP é muito bom :D");

$exibirIdade(1995);

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */

CriarTitulo("Outros tipos", __LINE__);

$string = "Olá Mundo!";
$int = 25;
$array = [$string];
$float = 25.55;
$bool = true;
$null = null;
$obj = new StdClass();
$obj->hello = $string;

var_dump([
    $string,
    $array,
    $int,
    $obj,
    $null,
    $float,
    $bool
]);