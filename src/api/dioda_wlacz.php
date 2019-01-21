<?php

//echo exec('whoami');
 
$output = exec('python ../py/dioda_wlacz.py 2>&1');
//var_dump($output);

echo "\nReturn from py script ".$output;

#exec('/opt/vc/bin/rapistill -o img.jpg');
#echo "zrobilem sdjecie";

?>
