<?php
require __DIR__ . '/../../_config/funcoes.php';

tituloPagina("05 - PDOStatement e bind modes");

require __DIR__ . "/../source/autoload.php";

use Source\Database\Connect;

CriarTitulo("prepared statement", __LINE__);

CriarTitulo("stmt bind value", __LINE__);

CriarTitulo("stmt bind param", __LINE__);

CriarTitulo("stmt execute array", __LINE__);

CriarTitulo("bind column", __LINE__);
