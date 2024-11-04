<?php
echo "Mõistatus. Euroopa riik";
//6 подсказок при помощи текстовых функуий
// выводить список <ul> / <ol>
$riik="Estonia";
//str_replace()
echo "<br>";
echo "<ul>";
echo "Teksti pikkus - " .strlen($riik);
echo "<br>";
echo "Esimesed tähte ".substr($riik,0,1);
echo "<br>";
echo "Kolmas täht - ".$riik[2];
echo "<br>";
$otsing="a";
echo "Täht i on paigas - " .strpos($riik,$otsing);
echo "<br>";
echo "Teine täht - ".trim($riik, "E,a,t,o,n,i");
echo "<br>";
$otsi = array('s', 't', 'n',"i");
$asenda = '*';
echo str_replace($otsi,$asenda, $riik);
echo "<br>";

echo "</ul>";