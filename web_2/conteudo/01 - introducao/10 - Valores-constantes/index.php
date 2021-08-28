<?php
require __DIR__ . '/../../_config/funcoes.php';

tituloPagina("10 - Constantes e constantes mágicas");

/*
 * [ constantes ] https://php.net/manual/pt_BR/language.constants.php
 */
CriarTitulo("constantes", __LINE__);

define("COURSE" , "Aplicações para WEB II");   
const AUTHOR = "Julio Cesar";


$formation = true;
if ($formation) {
    define("COURSE_TYPE", "Formado");
}else{
    define("COURSE_TYPE", "Cursando");
}

echo "<p>COURSE AUTHOR COURSE_TYPE</p>";
echo "<p>{COURSE} {AUTHOR} {COURSE_TYPE}</p>";
echo "<p>", COURSE , " - Com ", AUTHOR, " - " , COURSE_TYPE, "</p>"; 
echo "<p>" . COURSE . " - Com " . AUTHOR . " - " . COURSE_TYPE . "</p>"; 

class Config
{
    const USER  = "root";
    const HOST = "localhost";
}

echo "<p>", Config::HOST, "</p>";
echo "<p>", Config::USER, "</p>";

//var_dump(get_defined_constants(true)["user"]);

/*
 * [ constantes mágicas ] https://php.net/manual/pt_BR/language.constants.predefined.php
 */
CriarTitulo("constantes mágicas", __LINE__);

var_dump([
    "Linha no codigo" => __LINE__,
    "Arquivo" => __FILE__,
    "Diretorio" => __DIR__,
    "Funcao" => __FUNCTION__
]);