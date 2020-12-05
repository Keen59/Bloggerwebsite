
<?php
include("sistem/baglan.php");
    $idm=$_POST["id"];;
    $baslik=$_POST["baslik"];
    $yazi=$_POST["yazi"];
    $kategori=$_POST["kategori"];
    $guncelle=$baglanti->query("UPDATE bloglar SET blogkonu='$baslik', blogyazi='$yazi', kategori_adi='$kategori' WHERE blogid='$idm' ");


 
?>