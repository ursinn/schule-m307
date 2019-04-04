<?php
define("MWST", 0.19);
define("EURO", "€");

$bezeichnung_tisch = "Schreibtisch";
$preis_tisch = 1999.00;
$bezeichnung_stuhl = "Bürostuhl";
$preis_stuhl = 589.00;
$bezeichnung_lampe = "Lampe";
$preis_lampe = 29.00;
$bezeichnung_pctisch = "Computertisch";
$preis_pctisch = 999.00;

$netto_gesamt = $preis_tisch+$preis_stuhl+$preis_lampe+$preis_pctisch;
$brutto_gesamt = $netto_gesamt + $netto_gesamt * MWST;
echo "Netto-Gesamtpreis: {$netto_gesamt} " . EURO;
echo "<br>";
echo "Brutto-Gesamtpreis: {$brutto_gesamt} " . EURO;
echo "<hr>";
$b_tisch = $preis_tisch + $preis_tisch * MWST;
$b_stuhl = $preis_stuhl + $preis_stuhl * MWST;
$b_lampe = $preis_lampe + $preis_lampe * MWST;
$b_pctisch = $preis_pctisch + $preis_pctisch * MWST;
echo "Brutto-Preis <b>{$bezeichnung_tisch}</b>: {$b_tisch} " . EURO;
echo "<br>";
echo "Brutto-Preis <b>{$bezeichnung_stuhl}</b>: {$b_stuhl} " . EURO;
echo "<br>";
echo "Brutto-Preis <b>{$bezeichnung_lampe}</b>: {$b_lampe} " . EURO;
echo "<br>";
echo "Brutto-Preis <b>{$bezeichnung_pctisch}</b>: {$b_pctisch} " . EURO;

?>
