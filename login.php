
<!DOCTYPE html>
<html lang="en">

<?php session_start(); 



if(!isset($_SESSION['oturum']))
{

$_SESSION['oturum']=false;

}
else if($_SESSION['oturum']==true)
{
  header("refresh:0;url=loggedindexx.php");
}


?>
<head>

    <meta charset="utf-8">
    <link rel = "icon" href ="images/BisantheGamesLogo.png"  type = "image/x-icon"> 
    <link rel="stylesheet" href="css/style.css">
 
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

<body id="body" onload="checkLoginStatus()" style="height: 100%;">



    <div class="topnav" id="myTopnav">
        <a href="index.php" class="active">Bisanthe Blogger Sitesi</a>
        <a href="index.php">Ana Sayfa</a>

        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
        </a>
      </div>
      
      <div id="myModal" class="modal">
      
<!-- Modal content -->
<div class="modal-content">

  <div class="modal-header">
   
    <h2 style="float: left;" >Giriş bölümü</h2>
  
  </div>
  <div class="modal-body">
  
    <div id="loginbolumu" class="loginbolumu">
    
    <div class="fotoyazi">
    <img src="images/loginuser2.png" alt="">
    <p>Giriş yapmak için bilgilerinizi giriniz.</p>
    </div>
    <form method="POST" id="girisform">

    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user" ></i></span>
      <input id="kulad" type="text" class="form-control" name="kulad" placeholder="Kullanıcı adiniz" required>
    </div>
    <br>
    <br>
    <br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="sifre" type="password" class="form-control" name="sifre" placeholder="Password" required>
    </div>
    <br>
    <br>
    <button name="button" id="buttongiris" type="submit"><span>Giriş</span></button>

   
    
  </form>
    </div>
  
  </div>
  <div class="modal-footer">
  <h2 style="float: right;" >Giriş bölümü</h2>
  

  </div>
</div>

</div>

<div id="myModalkayit" class="modal">
      
    <!-- Modal content -->
    <div class="modal-content">
    
      <div class="modal-header">
       
        <h2 >Kayıt bölümü</h2>
      
      </div>
      <div class="modal-body">
      
        <div id="kayitbolumu" class="loginbolumu">
            <img src="images/loginuser.png" alt="">
            <p>Kayıt yapmak için bilgilerinizi giriniz.</p>
           
            <form method="POST" id="kayitform">
        
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input id="kulad" type="text" class="form-control" name="kulad"  placeholder="Kullanıcı adiniz" required>
            </div>
            <br>
            <br>
            <br>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="sifre" type="password" class="form-control" name="sifre" placeholder="Password" required>
            </div>
            <br>
            <br>
            <button name="buttonkayit" id="buttonkayit" type="submit"><span>Kayit</span></button>
        
            
          </form>
            </div>
      
      </div>
      <div class="modal-footer">
        <h2 >Kayıt bölümü</h2>
      </div>
    </div>
    
    </div>


    <div class="responsivecontainer">
   

      <div class="content">
        <p style="font-size: 30px; text-align:center; font-weight: bold; color: black;">Giriş yapmak için aşağıdaki buttona tıklayın.</p>


           <button onclick="logingetir()" style="vertical-align:middle"><span>Giriş yap</span></button>
      </div> 
      

    </div>
    <div class="responsivecontainer" style="  background-color: rgb(66, 66, 70);">
       
      <div class="content">
        <p style="font-size: 30px; text-align:center; font-weight: bold; color: white;">
        Ücretsiz bir şekilde kayit olmak için aşağıda görmüş olduğunuz buttona tıklayın.
          
        </p>
        <button onclick="kayitgetir()" style="vertical-align:middle"><span>Kayit yap</span></button>
        
           
      </div> 
    </div>
    <div class="responsivefooter">

       


    </div>
    
    <script>



$(document).ready(function(){
$("#kayitform").submit(function(){
  var formID=$(this).attr('id');
  var formContent=$("#"+formID);
$.ajax({
type:"POST",
url:"kullanicikayit.php",
data:formContent.serialize(),
success:function(data2){
  veri=JSON.parse(data2);

  swal({
                title: "Kayit",
                text: veri.message,
                icon: veri.status,
               
        })
}


});
return false;

});
});
 


function logingetir()
{
    modal.style.display = "block";

}
function kayitgetir()
{
    modal2.style.display = "block";
}
var btn = document.getElementById("myBtn");
var cikis = document.getElementById("cikis");
var modal = document.getElementById("myModal");
var modal2 = document.getElementById("myModalkayit");

window.onclick = function(event) {
  if (event.target == modal) {

    modal.style.display = "none";
 
  }
  else
  if (event.target == modal2) {

modal2.style.display = "none";

}
}

$(document).ready(function(){
$("#girisform").submit(function(){
  var formID=$(this).attr('id');
  var formContent=$("#"+formID);
$.ajax({
        type:"POST",
        url:"loginyap.php",
        data:formContent.serialize(),
        success:function(data){
          veri=JSON.parse(data);

          swal({
                        title: "Giriş",
                        text: veri.message,
                        icon: veri.status,
                        closeOnConfirm: false
                }).then(function () {
                          if(veri.status=="success")
                          {
                                  window.location.href = 'loggedindexx.php';
                          }

                        }
                );
        }


});
return false;

});
});
</script>

</body>

</html>