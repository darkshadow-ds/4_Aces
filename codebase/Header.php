<!DOCTYPE html>
<html>
<head>
	<title>LinkInLocal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="CSS/style.css">    
    <script src="JQuery/jQuery3.5.1.js"></script>
    <script src="Bootstrap/js/bootstrap.js"></script>
    <script src="fontawesome/js/all.js"></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

</head>
<body>
<header>
	<nav class="navbar navbar-light navbar-expand-lg bg-danger" style="padding: 0;">
    <div class="container-fluid">
        <div class="navbar-brand">
            <a href="http://thefouraces-com.stackstaging.com/"><img class="logo" src="images/logo.png" style="margin-left: 10px; width: 67px;"></a>
        </div>
        <button class="nav-btn navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item"><a class="nav-link navbar-link nav-active" href="http://thefouraces-com.stackstaging.com/">HOME</a></li>
                <li class="nav-item"><a class="nav-link navbar-link" href="?page=contact">CONTACT</a></li>
                <li class="nav-item"><a class="nav-link navbar-link" href="?page=search">SEARCH</a></li>
            <?php if($_SESSION['id']){ ?>
                <li class="nav-item"><a class="nav-link navbar-link" href="?page=profile">MY PROFILE</a></li>
            <?php  }  ?>
            <?php if($_SESSION['id']){ ?>
                <li class="nav-item"><a class="nav-link navbar-link logout px-4" href="?process=logout">LOGOUT</a></li>
            <?php }else{   ?>
                <li class="nav-item"><a class="nav-link navbar-link login px-4" href="?page=login">LOGIN</a></li>
            <?php  }  ?>

            </ul>
        </div>
    </div>
	</nav>
</header>