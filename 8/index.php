<?php
$zahlen = array(1,2,3,4,5,6,7,8,9,10);

for ($i=0;$i<count($zahlen); $i++) {
  echo "{$zahlen[$i]} <br>";
}

echo "<hr>";

echo "<pre>";
echo print_r($zahlen);
echo "</pre>";
?>
