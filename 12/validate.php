<?php
if (isset($_POST['vorname']) && isset($_POST['nachname']) && isset($_POST['ort']) && isset($_POST['wohn']) && isset($_POST['tv'])) {
  if(!empty($_POST['vorname']) && !empty($_POST['nachname']) && !empty($_POST['ort']) && !empty($_POST['wohn']) && !empty($_POST['tv'])) {
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $ort = $_POST['ort'];
    $wohn = $_POST['wohn'];
    $msg = $_POST['msg'];
    if (empty($msg))
      $msg = "Keine";
    $tvl = $_POST['tv'];
    $tv = "";
    for ($i=0; $i<count($tvl); $i++) {
      $tv .= $tvl[$i] . " ";
    }

    echo "<h2>Auswertung des Formulars</h2>";
    echo "<p>Vielen Dank für die Teilnahme an unserer Umfrage, Sie haben folgende Daten übermittelt.</p>";

    echo "Vorname: {$vorname} <br>";
    echo "Nachname: {$nachname} <br>";
    echo "Ort: {$ort} <br>";
    echo "Wohnung: {$wohn} <br>";
    echo "Beliebte TV Sendungen: {$tv} <br>";
    echo "Nachricht: {$msg} <br>";
    die();
  }
}
echo "Fehler";
?>
