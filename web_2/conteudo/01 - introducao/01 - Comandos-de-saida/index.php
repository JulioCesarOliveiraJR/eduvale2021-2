<?php
require __DIR__ . '/../../_config/funcoes.php';

tituloPagina("01 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */

CriarTitulo("echo", __LINE__);

    echo "<p>Olá Mundo!", " ", "<span class='tag'>Aula de Aplicações para WEB!</span>", "</p>";    
   
    $hello = "Olá Mundo!";
    $code = "<span class='tag'>Aula de Aplicações para WEB!</span>";

    echo "<p>$hello</p>";
    echo '<p>$hello</p>';

    $day = "dia";
    
    echo "<p>Falta 1 $day para final de semana!</p>";
    echo "<p>Faltam 2 {$day}s para final de semana!</p>";

    echo "<h3>{$hello}</h3>";
    echo "<h4>{$hello} {$code}</h4>";

    echo '<h3>' . $hello . ' ' . $code . '</h3>';
?>
    <h4><?= $hello; ?></h4>
<?php


/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */

CriarTitulo("print", __LINE__);

    print($hello);
    print $code;

    print "<h3>{$hello} {$code}</h3>";


/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */

CriarTitulo("print_r", __LINE__);
    $arr = [
        "faculdade" => "Eduvale",
        "curso" => "Aplicações para WEB",
        "class" => "Comandos de Saída"
    ];

    print_r($arr);

    echo "<pre>", print_r($arr, true) , "</pre>";

/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */

CriarTitulo("printf", __LINE__);

$article = "<article><h1>%s</h1><p>%s</p></article>";
//$article = "<article><h1>{$title}</h1><p>{$subtitle}</p></article>";
$title = "{$hello} {$code}";
$subtitle = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
    Laboriosam, tempora vero reiciendis similique esse possimus excepturi 
    ullam illo corrupti sunt ex ab voluptatibus placeat quisquam accusantium, 
    deserunt libero eaque aperiam!";

printf($article, $title, $subtitle);

echo sprintf($article, $title, $subtitle);

/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */

CriarTitulo("vprintf", __LINE__);

$article = "<article><h1>Faculdade %s</h1><p>Curso: %s</p><p>Aula: %s</p></article>";
vprintf($article, $arr);
/*Quero utilizar echo */
echo vsprintf($article, $arr);



/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */

CriarTitulo("var_dump", __LINE__);

var_dump(
    $arr,
    $hello,
    $code
);



