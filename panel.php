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
                     <h2>Kullanici tablosu</h2>   
                    </div>
                </div>              
             
                    
                  <div id="seeuser" class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                 
                      <div class="div-square">
                        <center>
                        <a id="seeuser" href="uyepanel.php" >
                    <i class="fa fa-users fa-5x"></i>
                      <h4>Üye işlemleri</h4>
                      </a>
                        </center>
                  
                     
                      </div>
                     
                     
                  </div>

  
                  <div id="kategoriekle" class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                 
                      <div class="div-square">
                        <center>
                        <a id="kategoriekle" href="kategoriekle.php" >
                    <i class="fa fa-users fa-5x"></i>
                      <h4>Kategori işlemleri</h4>
                      </a>
                        </center>
                  
                     
                      </div>
                     
                     
                  </div>

               


                  <div id="adminpaneli" class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                      <center>
                      <a href="adminpanel.php" >
                      <i class="fa fa-key fa-5x"></i>
                      <h4>Admin </h4>
                      </a>
                          </center>
                     
                      </div>
                     
                     
                  </div>
                  <div id="seeuser" class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                 
                      <div class="div-square">
                        <center>
                        <a id="profilim" href="profil.php" >
                    <i class="fa fa-users fa-5x"></i>
                      <h4>Profilim</h4>
                      </a>
                        </center>
                  
                     
                      </div>
                     
                     
                  </div>


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


    
    var adminpaneli = document.getElementById("adminpaneli");
    var users = document.getElementById("seeuser");
    var kategori = document.getElementById("kategoriekle");
$( document ).ready(function() {
  var yetkisi='<?php  echo $_SESSION['yetki']; ?>';
  if(yetkisi==1)
  { 
    adminpaneli.style.display="block";   
    users.style.display="block";
    kategori.style.display="block";
  }
  else
  {
    kategori.style.display="none";
    users.style.display="none";
    adminpaneli.style.display="none";
  }
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
</body>
</html>
