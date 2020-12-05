<?php
include("sistem/baglan.php");
$id=$_POST["id"];
$onay="onayli";
$guncelle=$baglanti->prepare("update bloglar set onay=:onay where blogid=:id");
$guncelle->execute(array(":onay"=>$onay,":id"=>$id));
if($guncelle)
{
    $data['status']="success";
    $data['message']="Onay işlemi tamamlandı.";
    echo json_encode($data);
}
?>