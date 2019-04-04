<?php
$test = "10";
echo $test . " (" . gettype($test) . ")<br>";
$test = $test*2;
echo $test . " (" . gettype($test) . ")<br>";
$test = $test+1.75;
echo $test . " (" . gettype($test) . ")<br>";
$test = 5 + "10 Tassen Tee";
echo $test . " (" . gettype($test) . ")<br>";
$test = $test + "Kaffetassen: 530";
echo $test . " (" . gettype($test) . ")<br>";
?>
