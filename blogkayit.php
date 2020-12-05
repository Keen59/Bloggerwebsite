<?php
include ("sistem/baglan.php");
session_start();
if($_POST) 
{ 
    
	  	$baslik =$_POST["blogbaslik"];
		$yazi =$_POST["blogyazi"];
	  $kategori=$_POST["kategoriselect"];
	$name=$_SESSION['name'];
	$date=date("Y-m-d h:i:sa");;
        $ekleme = $baglanti->prepare("INSERT INTO bloglar SET kulad=?,blogkonu=?,blogyazi=?,blogtarih=?,kategori_adi=?,onay=?");
        $ekleme->execute(array($name,$baslik,$yazi,$date,$kategori,"beklemede"));
            $data['status']="success";
            $data['message']="Kayit Başarılı, Blogunu paylaşılması için admin onayı bekleniyor.";
            echo json_encode($data);
        
    
}
else
{
    $data['status']="error";
    $data['message']="Kayıt Başarısız.";
    echo json_encode($data);

}


		
?>