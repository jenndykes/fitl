<?php

$id = $_GET['id'];

$link = mysql_connect("localhost", "root", "");
mysql_select_db("homestead");
$sql = "SELECT graphic FROM events WHERE id=$id";
$result = mysql_query("$sql");
$row = mysql_fetch_assoc($result);
mysql_close($link);

header("content-type: image/jpeg");
echo $row['graphic'];

?>