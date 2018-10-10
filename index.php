<?php

$intervalo = 3;
$atendimentos = array(
    array('num_senha' => 6, 'priorit' => 8, 'dt_cheg' => '6'),
    array('num_senha' => 1, 'priorit' => 7, 'dt_cheg' => '1')
    ,array('num_senha' => 2, 'priorit' => 1, 'dt_cheg' => '2')
    ,array('num_senha' => 3, 'priorit' => 1, 'dt_cheg' => '3')
    ,array('num_senha' => 4, 'priorit' => 1, 'dt_cheg' => '4')
    ,array('num_senha' => 5, 'priorit' => 1, 'dt_cheg' => '5')    
    ,array('num_senha' => 7, 'priorit' => 1, 'dt_cheg' => '7')
);

foreach ($atendimentos as $key) {
    echo $key['num_senha'].' - ';
}
echo 'Ordenando <br>';
usort($atendimentos, function($a, $b) {
    return ($b['dt_cheg'] < $a['dt_cheg']) ? 1 : -1;
});

foreach ($atendimentos as $key) {
    echo $key['num_senha'].' - ';
}