<?php
	session_start();
	$_SESSION['search_id'] = array(1,2,3);
	header('Location:search.php');
?>