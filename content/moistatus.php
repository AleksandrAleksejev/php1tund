<?php
highlight_file('moistatus.php');
echo "<h2>Mõistatus. Euroopa riik</h2>";
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
?>
<div id="vanus">
    <form name="arvud" method='post'>
        <label for="sona">Sissesta oma sõna</label>
        <input type="text" name="sona" id="sona">
        <input type="submit" value="Kontroll" >
    </form>

    <?php
    $sona="Estonia";
    if(isset($_REQUEST["sona"]))
        if($_REQUEST["sona"]==$sona){
                echo "Õige";
            }
        else{
            echo "Vale";
        }

    ?>
</div>

