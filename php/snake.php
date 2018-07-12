<?php

define('DB_NAME', 'arthtxsk_demo');
define('DB_USER', 'arthtxsk_admin');
define('DB_PASSWORD', 'Arthur061300');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if(!$link){
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if(!$db_selected){
	die('Could not use ' . DB_NAME . mysql_error());
}

$score = $_POST['score'];

$sql = "UPDATE snakeHS SET score=$score WHERE 1";

if(!mysql_query($sql)) {
	die('Error: ' . mysql_error());
}

mysql_close();

?>
