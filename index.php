 <!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>PHP tunnitööd</title>
    <link rel="stylesheet" type="text/css" href="style/style1.css">
</head>
<body>
<?php
//header
include ("header.php");
?>
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


<?php
    //jalus
    include ("footer.php");
    echo "<br>";
    include ("content/kodu.php");
?>


</body>
</html>


