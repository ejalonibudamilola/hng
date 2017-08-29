<?php 

#Database Connection

DEFINE('DB_HOST', 'localhost');
DEFINE('DB_USER', 'root');
DEFINE('DB_PASS', '');
DEFINE('DB_NAME', 'mydb');

$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS) OR DIE('couldnt connect' . mysqli_connect_error());

mysqli_select_db($db_conn, DB_NAME);

if($db_conn){
	echo 'Successful';
}

#Select

$q = "SELECT firstname, lastname FROM mydb";
$r = mysqli_query($db_conn, $q);

while($row = mysqli_fetch_array($r, MYSQLI_NUM)){
		echo "FirstName : {$row[0]} <br>" .
		 "LastName : {$row[1]} <br>";
}

echo "Fetch successful\n";
?>