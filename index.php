
<!DOCTYPE html>
<html lang="en">

<?php session_start(); 

?>

<head>

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
        <a href="" class="active">Bisanthe Blogger Sitesi</a>
 
        <a href="#" id="myBtn"  class="giriscikis">
      
  Giriş/Kayit
      </a>
      
        <a href="">Ana Sayfa</a>
   
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
        </a>
      </div>
      
     


    <div class="responsivecontainer">
   

      <div class="content">
        <p style="font-size: 30px; text-align:center; font-weight: bold; color: black;">Dilediğiniz kategoride blogunuzu oluşturun.</p>


           
      </div> 
      

    </div>
    <div class="responsivecontainer" style="  background-color: rgb(66, 66, 70);">
       
      <div class="content">
        <p style="font-size: 30px; text-align:center; font-weight: bold; color: white;">
          Ücretsiz bir alan edinin
          Blogunuza mükemmel bir yuva sunun. Ücretsiz bir blog alanı edinin veya birkaç tıklamayla özel bir alan satın alın.
        </p>
        
           
      </div> 
    </div>
    <div class="responsivefooter">

       


    </div>
    
    <script>












  $("body").ready(function() {
    $("#myBtn").click(function() {
      
   
 
    window.location = 'login.php';

   

    });
 });




</script>

</body>

</html>