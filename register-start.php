<!DOCTYPE html>
<html lang="en"><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>Registration Page</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">

</head>

  <body class="homepage">

  	<!-- This navbar appears in more than one file. It can be abstracted out to avoid duplication -->
  	<nav class="navbar navbar-inverse navbar-fixed-top">
  		<div class="container">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
  					<span class="sr-only">Toggle navigation</span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>
  				<a class="navbar-brand  <?php echo setActive('login', $filename) ?>" href="index.php">PHP Demo</a>
  			</div>
  			<div id="navbar" class="collapse navbar-collapse">
  				<ul class="nav navbar-nav">
  					<li class="<?php echo setActive('login', $filename) ?>"><a href="#">Login</a></li>
  					<li class="<?php echo setActive('register', $filename) ?>"><a href="#about">Register</a></li>
  					<li><a href="#contact">Admin</a></li>
  				</ul>
  			</div><!--/.nav-collapse -->
  		</div>
  	</nav>
  	<div class="container">

  		<div class="starter-template">
  			<h1>Registration page</h1>
  		</div>
	
  		<form method="POST" action="">
  			<div class="form-group">
  				<label for="exampleInputEmail1">First name</label>
  				<input type="text" class="form-control" id="firstname" name="firstname" placeholder="Email">
  			</div>
  			<div class="form-group">
  				<label for="exampleInputEmail1">Last name</label>
  				<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Email">
  			</div>
  			<div class="form-group">
  				<label for="exampleInputEmail1">Email address</label>
  				<input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
  			</div>
  			<button type="submit" name="submit-btn" 	class="btn btn-default">Submit</button>
  		</form>
  	</div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body></html>
