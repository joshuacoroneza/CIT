<?php
$host = "sql6.freemysqlhosting.net";
$user = "sql6134051";
$pwd  = "Ij8IxqyH1p";
$db   = "sql6134051";

@$con = mysql_connect($host,$user,$pwd) or die("Could not connect");
@mysql_select_db($db,$con) or die("No database");

?>