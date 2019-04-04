<?php
//Aufgabe 1
echo "Aufgabe 1:<br>";
$jahr = 2019;
$jahr = $jahr-($jahr%100);
echo $jahr;

echo "<hr>";
//Aufgabe 2
echo "Aufgabe 2:<br>";
$k_r = 5;
$k_u = $k_r * 2 * pi();
$k_A = ($k_r**2) * pi();
$k_v = (4/3) * pi() * ($k_r**3);
echo "Umfang: {$k_u}<br>";
echo "Fläche: {$k_A}<br>";
echo "Kugelform: {$k_v}<br>";

echo "<hr>";
//Aufgabe 2a
echo "Aufgabe 2a:<br>";
$k_r = 5;
$k_u = $k_r * 2 * pi();
$k_A = ($k_r**2) * pi();
$k_d = $k_u/pi();
$k_v = (4/3) * pi() * ($k_r**3);
if ($k_r%2==0) {
  echo "Umfang: {$k_u}<br>";
  echo "Fläche: {$k_A}<br>";
  echo "Durchmesser: {$k_d}<br>";
} else {
  echo "Volumen: {$k_v}<br>";
}

echo "<hr>";
//Aufgabe 3
echo "Aufgabe 3:<br>";
for($i=20;$i>=0;$i--) {
  echo "{$i}<br>";
}

echo "<hr>";
//Aufgabe 3a
echo "Aufgabe 3a:<br>";
for($i=20;$i>=0;$i--) {
  echo "{$i}<br>";
}
for($i=0;$i<=40;$i=$i+2) {
  echo "{$i}<br>";
}

echo "<hr>";
//Aufgabe 3b
echo "Aufgabe 3b:<br>";

?>
