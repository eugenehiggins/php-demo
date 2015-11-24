<?php
session_start();


if(isset($_SESSION['user'])!="")
{
	header("Location: index.php");
}

include_once 'functions.php';	


?>

<html lang="en">
  <?php include_once('head.php'); ?>

  <body class="homepage">

  	<nav class="navbar navbar-inverse navbar-fixed-top">
  		<div class="container">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
  					<span class="sr-only">Toggle navigation</span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>
  				<a class="navbar-brand" id="index" href="#">PHP Demo</a>
  			</div>
  			<div id="navbar" class="collapse navbar-collapse">
  				<ul class="nav navbar-nav">
  					<li class="active"><a href="#">Login</a></li>
  					<li><a href="register.php">Register</a></li>
  					<li><a href="admin.php">Admin</a></li>
  				</ul>
  			</div><!--/.nav-collapse -->
  		</div>
  	</nav>


  	<div class="container">

  		<div class="starter-template">
  			<h1>PHP CRUD Demonstration</h1>
  			<p class="lead">CRUD stands for Create, Retrieve, Update, Delete</p>
  		</div>
		<?php
			if(isset($_SESSION['message'])) {
			    printf("<div class='message %s'>%s</div>", $_SESSION['message']['type'],
			    $_SESSION['message']['message']);
			    unset($_SESSION['message']);
			}
		?>

  		<div class="panel panel-default">
			<div class="panel-body">
				<ul id="userlist">
					<li id="registered">Registered users: <?	?></li>
					<li id="pending">Pending registrations: <?	?></li>
				</ul>
			</div>
		</div>

  	</div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body></html>