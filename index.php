 <!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>PHP tunnitööd</title>
    <link rel="stylesheet" type="text/css" href="style/style1.css">
</head>
<body>
<header>
    <h1>PHPtunnitööd</h1>
</header>
<?php
//nav
include ("nav.php");
?>


<section>



<?php
if(isset($_GET["leht"])){
    include ("content/".$_GET["leht"]);
} else {
    echo "Tere tuulemast!";
}



?>
</section>

//jalus
<?php
    include ("footer.php");
    include ("kodu.php");
?>


</body>
</html>


