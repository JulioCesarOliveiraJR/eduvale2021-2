<?php
require __DIR__ . '/../../_config/funcoes.php';

tituloPagina("07 - Closures e generators");

CriarTitulo("closures", __LINE__);

$myAge = function ($year){
    $age = date("Y") - $year; 
    return "<h4>Você tem {$age} anos!</h4>";
};

echo $myAge(1996);
echo $myAge(1980);
echo $myAge(1985);
echo $myAge(1965);

$priceBR = function ($price){
    return number_format($price, 2, ",", ".");
};

echo "<p>O valor do projeto custa {$priceBR(3600)}. Fechado?</p>";


$myCart = [];
$myCart["totalPrice"] = 0;

$cardAdd = function ($item, $qtd, $price) use (&$myCart){
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item]; 
};

$cardAdd("HTML5", 1, 250);
$cardAdd("jQuery", 3, 36);

var_dump($myCart, $cardAdd);

CriarTitulo("generators", __LINE__);

$i = 4000;

function showDates($days){
    $saveDate = [];
    for ($day = 1; $day < $days; $day++) { 
        $saveDate[] = date("d/m/Y", strtotime("+{$day}days"));
    }
    return $saveDate;
}

echo "<div style='text-align: center;'>";
// foreach (showDates($i) as $date) {
//     echo "<small class='tag'>{$date}</small>";
// }
echo "</div>";

function generatorDates($days){
    
    for ($day = 1; $day < $days; $day++) { 
        yield date("d/m/Y", strtotime("+{$day}days"));
    }
}

echo "<div style='text-align: center;'>";
foreach (generatorDates($i) as $date) {
    echo "<small class='tag'>{$date}</small>";
}
echo "</div>";



