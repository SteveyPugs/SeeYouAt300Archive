<?php
// Make a MySQL Connection
mysql_connect('localhost', "username", "password") or die(mysql_error());
mysql_select_db("DBname") or die(mysql_error());
$strCheer = htmlentities($_GET['Cheer']);
$insertCheers = sprintf("INSERT INTO tblCheers (CheerMessage,CheerIPAddress) VALUES ('%s','%s')",mysql_real_escape_string($strCheer),mysql_real_escape_string($_SERVER['SERVER_NAME']));
mysql_query($insertCheers);
mysql_close();
?>