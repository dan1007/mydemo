<?php
//引入工具类
require ("mysql_util.php");
mySqlSelect("SELECT id,brand,goods,standard,unit,price,store FROM shopping", function($r) {
	$a = array();
	while ($d = mysql_fetch_array($r)) {
		$h = "";
		$h -> id = $d["id"];
		$h -> brand = $d["brand"];
		$h -> goods = $d["goods"];
		$h -> standard = $d["standard"];
		$h -> unit = $d["unit"];
		$h -> price = $d["price"];
		$h -> store = $d["store"];
		$a[] = $h;
	}
	echo json_encode($a);
});
?>