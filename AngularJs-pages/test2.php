<?php
//引入mysql工具
require ("mysql_util.php");
// LOL Hero类
class Hero {
	//对象属性
	var $id;
	var $name;
	var $price;
	var $gender;
	//构造函数
	function Hero($id, $name, $p, $g) {
		$this -> id = $id;
		$this -> name = $name;
		$this -> price = $p;
		$this -> gender = $g;
	}
}
//echo 'hello $http';
//查询数据库
mySqlSelect("SELECT id, name, price, gender FROM hero", function($r) {
	//预留存放对象的数组
	$arr = array();
	//遍历结果集
	while ($d = mysql_fetch_array($r)) {
		//读取数据
		$id = $d["id"];
		$n = $d["name"];
		$p = $d["price"];
		$g = $d["gender"];
		//实例化 hero 对象
		$h = new Hero($id, $n, $p, $g);
		//存入数据中
		$arr[] = $h;
	}
	//转为json字符串, 发送到页面上
	echo json_encode($arr);
});
?>