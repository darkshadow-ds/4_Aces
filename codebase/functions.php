<?php
    session_start();
    include("link.php");
    if($_GET['process']=="logout"){
        session_unset();
    }
?>