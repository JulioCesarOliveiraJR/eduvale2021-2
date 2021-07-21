<?php
require __DIR__ . '/../../_config/funcoes.php';

tituloPagina("04 - Interpretação e operações pt1");

require __DIR__ . "/source/autoload.php";

CriarTitulo("__construct", __LINE__);

CriarTitulo("__clone", __LINE__);

CriarTitulo("__destruct", __LINE__);