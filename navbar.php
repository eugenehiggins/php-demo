<?php

$filename = explode(".", basename($_SERVER['PHP_SELF']))[0];

$jquery = '

	<script>
		$( document ).ready(function() {
		  $("#' . $filename . '").addClass("active").siblings().removeClass("active");
		});

	</script>
';
echo $jquery;

function setActive($element, $filename) {

	if ($element == $filename) {
		return "active";
	}
}

?> 

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
