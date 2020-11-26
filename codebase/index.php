<?php
    include("functions.php");
    include("Header.php");
    if($_GET['page']=="search"){
        include("search.php");
    }else if($_GET['page']=="login"){
         include("login.php");
    }else if($_GET['page']=="profile"){
        include("details.php");
   }else{
         include("Home.php");
    }
    include("Footer.php");


?>