<!-- <!DOCTYPE html>
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
</head>  -->

<?php 
	session_start();
?>

<script>
	$(function(){
		window.scrollTo(0,500);
	});
</script>  


<!-- <body>
	<header>
	<nav class="navbar navbar-light navbar-expand-lg bg-danger" style="padding: 0;">
    <div class="container-fluid">
        <div class="navbar-brand">
            <img class="logo" src="images/logo.png" style="margin-left: 10px; width: 67px;">
        </div>
        <button class="nav-btn navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                	<a class="nav-link navbar-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                	<a class="nav-link navbar-link" href="#">CONTACT</a>
                </li>
                <li class="nav-item">
                	<a class="nav-link navbar-link nav-active" href="search.php">SEARCH</a>
                </li>
                <li class="nav-item">
                	<a class="nav-link navbar-link login px-4" href="#">LOGIN</a>
                </li>
            </ul>
        </div>
    </div>
	</nav>
</header> -->
	<div class="search-banner">
		<div class="container">
		<div class="row">
			<div class="col-md-6">
			<h1><strong>Link In Local</strong></h1>
			<form  id='search' name="search" action="search_user.php" method="get">
				<input type="text" name="location" autocomplete="off" placeholder="Enter Area" class="col-md-5 col-sm-12" required />
				<br/><br/>
				<input type="text" name="course" autocomplete="off" placeholder="Enter Course" class="col-md-5 col-sm-12" required />
				<br/><br/>
				<input type="submit" value="Search" class="btn btn-outline-dark">
			</form>
			</div>
			<div class="col-md-4 ml-auto">
				<img class="mt-2" width="100%" src="images/Banner.png" />
			</div>
		</div>
		</div>
	</div>
	<?php 
	if (!isset($_SESSION['search_id'])) 
		echo'
		<div id="search-tag">
			<center><span class="fas fa-search"></span>  SEARCH RESULT WILL APPEAR HERE</center>
		</div>';
	else{
		echo '
		<div id="search-result">
			<div class="map">';
				for ($i=0; $i <=2; $i++) {
					$x=rand(0,90);
					$r=(int)sqrt(2025-pow($x-45,2));
					$y=rand(-1*$r,$r)+42;
					echo '
					<i class="fas fa-map-marker-alt" alt="mark" data-toggle="modal" data-target="#Modal',$i,'"
					style="color: #c73cc7; font-size: 30px; position: absolute; top:',$y,'%; left:',$x,'%; cursor: pointer;" >
					
				</i>
				<div class="modal fade" id="Modal',$i,'" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="ModalLabel">Name',$_SESSION['search_id'][$i],'</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        ...
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <a href="';
				        	if(isset($_SESSION['user_id'])){
				        		echo "#";
				        	}
				        	else
				        		echo "signup.php";
				         echo '">
				        	<button type="button" class="btn btn-primary">View Profile</button>
				        </a>
				      </div>
				    </div>
				  </div>
				</div>	
			';}
			echo '
			</div>
		</div>';
	}
	unset($_SESSION['search_id']);
	?>
	
<!-- <footer class="bg-dark py-2 text-light">
	<small><center>© All Rights Reserved</center></small>
</footer>
</body>
</html> -->	