<?php
include("sistem/baglan.php");
$name=$_POST["kuladi"];
$onay="onayli";
$guncelle=$baglanti->prepare("update kullanici set onay=:onay where kulad=:kulad");
$guncelle->execute(array(":onay"=>$onay,":kulad"=>$name));
if($guncelle)
{
    $data['status']="success";
    $data['message']="Onay işlemi tamamlandı.";
    echo json_encode($data);
}
?>