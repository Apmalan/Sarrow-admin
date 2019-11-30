<?php
// Configurações de data e hora padrão para o sistema
date_default_timezone_set ( 'America/Sao_Paulo');
setlocale(LC_TIME,'pt-BR','pt_BR.utf-8','portuguese');

//Arquivos padrões
require_once (realpath(dirname(__FILE__).'/database.php'));

//Configurações de pastas
define('MODEL_PATH',realpath(dirname(__FILE__,2). '/models'));

?>