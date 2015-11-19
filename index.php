<?php
session_start();


if(isset($_SESSION['user'])!="")
{
	header("Location: index.php");
}

include_once 'functions.php';	


?>

<html lang="en"><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>PHP Demo</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">

</head>

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