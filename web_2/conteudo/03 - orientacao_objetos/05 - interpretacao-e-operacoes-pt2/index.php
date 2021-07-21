<?php
require __DIR__ . '/../../_config/funcoes.php';

tituloPagina("05 - Interpretação e operações pt2");

require __DIR__ . "/source/autoload.php";

CriarTitulo("__set", __LINE__);

CriarTitulo("__get", __LINE__);

CriarTitulo("__isset", __LINE__);

CriarTitulo("__call", __LINE__);

CriarTitulo("__toString", __LINE__);

CriarTitulo("__unset", __LINE__);
