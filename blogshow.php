<html>
<head>

<meta charset="utf-8">
<link rel = "icon" href ="images/BisantheGamesLogo.png"  type = "image/x-icon"> 
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style2.css">
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<?php
 include("sistem/baglan.php");


  $icerik=$baglanti->query("select * from bloglar");
  $icerik->execute();
  while($veriler=$icerik->fetch(PDO::FETCH_ASSOC))
  {
   $kategoraid=$veriler['blogid'];
   $kulad=$veriler['kulad'];
   $konusu=$veriler['blogkonu'];
   $yazi=$veriler['blogyazi'];
   $tarih=$veriler['blogtarih'];
   $kategori=$veriler['kategori_adi'];
   $onay=$veriler['onay'];
   if($onay==true)
   {
    
    echo "<div class='bloggoster'>";
    echo "<div class='blogkategori'>";
    echo "<h4 >Blog Başlıgı $konusu</h4>";
    echo "</div>";
    echo "<div class='blogcontent'>";
    echo "<hr class='new4'>";
    echo "<h5 style='float:right; position:relative;'>Paylaşımı yapan: $kulad</h5>";
    echo "<p style='width:500px; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;'>$yazi</p>";
    echo "<a href='Blog.php?id=$kategoraid'>Devamını oku</a>";
    echo "<hr class='new4'>";
    echo "</div>";
    echo " </div>";

   }
  }


  ?>
</html>
