<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root"," ") 
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("vokstech",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

mysql://b9987a332038c6:c5b2b9ba@us-cdbr-iron-east-01.cleardb.net/heroku_a901b1d45cbf6d0?reconnect=true

$databaseHost = 'us-cdbr-iron-east-01.cleardb.net';
$databaseName = 'heroku_a901b1d45cbf6d0';
$databaseUsername = 'b9987a332038c6';
$databasePassword = 'c5b2b9ba';

$connect = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

if(mysqli_connect_errno()){
	echo "Failed to connect";
}
 
?>