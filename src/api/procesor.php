<?php
$output = exec('python ../py/procesor2.py 2>&1');
//var_dump($output);

echo "\n".$output;
?>
