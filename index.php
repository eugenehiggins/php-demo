<?php
session_start();

include_once 'includes/functions.php';	

?>

<html lang="en">
  <?php include_once 'includes/head.php' ; ?>

  <body class="homepage">

  	<?php include 'includes/navbar.php' ?>


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