<?php
require __DIR__ . '/../../_config/funcoes.php';
tituloPagina("06 - Estruturas de repetição");

CriarTitulo("while, do while", __LINE__);
$i = 1;
$array = [];

while($i <= 5){
    $array[] = $i;
    $i++;
}

var_dump($array);


$i = 5;
$array = [];
do{
    $array[] = $i;
    $i--;
}while($i >= 1);

var_dump($array);



CriarTitulo("for", __LINE__);

for ($i = 1; $i <= 10; $i++) { 
    echo "<p>{$i}</p>";
}

CriarTitulo("break, continue", __LINE__);

for ($c = 1; $c <= 10; $c++) { 
    if ($c % 2 == 0 ) {
        continue;
    }

    if ($c > 6) {
        break;
    }

    echo "<p>Pulou + 2 ::  {$c}</p>";
}


CriarTitulo("foreach", __LINE__);

$array = [];
for ($i=0; $i < 3; $i++) { 
    $array[] = $i;
}

var_dump($array);

foreach ($array as $value) {
    var_dump($value);
}

foreach ($array as $key => $value) {
    var_dump("{$key} = {$value}" );
}