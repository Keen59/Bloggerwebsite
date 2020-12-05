
<?php
include("sistem/baglan.php");
    $idm=$_POST["id"];;
    $yorum=$_POST["yorum"];

    $guncelle=$baglanti->query("UPDATE yorumlar SET yorum='$yorum' WHERE yorumid='$idm' ");


 
?>