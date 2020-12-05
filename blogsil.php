<?php
include("sistem/baglan.php");
$id=$_POST["id"];
$sil =$baglanti->prepare("delete from bloglar where blogid=?");
$islem=$sil->execute(array($id));
if($islem)
{
    $data['status']="success";
    $data['message']="Blog iptal işlemi tamamlandı.";
    echo json_encode($data);
}
?>