<?php
require __DIR__ . '/../../_config/funcoes.php';

tituloPagina("08 - Requisição de arquivos");

/*
 * [ include ] https://php.net/manual/pt_BR/function.include.php
 * [ include_once ] https://php.net/manual/pt_BR/function.include-once.php
 */
CriarTitulo("include, include_once", __LINE__);

//include "file.php";
//echo "<p>Continuação do codigo</p>";

//include "header.php";
include __DIR__ . "/header.php";

$profile = new stdClass();
$profile->name = "Julio";
$profile->lastName = "Oliveira";
$profile->email = "julio@teste.com.br";

var_dump($profile);

include __DIR__ . "/profile.php";

$profile = new stdClass();
$profile->name = "Pedro";
$profile->lastName = "Silva";
$profile->email = "pedro@teste.com.br";

include_once __DIR__ . "/profile.php";

/*
 * [ require ] https://php.net/manual/pt_BR/function.require.php
 * [ require_once ] https://php.net/manual/pt_BR/function.require-once.php
 */
CriarTitulo("require, require_once", __LINE__);

//require "file.php";
//echo "<p>Continuação do codigo</p>";

require __DIR__ . "/config.php";
require_once __DIR__ . "/config.php";

echo "<h1>" . COURSE . "</h1>";