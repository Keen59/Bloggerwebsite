<?php
include ("sistem/baglan.php");
session_start();
if($_POST) 
{ 


           
            $kulad=$_SESSION['name'];
            $yorum=$_POST["yorum"];
            $id=$_POST["id"];
            $onay="beklemede";
            $date=date("Y-m-d h:i:sa");;
            if($yorum==null||$yorum=="")
            {
                $data['status']="error";
                $data['message']="Boş alan bırakmamalısınız.";
                echo json_encode($data);
            }
            else
            {
                $ekleme = $baglanti->prepare("INSERT INTO yorumlar SET yorum_id=?,paylasan_kulad=?,yorum=?,tarih=?,onay=?");
                $ekleme->execute(array($id,$kulad,$yorum,$date,$onay));
                $data['status']="success";
                $data['message']="Paylaşım Başarılı, Yorumun paylaşılması için admin onayı bekleniyor.";
                echo json_encode($data);
            }
       
        
    
}
else
{
    $data['status']="error";
    $data['message']="Paylaşım Başarısız.";
    echo json_encode($data);

}


		
?>