<h2>
    PHP - töö pildifailidega
</h2>
<a href="https://www.metshein.com/unit/php-pildifailidega-ulesanne-14/">Link</a>

        <form method="post" action="">
            <select name="pildid">
                <option value="">Vali pilt</option>
                <?php
                $kataloog = 'content/img';
                $asukoht=opendir($kataloog);
                while($rida = readdir($asukoht)){
                    if($rida!='.' && $rida!='..'){
                        echo "<option value='$rida'>$rida</option>\n";
                    }
                }
                ?>
            </select>
            <input type="submit" value="Vaata">
            <input name="random" type="submit" value="Random">
        </form>
<?php
        $pildimassiv = array();// massiiv
        $asukoht =opendir("content/img/");
        while($rida = readdir($asukoht)){
            if($rida!='.' && $rida!='..'){
                array_push($pildimassiv, $rida);
            }
        }
        $randinteger = rand(0,3);
        $randpilt=$pildimassiv[$randinteger];

        if(!empty($_POST['pildid'])){
            drawPildInfo($_POST['pildid']);
        }
        else if(!empty($_POST['random'])){
            $randpilt=$pildimassiv[$randinteger];
            drawPildInfo($randpilt);
        }
        else{
            drawPildInfo($randpilt);
        }
        function drawPildInfo($pildid)
        {
           $pilt = $_POST['pildid'];
	$pildi_aadress = 'content/img/'.$pilt;
	$pildi_andmed = getimagesize($pildi_aadress);

	$laius = $pildi_andmed[0];
	$korgus = $pildi_andmed[1];
	$formaat = $pildi_andmed[2];
	$max_laius = 120;
	$max_korgus = 90;

	//suhtearvu leidmine
	if($laius <= $max_korgus && $korgus<=$max_korgus){
		$ratio = 1;
	} elseif($laius>$korgus){
		$ratio = $max_laius/$laius;
	} else {
		$ratio = $max_korgus/$korgus;
	}

	//uute mõõtmete leidmine
	$pisi_laius = round($laius*$ratio);
	$pisi_korgus = round($korgus*$ratio);

	echo '<h3>Originaal pildi andmed</h3>';
	echo "Laius: $laius<br>";
	echo "Kõrgus: $korgus<br>";
	echo "Formaat: $formaat<br>";

	echo '<h3>Uue pildi andmed</h3>';
	echo "Arvutamse suhe: $ratio <br>";
	echo "Laius: $pisi_laius<br>";
	echo "Kõrgus: $pisi_korgus<br>";
	echo "<img width='$pisi_laius' src='$pildi_aadress'><br>";


}











?>

</form>
<h1>Ülesanne 14</h1>
<h3>Suvaline pilt – koosta kood, mis valib kataloogist suvalise pildi</h3>
<h3>Pisipildid veergudes – koosta kood, mis kuvab pisipildid näiteks kolmes veerus. Piltidele klikkides kuvatakse suurem pilt ning veergude arvu saan koodis kiiresti muuta. Pisipildid võid tekitada Photoshsopi abiga.</h3>

