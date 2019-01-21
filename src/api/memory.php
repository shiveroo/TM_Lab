<?php
$output = exec('python ../py/memory_usage.py 2>&1');
//var_dump($output);

echo "\n".$output;
?>

