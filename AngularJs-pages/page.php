<?php
	$con=mysql_connect("localhost:3306","root","");
	mysql_select_db("test2");
	$sql = "SELECT COUNT(0) FROM qicai";
	$r = mysql_query($sql);
	echo mysql_fetch_array($r)[0];
	mysql_free_result($r);
	mysql_close($con);
	?>
