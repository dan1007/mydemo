<?php
//引入工具类
require ("mysql_util.php");
mySqlSelect("SELECT id,name,price,gender FROM hero", function($r) {
	$a = array();
	while ($d = mysql_fetch_array($r)) {
		$h = "";
		$h -> id = $d["id"];
		$h -> name = $d["name"];
		$h -> price = $d["price"];
		$h -> gender = $d["gender"];
		$a[] = $h;
	}
	echo json_encode($a);
});
?>