# A search form for Forta in PHP

A frontend for the MySQL database.
See the chapter Ben Forta's "MySQL Crash Course" ch. 4.

For a more complex quey see my Sakila samples [seek-action.php](https://github.com/asathoor/sakila/blob/master/seek-action.php).

## db.php

The db.php is ignored, it could look like this:

~~~~
<?php
/** 
 * file: db.php 
 * purpose: connector
**/
$host = "localhost";
$password = "password";
$user = "root";
$database = "sakila";
// connect
$mysqli = new mysqli( $host, $user, $password, $database ); // creates the object
// if error
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; // if error messages
}
else {
    // if connected
    echo "Your're connected to the database via: " 
    . $mysqli->host_info 
    . "\n";
}
?>
~~~~
