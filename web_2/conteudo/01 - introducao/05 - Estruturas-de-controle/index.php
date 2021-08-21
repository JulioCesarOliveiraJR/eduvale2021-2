<?php
require __DIR__ . '/../../_config/funcoes.php';

tituloPagina("05 - Estruturas de controle");

CriarTitulo("if, elseif, else", __LINE__);

$test = true;
if($test){
    echo "<p>Valor é Verdadeiro</p>";
}else{
    echo "<p>Valor é Falso</p>";
}

$age = 50;
if ($age < 20) {
    var_dump("Bandas Coloridas");
} elseif($age < 50){
    var_dump("Ótimas Bandas");
}else{
    var_dump("Rock And Roll Raiz");
}

$hour = 3;
    
if ($hour >= 5 && $hour < 23) {
    if ($hour < 7) {
        var_dump("Bob Marley");
    }else{
        var_dump("After Bridge");
    }
}else{
    var_dump("zzzzZZZZ");
}


CriarTitulo("isset, empty, !", __LINE__);

$rock = "";
if (isset($rock)) {  // Verifica se Existe
    var_dump("Rock And Roll!!");
}
else{
    var_dump("Die");
}

$rockAndRoll = "";
if (!empty($rockAndRoll)) {
    var_dump("Rock Existe e Toca {$rockAndRoll}");
}else{
    var_dump("Não existe ou não tem banda");  
}

CriarTitulo("switch", __LINE__);

$payment = 'pending';

switch ($payment) {
    case 'billet_printed':
        var_dump("Boleto Impresso");
        break;
    case 'canceled' :
           var_dump("Pagamento Cancelado");
           break;
    case 'past_due':
    case 'pending':
        var_dump("Aguardando Pagamento!");
        break; 
    case 'approved':
    case 'completed':
        var_dump("Pagamento Aprovado");
        break;
    default:
        var_dump("Erro ao processar pagamento!");
    break;
}




