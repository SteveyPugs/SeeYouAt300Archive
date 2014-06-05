<?php
// Make a MySQL Connection
mysql_connect('localhost', "username", "password") or die(mysql_error());
mysql_select_db("dbname") or die(mysql_error());

$getCheers = "SELECT * FROM tblCheers ORDER BY CheerDate DESC";

$cheers = mysql_query($getCheers);
$cheerCount = mysql_num_rows($cheers);

if ($cheerCount != 0)
{
	while($row=mysql_fetch_assoc($cheers))
	{
		echo $row["CheerMessage"];
		echo " (" . date("M j, Y, g:i a",strtotime($row["CheerDate"])) . ")";
		echo "<br /><br />";	
	}
}
else
{
	echo "No current cheers";
}





mysql_close();
?>