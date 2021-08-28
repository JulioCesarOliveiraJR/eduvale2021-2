<?php
     

    function functionName($arg1, $arg2, $arg3)
    {
        $body = [$arg1, $arg2, $arg3];
        return $body;
    }

    function optionArgs($arg1, $arg2 = true, $arg3 = null)
    {
        $body = [$arg1, $arg2, $arg3];
        return $body;
    }

    function calcImc()
    {
        global $weigth;
        global $height;

        return $weigth / ($height * $height);
    }


    function payTotal($price)
    {
        static $total;
        $total += $price;
        return "<p>O total a pagar é R$ " . number_format($total, 2, ",", "." ). "</p>";
    }


    function Alunos()
    {
        $nomes = func_get_args();
        $qtd = func_num_args();
        return [
           "Alunos" => $nomes, 
           "Quantidade" => $qtd
        ];
    }