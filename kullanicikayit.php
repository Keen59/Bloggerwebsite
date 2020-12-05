<?php
include ("sistem/baglan.php");

if($_POST) 
{ 
    
	  	$name =$_POST["kulad"];
		$pass =$_POST["sifre"];
        $hesab = $baglanti->prepare("SELECT * FROM kullanici WHERE kulad = ?");
        $hesab->execute(array($name));
        $kontrol = $hesab->fetch(PDO::FETCH_ASSOC);
            
             if($kontrol > 0)
             {

                $data['status']="error";
                $data['message']="Böyle Bir kullanici mevcut.";
                echo json_encode($data);
     
             }
             else
             {
                $ekleme = $baglanti->prepare("INSERT INTO kullanici SET kulad=?,sifre=?,yetki=?,onay=?");
                $ekleme->execute(array($name,$pass,"0","beklemede"));
                    $data['status']="success";
                    $data['message']="Kayit Başarılı Hoşgeldin";
                    echo json_encode($data);
             
             }
        
	 
}
else
{
    $data['status']="error";
    $data['message']="Kayıt Başarısız.";
    echo json_encode($data);

}


		
?>