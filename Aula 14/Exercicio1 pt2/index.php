<?php

require_once  'model\computador.php';

$pc = new app\model\Computador();

echo $pc->ligar() .'<br>';

echo $pc->desligar();