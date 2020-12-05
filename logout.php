<?php
 session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{

 
  $_SESSION['oturum']=false;
  $_SESSION['name']=null;


}

?>