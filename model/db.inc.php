<?php

// $dbname = 'docouLOG4420';
// $dbhost = 'www.info.polymtl.ca';
// $dbuser = 'docouLOG4420';
// $dbpass = '3NfU5PF4';

$dbname = 'canadiens';
$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = '';

$link = mysql_connect($dbhost, $dbuser, $dbpass);
if ($link == false) {
	die('Could not connect to db: ' . mysql_error());
}

mysql_select_db($dbname);

function query_get($table, $where) {
    $query = "SELECT * FROM $table WHERE $where";
    $result = mysql_query($query);
    return mysql_fetch_assoc($result);
}

?>
