<?php
require __DIR__ . '/../../_config/funcoes.php';

tituloPagina("01 - Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
CriarTitulo("strings e multibyte", __LINE__);

$string = "O último show do AC/DC foi incrível!";
/* O PHP é uma linguagem desenvolvida em ingles - Lá não tem acentuações nas palavras
por isso devemos tomar cuidado com as funçoes de manipulação de string.
Devido a isso que temos as diferenças entre string e multibyte. */

var_dump([
    "string" => $string, //Degubando isso, veremos que temos uma string com 38 de tamanho
    "strlen" => strlen($string), // Usandoa a função strlen - Que retorna o tamanho, vaeremos que temos tamanho 38
    "mb_strlen" => mb_strlen($string), //Se a gente contar, não tem 38, mas sim 36 (por causa dos acentos)
    /* para entender um pouco melhor, usando outras funções */
    "substr" => substr($string, "9"), //Quando tento retornar uma parte da string a partir de uma posicao
    "mb_substr" => mb_substr($string, "9"), //A mesma coisa aqui, mas contando UM caracter só quando tem acentos
    /*Outro Exemplo */
    "strtoupper" => strtoupper($string), //Tentando deixar todas as letras maiusculas (acento dando problema)
    "mb_strtoupper" => mb_strtoupper($string), //com o multibyte corrigimos os problemas de acentuação
]);


/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
CriarTitulo("conversão de caixa", __LINE__);

$mbString = $string;
/*Como vimos no topico acima, o correto para a nossa linguagem é usando o mb_ para manipulação das string.
Para manipulação de caixa das string temos as seguintes funções:*/
var_dump([
    "mb_strtoupper" => mb_strtoupper($mbString), //Deixará todas as letras em maiuscula
    "mb_strtolower" => mb_strtolower($mbString), // Deixará todas as letras em minuscula
    /*e posso utilizar uma função de conversão, onde eu passo como parametro a conversão que quero*/
    "mb_convert_case UPPER" => mb_convert_case($mbString, MB_CASE_UPPER), //Chamo a função mb_convert_case, passo a string e passo o tipo (nesse caso tudo maiusculo)
    "mb_convert_case LOWER" => mb_convert_case($mbString, MB_CASE_LOWER), // Mesma coisa, mas passando o parametro de tudo minusculo
    "mb_convert_case TITLE" => mb_convert_case($mbString, MB_CASE_TITLE), // MB_CASE_TITLE vai deixar cada letra de cada palavra em Maiuscula 

    /*Observações: MB_CASE_UPPER, MB_CASE_LOWER, MB_CASE_TITLE são CONSTANTES DO PHP
]);


/**
 * [ substituição ] multibyte and replace
 */
CriarTitulo("substituição", __LINE__);

/* Aqui veremos algumas funções para substituição nas string
Isso vai nos ajudar quando precisamos validar um CPF.. encontrar uma ocorrencia */

$mbReplace = $mbString . " Fui, iria novamente, e foi épico!";

var_dump([
    "mb_strlen" => mb_strlen($mbReplace), //Tamanho da String
    "mb_strpos" => mb_strpos($mbReplace, ", "), // Vai localizar onde se encontra um determinado valor na string (a 1º ocorrencia)
    "mb_strrpos" => mb_strrpos($mbReplace, ", "),// Vai localizar onde se encontra um determinado valor na string (a Ultima ocorrencia)
    "mb_substr" => mb_substr($mbReplace, 40 + 2, 14), // Pegar um pedaço da string, começando em 40 +2 até 14 caracteres
    "mb_strstr" => mb_strstr($mbReplace, ", ", true), //pega um pedaço da string, só que não preciso passar a quantidade e sim o valor (",")
    //O ultimo parametro serve para indicar qual parte vc quer a partir do ponteiro (",") true para antes do ponteiro. false para depois do ponteiro
    "mb_strrchr" => mb_strrchr($mbReplace, ", ", true) //a msm coisa do de cima, mas pegando a ULTIMA ocorrencia do ponteiro
]);


//Substituição 

$mbStrReplace = $string;

echo "<p>", $mbStrReplace, "</p>"; // Exemplo da string antes de substituir algo
echo "<p>", str_replace("AC/DC", "Nirvana", $mbStrReplace), "</p>"; //Procuro AC/DC e vou trocar por Nirvana, na string Replace
echo "<p>", str_replace(["AC/DC", "eu fui", "último"], "Nirvana", $mbStrReplace), "</p>"; // POsso passar mais de um valor para ser encontra e trocado
echo "<p>", str_replace(["AC/DC", "incrível"], ["Nirvana", "ÉPICOOO!!"], $mbStrReplace), "</p>"; // Posso passar mais de um valor para trocar

//Observações: Respeitas as ordens da chave 


/* Criação de um template simples de artigo */
// <<<ROCK é apenas um delimitador, poderia ser quaquer palavra, desde que tudo maiusculo, sem espaço e sem caracter especial
$article = <<<ROCK 
   <article>
      <h3>event</h3>
      <p>desc</p>
   </article>
ROCK;

/* Crie um array formado com as chaves iguais a do meu template*/
$articleData = [
    "event" => "Rock in Rio",
    "desc" => $mbReplace
];

/*Mandei procurar as CHAVES (KEY) , que vou substituir pelos VALORES (values), no meu template*/
echo str_replace(array_keys($articleData), array_values($articleData), $article);


/**
 * [ parse string ] parse_str | mb_parse_str
 */
CriarTitulo("parse string", __LINE__);

// Serve para a gente interpretar alguma requisição HTTP.. a interpretação quando a gente receber dados de um API em formato de URL


//Exemplo, vamos supor que temos uma requisão de alguém tentando fazer o cadastro de login e ele passou esses dados na URL (name e email)
$endPoint = "name=Julio&email=jcjunior92.jj@gmail.com";

//Ao utilizar essa função, a segunda variavel ainda não existe, mas usando essa função cria essa variavel com os valores parciais da primeira variavel

mb_parse_str($endPoint, $parseEndPoint);

var_dump([
    $endPoint,
    $parseEndPoint,
    (object)$parseEndPoint // Aqui só para vocês verem que podemos tranquilamente transformar os dados em um objeto e podemos trabalhar com orientação a obejtos de boa
]);