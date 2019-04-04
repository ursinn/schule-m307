<?php
const X_MAX = 10;
const Y_MAX = 10;

echo "<table border='1' style='border-collapse: collapse;'>";

for ($y=0; $y<=Y_MAX; $y++) {
  echo "<tr>";
  if ($y==0)
    echo "<td> </td>";
  else
    echo "<td>y={$y}</td>";
  for ($x=1; $x<=X_MAX; $x++) {
    echo "<td>";
    if ($y==0)
      echo "x={$x}";
    else
      echo $x+$y;
    echo "</td>";
  }
  echo "</tr>";
}

echo "</table>";
?>
