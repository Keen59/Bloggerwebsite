
<!DOCTYPE html>
<html lang="en">

<?php session_start(); 

if(!isset($_SESSION['oturum']))
{
  header("refresh:0;url=index.php");
}


?>

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

<body  style=" background-color:#888; height: 100%;">


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
      
     <center>
      <div class="responsivecontainer2">
      
<?php
 include("sistem/baglan.php");
 $id=$_GET['id'];
 $icerik=$baglanti->query("select * from bloglar where blogid='$id'");
 $icerik->execute();
 while($veriler=$icerik->fetch(PDO::FETCH_ASSOC))
 {
  $kategoraid=$veriler['blogid'];
  $kulad=$veriler['kulad'];
  $konusu=$veriler['blogkonu'];
  $yazi=$veriler['blogyazi'];
  $tarih=$veriler['blogtarih'];
  $onay=$veriler['onay'];
 ?>
      <div class="blog-form">
          <hr style="width: 100%;" class='new4'>
                <div class="baslik">
                <H3>Konu Başlığı:<?=$konusu?></H3>
                <H4 style="float: left; margin-left:20px;">Paylaşılan Tarih:  <?=$tarih?></H4>
                </div>
                <div class="konu">
                <p>
                <?=$yazi?>
                </p>
                <H4 style="float: right; margin-right:20px;">Paylaşan Kullanıcı:  <?=$kulad?></H4>
    
  
                </div>
          <hr style="width: 100%;" class='new4'>
          </div>
  <?php
 }
?>
<div class="yorumyap">


<textarea style="resize:none; width:50%" id="yorum" class="form-control" name="yorum" placeholder="Yorum Yazınız:" rows="10" cols="80"></textarea>
<br><br>
<button id="yorumkayit" type="submit" style="vertical-align:middle"><span>Yorum yap </span></button>

<br><br>
<br>


</div>



<H2>Yorumlar</H2>

<?php 
$id=$_GET['id'];
 $icerik3=$baglanti->query("select * from yorumlar where yorum_id='$id'");
 $icerik3->execute();
 while($veriler3=$icerik3->fetch(PDO::FETCH_ASSOC))
 {

    $yorumkulad=$veriler3['paylasan_kulad'];
    $yorumyazi=$veriler3['yorum'];
    $yorumtarih=$veriler3['tarih'];

    $onay=$veriler3['onay'];
    if($onay=="onayli")
    {
        echo "<div class='yorum'>";
        echo "<hr style='width: 100%;' class='new4'>";
        echo "<H4 style='float: left;'>Yorumu yapan kullanici:$yorumkulad </H4>";
        echo "<p>$yorumyazi</p>";
        echo "<H4 style='float: right;'>Paylaşım tarihi:$yorumtarih </H4>";
        echo "<hr style='width: 100%;' class='new4'>";
        echo "</div>";
    }

 }
?>
</div>




      </div> 

</center>
 
 <div class="responsivefooter">

    


 </div>

    <script>



$(document).ready(function(){
    
    $("#yorumkayit").click(function(){
          var yorum = $('#yorum').val();
            var id=<?php echo $_GET['id'];?>;
        
          $.ajax({
              url: 'yorumkayit.php',
              type: "POST",
              
              data:{yorum:yorum,id:id},
                  success:function(data){
                    veri=JSON.parse(data);
                    swal({
                title: "Yorum paylaşma",
                text: veri.message,
                icon: veri.status,
                closeOnConfirm: false
        })
                      
          
              }   
          });
         
      });
    });


    $("#cikis").click(function() {
            $.ajax({
                url: 'logout.php',
                type:"POST",
                success: function(data){
                   
                    window.location = 'index.php';
                }
            });
        });



  $("body").ready(function() {
    $("#myBtn").click(function() {
    
     
    window.location = 'panel.php';

      

    });
 });




</script>

</body>

</html>