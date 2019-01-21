<?php

$output = exec('python ../py/zdjecie.py 2>&1'); 
echo '<img src="img.jpg?' . time() . '" height="300" 
width="400" />';

?>
