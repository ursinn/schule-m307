<?php
if(!isset($_POST['z1']) || empty($_POST['z1']))
  die();

if(!isset($_POST['z2']) || empty($_POST['z2']))
  die();

$z1 = $_POST['z1'];
$z2 = $_POST['z2'];

if($_POST['submit'] == 'Addieren') {
  $e = $z1+$z2;
  echo "{$z1} + {$z2} = {$e}";
}

if($_POST['submit'] == 'Subtrahieren') {
  $e = $z1-$z2;
  echo "{$z1} - {$z2} = {$e}";
}

if($_POST['submit'] == 'Multiplizieren') {
  $e = $z1*$z2;
  echo "{$z1} * {$z2} = {$e}";
}

if($_POST['submit'] == 'Dividieren') {
  $e = $z1/$z2;
  echo "{$z1} / {$z2} = {$e}";
}
?>
