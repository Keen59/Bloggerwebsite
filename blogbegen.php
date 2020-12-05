
<?php
include("sistem/baglan.php");
    $idm=$_POST["id"];;
    $begen=$_POST["begeni"];
$begen++;
    $guncelle=$baglanti->query("UPDATE bloglar SET begeni='$begen' WHERE blogid='$idm' ");


 
?>