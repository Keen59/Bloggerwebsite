<?php

	include ("sistem/baglan.php");
session_start();

if($_POST) 
	{ 
		$name =$_POST["kulad"];
		$pass =$_POST["sifre"];
		$query  = $baglanti->query("SELECT * FROM kullanici WHERE kulad='$name' && sifre='$pass'",PDO::FETCH_ASSOC);
		if ( $say = $query -> rowCount() ){

			if( $say > 0 )
			{
				$query->execute();
			
			if($say = $query->fetch(PDO::FETCH_ASSOC))
			{
				$_SESSION['yetki']=$say['yetki'];
				$onay=$say['onay'];
			}
			if($onay=="beklemede")
			{
				$data['status']="error";
				$data['message']="Üyeliğiniz hala onaylanmadı lütfen bekleyiniz.";
				$_SESSION['oturum']=false;

				echo json_encode($data);
			}
			else
			{
				$_SESSION['oturum']=true;
				$_SESSION['name']=$name;
				$_SESSION['pass']=$pass;
				
				$data['status']="success";
				$data['message']="Giriş Başarılı Hoşgeldin";
				echo json_encode($data);
				
				
				
			}
			
				
			
			}
		}
		else
			{
				$_SESSION['oturum']=false;
			    

				$data['status']="error";
				$data['message']="Giriş başarısız hatalı kullanıcı adi/şifre girişi.";
				echo json_encode($data);
			}
  }

?>