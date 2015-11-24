<?php 

include('dbconnect.php');

// Create the SQL command to send to the server
	$sql = "SELECT `id`,`email` from `employees` LIMIT 200";

	$result = $link->query($sql); 

	if ($result->num_rows > 0) {
    // output data of each row
		$count = 0;
	    while($row = $result->fetch_assoc()) {
	        // echo "id: " . $row["id"]. " - email: " . $row["email"]."<br>";
	        $sql = "UPDATE `employees` SET `email`='blah$count@blah.com' WHERE id=" . $row["id"];
	        $result2 = $link->query($sql);
	        $count++;
	    }
	} else {
	    echo "0 results";
	}
	//$link->close();


	


	// It always a good idea to close the link to the server/database when you are done
	// In big projects this can improve your site's performance
	mysqli_close($link);

?>