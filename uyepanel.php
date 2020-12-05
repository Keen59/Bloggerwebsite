<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">


<?php session_start(); 

if(!isset($_SESSION['oturum']))
{
  header("refresh:0;url=index.php");
}


?>
<head>
    <title>Simple Responsive Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <meta charset="utf-8">
    <link rel = "icon" href ="images/BisantheGamesLogo.png"  type = "image/x-icon"> 
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
           <title>Anasayfa</title>      
</head>
    <script type="text/javascript">
    var title = document.title;
   var sitede=true;
    var alttitle = "Bisanthe Blogger sitesi";
    window.onblur = function () { document.title = alttitle;  sitede=false;};
    window.onfocus = function () 
    { 
        sitede=true;
        var msg="   "+title+"   Hoşgeldin   ";
var speed=200;
function scroll_title() {
    if(sitede==true)
    {
document.title=msg;
msg=msg.substring(1,msg.length)+msg.charAt(0);
setTimeout("scroll_title()",speed);
}
}
scroll_title();

};

var msg="   "+title+"  Hoşgeldin  ";
var speed=200;
function scroll_title() {
    if(sitede==true)
    {
document.title=msg;
msg=msg.substring(1,msg.length)+msg.charAt(0);
setTimeout("scroll_title()",speed);
}
}
scroll_title();


</script>


<style>
    .topnav {
    overflow: hidden;
    background-color: black;
  }
  
  .topnav a {

    float: right;
    display: block;
    color: white;
    text-align: center;
    padding: 30px 16px;
    text-decoration: none;
    font-size: 17px;

  }
  
  .topnav a:hover {

    
    color: #19e68c;
  

  }
  

  .topnav .active
  {
      float: left;
      background: linear-gradient(to left, black 50%, #19e68c 50%) right;
    background-size: 200%;
    transition: .5s ease-out;
  }
 

.topnav .active:hover {
    color: white;
    background-position: left;
}
.topnav .loginbuttonu:hover
{
  color: #19e68c;
}

  .topnav .icon {
    display: none;
  }

</style>
     
           
          
<body style="height: 100%;">


<div class="topnav" id="myTopnav">
        <a href="loggedindexx.php" class="active">Bisanthe Blogger Sitesi</a>
        <a id="cikis" href="#">Çıkış</a>
        <a href="#" id="myBtn" onclick="openloginpage()" class="giriscikis">
        <?php echo $_SESSION['name']; ?> 
  
      </a>
      
        <a href="loggedindexx.php">Ana Sayfa</a>
        <a id="Bloglar" href="blogolustur.php">Blog oluştur</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
        </a>
      </div>
      <div id="wrapper">
      <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 <div >


                 </div>
                    <li style="text-align: center;"><img src="images/loginuser.png" height="250px" width="250px" alt=""></li>
                <li style="text-align: center;">Kullanici adi:<?php echo $_SESSION['name'] ?></li>
                <li style="text-align: center;">Yetkisi:<?php echo $_SESSION['yetki'] ?></li>
               
                </ul>
            </div>

        </nav>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>Onay bekleyen kullanıcılar.</h2>   
                    </div>
                </div>      
  <table class="table">
    <thead>
      <tr>
        <th>Kullanici</th>
        <th>Sifre</th>
        <th>Yetki</th>
        <th>Onay</th>
   

			  <tr>
      </tr>
    </thead>
    <tbody>
     <?php 
	
  include("sistem/baglan.php");

  $icerik=$baglanti->query("select * from kullanici where onay='beklemede'");
  $icerik->execute();
  while($veriler=$icerik->fetch(PDO::FETCH_ASSOC))
  {
   
	  $kulad=$veriler['kulad'];
    $sifre=$veriler['sifre'];
    $yetki=$veriler['yetki'];
    $onay=$veriler['onay'];
    
  ?>
	  <tr>
<td><?=$kulad?></td>
<td><?=$sifre?></td>
<td><?=$yetki?></td>
<td><?=$onay?></td>
<td><a href="#" class="onaylabutton" id="<?php echo $kulad; ?>" ><img src="images/check.png" width="35px" height="35px" alt=""></a> </td>
<td><a href="#" class="iptalbutton" id="<?php echo $kulad; ?>" ><img src="images/delete.png" width="35px" height="35px" alt=""></a> </td>

      </tr>
	  <?php
  }

?>
    </tbody>
  </table>
  <div class="row">
                    <div class="col-lg-12">
                     <h2>Aktif kullanıcılar.</h2>   
                    </div>
                </div>              
                <table class="table">
    <thead>
      <tr>
        <th>Kullanici</th>
        <th>Sifre</th>
        <th>Yetki</th>
        <th>Onay</th>
        <th>Yetki yükselt</th>
        <th>Yetki düşür</th>
        <th>Engelle</th>
			  <tr>
      </tr>
    </thead>
    <tbody>
     <?php 
	
  include("sistem/baglan.php");

  $icerik=$baglanti->query("select * from kullanici where onay='onayli'");
  $icerik->execute();
  while($veriler=$icerik->fetch(PDO::FETCH_ASSOC))
  {
    if($_SESSION['name']!=$veriler['kulad'])
    {
	  $kulad=$veriler['kulad'];
    $sifre=$veriler['sifre'];
    $yetki=$veriler['yetki'];
    $onay=$veriler['onay'];
   

  ?>
	  <tr>
<td><?=$kulad?></td>
<td><?=$sifre?></td>
<td><?=$yetki?></td>
<td><?=$onay?></td>
<?php

      if($yetki==1)
      {

        echo  "<td><a href='#' style='display:none;' class='rutbeyukselt' id='$kulad' ><img src='images/yukarı.png' width='35px' height='35px' alt=''></a> </td>";
        echo  "<td><a href='#' style='display:block;' class='rutbedusur' id='$kulad' ><img src='images/asagi.png' width='35px' height='35px' alt=''></a> </td>";
      }
      else
      {
        echo  "<td><a href='#' style='display:block;' class='rutbeyukselt' id='$kulad' ><img src='images/yukarı.png' width='35px' height='35px' alt=''></a> </td>";
        echo  "<td><a href='#' style='display:none;' class='rutbedusur' id='$kulad' ><img src='images/asagi.png' width='35px' height='35px' alt=''></a> </td>";
      }


      ?>
    <td><a href="#" class="iptalbutton2" id="<?php echo $kulad?>" ><img src="images/delete.png" width="35px" height="35px" alt=""></a> </td>
      </tr>
      <?php
      }
  }

?>
    </tbody>
  </table>
    </div>
          
            </div>
            </div>
      

          

  
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   <script>



    $("#cikis").click(function() {
            $.ajax({
                url: 'logout.php',
                type:"POST",
                success: function(data){
                    window.location.href = 'index.php';
                }
            });
        });



       
function openloginpage()
{
  var oturumkontrol='<?php  echo $_SESSION['oturum']; ?>';
  if(oturumkontrol == false)
   {
    window.location = 'login.php';

       }
   else{
    window.location = 'panel.php';


       }

}
 
$(document).ready(function(){
    $(".onaylabutton").click(function(){
            var kuladi = $('.onaylabutton').attr('id');
            var islem="guncelle";
console.log(kuladi);
            $.ajax({
                url: 'uyepanel.php',
                type: "POST",
                data:{kuladi:kuladi,islem:islem},
                    success:function(data){
            
                    swal("Onay","Kullanıcı Onaylandı.","success");
                        
            
                }
            });
        });
      });

   
      $(document).ready(function(){
    
    $(".iptalbutton").click(function(){
            var kuladi = $('.iptalbutton').attr('id');
            var islem="iptal";
console.log(kuladi);
            $.ajax({
                url: 'uyepanel.php',
                type: "POST",
                
                data:{kuladi:kuladi,islem:islem},
                    success:function(data){
            
                    swal("İptal","Kullanıcı isteği iptal edildi.","success");
                        
            
                }
            });
        });
      });

      $(document).ready(function(){
    $(".iptalbutton2").click(function(){
            var kuladi = $(this).attr('id');
            var islem="iptal";
console.log(kuladi);
            $.ajax({
                url: 'uyepanel.php',
                type: "POST",
                
                data:{kuladi:kuladi,islem:islem},
                    success:function(data){
            
                    swal("İptal","Kullanıcı üyeliği iptal edildi.","success");
                        
            
                }
            });
        });
      })

      $(document).ready(function(){
    
    $(".rutbeyukselt").click(function(){
            var kuladi = $(this).attr('id');
            var islem="yukselt";

            $.ajax({
                url: 'uyepanel.php',
                type: "POST",
                
                data:{kuladi:kuladi,islem:islem},
                    success:function(data){
            
                    swal("Yetki","Kullanıcı yetkisi yükseltildi.","success");
                        
            
                }
            });
        });
      });
      $(document).ready(function(){
    
      $(".rutbedusur").click(function(){
            var kuladi = $(this).attr('id');
            var islem="rutbedusur";

            $.ajax({
                url: 'uyepanel.php',
                type: "POST",
                
                data:{kuladi:kuladi,islem:islem},
                    success:function(data){
            
                    swal("Yetki","Kullanıcı yetkisi düşürüldü.","success");
                        
            
                }
            });
        });
      });
</script>
<?php

if($_POST)
{    
  include("sistem/baglan.php");
  $islem=$_POST["islem"];
    if($islem=="guncelle")
    {
   
    $name=$_POST["kuladi"];
    $onay="onayli";
    $guncelle=$baglanti->prepare("update kullanici set onay=:onay where kulad=:kulad");
    $guncelle->execute(array(":onay"=>$onay,":kulad"=>$name));
    }

    if($islem=="iptal")
    {
   
    $name=$_POST["kuladi"];
    $sil =$baglanti->prepare("delete from kullanici where kulad=?");
    $islem=$sil->execute(array($name));
    }

    if($islem=="yukselt")
    {

    $name=$_POST["kuladi"];
    $tut=1;
    $guncelle=$baglanti->prepare("update kullanici set yetki=:yetki where kulad=:kulad");
    $guncelle->execute(array(":yetki"=>$tut,":kulad"=>$name));
 

    }

    if($islem=="rutbedusur")
    {
   
    $name=$_POST["kuladi"];
    $tut=0;
    $guncelle=$baglanti->prepare("update kullanici set yetki=:yetki where kulad=:kulad");
    $guncelle->execute(array(":yetki"=>$tut,":kulad"=>$name));
   
    }
   
}
?>
</body>
</html>
