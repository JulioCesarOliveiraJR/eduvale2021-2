<?php
header("Content-Type: text/html; charset=utf-8");

date_default_timezone_set("America/Sao_Paulo");
set_error_handler("funcaoError");

ini_set("display_errors", 1);
ini_set("error_reporting", E_ALL);
ini_set('xdebug.overload_var_dump', 1);
ini_set('xdebug.show_local_vars', 0);

echo "<link rel='stylesheet' href='../../_config/estilo.css'/>";

function tituloPagina($className)
{
    echo "<title>{$className} | Aprendendo php</title>";
}

function CriarTitulo($session, $line, $color = null)
{
    $line = (!empty($line) ? " <span class='line-session'>| Linha {$line}</span>" : "");
    $session = (!empty($session) ? "[ {$session}{$line} ]" : "");
    $color = (!empty($color) ? "var(--{$color})" : "");
    echo "<div class='code line' style='background-color: {$color}'>{$session}</div>";
}

function funcaoError($error, $message, $file, $line)
{
    $color = ($error == E_USER_ERROR ? "red" : "yellow");
    echo "<div class='trigger' style='border-color: var(--{$color}); color:var(--{$color});'>[ Linha {$line} ] {$message}<small>{$file}</small></div>";
}
