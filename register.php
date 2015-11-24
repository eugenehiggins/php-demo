<?php
session_start();

if(isset($_SESSION['user'])!="")
{
	//header("Location: index.php");
}

include_once 'functions.php';

$link = mysqli_connect("localhost", "root", "crp5leez", "php_demo");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
}

// Detect if user hit the submit button
if(isset($_POST['submit-btn']))
{
	// Get the values from the form fields
	$firstname = mysqli_real_escape_string($link, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($link, $_POST['lastname']);
	$email = mysqli_real_escape_string($link, $_POST['email']);

	// Create the SQL command to send to the server
	$sql = "INSERT INTO users(firstname,lastname,email) VALUES('$firstname','$lastname','$email')";

	// If result is anything other than true then there's an error
	if (mysqli_query($link, $sql)) {
	    // Create a flash message showing the user that it worked
	    flash_message('alert alert-success','You are registered.');

	    //redirect to the home page
		header("Location: index.php");
	} else {
		// we shouldn't get here unless there's an error
		// Error 1062 is a specific error that means "this email already exists in the system, emails must be unique"
		// Since we're "catching" this error we can display a custom error message and continue on our way
		if (mysqli_errno($link) == 1062){
			flash_message('alert alert-danger', 'That email already exists.');
		} else {
			// This is for all other errors. It is less friendly. It just prints the error message that the server returns"
			printf("Error: %s\n", mysqli_sqlstate($link));
		}
	}

	// It always a good idea to close the link to the server/database when you are done
	// In big projects this can improve your site's performance
	mysqli_close($link);

}
?>

<!DOCTYPE html>
<html lang="en">
	<?php include_once('head.php'); ?>

  <body class="homepage">

	<?php include('navbar.php'); ?>

  	<div class="container">

  		<div class="starter-template">
  			<h1>Registration page</h1>
  		</div>

		<?php
			if(isset($_SESSION['message']) && $_SESSION['message']['type'] == 'alert alert-danger') {
			    printf("<div class='message %s'>%s</div>", $_SESSION['message']['type'],
			    $_SESSION['message']['message']);
			    unset($_SESSION['message']);
			}
		?>
	
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
    
    <script src="js/bootstrap.min.js"></script>

</body></html>
