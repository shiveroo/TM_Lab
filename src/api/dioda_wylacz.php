<?php
$output = exec('python ../py/dioda_wylacz.py 2>&1');
//var_dump($output);

echo "\nReturn from py script ".$output;
?>
