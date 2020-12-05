<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">


<?php session_start(); 

if(!isset($_SESSION['oturum']))
{
  header("refresh:0;url=index.php");
}


?>
<head>
    <title>Admin paneli</title>
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
                     <h2>Admin paneli</h2>   
                    </div>
                </div>              
            <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Paylaşan Kullanici</th>
        <th>Blog başlığı</th>
        <th>Blog yazisi</th>
        <th>Paylaşım tarihi</th>
        <th>Onay</th>
        <th>Paylaşımı sil</th>
        <th>Yazıyı güncelle</th>
			  <tr>
      </tr>
    </thead>
    <tbody>
     <?php 

  include("sistem/baglan.php");

date_default_timezone_set('Europe/Istanbul');
$kulad=$_SESSION['name'];
  $icerik=$baglanti->query("select * from bloglar where kulad='$kulad'");
  $icerik->execute();
  while($veriler=$icerik->fetch(PDO::FETCH_ASSOC))
  {
	  $id=$veriler['blogid'];
	  $nickname=$veriler['kulad'];
$blogkonu=$veriler['blogkonu'];
$blogyazisi=$veriler['blogyazi'];	
$blogtarih=$veriler['blogtarih'];

$onay=$veriler['onay'];

  ?>
	  <tr>
<td><?=$id?></td>
<td><?=$nickname?></td>
<td><?=$blogkonu?></td>
<td><?=$blogyazisi?></td>
<td><?=$blogtarih?></td>
<td><?=$onay?></td>

<td><a href="#" class="silbutton" id="<?php echo $id; ?>" ><img src="images/delete.png" width="35px" height="35px" alt=""></a> </td>
<td><a href="blogupdate.php?id=<?=$id?>" class="blogdüzenle" id="<?php echo $id; ?>" ><img src="images/güncelle.png" width="35px" height="35px" alt=""></a> </td>
      </tr>
	  <?php
  }

?>
    </tbody>
  </table>
  <div class="row">
                    <div class="col-lg-12">
                     <h2>Admin paneli</h2>   
                    </div>
                </div>              
            <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Paylaşan Kullanici</th>
        <th>Yorum</th>
        <th>Paylaşım tarihi</th>
        <th>Onay</th>

     
			  <tr>
      </tr>
    </thead>
    <tbody>

     <?php 

  include("sistem/baglan.php");

/*
yorum_id
paylasan_kulad
yorum
tarih
onay*/
$kulad=$_SESSION['name'];
  $icerik2=$baglanti->query("select * from yorumlar where paylasan_kulad='$kulad'");
  $icerik2->execute();
  while($veriler2=$icerik2->fetch(PDO::FETCH_ASSOC))
  {
	  $yorumid=$veriler2['yorumid'];
	  $paylasankisi=$veriler2['paylasan_kulad'];
$yorum=$veriler2['yorum'];
$yorumtarih=$veriler2['tarih'];	
$yorumonay=$veriler2['onay'];


  ?>
	  <tr>
<td><?=$yorumid?></td>
<td><?=$paylasankisi?></td>
<td><?=$yorum?></td>
<td><?=$yorumtarih?></td>
<td><?=$yorumonay?></td>



<td><a href="#" class="silbuttonyorum" id="<?php echo $yorumid; ?>" ><img src="images/delete.png" width="35px" height="35px" alt=""></a> </td>
<td><a href="yorumupdate.php?id=<?=$yorumid?>" class="blogdüzenleyorum"><img src="images/güncelle.png" width="35px" height="35px" alt=""></a> </td>
      </tr>
	  <?php
  }

?>
    </tbody>
  </table>
    </div>
            </div>
            </div>
    <div style="background-color: black;" class="footer">
      
    
            <div class="row">
                <div  class="col-lg-12" >
                  
                </div>
            </div>
        </div>

        



        <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
        <script>







        $(".silbutton").click(function() {
              var id = $(this).attr('id');
            console.log(id);

            $.ajax({
                url: 'blogsil.php',
                type: "POST",
                data:{id:id}, 
                success:function(data){
                    veri=JSON.parse(data);

                    swal({
                                title: "İptal",
                                text: veri.message,
                                icon: veri.status,
                                closeOnConfirm: false
                        })
                       
                }
            });
            });




            $(".silbuttonyorum").click(function() {
              var id = $(this).attr('id');
              var islem="yorumsil";
            console.log(id);

            $.ajax({
                url: 'adminpanel.php',
                type: "POST",
                data:{id:id,islem:islem}, 
                success:function(data){
                  swal("Onay","Yorum Onaylandı.","success");
                       
                }
            });
            });

          

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


</script>
<?php

if($_POST)
{    
  include("sistem/baglan.php");
  $islem=$_POST["islem"];

    if($islem=="yorumsil")
    {
    $idm=$_POST["id"];
    $sil =$baglanti->prepare("delete from yorumlar where yorumid=?");
    $islem=$sil->execute(array($idm));
    }   
}
?>
</body>
</html>
