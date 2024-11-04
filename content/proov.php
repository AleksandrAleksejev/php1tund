<?php
echo "Tere hommikust!";
echo "<br>";
$muutaja="PHP on skriptikeel";
echo "<strong>";
echo $muutaja;
echo "</strong>";
echo "<br>";
//Tekstifunktsioonid
echo "<h2>Tekstifunktsioonid<h2>";
$tekst="Esmaspäev on 4.november";
echo $tekst;
//kõik tähed on suured
echo "<br>";
echo strtoupper($tekst); // ei tunne ä täht
echo "<br>";
echo mb_strtoupper($tekst); // tunneb ä
//kõik tähed on väiksed
echo "<br>";
echo strtolower($tekst);
//iga sõna algab suure tähega
echo "<br>";
echo ucwords($tekst);
echo "<br>";
//teksti pikkus
echo "Teksti pikkus - " .strlen($tekst);
echo "<br>";
//eraldame esimesed 5 tähte
echo "Esimesed 5 tähte ".substr($tekst,0,5);
echo "<br>";
//leiame on positsiooni
$otsing="on";
echo "On asukoht lauses on " .strpos($tekst,$otsing);
echo "<br>";
// eralda esimene sõna kuni $otsing
echo "Esimese sõna"  .substr($tekst, 0,strpos($tekst,$otsing));
echo "<br>";
//eralda peale esimesest sõna, alates "on"
echo substr($tekst,strpos($tekst,$otsing));
echo "<br>";
echo "<h2>Kasutame veebis kasutavaid näidised</h2>";
echo "<br>";
echo "sõnade arv laused - ".str_word_count($tekst);//sõnade arv laused
//Iseseisvalt - teksti kärpimine
echo "<br>";
$tekst2="    Pohitoetus voetakse ara 11.11 kui volgnevused ei ole parandatud     ";
echo trim($tekst2, "P, o, k..n, w");
echo "<br>";
echo ltrim($tekst2);
echo "<br>";
echo rtrim($tekst2);
echo "<br>";
//

//Iseseisvalt - tekst kui massiiv
echo $tekst2[0];
echo '<br>';
echo $tekst2[4];
//
echo substr($tekst2, 3, 5);
echo '<br>';
echo substr($tekst2, 4, -13);
echo '<br>';
echo substr($tekst2, -8, 7);
echo '<br>';
//
print_r(str_word_count($tekst2, 1));
echo '<br>';
//
$sona = str_word_count($tekst2, 1);
print_r($sona);
echo '<br>';
echo $sona[2];
echo '<br>';
//
print_r(str_word_count($tekst2, 2));