<?php
$a = ["HH" => "Hamburg", "B" => "Berlin", "S" => "Stuttgart"];
$a["F"] = "Frankfurt";
$a["HB"] = "Bremen";
unset($a["HB"]);
$a["F"] = "Frankfurt am Main";

echo "<table border=1>";
echo "<tr>";
echo "<td>Kennzeichen</td>";
echo "<td>Stadt</td>";
echo "</tr>";

foreach ($a as $key => $value) {
  echo "<tr>";
  echo "<td>$key</td>";
  echo "<td>$value</td>";
  echo "</tr>";
}

echo "</table>";
?>
