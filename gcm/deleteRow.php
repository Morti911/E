<?php
require_once 'config.php';
$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysql_select_db(DB_DATABASE);


mysql_query("DELETE FROM gcm_users WHERE id=".$_POST['id']) or die(mysql_error());
//echo $_POST['id'];
?>

