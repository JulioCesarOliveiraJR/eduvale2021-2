<?php
require __DIR__ . '/../../_config/funcoes.php';
tituloPagina("04 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
CriarTitulo("index array", __LINE__);
$arrA = array(1,2,3);
$arrA = [1,2,3,4];

var_dump($arrA);

$arrayIndex = [
'Brian',
'Angus',
'Malcom'
];

var_dump($arrayIndex);

$arrayIndex[] = 'Cliff';
$arrayIndex[] = 'Phil';


var_dump($arrayIndex);

/**
 * [ associative array ] "key" => "value"
 */
CriarTitulo("associative array", __LINE__);

$arrayAssoc = [
    "vocal" => "Brian",
    "solo_guitar" => "Angus",
    "base_guitar" => "Malcom",
    "bass_guitar" => "Cliff"
];

$arrayAssoc["drums"] = "Phil";
$arrayAssoc["rock_band"] = "AC/DC";

var_dump($arrayAssoc);


/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
CriarTitulo("multidimensional array", __LINE__);

$alunos = ["José", "Pedro"];
$professores = ["Julio", "Roger"];

$eduvale = [
    "Alunos" => $alunos,
    "Professores" => $professores
];

var_dump($eduvale);


/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
CriarTitulo("array access", __LINE__);

$acdc = [
    "band" => "AC/DC",
    "vocal" => "Brian",
    "solo_guitar" => "Angus",
    "base_guitar" => "Malcom",
    "bass_guitar" => "Cliff",
    "drums" => "Phil"
];

echo "<p> O vocal da banda AC/DC é {$acdc["vocal"]}, e junto com {$acdc["solo_guitar"]} fazem um otimo show!</p>";

$pearl = [
    "band" => "Pearl Jam",
    "vocal" => "Eddie",
    "solo_guitar" => "Mike",
    "base_guitar" => "Stone",
    "bass_guitar" => "Jeff",
    "drums" => "Jack"
];

$rockBands = [
    "acdc" => $acdc,
    "pearl_jam" => $pearl,
];

var_dump($rockBands);

//echo "<p>{$rockBands["pearl_jam"]["vocal"]}</p>";

foreach ($acdc as $item) {
    echo "<p>{$item}</p>";
}

foreach ($acdc as $key => $value) {
    echo "<p>{$value} is a {$key} of band! </p>";
}

foreach ($rockBands as $rockBand) {
    $art = "<article><h1>Nome da Banda %s</h1><p>%s</p><p>%s</p><p>%s</p><p>%s</p><p>%s</p></article>";
    vprintf($art, $rockBand );
}