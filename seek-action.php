<?php
/*
file: seek-action.php
purpose: seek a work query

* tip: use the search option in PHPMyAdmin in order to create the $sql
* tip: don't use the php escape characters \.

*/
require_once "header.php";

// ... add a menu here ...

/* from input to  query */
function word($what){
		
		/* mysqli database connection */
		require_once "db.php";

		/* headline printed */		
		print "<h2>Search: $what</h3>";
		
// SELECT * FROM `customers` ORDER BY `cust_name` ASC

		/* format the sql */
		$sql = "SELECT * FROM `customers` WHERE CONVERT(`cust_name` USING utf8) LIKE '%" 
		. $what 
		. "%' ORDER BY `cust_name`";

		echo $sql;
			
		/* mysqli query */
		$result =  $mysqli->query($sql); // query

		/* loop out the result */
		while($row = $result->fetch_assoc()){
   	 	echo "<p>" . $row['cust_name'] . "</p>"; // name of a row
   	}
   	
	mysqli_close($mysqli); 
				
	} // ends word

/* Fire the function off if the OK button has been pressed */
if(isset($_GET['OK'])) {
	word($_GET['seek']);
}

require_once "footer.php";
?>
