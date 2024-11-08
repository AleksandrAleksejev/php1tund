<?php
echo "<div id='kuupaev'>";
echo "<h2> Ajafunktsionid</h2>";
echo "Täna on".date("d.m.Y")."<br>";
date_default_timezone_set("Europe/Tallinn");
echo "<strong>";
echo "Tänane Tallinna kuupaev ja kellaeg on ";
echo "</strong>";
    echo date("d.m.Y G:i,", time())."<br>";
echo "date(`d.m.Y G:i´, time())";
echo "<br>";
echo "d- kuupaev 1-31";
echo "<br>";
echo"m- kuu numbrina 1-12";
echo "<br>";
echo "Y - aasta neljakohane";
echo "<br>";
echo "G - tunnisformaat 0-23";
echo "<br>";
echo "i - minutid 0-59";
echo "</div>";
?>
<div id="hooaeg">
    <h2>Väljasta vastavalthooajale pilt
        (kevad/suvi/sügis/talv)</h2>
    <?php
    $today = new DateTime();
    echo "Täna on ".$today->format("m-d-Y");

    //hooaeg
    $spring = new DateTime("March 20");
    $summer = new DateTime("June 21");
    $fall = new DateTime("September 22");
    $winter = new DateTime("December 21");
    echo "<br>";
    switch (true){
        //kevad
        case ($today>=$spring && $today<$summer):
            echo " Kevad";
            $pildi_aadress="content/img/vesna.jpg";
            break;
        //suvi
        case ($today>=$summer && $today<$fall):
            echo " Suvi";
            $pildi_aadress="content/img/leto.jpg";
            break;
        //sugis
        case ($today>=$fall && $today<$winter):
            echo " Sügis";
            $pildi_aadress="content/img/osen.jpg";
            break;
        //Talv
        case ($today>=$winter && $today<$spring):
            echo " Talv";
            $pildi_aadress="content/img/zima.jpg";
            break;
    }
    ?>
    <img src="<?=$pildi_aadress?>" alt="Hooaja pilt " width="20%">
</div>
    <div id="koolivaheaeg">
        <h2>Mitu päeva on koolivaheajani 23.12.2024</h2>
        <?php
        $kdate=date_create_from_format("d.m.Y","23.12.2024");
        $date=date_create();
        $diff=date_diff($kdate,$date);
        echo "jääb ". $diff->days." päeva";
        ?>

    </div>

    <div id="sunnipäev">
        <h2>Mitu päeva on sünnipaevani  29.03.2025</h2>
        <?php
        $kdate=date_create_from_format("d.m.Y","29.03.2025");
        $date=date_create();
        $diff=date_diff($kdate,$date);
        echo "jääb ". $diff->days." päeva";
        ?>
    </div>
    <div id="vanus">
        <h2>Kasutaja vanuse leidmine</h2>
        <form method="post" action="">
            Sissesta oma sünnikuupäev
            <input type="date" name="synd" placeholder="dd-mmm-yyyy">
            <input type="submit" value="OK">
        </form>
        <?php
        if(isset($_POST["synd"])){
            if(empty($_POST["synd"])){
                echo "sisesta oma sünnipäeva kuupäev";
            } else {
                $sdate=date_create($_POST["synd"]);
                $date=date_create();
                $diff=date_diff($sdate,$date);
                echo "Sa oled ". $diff->format("%y")." aastat vana";

            }
        }
        ?>
    </div>
        <div id="date">
            <h2>Massivi abil näidata kuu nimega</h2>
        <?php
        $kuud=array(1=>'jaanuar', 'februar', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december');
        $paev=date('d');
        $year=date('Y');
        $kuu=$kuud[date('n')];
        echo $paev.".".$kuu.".".$year;


        ?>
        </div>






